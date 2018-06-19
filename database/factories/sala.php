<?php

use Faker\Generator as Faker;

$factory->define(\App\sala::class, function (Faker $faker) {
    return [

'idSala' => idSala,
'NombreSala' => $faker->NombreSala,



    ];
});
