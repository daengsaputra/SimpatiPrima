<?php

namespace App\Http\Controllers;

use App\Models\IkpaUnit;
use App\Models\IkpaUnitScore;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Throwable;

class IkpaController extends Controller
{
    public function index(): View
    {
        $this->ensureDefaultUnits();

        $period = $this->periodFromRequest(request());
        $units = $this->unitsForPeriod($period);

        return view('ikpa.index', [
            'metrics' => IkpaUnit::METRICS,
            'units' => $units,
            'period' => $period,
            'periodValue' => $period->format('Y-m'),
            'periodLabel' => $period->translatedFormat('F Y'),
            'groups' => [
                'punishment' => $units->filter(fn (IkpaUnit $unit) => $unit->status() === 'punishment')->values(),
                'warning' => $units->filter(fn (IkpaUnit $unit) => $unit->status() === 'warning')->values(),
                'aman' => $units->filter(fn (IkpaUnit $unit) => $unit->status() === 'aman')->values(),
            ],
        ]);
    }

    public function input(): View
    {
        $this->ensureDefaultUnits();
        $period = $this->periodFromRequest($request = request());

        return view('ikpa.input', [
            'metrics' => IkpaUnit::METRICS,
            'units' => $this->unitsForPeriod($period),
            'period' => $period,
            'periodValue' => $period->format('Y-m'),
            'periodLabel' => $period->translatedFormat('F Y'),
        ]);
    }

    public function masterdata(): View
    {
        $this->ensureDefaultUnits();

        return view('ikpa.masterdata', [
            'units' => IkpaUnit::query()->orderBy('id')->get(),
        ]);
    }

    public function saveScores(Request $request): RedirectResponse
    {
        $period = $this->periodFromRequest($request);
        $rules = [
            'period' => ['required', 'date_format:Y-m'],
            'units' => ['required', 'array'],
        ];

        foreach (IkpaUnit::query()->pluck('id') as $unitId) {
            foreach (array_keys(IkpaUnit::METRICS) as $metric) {
                $rules["units.{$unitId}.{$metric}"] = ['required', 'integer', 'min:0', 'max:100'];
            }
        }

        $validated = $request->validate($rules);

        DB::transaction(function () use ($validated, $period) {
            foreach ($validated['units'] as $unitId => $values) {
                IkpaUnitScore::query()->updateOrCreate(
                    [
                        'ikpa_unit_id' => (int) $unitId,
                        'period_month' => $period->toDateString(),
                    ],
                    collect($values)->only(array_keys(IkpaUnit::METRICS))->all()
                );
            }
        });

        return redirect()
            ->route('ikpa.input', ['period' => $period->format('Y-m')])
            ->with('status', 'Nilai IKPA periode ' . $period->translatedFormat('F Y') . ' berhasil disimpan.');
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'name' => ['required', 'string', 'max:80', 'unique:ikpa_units,name'],
        ]);

        try {
            IkpaUnit::query()->create($payload);
        } catch (Throwable) {
            return redirect()->route('ikpa.masterdata')->with('status_error', 'Unit IKPA tidak berhasil ditambahkan.');
        }

        return redirect()->route('ikpa.masterdata')->with('status', 'Unit IKPA berhasil ditambahkan.');
    }

    public function update(Request $request, IkpaUnit $ikpaUnit): RedirectResponse
    {
        $payload = $request->validate([
            'name' => ['required', 'string', 'max:80', 'unique:ikpa_units,name,' . $ikpaUnit->id],
        ]);

        try {
            $ikpaUnit->update($payload);
        } catch (Throwable) {
            return redirect()->route('ikpa.masterdata')->with('status_error', 'Unit IKPA tidak berhasil diperbarui.');
        }

        return redirect()->route('ikpa.masterdata')->with('status', 'Unit IKPA berhasil diperbarui.');
    }

    public function destroy(IkpaUnit $ikpaUnit): RedirectResponse
    {
        try {
            $ikpaUnit->delete();
        } catch (Throwable) {
            return redirect()->route('ikpa.masterdata')->with('status_error', 'Unit IKPA tidak berhasil dihapus.');
        }

        return redirect()->route('ikpa.masterdata')->with('status', 'Unit IKPA berhasil dihapus.');
    }

    private function validatedPayload(Request $request): array
    {
        $rules = [
            'name' => ['required', 'string', 'max:80'],
        ];

        foreach (array_keys(IkpaUnit::METRICS) as $metric) {
            $rules[$metric] = ['required', 'integer', 'min:0', 'max:100'];
        }

        return $request->validate($rules);
    }

    private function periodFromRequest(Request $request): Carbon
    {
        $value = $request->input('period', now()->format('Y-m'));

        try {
            return Carbon::createFromFormat('Y-m', $value)->startOfMonth();
        } catch (Throwable) {
            return now()->startOfMonth();
        }
    }

    private function unitsForPeriod(Carbon $period)
    {
        $this->ensureDefaultUnits();

        $units = IkpaUnit::query()->orderBy('id')->get();
        $scores = IkpaUnitScore::query()
            ->whereDate('period_month', $period->toDateString())
            ->get()
            ->keyBy('ikpa_unit_id');

        return $units->map(function (IkpaUnit $unit) use ($scores) {
            $score = $scores->get($unit->id);

            foreach (array_keys(IkpaUnit::METRICS) as $metric) {
                $unit->setAttribute($metric, (int) ($score->{$metric} ?? 0));
            }

            return $unit;
        });
    }

    private function ensureDefaultUnits(): void
    {
        if (IkpaUnit::query()->exists()) {
            return;
        }

        $defaults = [
            ['name' => 'BHO', 'score' => 30],
            ['name' => 'SDM', 'score' => 60],
            ['name' => 'RENKEU', 'score' => 80],
        ];

        foreach ($defaults as $default) {
            $unit = IkpaUnit::query()->create(array_merge(
                ['name' => $default['name']],
                array_fill_keys(array_keys(IkpaUnit::METRICS), $default['score'])
            ));

            IkpaUnitScore::query()->create(array_merge(
                [
                    'ikpa_unit_id' => $unit->id,
                    'period_month' => now()->startOfMonth()->toDateString(),
                ],
                array_fill_keys(array_keys(IkpaUnit::METRICS), $default['score'])
            ));
        }
    }
}
