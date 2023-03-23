<?php

namespace Database\Seeders;
use App\Models\TransporteModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CamionSeeder::class);
        $transportes=new TransporteModel();
        $transportes->id = '123455';
        $transportes->nombre = 'rar';
        $transportes->razon_social = 'pull';
        $transportes->save();
    }
}








