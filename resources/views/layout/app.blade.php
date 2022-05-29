<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jobs</title>
</head>
<body>
    <div class="m-10 max-w-6xl mx-auto">
        @include('inc.nav')
        <div class="my-10">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>
</body>
</html>