<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dessing Patterns</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite('resources/css/app.css')
</head>

<body class="antialiased h-full bg-neutral-200">

    <div class="px-4">
        <h1 class="text-semibold text-2xl text-center uppercase mt-4 bg-white">
            Dessing Paterns
        </h1>

        <div class="grid grid-cols-3 gap-4 mx-auto mt-8">
            <div class="bg-red-100 text-center shadow-md">
                <x-sub-title>Creational</x-sub-title>

                <div class="flex flex-col">
                    <x-link-button route="singleton">Singleton</x-link-button>
                    <x-link-button route="factory">Factory</x-link-button>
                    <x-link-button route="abstractFactory">Abstract Factory</x-link-button>
                    <x-link-button route="prototype">Prototype</x-link-button>
                    <x-link-button route="builder">Builder</x-link-button>
                </div>
            </div>

            <div class="bg-red-200 text-center shadow-md">
                <x-sub-title>Structural</x-sub-title>

                <div class="flex flex-col">
                    <x-link-button route="adapter">Adapter</x-link-button>
                    <x-link-button route="decorator">Decorator</x-link-button>
                    <x-link-button route="facade">Facade</x-link-button>
                    <x-link-button route="bridge">Bridge</x-link-button>
                </div>

            </div>

            <div class="bg-red-300 text-center shadow-md">
                <x-sub-title>Behavioral</x-sub-title>

                <div class="flex flex-col">
                    <x-link-button route="strategy">Strategy</x-link-button>
                    <x-link-button route="memento">Memento</x-link-button>
                    <x-link-button route="observer">Observer</x-link-button>
                    <x-link-button route="state">State</x-link-button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
