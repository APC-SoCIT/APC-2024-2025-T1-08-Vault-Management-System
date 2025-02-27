<div class="flex-1">
    <div class="py-1 overflow-y-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#F6F2E9] dark:bg-gray-800 overflow-hidden shadow-2xl sm:rounded-lg p-6">
                <div class="overflow-auto text-black rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-4">Manage Requirements</h2>
                    
                    @if(session('success'))
                        <div class="bg-green-100 text-green-800 p-4 mb-6 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @foreach($groupedRequirements->groupBy('full_name') as $applicantName => $requirements)
                        <div class="mb-6" x-data="{ open: false }">
                            <button @click="open = !open" class="text-lg font-semibold border border-gray-800 text-black bg-keep-white hover:bg-keep-white p-3 rounded-lg w-full text-left shadow-md flex justify-between items-center">
                                <span>{{ $applicantName }}</span>
                                
                                <div class="flex items-center gap-x-3">
                                    <span class="text-sm {{ $requirements->first()->status == 'pending' ? 'text-yellow-500' : ($requirements->first()->status == 'approved' ? 'text-green-500' : 'text-red-500') }}">
                                        {{ ucfirst($requirements->first()->status) }}
                                    </span>
                                    <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                    <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                    </svg>
                                </div>
                            </button>

                            <div x-show="open" x-cloak class="mt-4">
                                <table class="table-auto w-full border-collapse border border-gray-200 mt-4">
                                    <thead class="bg-keep-white text-black">
                                        <tr>
                                            <th class="border border-gray-600 px-4 py-2">ID</th>
                                            <th class="border border-gray-600 px-4 py-2">Type</th>
                                            <th class="border border-gray-600 px-4 py-2">Files</th>
                                            <th class="border border-gray-600 px-4 py-2">Date Submitted</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-keep-white text-black">
                                        @foreach($requirements as $requirement)
                                            <tr class="hover:bg-keep-white transition duration-200">
                                                <td class="border border-gray-600 px-4 py-2 text-black">
                                                    {{ $requirement->id }}
                                                </td>
                                                <td class="border border-gray-600 px-4 py-2 text-black">
                                                    {{ ucfirst($requirement->requirement_type) }}
                                                </td>
                                                <td class="border border-gray-600 px-4 py-2 text-black">
                                                    @if(is_array($requirement->files))
                                                        @foreach($requirement->files as $file)
                                                            <a href="{{ Storage::url($file) }}" target="_blank" class="text-blue-500 underline">View File</a><br>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td class="border border-gray-600 px-4 py-2 text-black">
                                                    {{ $requirement->created_at->format('Y-m-d H:i') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                <form action="{{ route('batch_update_status') }}" method="POST" class="mt-4 flex justify-end">
                                    @csrf
                                    <input type="hidden" name="full_name" value="{{ $applicantName }}">
                                    
                                    <button type="submit" name="status" value="approved" class="bg-green-500 text-white px-4 py-2 rounded-lg shadow hover:bg-green-600 transition duration-200">
                                        Approve All
                                    </button>
                                    <button type="submit" name="status" value="rejected" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow hover:bg-red-600 ml-2 transition duration-200">
                                        Reject All
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    
                    <div class="mt-4">
                        {{ $groupedRequirements->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
