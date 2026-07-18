<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(Request $request)
    {
        // 1. Array de productos con las rutas a tus imágenes y descripciones reales
        $todosLosProductos = [
            [
                'nombre' => 'Laptop de Alta Gama',
                'precio' => 850.00,
                'descripcion' => 'Laptop potente ideal para desarrollo de software, diseño gráfico y tareas exigentes.',
                'imagen' => asset('img/laptop.jpg')
            ],
            [
                'nombre' => 'Monitor UltraWide',
                'precio' => 250.00,
                'descripcion' => 'Monitor de 29 pulgadas ideal para multitarea y diseño visual.',
                'imagen' => asset('img/monitor.jpg')
            ],
            [
                'nombre' => 'Teclado Mecánico RGB',
                'precio' => 75.00,
                'descripcion' => 'Teclado con switches ergonómicos y retroiluminación personalizada.',
                'imagen' => asset('img/teclado.jpg')
            ],
            [
                'nombre' => 'Mouse Gamer Ergonómico',
                'precio' => 45.00,
                'descripcion' => 'Mouse óptico de alta precisión con botones programables.',
                'imagen' => asset('img/mouse.jpg')
            ],
        ];

        // 2. Capturamos el término enviado por el formulario
        $buscar = $request->input('buscar');

        // 3. Si hay algo en la caja de texto, filtramos el arreglo
        if (!empty($buscar)) {
            $listadoProductos = array_filter($todosLosProductos, function ($producto) use ($buscar) {
                $nombreProducto = mb_strtolower($producto['nombre'], 'UTF-8');
                $textoBuscado = mb_strtolower($buscar, 'UTF-8');
                return str_contains($nombreProducto, $textoBuscado);
            });
        } else {
            // Si está vacío, mostramos todos
            $listadoProductos = $todosLosProductos;
        }

        // 4. Enviamos la variable filtrada (listadoProductos) a la vista en plural
        return view('productos', compact('listadoProductos'));
    }
}
