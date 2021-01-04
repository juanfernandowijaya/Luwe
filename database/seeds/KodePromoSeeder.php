<?php

use Illuminate\Database\Seeder;
use App\KodePromo;

class KodePromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kodePromo = KodePromo::create([
            'promo_id' => 1,
            'kode_promo' => 'DANANEWYEAR',
            'kuota' => '100/Hari',
        ]);
        $kodePromo = KodePromo::create([
            'promo_id' => 1,
            'kode_promo' => 'DANANEWSALE',
            'kuota' => '150/Hari',
        ]);
        $kodePromo = KodePromo::create([
            'promo_id' => 2,
            'kode_promo' => 'GOPAYENAK',
            'kuota' => '99/Hari',
        ]);
        $kodePromo = KodePromo::create([
            'promo_id' => 2,
            'kode_promo' => 'GOPAYPAYLATER',
            'kuota' => '200/Hari',
        ]);
        $kodePromo = KodePromo::create([
            'promo_id' => 3,
            'kode_promo' => 'OVOSAHABAT',
            'kuota' => '100/Hari',
        ]);
        $kodePromo = KodePromo::create([
            'promo_id' => 3,
            'kode_promo' => 'OVOBEST',
            'kuota' => '10/Hari',
        ]);
        $kodePromo = KodePromo::create([
            'promo_id' => 4,
            'kode_promo' => 'SHOPEPAYDAY',
            'kuota' => '100/Hari',
        ]);
        $kodePromo = KodePromo::create([
            'promo_id' => 4,
            'kode_promo' => 'SHOPEEBESTDEALS',
            'kuota' => '250/Hari',
        ]);
    }
}
