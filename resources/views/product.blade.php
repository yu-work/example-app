<x-layout>
    <x-slot:title>
        Product Page
    </x-slot>
    <div id="app">
        <product-component :list='{
            value : @json($list),
        }'></product-component>
    </div>
</x-layout>
