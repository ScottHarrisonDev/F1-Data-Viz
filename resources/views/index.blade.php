<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <title>Formula 1 Data Visualization Project</title>
    </head>
    <body>
        <div class="container">
            <h1>Formula 1 Data Visualization Project</h1>
            <p>
                Formula 1 has come a long way over the last 60 years, in this project I have set out to analyse how the sport
                has changed over the decades and provide some insight into why the sport has been so successful. This analysis
                has been built around data from <a href="https://kaggle.com">Kaggle.com</a> which includes Formula 1 data 
                from 1950 to 2017.
            </p>
        </div>

        <div class="display-container">
            <h2>Most Popular Circuits</h2>
            <ul>
                @foreach ($components['circuits']['mostPopular'] as $circuit)
                    <li><img src="/img/white/{{ $circuit->ref }}.png"> {{ $circuit->name }} - {{ $circuit->races }}</li>
                @endforeach
            </ul>
        </div>

        <div class="container">
            <footer>
                Built by <a href="http://scottharrisondesign.co.uk">Scott Harrison</a> | View on <a href="https://github.com/ScottHarrisonDev/F1-Data-Viz">Github</a>
            </footer>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
