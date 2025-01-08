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

        <form action="{{ route('applicant.savePage2') }}" method="POST">
        @csrf
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>
        <br>

        <label for="place_of_birth">Place of Birth:</label>
        <input type="text" id="place_of_birth" name="place_of_birth" required>
        <br>

        <label for="citizenship">Citizenship:</label>
        <input type="text" id="citizenship" name="citizenship" required>
        <br>

        <label for="place_of_catholic_baptism">Place of Catholic Baptism:</label>
        <input type="text" id="place_of_catholic_baptism" name="place_of_catholic_baptism">
        <br>

        <label for="date_of_catholic_baptism">Date of Catholic Baptism:</label>
        <input type="date" id="date_of_catholic_baptism" name="date_of_catholic_baptism">
        <br>

        <label for="religious_organization_affiliated_with">Religious Organization Affiliated With:</label>
        <input type="text" id="religious_organization_affiliated_with" name="religious_organization_affiliated_with">
        <br>

        <button type="submit">Next</button>
    </form>
        </div>
    </div>
</x-app-layout>