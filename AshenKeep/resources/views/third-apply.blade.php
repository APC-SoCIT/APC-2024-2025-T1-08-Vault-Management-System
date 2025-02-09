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

                                <form action="{{ route('applicant.savePage3') }}" method="POST">
                                    @csrf
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Donor's Occupation</label>
                                            <input type="text" id="donors_occupation" name="donors_occupation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Business Landline Number</label>
                                            <input type="text" id="business_mobile_number" name="business_mobile_number" pattern="[0-9]{8}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Employer's Name or Business Name</label>
                                            <input type="text" id="employers_name_or_business_name" name="employers_name_or_business_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Business Mobile Number</label>
                                            <input type="tel" id="religious_organization_affiliated_with" name="religious_organization_affiliated_with" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="email" class="block font-medium text-gray-700">Business Address</label>
                                            <input type="text" id="business_address" name="business_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Position</label>
                                            <input type="text" id="position" name="position" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>  
                                        <div>
                                            <label for="phone_number" class="block font-medium text-gray-700">Employer's Email</label>
                                            <input type="email" id="employers_email_or_business_email_address" name="employers_email_or_business_email_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Years in Employment/Business</label>
                                            <input type="number" id="years_in_employment_or_business" name="years_in_employment_or_business" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
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