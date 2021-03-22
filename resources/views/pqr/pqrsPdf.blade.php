<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista PQRs</title>
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 3cm 2cm 2cm;
            font-family: 'Nunito', sans-serif;
        }
        .col{
            margin:3px;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <p><strong>Extreme Tecnologies</strong></p>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>Lista PQRs</strong></h5>
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col ">ID</th>
                        <th scope="col">PQR</th>
                        <th scope="col">Asunto Pqr</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Creacion</th>
                        <th scope="col">Vencimiento</th>
                    </tr>
                </thead>
               <tbody>
               @foreach ($pqr as $pqr)
                    <tr>
                        <th scope="row">{{ $pqr->id }}</th>
                        <td>{{ $pqr->PQR }}</td>
                        <td>{{ $pqr->Asunto_PQR }}</td>
                        <td>{{ $pqr->Usuario }}</td>
                        <td>{{ $pqr->Estado }}</td>
                        <td>{{ $pqr->created_at }}</td>
                        <td>{{ $pqr->expires_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p><strong>Extreme Tecnologies</strong></p>
    </footer>
</body>
</html>