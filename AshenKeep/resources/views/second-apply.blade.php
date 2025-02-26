<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar Navigation -->
        <x-side-navig-bar />

        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-1">
                <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden sm:rounded-lg p-6">
                        <!-- Success Message -->
                        @if (session('success'))
                            <div class="mt-4 text-green-600 font-semibold text-center">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('second-apply.create') }}" class="space-y-6">
                            @csrf
                            
                            <!-- Address Form -->
                            <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                <div class="text-left font-semibold">Address Information</div>
                                
                                <!-- Current Address -->
                                <div class="mt-3">
                                    <div>Current Address</div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                                    <div>
                                        <label class="block text-sm font-medium">Region</label>
                                        <input type="text" name="currregion" value="{{ old('currregion', $addresses->currregion) }}" class="w-full border p-2 rounded-lg" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Province</label>
                                        <input type="text" name="currprovince" value="{{ old('currprovince', $addresses->currprovince) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">City / Municipality</label>
                                        <input type="text" name="currcity" value="{{ old('currcity', $addresses->currcity) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Barangay</label>
                                        <input type="text" name="currbarangay" value="{{ old('currbarangay', $addresses->currbarangay) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Subdivision/Street/Blk&Lot</label>
                                        <input type="text" name="currstreet" value="{{ old('currstreet', $addresses->currstreet) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                </div>

                                <!-- Permanent Address -->
                                <div class="mt-3">
                                    <div>Permanent Address</div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                                    <div>
                                        <label class="block text-sm font-medium">Region</label>
                                        <input type="text" name="permregion" value="{{ old('permregion', $addresses->permregion) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Province</label>
                                        <input type="text" name="permprovince" value="{{ old('permprovince', $addresses->permprovince) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">City / Municipality</label>
                                        <input type="text" name="permcity" value="{{ old('permcity', $addresses->permcity) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Barangay</label>
                                        <input type="text" name="permbarangay" value="{{ old('permbarangay', $addresses->permbarangay) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Subdivision/Street/Blk&Lot</label>
                                        <input type="text" name="permstreet" value="{{ old('permstreet', $addresses->permstreet) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                </div>

                                <!-- Provincial Address -->
                                <div class="mt-3">
                                    <div>Provincial Address</div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
                                    <div>
                                        <label class="block text-sm font-medium">Region</label>
                                        <input type="text" name="provregion" value="{{ old('provregion', $addresses->provregion) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Province</label>
                                        <input type="text" name="provprovince" value="{{ old('provprovince', $addresses->provprovince) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">City / Municipality</label>
                                        <input type="text" name="provcity" value="{{ old('provcity', $addresses->provcity) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Barangay</label>
                                        <input type="text" name="provbarangay" value="{{ old('provbarangay', $addresses->provbarangay) }}" class="w-full border p-2 rounded-lg">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Subdivision/Street/Blk&Lot</label>
                                        <input type="text" name="provstreet" value="{{ old('provstreet', $addresses->provstreet) }}" class="w-full border p-2 rounded-lg">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
