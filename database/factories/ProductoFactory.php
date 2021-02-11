<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->sentence();
        return [
            'nombre'=>$nombre,
            'slug'=> Str::slug($nombre, '-'),
            'descripcion'=>$this->faker->paragraph(),
            'categoria' =>$this->faker->randomElement(['Bebidas','Legumbres','Dulces','Cereales'])
        ];
    }
}
