<style>
    body,
    .ikpa-flow,
    .ikpa-flow input,
    .ikpa-flow button,
    .ikpa-flow table,
    .ikpa-flow select,
    .ikpa-flow textarea {
        font-family: "Segoe UI", Arial, sans-serif !important;
        letter-spacing: 0 !important;
    }

    .ikpa-flow input,
    .ikpa-flow select,
    .ikpa-flow textarea,
    .ikpa-flow button {
        color-scheme: light;
    }

    body.theme-dark,
    body.theme-dark .content-body,
    body.theme-dark .ikpa-flow {
        background: #020617 !important;
        color: #e5e7eb !important;
    }

    body.theme-dark .flow-hero {
        background: linear-gradient(100deg, #08111f 0%, #0f172a 64%, #051a3d 64%, #020617 100%) !important;
        border-bottom-color: rgba(148, 163, 184, .22) !important;
    }

    body.theme-dark .flow-hero:before { background: #2563eb !important; }
    body.theme-dark .flow-hero:after { background: #0f172a !important; }

    body.theme-dark .flow-brand,
    body.theme-dark .flow-title,
    body.theme-dark .flow-subtitle,
    body.theme-dark .panel-heading,
    
    body.theme-dark .metric-name,
    body.theme-dark .total-label,
    body.theme-dark .toast-pop__title,
    body.theme-dark .flow-toast strong,
    body.theme-dark .login-modal h2 {
        color: #f8fafc !important;
    }
    
    body.theme-dark .unit-card h3{
        color: #d49800 !important;
    }
    body.theme-dark .flow-sidebar {
        background: linear-gradient(180deg, #0f172a, #020617) !important;
        border: 1px solid rgba(148, 163, 184, .24) !important;
        box-shadow: 0 18px 34px rgba(0, 0, 0, .4) !important;
    }

    body.theme-dark .data-panel,
    body.theme-dark .panel,
    body.theme-dark .unit-card,
    body.theme-dark .feature,
    body.theme-dark .total-card,
    body.theme-dark .toast-pop,
    body.theme-dark .flow-toast,
    body.theme-dark .login-modal__panel {
        background: #0f172a !important;
        border-color: rgba(148, 163, 184, .28) !important;
        color: #e5e7eb !important;
        box-shadow: 0 16px 34px rgba(0, 0, 0, .34) !important;
    }

    body.theme-dark .table-wrap,
    body.theme-dark table,
    body.theme-dark th,
    body.theme-dark td {
        background: #0f172a !important;
        border-color: rgba(148, 163, 184, .22) !important;
        color: #e5e7eb !important;
    }

    body.theme-dark th {
        background: #111827 !important;
        color: #cbd5e1 !important;
    }

    body.theme-dark input[type="text"],
    body.theme-dark input[type="date"],
    body.theme-dark input[type="month"],
    body.theme-dark input[type="number"],
    body.theme-dark input[type="password"],
    body.theme-dark select,
    body.theme-dark textarea {
        background: #020617 !important;
        border-color: rgba(148, 163, 184, .36) !important;
        color: #f8fafc !important;
        color-scheme: dark;
    }

    body.theme-dark input[type="date"]::-webkit-calendar-picker-indicator,
    body.theme-dark input[type="month"]::-webkit-calendar-picker-indicator {
        filter: invert(1) brightness(1.35);
        opacity: .9;
    }

    body.theme-dark input[type="number"]::-webkit-inner-spin-button,
    body.theme-dark input[type="number"]::-webkit-outer-spin-button {
        opacity: .85;
        filter: invert(1);
    }

    body.theme-dark input:focus,
    body.theme-dark select:focus,
    body.theme-dark textarea:focus {
        border-color: #60a5fa !important;
        box-shadow: 0 0 0 3px rgba(96, 165, 250, .22) !important;
        outline: none !important;
    }

    body.theme-dark tbody tr:hover td {
        background: rgba(37, 99, 235, .12) !important;
    }

    body.theme-dark .field label,
    body.theme-dark .toast-pop__message,
    body.theme-dark .flow-toast span,
    body.theme-dark .login-modal label {
        color: #cbd5e1 !important;
    }

    body.theme-dark .period-label,
    body.theme-dark .period-badge {
        background: rgba(37, 99, 235, .2) !important;
        color: #bfdbfe !important;
    }

    body.theme-dark .feature {
        color: #bfdbfe !important;
    }

    body.theme-dark .feature strong,
    body.theme-dark .feature span {
        color: inherit !important;
    }

    body.theme-dark .metric-arrow.flat {
        color: #94a3b8 !important;
    }

    body.theme-dark .total-score {
        text-shadow: 0 1px 0 rgba(0, 0, 0, .28);
    }

    body.theme-dark .status-box.warning,
    body.theme-dark .status-box.warning .status-toggle,
    body.theme-dark .status-box.warning .status-content p {
        color: #172033 !important;
    }

    body.theme-dark .status-box.warning .status-unit-item {
        background: rgba(15, 23, 42, .13) !important;
        color: #172033 !important;
    }

    body.theme-dark .status-box.warning .status-toggle i {
        background: rgba(15, 23, 42, .16) !important;
    }

    body.theme-dark .status-box.warning .status-count-badge {
        background: #fff !important;
        color: #172033 !important;
        box-shadow: 0 10px 18px rgba(23, 32, 51, .24), inset 0 0 0 2px rgba(255, 196, 0, .28) !important;
    }

    body.theme-dark .status-box.punishment .status-unit-item,
    body.theme-dark .status-box.aman .status-unit-item {
        background: rgba(255, 255, 255, .16) !important;
        color: #fff !important;
    }

    body.theme-dark .ikpa-overview {
        background:
            radial-gradient(circle at 50% -18%, rgba(59, 130, 246, .22), transparent 34%),
            linear-gradient(180deg, #061633 0%, #020617 100%) !important;
        border-color: rgba(96, 165, 250, .22) !important;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .08), 0 18px 42px rgba(2, 6, 23, .32) !important;
    }

    body.theme-dark .ikpa-overview-meter,
    body.theme-dark .ikpa-overview-chart {
        background:
            radial-gradient(circle at 22% 0%, rgba(37, 99, 235, .34), transparent 34%),
            linear-gradient(145deg, rgba(5, 36, 85, .96), rgba(3, 14, 42, .98)) !important;
        border-color: rgba(59, 130, 246, .28) !important;
    }

    body.theme-dark .total-card,
    body.theme-dark .panel,
    body.theme-dark .data-panel {
        color: #e5e7eb !important;
    }

    body.theme-dark .bar {
        background: #1e293b !important;
    }

    body.theme-dark .login-modal__backdrop {
        background: rgba(2, 6, 23, .72) !important;
    }

    body.theme-dark .login-modal__close {
        background: #1e293b !important;
        color: #bfdbfe !important;
    }

    .ikpa-running-notice {
        display: grid;
        grid-template-columns: 138px minmax(0, 1fr);
        align-items: center;
        min-height: 37px;
        border-top: 1px solid #d8d0c5;
        border-bottom: 1px solid #ded5c9;
        background: linear-gradient(180deg, #ede8df 0%, #e2dcd2 100%);
        color: #8f3c22;
        box-shadow: inset 0 1px 0 rgba(255,255,255,.72), 0 2px 5px rgba(2, 6, 23, .18);
        overflow: hidden;
    }

    body:not(.theme-dark) .unit-card.warning .total-score {
        color: #9a6a00 !important;
    }

    body:not(.theme-dark),
    body:not(.theme-dark) .content-body,
    body:not(.theme-dark) .ikpa-flow {
        background: #f4f8fc !important;
        color: #08173d !important;
    }

    body:not(.theme-dark) .data-panel,
    body:not(.theme-dark) .panel,
    body:not(.theme-dark) .unit-card,
    body:not(.theme-dark) .feature,
    body:not(.theme-dark) .total-card,
    body:not(.theme-dark) .toast-pop,
    body:not(.theme-dark) .flow-toast,
    body:not(.theme-dark) .login-modal__panel {
        background: rgba(255, 255, 255, .96) !important;
        border-color: rgba(8, 42, 92, .12) !important;
        color: #08173d !important;
        box-shadow: 0 12px 26px rgba(8, 42, 92, .08) !important;
    }

    body:not(.theme-dark) input[type="text"],
    body:not(.theme-dark) input[type="date"],
    body:not(.theme-dark) input[type="month"],
    body:not(.theme-dark) input[type="number"],
    body:not(.theme-dark) input[type="password"],
    body:not(.theme-dark) select,
    body:not(.theme-dark) textarea {
        background: #ffffff !important;
        border-color: #d9e2ef !important;
        color: #101828 !important;
        color-scheme: light;
    }

    body:not(.theme-dark) input[type="date"]::-webkit-calendar-picker-indicator,
    body:not(.theme-dark) input[type="month"]::-webkit-calendar-picker-indicator {
        opacity: .78;
    }

    body:not(.theme-dark) input:focus,
    body:not(.theme-dark) select:focus,
    body:not(.theme-dark) textarea:focus {
        border-color: #2563eb !important;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, .15) !important;
        outline: none !important;
    }

    body:not(.theme-dark) tbody tr:hover td {
        background: #f1f6ff !important;
    }

    body:not(.theme-dark) .flow-sidebar {
        background: linear-gradient(180deg, #ffffff 0%, #f4f8fc 100%) !important;
        border: 1px solid rgba(8, 42, 92, .14) !important;
        color: #082a5c !important;
        box-shadow: 0 18px 34px rgba(8, 42, 92, .12) !important;
    }

    body:not(.theme-dark) .ikpa-sidebar-logo {
        border-bottom-color: rgba(8, 42, 92, .14) !important;
    }

    body:not(.theme-dark) .ikpa-sidebar-toggle,
    body:not(.theme-dark) .flow-nav a,
    body:not(.theme-dark) .flow-nav button,
    body:not(.theme-dark) .ikpa-theme-toggle {
        background: transparent !important;
        border-color: transparent !important;
        color: #0f2857 !important;
    }

    body:not(.theme-dark) .ikpa-sidebar-toggle {
        background: rgba(8, 42, 92, .06) !important;
        border-color: rgba(8, 42, 92, .16) !important;
    }

    body:not(.theme-dark) .flow-nav a:hover,
    body:not(.theme-dark) .flow-nav button:hover,
    body:not(.theme-dark) .ikpa-theme-toggle:hover {
        background: rgba(8, 42, 92, .08) !important;
        color: #082a5c !important;
    }

    body:not(.theme-dark) .flow-nav a.active {
        background: linear-gradient(135deg, #ff161f, #f64b55) !important;
        border-color: rgba(255, 22, 31, .32) !important;
        color: #fff !important;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .48), 0 12px 22px rgba(245, 31, 43, .2) !important;
    }

    body:not(.theme-dark) .flow-sidebar-copy {
        color: #0f2857 !important;
    }

    body:not(.theme-dark) .flow-illustration {
        background: #eef5ff !important;
        box-shadow: inset 0 0 38px rgba(8, 42, 92, .08), 0 12px 24px rgba(8, 42, 92, .1) !important;
    }

    body:not(.theme-dark).ikpa-sidebar-collapsed .flow-nav a::after,
    body:not(.theme-dark).ikpa-sidebar-collapsed .flow-nav button::after,
    body:not(.theme-dark).ikpa-sidebar-collapsed .ikpa-sidebar-toggle::after {
        background: #ffffff !important;
        border-color: rgba(8, 42, 92, .16) !important;
        color: #0f2857 !important;
        box-shadow: 0 14px 28px rgba(8, 42, 92, .16) !important;
    }

    body:not(.theme-dark).ikpa-sidebar-collapsed .flow-nav a::before,
    body:not(.theme-dark).ikpa-sidebar-collapsed .flow-nav button::before,
    body:not(.theme-dark).ikpa-sidebar-collapsed .ikpa-sidebar-toggle::before {
        background: #ffffff !important;
        border-color: rgba(8, 42, 92, .16) !important;
    }

    body:not(.theme-dark) .status-box.warning,
    body:not(.theme-dark) .status-box.warning .status-toggle,
    body:not(.theme-dark) .status-box.warning .status-content p {
        color: #172033 !important;
    }

    body:not(.theme-dark) .status-box.warning .status-unit-item {
        background: rgba(15, 23, 42, .12) !important;
        color: #172033 !important;
    }

    body:not(.theme-dark) .status-box.warning .status-toggle i {
        background: rgba(15, 23, 42, .14) !important;
    }

    body:not(.theme-dark) .status-box.warning .status-count-badge {
        background: #fff !important;
        color: #172033 !important;
        box-shadow: 0 10px 18px rgba(23, 32, 51, .2), inset 0 0 0 2px rgba(255, 196, 0, .28) !important;
    }

    body:not(.theme-dark) .ikpa-overview {
        background:
            radial-gradient(circle at 50% -16%, rgba(37, 99, 235, .12), transparent 34%),
            linear-gradient(180deg, #ffffff 0%, #eef5ff 100%) !important;
        border-color: rgba(8, 42, 92, .12) !important;
        box-shadow: 0 14px 32px rgba(8, 42, 92, .1) !important;
    }

    body:not(.theme-dark) .ikpa-overview-meter,
    body:not(.theme-dark) .ikpa-overview-chart {
        background:
            radial-gradient(circle at 20% 0%, rgba(37, 99, 235, .38), transparent 34%),
            linear-gradient(145deg, rgba(5, 36, 85, .96), rgba(3, 14, 42, .98)) !important;
        border-color: rgba(96, 165, 250, .22) !important;
        color: #eaf6ff !important;
    }

    body:not(.theme-dark) .ikpa-overview-meter h2,
    body:not(.theme-dark) .ikpa-overview-chart h2,
    body:not(.theme-dark) .ikpa-overview-points b,
    body:not(.theme-dark) .ikpa-chart-metrics b,
    body:not(.theme-dark) .ikpa-chart-metrics strong {
        color: #fff !important;
    }

    body:not(.theme-dark) .ikpa-overview-points small {
        color: rgba(226, 232, 240, .74) !important;
    }

    body:not(.theme-dark) .ikpa-overview-points i,
    body:not(.theme-dark) .ikpa-chart-metrics i {
        background: rgba(37, 99, 235, .38) !important;
        color: #8bd7ff !important;
    }

    body:not(.theme-dark) .ikpa-chart-metrics span {
        background: rgba(8, 35, 86, .72) !important;
        border-color: rgba(37, 99, 235, .34) !important;
    }

    body:not(.theme-dark) .ikpa-gauge__dial:after {
        background:
            radial-gradient(circle at 50% 92%, rgba(0, 192, 255, .18), transparent 28%),
            linear-gradient(180deg, rgba(3, 24, 64, .88), rgba(2, 10, 30, .96)) !important;
    }

    body:not(.theme-dark) .ikpa-gauge__dial strong,
    body:not(.theme-dark) .ikpa-gauge__dial small {
        color: #eaf6ff !important;
    }

    .ikpa-running-notice__label {
        align-self: stretch;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        justify-content: center;
        padding: 0 12px;
        background: #ef3f3b;
        color: #fff;
        font-size: .82rem;
        font-weight: 900;
        letter-spacing: 0;
        text-transform: uppercase;
        white-space: nowrap;
        z-index: 1;
    }

    .ikpa-running-notice__track {
        flex: 1;
        min-width: 0;
        overflow: hidden;
        white-space: nowrap;
    }

    .ikpa-running-notice__text {
        width: max-content;
        display: inline-flex;
        gap: 64px;
        align-items: center;
        padding-left: 100%;
        font-size: .88rem;
        font-weight: 900;
        line-height: 1;
        animation: ikpa-marquee 68s linear infinite;
        will-change: transform;
    }

    .ikpa-running-notice__text:hover {
        animation-play-state: paused;
    }

    .ikpa-running-notice__text span {
        display: inline-block;
        min-width: max-content;
    }

    .ikpa-running-notice__text strong,
    .ikpa-running-notice__text b {
        color: #84341f;
        font-weight: 900;
        text-transform: uppercase;
    }

    body.theme-dark .ikpa-running-notice {
        background: linear-gradient(180deg, #ede8df 0%, #e2dcd2 100%) !important;
        border-color: #d8d0c5 !important;
        color: #8f3c22 !important;
    }

    @keyframes ikpa-marquee {
        from { transform: translateX(0); }
        to { transform: translateX(-100%); }
    }

    @media (prefers-reduced-motion: reduce) {
        .ikpa-running-notice__text {
            padding-left: 18px;
            animation: none;
        }
    }

    @media (max-width: 720px) {
        .ikpa-running-notice {
            grid-template-columns: 122px minmax(0, 1fr);
            min-height: 36px;
        }
        .ikpa-running-notice__label {
            gap: 6px;
            padding-inline: 8px;
            font-size: .74rem;
        }
        .ikpa-running-notice__text {
            gap: 44px;
            font-size: .78rem;
            animation-duration: 54s;
        }
    }

    .ikpa-overview {
        margin-left: var(--ikpa-sidebar-current-width);
        width: calc(100% - var(--ikpa-sidebar-current-width));
        padding: 14px 22px 16px;
        border-top: 1px solid rgba(148, 163, 184, .18);
        border-bottom: 1px solid rgba(148, 163, 184, .16);
        color: #fff;
        transition: margin-left .22s ease, width .22s ease;
    }

    .ikpa-overview-status {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 16px;
    }

    .ikpa-overview-card {
        position: relative;
        min-height: 116px;
        display: grid;
        grid-template-columns: minmax(0, 1fr) 42px;
        gap: 16px;
        align-items: center;
        overflow: hidden;
        padding: 18px 22px 16px;
        border: 1px solid rgba(255, 255, 255, .22);
        border-radius: 14px;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 16px 28px rgba(2, 6, 23, .24);
    }

    .ikpa-overview-card.punishment {
        background: linear-gradient(135deg, #d4072e, #a80733);
    }

    .ikpa-overview-card.warning {
        background: linear-gradient(135deg, #f59e0b, #cf6f02);
    }

    .ikpa-overview-card.appreciation {
        background: linear-gradient(135deg, #098765, #006a61);
    }

    .ikpa-overview-card h2,
    .ikpa-overview-meter h2,
    .ikpa-overview-chart h2 {
        margin: 0;
        color: inherit;
        font-size: clamp(.98rem, 1.35vw, 1.18rem);
        font-weight: 1000;
        line-height: 1.1;
        text-transform: uppercase;
    }

    .ikpa-overview-card__body {
        display: grid;
        grid-template-columns: 74px minmax(0, 1fr);
        gap: 16px;
        align-items: center;
        margin-top: 16px;
    }

    .ikpa-overview-card__body i {
        font-size: clamp(2.15rem, 3.2vw, 3rem);
        text-align: center;
        opacity: .96;
    }

    .ikpa-overview-card__body p {
        margin: 0;
        max-width: 230px;
        color: rgba(255, 255, 255, .88);
        font-size: clamp(.78rem, 1vw, .92rem);
        font-weight: 500;
        line-height: 1.3;
    }

    .ikpa-overview-light {
        position: relative;
        width: 36px;
        height: 76px;
        display: grid;
        gap: 5px;
        padding: 6px 7px;
        justify-self: end;
        border-radius: 5px;
        background: linear-gradient(180deg, #161616, #050505);
        box-shadow: inset 0 0 0 3px #2a2a2a, 0 7px 11px rgba(0, 0, 0, .28);
    }

    .ikpa-overview-light:after {
        content: "";
        position: absolute;
        left: 14px;
        bottom: -12px;
        width: 10px;
        height: 12px;
        background: #151515;
    }

    .ikpa-overview-light span {
        display: block;
        width: 22px;
        height: 17px;
        border-radius: 999px;
        opacity: .44;
        filter: none;
        box-shadow: inset 0 0 7px rgba(255, 255, 255, .18);
    }

    .ikpa-overview-light .red { background: #4a0709; }
    .ikpa-overview-light .yellow { background: #4b3904; }
    .ikpa-overview-light .green { background: #043d16; }

    .ikpa-overview-light.punishment .red,
    .ikpa-overview-light.warning .yellow,
    .ikpa-overview-light.aman .green {
        opacity: 1;
        animation: flow-blink 1.1s infinite;
    }

    .ikpa-overview-light.punishment .red {
        background: #ff1b24;
        box-shadow: 0 0 12px #ff1b24, inset 0 0 7px #fff;
    }

    .ikpa-overview-light.warning .yellow {
        background: #ffc400;
        box-shadow: 0 0 12px #ffc400, inset 0 0 7px #fff;
    }

    .ikpa-overview-light.aman .green {
        background: #0fbc55;
        box-shadow: 0 0 12px #0fbc55, inset 0 0 7px #fff;
    }

    .ikpa-overview-count {
        position: absolute;
        top: 10px;
        right: 62px;
        min-width: 30px;
        height: 30px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        background: #fff;
        color: #0f172a;
        font-size: .95rem;
        font-weight: 1000;
        box-shadow: 0 10px 18px rgba(2, 6, 23, .28);
    }

    .ikpa-overview-card.punishment .ikpa-overview-count { color: #d4072e; }
    .ikpa-overview-card.warning .ikpa-overview-count { color: #b25d00; }
    .ikpa-overview-card.appreciation .ikpa-overview-count { color: #087c5f; }

    .ikpa-overview-insights {
        display: grid;
        grid-template-columns: minmax(300px, .9fr) minmax(420px, 1.1fr);
        gap: 16px;
        margin-top: 16px;
    }

    .ikpa-overview-meter,
    .ikpa-overview-chart {
        min-height: 218px;
        padding: 22px 28px;
        border: 1px solid rgba(59, 130, 246, .28);
        border-radius: 18px;
        overflow: hidden;
        position: relative;
        background:
            radial-gradient(circle at 22% 0%, rgba(37, 99, 235, .34), transparent 34%),
            linear-gradient(145deg, rgba(5, 36, 85, .96), rgba(3, 14, 42, .98));
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, .08),
            inset 0 0 42px rgba(14, 165, 233, .08),
            0 18px 36px rgba(2, 6, 23, .28);
    }

    .ikpa-overview-meter {
        display: grid;
        grid-template-columns: minmax(230px, .92fr) minmax(230px, 1fr);
        gap: 34px;
        align-items: center;
    }

    .ikpa-overview-meter:after {
        content: "";
        position: absolute;
        top: 58px;
        bottom: 28px;
        left: 51%;
        width: 1px;
        background: linear-gradient(180deg, transparent, rgba(56, 189, 248, .42), transparent);
        box-shadow: 0 0 18px rgba(56, 189, 248, .3);
    }

    .ikpa-overview-meter h2,
    .ikpa-overview-chart h2 {
        position: absolute;
        top: 22px;
        left: 28px;
        z-index: 2;
        color: #fff;
        letter-spacing: .01em;
    }

    .ikpa-overview-meter h2 small {
        display: inline-block;
        margin-left: 5px;
        color: rgba(226, 232, 240, .72);
        font-size: .72em;
        font-weight: 600;
        text-transform: none;
    }

    .ikpa-gauge {
        --angle: calc((var(--score) * 1.8deg) - 90deg);
        margin-top: 40px;
        width: min(330px, 100%);
        aspect-ratio: 1 / .64;
        display: grid;
        align-items: center;
        justify-items: center;
        filter: drop-shadow(0 24px 28px rgba(0, 0, 0, .34));
    }

    .ikpa-gauge__dial {
        position: relative;
        width: 100%;
        aspect-ratio: 2 / 1.04;
        overflow: hidden;
        border-radius: 999px 999px 24px 24px;
        background:
            radial-gradient(circle at 50% 100%, rgba(14, 165, 233, .3) 0 8%, transparent 9%),
            radial-gradient(circle at 50% 100%, transparent 0 50%, rgba(59, 130, 246, .26) 51% 52%, transparent 53%),
            conic-gradient(from 270deg at 50% 100%,
                #ff1648 0deg 48deg,
                #ffcf38 48deg 104deg,
                #19e9aa 104deg 180deg,
                transparent 180deg);
        background-color: #041632;
        border: 1px solid rgba(56, 189, 248, .18);
        box-shadow:
            inset 0 -46px 70px rgba(0, 0, 0, .46),
            inset 0 1px 0 rgba(255, 255, 255, .08),
            0 0 34px rgba(14, 165, 233, .22);
    }

    .ikpa-gauge__dial:after {
        content: "";
        position: absolute;
        left: 11%;
        right: 11%;
        bottom: -2px;
        height: 68%;
        z-index: 1;
        border: 2px solid rgba(56, 189, 248, .12);
        border-bottom: 0;
        border-radius: 999px 999px 0 0;
        background:
            radial-gradient(circle at 50% 91%, rgba(0, 183, 255, .18), transparent 28%),
            radial-gradient(circle at 50% 86%, rgba(2, 6, 23, .96) 0 37%, transparent 38%),
            linear-gradient(180deg, rgba(3, 24, 64, .86), rgba(2, 10, 30, .97));
        box-shadow: inset 0 18px 34px rgba(0, 0, 0, .34);
    }

    .ikpa-gauge__ticks {
        position: absolute;
        inset: 0;
        z-index: 2;
        border-radius: 999px 999px 0 0;
        background:
            repeating-conic-gradient(from 270deg at 50% 100%,
                rgba(255, 255, 255, .95) 0deg 1.7deg,
                transparent 1.7deg 7deg);
        -webkit-mask-image: radial-gradient(circle at 50% 100%, transparent 0 68%, #000 69% 74%, transparent 75%);
        mask-image: radial-gradient(circle at 50% 100%, transparent 0 68%, #000 69% 74%, transparent 75%);
        opacity: .42;
    }

    .ikpa-gauge__needle {
        position: absolute;
        left: 50%;
        bottom: 12px;
        z-index: 4;
        width: 18px;
        height: 76%;
        clip-path: polygon(50% 0, 88% 100%, 12% 100%);
        border-radius: 999px;
        background: linear-gradient(90deg, #f7fbff 0%, #d9ecff 58%, #99d5ff 100%);
        box-shadow: 0 0 20px rgba(148, 221, 255, .5);
        transform-origin: 50% 100%;
        transform: translateX(-50%) rotate(var(--angle));
    }

    .ikpa-gauge__hub {
        position: absolute;
        left: 50%;
        bottom: 2px;
        z-index: 5;
        width: 48px;
        height: 48px;
        border: 8px solid #d9f0ff;
        border-radius: 999px;
        background: #13bfff;
        box-shadow: 0 0 22px rgba(56, 189, 248, .72);
        transform: translateX(-50%);
    }

    .ikpa-gauge__dial strong {
        position: absolute;
        left: 50%;
        bottom: 48px;
        z-index: 6;
        transform: translateX(-50%);
        color: #fff;
        font-size: 1.05rem;
        font-weight: 1000;
        line-height: 1;
        text-shadow: 0 3px 12px rgba(0, 0, 0, .42);
    }

    .ikpa-gauge__dial small {
        position: absolute;
        left: 50%;
        bottom: 29px;
        z-index: 6;
        transform: translateX(-50%);
        color: rgba(226, 232, 240, .72);
        font-size: .7rem;
        font-weight: 800;
        white-space: nowrap;
    }

    .ikpa-overview-points {
        display: grid;
        gap: 18px;
        margin-top: 34px;
        position: relative;
        z-index: 2;
    }

    .ikpa-overview-points span {
        display: grid;
        grid-template-columns: 58px minmax(0, 1fr);
        gap: 14px;
        align-items: center;
    }

    .ikpa-overview-points i {
        grid-row: span 2;
        width: 54px;
        height: 54px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        background: linear-gradient(145deg, rgba(37, 99, 235, .78), rgba(12, 74, 170, .72));
        color: #d9f4ff;
        font-size: 1.3rem;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .16), 0 0 22px rgba(37, 99, 235, .28);
    }

    .ikpa-overview-points b,
    .ikpa-chart-metrics b {
        color: #fff;
        font-size: .9rem;
        font-weight: 1000;
        line-height: 1.2;
    }

    .ikpa-overview-points small {
        color: rgba(226, 232, 240, .74);
        font-size: .8rem;
        font-weight: 700;
        line-height: 1.25;
    }

    .ikpa-chart-lines {
        position: relative;
        height: 166px;
        margin-top: 40px;
        overflow: hidden;
        padding: 0;
        border: 0;
        border-radius: 0;
        background:
            radial-gradient(circle at 84% 18%, rgba(255, 217, 94, .16), transparent 15%),
            linear-gradient(180deg, rgba(14, 165, 233, .04), rgba(14, 165, 233, 0));
    }

    .ikpa-chart-lines:before {
        content: "";
        position: absolute;
        inset: 18px 0 6px;
        z-index: 1;
        background:
            linear-gradient(180deg, rgba(0, 133, 255, .48), rgba(0, 78, 255, .2) 58%, rgba(0, 78, 255, 0) 100%);
        clip-path: polygon(0 76%, 8% 68%, 17% 48%, 27% 42%, 36% 62%, 47% 75%, 57% 61%, 68% 43%, 80% 58%, 91% 66%, 100% 50%, 100% 100%, 0 100%);
        filter: blur(.2px);
    }

    .ikpa-chart-lines:after {
        content: "";
        position: absolute;
        left: 68%;
        top: 28px;
        bottom: 13px;
        z-index: 2;
        width: 1px;
        background: linear-gradient(180deg, rgba(56, 189, 248, 0), rgba(56, 189, 248, .38), rgba(56, 189, 248, 0));
    }

    .ikpa-chart-lines .chart-line {
        position: absolute;
        inset: 12px 0 16px;
        z-index: 3;
        border-radius: 999px;
        opacity: .96;
        filter: drop-shadow(0 0 5px currentColor) drop-shadow(0 0 14px currentColor);
    }

    .ikpa-chart-lines .chart-line.teal {
        color: #11cfff;
        clip-path: polygon(0 70%, 7% 64%, 14% 48%, 22% 35%, 30% 28%, 39% 42%, 48% 68%, 56% 74%, 65% 62%, 75% 42%, 85% 58%, 93% 66%, 100% 50%, 100% 53%, 93% 69%, 85% 61%, 75% 45%, 65% 65%, 56% 77%, 48% 71%, 39% 45%, 30% 31%, 22% 38%, 14% 51%, 7% 67%, 0 73%);
        background: currentColor;
    }

    .ikpa-chart-lines .chart-line.coral {
        color: #ffd35a;
        clip-path: polygon(0 88%, 8% 74%, 17% 68%, 25% 70%, 34% 62%, 43% 40%, 52% 26%, 62% 44%, 71% 26%, 81% 12%, 90% 38%, 96% 16%, 100% 18%, 100% 21%, 96% 19%, 90% 41%, 81% 15%, 71% 29%, 62% 47%, 52% 29%, 43% 43%, 34% 65%, 25% 73%, 17% 71%, 8% 77%, 0 91%);
        background: currentColor;
    }

    .ikpa-chart-lines .chart-line.teal:after,
    .ikpa-chart-lines .chart-line.coral:after {
        content: "";
        position: absolute;
        width: 11px;
        height: 11px;
        border-radius: 999px;
        background: currentColor;
        box-shadow: 0 0 0 4px rgba(255, 255, 255, .08), 0 0 18px currentColor;
    }

    .ikpa-chart-lines .chart-line.teal:after {
        left: 21%;
        top: 27%;
    }

    .ikpa-chart-lines .chart-line.coral:after {
        left: 70%;
        top: 20%;
    }

    .chart-y-label {
        display: none;
    }

    .chart-y-label.top { top: 10px; }
    .chart-y-label.mid { top: 50%; transform: translateY(-50%); }
    .chart-y-label.bottom { bottom: 14px; }

    .chart-axis-label {
        display: none;
    }

    .chart-tooltip {
        display: none;
    }

    .ikpa-chart-metrics {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 26px;
        margin-top: 14px;
    }

    .ikpa-chart-metrics span {
        min-height: 74px;
        display: grid;
        grid-template-columns: 54px minmax(0, 1fr);
        gap: 14px;
        align-items: center;
        padding: 12px 16px;
        border: 1px solid rgba(37, 99, 235, .34);
        border-radius: 15px;
        background: rgba(8, 35, 86, .72);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .08), 0 10px 22px rgba(2, 6, 23, .18);
    }

    .ikpa-chart-metrics i {
        grid-row: span 2;
        width: 48px;
        height: 48px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        background: rgba(14, 165, 233, .24);
        color: #22d3ee;
        font-size: 1.55rem;
        box-shadow: 0 0 20px rgba(34, 211, 238, .2);
    }

    .ikpa-chart-metrics strong {
        color: #fff;
        font-size: .92rem;
        font-weight: 1000;
        opacity: .86;
    }

    @media (max-width: 1320px) {
        .ikpa-overview-status,
        .ikpa-overview-insights {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 720px) {
        .ikpa-overview {
            padding: 12px;
        }

        .ikpa-overview-card,
        .ikpa-overview-meter,
        .ikpa-overview-chart {
            border-radius: 12px;
        }

        .ikpa-overview-card {
            grid-template-columns: minmax(0, 1fr) 42px;
            padding: 16px 14px;
        }

        .ikpa-overview-card__body {
            grid-template-columns: 52px minmax(0, 1fr);
        }

        .ikpa-overview-light {
            width: 36px;
            height: 76px;
            gap: 5px;
            padding: 6px 7px;
        }

        .ikpa-overview-count {
            right: 58px;
        }

        .ikpa-overview-meter {
            grid-template-columns: 1fr;
            gap: 18px;
            padding: 20px 16px;
        }

        .ikpa-overview-meter:after {
            display: none;
        }

        .ikpa-gauge {
            justify-self: center;
        }

        .ikpa-overview-points {
            margin-top: 0;
        }

        .ikpa-overview-chart {
            padding: 20px 16px;
        }

        .ikpa-chart-metrics {
            grid-template-columns: 1fr;
            gap: 10px;
        }
    }

    body .flow-hero,
    body.theme-dark .flow-hero {
        min-height: clamp(205px, 19.4vw, 282px) !important;
        padding: 0 !important;
        border-bottom: 0 !important;
        background:
            linear-gradient(90deg, #020617 0%, #071225 32%, #0b1f3e 50%, #071225 68%, #020617 100%) !important;
        box-shadow: inset 0 -1px 0 rgba(255, 255, 255, .1), 0 18px 42px rgba(2, 6, 23, .35) !important;
        isolation: isolate;
    }

    body .flow-hero:before,
    body .flow-hero:after,
    body.theme-dark .flow-hero:before,
    body.theme-dark .flow-hero:after {
        display: none !important;
    }

    .ikpa-hero-content {
        position: relative;
        z-index: 0;
        min-height: inherit;
        display: grid;
        grid-template-columns: minmax(240px, 30%) minmax(360px, 1fr) minmax(190px, auto);
        align-items: center;
        gap: 18px;
        padding: 22px 28px 20px;
        overflow: hidden;
    }

    .ikpa-hero-content:before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -2;
        background:
            linear-gradient(90deg, rgba(2, 6, 23, .9) 0%, rgba(2, 6, 23, .56) 30%, rgba(2, 6, 23, .1) 55%, rgba(2, 6, 23, .36) 78%, rgba(2, 6, 23, .7) 100%),
            radial-gradient(circle at 50% 82%, rgba(255, 255, 255, .12), transparent 24%);
    }

    .ikpa-hero-content:after {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 1;
        pointer-events: none;
        background:
            linear-gradient(90deg, #020617 0%, rgba(2, 6, 23, .78) 14%, rgba(2, 6, 23, .24) 34%, rgba(2, 6, 23, 0) 50%, rgba(2, 6, 23, .24) 66%, rgba(2, 6, 23, .78) 86%, #020617 100%);
    }

    .ikpa-hero-bg {
        position: absolute;
        inset: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: 58% 34%;
        pointer-events: none;
        filter: saturate(1.04) contrast(1.03);
        -webkit-mask-image: none;
        mask-image: none;
    }

    .ikpa-hero-copy {
        position: relative;
        z-index: 3;
        color: #fff;
        max-width: 520px;
    }

    .ikpa-hero-copy h1 {
        margin: 0 0 8px;
        color: #fff;
        font-size: clamp(1.75rem, 3vw, 2.6rem);
        font-weight: 900;
        line-height: 1;
        letter-spacing: 0;
        text-shadow: 0 5px 18px rgba(0, 0, 0, .45);
    }

    .ikpa-hero-copy p,
    .ikpa-hero-copy span {
        display: block;
        margin: 0;
        max-width: 440px;
        color: rgba(255, 255, 255, .86);
        font-size: clamp(.88rem, 1.25vw, 1.04rem);
        font-weight: 700;
        line-height: 1.45;
        text-shadow: 0 4px 16px rgba(0, 0, 0, .42);
    }

    .ikpa-hero-actions {
        position: absolute;
        top: 24px;
        right: 24px;
        z-index: 5;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .ikpa-hero-icon,
    .ikpa-user-pill {
        border: 1px solid rgba(148, 163, 184, .24);
        background: rgba(15, 23, 42, .68);
        color: #fff;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .08), 0 12px 24px rgba(0, 0, 0, .22);
        backdrop-filter: blur(12px);
    }

    .ikpa-hero-icon {
        width: 48px;
        height: 48px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        cursor: pointer;
    }

    .ikpa-user-pill {
        min-height: 50px;
        display: grid;
        grid-template-columns: 34px minmax(0, 1fr) 16px;
        align-items: center;
        gap: 10px;
        padding: 7px 14px 7px 9px;
        border-radius: 999px;
    }

    .ikpa-user-avatar {
        width: 34px;
        height: 34px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        background: #fff;
        color: #0f172a;
    }

    .ikpa-user-pill strong,
    .ikpa-user-pill small {
        display: block;
        white-space: nowrap;
        line-height: 1.15;
    }

    .ikpa-user-pill strong {
        max-width: 120px;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: .82rem;
        font-weight: 900;
    }

    .ikpa-user-pill small {
        margin-top: 2px;
        color: rgba(255, 255, 255, .72);
        font-size: .72rem;
        font-weight: 700;
    }

    .ikpa-hero-building {
        display: none;
    }

    .ikpa-building-roof {
        position: absolute;
        left: 4%;
        right: 20%;
        top: 0;
        height: 24%;
        transform: skewX(-18deg);
        background: linear-gradient(180deg, #d7def0, #8f9fbd 72%, #526680);
        clip-path: polygon(8% 0, 100% 0, 92% 100%, 0 100%);
    }

    .ikpa-building-main {
        position: absolute;
        left: 10%;
        right: 25%;
        bottom: 0;
        height: 78%;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        align-items: end;
        gap: 8px;
        padding: 30px 18px 12px;
        border: 1px solid rgba(255, 255, 255, .28);
        background: linear-gradient(135deg, rgba(221, 230, 245, .95), rgba(70, 88, 113, .95));
    }

    .ikpa-building-window {
        position: absolute;
        top: 16px;
        width: 11%;
        height: 20px;
        border-radius: 2px;
        background: linear-gradient(180deg, #fde68a, #f59e0b);
        box-shadow: 0 0 16px rgba(251, 191, 36, .55);
    }

    .ikpa-building-window:nth-child(1) { left: 14%; }
    .ikpa-building-window:nth-child(2) { left: 30%; }
    .ikpa-building-window:nth-child(3) { left: 46%; }
    .ikpa-building-window:nth-child(4) { left: 62%; }

    .ikpa-building-column {
        height: 76px;
        border-radius: 999px 999px 2px 2px;
        background: linear-gradient(90deg, #e5e7eb, #94a3b8 46%, #f8fafc 54%, #64748b);
    }

    .ikpa-building-emblem {
        position: absolute;
        left: 42%;
        top: 48px;
        width: 46px;
        height: 46px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        background: linear-gradient(135deg, #f59e0b, #fef3c7);
        color: #7c2d12;
        box-shadow: 0 0 20px rgba(251, 191, 36, .42);
    }

    .ikpa-building-side {
        position: absolute;
        right: 0;
        bottom: 12px;
        width: 34%;
        height: 54%;
        transform: skewY(-9deg);
        border: 1px solid rgba(255, 255, 255, .22);
        background: linear-gradient(135deg, #1e293b, #020617);
        box-shadow: inset 0 0 22px rgba(96, 165, 250, .14);
    }

    .ikpa-building-side span {
        position: absolute;
        top: 18px;
        left: 16px;
        right: 12px;
        color: #facc15;
        font-size: clamp(.42rem, .55vw, .62rem);
        font-weight: 900;
        line-height: 1.25;
    }

    @media (max-width: 720px) {
        body .flow-hero,
        body.theme-dark .flow-hero {
            min-height: 208px !important;
        }

        .ikpa-hero-content {
            grid-template-columns: 1fr;
            align-items: start;
            padding: 22px 18px;
        }

        .ikpa-hero-bg {
            width: 100%;
            height: 100%;
            inset: 0;
            object-position: 54% 36%;
            opacity: .76;
        }

        .ikpa-hero-actions {
            top: 14px;
            right: 12px;
            transform: scale(.84);
            transform-origin: top right;
        }

        .ikpa-hero-building {
            width: min(86vw, 420px);
            height: 102px;
            margin-top: 18px;
            justify-self: start;
            opacity: .78;
        }

    }

    .ikpa-theme-toggle {
        width: 100%;
        min-height: 48px;
        display: grid;
        grid-template-columns: 38px minmax(0, 1fr);
        gap: 12px;
        align-items: center;
        padding: 0 20px;
        border: 1px solid rgba(255, 255, 255, .18);
        border-radius: 9px;
        background: rgba(255, 255, 255, .08);
        color: #fff;
        font: inherit;
        font-size: .94rem;
        font-weight: 700;
        text-align: left;
        cursor: pointer;
    }

    .ikpa-theme-toggle:hover {
        background: rgba(255, 255, 255, .14);
    }

    body {
        --ikpa-sidebar-width: 232px;
        --ikpa-sidebar-collapsed-width: 82px;
        --ikpa-sidebar-current-width: var(--ikpa-sidebar-width);
    }

    .ikpa-flow {
        overflow-x: hidden !important;
        overflow-y: visible !important;
    }

    body.ikpa-sidebar-collapsed {
        --ikpa-sidebar-current-width: var(--ikpa-sidebar-collapsed-width);
    }

    .flow-sidebar {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        bottom: 0 !important;
        z-index: 40 !important;
        width: var(--ikpa-sidebar-current-width) !important;
        min-height: 100vh !important;
        height: 100vh !important;
        padding: 14px 10px 18px !important;
        border-radius: 0 !important;
        overflow-x: hidden !important;
        overflow-y: auto !important;
        transition: width .22s ease, padding .22s ease;
    }

    .status-toggle-label {
        min-width: 0;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .status-count-badge {
        width: 34px;
        height: 34px;
        display: inline-grid;
        place-items: center;
        flex: 0 0 auto;
        border-radius: 999px;
        background: #fff;
        color: #0f172a;
        font-size: 1rem;
        font-weight: 1000;
        line-height: 1;
        box-shadow: 0 10px 18px rgba(2, 6, 23, .2), inset 0 0 0 2px rgba(255, 255, 255, .55);
    }

    .status-box.punishment .status-count-badge {
        color: #f51f2b;
    }

    .status-box.aman .status-count-badge {
        color: #0d9b49;
    }

    .ikpa-sidebar-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4px 6px 18px;
        margin: 0 0 14px;
        border-bottom: 1px solid rgba(255, 255, 255, .16);
        text-decoration: none;
    }

    .ikpa-sidebar-logo img {
        display: block;
        width: min(212px, 100%);
        max-height: 116px;
        object-fit: contain;
        object-position: center;
    }

    .flow-hero,
    .ikpa-overview,
    .ikpa-running-notice,
    .flow-body {
        margin-left: var(--ikpa-sidebar-current-width) !important;
        width: calc(100% - var(--ikpa-sidebar-current-width)) !important;
        transition: margin-left .22s ease, width .22s ease;
    }

    .flow-body {
        display: block !important;
        grid-template-columns: none !important;
        padding: 18px 28px 0 !important;
    }

    .flow-main {
        min-width: 0 !important;
        width: 100% !important;
    }

    .flow-footer {
        box-sizing: border-box !important;
        margin-left: var(--ikpa-sidebar-current-width) !important;
        width: auto !important;
        max-width: none !important;
        min-width: 0 !important;
        left: var(--ikpa-sidebar-current-width) !important;
        right: 0 !important;
        overflow: visible !important;
        transition: margin-left .22s ease, width .22s ease, left .22s ease;
    }

    footer.flow-footer {
        flex-shrink: 0 !important;
    }

    .ikpa-sidebar-toggle {
        width: 100%;
        min-height: 44px;
        display: grid;
        grid-template-columns: 38px minmax(0, 1fr);
        gap: 10px;
        align-items: center;
        margin: 0 0 12px;
        padding: 0 12px;
        border: 1px solid rgba(255, 255, 255, .18);
        border-radius: 9px;
        background: rgba(255, 255, 255, .1);
        color: #fff;
        font: inherit;
        font-size: .9rem;
        font-weight: 900;
        text-align: left;
        cursor: pointer;
    }

    .ikpa-sidebar-toggle i {
        text-align: center;
        font-size: 1.15rem;
    }

    .flow-nav {
        margin: 0 !important;
    }

    .flow-nav a,
    .flow-nav button,
    .ikpa-theme-toggle {
        grid-template-columns: 38px minmax(0, 1fr) !important;
        padding-inline: 12px !important;
        overflow: hidden;
        transition: grid-template-columns .22s ease, padding .22s ease, background .18s ease;
    }

    .flow-nav span,
    .ikpa-sidebar-toggle span,
    .ikpa-sidebar-logo,
    .flow-sidebar-copy,
    .flow-illustration {
        transition: opacity .16s ease, transform .16s ease;
    }

    body.ikpa-sidebar-collapsed .flow-sidebar {
        padding-inline: 10px !important;
        overflow: visible !important;
    }

    body.ikpa-sidebar-collapsed .ikpa-sidebar-logo {
        justify-content: center;
        padding: 0 0 12px;
        margin-bottom: 12px;
    }

    body.ikpa-sidebar-collapsed .ikpa-sidebar-logo img {
        width: 58px;
        max-height: 46px;
        object-position: center;
    }

    body.ikpa-sidebar-collapsed .flow-nav a,
    body.ikpa-sidebar-collapsed .flow-nav button,
    body.ikpa-sidebar-collapsed .ikpa-theme-toggle,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle {
        position: relative !important;
        grid-template-columns: 1fr !important;
        justify-items: center !important;
        padding-inline: 8px !important;
        overflow: visible !important;
    }

    body.ikpa-sidebar-collapsed .flow-nav a::after,
    body.ikpa-sidebar-collapsed .flow-nav button::after,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle::after {
        content: attr(data-menu-label);
        position: absolute;
        left: calc(100% + 12px);
        top: 50%;
        z-index: 100;
        min-width: max-content;
        max-width: 220px;
        padding: 9px 12px;
        border: 1px solid rgba(148, 163, 184, .24);
        border-radius: 10px;
        background: rgba(15, 23, 42, .96);
        color: #fff;
        font-size: .82rem;
        font-weight: 900;
        line-height: 1.15;
        text-transform: none;
        white-space: nowrap;
        box-shadow: 0 14px 28px rgba(2, 6, 23, .28);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translate(-8px, -50%);
        transition: opacity .16s ease, transform .16s ease, visibility .16s ease;
    }

    body.ikpa-sidebar-collapsed .flow-nav a::before,
    body.ikpa-sidebar-collapsed .flow-nav button::before,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle::before {
        content: "";
        position: absolute;
        left: calc(100% + 7px);
        top: 50%;
        z-index: 101;
        width: 10px;
        height: 10px;
        border-left: 1px solid rgba(148, 163, 184, .24);
        border-bottom: 1px solid rgba(148, 163, 184, .24);
        background: rgba(15, 23, 42, .96);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translate(-8px, -50%) rotate(45deg);
        transition: opacity .16s ease, transform .16s ease, visibility .16s ease;
    }

    body.ikpa-sidebar-collapsed .flow-nav a:hover::after,
    body.ikpa-sidebar-collapsed .flow-nav a:focus-visible::after,
    body.ikpa-sidebar-collapsed .flow-nav button:hover::after,
    body.ikpa-sidebar-collapsed .flow-nav button:focus-visible::after,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle:hover::after,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle:focus-visible::after,
    body.ikpa-sidebar-collapsed .flow-nav a:hover::before,
    body.ikpa-sidebar-collapsed .flow-nav a:focus-visible::before,
    body.ikpa-sidebar-collapsed .flow-nav button:hover::before,
    body.ikpa-sidebar-collapsed .flow-nav button:focus-visible::before,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle:hover::before,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle:focus-visible::before {
        opacity: 1;
        visibility: visible;
        transform: translate(0, -50%) rotate(0deg);
    }

    body.ikpa-sidebar-collapsed .flow-nav a:hover::before,
    body.ikpa-sidebar-collapsed .flow-nav a:focus-visible::before,
    body.ikpa-sidebar-collapsed .flow-nav button:hover::before,
    body.ikpa-sidebar-collapsed .flow-nav button:focus-visible::before,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle:hover::before,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle:focus-visible::before {
        transform: translate(0, -50%) rotate(45deg);
    }

    body.ikpa-sidebar-collapsed .flow-nav span,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle span {
        display: none !important;
    }

    body.ikpa-sidebar-collapsed .flow-sidebar-copy,
    body.ikpa-sidebar-collapsed .flow-illustration {
        opacity: 0 !important;
        transform: translateX(-8px);
        pointer-events: none;
    }

    body.ikpa-sidebar-collapsed .flow-illustration,
    body.ikpa-sidebar-collapsed .flow-sidebar-copy {
        display: none !important;
    }

    body.ikpa-sidebar-collapsed .flow-nav i,
    body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle i {
        width: 100%;
        text-align: center;
    }

    @media (max-width: 900px) {
        body,
        body.ikpa-sidebar-collapsed {
            --ikpa-sidebar-current-width: 0px;
        }

        .flow-sidebar {
            position: relative !important;
            width: auto !important;
            height: auto !important;
            min-height: auto !important;
            border-radius: 16px !important;
            margin: 18px 12px 0 !important;
        }

        .ikpa-sidebar-logo {
            justify-content: center;
            padding: 4px 8px 14px;
        }

        .ikpa-sidebar-logo img {
            width: min(220px, 72vw);
            max-height: 96px;
            object-position: center;
        }

        .flow-hero,
        .ikpa-overview,
        .ikpa-running-notice,
        .flow-body,
        .flow-footer {
            margin-left: 0 !important;
            width: 100% !important;
        }

        .flow-body {
            padding: 18px 12px 0 !important;
        }

        .ikpa-sidebar-toggle {
            display: none;
        }

        body.ikpa-sidebar-collapsed .flow-nav span,
        body.ikpa-sidebar-collapsed .ikpa-sidebar-toggle span {
            display: inline !important;
        }

        body.ikpa-sidebar-collapsed .flow-nav span,
        body.ikpa-sidebar-collapsed .flow-sidebar-copy,
        body.ikpa-sidebar-collapsed .flow-illustration {
            opacity: 1 !important;
            transform: none !important;
            pointer-events: auto;
        }

        body.ikpa-sidebar-collapsed .flow-illustration,
        body.ikpa-sidebar-collapsed .flow-sidebar-copy {
            display: block !important;
        }
    }
</style>
<script>
    (function () {
        const themeKey = 'sarpras-ikpa-theme';
        const sidebarKey = 'sarpras-ikpa-sidebar';
        const getTheme = () => {
            try {
                return localStorage.getItem(themeKey);
            } catch (e) {
                return null;
            }
        };
        const saveTheme = (theme) => {
            try {
                localStorage.setItem(themeKey, theme);
            } catch (e) {
                // ignore storage failures
            }
            document.cookie = `version=${theme}; path=/`;
        };
        const getSidebarState = () => {
            try {
                return localStorage.getItem(sidebarKey);
            } catch (e) {
                return null;
            }
        };
        const saveSidebarState = (state) => {
            try {
                localStorage.setItem(sidebarKey, state);
            } catch (e) {
                // ignore storage failures
            }
        };
        const applyTheme = (theme) => {
            const isDark = theme !== 'light';
            document.body.classList.toggle('theme-dark', isDark);
            document.body.setAttribute('data-theme-version', isDark ? 'dark' : 'light');
            document.body.setAttribute('data-bs-theme', isDark ? 'dark' : 'light');
            document.querySelectorAll('[data-ikpa-theme-toggle]').forEach((button) => {
                button.setAttribute('aria-pressed', isDark ? 'true' : 'false');
                button.querySelector('[data-theme-label]').textContent = isDark ? 'Mode Terang' : 'Mode Gelap';
                const icon = button.querySelector('i');
                if (icon) {
                    icon.className = isDark ? 'fas fa-sun' : 'fas fa-moon';
                }
            });
        };
        const applySidebarState = (state) => {
            const isCollapsed = state === 'collapsed';
            document.body.classList.toggle('ikpa-sidebar-collapsed', isCollapsed);
            document.querySelectorAll('[data-ikpa-sidebar-toggle]').forEach((button) => {
                button.setAttribute('aria-expanded', isCollapsed ? 'false' : 'true');
                button.setAttribute('aria-label', isCollapsed ? 'Buka sidebar' : 'Ciutkan sidebar');
                const icon = button.querySelector('i');
                if (icon) {
                    icon.className = isCollapsed ? 'fas fa-angles-right' : 'fas fa-bars';
                }
            });
        };

        document.addEventListener('DOMContentLoaded', () => {
            applyTheme(getTheme() === 'light' ? 'light' : 'dark');
            applySidebarState(getSidebarState() === 'collapsed' ? 'collapsed' : 'expanded');
            document.querySelectorAll('[data-ikpa-theme-toggle]').forEach((button) => {
                button.addEventListener('click', () => {
                    const nextTheme = document.body.classList.contains('theme-dark') ? 'light' : 'dark';
                    applyTheme(nextTheme);
                    saveTheme(nextTheme);
                });
            });
            document.querySelectorAll('[data-ikpa-sidebar-toggle]').forEach((button) => {
                button.addEventListener('click', () => {
                    const nextState = document.body.classList.contains('ikpa-sidebar-collapsed') ? 'expanded' : 'collapsed';
                    applySidebarState(nextState);
                    saveSidebarState(nextState);
                });
            });
        });
    })();
</script>
