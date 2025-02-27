<x-app-layout>
    <div class="flex">
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
                                    <div class="">Current Address</div>
                                </div>
                                <div class="address-group grid grid-cols-1 md:grid-cols-2 gap-4 mt-3" data-group="1">
                                    <div>
                                        <label class="block text-sm font-medium">Region</label>
                                        <select class="region-selector w-full border p-2 rounded-lg" data-group="1"></select>
                                        <input type="hidden" name="currregion" class="region-text" data-group="1" value="{{ old('currregion', $addresses->currregion ?? '') }}" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Province</label>
                                        <select class="province-selector w-full border p-2 rounded-lg" data-group="1"></select>
                                        <input type="hidden" name="currprovince" class="province-text" data-group="1" value="{{ old('currprovince', $addresses->currprovince ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">City / Municipality</label>
                                        <select class="city-selector w-full border p-2 rounded-lg" data-group="1"></select>
                                        <input type="hidden" name="currcity" class="city-text" data-group="1" value="{{ old('currcity', $addresses->currcity ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Barangay</label>
                                        <select class="barangay-selector w-full border p-2 rounded-lg" data-group="1"></select>
                                        <input type="hidden" name="currbarangay" class="barangay-text" data-group="1" value="{{ old('currbarangay', $addresses->currbarangay ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Subdivision/Street/Blk&Lot</label>
                                        <input type="text" name="currstreet" class="w-full border p-2 rounded-lg" value="{{ old('currstreet', $addresses->currstreet ?? '') }}">
                                    </div>
                                </div>

                                <!-- Permanent Address -->
                                <div class="mt-3">
                                    <div class="">Permanent Address</div>
                                </div>
                                <div class="address-group grid grid-cols-1 md:grid-cols-2 gap-4 mt-3" data-group="2">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Region</label>
                                        <select class="region-selector w-full border p-2 rounded-lg" data-group="2"></select>
                                        <input type="hidden" name="permregion" class="region-text" data-group="2" value="{{ old('permregion', $addresses->permregion ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Province</label>
                                        <select class="province-selector w-full border p-2 rounded-lg" data-group="2"></select>
                                        <input type="hidden" name="permprovince" class="province-text" data-group="2" value="{{ old('permprovince', $addresses->permprovince ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">City / Municipality</label>
                                        <select class="city-selector w-full border p-2 rounded-lg" data-group="2"></select>
                                        <input type="hidden" name="permcity" class="city-text" data-group="2" value="{{ old('permcity', $addresses->permcity ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Barangay</label>
                                        <select class="barangay-selector w-full border p-2 rounded-lg" data-group="2"></select>
                                        <input type="hidden" name="permbarangay" class="barangay-text" data-group="2" value="{{ old('permbarangay', $addresses->permbarangay ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Subdivision/Street/Blk&Lot</label>
                                        <input type="text" name="permstreet" class="w-full border p-2 rounded-lg" value="{{ old('permstreet', $addresses->permstreet ?? '') }}">
                                    </div>
                                </div>

                                <!-- Provincial Address -->
                                <div class="mt-3">
                                    <div class="">Provincial Address</div>
                                </div>
                                <div class="address-group grid grid-cols-1 md:grid-cols-2 gap-4 mt-3" data-group="3">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Region</label>
                                        <select class="region-selector w-full border p-2 rounded-lg" data-group="3"></select>
                                        <input type="hidden" name="provregion" class="region-text" data-group="3" value="{{ old('provregion', $addresses->provregion ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Province</label>
                                        <select class="province-selector w-full border p-2 rounded-lg" data-group="3"></select>
                                        <input type="hidden" name="provprovince" class="province-text" data-group="3" value="{{ old('provprovince', $addresses->provprovince ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">City / Municipality</label>
                                        <select class="city-selector w-full border p-2 rounded-lg" data-group="3"></select>
                                        <input type="hidden" name="provcity" class="city-text" data-group="3" value="{{ old('provcity', $addresses->provcity ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Barangay</label>
                                        <select class="barangay-selector w-full border p-2 rounded-lg" data-group="3"></select>
                                        <input type="hidden" name="provbarangay" class="barangay-text" data-group="3" value="{{ old('provbarangay', $addresses->provbarangay ?? '') }}">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium">Subdivision/Street/Blk&Lot</label>
                                        <input type="text" name="provstreet" class="w-full border p-2 rounded-lg" value="{{ old('provstreet', $addresses->provstreet ?? '') }}">
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

    <!-- JavaScript -->
    <script>
        function toggleSection(id) {
            const section = document.getElementById(id);
            section.style.display = section.style.display === 'none' ? 'grid' : 'none';
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ph-address-selector.js"></script>
</x-app-layout>
