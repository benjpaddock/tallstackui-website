<x-layout>
    <x-slot:title>
        Color Personalization
    </x-slot:title>
    <x-slot:description>
        The primary and secondary color personalization.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            All TallStackUi components are based on three custom colors: primary, secondary and dark. Additionally,
            all other <a class="underline" href="https://tailwindcss.com/docs/customizing-colors" target="_blank">colors are the original TailwindCSS colors.</a> You can customize the primary and secondary
            colors to your liking by following the TailwindCSS custom color concept.
        </p>
    </x-section>
    <x-section title="Personalizing Colors">
        <p>1. Open the TailwindCSS configuration file and enter the following content:</p>
        <x-code language="js" :contents="$content"/>
        <x-warning text="Replace the hexadecimal values above with your desired colors." />
        <p class="mt-2">2. Rebuild your assets:</p>
        <x-code language="shell" :contents="$build"/>
        <p>3. Do a general clean up of Laravel using the command:</p>
        <x-code language="shell" :contents="$cleanup"/>
    </x-section>
</x-layout>
