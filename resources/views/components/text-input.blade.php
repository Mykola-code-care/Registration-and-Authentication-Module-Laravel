@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-slate-600 bg-slate-700 text-slate-100 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500']) }}>
