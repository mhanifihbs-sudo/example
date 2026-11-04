<!-- <!doctype html>
<html>
<head>
    <title>Praktikum Laravel Ke-2</title>
</head>
<body>
    <h1>Praktikum Laravel Ke-2</h1>
</body>
</html> -->

<!-- <!doctype html>
<html>
<head>
    <title>Praktikum Laravel Ke-2</title>
</head>
<body>
    <ul>
        @for ($i = 1; $i <= 5; $i++)
            <li>Ini adalah urutan ke-{{ $i }}</li>
        @endfor
    </ul>
</body>
</html> -->

<!doctype html>
<html>
<head>
    <title>Events - Praktikum Laravel Ke-2</title>
</head>
<body>
    <h1>Events</h1>
    <ul>
        @forelse($events as $event)
            <li>{{ $event->location }} - {{ $event->name }}</li>
        @empty
            <li>Belum ada event.</li>
        @endforelse
    </ul>
</body>
</html>
