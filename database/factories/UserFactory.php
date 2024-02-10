<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $login = $this->faker->unique()->word;

        $abecedario = range('A', 'Z');
        $letraAleatoria = $this->faker->randomElement($abecedario);

        return [
            'login' => $login,
            'password' => bcrypt($login),
            'dni' => $this->faker->unique()->ean8 . $letraAleatoria,
            'rol' => 'cliente'
        ];
    }
}
