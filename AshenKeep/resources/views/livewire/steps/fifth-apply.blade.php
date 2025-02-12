
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Father's Name</label>
                                            <input type="text" id="fathers_name" wire:model="applicant.fathers_name" name="fathers_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Father's Landline Number</label>
                                            <input type="tel" id="fathers_landline_number" wire:model="applicant.fathers_landline_number" name="fathers_landline_number" pattern="[0-9]{8}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Father's Email</label>
                                            <input type="email" id="fathers_email_address" wire:model="applicant.fathers_email_address" name="fathers_email_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Father's Mobile Number</label>
                                            <input type="text" id="fathers_mobile_number" wire:model="applicant.fathers_mobile_number" name="fathers_mobile_number" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mother's Name</label>
                                            <input type="text" id="mothers_name" wire:model="applicant.mothers_name" name="mothers_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mother's Landline Number</label>
                                            <input type="tel" id="mothers_landline_number" wire:model="applicant.mothers_landline_number" name="mothers_landline_number" pattern="[0-9]{8}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mother's Email</label>
                                            <input type="email" id="mothers_email_address" wire:model="applicant.mothers_email_address" name="mothers_email_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mother's Mobile Number</label>
                                            <input type="text" id="mothers_mobile_number" wire:model="applicant.mothers_mobile_number" name="mothers_mobile_number" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" >
                                        </div>
                                        
            
                                        <div class="w-full flex justify-center items-center col-span-1 md:col-span-2">
                                            <x-apply-button>Next</x-apply-button>
                                        </div>
                                    </div>