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
                                <th class="p-2">Vault Number</th>
                                <th class="p-2">Location</th>
                                <th class="p-2">Vault Owner ID</th>
                                <th class="p-2">Owner</th>
                                <th class="p-2">Date Issued</th>
                                <th class="p-2">Urns Quantity</th>
                                <th class="p-2">Availability</th>
                                <th class="p-2">Price</th>
                                <th class="p-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="vaultTableBody" class="bg-white border border-gray-300 text-blue-900 shadow-lg rounded-xl p-6 mt-6">
                            @foreach ($vaults as $vault)
                            <tr>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <input type="text" wire:model.live="editingVault.vault_number" class="border p-1 w-[140px] text-center">
                                    @else
                                        {{ $vault->vault_number }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <input type="text" wire:model.live="editingVault.location" class="border p-1 w-[140px] text-center">
                                    @else
                                        {{ $vault->location }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <input type="text" wire:model.live="editingVault.vault_owner_id" class="border p-1 w-[140px] text-center">
                                    @else
                                        {{ $vault->vault_owner_id }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <input type="text" wire:model.live="editingVault.owner" class="border p-1 w-[140px] text-center">
                                    @else
                                        {{ $vault->owner }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <input type="date" wire:model.live="editingVault.date_issued" 
                                            class="border p-1 w-[120px] text-center">
                                    @else
                                        {{ $vault->date_issued ? $vault->date_issued->format('Y-m-d') : 'N/A' }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <input type="text" wire:model.live="editingVault.urns_quantity" class="border p-1 w-[140px] text-center">
                                    @else
                                        {{ $vault->urns_quantity }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <input type="text" wire:model.live="editingVault.availability" class="border p-1 w-[140px] text-center">
                                    @else
                                        {{ $vault->availability }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <input type="text" wire:model.live="editingVault.price" class="border p-1 w-[140px] text-center">
                                    @else
                                        {{ $vault->price }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($editingId === $vault->id)
                                        <button wire:click="save" class="text-green-500 hover:text-green-700">Save</button>
                                    @else
                                        <button wire:click="edit({{ $vault->id }})" class="text-blue-500 hover:text-blue-700">Edit</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination mt-6">
                    {{ $vaults->links() }}
                </div>
            </div>
        </div>
    </div>
</div>