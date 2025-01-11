<?php

namespace Database\Seeders;

use App\Models\ApplicantVault;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicantVaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vaults = [
            [
                'vault_number' => 'V001',
                'price' => 10000.00,
            ],
            [
                'vault_number' => 'V002',
                'price' => 12000.00,
            ],
            [
                'vault_number' => 'V003',
                'price' => 15000.00,
            ],
            [
                'vault_number' => 'V004',
                'price' => 20000.00,
            ],
            [
                'vault_number' => 'V005',
                'price' => 25000.00,
            ],
            [
                'vault_number' => 'V006',
                'price' => 30000.00,
            ],
            [
                'vault_number' => 'V007',
                'price' => 35000.00,
            ],
            [
                'vault_number' => 'V008',
                'price' => 40000.00,
            ],
            [
                'vault_number' => 'V009',
                'price' => 45000.00,
            ],
            [
                'vault_number' => 'V010',
                'price' => 50000.00,
            ],
        ];
 
        foreach ($vaults as $vault) {
            ApplicantVault::create($vault);
        }
    }
}
