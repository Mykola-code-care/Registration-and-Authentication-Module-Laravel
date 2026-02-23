<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }} — {{ __('Registration & Authentication') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                *,::after,::before{box-sizing:border-box;margin:0;padding:0}
                html{font-family:'Instrument Sans',ui-sans-serif,system-ui,sans-serif;line-height:1.5;-webkit-text-size-adjust:100%}
                body{min-height:100vh;background:linear-gradient(165deg,#0f172a 0%,#1e293b 50%,#0f172a 100%);color:#e2e8f0;display:flex;flex-direction:column;align-items:center;justify-content:center;p:1.5rem}
                .container{width:100%;max-width:42rem}
                nav{display:flex;justify-content:flex-end;gap:1rem;margin-bottom:2rem}
                nav a{padding:0.5rem 1rem;border-radius:0.5rem;font-size:0.875rem;font-weight:500;text-decoration:none;transition:background .15s,color .15s}
                nav a.outline{color:#94a3b8;border:1px solid #475569}
                nav a.outline:hover{background:#334155;color:#f1f5f9}
                nav a.primary{background:#3b82f6;color:#fff;border:1px solid #3b82f6}
                nav a.primary:hover{background:#2563eb;border-color:#2563eb}
                .card{background:rgba(30,41,59,.6);backdrop-filter:blur(12px);border:1px solid rgba(71,85,105,.5);border-radius:1rem;padding:2rem;box-shadow:0 25px 50px -12px rgba(0,0,0,.4)}
                .card h1{font-size:1.75rem;font-weight:700;color:#f8fafc;margin-bottom:0.5rem;letter-spacing:-0.02em}
                .card .tagline{color:#94a3b8;font-size:1rem;margin-bottom:1.5rem}
                .features{list-style:none;margin-bottom:1.5rem}
                .features li{display:flex;align-items:center;gap:0.75rem;padding:0.5rem 0;color:#cbd5e1;font-size:0.9375rem}
                .features li::before{content:'';width:0.5rem;height:0.5rem;background:#3b82f6;border-radius:50%;flex-shrink:0}
                .actions{display:flex;flex-wrap:wrap;gap:0.75rem;margin-top:1.5rem}
                .actions a{display:inline-flex;align-items:center;justify-content:center;padding:0.75rem 1.5rem;border-radius:0.5rem;font-size:0.9375rem;font-weight:600;text-decoration:none;transition:background .15s,transform .1s}
                .actions a:active{transform:scale(0.98)}
                .btn-primary{background:#3b82f6;color:#fff;border:none}
                .btn-primary:hover{background:#2563eb}
                .btn-secondary{background:transparent;color:#94a3b8;border:1px solid #475569}
                .btn-secondary:hover{background:#334155;color:#f1f5f9}
                @media (min-width:640px){.card{padding:2.5rem}.card h1{font-size:2rem}}
            </style>
        @endif
        <style>
            .welcome-page{min-height:100vh;background:linear-gradient(165deg,#0f172a 0%,#1e293b 50%,#0f172a 100%) !important;color:#e2e8f0 !important;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:1.5rem}
            .welcome-page .welcome-container{width:100%;max-width:42rem}
            .welcome-page nav{display:flex;justify-content:flex-end;gap:1rem;margin-bottom:2rem}
            .welcome-page nav a{padding:0.5rem 1rem;border-radius:0.5rem;font-size:0.875rem;font-weight:500;text-decoration:none;transition:background .15s,color .15s}
            .welcome-page nav a.outline{color:#94a3b8 !important;border:1px solid #475569}
            .welcome-page nav a.outline:hover{background:#334155 !important;color:#f1f5f9 !important}
            .welcome-page nav a.primary{background:#4f46e5 !important;color:#fff !important;border:1px solid #4f46e5}
            .welcome-page nav a.primary:hover{background:#4338ca !important}
            .welcome-page .welcome-card{background:rgba(30,41,59,.85);backdrop-filter:blur(12px);border:1px solid rgba(71,85,105,.6);border-radius:1rem;padding:2rem;box-shadow:0 25px 50px -12px rgba(0,0,0,.4)}
            .welcome-page .welcome-card h1{font-size:1.75rem;font-weight:700;color:#f8fafc !important;margin-bottom:0.5rem;letter-spacing:-0.02em}
            .welcome-page .welcome-card .tagline{color:#94a3b8 !important;font-size:1rem;margin-bottom:1.5rem}
            .welcome-page .welcome-features{list-style:none;margin-bottom:1.5rem}
            .welcome-page .welcome-features li{display:flex;align-items:center;gap:0.75rem;padding:0.5rem 0;color:#cbd5e1 !important;font-size:0.9375rem}
            .welcome-page .welcome-features li .dot{width:0.5rem;height:0.5rem;background:#4f46e5;border-radius:50%;flex-shrink:0}
            .welcome-page .welcome-actions{display:flex;flex-wrap:wrap;gap:0.75rem;margin-top:1.5rem}
            .welcome-page .welcome-actions a{display:inline-flex;align-items:center;justify-content:center;padding:0.75rem 1.5rem;border-radius:0.5rem;font-size:0.9375rem;font-weight:600;text-decoration:none;transition:background .15s}
            .welcome-page .welcome-actions .btn-primary{background:#4f46e5 !important;color:#fff !important;border:none}
            .welcome-page .welcome-actions .btn-primary:hover{background:#4338ca !important}
            .welcome-page .welcome-actions .btn-secondary{background:transparent !important;color:#94a3b8 !important;border:1px solid #475569}
            .welcome-page .welcome-actions .btn-secondary:hover{background:#334155 !important;color:#f1f5f9 !important}
            @media (min-width:640px){.welcome-page .welcome-card{padding:2.5rem}.welcome-page .welcome-card h1{font-size:2rem}}
        </style>
    </head>
    <body class="welcome-page">
        <div class="welcome-container">
            @if (Route::has('login'))
                <nav>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="outline">{{ __('Dashboard') }}</a>
                        <a href="{{ route('profile.edit') }}" class="primary">{{ __('Profile') }}</a>
                    @else
                        <a href="{{ route('login') }}" class="outline">{{ __('Log in') }}</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="primary">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </nav>
            @endif

            <main class="welcome-card">
                <h1>{{ __('Registration & Authentication') }}</h1>
                <p class="tagline">{{ __('Secure sign-up, email verification, password recovery, and profile management.') }}</p>

                <ul class="welcome-features">
                    <li><span class="dot"></span>{{ __('Registration with email and password') }}</li>
                    <li><span class="dot"></span>{{ __('Email confirmation after sign-up') }}</li>
                    <li><span class="dot"></span>{{ __('Password recovery via email') }}</li>
                    <li><span class="dot"></span>{{ __('User agreement acceptance') }}</li>
                    <li><span class="dot"></span>{{ __('Profile: name, email, phone') }}</li>
                </ul>

                @guest
                    <div class="welcome-actions">
                        <a href="{{ route('register') }}" class="btn-primary">{{ __('Create account') }}</a>
                        <a href="{{ route('login') }}" class="btn-secondary">{{ __('Log in') }}</a>
                    </div>
                @else
                    <div class="welcome-actions">
                        <a href="{{ url('/dashboard') }}" class="btn-primary">{{ __('Go to Dashboard') }}</a>
                        <a href="{{ route('profile.edit') }}" class="btn-secondary">{{ __('Edit profile') }}</a>
                    </div>
                @endguest
            </main>
        </div>
    </body>
</html>
