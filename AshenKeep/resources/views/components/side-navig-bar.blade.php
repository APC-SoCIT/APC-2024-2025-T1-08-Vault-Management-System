<div x-data="{ open: false }" class="flex">
    <!-- Sidebar -->
    <div 
        :class="open ? 'translate-x-0' : '-translate-x-full sm:translate-x-0'" 
        class="w-64 bg-keep-yellow text-black font-semibold p-4 rounded-r-xl flex flex-col space-y-4 fixed inset-y-0 left-0 sm:relative transition-transform duration-300 ease-in-out">
        
        <div class="flex justify-center">
            <x-authentication-card-logo />
        </div>

        <!-- Dashboard (Visible to Everyone) -->
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="flex items-center gap-3 w-full">
            <x-dashboard-icon />
            <span>{{ __('Dashboard') }}</span>
        </x-nav-link>

        <!-- Admin Dashboard Side Bar -->
        @hasrole('Admin')
            <div class="space-y-3 w-full">
                <x-nav-link href="{{ url('/admin/requirements') }}" :active="request()->routeIs('admin.requirements')" class="flex items-center gap-3">
                    <x-review-icon />
                    {{ __( 'Review Application') }}
                </x-nav-link>

                <x-nav-link href="{{ url('/admin/vault') }}" :active="request()->routeIs('admin.vault')" class="flex items-center gap-3">
                    <x-vault-icon />
                    {{ __('Vaults') }}
                </x-nav-link>
            </div>
        @endhasrole

        <!-- Office Staff Dashboard Side Bar -->
        @hasrole('Office Staff')
            <div class="space-y-3 w-full">
                <x-nav-link href="{{ url('/officestaff/requirements') }}" :active="request()->routeIs('officestaff.requirements')" class="flex items-center gap-3">
                    <x-manager-icon />
                    {{ __('Manage Requirements') }}
                </x-nav-link>
            </div>
        @endhasrole

        <!-- Finance Staff Dashboard Side Bar -->
        @hasrole('Finance Staff')
            <div class="space-y-3 w-full">
                <x-nav-link href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')" class="flex items-center gap-3">
                    <x-review-icon />
                    {{ __('Review Application') }}
                </x-nav-link>
            </div>
        @endhasrole

        <!-- Applicant Dashboard Side Bar -->
        @hasrole('Applicant')
            <div class="space-y-3 w-full">
                <x-nav-link href="{{ route('applicant.application') }}" :active="request()->routeIs('applicant.application')" class="flex items-center gap-3">
                    <x-apply-icon />
                    {{ __('Apply') }}
                </x-nav-link>

                <x-nav-link href="{{ url('/applicant/requirements') }}" :active="request()->routeIs('applicant.requirements')" class="flex items-center gap-3">
                    <x-faq-icon />
                    {{ __('Your Requirements') }}
                </x-nav-link>

                <x-nav-link href="{{ url('/applicant/vault') }}" :active="request()->routeIs('applicant.vault')" class="flex items-center gap-3">
                    <x-vault-icon />
                    {{ __('View Vaults') }}
                </x-nav-link>

                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="flex items-center gap-3">
                    <x-about-icon />
                    {{ __('About Us') }}
                </x-nav-link>

                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="flex items-center gap-3">
                    <x-faq-icon />
                    {{ __('FAQs') }}
                </x-nav-link>
            </div>
        @endhasrole

        <!-- Common Links -->
        <div class="mt-auto w-full space-y-3">
            <x-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" class="flex items-center gap-3">
                <x-profile-icon />
                {{ __('Profile') }}
            </x-nav-link>

            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <x-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();" class="flex items-center gap-3">
                    <x-logout-icon />
                    {{ __('Log Out') }}
                </x-nav-link>
            </form>
        </div>
    </div>

    <!-- Hamburger Button -->
    <div class="sm:hidden fixed top-4 left-4 z-50">
        <button @click="open = !open" class="p-2 rounded-md bg-gray-200 text-gray-700 hover:bg-gray-300 transition duration-150">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'block': !open }" class="block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open, 'block': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
