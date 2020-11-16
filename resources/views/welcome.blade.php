<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- bootstrap -->
    <!-- CSS -->
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
    <H1>Liste des voyages</H1>
    <div class="row">
        @foreach ($lesVoyages as $unVoyage)
        <div class="col-4" style="border: solid 1px silver">
            <div class="row"><div class="col-8"><a href="voyage/{{$unVoyage->id}}"><h2> {{$unVoyage->nomVoyage}} </h2></a></div><div class="col-4"><span class="prix"> {{$unVoyage->prix}} $</span></div></div>
            <div class="row"><div class="col-6"><span class="dateDepart">{{$unVoyage->dateDebut}}</span></div><div class="col-6"><span class="ville">{{$unVoyage->ville}}</span></div></div>
        </div>
        @endforeach
    </div>
    
</body>

</html>
