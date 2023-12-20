<x-guest-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs :breadcrumbs="[['name' => 'Index', 'url' => route('bug.index')]]" />
    </x-slot>
    <main>
        <livewire:patient-livewire :patientSearch="$pt">
    </main>
</x-guest-layout>
