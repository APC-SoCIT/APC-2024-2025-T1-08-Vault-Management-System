<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
    <!-- Application Progress & Owned Vault -->
    <div class="md:col-span-2 flex flex-col">
        <div class="bg-white p-6 shadow-lg rounded-xl">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Application Progress</h2>
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-keep-yellow">
                             
                        </div>
                        <div class="h-16 w-0.5 bg-keep-yellow"></div>
                    </div>
                    <div class="bg-keep-light-blue text-white rounded-lg p-4 flex-1">
                        <h3 class="font-semibold">Application Submission</h3>
                        <p class="text-sm">Get started by filling up the application form.</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-keep-yellow">
                             
                        </div>
                        <div class="h-16 w-0.5 bg-keep-yellow"></div>
                    </div>
                    <div class="bg-keep-light-blue text-white rounded-lg p-4 flex-1">
                        <h3 class="font-semibold">Requirements Submission</h3>
                        <p class="text-sm">Submit clear and readable requirements.</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-keep-yellow">
                             
                        </div>
                    </div>
                    <div class="bg-keep-light-blue text-white rounded-lg p-4 flex-1">
                        <h3 class="font-semibold">Donation Received</h3>
                        <p class="text-sm">Send your donations after submitting requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Owned Vaults -->
    <div class="bg-keep-light-blue text-white p-6 shadow-lg rounded-xl md:col-span-1">
        <h2 class="text-xl font-semibold text-center">Owned Vault</h2>
        <div class="mt-6 text-center text-lg space-y-2">
            <p><strong>Vault Number:</strong> {{ $vaultNumber ?? 'N/A' }}</p>
            <p><strong>Vault Location:</strong> {{ $vaultLocation ?? 'N/A' }}</p>
            <p><strong>Vault Price:</strong> {{ $vaultPrice ?? 'N/A' }}</p>
        </div>
    </div>

    <!-- Application Status -->
    <div class="bg-white p-6 shadow-lg rounded-xl flex items-center justify-center md:col-span-3">
        <div class="text-center">
            <h2 class="text-xl font-semibold text-gray-700">Application Status</h2>
            <p class="text-3xl font-bold mt-3 uppercase">
                <span class="
                    {{ empty($applicationStatus) ? 'text-gray-500' : '' }}
                    {{ $applicationStatus === 'Pending' ? 'text-yellow-500' : '' }}
                    {{ $applicationStatus === 'Approved' ? 'text-green-500' : '' }}
                    {{ $applicationStatus === 'Rejected' ? 'text-red-500' : '' }}
                ">
                    {{ empty($applicationStatus) ? 'N/A' : $applicationStatus }}
                </span>
            </p>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="bg-white p-6 shadow-lg rounded-xl flex flex-col items-center justify-center md:col-span-3">
        <h2 class="text-lg font-semibold text-gray-700">Contact Us</h2>
        <p class="text-gray-600 text-center">Humabon Place, Barangay Magallanes, Makati, Philippines</p>
        <p class="text-gray-600">09090900909</p>
        <p class="text-gray-600">stalphonsusparish2017@gmail.com</p>
    </div>
</div>
