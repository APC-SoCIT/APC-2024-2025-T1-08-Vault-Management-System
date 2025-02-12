
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Donor's Occupation</label>
                                            <input type="text" id="donors_occupation" wire:model="applicant.donors_occupation" name="donors_occupation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Business Landline Number</label>
                                            <input type="text" id="business_mobile_number" wire:model="applicant.business_landline_number" name="business_mobile_number" pattern="[0-9]{8}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Employer's Name or Business Name</label>
                                            <input type="text" id="employers_name_or_business_name" wire:model="applicant.employers_name_or_business_name" name="employers_name_or_business_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Business Mobile Number</label>
                                            <input type="tel" id="religious_organization_affiliated_with" wire:model="applicant.business_mobile_number" name="religious_organization_affiliated_with" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="email" class="block font-medium text-gray-700">Business Address</label>
                                            <input type="text" id="business_address" wire:model="applicant.business_address" name="business_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Position</label>
                                            <input type="text" id="position" wire:model="applicant.position" name="position" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>  
                                        <div>
                                            <label for="phone_number" class="block font-medium text-gray-700">Employer's Email</label>
                                            <input type="email" id="employers_email_or_business_email_address" wire:model="applicant.employers_email_or_business_email_addresss" name="employers_email_or_business_email_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Years in Employment/Business</label>
                                            <input type="number" id="years_in_employment_or_business" wire:model="applicant.years_in_employment_or_business" name="years_in_employment_or_business" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
            
                                        <div class="w-full flex justify-center items-center col-span-1 md:col-span-2">
                                            <x-apply-button>Next</x-apply-button>
                                        </div>
                                    </div>