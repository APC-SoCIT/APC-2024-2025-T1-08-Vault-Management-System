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

        <form action="{{ route('applicant.savePage5') }}" method="POST">
        @csrf
        <label for="fathers_name">Father's Name:</label>
        <input type="text" id="fathers_name" name="fathers_name">
        <br>

        <label for="fathers_email_address">Father's Email:</label>
        <input type="email" id="fathers_email_address" name="fathers_email_address">
        <br>

        <label for="fathers_landline_number">Father's Landline Number:</label>
        <input type="text" id="fathers_landline_number" name="fathers_landline_number">
        <br>

        <label for="fathers_mobile_number">Father's Mobile Number:</label>
        <input type="text" id="fathers_mobile_number" name="fathers_mobile_number">
        <br>

        <label for="mothers_name">Mother's Name:</label>
        <input type="text" id="mothers_name" name="mothers_name">
        <br>

        <label for="mothers_email_address">Mother's Email:</label>
        <input type="email" id="mothers_email_address" name="mothers_email_address">
        <br>

        <label for="mothers_landline_number">Mother's Landline Number:</label>
        <input type="text" id="mothers_landline_number" name="mothers_landline_number">
        <br>

        <label for="mothers_mobile_number">Mother's Mobile Number:</label>
        <input type="text" id="mothers_mobile_number" name="mothers_mobile_number">
        <br>

        <button type="submit">Submit</button>
    </form>
        </div>
    </div>
</x-app-layout>
