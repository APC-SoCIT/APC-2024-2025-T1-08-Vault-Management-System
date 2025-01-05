<x-app-layout>

    <div class="flex py-12 h-screen">
        <!-- Sidebar -->
        <div class="w-auto">
            <x-dashboard-side-bar />
        </div>

        <div class="flex-1 ml-8">
            <div class="py-1 h-screen overflow-y-auto">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                        <!-- Vault List Box -->
                        <div class="bg-blue-900 rounded-lg p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-white text-xl font-semibold">Vaults List</h2>
                                <div class="flex items-center space-x-4 ml-auto">
                                    <!--Filter button-->
                                    <select id="locationFilter" class="form-select bg-blue-900 text-white rounded-lg border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300"></select>
                                    <!--Add New Button-->
                                    <button id="addRowButton" class="btn bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                        Add New Vault
                                    </button>
                                </div>
                            </div>
                            
                            <!--Table info-->
                            <div class="overflow-auto max-h-[400px]">
                                <table class="table table-bordered w-full rounded-lg overflow-hidden">
                                    <thead class="bg-blue-900 text-white text-lg font-semibold rounded-t-lg">
                                        <tr>
                                            <th class="p-2">Vault Number</th>
                                            <th class="p-2">Location</th>
                                            <th class="p-2">Vault Owner ID</th>
                                            <th class="p-2">Owner</th>
                                            <th class="p-2">Date Issued</th>
                                            <th class="p-2">Urns Quantity</th>
                                            <th class="p-2">Availability</th>
                                            <th class="p-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="vaultTableBody" class="bg-white text-blue-900 shadow-lg rounded-xl p-6 mt-6">
                                        <!-- New vault info goes here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    // List of all vaults
    let vaultData = [
        {
            vaultNumber: "-",
            location: "-",
            vaultOwnerID: "-",
            owner: "-",
            dateIssued: "MM/DD/YY",
            urnsQuantity: "0",
            availability: "Available",
        }
    ];

    // Load saved data when the page opens (temporary)
    window.onload = () => {
        const storedData = localStorage.getItem("vaultData");
        if (storedData) {
            vaultData = JSON.parse(storedData);
        }
        updateLocationDropdown(); // Set up the dropdown
        displayVaultTable(); // Show the table
    };

    // Save vaults to the browser so they don't disappear (temporary)
    function saveDataToLocalStorage() {
        localStorage.setItem("vaultData", JSON.stringify(vaultData));
    }

    // Show the table with vaults
    function displayVaultTable() {
        const selectedLocation = document.getElementById("locationFilter").value;
        const tableBody = document.getElementById("vaultTableBody");

        // Show only vaults from the chosen location or all
        const filteredData =
            selectedLocation === "All"
                ? vaultData
                : vaultData.filter((vault) => vault.location === selectedLocation);

        // Fill the table with vaults
        tableBody.innerHTML = filteredData
            .map(
                (vault) => `   
                    <tr>
                        <td class="text-center">${vault.vaultNumber}</td>
                        <td class="text-center">${vault.location}</td>
                        <td class="text-center">${vault.vaultOwnerID}</td>
                        <td class="text-center">${vault.owner}</td>
                        <td class="text-center">${vault.dateIssued}</td>
                        <td class="text-center">${vault.urnsQuantity}</td>
                        <td class="text-center">${vault.availability}</td>
                        <td class="flex justify-center space-x-2 gap-2">
                            <button onclick="editVault(this)" class="bg-green-500 text-white px-4 py-2 rounded">Edit</button>
                            <button onclick="deleteVault(this)" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </td>
                    </tr>`
            )
            .join(""); // Combine all rows into one string
    }

    // Update the dropdown with unique locations
    function updateLocationDropdown() {
        const locationFilter = document.getElementById("locationFilter");
        const uniqueLocations = [...new Set(vaultData.map((vault) => vault.location))].filter(
            (location) => location !== "-"
        );

        // All options
        locationFilter.innerHTML = `
            <option value="All">All</option>
        `;

        // Add the new locations to the dropdown
        uniqueLocations.forEach((location) => {
            const option = document.createElement("option");
            option.value = location;
            option.textContent = location;
            locationFilter.appendChild(option);
        });
    }

    // Add a new vault
    document.getElementById("addRowButton").addEventListener("click", () => {
        vaultData.push({
            vaultNumber: "-",
            location: "-",
            vaultOwnerID: "-",
            owner: "-",
            dateIssued: "MM/DD/YY",
            urnsQuantity: "0",
            availability: "Available",
        });
        displayVaultTable(); // Show the updated table
        updateLocationDropdown(); // Update dropdown
        saveDataToLocalStorage(); // Save changes
    });

    // Edit details of a vault
    function editVault(button) {
        const row = button.closest("tr"); 
        const cells = row.querySelectorAll("td"); 
        const rowIndex = Array.from(row.parentElement.children).indexOf(row);

        // Switch between Edit and Save
        if (button.textContent === "Edit") {
            cells.forEach((cell, index) => {
                if (!cell.querySelector("button")) { 
                    cell.contentEditable = true; 
                    cell.innerText = vaultData[rowIndex][Object.keys(vaultData[rowIndex])[index]]; 
                }
            });
            button.textContent = "Save"; 
        } else {
            cells.forEach((cell, index) => {
                if (!cell.querySelector("button")) { 
                    vaultData[rowIndex][Object.keys(vaultData[rowIndex])[index]] = cell.innerText; 
                    cell.contentEditable = false; 
                }
            });
            button.textContent = "Edit"; 
            updateLocationDropdown(); 
            saveDataToLocalStorage(); 
        }
    }

    // Delete a vault row
    function deleteVault(button) {
        const row = button.closest("tr"); 
        const rowIndex = Array.from(row.parentElement.children).indexOf(row); 
        vaultData.splice(rowIndex, 1); 
        displayVaultTable(); 
        updateLocationDropdown(); 
        saveDataToLocalStorage(); 
    }

    // Change what vaults are shown based on location
    document.getElementById("locationFilter").addEventListener("change", displayVaultTable);
    </script>
</x-app-layout>
