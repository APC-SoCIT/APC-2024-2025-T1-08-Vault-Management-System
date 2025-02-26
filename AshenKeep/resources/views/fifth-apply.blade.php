<x-app-layout>
    <div class="flex">
        <x-side-navig-bar />
        <!-- Main Content -->
        <div class="flex-1 p-6">
<div class="flex-1">
    <div class="py-1">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg p-6">
                <form method="POST" route="{{ route('fifth-apply.store') }}" class="space-y-1">
                    @csrf
                    
                    <!-- Personal Information -->
                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                        <div class="w-full text-left font-semibold">1st Beneficiary</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="full_name" class="block text-sm font-medium">Full Name</label>
                                <input type="text" name="first_full_name" placeholder="Full Name" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium">Email</label>
                                <input type="email" name="first_email" class="w-full border p-2 rounded-lg bg-gray-200" value="{{ Auth::user()->email }}" readonly>
                            </div>

                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium">Date of Birth</label>
                            <input type="date" name="first_date_of_birth" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="place_of_birth" class="block text-sm font-medium">Place of Birth</label>
                            <input type="text" name="first_place_of_birth" placeholder="Place of Birth" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="citizenship" class="block text-sm font-medium">Citizenship</label>
                            <input type="text" name="first_citizenship" placeholder="Citizenship" class="w-full border p-2 rounded-lg" required>
                        </div>
                        <div>
                            <label for="place_of_catholic_baptism" class="block text-sm font-medium">Place of Catholic Baptism</label>
                            <input type="text" name="first_place_of_catholic_baptism" placeholder="Place of Catholic Baptism" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="date_of_catholic_baptism" class="block text-sm font-medium">Date of Catholic Baptism</label>
                            <input type="date" name="first_date_of_catholic_baptism" class="w-full border p-2 rounded-lg" required>
                        </div>

                        </div>
                        <div id="contact-info" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="mobile_number" class="block text-sm font-medium">Mobile Number</label>
                                <input type="tel" name="first_mobile_number" placeholder="Mobile Number" pattern="[0-9]{11}" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Landline Number</label>
                                <input type="tel" name="first_landline_number" placeholder="Landline Number" pattern="[0-9]{8}" class="w-full border p-2 rounded-lg">
                            </div>
                        </div>
                        <div id="contact-info" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="mobile_number" class="block text-sm font-medium">Permanent Address</label>
                                <input type="text" name="first_permanent_address" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Current Address</label>
                                <input type="text" name="first_current_address" class="w-full border p-2 rounded-lg">
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Provincial Address</label>
                                <input type="text" name="first_provincial_address" class="w-full border p-2 rounded-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                        <div class="w-full text-left font-semibold">2nd Beneficiary</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="full_name" class="block text-sm font-medium">Full Name</label>
                                <input type="text" name="second_full_name" placeholder="Full Name" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium">Email</label>
                                <input type="email" name="second_email" class="w-full border p-2 rounded-lg bg-gray-200" value="{{ Auth::user()->email }}" readonly>
                            </div>

                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium">Date of Birth</label>
                            <input type="date" name="second_date_of_birth" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="place_of_birth" class="block text-sm font-medium">Place of Birth</label>
                            <input type="text" name="second_place_of_birth" placeholder="Place of Birth" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="citizenship" class="block text-sm font-medium">Citizenship</label>
                            <input type="text" name="second_citizenship" placeholder="Citizenship" class="w-full border p-2 rounded-lg" required>
                        </div>
                        <div>
                            <label for="place_of_catholic_baptism" class="block text-sm font-medium">Place of Catholic Baptism</label>
                            <input type="text" name="second_place_of_catholic_baptism" placeholder="Place of Catholic Baptism" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="date_of_catholic_baptism" class="block text-sm font-medium">Date of Catholic Baptism</label>
                            <input type="date" name="second_date_of_catholic_baptism" class="w-full border p-2 rounded-lg" required>
                        </div>

                        </div>
                        <div id="contact-info" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="mobile_number" class="block text-sm font-medium">Mobile Number</label>
                                <input type="tel" name="second_mobile_number" placeholder="Mobile Number" pattern="[0-9]{11}" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Landline Number</label>
                                <input type="tel" name="second_landline_number" placeholder="Landline Number" pattern="[0-9]{8}" class="w-full border p-2 rounded-lg">
                            </div>
                        </div>
                        <div id="contact-info" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="mobile_number" class="block text-sm font-medium">Permanent Address</label>
                                <input type="text" name="second_permanent_address" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Current Address</label>
                                <input type="text" name="second_current_address" class="w-full border p-2 rounded-lg">
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Provincial Address</label>
                                <input type="text" name="second_provincial_address" class="w-full border p-2 rounded-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                        <div class="w-full text-left font-semibold">3rd Beneficiary</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="full_name" class="block text-sm font-medium">Full Name</label>
                                <input type="text" name="third_full_name" placeholder="Full Name" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium">Email</label>
                                <input type="email" name="third_email" class="w-full border p-2 rounded-lg bg-gray-200" value="{{ Auth::user()->email }}" readonly>
                            </div>

                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium">Date of Birth</label>
                            <input type="date" name="third_date_of_birth" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="place_of_birth" class="block text-sm font-medium">Place of Birth</label>
                            <input type="text" name="third_place_of_birth" placeholder="Place of Birth" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="citizenship" class="block text-sm font-medium">Citizenship</label>
                            <input type="text" name="third_citizenship" placeholder="Citizenship" class="w-full border p-2 rounded-lg" required>
                        </div>
                        <div>
                            <label for="place_of_catholic_baptism" class="block text-sm font-medium">Place of Catholic Baptism</label>
                            <input type="text" name="third_place_of_catholic_baptism" placeholder="Place of Catholic Baptism" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="date_of_catholic_baptism" class="block text-sm font-medium">Date of Catholic Baptism</label>
                            <input type="date" name="third_date_of_catholic_baptism" class="w-full border p-2 rounded-lg" required>
                        </div>

                        </div>
                        <div id="contact-info" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="mobile_number" class="block text-sm font-medium">Mobile Number</label>
                                <input type="tel" name="third_mobile_number" placeholder="Mobile Number" pattern="[0-9]{11}" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Landline Number</label>
                                <input type="tel" name="third_landline_number" placeholder="Landline Number" pattern="[0-9]{8}" class="w-full border p-2 rounded-lg">
                            </div>
                        </div>
                        <div id="contact-info" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="mobile_number" class="block text-sm font-medium">Permanent Address</label>
                                <input type="text" name="third_permanent_address" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Current Address</label>
                                <input type="text" name="third_current_address" class="w-full border p-2 rounded-lg">
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Provincial Address</label>
                                <input type="text" name="third_provincial_address" class="w-full border p-2 rounded-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-4 text-center sticky bottom-4 pt-5">
                        <button type="submit" class="bg-keep-blue text-white w-full px-6 py-2 rounded-lg hover:bg-keep-yellow">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</x-app-layout>