<x-guest-layout>
    <div class="prose prose-sm max-w-none text-gray-700">
        <h1 class="text-xl font-semibold text-gray-900">{{ __('User Agreement') }}</h1>
        <p class="mt-2">{{ __('Last updated:') }} {{ now()->format('d.m.Y') }}</p>

        <h2 class="mt-6 text-lg font-medium text-gray-900">1. {{ __('Acceptance') }}</h2>
        <p>{{ __('By registering an account you agree to these terms and our privacy policy.') }}</p>

        <h2 class="mt-6 text-lg font-medium text-gray-900">2. {{ __('Account') }}</h2>
        <p>{{ __('You are responsible for keeping your password secure and for all activity under your account.') }}</p>

        <h2 class="mt-6 text-lg font-medium text-gray-900">3. {{ __('Email verification') }}</h2>
        <p>{{ __('You must verify your email address to access all features. We may send you service emails.') }}</p>

        <h2 class="mt-6 text-lg font-medium text-gray-900">4. {{ __('Contact') }}</h2>
        <p>{{ __('For questions contact the administrator.') }}</p>

        <div class="mt-8">
            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 underline">{{ __('Back to registration') }}</a>
        </div>
    </div>
</x-guest-layout>
