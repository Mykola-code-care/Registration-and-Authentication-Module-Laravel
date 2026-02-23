{{-- Єдина темна тема для всього додатку (як на головній) --}}
<style>
    .app-dark{min-height:100vh;background:linear-gradient(165deg,#0f172a 0%,#1e293b 50%,#0f172a 100%);color:#e2e8f0}
    .app-dark .guest-card,.app-dark .app-card{background:rgba(30,41,59,.85);backdrop-filter:blur(12px);border:1px solid rgba(71,85,105,.6);border-radius:1rem;box-shadow:0 25px 50px -12px rgba(0,0,0,.4)}
    .app-dark label,.app-dark .text-gray-700{color:#cbd5e1 !important}
    .app-dark .text-gray-600,.app-dark .text-gray-500{color:#94a3b8 !important}
    .app-dark .text-gray-900{color:#f8fafc !important}
    .app-dark input[type="text"],.app-dark input[type="email"],.app-dark input[type="password"],.app-dark input[type="search"],.app-dark textarea{background:#334155 !important;border-color:#475569 !important;color:#f1f5f9 !important}
    .app-dark input:focus,.app-dark textarea:focus{border-color:#6366f1 !important;ring-color:#6366f1}
    .app-dark input::placeholder,.app-dark textarea::placeholder{color:#64748b}
    .app-dark .bg-white{background:rgba(51,65,85,.6) !important;border:1px solid rgba(71,85,105,.5)}
    .app-dark .text-red-600{color:#f87171 !important}
    .app-dark .text-green-600{color:#4ade80 !important}
    .app-dark a.underline:not(.no-dark){color:#94a3b8 !important}
    .app-dark a.underline:hover:not(.no-dark){color:#e2e8f0 !important}
    .app-dark .bg-indigo-50,.app-dark .bg-amber-50{background:rgba(49,46,129,.2) !important;border-color:rgba(99,102,241,.4)}
    .app-dark .text-amber-800,.app-dark .text-indigo-700{color:#c7d2fe !important}
    .app-dark .bg-amber-100{background:rgba(251,191,36,.15) !important}
    .app-dark code{background:rgba(51,65,85,.8);color:#e2e8f0;padding:0.125rem 0.25rem;border-radius:0.25rem}
</style>
