<x-app-layout>
    <div class="flex h-screen">
        <x-side-navig-bar />

        <div class="flex-1 p-6 bg-keep-white">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <div class="flex-1">
                <div class="py-1">
                    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                        <div class="overflow-hidden sm:rounded-lg p-6">
                            <form wire:submit.prevent="submitForm" class="space-y-6">
                                @csrf

                                <!-- Spouse Information -->
                                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="has_spouse" onclick="toggleSpouseSection()" class="form-checkbox">
                                        <span class="font-semibold">I have a spouse</span>
                                    </label>
                                    <div id="spouse-info" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 hidden">
                                        <div>
                                            <label for="spouses_name" class="block text-sm font-medium">Spouse's Name</label>
                                            <input type="text" wire:model="spouses_name" placeholder="Spouse's Name" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="spouses_date_of_birth" class="block text-sm font-medium">Spouse's Date of Birth</label>
                                            <input type="date" wire:model="spouses_date_of_birth" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="spouses_place_of_birth" class="block text-sm font-medium">Spouse's Place of Birth</label>
                                            <input type="text" wire:model="spouses_place_of_birth" placeholder="Spouse's Place of Birth" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="spouses_email_address" class="block text-sm font-medium">Spouse's Email Address</label>
                                            <input type="email" wire:model="spouses_email_address" placeholder="Spouse's Email Address" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="spouses_landline_number" class="block text-sm font-medium">Spouse's Landline Number</label>
                                            <input type="text" wire:model="spouses_landline_number" placeholder="Spouse's Landline Number" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="spouses_mobile_number" class="block text-sm font-medium">Spouse's Mobile Number</label>
                                            <input type="text" wire:model="spouses_mobile_number" placeholder="Spouse's Mobile Number" class="w-full border p-2 rounded-lg">
                                        </div>
                                    </div>
                                </div>

                                <!-- Parents Information -->
                                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                    <div class="text-left font-semibold">Parents Information</div>
                                    <div id="parents" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                                        <div>
                                            <label for="fathers_name" class="block text-sm font-medium">Father's Name</label>
                                            <input type="text" wire:model="fathers_name" placeholder="Full Name" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="fathers_email_address" class="block text-sm font-medium">Father's Email</label>
                                            <input type="email" wire:model="fathers_email_address" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="fathers_landline_number" class="block text-sm font-medium">Father's Landline Number</label>
                                            <input type="tel" wire:model="fathers_landline_number" placeholder="Landline Number" pattern="[0-9]{8}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="fathers_mobile_number" class="block text-sm font-medium">Father's Mobile Number</label>
                                            <input type="tel" wire:model="fathers_mobile_number" placeholder="Mobile Number" pattern="[0-9]{11}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="mothers_name" class="block text-sm font-medium">Mother's Name</label>
                                            <input type="text" wire:model="mothers_name" placeholder="Full Name" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="mothers_email_address" class="block text-sm font-medium">Mother's Email</label>
                                            <input type="email" wire:model="mothers_email_address" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="mothers_landline_number" class="block text-sm font-medium">Mother's Landline Number</label>
                                            <input type="tel" wire:model="mothers_landline_number" placeholder="Landline Number" pattern="[0-9]{8}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="mothers_mobile_number" class="block text-sm font-medium">Mother's Mobile Number</label>
                                            <input type="tel" wire:model="mothers_mobile_number" placeholder="Mobile Number" pattern="[0-9]{11}" class="w-full border p-2 rounded-lg">
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="mt-4 text-center sticky bottom-4">
                                    <button type="submit" class="bg-keep-blue text-white w-full px-6 py-2 rounded-lg hover:bg-keep-yellow">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function toggleSection(id) {
                    const section = document.getElementById(id);
                    section.style.display = section.style.display === 'none' ? 'grid' : 'none';
                }
                function toggleSpouseSection() {
                    const spouseSection = document.getElementById('spouse-info');
                    const checkbox = document.getElementById('has_spouse');
                    spouseSection.style.display = checkbox.checked ? 'grid' : 'none';
                }
            </script>
            
            <script src="js/ph-address-selector.js"></script>
        </div>
    </div>
</x-app-layout>
