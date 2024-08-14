<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Farm-Flow | ফার্মফ্লো</title>
    <link rel="shortcut icon" href="{{ asset('img/farm_flow_logo2.png') }}" type="image/x-icon">
</head>
<body>
    <div id="farm-admin"></div>
    @vite('resources/admin-resources/main.js')
</body>
</html>