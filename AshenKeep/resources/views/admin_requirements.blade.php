<x-app-layout>
    <div class="flex py-12 h-screen">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="max-h-[600px] overflow-auto border border-black bg-[#102A45] text-white rounded-lg p-6 w-full mx-6">
            <h3 class="text-2xl font-semibold mb-6 text-white">Review Requirements</h3>
            <table class="table-fixed w-full divide-y divide-gray-200 text-center border-collapse border-separate border-spacing-y-2 rounded-md overflow-hidden">
                <thead class="bg-[#102A45] w-full">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Type</th>
                        <th class="px-4 py-2">Format</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Time</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody id="AdminReqTable" class="auto-rows-auto bg-white text-black shadow-lg rounded-xl p-6 mt-6">
                    <!-- New requirements will be dynamically added here -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Example data source for requirements
        const requirementsData = [
            { id: 1, name: "John", type: "Birht Ceritificate", format: "PDF", date: "2025-01-01", time: "10:00 AM", status: "Approved" },
            { id: 2, name: "John", type: "Baptism", format: "PDF", date: "2025-01-02", time: "11:00 AM", status: "Approved" },
            { id: 3, name: "John", type: "DMarriage Certificate", format: "PDF", date: "2025-01-03", time: "12:00 PM", status: "Approved" },
        ];

        // Function to populate the table with approved requirements
        function populateRequirementsTable() {
            const tableBody = document.getElementById("AdminReqTable");
            tableBody.innerHTML = ""; // Clear any existing rows

            requirementsData.forEach(req => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="px-4 py-2">${req.id}</td>
                    <td class="px-4 py-2">${req.name}</td>
                    <td class="px-4 py-2">${req.type}</td>
                    <td class="px-4 py-2">${req.format}</td>
                    <td class="px-4 py-2">${req.date}</td>
                    <td class="px-4 py-2">${req.time}</td>
                    <td class="px-4 py-2">${req.status}</td>
                    <td class="px-4 py-2">
                        <div class="flex justify-center gap-2">
                            <x-apply-button class="bg-green-500 text-white px-4 py-2 rounded" onclick="issueProofOwnership()">Issue Proof</x-apply-button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Function to check if all requirements are approved and issue proof of ownership
        function issueProofOwnership() {
            const allApproved = requirementsData.every(req => req.status === "Approved");

            if (allApproved) {
                alert("All requirements are approved. Proof of ownership has been issued.");
                // Add logic here to issue proof of ownership, e.g., updating the backend or triggering an API call.
            } else {
                alert("Not all requirements are approved. Please review pending requirements.");
            }
        }

        // Populate the table on page load
        document.addEventListener("DOMContentLoaded", populateRequirementsTable);
    </script>
</x-app-layout>
