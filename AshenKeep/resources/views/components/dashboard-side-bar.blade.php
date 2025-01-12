<div class="bg-[#C28E21] text-[#102A45] flex flex-col justify-center items-center py-4 px-2 rounded-r-[70px] max-w-32">

    <!--Admin Dashboard Side Bar-->
    @hasrole('Admin')

    <!--Review Requirements-->
    <a href="{{ url('/admin/requirements') }}"  class="mb-6 flex flex-col items-center rounded-lg hover:bg-white">
        <div class="h-10 w-10">
            <x-requirements />
        </div>
        <div class="text-sm text-center">
            Review Requirements
        </div>
    </a>

    <!--Vaults-->
    <a href="{{ url('/admin/vault') }}"  class="mb-6 flex flex-col items-center rounded-lg hover:bg-white">
        <div class="h-10 w-10">
            <x-vault />
        </div>
        <div class="text-sm text-center">
            Vaults
        </div>
    </a>
    @endhasrole

    <!--Office Staff Dashboard Side Bar-->
    @hasrole('Office Staff')
    
    <!--Manage Applications-->
    <a href="{{ url('/officestaff/applications') }}"  class="mb-6 flex flex-col items-center rounded-lg hover:bg-white">
        <div class="h-10 w-10">
            <x-application />
        </div>
        <div class="text-sm text-center">
            Manage Applications
        </div>
    </a>

    <!--Manage Requirements-->
    <a href="{{ url('/officestaff/requirements') }}"  class="mb-6 flex flex-col items-center rounded-lg hover:bg-white">
        <div class="h-10 w-10">
            <x-requirements />
        </div>
        <div class="text-sm text-center">
            Manage Requirements
        </div>
    </a>
    @endhasrole

    <!--Finance Staff Dashboard Side Bar-->
    @hasrole('Finance Staff')
    
    <!--Manage Donations-->
    <a href="{{ url('/dashboard') }}"  class="mb-6 flex flex-col items-center rounded-lg hover:bg-white">
        <div class="h-10 w-10">
            <x-donation />
        </div>
        <div class="text-sm text-center">
            Manage Donations
        </div>
    </a>
    @endhasrole

    <!--Applicant Dashboard Side Bar-->
    @hasrole('Applicant')
    
    <!--Apply-->
    <a href="{{ url('/applicant/apply') }}"  class="mb-6 flex flex-col items-center rounded-lg hover:bg-white">
        <div class="h-10 w-10">
            <x-application />
        </div>
        <div class="text-sm text-center">
            Apply
        </div>
    </a>

    <!--View Vaults-->
    <a href="{{ url('/applicant/vault') }}"  class="mb-6 flex flex-col items-center rounded-lg hover:bg-white">
        <div class="h-10 w-10">
            <x-vault />
        </div>
        <div class="text-sm text-center">
            View Vaults
        </div>
    </a>
    @endhasrole

    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf

        <a href="{{ route('logout') }}" @click.prevent="$root.submit();"  class="mb-6 flex flex-col items-center rounded-lg hover:bg-white">
            <div class="h-10 w-10">
                <x-logout />
            </div>
            <div class="text-sm text-center">
                Log Out
            </div>
        </a>
    </form>
</div>
