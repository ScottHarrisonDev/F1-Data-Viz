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


        <div class="c-container--text">
            <h1>A Short History Of Formula 1 In Data</h1>
            <p>
                Formula 1 has come a long way over the last 60 years, in this project I have set out to analyse how the sport
                has changed over the decades and provide some insight into why the sport has been so successful. This analysis
                has been built around data from <a href="https://kaggle.com">Kaggle.com</a> which includes Formula 1 data 
                from 1950 to 2017.
            </p>
        </div>


        <div class="c-container--visual-2">
            <div class="d-mpc--data">
                <h2>Most Popular Circuits</h2>
                <p>
                    Monza is the most popular circuit for Formula 1 races, 
                    the street circuit Monaco coming in second and home of 
                    the British GP, Silverstone coming in third.
                </p>
                <ul>
                    <li><span>Circuit</span><span></span><span>Races</span></li>
                    @foreach ($components['circuits']['mostPopular'] as $circuit)
                        <li data-img="/img/white/{{ $circuit->ref }}.png" data-ref="{{ $circuit->ref }}">
                            <div class="d-mpc--highlight"></div>
                            <div class="d-mpc--flag">
                                <img src="/img/flags/{{ strtolower($circuit->country) }}.svg">
                            </div>
                            <span>{{ $circuit->name }}</span>
                            <span>{{ $circuit->races }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="d-mpc--viz">
                @foreach ($components['circuits']['mostPopular'] as $circuit)
                    @if ( ! empty($circuit->details))
                        <div class="d-mpc--details hidden" data-ref="{{ $circuit->ref }}">
                            @foreach ($circuit->details as $detail)
                                <div><strong>{{ ucfirst($detail->key) }}:</strong> {{ ucfirst($detail->value) }}</div>
                            @endforeach
                        </div>
                    @endif
                @endforeach
                <img src="">
            </div>
        </div>


        {{-- <div class="container">
            <footer>
                Built by <a href="http://scottharrisondesign.co.uk">Scott Harrison</a> | View on <a href="https://github.com/ScottHarrisonDev/F1-Data-Viz">Github</a>
            </footer>
        </div> --}}
        <script src="/js/libs/jquery.min.js"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
