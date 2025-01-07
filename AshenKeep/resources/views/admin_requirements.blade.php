<x-app-layout>
    <div class="flex py-12 h-screen">
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="max-h-[600px] overflow-auto border border-black bg-[#102A45] text-white rounded-lg p-6 w-full mx-6">
            <h3 class="text-2xl font-semibold mb-6 text-white">Review Requirements</h3>
            <table class="table-fixed w-full divide-y divide-gray-200 text-center border-collapse border-separate border-spacing-y-2 rounded-md overflow-hidden">
                <thead>
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
                <tbody id="AdminReqTable" class="bg-white text-black shadow-lg rounded-xl p-6 mt-6">
                    <!-- Requirements added dynamically -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const adminRequirementsData = JSON.parse(localStorage.getItem("adminRequirementsData")) || [];

        function populateAdminTable() {
            const tableBody = document.getElementById("AdminReqTable");
            tableBody.innerHTML = "";

            adminRequirementsData.forEach(req => {
                const row = `
                    <tr>
                        <td>${req.id}</td>
                        <td>${req.name}</td>
                        <td>${req.type}</td>
                        <td>${req.format}</td>
                        <td>${req.date}</td>
                        <td>${req.time}</td>
                        <td>${req.status}</td>
                        <td>
                            <x-apply-button onclick="issueProofOwnership()" class="bg-green-500 px-4 py-2 rounded">Issue Proof</x-apply-button>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        function issueProofOwnership() {
            const allApproved = adminRequirementsData.every(req => req.status === "Approved");

            if (allApproved) {
                alert("All requirements approved. Proof of ownership issued.");
                localStorage.removeItem("adminRequirementsData");
            } else {
                alert("Pending requirements exist. Cannot issue proof.");
            }
        }

        document.addEventListener("DOMContentLoaded", populateAdminTable);
    </script>
</x-app-layout>
