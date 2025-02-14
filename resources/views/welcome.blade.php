<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            }
            .container {
                text-align: center;
                padding: 2rem;
                background: white;
                border-radius: 1rem;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #1a202c;
                margin-bottom: 1rem;
            }
            p {
                color: #4a5568;
                margin-bottom: 2rem;
            }
            .version {
                color: #718096;
                font-size: 0.875rem;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <h1>Welcome to Laravel</h1>
            <p>Your new application is ready to go!</p>
            <div class="version">Laravel v{{ Illuminate\Foundation\Application::VERSION }}</div>
        </div>
    </body>
</html>
