<x-app-layout>

    <div class="flex">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h1 class="text-2xl font-bold mb-2 text-center">Application Form</h1>
                    <p class="text-center text-gray-600 mb-6">Ensure all personal details are filled out to proceed with your application.</p>
                    <div class="flex justify-center mb-6">
            <div class="flex items-center">
                <div class="flex items-center justify-center w-10 h-10 bg-yellow-400 text-white rounded-full">1</div>
                <span class="text-gray-600 ml-2">Application</span>
            </div>
            <div class="w-10 h-1 mx-2"></div>
            <div class="flex items-center">
                <div class="flex items-center justify-center w-10 h-10 bg-gray-300 text-white rounded-full">2</div>
                <span class="text-gray-600 ml-2">Requirements</span>
            </div>
            <div class="w-10 h-1 mx-2"></div>
            <div class="flex items-center">
                <div class="flex items-center justify-center w-10 h-10 bg-gray-300 text-white rounded-full">3</div>
                <span class="text-gray-600 ml-2">Donation</span>
            </div>
        </div>

        <form action="{{ route('applicant.savePage4') }}" method="POST">
        @csrf
        <label for="spouses_name">Spouse's Name:</label>
        <input type="text" id="spouses_name" name="spouses_name">
        <br>

        <label for="spouses_date_of_birth">Spouse's Date of Birth:</label>
        <input type="date" id="spouses_date_of_birth" name="spouses_date_of_birth">
        <br>

        <label for="spouses_place_of_birth">Spouse's Place of Birth:</label>
        <input type="text" id="spouses_place_of_birth" name="spouses_place_of_birth">
        <br>

        <label for="spouses_email_address">Spouse's Email:</label>
        <input type="email" id="spouses_email_address" name="spouses_email_address">
        <br>

        <label for="spouses_landline_number">Spouse's Landline Number:</label>
        <input type="text" id="spouses_landline_number" name="spouses_landline_number">
        <br>

        <label for="spouses_mobile_number">Spouse's Mobile Number:</label>
        <input type="text" id="spouses_mobile_number" name="spouses_mobile_number">
        <br>

        <button type="submit">Next</button>
    </form>
        </div>
    </div>
</x-app-layout>
