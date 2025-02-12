<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Full Name</label>
                                            <input type="text" id="full_name" wire:model="applicant.full_name" name="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="email" class="block font-medium text-gray-700">Email</label>
                                            <input type="email" id="email" wire:model="applicant.email" name="email" value="{{ Auth::user()->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required readonly>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Permanent Address</label>
                                            <input type="text" id="permanent_address" wire:model="applicant.permanent_address" name="permanent_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="phone_number" class="block font-medium text-gray-700">Landline Number</label>
                                            <input type="tel" id="landline_number" wire:model="applicant.landline_number" name="landline_number" pattern="[0-9]{8}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Current Address</label>
                                            <input type="text" id="current_address" wire:model="applicant.current_address" name="current_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mobile Number</label>
                                            <input type="text" id="mobile_number" wire:model="applicant.mobile_number" name="mobile_number" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Provincial Address</label>
                                            <input type="text" id="provincial_address" wire:model="applicant.provincial_address" name="provincial_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>

                                        <div class="w-full flex justify-center items-center col-span-1 md:col-span-2">
                                            <x-apply-button>Next</x-apply-button>
                                        </div>
                                    </div>