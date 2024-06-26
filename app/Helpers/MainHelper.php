<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

const DATE_FORMAT = 'l, j F Y';
const TIME_FORMAT = 'h:i A';
const DATE_TIME_FORMAT = DATE_FORMAT . ' ' . TIME_FORMAT;

if (!function_exists('human_date')) {
    function human_date(string $datetime, string $locale = null): string
    {
        $carbon = Carbon::make($datetime);
        $carbon->setLocale($locale);
        $carbon->settings(['formatFunction' => 'translatedFormat']);
        $date = $carbon->format(DATE_FORMAT);

        return $date;
    }
}

if (!function_exists('human_time')) {
    function human_time(string $datetime, string $locale = null): string
    {
        $carbon = Carbon::make($datetime);
        $carbon->setLocale($locale);
        $carbon->settings(['formatFunction' => 'translatedFormat']);
        $time = $carbon->format(TIME_FORMAT);

        return $time;
    }
}

if (!function_exists('human_datetime')) {
    function human_datetime(string $datetime, string $locale = null): string
    {
        $carbon = Carbon::make($datetime);
        $carbon->setLocale($locale);
        $carbon->settings(['formatFunction' => 'translatedFormat']);
        $datetime = $carbon->format(DATE_TIME_FORMAT);

        return $datetime;
    }
}

if (!function_exists('human_datetime_diff')) {
    function human_datetime_diff(string $datetime, string $locale = null): string
    {
        $carbon = Carbon::make($datetime);
        $carbon->setLocale($locale);
        $diff = $carbon->diffForHumans();

        return $diff;
    }
}

if (!function_exists('is_email')) {
    function is_email(string $string): bool
    {
        $pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
        $result = preg_match($pattern, $string);

        return $result;
    }
}

if (!function_exists('is_phone')) {
    function is_phone(string $string): bool
    {
        $pattern = '/^\+?[1-9]\d{1,14}$/';
        $result = preg_match($pattern, $string);

        return $result;
    }
}

if (!function_exists('normalize_phone')) {
    function normalize_phone(string $phone): string
    {
        $phone = preg_replace('/\D/', '', $phone);

        if (substr($phone, 0, 1) === '0') {
            $phone = '+62' . substr($phone, 1);
        }

        return $phone ?: null;
    }
}

if (!function_exists('singularize')) {
    function singularize(string $plural): string
    {
        return Str::of($plural)->singular();
    }
}

if (!function_exists('pluralize')) {
    function pluralize(string $singular): string
    {
        return Str::of($singular)->plural();
    }
}

if (!function_exists('swal')) {
    function swal(string $icon, string $title, string $text, string $button = 'OK')
    {
        Session::flash('swal', [
            'icon' => $icon,
            'title' => $title,
            'text' => $text,
            'button' => $button,
        ]);
    }
}
