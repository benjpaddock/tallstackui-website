<x-layout>
    <x-slot:title>
        Soft Personalization
    </x-slot:title>
    <x-slot:description>
        The soft personalization. Easy way to personalize all TallStackUi components.
    </x-slot:description>
    <x-section title="Concept">
        <p class="mb-4 text-justify">
            <u>Soft personalization consists of personalize components at run time</u>, through a service provider, such as <x-block>AppServiceProvider</x-block>.
            The idea behind soft personalization is to tap into personalizable blocks of each component. Even if you are just starting
            to work with Laravel and Livewire, with a little attention to the documents below you will be able to customize the components
            using this concept.
        </p>
    </x-section>
    <x-section title="Example of Component Structure">
        <div class="mb-4 inline-flex items-center gap-1">
            <p>
                Example of the <a class="underline" href="{{ route('documentation.ui.avatar') }}">Avatar</a> component classes
                <x-outdated-contente-tooltip />
            </p>
        </div>
        <x-code language="php" :contents="$avatar"/>
        <p class="mt-2 text-justify">
            All component classes are divided into class blocks applicable to their appropriate required locations in the
            Blade file associated with the component. TallStackUi was designed with soft personalization in mind: an easy way
            to personalize components, so even if the developer is a beginner, he doesn't need to have difficulty personalizing the components.
        </p>
    </x-section>
    <x-section title="The Personalization">
        <p class="mb-4 text-justify">
            Let's take a look at an example:
        </p>
        <x-code language="php" :contents="$example"/>
        <p class="mt-2 text-justify">
            In this example we are touching and replacing all the classes in the <x-block>input.class.base</x-block>
            block of the <x-block>input</x-block> component with the content: <x-block>w-full rounded-full</x-block>.
            This means that every input component displayed on the application pages will have these classes, instead of the
            original component classes.
        </p>
    </x-section>
    <x-section title="Fluent Personalization">
        <p class="mb-4 text-justify">
            Just like <a href="https://pestphp.com" target="_blank" class="underline">Pest</a>, TallStackUi offers a concept of
            fluency when using the <x-block>and</x-block> like a property or method:
        </p>
        <x-code language="php" :contents="$fluent"/>
        <p class="text-justify">
            The idea behind this approach is to personalize more than one component at the same time.
        </p>
    </x-section>
    <x-section title="Multiple Personalization Ways">
        <p class="text-justify mb-4">
            You can personalize one block at a time or all at once:
        </p>
        <x-code language="php" :contents="$usages"/>
    </x-section>
    <x-section title="Invokable Class">
        <p class="text-justify mb-4">
            You may have noticed that in the example above we used the <x-block>InputPersonalization</x-block> class.
            This is a simple invokable class, because TallStackUi also allows you to make your personalization into classes.
            This approach is ideal if you are someone who prioritizes organization above all else. Let's take a look at an example:
        </p>
        <p class="mt-4">1. Preparing:</p>
        <x-code language="php" :contents="$invokableExample"/>
        <p class="mt-2">2. Personalizing:</p>
        <x-code language="php" :contents="$invokableClass"/>
    </x-section>
    <x-section title="Component Data Parameters">
        <p class="text-justify mb-4">
            You may have noticed that the example above there is a variable called <x-block>$data</x-block>. This variable is an array
            containing all the component's properties, <u>including the values passed when you used the component somewhere in your application.</u>
        </p>
        <p class="mt-4">Using the <x-block>input</x-block> like this:</p>
        <x-code language="blade" :contents="$usingComponent"/>
        <p class="mt-2">The <x-block>$data</x-block> will be this array:</p>
        <x-code language="php" :contents="$data"/>
        <p class="text-justify">
            You can use this to interact with your personalization.
        </p>
    </x-section>
    <x-section title="Preserving Default Classes">
        <p class="text-justify mb-4">
            Although all the examples above are valid, they overwrite the original block classes by defining the second parameter
            of the <x-block>blocks</x-block> method, this is a way of doing a complete replacement of the original component classes
            by the blocks, an expected behavior when the soft personalization was created. Luckily we have an easy way to interact
            with the original classes by touching their content but preserving everything else. Let's take a look at an example:
            <x-code :contents="$replace"/>
            <p class="mt-2">
                Note that in the example above we omitted the second parameter of the <x-block>blocks</x-block> method,
                this way we can access four useful methods that allow us to touch the component's original
                classes in an easy way in order to make modifications while maintaining the rest of the original content.
            </p>
            <p class="mt-4">All useful methods:</p>
            <x-code :contents="$usefulMethods"/>
        </p>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes">
        <p class="text-justify mb-4">
            If you are personalizing your components, there is something you should know. As classes are TailwindCSS
            classes you need to ensure that TailwindCSS watches the files from which the classes you defined come,
            so personalizations will take effect. To do this, you must edit your <x-block>tailwindcss.config.js</x-block>
            file inserting this content:
        </p>
        <x-code language="js" :contents="$tailwindcss"/>
    </x-section>
    <x-section title="Component Personalizable Blocks">
        <p class="text-justify mb-4">
            All component documentation mentions their respective blocks in a button at the top of the page.
        </p>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.personalization.concept') }}" text="Personalization Concept" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.personalization.deep') }}" text="Deep Personalization" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
