<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SAFQA' }}</title>
    <meta name="description" content="{{ $description ?? 'منصة العمل الحر العربية' }}">
    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>

    <x-header />

    {{ $slot }}

</body>
</html>