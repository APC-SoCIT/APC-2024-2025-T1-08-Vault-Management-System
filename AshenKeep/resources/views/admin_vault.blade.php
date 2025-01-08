<x-app-layout>
    <div class="flex py-12 h-screen">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <div class="flex-1 ml-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                        <!-- Vault List Box -->
                        <div class="rounded-lg p-6 bg-[#102A45]">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-white text-xl font-semibold">Vaults List</h2>
                                <div class="flex items-center space-x-4 ml-auto">
                                    <!-- Filter dropdown -->
                                    <select id="locationFilter" class="form-select bg-white text-black rounded-lg border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300"></select>
                                    <!-- Search Bar -->
                                    <input type="text" id="searchInput" class="form-input bg-white text-black rounded-lg border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Search" />
                                </div>
                            </div>

                            <!-- Table info -->
                            <div class="overflow-auto max-h-[400px]">
                                <table class="table table-bordered w-full rounded-lg overflow-hidden">
                                    <thead class="bg-[#102A45] text-white text-lg font-semibold rounded-t-lg">
                                        <tr>
                                            <th class="p-2">Vault Number</th>
                                            <th class="p-2">Location</th>
                                            <th class="p-2">Vault Owner ID</th>
                                            <th class="p-2">Owner</th>
                                            <th class="p-2">Date Issued</th>
                                            <th class="p-2">Urns Quantity</th>
                                            <th class="p-2">Availability</th>
                                            <th class="p-2">Actions</th> <!-- New column for Edit/Save -->
                                        </tr>
                                    </thead>
                                    <tbody id="vaultTableBody" class="bg-white text-blue-900 shadow-lg rounded-xl p-6 mt-6">
                                        <!-- Vault data appears here -->
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

    <script>
        // Dummy data for vaults (temporary)
        let vaultData = [
            { vaultNumber: "1", location: "North", vaultOwnerID: "N001", owner: "John Doe", dateIssued: "01/01/2023", urnsQuantity: "5", availability: "Available" },
            { vaultNumber: "2", location: "North", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "3", location: "North", vaultOwnerID: "N003", owner: "Emily Johnson", dateIssued: "01/03/2023", urnsQuantity: "6", availability: "Available" },
            { vaultNumber: "4", location: "North", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "5", location: "North", vaultOwnerID: "N005", owner: "Sarah White", dateIssued: "01/05/2023", urnsQuantity: "8", availability: "Available" },
            { vaultNumber: "6", location: "North", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "7", location: "North", vaultOwnerID: "N007", owner: "Sophia Martinez", dateIssued: "01/07/2023", urnsQuantity: "9", availability: "Available" },
            { vaultNumber: "8", location: "North", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "9", location: "North", vaultOwnerID: "N009", owner: "Olivia Clark", dateIssued: "01/09/2023", urnsQuantity: "10", availability: "Available" },
            { vaultNumber: "10", location: "North", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "11", location: "North", vaultOwnerID: "N011", owner: "Ava Walker", dateIssued: "01/11/2023", urnsQuantity: "6", availability: "Available" },
            
            { vaultNumber: "12", location: "South", vaultOwnerID: "S001", owner: "William King", dateIssued: "01/01/2023", urnsQuantity: "3", availability: "Available" },
            { vaultNumber: "13", location: "South", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "14", location: "South", vaultOwnerID: "S003", owner: "Joshua Young", dateIssued: "01/03/2023", urnsQuantity: "5", availability: "Available" },
            { vaultNumber: "15", location: "South", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "16", location: "South", vaultOwnerID: "S005", owner: "Daniel Perez", dateIssued: "01/05/2023", urnsQuantity: "9", availability: "Available" },
            { vaultNumber: "17", location: "South", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "18", location: "South", vaultOwnerID: "S007", owner: "Ethan Anderson", dateIssued: "01/07/2023", urnsQuantity: "10", availability: "Available" },
            { vaultNumber: "19", location: "South", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "20", location: "South", vaultOwnerID: "S009", owner: "Jacob Jackson", dateIssued: "01/09/2023", urnsQuantity: "8", availability: "Available" },
            { vaultNumber: "21", location: "South", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "22", location: "South", vaultOwnerID: "S011", owner: "Benjamin Harris", dateIssued: "01/11/2023", urnsQuantity: "7", availability: "Available" },
            
            { vaultNumber: "23", location: "East", vaultOwnerID: "E001", owner: "Alexander Martinez", dateIssued: "01/01/2023", urnsQuantity: "6", availability: "Available" },
            { vaultNumber: "24", location: "East", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "25", location: "East", vaultOwnerID: "E003", owner: "Michael Lewis", dateIssued: "01/03/2023", urnsQuantity: "4", availability: "Available" },
            { vaultNumber: "26", location: "East", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "27", location: "East", vaultOwnerID: "E005", owner: "David Adams", dateIssued: "01/05/2023", urnsQuantity: "8", availability: "Available" },
            { vaultNumber: "28", location: "East", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "29", location: "East", vaultOwnerID: "E007", owner: "Lucas Hernandez", dateIssued: "01/07/2023", urnsQuantity: "9", availability: "Available" },
            { vaultNumber: "30", location: "East", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "31", location: "East", vaultOwnerID: "E009", owner: "Jackson Moore", dateIssued: "01/09/2023", urnsQuantity: "3", availability: "Available" },
            { vaultNumber: "32", location: "East", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "33", location: "East", vaultOwnerID: "E011", owner: "Amelia Young", dateIssued: "01/11/2023", urnsQuantity: "6", availability: "Available" },
            
            { vaultNumber: "34", location: "West", vaultOwnerID: "W001", owner: "Daniel Harris", dateIssued: "01/01/2023", urnsQuantity: "9", availability: "Available" },
            { vaultNumber: "35", location: "West", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "36", location: "West", vaultOwnerID: "W003", owner: "Ethan Scott", dateIssued: "01/03/2023", urnsQuantity: "6", availability: "Available" },
            { vaultNumber: "37", location: "West", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "38", location: "West", vaultOwnerID: "W005", owner: "Joshua Davis", dateIssued: "01/05/2023", urnsQuantity: "10", availability: "Available" },
            { vaultNumber: "39", location: "West", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "40", location: "West", vaultOwnerID: "W007", owner: "James Miller", dateIssued: "01/07/2023", urnsQuantity: "4", availability: "Available" },
            { vaultNumber: "41", location: "West", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "42", location: "West", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "43", location: "West", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" },
            { vaultNumber: "44", location: "West", vaultOwnerID: "-", owner: "-", dateIssued: "MM/DD/YY", urnsQuantity: "-", availability: "Unavailable" }
        ];

        let currentPage = 1;
        const vaultsPerPage = 10; // Show the first 10 vaults only

        window.onload = () => {
            updateLocationDropdown(); // Set up the dropdown
            displayVaultTable(); 
        };

        function displayVaultTable() {
            const selectedLocation = document.getElementById("locationFilter").value;
            const searchTerm = document.getElementById("searchInput").value.toLowerCase();
            const tableBody = document.getElementById("vaultTableBody");

            // Filter data based on location
            const filteredData = selectedLocation === "All"
                ? vaultData
                : vaultData.filter((vault) => vault.location === selectedLocation);

            // Further filter data based on search term
            const searchedData = filteredData.filter((vault) =>
                vault.vaultNumber.toLowerCase().includes(searchTerm) ||
                vault.owner.toLowerCase().includes(searchTerm) ||
                vault.location.toLowerCase().includes(searchTerm) ||
                vault.availability.toLowerCase().includes(searchTerm)
            );

            // Get data for the current page
            const paginatedData = searchedData.slice((currentPage - 1) * vaultsPerPage, currentPage * vaultsPerPage);

            // Add each vault to the table
            tableBody.innerHTML = paginatedData
                .map(
                    (vault, index) => `
                        <tr>
                            <td class="text-center" id="vaultNumber-${index}" contenteditable="false">${vault.vaultNumber}</td>
                            <td class="text-center" id="location-${index}" contenteditable="false">${vault.location}</td>
                            <td class="text-center" id="vaultOwnerID-${index}" contenteditable="false">${vault.vaultOwnerID}</td>
                            <td class="text-center" id="owner-${index}" contenteditable="false">${vault.owner}</td>
                            <td class="text-center" id="dateIssued-${index}" contenteditable="false">${vault.dateIssued}</td>
                            <td class="text-center" id="urnsQuantity-${index}" contenteditable="false">${vault.urnsQuantity}</td>
                            <td class="text-center" id="availability-${index}" contenteditable="false">${vault.availability}</td>
                            <td class="text-center">
                                <button class="px-4 py-2 bg-green-500 text-white rounded-lg" onclick="editRow(${index})">Edit</button>
                                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hidden" onclick="saveRow(${index})">Save</button>
                            </td>
                        </tr>`
                )
                .join("");

            // Enable/disable buttons based on current page
            document.getElementById("prevButton").disabled = currentPage === 1;
            document.getElementById("nextButton").disabled = currentPage * vaultsPerPage >= searchedData.length;
        }

        function updateLocationDropdown() {
            const locationFilter = document.getElementById("locationFilter");
            const uniqueLocations = [...new Set(vaultData.map((vault) => vault.location))];

            // Add options for each new location
            locationFilter.innerHTML = `<option value="All">All</option>`;
            uniqueLocations.forEach((location) => {
                const option = document.createElement("option");
                option.value = location;
                option.textContent = location;
                locationFilter.appendChild(option);
            });
        }

        document.getElementById("locationFilter").addEventListener("change", () => {
            currentPage = 1; // Reset to first page when changing location
            displayVaultTable();
        });

        // Go to previous page if not on the first page
        document.getElementById("prevButton").addEventListener("click", () => {
            if (currentPage > 1) { 
                currentPage--;
                displayVaultTable();
            }
        });

        // Go to next page
        document.getElementById("nextButton").addEventListener("click", () => {
            currentPage++;
            displayVaultTable();
        });

        // Reset to the first page when search input changes
        document.getElementById("searchInput").addEventListener("input", () => {
            currentPage = 1;
            displayVaultTable();
        });

        // Edit row functionality
        function editRow(index) {
            const rowCells = document.querySelectorAll(`#vaultNumber-${index}, #location-${index}, #vaultOwnerID-${index}, #owner-${index}, #dateIssued-${index}, #urnsQuantity-${index}, #availability-${index}`);
            rowCells.forEach(cell => cell.setAttribute("contenteditable", "true"));
            const buttons = document.querySelectorAll(`#vaultTableBody tr:nth-child(${index + 1}) button`);
            buttons[0].classList.add("hidden"); // Hide Edit
            buttons[1].classList.remove("hidden"); // Show Save
        }

        // Save row functionality
        function saveRow(index) {
            const rowCells = document.querySelectorAll(`#vaultNumber-${index}, #location-${index}, #vaultOwnerID-${index}, #owner-${index}, #dateIssued-${index}, #urnsQuantity-${index}, #availability-${index}`);
            const updatedData = {
                vaultNumber: rowCells[0].textContent,
                location: rowCells[1].textContent,
                vaultOwnerID: rowCells[2].textContent,
                owner: rowCells[3].textContent,
                dateIssued: rowCells[4].textContent,
                urnsQuantity: rowCells[5].textContent,
                availability: rowCells[6].textContent
            };

            vaultData[index] = updatedData; // Update vaultData array with new values

            rowCells.forEach(cell => cell.setAttribute("contenteditable", "false"));
            const buttons = document.querySelectorAll(`#vaultTableBody tr:nth-child(${index + 1}) button`);
            buttons[0].classList.remove("hidden"); // Show Edit
            buttons[1].classList.add("hidden"); // Hide Save
        }
    </script>
</x-app-layout>
