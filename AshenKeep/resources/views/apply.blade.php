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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Column 1 -->
            <div>
                <label for="full_name" class="block font-medium text-gray-700">Full Name</label>
                <input type="text" id="full_name" name="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
            </div>
            <div>
                <label for="email" class="block font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
            </div>
            <div>
                <label for="full_name" class="block font-medium text-gray-700">Permanent Address</label>
                <input type="text" id="full_name" name="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
            </div>
            <div>
                <label for="phone_number" class="block font-medium text-gray-700">Contact Number</label>
                <input type="text" id="phone_number" name="phone_number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
            </div>
            
            <div>
                <label for="full_name" class="block font-medium text-gray-700">Current Address</label>
                <input type="text" id="full_name" name="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
            </div>
            <div>
                <label for="full_name" class="block font-medium text-gray-700">Place of Birth</label>
                <input type="text" id="full_name" name="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
            </div>
            <div>
                <label for="full_name" class="block font-medium text-gray-700">Provincial Address</label>
                <input type="text" id="full_name" name="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
            </div>
            <div>
                <label class="block font-medium text-gray-700">Birthday</label>
                <div class="flex items-center space-x-2 mt-1">
                    <input type="text" name="birth_month" placeholder="MM" class="w-1/3 border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                    <input type="text" name="birth_day" placeholder="DD" class="w-1/3 border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                    <input type="text" name="birth_year" placeholder="YYYY" class="w-1/3 border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" required>
                </div>
            </div>
            <!-- Column 2 -->
            
            <div class="col-span-1 md:col-span-2">
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>