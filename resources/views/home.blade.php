<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<h1>{{ config("app.name") }}</h1>

<h2>Reverb Chat Room</h2>
<ul>
</ul>
<form>
    <input name="message" required placeholder="输入...">
</form>
</body>
</html>
