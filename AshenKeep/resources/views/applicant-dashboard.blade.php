<x-app-layout>
    <div class="flex">
        <x-side-navig-bar />
        <!-- Main Content -->
        <div class="flex-1 p-6 bg-keep-white">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                <!-- Card 1: Big -->
                <div class="bg-white p-6 shadow-lg rounded-xl flex items-center justify-center md:col-span-2">
                    <div class="flex">

                    <!-- Main Content -->
                    <div class="container mx-auto p-1">
                        <div class="flex flex-col md:flex-row gap-4 p-6">
                            <!-- Left Section -->
                                <!-- Step 1 -->
                                <div class="p-6 rounded-lg">
                                    <div class="flex items-start gap-4 mb-6">
                                        <div class="flex flex-col items-center">
                                            <div class="w-6 h-6 rounded-full bg-keep-yellow"></div>
                                            <div class="h-16 w-0.5 bg-keep-yellow"></div>
                                        </div>
                                        <div class="bg-keep-light-blue text-white rounded-lg p-4 flex-1">
                                            <h3 class="font-semibold">Application Submission</h3>
                                            <p class="text-sm">Get started by filling up the application form.</p>
                                        </div>
                                    </div>
                                    <!-- Step 2 -->
                                    <div class="flex items-start gap-4 mb-6">
                                        <div class="flex flex-col items-center">
                                            <div class="w-6 h-6 rounded-full bg-keep-yellow"></div>
                                            <div class="h-16 w-0.5 bg-keep-yellow"></div>
                                        </div>
                                        <div class="bg-keep-light-blue text-white rounded-lg p-4 flex-1">
                                            <h3 class="font-semibold">Requirements Submission</h3>
                                            <p class="text-sm">Proceed with the requirements submission. Make sure to submit a clear and readable content.</p>
                                        </div>
                                    </div>
                                    <!-- Step 3 -->
                                    <div class="flex items-start gap-4">
                                        <div class="flex flex-col items-center">
                                            <div class="w-6 h-6 rounded-full bg-keep-yellow"></div>
                                        </div>
                                        <div class="bg-keep-light-blue text-white rounded-lg p-4 flex-1">
                                            <h3 class="font-semibold">Donation is received!</h3>
                                            <p class="text-sm">Send your donations after submitting your requirements.</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Card 2: Small -->
    <div class="bg-keep-light-blue text-white p-6 shadow-lg rounded-xl flex-col md:col-span-1">
        <div class="text-center w-full font-bold text-5xl">
            Owned vault
        </div>
        <div class="text-center w-full font-bold text-3xl pt-10">
            <div class="flex-col">
                <p class="text-center p-2">Vault Number:</p>
                <p class="text-center p-2">Vault Location:</p>
                <p class="text-center p-2">Vault Price:</p>
            </div>
        </div>
    </div>
    <!-- Card 3: Small -->
    <div class="bg-white p-6 shadow-lg rounded-xl flex flex-col items-center justify-center md:col-span-1">
        <h1 class="text-lg font-semibold">Contact Us</h1>
        <p class="text-gray-700 text-center">Humabon Place, Barangay Magallanes, Makati, Philippines</p>
        <p class="text-gray-700">09090900909</p>
        <p class="text-gray-700">stalphonsusparish2017@gmail.com</p>
    </div>
    <!-- Card 4: Big -->
    <div class="bg-white p-6 shadow-lg rounded-xl flex md:col-span-2">
        <!-- 4 Clickable Cards under "CARD 4" -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full">
            <a href="{{ route('applicant.application') }}" class="bg-keep-light-blue text-white p-6 shadow-lg rounded-xl cursor-pointer hover:bg-keep-yellow hover:text-black transition-all">
                <h2 class="font-semibold text-lg">Step 1</h2>
                <p class="text-sm">Applicant Information</p>
            </a>
            <a href="{{ route('applicant.application') }}" class="bg-keep-light-blue text-white p-6 shadow-lg rounded-xl cursor-pointer hover:bg-keep-yellow hover:text-black transition-all">
                <h2 class="font-semibold text-lg">Step 2</h2>
                <p class="text-sm">Parents Information</p>
            </a>
            <a href="{{ route('applicant.application') }}" class="bg-keep-light-blue text-white p-6 shadow-lg rounded-xl cursor-pointer hover:bg-keep-yellow hover:text-black transition-all">
                <h2 class="font-semibold text-lg">Step 3</h2>
                <p class="text-sm">Beneficiaries Information</p>
            </a>
            <a href="{{ route('applicant.application') }}" class="bg-keep-light-blue text-white p-6 shadow-lg rounded-xl cursor-pointer hover:bg-keep-yellow hover:text-black transition-all">
                <h2 class="font-semibold text-lg">Step 4</h2>
                <p class="text-sm">Requirements Submission</p>
            </a>
            <a href="{{ route('applicant.application') }}" class="bg-keep-light-blue text-white p-6 shadow-lg rounded-xl cursor-pointer hover:bg-keep-yellow hover:text-black transition-all">
                <h2 class="font-semibold text-lg">Step 5</h2>
                <p class="text-sm">Donation</p>
            </a>
        </div>
    </div>
</div>


        </div>
    </div>
</x-app-layout>
