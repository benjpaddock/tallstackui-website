<x-layout :torchlight="false">
    <x-slot:title>
        Label Component
    </x-slot:title>
    <x-slot:description>
        The generic error component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="label" />
    </x-slot:personalization>
    <x-card>
        <p class="text-justify">
            TallStackUi has several components that are actually created for internal use. This documentation
            serves only to reflect the customizable blocks of these components, so that you can customize them using
            soft or deep personalization, if you wish.
        </p>
    </x-card>
</x-layout>
