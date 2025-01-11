<x-app-layout>
    <div class="flex py-12">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <div class="flex-1">
            <div class="py-1 h-screen overflow-y-auto">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Vault List Box -->
                <div class="rounded-lg p-6" style="background-color: #102A45;">
                    <div class="flex justify-between items-center mb-4">
                    <h2 class="text-white text-xl font-semibold">Vaults List</h2>
                    <div class="flex space-x-2">
                        <select id="locationFilter" class="form-select bg-white text-black rounded-lg border border-blue-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            <option value="All">All</option>
                        </select>
                        <input type="text" id="searchInput" placeholder="Search..." class="bg-white text-[#102A45] rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300"/>
                    </div>
                    </div>
                    <div class="container mt-5 overflow-auto max-h-[400px]">
                    <table class="table-auto w-full border border-blue-500 rounded-lg overflow-hidden">
                        <thead class="bg-[#102A45] text-white text-lg font-semibold">
                        <tr>
                            <th class="px-4 py-2 text-center">Vault Number</th>
                            <th class="px-4 py-2 text-center">Location</th>
                            <th class="px-4 py-2 text-center">Availability</th>
                        </tr>
                        </thead>
                        <tbody id="vaultsTableBody" class="bg-white border border-blue-500 text-blue-900 shadow-lg rounded-xl p-6 mt-6">
                        @foreach($applicantVaults as $vault)
                            <tr>
                            <td class="px-4 py-2 text-center">{{ $vault->vault_number }}</td>
                            <td class="px-4 py-2 text-center">{{ $vault->id }}</td>
                            <td class="px-4 py-2 text-center">{{ $vault->price }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="flex justify-end space-x-4 mt-4">
                        <button id="prevButton" class="px-4 py-2 bg-blue-500 text-white rounded-lg disabled:opacity-50" disabled>Previous</button>
                        <button id="nextButton" class="px-4 py-2 bg-blue-500 text-white rounded-lg disabled:opacity-50">Next</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
</x-app-layout>