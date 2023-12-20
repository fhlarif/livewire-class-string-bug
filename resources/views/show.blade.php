<x-guest-layout>
    <x-slot name="breadcrumbs">
        <x-breadcrumbs :breadcrumbs="[
            ['name' => 'Index', 'url' => route('bug.index', ['pt' => $pt])],
            ['name' => 'Show Patient', 'url' => null],
        ]" />
    </x-slot>
    <main>
        Patient Show
    </main>
</x-guest-layout>
