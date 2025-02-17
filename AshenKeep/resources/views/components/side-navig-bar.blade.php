<div x-data="{ open: false }" class="flex h-screen">
    
    <!-- Sidebar -->
    <div 
        :class="open ? 'translate-x-0' : '-translate-x-full sm:translate-x-0'" 
        class="w-64 bg-keep-yellow text-black font-semibold p-4 rounded-r-xl flex flex-col items-center fixed inset-y-0 left-0 sm:relative transition-transform duration-300 ease-in-out">
        
        <x-authentication-card-logo />

        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>

        <!-- Admin Dashboard Side Bar -->
        @hasrole('Admin')
            <x-nav-link href="{{ url('/admin/requirements') }}" :active="request()->routeIs('/admin/requirements')">
                {{ __('Review Application') }}
            </x-nav-link>
            <x-nav-link href="{{ url('/admin/vault') }}" :active="request()->routeIs('/admin/vault')">
                {{ __('Vaults') }}
            </x-nav-link>
        @endhasrole

        <!-- Office Staff Dashboard Side Bar -->
        @hasrole('Office Staff')
            <x-nav-link href="{{ url('/officestaff/applications') }}" :active="request()->routeIs('/officestaff/applications')">
                {{ __('Manage Applications') }}
            </x-nav-link>
            <x-nav-link href="{{ url('/officestaff/requirements') }}" :active="request()->routeIs('/officestaff/requirements')">
                {{ __('Manage Requirements') }}
            </x-nav-link>
        @endhasrole

        <!-- Finance Staff Dashboard Side Bar -->
        @hasrole('Finance Staff')
            <x-nav-link href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Review Application') }}
            </x-nav-link>
        @endhasrole

        <!-- Applicant Dashboard Side Bar -->
        @hasrole('Applicant')
            <x-nav-link href="{{ route('applicant.application') }}" :active="request()->routeIs('applicant.application')">
                {{ __('Apply') }}
            </x-nav-link>

            <x-nav-link href="{{ url('/applicant/vault') }}" :active="request()->routeIs('/applicant/vault')">
                {{ __('View Vaults') }}
            </x-nav-link>
        @endhasrole

        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('About Us') }}
        </x-nav-link>

        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('FAQs') }}
        </x-nav-link>

        <x-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('dashboard')">
            {{ __('Profile') }}
        </x-nav-link>

        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <x-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </x-nav-link>
        </form>
    </div>

    <!-- Hamburger Button -->
    <div class="sm:hidden fixed top-4 left-4 z-50">
        <button @click="open = !open" class="p-2 rounded-md bg-gray-200 text-gray-700 hover:bg-gray-300 transition duration-150">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <!-- Open Menu Icon -->
                <path :class="{ 'hidden': open, 'block': !open }" class="block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <!-- Close Menu Icon -->
                <path :class="{ 'hidden': !open, 'block': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

</div>