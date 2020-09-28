<?php

namespace Database\Factories;

use App\Models\Empregador;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpregadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empregador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->cpf,
            'email' => $this->faker->unique()->safeEmail,
            'senha' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Empregador $empregador){
            //
        })->afterCreating(function (Empregador $empregador){
            //
        });
    }
}
