<div class="flex-1">
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#F6F2E9] dark:bg-gray-800 overflow-hidden sm:rounded-lg p-6" 
                style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 -4px 6px rgba(0, 0, 0, 0.1), 4px 0 6px rgba(0, 0, 0, 0.1), -4px 0 6px rgba(0, 0, 0, 0.1);">
                
                <form wire:submit.prevent="submitForm">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Left Column -->
                        <div>
                            <label for="full_name">Full Name</label>
                            <input type="text" wire:model="full_name" placeholder="Full Name" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="current_address">Current Address</label>
                            <input type="text" wire:model="current_address" placeholder="Current Address" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" wire:model="email" class="w-full border p-2" value="{{ Auth::user()->email }}" required readonly>
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="permanent_address">Permanent Address</label>
                            <input type="text" wire:model="permanent_address" placeholder="Permanent Address" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="landline_number">Landline Number</label>
                            <input type="tel" wire:model="landline_number" placeholder="Landline Number" pattern="[0-9]{8}" class="w-full border p-2">
                        </div>

                        <div>
                            <label for="provincial_address">Provincial Address</label>
                            <input type="text" wire:model="provincial_address" placeholder="Provincial Address" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="mobile_number">Mobile Number</label>
                            <input type="text" wire:model="mobile_number" placeholder="Mobile Number" pattern="[0-9]{11}" class="w-full border p-2"required>
                        </div>

                        <div>
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" wire:model="date_of_birth" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="place_of_birth">Place of Birth</label>
                            <input type="text" wire:model="place_of_birth" placeholder="Place of Birth" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="citizenship">Citizenship</label>
                            <input type="text" wire:model="citizenship" placeholder="Citizenship" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="place_of_catholic_baptism">Place of Catholic Baptism</label>
                            <input type="text" wire:model="place_of_catholic_baptism" placeholder="Place of Catholic Baptism" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="date_of_catholic_baptism">Date of Catholic Baptism</label>
                            <input type="date" wire:model="date_of_catholic_baptism" class="w-full border p-2" required>
                        </div>

                        <div>
                            <label for="religious_organization_affiliated_with">Religious Organization Affiliated With</label>
                            <input type="text" wire:model="religious_organization_affiliated_with" placeholder="Religious Organization" class="w-full border p-2" required>
                        </div>

                        <!-- Right Column -->
                        <div>
                            <label for="spouses_name">Spouse's Name</label>
                            <input type="text" wire:model="spouses_name" placeholder="Spouse's Name" class="w-full border p-2">
                        </div>

                        <div>
                            <label for="spouses_date_of_birth">Spouse's Date of Birth</label>
                            <input type="date" wire:model="spouses_date_of_birth" class="w-full border p-2">
                        </div>

                        <div>
                            <label for="spouses_place_of_birth">Spouse's Place of Birth</label>
                            <input type="text" wire:model="spouses_place_of_birth" placeholder="Spouse's Place of Birth" class="w-full border p-2">
                        </div>

                        <div>
                            <label for="spouses_email_address">Spouse's Email Address</label>
                            <input type="email" wire:model="spouses_email_address" placeholder="Spouse's Email Address" class="w-full border p-2">
                        </div>

                        <div>
                            <label for="spouses_landline_number">Spouse's Landline Number</label>
                            <input type="text" wire:model="spouses_landline_number" placeholder="Spouse's Landline Number" class="w-full border p-2">
                        </div>

                        <div>
                            <label for="spouses_mobile_number">Spouse's Mobile Number</label>
                            <input type="text" wire:model="spouses_mobile_number" placeholder="Spouse's Mobile Number" class="w-full border p-2">
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="bg-keep-blue text-white w-full px-6 py-2 rounded-lg hover:bg-keep-yellow">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
