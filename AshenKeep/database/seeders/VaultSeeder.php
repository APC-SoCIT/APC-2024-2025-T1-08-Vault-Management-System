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
                'date_issued' => '2025-01-01',
                'status' => 'available',
                'price' => 10000.00,
            ],
        ];
        

        foreach ($vaults as $vault) {
            // If vault is unavailable, set owner, date_issued, and urns_quantity to null
            if ($vault['status'] === 'available') {
                $vault['date_issued'] = null;
            }

            Vault::create($vault);
        }
    }
}
