<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
 
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create roles if they don't exist
        $role_admin = Role::firstOrCreate(['name' => 'Admin']);
        $role_office_staff = Role::firstOrCreate(['name' => 'Office Staff']);
        $role_finance_staff = Role::firstOrCreate(['name' => 'Finance Staff']);
        $role_applicant = Role::firstOrCreate(['name' => 'Applicant']);
 
        // Create permissions
        $permission_review_requirements = Permission::firstOrCreate(['name' => 'Review Requirements']);
        $permission_vaults = Permission::firstOrCreate(['name' => 'Vaults']);
        $permission_manage_applications = Permission::firstOrCreate(['name' => 'Manage Applications']);
        $permission_manage_requirements = Permission::firstOrCreate(['name' => 'Manage Requirements']);
        $permission_manage_donations = Permission::firstOrCreate(['name' => 'Manage Donations']);
        $permission_apply = Permission::firstOrCreate(['name' => 'Apply']);
        $permission_donate = Permission::firstOrCreate(['name' => 'Donate']);
        $permission_view_vaults = Permission::firstOrCreate(['name' => 'View Vaults']);
 
        // Sync permissions to roles
        $permissions_admin = [$permission_review_requirements, $permission_vaults];
        $permissions_office_staff = [$permission_manage_applications, $permission_manage_requirements];
        $permissions_applicant = [$permission_apply, $permission_donate, $permission_view_vaults];
 
        $role_admin->syncPermissions($permissions_admin);
        $role_office_staff->syncPermissions($permissions_office_staff);
        $role_finance_staff->givePermissionTo($permission_manage_donations);
        $role_applicant->syncPermissions($permissions_applicant);
    }
}
