<x-guest-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs :breadcrumbs="[['name' => 'Index', 'url' => route('bug.index')]]" />
    </x-slot>
    <main>
        <livewire:patient-livewire>
    </main>
</x-guest-layout>
