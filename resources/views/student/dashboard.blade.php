<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student | Dashboard</title>
</head>
<body>

<div class="" style="text-align: end">
    <a href="{{ url('/logout') }}">Logout</a>
</div>


<h1>Welcome! {{ auth()->user()->first_name }}</h1>
</body>
</html>