<!doctype html>
<html lang="en">
    <head>
        <title>Citizen Database</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    </head>

    <style>
        .top-bar{
            background: rgb(72,30,20);
            background: linear-gradient(180deg, rgba(72,30,20,1) 0%, rgba(12,12,12,1) 100%);
        }

        .bottom-bar{
            background: rgb(72,30,20);
            background: linear-gradient(0deg, rgba(72,30,20,1) 0%, rgba(12,12,12,1) 100%);
        }

        body{
            background-color: #0C0C0C;
        }

        h1, h2, h3 {
            color: #F2613F;
            font-family: monospace;
        }

        h4, h5, p, label, div{
            color: #9B3922;
            font-family: monospace;
        }

        hr{
            border-color: #9B3922;
        }
    </style>

    <body>
        {{-- Scripts --}}
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

        {{-- Body --}}
        <header>
            <div class="container-fluid d-flex pt-3 ps-3 pe-3 pb-2 top-bar fixed-top">
                <div class="flex-grow-1 pe-3">
                    <h2><b>Citizen Database</b></h2>
                    <p>Night City Police Dept.</p>
                </div>
                <p style="text-align: right"><img src="{{asset('img/harahap-netrun.png')}}" style="max-width: 100px"></p>
            </div>
        </header>
        <main>
            <br><br><br><br><br>
            <div class="container-fluid pt-5 ps-3 pe-3 pb-3">
                @yield('content')
            </div>
            <br><br><br><br><br><br>
        </main>
        <footer>
            <div class="container-fluid pt-3 ps-3 pe-3 pb-2 bottom-bar fixed-bottom">
                <p style="text-align: right">Harahap Netrun | Night City Police Departement</p>
            </div>
        </footer>
    </body>
</html>
