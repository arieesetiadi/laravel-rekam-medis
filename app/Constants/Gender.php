<?php

namespace App\Constants;

class Gender
{
    public const LAKI_LAKI = 'Laki-laki';
    public const PEREMPUAN = 'Perempuan';

    public static function values(): array
    {
        return [self::LAKI_LAKI, self::PEREMPUAN];
    }
}
