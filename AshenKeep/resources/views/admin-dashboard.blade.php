<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-6xl text-[#102A45] dark:text-gray-200 leading-tight">
            Hi, {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="hidden sm:flex min-h-full">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="container mx-auto p-1">
            <div class="bg-[#102A45] text-[#F9F4F1] rounded-lg p-6 min-h-full">
                <p class="font-semibold text-3xl">Get Started</p>
            </div>
        </div>
    </div>
</x-app-layout>
