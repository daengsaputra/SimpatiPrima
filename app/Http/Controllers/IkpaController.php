<?php

namespace App\Http\Controllers;

use App\Models\IkpaUnit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Throwable;

class IkpaController extends Controller
{
    public function index(): View
    {
        $this->ensureDefaultUnits();

        $units = IkpaUnit::query()->orderBy('id')->get();

        return view('ikpa.index_plain', [
            'metrics' => IkpaUnit::METRICS,
            'units' => $units,
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

        return view('ikpa.input_plain', [
            'metrics' => IkpaUnit::METRICS,
            'units' => IkpaUnit::query()->orderBy('id')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $this->validatedPayload($request);

        try {
            IkpaUnit::query()->create($payload);
        } catch (Throwable) {
            return redirect()->route('ikpa.input')->with('status_error', 'Unit IKPA tidak berhasil ditambahkan.');
        }

        return redirect()->route('ikpa.input')->with('status', 'Unit IKPA berhasil ditambahkan.');
    }

    public function update(Request $request, IkpaUnit $ikpaUnit): RedirectResponse
    {
        $payload = $this->validatedPayload($request);

        try {
            $ikpaUnit->update($payload);
        } catch (Throwable) {
            return redirect()->route('ikpa.input')->with('status_error', 'Unit IKPA tidak berhasil diperbarui.');
        }

        return redirect()->route('ikpa.input')->with('status', 'Unit IKPA berhasil diperbarui.');
    }

    public function destroy(IkpaUnit $ikpaUnit): RedirectResponse
    {
        try {
            $ikpaUnit->delete();
        } catch (Throwable) {
            return redirect()->route('ikpa.input')->with('status_error', 'Unit IKPA tidak berhasil dihapus.');
        }

        return redirect()->route('ikpa.input')->with('status', 'Unit IKPA berhasil dihapus.');
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
            IkpaUnit::query()->create(array_merge(
                ['name' => $default['name']],
                array_fill_keys(array_keys(IkpaUnit::METRICS), $default['score'])
            ));
        }
    }
}
