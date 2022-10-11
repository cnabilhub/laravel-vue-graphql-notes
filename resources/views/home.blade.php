<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
</head>

<body class=" bg-base-200 mt-0 w-full h-full min-h-screen">
    <div id="app"></div>
    @vite('resources/js/app.js')
</body>

</html>
