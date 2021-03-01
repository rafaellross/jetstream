<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'UIDGuid' => $this->faker->uuid,
            'LastName' => $this->faker->firstName,
            'FirstName' => $this->faker->name,
            'DisplayID' => $this->faker->bankAccountNumber,
            'IsActive' => $this->faker->boolean,
            'Street' => $this->faker->streetAddress,
            'City' => $this->faker->city,
            'State' => $this->faker->state,
            'PostCode' => $this->faker->postcode,
            'Country' => $this->faker->country,
            'Phone1' => $this->faker->phoneNumber,
            'Phone2' => $this->faker->phoneNumber,
            'Phone3' => $this->faker->phoneNumber,
            'Fax' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique()->safeEmail,
            'ContactName' => $this->faker->lastName,
            'LastModified' => $this->faker->dateTime,

        ];
    }
}
