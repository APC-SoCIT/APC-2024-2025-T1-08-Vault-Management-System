
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Full Name</label>
                                            <input type="text" id="full_name" name="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="email" class="block font-medium text-gray-700">Email</label>
                                            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required readonly>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Permanent Address</label>
                                            <input type="text" id="permanent_address" name="permanent_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="phone_number" class="block font-medium text-gray-700">Landline Number</label>
                                            <input type="tel" id="landline_number" name="landline_number" pattern="[0-9]{8}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Current Address</label>
                                            <input type="text" id="current_address" name="current_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Mobile Number</label>
                                            <input type="text" id="mobile_number" name="mobile_number" pattern="[0-9]{11}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Provincial Address</label>
                                            <input type="text" id="provincial_address" name="provincial_address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Date of Birth</label>
                                            <input type="date" id="date_of_birth" name="date_of_birth" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="email" class="block font-medium text-gray-700">Citizenship</label>
                                            <input type="text" id="citizenship" name="citizenship" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Place of Birth</label>
                                            <input type="text" id="place_of_birth" name="place_of_birth" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="phone_number" class="block font-medium text-gray-700">Place of Catholic Baptism:</label>
                                            <input type="text" id="place_of_catholic_baptism" name="place_of_catholic_baptism" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>
                                        <div>
                                            <label for="full_name" class="block font-medium text-gray-700">Date of Catholic Baptism:</label>
                                            <input type="date" id="date_of_catholic_baptism" name="date_of_catholic_baptism" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                                        </div>

                                        <div class="w-full flex justify-center items-center col-span-1 md:col-span-2">
                                            <x-apply-button>Next</x-apply-button>
                                        </div>
                                    </div>