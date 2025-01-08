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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Format</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="OfficeReqTable" class="auto-rows-auto bg-white text-black">
                    <!-- Requirements populated here -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        let submittedRequirementsData = [
            { id: 1, name: "John", type: "Birth Certificate", format: "PDF", date: "2025-01-01", time: "10:00 AM", status: "Pending" },
            { id: 2, name: "John", type: "Baptism Certificate", format: "PDF", date: "2025-01-02", time: "11:00 AM", status: "Pending" },
            { id: 3, name: "John", type: "Marriage Certificate", format: "PDF", date: "2025-01-03", time: "12:00 PM", status: "Pending" },
            { id: 4, name: "Ken", type: "Birth Certificate", format: "PDF", date: "2025-01-01", time: "10:00 AM", status: "Pending" },
            { id: 5, name: "Ken", type: "Baptism Certificate", format: "PDF", date: "2025-01-02", time: "11:00 AM", status: "Pending" },
            { id: 6, name: "Ken", type: "Marriage Certificate", format: "PDF", date: "2025-01-03", time: "12:00 PM", status: "Pending" },
            
        ];

        const adminRequirementsData = JSON.parse(localStorage.getItem("adminRequirementsData")) || [];

        function populateRequirementsTable() {
            const tableBody = document.getElementById("OfficeReqTable");
            tableBody.innerHTML = "";

            submittedRequirementsData.forEach(req => {
                const row = `
                    <tr>
                        <td>${req.id}</td>
                        <td>${req.name}</td>
                        <td>${req.type}</td>
                        <td>${req.format}</td>
                        <td>${req.date}</td>
                        <td>${req.time}</td>
                        <td id="status-${req.id}">${req.status}</td>
                        <td>
                            <div class="flex justify-center gap-2 mr-2">
                                <x-apply-button onclick="updateStatus(${req.id}, 'approved')" class="bg-green-500 px-4 py-2 rounded">Approve</x-apply-button>
                                <x-apply-button onclick="updateStatus(${req.id}, 'rejected')" class="bg-red-500 px-4 py-2 rounded">Reject</x-apply-button>
                            </div>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        function updateStatus(id, status) {
            const req = submittedRequirementsData.find(r => r.id === id);
            if (req) {
                req.status = status.charAt(0).toUpperCase() + status.slice(1);
                document.getElementById(`status-${id}`).textContent = req.status;

                if (status === "approved") {
                    moveToAdmin(req);
                }
            }
        }

        function moveToAdmin(requirement) {
            submittedRequirementsData = submittedRequirementsData.filter(r => r.id !== requirement.id);
            adminRequirementsData.push(requirement);
            localStorage.setItem("adminRequirementsData", JSON.stringify(adminRequirementsData));
            populateRequirementsTable();
        }

        document.addEventListener("DOMContentLoaded", populateRequirementsTable);
    </script>
</x-app-layout>
