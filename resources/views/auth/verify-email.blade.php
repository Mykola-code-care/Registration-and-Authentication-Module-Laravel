<x-guest-layout>
    <div class="mb-4 text-sm text-slate-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (config('mail.default') === 'log')
        <div class="mb-4 p-3 rounded-lg bg-amber-500/10 border border-amber-500/30 text-sm text-amber-200">
            <strong>{{ __('Development mode') }}:</strong>
            {{ __('Emails are not sent; they are written to the log file.') }}
            {{ __('Open') }} <code class="bg-slate-700 px-1 rounded">storage/logs/laravel.log</code>
            {{ __('and search for "Verify Email" or "verification" to find the link.') }}
            {{ __('To receive real emails, set') }} <code class="bg-slate-700 px-1 rounded">MAIL_MAILER=smtp</code>
            {{ __('and configure a free SMTP (e.g. Mailtrap) in .env') }}
        </div>
    @endif

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-slate-400 hover:text-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-slate-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
