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
                        <div class="w-full text-left font-semibold">Personal Information</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="full_name" class="block text-sm font-medium">Full Name</label>
                                <input type="text" name="full_name" placeholder="Full Name" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium">Email</label>
                                <input type="email" name="email" class="w-full border p-2 rounded-lg bg-gray-200" value="{{ Auth::user()->email }}" readonly>
                            </div>

                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="place_of_birth" class="block text-sm font-medium">Place of Birth</label>
                            <input type="text" name="place_of_birth" placeholder="Place of Birth" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="citizenship" class="block text-sm font-medium">Citizenship</label>
                            <input type="text" name="citizenship" placeholder="Citizenship" class="w-full border p-2 rounded-lg" required>
                        </div>
                        <div>
                            <label for="place_of_catholic_baptism" class="block text-sm font-medium">Place of Catholic Baptism</label>
                            <input type="text" name="place_of_catholic_baptism" placeholder="Place of Catholic Baptism" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="date_of_catholic_baptism" class="block text-sm font-medium">Date of Catholic Baptism</label>
                            <input type="date" name="date_of_catholic_baptism" class="w-full border p-2 rounded-lg" required>
                        </div>

                        <div>
                            <label for="religious_organization_affiliated_with" class="block text-sm font-medium">Religious Organization Affiliated With</label>
                            <input type="text" name="religious_organization_affiliated_with" placeholder="Religious Organization" class="w-full border p-2 rounded-lg" required>
                        </div>

                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                        <div class="w-full text-left font-semibold">Contact Information ▼</div>
                        <div id="contact-info" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="mobile_number" class="block text-sm font-medium">Mobile Number</label>
                                <input type="tel" name="mobile_number" placeholder="Mobile Number" pattern="[0-9]{11}" class="w-full border p-2 rounded-lg" required>
                            </div>
                            <div>
                                <label for="landline_number" class="block text-sm font-medium">Landline Number</label>
                                <input type="tel" name="landline_number" placeholder="Landline Number" pattern="[0-9]{8}" class="w-full border p-2 rounded-lg">
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                        <div class="w-full text-left font-semibold">Chosen Vault</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                            <div>
                                <label for="vault_id">Choose Vault:</label>
                                <select name="vault_id" class="w-full border p-2 rounded-lg" required>
                                <option value="">Select a vault</option>
                                @foreach($vaults as $vault)
                                    <option value="{{ $vault->id }}">{{ $vault->id }}</option>
                                @endforeach
                                </select>
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