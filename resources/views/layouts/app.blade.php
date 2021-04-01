<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Social Net</title>
</head>

<body class="bg-blue-100">

    <nav class="flex justify-between space-x-4 bg-white h-16 rounded-b-lg mb-6">
        <ul class="flex items-center">
            <li class="inline-block"><a href="" class="p-3">Home</a></li>
            <li class="inline-block"><a href="" class="p-3">Dashboard</a></li>
            <li class="inline-block"><a href="" class="p-3">Posts</a></li>
        </ul>

        <h1 class="flex items-center text-4xl text-blue-500">Social Net</h1>

        <ul class="flex items-center">
            <li class="inline-block"><a href="" class="p-3">Login</a></li>
            <li class="inline-block"><a href="" class="p-3">Register</a></li>
            <li class="inline-block"><a href="" class="p-3">Logout</a></li>
        </ul>

    </nav>

    @yield('content')
</body>

</html>