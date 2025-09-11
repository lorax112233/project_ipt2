<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + React SPA</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ time() }}">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .navbar {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            font-size: 18px;
        }
        .navbar a {
            text-decoration: none;
            color: #333;
        }
        .navbar a:hover {
            color: #007BFF;
        }
        .content {
            margin-top: 50px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div id="app"></div>
    <script src="{{ asset('js/app.js') }}?v={{ time() }}"></script>
</body>
</html>
