<?php

namespace App\Enum;

class Seat
{
    public static function numbers()
    {
        for ($a = 1; $a <= 10; $a++) {
            $seats[] = 'A' . $a;
        }
        for ($b = 1; $b <= 10; $b++) {
            $seats[] = 'B' . $b;
        }

        return $seats;
    }
}
