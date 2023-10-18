@props(['title' => null, 'description' => null, 'id' => null])

<section {{ $attributes->merge(['class' => 'text-gray-600 mb-4 dark:text-slate-400']) }} @if ($id) id="{{ $id }}" @endif>
    @if ($title)
        <h1 @class(['text-2xl tracking-tight text-pink-600 font-medium dark:text-white', 'mb-4' => !$description])>
            {{ $title }}
        </h1>
    @endif
    @if ($description)
        <p class="text-sm text-slate-500 mb-4">{{ $description }}</p>
    @endif
    {!! $slot !!}
</section>
