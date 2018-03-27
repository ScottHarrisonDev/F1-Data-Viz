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
                <li data-img="/img/black/{{ $circuit->ref }}.png" data-ref="{{ $circuit->ref }}">
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