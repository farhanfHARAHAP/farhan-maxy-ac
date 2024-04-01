<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Merdeka Exports | @yield('page_title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <style>
        .nav-top {background-color: green}
        .nav-top .title {color: white}
        .nav-down {background-color: yellow; display: flex}
        .nav-down .menu {color: green;}
        .foot {background-color: black}
        .foot p {color: white; text-align: center}
    </style>
    <body>
        {{-- Navbar --}}
        <div>
            <div class="container-fluid pt-3 ps-3 pe-3 pb-1 nav-top">
                <h1 class="title"><b>Merdeka Exports</b></h1>
            </div>
            {{-- Menus --}}
            <div class="container-fluid pt-1 ps-3 pe-1 pb-1 nav-down">
                <a href="/admin/home"><h3 class="menu me-3">Home</h3></a>
                <a href="/admin/purchase"><h3 class="menu me-3">Purchase</h3></a>
                <a href="/admin/sale"><h3 class="menu me-3">Sale</h3></a>
                <a href="/logout"><h3 class="menu me-3">Logout</h3></a>
            </div>
        </div>
        {{-- Content --}}
        <div class="container-fluid ps-3 pt-5 pe-3 pb-3" style="height: 100%">
            @yield('content')
        </div>
        {{-- Footer --}}
        <br><br><br>
        <div class="foot container-fluid ps-3 pt-3 pb-4 pe-3">
            <p>Merdeka | Free Copyright</p>
        </div>
    </body>
</html>
