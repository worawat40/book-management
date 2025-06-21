<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        .group--logo {
            position: relative;
        }

        .group--logo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: white;
            border-radius: 65px;
            transition: all 0.3s ease-in-out;
            height: 100%;
            width: 0;
            opacity: 0;
        }

        .group--logo:hover::before {
            width: 100%;
            opacity: 1;
        }

        .logo-image {
            position: absolute;
            top: 50%;
            left: 0;
            width: 40px;
            height: 40px;
            transform: translateY(-50%);
            transition: opacity 0.3s ease-in-out;
        }

        .logo-white {
            opacity: 1;
        }

        .group--logo:hover .logo-white {
            opacity: 0;
        }

        .logo-black {
            opacity: 0;
        }

        .group--logo:hover .logo-black {
            opacity: 1;
        }

        #toggleButton.active {
            background-color: rgba(0, 0, 0, 0.06);
        }
    </style>
</head>

<body id="app">
</body>

</html>
