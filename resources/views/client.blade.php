<?php

    $faker = Faker\Factory::create();

    // for ($i = 0; $i < 5000; $i++) {
    //     $id = $faker -> unique() -> randomNumber;
    //     $email = $faker -> freeEmail();
    //     $date = $faker -> dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format('Y-m-d');
    //     $orderQty = $faker -> numberBetween($min = 0, $max = 10000);

    //     DB::table('clients')->insert ([
    //         'id' => $id,
    //         'email' => $email,
    //         'date' => $date,
    //         'orderQty' => $orderQty
    //     ]);
    // }

?>

<h1>{{ $clients }}</h1>