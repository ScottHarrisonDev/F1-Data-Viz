<div class="c-container--visual-1">
    <h2>Most Successful Nations</h2>
    <p>
        Britain is by far the most successful nation of Formula 1 drivers, 
        boasting over 200 more podiums than Germany who came in second best, 
        followed by France.
    </p>
    <div class="nt-wrapper">
        @foreach ($components['nations']['mostSuccessful'] as $nation)
            <div class="nt-wrap">
                <span class="nt">{{ $nation->nationality }}</span>
                <span class="pd">{{ $nation->podiums }}</span>
                <img src="/img/flags/nationality/{{ strtolower($nation->nationality) }}.svg" class="nt-img">
            </div>
        @endforeach
    </div>
</div>