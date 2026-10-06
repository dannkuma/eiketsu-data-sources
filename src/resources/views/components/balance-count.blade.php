@props(['count' => 0])

<div {{ $attributes->merge(['class' => 'flex justify-start items-center font-medium bg-brand-balance w-40']) }}>
    <img class="inline-block size-10 object-contain mx-2" src="{{ asset('images/balance.png') }}" alt="大判数表示">
    <p class="text-white font-bold text-lg"><span class="text-xs">×</span>{{ $count }}</p>
</div>
