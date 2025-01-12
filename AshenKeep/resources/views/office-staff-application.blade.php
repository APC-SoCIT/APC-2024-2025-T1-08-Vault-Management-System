<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <div class="hidden sm:flex min-h-full">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-[#102A45] dark:bg-gray-800 overflow-hidden sm:rounded-lg p-6" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 -4px 6px rgba(0, 0, 0, 0.1), 4px 0 6px rgba(0, 0, 0, 0.1), -4px 0 6px rgba(0, 0, 0, 0.1);">
                        <div class="text-3xl text-[#F9F4F1] font-semibold pb-4"> 
                            Applications
                        </div>
                        <table class="table-auto w-full text-left border-collapse">
                            <thead class="bg-[#102A45] text-white">
                                <tr>
                                    <th class="px-4 py-2 border-b">ID</th>
                                    <th class="px-4 py-2 border-b">Name</th>
                                    <th class="px-4 py-2 border-b">Email</th>
                                    <th class="px-4 py-2 border-b">Mobile Number</th>
                                    <th class="px-4 py-2 border-b">Citizenship</th>
                                    <th class="px-4 py-2 border-b">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-[#F6F2E9]">
                                @foreach ($applicants as $application)
                                <tr class="border-b">
                                    <td class="px-4 py-2">{{ $application->id }}</td>
                                    <td class="px-4 py-2">{{ $application->full_name }}</td>
                                    <td class="px-4 py-2">{{ $application->email }}</td>
                                    <td class="px-4 py-2">{{ $application->mobile_number }}</td>
                                    <td class="px-4 py-2">{{ $application->citizenship}}</td>
                                    <td class="px-4 py-2 text-yellow-600 font-semibold">Pending</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>