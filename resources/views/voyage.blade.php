<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- fontAwsom -->
    <script src="https://kit.fontawesome.com/ef912ee425.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Styles -->
    
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            padding: 20px;
        }

    </style>
</head>

<body class="antialiased">
    <H1>{{$unVoyage->nomVoyage}}</H1>
    <p><i class="fas fa-calendar-times"></i> {{$unVoyage->dateDebut}} -> {{$unVoyage->duree}}</p>
    <p><i class="fas fa-flag"></i> {{$unVoyage->ville}}</p>
    <p>{{$unVoyage->prix}} $</p>
    <a href="#" class="btn btn btn-success">Reserver</a>
    
</body>

</html>
