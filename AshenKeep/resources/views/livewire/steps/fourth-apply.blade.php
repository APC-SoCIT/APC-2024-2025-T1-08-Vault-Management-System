
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Spouse's Name</label>
                                            <input type="text" id="spouses_name" wire:model="applicant.spouses_name" name="spouses_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Spouse's Email</label>
                                            <input type="email" id="spouses_email_address" wire:model="applicant.spouses_email_address" name="spouses_email_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Spouse's Date of Birth</label>
                                            <input type="date" id="spouses_date_of_birth" wire:model="applicant.spouses_date_of_birth" name="spouses_date_of_birth" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Spouse's Landline Number</label>
                                            <input type="tel" id="spouses_landline_number" wire:model="applicant.spouses_landline_number" name="spouses_landline_number" pattern="[0-9]{9}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Spouse's Place of Birth</label>
                                            <input type="text" id="spouses_place_of_birth" wire:model="applicant.full_name" name="spouses_place_of_birth" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="email" class="block font-medium text-gray-700">Spouse's Mobile Number</label>
                                            <input type="text" id="spouses_mobile_number" wire:model="applicant.full_name" name="spouses_mobile_number" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
            
                                        <div class="w-full flex justify-center items-center col-span-1 md:col-span-2">
                                            <x-apply-button>Next</x-apply-button>
                                        </div>
                                    </div>