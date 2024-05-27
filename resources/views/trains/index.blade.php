<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel base @yield('title','template')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <div class="container mt-5">
        <h1>Treni in partenza oggi</h1>
        <div class="row">
            @foreach($trains as $train)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }}</h5>
                            <p class="card-text">
                                Stazione di partenza: {{ $train->stazione_di_partenza }}<br>
                                Stazione di arrivo: {{ $train->stazione_di_arrivo }}<br>
                                Orario di partenza: {{ $train->orario_di_partenza }}<br>
                                Orario di arrivo: {{ $train->orario_di_arrivo }}<br>
                                Codice treno: {{ $train->codice_treno }}<br>
                                Numero carrozze: {{ $train->numero_carrozze }}<br>
                                In orario: {{ $train->in_orario ? 'Sì' : 'No' }}<br>
                                Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>