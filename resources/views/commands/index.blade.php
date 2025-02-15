<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artisan Commands</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 2rem;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .command-list {
            background: white;
            border-radius: 0.5rem;
            padding: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .command-item {
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }
        .command-item:last-child {
            border-bottom: none;
        }
        .command-name {
            font-weight: 600;
            color: #2d3748;
        }
        .command-description {
            color: #4a5568;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Artisan Commands</h1>
        <div class="command-list">
            @foreach($commands as $command)
                <div class="command-item">
                    <div class="command-name">{{ $command['name'] }}</div>
                    <div class="command-description">{{ $command['description'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
