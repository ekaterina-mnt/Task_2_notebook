<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class NotebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //getting random phone number
        $randomNumber = '8';
        for ($i=1; $i<10; $i++) {
                $randomNumber .= rand(0, 9);
            };
        
        //getting random birthday
        $fMin = strtotime('1960-01-01 00:00:00');
        $fMax = strtotime('2023-01-01 00:00:00');
    
        // Generate a random number from the start and end dates
        $randomBirthday = date('Y-m-d', mt_rand($fMin, $fMax));
        
        return [
            'fio' => $this->faker->name(),
            'company' => Str::random(10),
            'number' => $randomNumber,
            'email' => $this->faker->email(),
            'birthday' => $randomBirthday,
            'photo' => 'https://source.unsplash.com/random',
        ];
    }
}
