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

        <form action="{{ route('applicant.savePage3') }}" method="POST">
        @csrf
        <label for="donors_occupation">Donor's Occupation:</label>
        <input type="text" id="donors_occupation" name="donors_occupation">
        <br>

        <label for="employers_name_or_business_name">Employer's Name or Business Name:</label>
        <input type="text" id="employers_name_or_business_name" name="employers_name_or_business_name">
        <br>

        <label for="business_address">Business Address:</label>
        <input type="text" id="business_address" name="business_address">
        <br>

        <label for="employers_email_or_business_email_address">Employer's Email:</label>
        <input type="email" id="employers_email_or_business_email_address" name="employers_email_or_business_email_address">
        <br>

        <label for="business_landline_number">Business Landline Number:</label>
        <input type="text" id="business_landline_number" name="business_landline_number">
        <br>

        <label for="business_mobile_number">Business Mobile Number:</label>
        <input type="text" id="business_mobile_number" name="business_mobile_number">
        <br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position">
        <br>

        <label for="years_in_employment_or_business">Years in Employment/Business:</label>
        <input type="number" id="years_in_employment_or_business" name="years_in_employment_or_business">
        <br>

        <button type="submit">Next</button>
    </form>
        </div>
    </div>
</x-app-layout>

