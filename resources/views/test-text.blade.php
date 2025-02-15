<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Text Component Test</title>
</head>
<body>
    <h1>Text Component Test</h1>
    
    <div>
        <x-atoms.text content="{{ config('text.welcome.title') }}" />
    </div>
    
    <div>
        <x-atoms.text content="{{ config('text.welcome.message') }}" />
    </div>
</body>
</html>
