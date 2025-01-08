<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applicant') }}
        </h2>
    </x-slot>

    <div class="flex py-12 h-screen">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="flex-1 px-8">
            <div class="mx-auto bg-[#102A45] p-6 rounded-lg max-w-xl">
                <h2 class="text-2xl font-semibold mb-4 text-white">Submit Your Requirements</h2>
                <p class="text-sm text-white mb-6">
                    Please ensure that the total size of your submission does not exceed 25 MB. Accepted image formats include JPEG, PNG, and GIF. For proper organization, kindly use a consistent file naming convention, such as <strong>[Name_Date_FileType]</strong>.
                </p>

                <form id="requirementsForm" method="POST" enctype="multipart/form-data" action="{{ route('submission.store') }}">
                    @csrf
                    <div>
                        <x-label for="name" value="{{ __('Name') }}" class="text-white" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div> 

                    <div class="mb-4">
                        <x-label for="file" value="{{ __('Attach a File') }}" class="text-white"/>
                        <x-input id="file" class="block mt-1 w-full border border-yellow-300 rounded-lg" type="file" name="file[]" multiple required />
                    </div>

                    <div class="mb-4">
                        <x-label for="requirement_type" value="{{ __('Requirement Type') }}" class="text-white" />
                        <select id="requirement_type" name="requirement_type" class="block mt-1 w-full border border-yellow-300 rounded-lg" required>
                            <option value="" disabled selected>Select Requirement Type</option>
                            <option value="baptism">Baptism</option>
                            <option value="id">Birth Certificate</option> 
                        </select>
                    </div>

                    <x-apply-button class="bg-yellow-600 text-white w-full py-3 rounded mb-4 flex items-center justify-center gap-2 hover:bg-yellow-700">
                        Submit
                        <img src="{{ asset('img/requirements_send.svg') }}" alt="Send icon" class="w-6 h-6">
                    </x-apply-button>
                </form>
            </div>

            <!-- Requirements Tables -->
            <div class="mt-8">
                <h3 class="text-lg font-semibold text-gray-200 mb-4">Submitted Requirements</h3>
                <table id="ApplicantReqTable" class="table-auto w-full text-white border-collapse border border-gray-600">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Format</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <h3 class="text-lg font-semibold text-gray-200 mt-8 mb-4">Office Requirements</h3>
                <table id="OfficeReqTable" class="table-auto w-full text-white border-collapse border border-gray-600">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Format</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Handle form submission
        document.getElementById('requirementsForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const files = document.getElementById('file').files;

            try {
                const response = await fetch('{{ route('submission.store') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                });

                const data = await response.json();

                if (response.ok) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Your requirements have been successfully submitted.',
                        icon: 'success',
                        confirmButtonText: 'OK',
                    });

                    Array.from(files).forEach((file, index) => {
                        const format = file.name.split('.').pop().toUpperCase();
                        const date = new Date();

                        const newRequirement = 
                            `<tr>
                                <td>${data.requirement.id}_${index + 1}</td>
                                <td>${formData.get('name')}</td>
                                <td>${formData.get('requirement_type')}</td>
                                <td>${format}</td>
                                <td>${date.toLocaleDateString()}</td>
                                <td>${date.toLocaleTimeString()}</td>
                                <td>Uploaded</td>
                            </tr>`;

                        document.querySelector("#ApplicantReqTable tbody").innerHTML += newRequirement;
                        document.querySelector("#OfficeReqTable tbody").innerHTML += newRequirement;
                    });

                    this.reset();
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: data.message || 'There was an issue submitting your requirements. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                    });
                }
            } catch (error) {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Error!',
                    text: 'An unexpected error occurred.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                });
            }
        });

        document.addEventListener('DOMContentLoaded', fetchRequirements);
    </script>
</x-app-layout>
