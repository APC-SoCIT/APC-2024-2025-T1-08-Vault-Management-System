<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#F6F2E9] dark:bg-gray-900"
     style="background-image: url('./img/login_bg.svg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-[#F6F2E9] dark:bg-gray-800 overflow-hidden sm:rounded-lg" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 -4px 6px rgba(0, 0, 0, 0.1), 4px 0 6px rgba(0, 0, 0, 0.1), -4px 0 6px rgba(0, 0, 0, 0.1);">
        {{ $slot }}
    </div>
</div>
