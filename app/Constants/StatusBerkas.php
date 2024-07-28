<?php

namespace App\Constants;

class StatusBerkas
{
    public const SEDANG_DICARI = 'Sedang Dicari';
    public const TERSEDIA = 'Tersedia';

    public static function values(): array
    {
        return [self::SEDANG_DICARI, self::TERSEDIA];
    }
}
