<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applicant') }}
        </h2>
    </x-slot>

    <div class="flex py-12">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>
        <!-- Main Content -->
        <div class="max-h-[600px] overflow-auto border border-black bg-[#102A45] text-white rounded-lg p-6 w-full mx-6">
            <h3 class="text-2xl font-semibold mb-6 text-white">Requirements</h3>
            <table class="table-fixed w-full divide-y divide-gray-200 text-center border-collapse border-separate border-spacing-y-2 rounded-md overflow-hidden">
                <thead class="bg-[#102A45] w-full">
                    <tr>
                        <th class="p-6">ID</th>
                        <th class="p-6">Name</th>
                        <th class="p-6">Type</th>
                        <th class="p-6">Format</th>
                        <th class="p-6">Date</th>
                        <th class="p-6">Time</th>
                        <th class="p-6">Status</th>
                    </tr>
                </thead>
                <tbody class="auto-rows-auto">
                    <tr class="bg-white text-black">
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                    </tr>
                    <tr class="bg-white text-black">
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                    </tr>
                    <tr class="bg-white text-black">
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                    </tr>
                    <tr class="bg-white text-black">
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                    </tr>
                    <tr class="bg-white text-black">
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                    </tr>
                    <tr class="bg-white text-black">
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                    </tr>
                    <tr class="bg-white text-black">
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                    </tr>
                    <tr class="bg-white text-black">
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                        <td class="p-6"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>  
</x-app-layout>