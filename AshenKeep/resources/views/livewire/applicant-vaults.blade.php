<div class="flex-1 ml-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="rounded-lg p-6 bg-[#102A45]">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-white text-xl font-semibold">Vaults List</h2>
                    <div class="flex items-center space-x-4 ml-auto">
                        <!-- Filter dropdown -->
                        <select wire:model.live="locationFilter" class="form-select bg-white text-black rounded-lg border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            <option value="">All Locations</option>
                            @foreach(App\Models\Vault::distinct()->pluck('location') as $location)
                                <option value="{{ $location }}">{{ $location }}</option>
                            @endforeach
                        </select>
                        <!-- Search Bar -->
                        <input type="text" wire:model.live.debounce.500ms="search" class="form-input bg-white text-black rounded-lg border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Search" />
                    </div>
                </div>

                <div class="overflow-auto max-h-[400px]">
                    <table class="table table-bordered w-full rounded-lg overflow-hidden">
                        <thead class="bg-[#102A45] text-white text-lg font-semibold rounded-t-lg">
                            <tr>
                                <th class="p-6">Vault Number</th>
                                <th class="p-6">Location</th>
                                <th class="p-6">Availability</th>
                                <th class="p-6">Price</th>
                            </tr>
                        </thead>
                        <tbody id="vaultTableBody" class="bg-white border border-gray-300 text-blue-900 shadow-lg rounded-xl p-6 mt-6 gap-3">
                            @foreach ($vaults as $vault)
                                <tr>
                                    <td class="text-center gap-3">{{ $vault->vault_number }}</td>
                                    <td class="text-center gap-3">{{ $vault->location }}</td>
                                    <td class="text-center gap-3">{{ $vault->availability }}</td>
                                    <td class="text-center gap-3">${{ number_format($vault->price, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="pagination mt-6">
                    {{ $vaults->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
