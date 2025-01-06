<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-6xl text-gray-800 dark:text-gray-200 leading-tight">
            Hi, {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="hidden sm:flex">
            <x-dashboard-side-bar />
        </div>

        <!-- Main Content -->
        <div class="container mx-auto p-1">
          <div class="flex flex-col md:flex-row gap-4 p-6">
            <!-- Left Section -->
            <div class="">
              <!-- Step 1 -->
                <div class="bg-[#FFE69E] p-6 rounded-lg">
                  <div class="flex items-start gap-4 mb-6">
                    <div class="flex flex-col items-center">
                      <div class="w-6 h-6 rounded-full bg-yellow-500"></div>
                        <div class="h-16 w-0.5 bg-yellow-500"></div>
                      </div>
                      <div class="bg-blue-900 text-white rounded-lg p-4 flex-1">
                        <h3 class="font-semibold">Application Submission</h3>
                        <p class="text-sm">Get started by filling up the application form.</p>
                      </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="flex items-start gap-4 mb-6">
                      <div class="flex flex-col items-center">
                        <div class="w-6 h-6 rounded-full bg-yellow-500"></div>
                        <div class="h-16 w-0.5 bg-yellow-500"></div>
                      </div>
                      <div class="bg-blue-900 text-white rounded-lg p-4 flex-1">
                        <h3 class="font-semibold">Requirements Submission</h3>
                        <p class="text-sm">Click here to proceed with the requirements submission. Make sure that you have completed the application form before.</p>
                      </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="flex items-start gap-4">
                      <div class="flex flex-col items-center">
                        <div class="w-6 h-6 rounded-full bg-yellow-500"></div>
                      </div>
                      <div class="bg-blue-900 text-white rounded-lg p-4 flex-1">
                        <h3 class="font-semibold">Donation is received!</h3>
                        <p class="text-sm">Send your donations here after submitting your requirements.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Right Section -->
                <div class="bg-blue-900 text-white rounded-lg p-6 flex-1 flex flex-col gap-4">
                  <h3 class="font-semibold text-lg text-center">Owned Vaults</h3>
                </div>
            </div>
          </div>
        </div>
</x-app-layout>
