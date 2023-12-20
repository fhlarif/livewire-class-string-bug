<div>

    <input type="search" id="default-search" wire:model.live="patientSearch"
        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
        placeholder="Search patients...">
    <br>
    <a href="{{ route('bug.show', ['pt' => $patientSearch]) }}">{{ $patientSearch }}</a>
</div>
