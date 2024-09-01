<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejercicio1', function () {
    $estudiantes = [
        'Juan' => [
            'Matemáticas' => 8,
            'Lengua' => 7,
            'Ciencias' => 9,
            'Historia' => 6
        ],
        'María' => [
            'Matemáticas' => 9,
            'Lengua' => 8,
            'Ciencias' => 7,
            'Historia' => 8
        ],
        'Pedro' => [
            'Matemáticas' => 7,
            'Lengua' => 6,
            'Ciencias' => 8,
            'Historia' => 9
        ]
    ];
    
    function calcularPromedio($calificaciones) {
        $suma = array_sum($calificaciones);
        $promedio = $suma / count($calificaciones);
        return $promedio;
    }
    
    $promedios = [];
    foreach ($estudiantes as $nombre => $calificaciones) {
        $promedio = calcularPromedio($calificaciones);
        $promedios[$nombre] = $promedio;
    }
    
    $maxPromedio = max($promedios);
    
    $estudianteConMaxPromedio = array_search($maxPromedio, $promedios);
    
    echo "El estudiante con el promedio más alto es $estudianteConMaxPromedio con un promedio de $maxPromedio";
});

Route::get('/ejercicio2', function () {
    $empleados = [
        'Juan Pérez' => [
            'salario' => 2500,
            'fecha_contratacion' => '2018-01-01',
            'departamento' => 'Ventas'
        ],
        'María Rodríguez' => [
            'salario' => 3000,
            'fecha_contratacion' => '2020-06-01',
            'departamento' => 'Marketing'
        ],
        'Pedro Gómez' => [
            'salario' => 2000,
            'fecha_contratacion' => '2015-03-01',
            'departamento' => 'IT'
        ],
        'Ana López' => [
            'salario' => 2800,
            'fecha_contratacion' => '2019-09-01',
            'departamento' => 'Finanzas'
        ]
    ];
    
    foreach ($empleados as $nombre => $informacion) {
        echo "Nombre: $nombre, Salario: $informacion[salario]\n";
    }
});

Route::get('/ejercicio3', function () {
    $productos = [
        'Playera Blue' => [
            'precio' => 19.99,
            'detalles' => [
                'disponibilidad' => true,
                'reseñas' => [
                    'reseña 1' => 'Excelente producto',
                    'reseña 2' => 'Me encanta'
                ]
            ]
        ],
        'Camuflado' => [
            'precio' => 9.99,
            'detalles' => [
                'disponibilidad' => false,
                'reseñas' => [
                    'reseña 1' => 'No me gusta'
                ]
            ]
        ],
        'Chaqueta Holandesa' => [
            'precio' => 29.99,
            'detalles' => [
                'disponibilidad' => true,
                'reseñas' => [
                    'reseña 1' => 'Muy bueno',
                    'reseña 2' => 'Excelente'
                ]
            ]
        ],
        'Pantalon Drill' => [
            'precio' => 39.99,
            'detalles' => [
                'disponibilidad' => true,
                'reseñas' => [
                    'reseña 1' => 'Me encanta',
                    'reseña 2' => 'Excelente producto'
                ]
            ]
        ]
    ];
    
    foreach ($productos as $nombre => $informacion) {
        if ($informacion['detalles']['disponibilidad']) {
            echo "Nombre: $nombre, Precio: $informacion[precio]\n";
        }
    }
});