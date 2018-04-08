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

        <div class="c-landing">
            <div class="c-landing--copy">
                <h1>A History Of Formula 1 In Data</h1>
                <p>
                    Formula 1 has come a long way over the last 60 years, in this project I have set out to analyse how the sport
                    has changed over the decades and provide some insight into why the sport has been so successful. This analysis
                    has been built around data from <a href="https://kaggle.com">Kaggle.com</a> which includes Formula 1 data 
                    from 1950 to 2017.
                </p>
            </div>
            @include('components.scroll')
        </div>

        <div class="c-nav">
            <ul>
                <li><h2>1950's</h2></li>
                <li><h2>1960's</h2></li>
                <li><h2>1970's</h2></li>
                <li><h2>1980's</h2></li>
                <li><h2>1990's</h2></li>
                <li><h2>2000's</h2></li>
                <li><h2>2010's</h2></li>
            </ul>
        </div>


        <div class="c-page">
        </div>
        <div class="c-page">
        </div>
        <div class="c-page">
        </div>








        {{-- <div class="c-container--text">
            <h1>A Short History Of Formula 1 In Data</h1>
            <p>
                Formula 1 has come a long way over the last 60 years, in this project I have set out to analyse how the sport
                has changed over the decades and provide some insight into why the sport has been so successful. This analysis
                has been built around data from <a href="https://kaggle.com">Kaggle.com</a> which includes Formula 1 data 
                from 1950 to 2017.
            </p>
        </div>


        <div class="c-container--light">
            <div class="c-divider c-divider--left c-divider--dark"></div>
            @include('displays.most-popular-circuits')
        </div>
        <div class="c-container--full">
            <div class="c-divider c-divider--right c-divider--light"></div>
            @include('displays.most-successful-nations')
        </div> --}}


        {{-- <div class="container">
            <footer>
                Built by <a href="http://scottharrisondesign.co.uk">Scott Harrison</a> | View on <a href="https://github.com/ScottHarrisonDev/F1-Data-Viz">Github</a>
            </footer>
        </div> --}}
        <script src="/js/libs/jquery.min.js"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
