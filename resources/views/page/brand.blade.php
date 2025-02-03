<x-app.layout>
    <x-slot:title>{{ $titlePage }}</x-slot:title>
    <h1 style="text-align: center">Брэнды</h1>
    <livewire:brand-list :brands='$brands'/>
</x-app.layout>
