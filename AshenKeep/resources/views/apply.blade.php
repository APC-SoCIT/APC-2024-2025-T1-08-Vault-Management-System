<x-app-layout>
    <div class="flex h-screen">
        <x-side-navig-bar />
        <!-- Main Content -->
        <div class="flex-1 p-6 bg-keep-white">
            @livewire('application')
        </div>
    </div>
</x-app-layout>