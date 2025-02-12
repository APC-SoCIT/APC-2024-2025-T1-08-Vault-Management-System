
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Date of Birth</label>
                                            <input type="date" id="date_of_birth" wire:model="applicant.date_of_birth" name="date_of_birth" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="email" class="block font-medium text-gray-700">Citizenship</label>
                                            <input type="text" id="citizenship" wire:model="applicant.citizenship" name="citizenship" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Place of Birth</label>
                                            <input type="text" id="place_of_birth" wire:model="applicant.place_of_birth" name="place_of_birth" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="phone_number" class="block font-medium text-gray-700">Place of Catholic Baptism:</label>
                                            <input type="text" id="place_of_catholic_baptism" wire:model="applicant.place_of_catholic_batptism" name="place_of_catholic_baptism" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Religious Organization Affiliated With:</label>
                                            <input type="text" id="religious_organization_affiliated_with" wire:model="applicant.religious_organization_affiliated_with" name="religious_organization_affiliated_with" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Date of Catholic Baptism:</label>
                                            <input type="date" id="date_of_catholic_baptism" wire:model="applicant.date_of_catholic_baptism" name="date_of_catholic_baptism" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
            
                                        <div class="w-full flex justify-center items-center col-span-1 md:col-span-2">
                                            <x-apply-button>Next</x-apply-button>
                                        </div>
                                    </div>