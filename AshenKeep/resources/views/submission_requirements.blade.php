<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar Navigation -->
        <x-side-navig-bar />
        
        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            <div class="container mx-auto mt-8">
                <div class="bg-[#F6F2E9] shadow-2xl sm:rounded-lg p-6">
                    <div class="text-black rounded-lg p-6 overflow-auto">
                        <h2 class="text-black text-3xl font-bold mb-6">Submit Requirements</h2>
                        
                        <form action="{{ route('submission_requirements') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @csrf
                            
                            <!-- Full Name Input -->
                            <div>
                                <label for="full_name" class="block text-lg font-medium text-black">Full Name</label>
                                <input 
                                    type="text" 
                                    name="full_name" 
                                    id="full_name" 
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 text-black focus:ring-2 focus:ring-blue-400 focus:outline-none" 
                                    required
                                >
                            </div>
                            
                            <!-- Requirement Type Dropdown -->
                            <div>
                                <label for="requirement_type" class="block text-lg font-medium text-black">Requirement Type</label>
                                <select 
                                    name="requirement_type" 
                                    id="requirement_type" 
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 text-gray-900 focus:ring-2 focus:ring-blue-400 focus:outline-none" 
                                    required
                                >
                                    <option value="" disabled selected>Select Requirement Type</option>
                                    <option value="Baptism">Baptism</option>
                                    <option value="Goverment ID">Goverment ID</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <!-- File Upload Input -->
                            <div>
                                <label for="files" class="block text-lg font-medium text-black">Upload Files</label>
                                <input 
                                    type="file" 
                                    name="files[]" 
                                    id="files" 
                                    multiple 
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none text-black" 
                                    required
                                >
                                <small class="text-black">You can upload up to 5 files (max 5MB each).</small>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button type="submit" class="bg-keep-blue text-white font-semibold px-6 py-2 rounded-lg shadow-md hover:bg-green-700 transition duration-300">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
