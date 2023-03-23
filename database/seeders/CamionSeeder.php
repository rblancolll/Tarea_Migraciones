<?php

namespace Database\Seeders;

use App\Models\CamionModel;
use Illuminate\Database\Seeder;

class CamionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camiones=new CamionModel();
        $camiones-> id= '123456';
        $camiones-> placa_camion= 'abve';
        $camiones-> marca='toyota';
        $camiones->color='azul';
        $camiones->model='siri';
        $camiones->capacidad_toneladas='15';
        $camiones-> transportes_id='123456';
        $camiones -> save();
    }
}
