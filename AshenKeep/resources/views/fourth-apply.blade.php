<x-app-layout>
    <div class="flex h-screen">
        <x-side-navig-bar />

        <div class="flex-1 p-6 bg-keep-white">
            <div class="flex-1">
                <div class="py-1">
                    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                        <div class="overflow-hidden sm:rounded-lg p-6">
                            <form method="POST" action="{{ route('fourth-apply.create') }}" class="space-y-6">
                                @csrf

                                <!-- Spouse Information -->
                                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="has_spouse" class="form-checkbox">
                                        <span class="font-semibold">I have a spouse</span>
                                    </label>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                                        <div>
                                            <label class="block text-sm font-medium">Spouse's Name</label>
                                            <input type="text" name="spouses_name" value="{{ old('spouses_name', $spouse->spouses_name ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Spouse's Date of Birth</label>
                                            <input type="date" name="spouses_date_of_birth" value="{{ old('spouses_date_of_birth', $spouse->spouses_date_of_birth ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Spouse's Place of Birth</label>
                                            <input type="text" name="spouses_place_of_birth" value="{{ old('spouses_place_of_birth', $spouse->spouses_place_of_birth ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Spouse's Email Address</label>
                                            <input type="email" name="spouses_email_address" value="{{ old('spouses_email_address', $spouse->spouses_email_address ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Spouse's Landline Number</label>
                                            <input type="text" name="spouses_landline_number" value="{{ old('spouses_landline_number', $spouse->spouses_landline_number ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Spouse's Mobile Number</label>
                                            <input type="text" name="spouses_mobile_number" value="{{ old('spouses_mobile_number', $spouse->spouses_mobile_number ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                    </div>
                                </div>

                                <!-- Parents Information -->
                                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                    <div class="text-left font-semibold">Parents Information</div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                                        <div>
                                            <label class="block text-sm font-medium">Father's Name</label>
                                            <input type="text" name="fathers_name" value="{{ old('fathers_name', $parent->fathers_name ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Father's Email</label>
                                            <input type="email" name="fathers_email_address" value="{{ old('fathers_email_address', $parent->fathers_email_address ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Father's Landline Number</label>
                                            <input type="tel" name="fathers_landline_number" value="{{ old('fathers_landline_number', $parent->fathers_landline_number ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Father's Mobile Number</label>
                                            <input type="tel" name="fathers_mobile_number" value="{{ old('fathers_mobile_number', $parent->fathers_mobile_number ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                                        <div>
                                            <label class="block text-sm font-medium">Mother's Name</label>
                                            <input type="text" name="mothers_name" value="{{ old('mothers_name', $parent->mothers_name ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Mother's Email</label>
                                            <input type="email" name="mothers_email_address" value="{{ old('mothers_email_address', $parent->mothers_email_address ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Mother's Landline Number</label>
                                            <input type="tel" name="mothers_landline_number" value="{{ old('mothers_landline_number', $parent->mothers_landline_number ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Mother's Mobile Number</label>
                                            <input type="tel" name="mothers_mobile_number" value="{{ old('mothers_mobile_number', $parent->mothers_mobile_number ?? '') }}" class="w-full border p-2 rounded-lg">
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="mt-4 text-center sticky bottom-4">
                                    <button type="submit" class="bg-keep-blue text-white w-full px-6 py-2 rounded-lg hover:bg-keep-yellow">
                                        Submit
                                    </button>
                                </div>
                            </form>

                            <!-- Success Message -->
                            @if (session('success'))
                                <div class="mt-4 text-green-600 font-semibold text-center">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
