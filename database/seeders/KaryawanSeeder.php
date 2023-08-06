<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create([
            'nik'   => '1213141550100002',
            'nama_lengkap' => 'Wahyu',
            'jabatan'   => 'Bos Paruh Waktu',
            'nomer_hp'  => '082353089050',
            'password'  => Hash::make('wahyu1993')
        ]);
    }
}
