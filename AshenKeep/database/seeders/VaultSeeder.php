<?php

namespace Database\Seeders;

use App\Models\Vault;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vaults = [
            [
                'vault_number' => 'V001',
                'location' => 'North',
                'vault_owner_id' => 1,
                'owner' => 'John Doe',
                'date_issued' => '2025-01-01',
                'urns_quantity' => 10,
                'availability' => 'Available',
                'price' => 10000.00,
            ],
            [
                'vault_number' => 'V002',
                'location' => 'East',
                'vault_owner_id' => 2,
                'owner' => 'Jane Smith',
                'date_issued' => '2025-01-02',
                'urns_quantity' => 15,
                'availability' => 'Unavailable',
                'price' => 12000.00,
            ],
            [
                'vault_number' => 'V003',
                'location' => 'South',
                'vault_owner_id' => 3,
                'owner' => 'Alice Johnson',
                'date_issued' => '2025-01-03',
                'urns_quantity' => 12,
                'availability' => 'Available',
                'price' => 15000.00,
            ],
            [
                'vault_number' => 'V004',
                'location' => 'West',
                'vault_owner_id' => 4,
                'owner' => 'Bob Lee',
                'date_issued' => '2025-01-04',
                'urns_quantity' => 8,
                'availability' => 'Unavailable',
                'price' => 20000.00,
            ],
            [
                'vault_number' => 'V005',
                'location' => 'North',
                'vault_owner_id' => 5,
                'owner' => 'Charlie Davis',
                'date_issued' => '2025-01-05',
                'urns_quantity' => 20,
                'availability' => 'Available',
                'price' => 25000.00,
            ],
            [
                'vault_number' => 'V006',
                'location' => 'East',
                'vault_owner_id' => 6,
                'owner' => 'David Harris',
                'date_issued' => '2025-01-06',
                'urns_quantity' => 30,
                'availability' => 'Unavailable',
                'price' => 30000.00,
            ],
            [
                'vault_number' => 'V007',
                'location' => 'South',
                'vault_owner_id' => 7,
                'owner' => 'Eve Clark',
                'date_issued' => '2025-01-07',
                'urns_quantity' => 18,
                'availability' => 'Available',
                'price' => 35000.00,
            ],
            [
                'vault_number' => 'V008',
                'location' => 'West',
                'vault_owner_id' => 8,
                'owner' => 'Frank Miller',
                'date_issued' => '2025-01-08',
                'urns_quantity' => 25,
                'availability' => 'Unavailable',
                'price' => 40000.00,
            ],
            [
                'vault_number' => 'V009',
                'location' => 'North',
                'vault_owner_id' => 9,
                'owner' => 'Grace Wilson',
                'date_issued' => '2025-01-09',
                'urns_quantity' => 13,
                'availability' => 'Available',
                'price' => 45000.00,
            ],
            [
                'vault_number' => 'V010',
                'location' => 'East',
                'vault_owner_id' => 10,
                'owner' => 'Hannah Brown',
                'date_issued' => '2025-01-10',
                'urns_quantity' => 17,
                'availability' => 'Unavailable',
                'price' => 50000.00,
            ],
        ];
        

        foreach ($vaults as $vault) {
            // If vault is unavailable, set owner, date_issued, and urns_quantity to null
            if ($vault['availability'] === 'Unavailable') {
                $vault['owner'] = null;
                $vault['date_issued'] = null;
                $vault['urns_quantity'] = null;
            }

            Vault::create($vault);
        }
    }
}
