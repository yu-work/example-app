@props(['content'])

<span {{ $attributes->merge(['class' => 'text-component']) }}>
    {{ $content }}
</span>
