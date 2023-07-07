<x-layout>
    <x-slot:title>
        Product Page
    </x-slot>
    <div id="app">
        <product-component :list='@json($list)'></product-component>
    </div>
</x-layout>
