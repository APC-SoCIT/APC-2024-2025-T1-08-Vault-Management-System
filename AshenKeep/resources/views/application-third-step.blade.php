<x-app-layout>
    <div class="flex">
        <x-side-navig-bar />
        <!-- Main Content -->
        <div class="flex-1 p-6">
<div class="flex-1">
    <div class="py-1">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg p-6">
                <form method="POST" route="{{ route('applications.store') }}" class="space-y-1">
                    @csrf
                    
                    <!-- Personal Information -->
                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                        <div class="w-full text-left font-semibold">Occupation Information</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="full_name" class="block text-sm font-medium">Occupation</label>
                                <input type="text" name="donors_occupation" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium">Employer or Business Name</label>
                                <input type="text" name="employers_name_or_business_name" class="w-full border p-2 rounded-lg" required>
                            </div>

                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium">Work or Business Address</label>
                            <input type="text" name="business_address" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="place_of_birth" class="block text-sm font-medium">Employer or Business Email</label>
                            <input type="text" name="employers_email_or_business_email_address" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="citizenship" class="block text-sm font-medium">Employer or Business Landline Number</label>
                            <input type="text" name="business_landline_number" pattern="[0-9]{8}" class="w-full border p-2 rounded-lg" required>
                        </div>
                        <div>
                            <label for="place_of_catholic_baptism" class="block text-sm font-medium">Employer or Business Mobile Number</label>
                            <input type="tel" name="business_mobile_number" pattern="[0-9]{11}" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="date_of_catholic_baptism" class="block text-sm font-medium">Position</label>
                            <input type="text" name="position" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="religious_organization_affiliated_with" class="block text-sm font-medium">Years in employment or business</label>
                            <input type="text" name="years_in_employment_or_business" class="w-full border p-2 rounded-lg" required>
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