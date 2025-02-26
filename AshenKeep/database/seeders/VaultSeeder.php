<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaultSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('vaults')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $vaults = [
            [
                'vault_number' => 'V001',
                'location' => 'North',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 10000.00,
            ],
            [
                'vault_number' => 'V002',
                'location' => 'South',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 9000.00,
            ],
            [
                'vault_number' => 'V003',
                'location' => 'East',
                'vault_owner_id' => 3,
                'owner' => 'Bob Brown',
                'date_issued' => '2025-03-01',
                'urns_quantity' => 12,
                'availability' => 'Unavailable',
                'price' => 12000.00,
            ],
            [
                'vault_number' => 'V004',
                'location' => 'West',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 9500.00,
            ],
            [
                'vault_number' => 'V005',
                'location' => 'North',
                'vault_owner_id' => 5,
                'owner' => 'Michael Lee',
                'date_issued' => '2025-05-01',
                'urns_quantity' => 11,
                'availability' => 'Unavailable',
                'price' => 11000.00,
            ],
            [
                'vault_number' => 'V006',
                'location' => 'South',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 8500.00,
            ],
            [
                'vault_number' => 'V007',
                'location' => 'East',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 13000.00,
            ],
            [
                'vault_number' => 'V008',
                'location' => 'West',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 10500.00,
            ],
            [
                'vault_number' => 'V009',
                'location' => 'North',
                'vault_owner_id' => 9,
                'owner' => 'Robert Harris',
                'date_issued' => '2025-09-01',
                'urns_quantity' => 5,
                'availability' => 'Unavailable',
                'price' => 8000.00,
            ],
            [
                'vault_number' => 'V010',
                'location' => 'South',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 9000.00,
            ],
            [
                'vault_number' => 'V011',
                'location' => 'East',
                'vault_owner_id' => 11,
                'owner' => 'Charles Anderson',
                'date_issued' => '2025-11-01',
                'urns_quantity' => 8,
                'availability' => 'Unavailable',
                'price' => 10500.00,
            ],
            [
                'vault_number' => 'V012',
                'location' => 'West',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 10000.00,
            ],
            [
                'vault_number' => 'V013',
                'location' => 'North',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 11000.00,
            ],
            [
                'vault_number' => 'V014',
                'location' => 'South',
                'vault_owner_id' => 14,
                'owner' => 'Emily Clark',
                'date_issued' => '2026-02-01',
                'urns_quantity' => 11,
                'availability' => 'Unavailable',
                'price' => 11500.00,
            ],
            [
                'vault_number' => 'V015',
                'location' => 'East',
                'vault_owner_id' => null,
                'owner' => 'N/A',
                'date_issued' => null,
                'urns_quantity' => null,
                'availability' => 'Available',
                'price' => 12000.00,
            ],
        ];

        DB::table('vaults')->insert($vaults);
    }
}
