<x-app-layout>

    <div class="flex py-12">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <h1 class="text-2xl font-bold mb-6">Hi, {{ Auth::user()->name }}!</h1>   
                    </div>
                </div>

                <div class="max-h-96 overflow-auto border border-black bg-blue-900 text-white rounded-lg p-6 w-[1500px] ml-auto mr-[100px]">
                    <h3 class="text-2xl font-semibold mb-6 text-white">Manage Requirements</h3>
                    <table class="table-fixed w-full divide-y divide-gray-200 text-center border-collapse border-separate border-spacing-y-2 rounded-md overflow-hidden">
                        <thead class="bg-blue-900">
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Type</th>
                                <th class="px-4 py-2">Format</th>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Time</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Aciton</th>
                            </tr>
                            </thead>
                            <tbody class="auto-rows-auto">
                                <tr class="bg-white text-black">
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-2">
                                        <div class="flex gap-2">
                                            <x-apply-button class="bg-green-500 text-white px-4 py-2 rounded">Approve</x-apply-button>
                                            <x-apply-button class="bg-red-500 text-white px-4 py-2 rounded">Reject</x-apply-button>
                                        </div>
                                    </td>
                                </tr>
            </div>
        </div>
        
    </div>
</x-app-layout>