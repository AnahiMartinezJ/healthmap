<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LGVH - Home</title>
    </head>
    <body>
        HOLA {{Auth::user()->name}}
    </body>
</html>