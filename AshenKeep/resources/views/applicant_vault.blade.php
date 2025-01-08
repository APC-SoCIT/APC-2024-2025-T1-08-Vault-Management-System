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
                                    <!-- Dropdown -->
                                    <select 
                                        class="form-select bg-white text-black rounded-lg border border-blue-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    >
                                        <option value="all">All</option>
                                    </select>

                                    <input 
                                        type="text" 
                                        id="searchInput" 
                                        placeholder="Search..." 
                                        class="bg-white text-[#102A45] rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300"
                                    />
                                </div>
                            </div>
                            <div class="container mt-5">
                                <table class="table-auto w-full border border-blue-500 rounded-lg overflow-hidden">
                                    <thead class="bg-[#102A45] text-white text-lg font-semibold">
                                        <tr>
                                            <th class="px-4 py-2 text-center">Vault Number</th>
                                            <th class="px-4 py-2 text-center">Location</th>
                                            <th class="px-4 py-2 text-center">Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody id="vaultsTableBody" class="bg-white text-blue-900 text-center">
                                        <tr>
                                            <td class="border px-4 py-2">V001</td>
                                            <td class="border px-4 py-2">Center</td> 
                                            <td class="border px-4 py-2">Occupied</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V002</td>
                                            <td class="border px-4 py-2">Center</td> 
                                            <td class="border px-4 py-2">Occupied</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V003</td>
                                            <td class="border px-4 py-2">Center</td> 
                                            <td class="border px-4 py-2">Occupied</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V004</td>
                                            <td class="border px-4 py-2">Center</td> 
                                            <td class="border px-4 py-2">Occupied</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V005</td>
                                            <td class="border px-4 py-2">West</td> 
                                            <td class="border px-4 py-2">Available</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V006</td>
                                            <td class="border px-4 py-2">East</td> 
                                            <td class="border px-4 py-2">Occupied</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V007</td>
                                            <td class="border px-4 py-2">West</td> 
                                            <td class="border px-4 py-2">Available</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V008</td>
                                            <td class="border px-4 py-2">East</td> 
                                            <td class="border px-4 py-2">Occupied</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V009</td>
                                            <td class="border px-4 py-2">East</td> 
                                            <td class="border px-4 py-2">Available</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">V010</td>
                                            <td class="border px-4 py-2">West</td> 
                                            <td class="border px-4 py-2">Occupied</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="flex justify-between items-center mt-4">

                                    <span id="pageInfo" class="text-white text-m">Showing 10 vaults</span>

                                    <div class="flex space-x-2">
                                        <button 
                                            id="prevButton" 
                                            class="bg-[#102A45] text-white px-4 py-2 rounded-lg hover:bg-blue-800 disabled:opacity-50"
                                        >
                                            Previous
                                        </button>
                                        <button 
                                            id="nextButton" 
                                            class="bg-[#102A45] text-white px-4 py-2 rounded-lg hover:bg-blue-800 disabled:opacity-50"
                                        >
                                        Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
