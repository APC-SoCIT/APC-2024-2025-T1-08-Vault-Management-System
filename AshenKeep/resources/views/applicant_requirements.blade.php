<x-app-layout>
    <div class="flex py-12 h-screen">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-1 h-screen overflow-y-auto">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <div class="overflow-auto border border-black bg-[#102A45] text-white rounded-lg p-6 ">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="text-2xl font-semibold text-white">Requirements</h3>
                                <a href="{{ url('/applicant/submission') }}">
                                    <x-apply-button class="bg-green-500 text-white px-4 py-2 rounded">Submit Requirements</x-apply-button>
                                </a>
                            </div>

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
                                <tbody id="ApplicantReqTable" class="auto-rows-auto bg-white text-black shadow-lg rounded-xl p-6 mt-6">
                                    <!-- Display Submitted Requirements -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Example data for submitted requirements (replace with actual server data)
        const applicantRequirements = [
            { id: 1, name: "John Doe", type: "Birth Certificate", format: "PDF", date: "2025-01-01", time: "10:00 AM", status: "Pending" },
            { id: 2, name: "Jane Doe", type: "Baptism Certificate", format: "PDF", date: "2025-01-02", time: "11:00 AM", status: "Approved" },
            { id: 3, name: "John Smith", type: "Marriage Certificate", format: "PDF", date: "2025-01-03", time: "12:00 PM", status: "Rejected" },
        ];

        // Function to populate the table with requirements
        function populateApplicantRequirements() {
            const tableBody = document.getElementById("ApplicantReqTable");
            tableBody.innerHTML = ""; // Clear existing rows

            applicantRequirements.forEach(req => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="p-6">${req.id}</td>
                    <td class="p-6">${req.name}</td>
                    <td class="p-6">${req.type}</td>
                    <td class="p-6">${req.format}</td>
                    <td class="p-6">${req.date}</td>
                    <td class="p-6">${req.time}</td>
                    <td class="p-6">${req.status}</td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Populate the table on page load
        document.addEventListener("DOMContentLoaded", populateApplicantRequirements);
    </script>
</x-app-layout>
