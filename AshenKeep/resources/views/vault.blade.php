<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Administrator') }}
        </h2>
    </x-slot>
 
    <div class="flex py-12">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>
 
        <div class="flex-1">
            <div class="py-1 h-screen overflow-y-auto">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-6">Hi, {{ Auth::user()->name }}!</h1>
               
                <!-- Vault List Box -->
                <div class="bg-blue-900 rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-white text-xl font-semibold">Vaults List</h2>
                        <div class="flex items-center space-x-4 ml-auto">
                            <select id="locationFilter" class="form-select bg-blue-900 text-white rounded-lg border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300" >
                                <option value="All">All</option>
                                <option value="Inner Southwest">Inner Southwest</option>
                                <option value="Outer Northwest">Outer Northwest</option>
                                <option value="Inner South">Inner South</option>
                                <option value="Outer North">Outer North</option>
                            </select>
                            <button class="btn bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                Add New Vault
                            </button>
                        </div>
                    </div>


                    <div class="overflow-auto max-h-[400px]">
                        <table class="table table-bordered w-full">
                            <thead class="bg-blue-900 text-white text-lg font-semibold">
                                <tr>
                                    <th class="p-2">Vault Number</th>
                                    <th class="p-2">Location</th>
                                    <th class="p-2">Vault Owner ID</th>
                                    <th class="p-2">Owner</th>
                                    <th class="p-2">Date Issued</th>
                                    <th class="p-2">Urns Quantity</th>
                                    <th class="p-2">Availability</th>
                                    <th class="p-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-blue-900 shadow-lg rounded-xl p-6 mt-6">
                                <tr>
                                    <th class="p-2">hi</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                </tr>

                                <tr>
                                    <th class="p-2">hi</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                </tr>

                                <tr>
                                    <th class="p-2">hi</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                </tr>

                                <tr>
                                    <th class="p-2">hi</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                </tr>

                                <tr>
                                    <th class="p-2">hi</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                </tr>

                                <tr>
                                    <th class="p-2">hi</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                    <th class="p-2">sample</th>
                                </tr>

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</x-app-layout>