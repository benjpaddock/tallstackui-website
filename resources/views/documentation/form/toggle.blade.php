<x-layout>
    <x-slot:title>
        Form Toggle
    </x-slot:title>
    <x-slot:description>
        Form toggle component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="toggle" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-toggle />
        </x-preview>
    </x-section>
    <x-section title="Label">
        <x-preview language="blade" :contents="$label">
            <div class="space-y-2">
                <x-toggle label="Receive Alert" />
                <x-toggle label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-toggle sm />
                <x-toggle md />
                <x-toggle lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-toggle label="Primary" />
                <x-toggle color="secondary" label="Secondary" />
                <x-toggle color="slate" label="Slate" />
                <x-toggle color="gray" label="Gray" />
                <x-toggle color="zinc" label="Zinc" />
                <x-toggle color="neutral" label="Neutral" />
                <x-toggle color="stone" label="Stone" />
                <x-toggle color="red" label="Red" />
                <x-toggle color="orange" label="Orange" />
                <x-toggle color="amber" label="Amber" />
                <x-toggle color="yellow" label="Yellow" />
                <x-toggle color="lime" label="Lime" />
                <x-toggle color="green" label="Green" />
                <x-toggle color="emerald" label="Emerald" />
                <x-toggle color="teal" label="Teal" />
                <x-toggle color="cyan" label="Cyan" />
                <x-toggle color="sky" label="Sky" />
                <x-toggle color="blue" label="Blue" />
                <x-toggle color="indigo" label="Indigo" />
                <x-toggle color="violet" label="Violet" />
                <x-toggle color="purple" label="Purple" />
                <x-toggle color="fuchsia" label="Fuchsia" />
                <x-toggle color="pink" label="Pink" />
                <x-toggle color="rose" label="Rose" />
                <x-toggle color="black" label="Black" />
                <x-toggle color="white" label="White" />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.form.radio') }}" text="Form Radio" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.ui.alert') }}" text="Alert" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
