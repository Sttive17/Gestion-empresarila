<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            ['empresa' => 'TecnoSoluciones S.A.S.', 'nit' => '900123456-1', 'correo' => 'contacto@tecnosoluciones.co', 'telefono' => '3101234567', 'ciudad' => 'Bogotá', 'direccion' => 'Cra 15 # 93-60'],
            ['empresa' => 'Innovación Digital S.A.S.', 'nit' => '900234567-2', 'correo' => 'compras@innovaciondigital.co', 'telefono' => '3152345678', 'ciudad' => 'Medellín', 'direccion' => 'Calle 10 # 43-20'],
            ['empresa' => 'Comercializadora Andina', 'nit' => '900345678-3', 'correo' => 'gerencia@comercialandina.com', 'telefono' => '3203456789', 'ciudad' => 'Cali', 'direccion' => 'Av. 6N # 24N-15'],
            ['empresa' => 'Soluciones Empresariales del Valle', 'nit' => '900456789-4', 'correo' => 'ventas@solucionesvalle.co', 'telefono' => '3004567890', 'ciudad' => 'Cali', 'direccion' => 'Calle 5 # 38-12'],
            ['empresa' => 'Sistemas del Pacífico', 'nit' => '900567890-5', 'correo' => 'info@sistemaspacifico.com', 'telefono' => '3115678901', 'ciudad' => 'Buenaventura', 'direccion' => 'Cra 3 # 2-45'],
            ['empresa' => 'Tecnología Integral S.A.S.', 'nit' => '900678901-6', 'correo' => 'soporte@tecnologiaintegral.co', 'telefono' => '3126789012', 'ciudad' => 'Barranquilla', 'direccion' => 'Cra 51B # 82-254'],
            ['empresa' => 'Distribuciones del Norte', 'nit' => '900789012-7', 'correo' => 'admin@distrinorte.com.co', 'telefono' => '3137890123', 'ciudad' => 'Cartagena', 'direccion' => 'Bocagrande Calle 5 # 3-15'],
            ['empresa' => 'Grupo Empresarial Nova', 'nit' => '900890123-8', 'correo' => 'contacto@gruponova.co', 'telefono' => '3148901234', 'ciudad' => 'Bucaramanga', 'direccion' => 'Cra 27 # 36-14'],
            ['empresa' => 'Servicios Informáticos Colombia', 'nit' => '900901234-9', 'correo' => 'ventas@serviciosinfocol.com', 'telefono' => '3169012345', 'ciudad' => 'Pereira', 'direccion' => 'Av. Circunvalar # 12-45'],
            ['empresa' => 'Centro Tecnológico Empresarial', 'nit' => '901012345-0', 'correo' => 'gerencia@centrotec.co', 'telefono' => '3170123456', 'ciudad' => 'Manizales', 'direccion' => 'Cra 23 # 65-11'],
        ];

        foreach ($clients as $client) {
            Client::updateOrCreate(['nit' => $client['nit']], $client);
        }
    }
}
