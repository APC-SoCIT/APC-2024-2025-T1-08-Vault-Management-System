<div class="flex-1">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-[#F6F2E9] dark:bg-gray-800 overflow-hidden sm:rounded-lg p-6" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 -4px 6px rgba(0, 0, 0, 0.1), 4px 0 6px rgba(0, 0, 0, 0.1), -4px 0 6px rgba(0, 0, 0, 0.1);">
<form wire:submit.prevent="submitForm">
    <div>
        <label for="full_name">Full Name</label>
        <input type="text" wire:model="full_name" placeholder="Full Name">
        @error('full_name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="permanent_address">Permanent Address</label>
        <input type="text" wire:model="permanent_address" placeholder="Permanent Address">
    </div>

    <div>
        <label for="current_address">Current Address</label>
        <input type="text" wire:model="current_address" placeholder="Current Address">
    </div>

    <div>
        <label for="provincial_address">Provincial Address</label>
        <input type="text" wire:model="provincial_address" placeholder="Provincial Address">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" wire:model="email" placeholder="Email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="landline_number">Landline Number</label>
        <input type="text" wire:model="landline_number" placeholder="Landline Number">
    </div>

    <div>
        <label for="mobile_number">Mobile Number</label>
        <input type="text" wire:model="mobile_number" placeholder="Mobile Number">
    </div>

    <div>
        <label for="date_of_birth">Date of Birth</label>
        <input type="date" wire:model="date_of_birth" placeholder="Date of Birth">
    </div>

    <div>
        <label for="place_of_birth">Place of Birth</label>
        <input type="text" wire:model="place_of_birth" placeholder="Place of Birth">
    </div>

    <div>
        <label for="citizenship">Citizenship</label>
        <input type="text" wire:model="citizenship" placeholder="Citizenship">
    </div>

    <div>
        <label for="place_of_catholic_baptism">Place of Catholic Baptism</label>
        <input type="text" wire:model="place_of_catholic_baptism" placeholder="Place of Catholic Baptism">
    </div>

    <div>
        <label for="date_of_catholic_baptism">Date of Catholic Baptism</label>
        <input type="date" wire:model="date_of_catholic_baptism" placeholder="Date of Catholic Baptism">
    </div>

    <div>
        <label for="religious_organization_affiliated_with">Religious Organization Affiliated With</label>
        <input type="text" wire:model="religious_organization_affiliated_with" placeholder="Religious Organization">
    </div>

    <div>
        <label for="spouses_name">Spouse's Name</label>
        <input type="text" wire:model="spouses_name" placeholder="Spouse's Name">
    </div>

    <div>
        <label for="spouses_date_of_birth">Spouse's Date of Birth</label>
        <input type="date" wire:model="spouses_date_of_birth" placeholder="Spouse's Date of Birth">
    </div>

    <div>
        <label for="spouses_place_of_birth">Spouse's Place of Birth</label>
        <input type="text" wire:model="spouses_place_of_birth" placeholder="Spouse's Place of Birth">
    </div>

    <div>
        <label for="spouses_email_address">Spouse's Email Address</label>
        <input type="email" wire:model="spouses_email_address" placeholder="Spouse's Email Address">
    </div>

    <div>
        <label for="spouses_landline_number">Spouse's Landline Number</label>
        <input type="text" wire:model="spouses_landline_number" placeholder="Spouse's Landline Number">
    </div>

    <div>
        <label for="spouses_mobile_number">Spouse's Mobile Number</label>
        <input type="text" wire:model="spouses_mobile_number" placeholder="Spouse's Mobile Number">
    </div>

    <button type="submit">Submit</button>
</form>
