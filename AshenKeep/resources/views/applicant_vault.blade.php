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
                                    <select 
                                        id="locationFilter"
                                        class="form-select bg-white text-black rounded-lg border border-blue-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    >
                                        <option value="All">All</option>
                                    </select>

                                    <input 
                                        type="text" 
                                        id="searchInput" 
                                        placeholder="Search..." 
                                        class="bg-white text-[#102A45] rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300"
                                    />
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

    <script>
        let vaultData = [
    { vaultNumber: "1", location: "North", availability: "Available" },
    { vaultNumber: "2", location: "North", availability: "Unavailable" },
    { vaultNumber: "3", location: "North", availability: "Available" },
    { vaultNumber: "4", location: "North", availability: "Unavailable" },
    { vaultNumber: "5", location: "North", availability: "Available" },
    { vaultNumber: "6", location: "North", availability: "Unavailable" },
    { vaultNumber: "7", location: "North", availability: "Available" },
    { vaultNumber: "8", location: "North", availability: "Unavailable" },
    { vaultNumber: "9", location: "North", availability: "Available" },
    { vaultNumber: "10", location: "North", availability: "Unavailable" },
    { vaultNumber: "11", location: "North", availability: "Available" },
    { vaultNumber: "12", location: "South", availability: "Available" },
    { vaultNumber: "13", location: "South", availability: "Unavailable" },
    { vaultNumber: "14", location: "South", availability: "Available" },
    { vaultNumber: "15", location: "South", availability: "Unavailable" },
    { vaultNumber: "16", location: "South", availability: "Available" },
    { vaultNumber: "17", location: "South", availability: "Unavailable" },
    { vaultNumber: "18", location: "South", availability: "Available" },
    { vaultNumber: "19", location: "South", availability: "Unavailable" },
    { vaultNumber: "20", location: "South", availability: "Available" },
    { vaultNumber: "21", location: "South", availability: "Unavailable" },
    { vaultNumber: "22", location: "South", availability: "Available" },
    { vaultNumber: "23", location: "East", availability: "Available" },
    { vaultNumber: "24", location: "East", availability: "Unavailable" },
    { vaultNumber: "25", location: "East", availability: "Available" },
    { vaultNumber: "26", location: "East", availability: "Unavailable" },
    { vaultNumber: "27", location: "East", availability: "Available" },
    { vaultNumber: "28", location: "East", availability: "Unavailable" },
    { vaultNumber: "29", location: "East", availability: "Available" },
    { vaultNumber: "30", location: "East", availability: "Unavailable" },
    { vaultNumber: "31", location: "East", availability: "Available" },
    { vaultNumber: "32", location: "East", availability: "Unavailable" },
    { vaultNumber: "33", location: "East", availability: "Available" },
    { vaultNumber: "34", location: "West", availability: "Available" },
    { vaultNumber: "35", location: "West", availability: "Unavailable" },
    { vaultNumber: "36", location: "West", availability: "Available" },
    { vaultNumber: "37", location: "West", availability: "Unavailable" },
    { vaultNumber: "38", location: "West", availability: "Available" },
    { vaultNumber: "39", location: "West", availability: "Unavailable" },
    { vaultNumber: "40", location: "West", availability: "Available" },
    { vaultNumber: "41", location: "West", availability: "Unavailable" },
    { vaultNumber: "42", location: "West", availability: "Unavailable" },
    { vaultNumber: "43", location: "West", availability: "Unavailable" },
    { vaultNumber: "44", location: "West", availability: "Unavailable" }
];

        let currentPage = 1;
        const vaultsPerPage = 10;

        window.onload = () => {
            updateLocationDropdown();
            displayVaultTable();
        };

        function displayVaultTable() {
            const locationFilter = document.getElementById("locationFilter").value;
            const searchTerm = document.getElementById("searchInput").value.toLowerCase();
            const tableBody = document.getElementById("vaultsTableBody");

            // Filter based on location and search term
            const filteredVaults = vaultData.filter(vault => {
                const matchesLocation = locationFilter === "All" || vault.location === locationFilter;
                const matchesSearch = vault.vaultNumber.toLowerCase().includes(searchTerm) || 
                                      vault.location.toLowerCase().includes(searchTerm) || 
                                      vault.availability.toLowerCase().includes(searchTerm);
                return matchesLocation && matchesSearch;
            });

            // Paginate the data
            const paginatedVaults = filteredVaults.slice((currentPage - 1) * vaultsPerPage, currentPage * vaultsPerPage);

            // Render rows
            tableBody.innerHTML = paginatedVaults.map(vault => `
                <tr class="bg-white rounded-lg shadow-md">
                    <td class="text-center px-4 py-2 border border-gray-300">${vault.vaultNumber}</td>
                    <td class="text-center px-4 py-2 border border-gray-300">${vault.location}</td>
                    <td class="text-center px-4 py-2 border border-gray-300">${vault.availability}</td>
                </tr>
            `).join("");

            // Enable/disable navigation buttons
            document.getElementById("prevButton").disabled = currentPage === 1;
            document.getElementById("nextButton").disabled = currentPage * vaultsPerPage >= filteredVaults.length;
        }

        function updateLocationDropdown() {
            const locationFilter = document.getElementById("locationFilter");
            const uniqueLocations = [...new Set(vaultData.map(vault => vault.location))];

            // Populate dropdown with locations
            locationFilter.innerHTML = `<option value="All">All</option>`;
            uniqueLocations.forEach(location => {
                const option = document.createElement("option");
                option.value = location;
                option.textContent = location;
                locationFilter.appendChild(option);
            });
        }

        document.getElementById("locationFilter").addEventListener("change", () => {
            currentPage = 1;
            displayVaultTable();
        });

        document.getElementById("prevButton").addEventListener("click", () => {
            if (currentPage > 1) {
                currentPage--;
                displayVaultTable();
            }
        });

        document.getElementById("nextButton").addEventListener("click", () => {
            currentPage++;
            displayVaultTable();
        });

        document.getElementById("searchInput").addEventListener("input", () => {
            currentPage = 1;
            displayVaultTable();
        });
    </script>
</x-app-layout>
