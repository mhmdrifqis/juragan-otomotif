<div @if(isset($attributes)) {{ $attributes->merge(['class' => 'flex items-center gap-2']) }} @else class="flex items-center gap-2" @endif>
    <img src="{{ asset('assets/images/logo.png') }}" 
         alt="Logo" 
         class="h-8 w-auto" 
         onerror="this.style.display='none'">
    <span class="text-xl font-black tracking-tight text-slate-900 dark:text-white uppercase">
        JURAGAN<span class="text-indigo-600 dark:text-indigo-500">OTOMOTIF</span>
    </span>
</div>
