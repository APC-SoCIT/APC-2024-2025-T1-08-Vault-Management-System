<x-app-layout>
    <div class="flex py-12 h-screen">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="max-h-[600px] overflow-auto border border-black bg-[#102A45] text-white rounded-lg p-6 w-full mx-6">
            <h3 class="text-2xl font-semibold mb-6 text-white">Manage Requirements</h3>
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
                <tbody id="OfficeReqTable" class="auto-rows-auto bg-white text-black shadow-lg rounded-xl p-6 mt-6">
                    <!-- New requirements added here made by applicants -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Example data source for requirements
        const submittedRequirementsData = [
            { id: 1, name: "John", type: "Birth Certificate", format: "PDF", date: "2025-01-01", time: "10:00 AM", status: "Pending" },
            { id: 2, name: "John", type: "Baptism Certificate", format: "PDF", date: "2025-01-02", time: "11:00 AM", status: "Pending" },
            { id: 3, name: "John", type: "Marriage Certificate", format: "PDF", date: "2025-01-03", time: "12:00 PM", status: "Pending" },
            { id: 4, name: "Ken", type: "Birth Certificate", format: "PDF", date: "2025-01-01", time: "10:00 AM", status: "Pending" },
            { id: 5, name: "Ken", type: "Baptism Certificate", format: "PDF", date: "2025-01-02", time: "11:00 AM", status: "Pending" },
            { id: 6, name: "Ken", type: "Marriage Certificate", format: "PDF", date: "2025-01-03", time: "12:00 PM", status: "Pending" },
        ];

        // Function to populate the table with submitted requirements
        function populateRequirementsTable() {
            const tableBody = document.getElementById("OfficeReqTable");
            tableBody.innerHTML = ""; // Clear any existing rows

            submittedRequirementsData.forEach(req => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="px-4 py-2">${req.id}</td>
                    <td class="px-4 py-2">${req.name}</td>
                    <td class="px-4 py-2">${req.type}</td>
                    <td class="px-4 py-2">${req.format}</td>
                    <td class="px-4 py-2">${req.date}</td>
                    <td class="px-4 py-2">${req.time}</td>
                    <td id="status-${req.id}" class="px-4 py-2">${req.status}</td>
                    <td class="px-4 py-2">
                        <div class="flex justify-center gap-2">
                            <x-apply-button onclick="updateStatus(${req.id}, 'approved')" class="bg-green-500 text-white px-4 py-2 rounded">Approve</x-apply-button>
                            <x-apply-button onclick="updateStatus(${req.id}, 'rejected')" class="bg-red-500 text-white px-4 py-2 rounded">Reject</x-apply-button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Function to update the status of a requirement
        function updateStatus(id, status) {
            const requirement = submittedRequirementsData.find(req => req.id === id);
            if (requirement) {
                requirement.status = status.charAt(0).toUpperCase() + status.slice(1); // Capitalize status
                document.getElementById(`status-${id}`).textContent = requirement.status;
                alert(`Requirement ID ${id} has been ${status}.`);
            } else {
                alert("Requirement not found.");
            }
        }

        // Populate the table on page load
        document.addEventListener("DOMContentLoaded", populateRequirementsTable);
    </script>
</x-app-layout>
