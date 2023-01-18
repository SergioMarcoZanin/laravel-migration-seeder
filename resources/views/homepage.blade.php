<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Treni</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <h1 class="text-center">Treni</h1>
            <div class="row">
                @foreach ($trains as $train)
                    <div class="train">
                        <h5>{{$loop->iteration}}° Treno</h5>
                        <ul>
                            <li>Compagnia: {{$train->company}}</li>
                            <li>Stazione di partenza: {{$train->departure_station}}</li>
                            <li>Stazione di arrivo: {{$train->arrival_station}}</li>
                            <li>Orario di partenza: {{$train->departure_time}}</li>
                            <li>Orario di arrivo: {{$train->arrival_time}}</li>
                            <li>Codice treno: {{$train->train_code}}</li>
                            <li>Numero vagoni: {{$train->wagons}}</li>
                            <li>
                                @if ($train->is_in_time==true)
                                    È in orario
                                @else
                                    È in ritardo
                                @endif
                            </li>
                            <li>
                                Cancellato:
                                @if ($train->is_cancelled==true)
                                    Si
                                @else
                                    No
                                @endif
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>