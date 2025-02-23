<x-app-layout>
    <div class="flex h-screen">
        <x-side-navig-bar />
        
        <!-- Main Content -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <div class="flex-1">
            <div class="py-1">
                <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden sm:rounded-lg p-6">
                        <form >
                            @csrf
                            
                            <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                <div class="text-left font-semibold">Address Information</div>
                                    <!-- Current Address -->
                                    <div>
                                        <div class="">Current Address</div>
                                    </div>
                                    <div class="address-group grid grid-cols-1 md:grid-cols-2 gap-4 mt-3" data-group="1">
                                        <div>
                                            <label class="block text-sm font-medium">Region</label>
                                            <select class="region-selector w-full border p-2 rounded-lg" data-group="1"></select>
                                            <input type="hidden" wire:model="currregion" class="region-text" data-group="1" required>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">Province</label>
                                            <select class="province-selector w-full border p-2 rounded-lg" data-group="1"></select>
                                            <input type="hidden" wire:model="currprovince" class="province-text" data-group="1">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">City / Municipality</label>
                                            <select class="city-selector w-full border p-2 rounded-lg" data-group="1"></select>
                                            <input type="hidden" wire:model="currcity" class="city-text" data-group="1">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">Barangay</label>
                                            <select class="barangay-selector w-full border p-2 rounded-lg" data-group="1"></select>
                                            <input type="hidden" wire:model="currbarangay" class="barangay-text" data-group="1">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Subdivision/Street/Blk&Lot</label>
                                            <input type="text" wire:model="currstreet" class="w-full border p-2 rounded-lg">
                                        </div>
                                    </div>
                                    
                                    <!-- Permanent Address -->
                                    <div>
                                        <div class="">Permanent Address</div>
                                    </div>
                                    <div class="address-group grid grid-cols-1 md:grid-cols-2 gap-4 mt-3" data-group="2">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">Region</label>
                                            <select class="region-selector w-full border p-2 rounded-lg" data-group="2"></select>
                                            <input type="hidden" wire:model="permregion" class="region-text" data-group="2">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">Province</label>
                                            <select class="province-selector w-full border p-2 rounded-lg" data-group="2"></select>
                                            <input type="hidden" wire:model="permprovince" class="province-text" data-group="2">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">City / Municipality</label>
                                            <select class="city-selector w-full border p-2 rounded-lg" data-group="2"></select>
                                            <input type="hidden" wire:model="permcity" class="city-text" data-group="2">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">Barangay</label>
                                            <select class="barangay-selector w-full border p-2 rounded-lg" data-group="2"></select>
                                            <input type="hidden" wire:model="permbarangay" class="barangay-text" data-group="2">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Subdivision/Street/Blk&Lot</label>
                                            <input type="text" wire:model="permstreet" class="w-full border p-2 rounded-lg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="mt-4 text-center sticky bottom-4">
                                <button type="submit" class="bg-keep-blue text-white w-full px-6 py-2 rounded-lg hover:bg-keep-yellow">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function toggleSection(id) {
            const section = document.getElementById(id);
            section.style.display = section.style.display === 'none' ? 'grid' : 'none';
        }
    </script>
    
    <script src="js/ph-address-selector.js"></script>
</x-app-layout>
