<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/cms-css/form.css">
    <link rel="stylesheet" href="/cms-css/button.css">
    <link rel="stylesheet" href="/cms-css/card.css">
    <link rel="stylesheet" href="/cms-css/simple-list.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #eef0f8;
            font-family: Poppins, Helvetica, sans-serif;
        }

        .notify {
            position: absolute;
            top: 70px;
            right: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
            cursor: pointer;
        }

        .notify.success {
            background-color: #1bc5bd;
            color: white;
        }
    </style>

</head>
<body>

<div class="wrapper min-h-screen md:flex">
    <div class="flex-none w-full md:max-w-xs border-r-2 border-dark text-white" style="background-color: #1e1e2d;">
        @include('admin.parts.sidebar')
    </div>

    <div class="flex-1">
        <div class="content mr-6 ml-6 mt-6">
            @yield('content')
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.notify').forEach(function (elem) {
        elem.addEventListener('click', function () {
            this.remove();
        });
    });

    document.querySelectorAll('.delete-prompt').forEach(function (elem) {
        elem.addEventListener('click', function (e) {
            if (!confirm("Want to delete?")) {
                e.preventDefault();
            }
        });
    });

    setTimeout(function () {
        document.querySelectorAll('.notify').forEach(function (elem) {
            elem.remove();
        });
    }, 3000);
</script>

</body>
</html>
