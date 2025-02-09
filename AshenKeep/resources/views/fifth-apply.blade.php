<x-app-layout>

    <div class="flex">

        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-[#F6F2E9] dark:bg-gray-800 overflow-hidden sm:rounded-lg p-6" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 -4px 6px rgba(0, 0, 0, 0.1), 4px 0 6px rgba(0, 0, 0, 0.1), -4px 0 6px rgba(0, 0, 0, 0.1);">
                        <h1 class="text-2xl font-bold mb-2 text-center">Application Form</h1>
                        <p class="text-center text-gray-600 mb-6">Ensure all personal details are filled out to proceed with your application. Leave it blank if not applicable.</p>
                        <div class="flex justify-center mb-6">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-10 h-10 bg-yellow-400 text-white rounded-full">1</div>
                                    <span class="text-gray-600 ml-2">Application</span>
                                </div>
                                <div class="w-10 h-1 mx-2"></div>
                                <div class="flex items-center">
                                <div class="flex items-center justify-center w-10 h-10 bg-gray-300 text-white rounded-full">2</div>
                                    <span class="text-gray-600 ml-2">Requirements</span>
                                </div>
                                <div class="w-10 h-1 mx-2"></div>
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-10 h-10 bg-gray-300 text-white rounded-full">3</div>
                                        <span class="text-gray-600 ml-2">Donation</span>
                                    </div>
                                </div>

                                <form action="{{ route('applicant.savePage5') }}" method="POST">
                                    @csrf
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Father's Name</label>
                                            <input type="text" id="fathers_name" name="fathers_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Father's Landline Number</label>
                                            <input type="tel" id="fathers_landline_number" name="fathers_landline_number" pattern="[0-9]{8}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Father's Email</label>
                                            <input type="email" id="fathers_email_address" name="fathers_email_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Father's Mobile Number</label>
                                            <input type="text" id="fathers_mobile_number" name="fathers_mobile_number" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mother's Name</label>
                                            <input type="text" id="mothers_name" name="mothers_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mother's Landline Number</label>
                                            <input type="tel" id="mothers_landline_number" name="mothers_landline_number" pattern="[0-9]{8}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mother's Email</label>
                                            <input type="email" id="mothers_email_address" name="mothers_email_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mother's Mobile Number</label>
                                            <input type="text" id="mothers_mobile_number" name="mothers_mobile_number" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" >
                                        </div>
                                        
            
                                        <div class="w-full flex justify-center items-center col-span-1 md:col-span-2">
                                            <x-apply-button>Next</x-apply-button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>