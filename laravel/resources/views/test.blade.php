<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>
$date=\Carbon\Carbon::now()->endOfMonth();
$date2=$date->month;
    {{ $date2 }}
</body>