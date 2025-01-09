<x-app-layout>
    <div class="flex py-12 h-screen">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="flex-1 px-6 sm:px-12">
            <div class="mx-auto bg-[#102A45] text-white w-3/4 p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-6 text-center text-white">Submit Your Requirements</h2>
                <p class="text-sm text-gray-300 mb-6 leading-relaxed text-center">
                    Ensure that the total size of your submission does not exceed <strong>25 MB</strong>. Accepted image formats include JPEG, PNG, and GIF. Use a consistent naming format such as <strong>[Name_Date_FileType]</strong>.
                </p>
                
                <form id="requirementsForm" method="POST" enctype="multipart/form-data" action="{{ route('dashboard') }}" class="space-y-6">
                    @csrf 
                    <div>
                        <x-label for="name" value="{{ __('Name') }}" class="text-white" />
                        <x-input id="name" class="block mt-2 w-3/4 rounded-lg border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div> 

                    <div>
                        <x-label for="file" value="{{ __('Attach a File') }}" class="text-white" />
                        <div class="flex items-center justify-center w-full mt-2">
                            <label class="flex flex-col items-center px-4 py-6 bg-yellow-600 text-white rounded-lg shadow-lg tracking-wide uppercase cursor-pointer hover:bg-yellow-700">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.88l-3.59-3.59a1.5 1.5 0 00-2.12 0l-3.59 3.59a1.5 1.5 0 000 2.12l3.59 3.59a1.5 1.5 0 002.12 0l3.59-3.59a1.5 1.5 0 000-2.12zM6.88 15.88l3.59-3.59a1.5 1.5 0 000-2.12L6.88 6.88a1.5 1.5 0 00-2.12 0l-3.59 3.59a1.5 1.5 0 000 2.12l3.59 3.59a1.5 1.5 0 002.12 0z" />
                                </svg>
                                <span class="mt-2 text-sm">Select a file</span>
                                <input type="file" id="file" name="file[]" class="hidden" multiple onchange="displayFiles()" />
                            </label>
                        </div>
                    </div>

                    <!-- Display attached files -->
                     <div id="fileList" class="text-white mt=4">
                        <!--Dynamically added files will appear here -->
                    </div>

                    <div>
                        <x-label for="requirement_type" value="{{ __('Requirement Type') }}" class="text-white" />
                        <select 
                            id="requirement_type" 
                            name="requirement_type" 
                            class="block w-3/4 mt-2 rounded-lg border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 text-black">
                            <option value="" disabled selected>Select Requirement Type</option>
                            <option value="baptism">Baptism</option>
                            <option value="birth_certificate">ID</option>
                        </select>
                    </div>

                    <button 
                        type="submit" 
                        class="w-3/4 py-3 mt-6 flex justify-center items-center gap-2 text-white bg-yellow-600 hover:bg-yellow-700 rounded-lg shadow-lg font-semibold">
                        Submit
                        <img src="{{ asset('img/requirements_send.svg') }}" alt="Send icon" class="w-6 h-6">
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function displayFiles() {
            const fileInput = document.getElementById('file');
            const fileListContainer = document.getElementById('fileList');
            const fileNames = Array.from(fileInput.files).map(file => file.name);

            fileListContainer.innerHTML = `
                <p><strong>Files Attached:</strong></p>
                <ul>
                    ${fileNames.map(name => `<li>${name}</li>`).join('')}
                </ul>
                <p>Total files: ${fileNames.length}</p>
            `;
        }
    </script>
</x-app-layout>
