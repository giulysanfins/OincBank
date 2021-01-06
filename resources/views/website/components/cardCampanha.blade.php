{{-- @dd($campanha->categoria) --}}
<div class="col-12 col-md-6 col-lg-4 {{ $campanha->categoria->name }}">
    <div class="causes-item causes-item--primary">
        <div class="causes-item__body">
            <div class="causes-item__top">
                <h6 class="causes-item__title">
                    <a href="{{ route('website.campanhas.detalhes', $campanha->id) }}">{{ $campanha->titulo }}</a>
                </h6>

                <div class="d-flex align-items-center">
                    @if ($campanha->photo)
                        <img class="mr-4 rounded-circle shadow" style="width: 60px; height:60px;"
                            src="{{ asset('/storage/profile/' . $campanha->photo->path) }}" alt="">
                    @else
                        <img class="mr-4 rounded-circle shadow" style="width: 60px; height:60px;"
                            src="{{ asset('pig-pork.jpg') }}" alt="">
                    @endif
                    <strong>{{ $campanha->user->name }}</strong>
                </div>
                <hr />
                <p>
                    @if (strlen($campanha->descricao) > 35)
                        @php
                        $string = Str::substr($campanha->descricao, 0, 35)
                        @endphp
                        {{ $string . '...' }}
                    @else
                        {{ $campanha->descricao }}
                    @endif
                </p>
            </div>
            <div class="causes-item__img">
                <div class="causes-item__badge" style="background-color: #49C2DF">
                    {{ $campanha->categoria->name }}
                </div>
                <a href="{{ route('website.campanhas.detalhes', $campanha->id) }}">
                    <img class="img--bg" src="{{ asset('storage') }}/images/{{ $campanha->profile_image }}"
                        alt="foto_{{ $campanha->titulo }}">
                </a>
            </div>

            <div class="causes-item__lower">
                <div class="progress-bar">

                    <div class="progress-bar__inner"
                        style="width: {{ $campanha->perc >= 100 ? '100' : $campanha->perc }}%;">
                        <div class="progress-bar__value">
                            @if ($campanha->perc == 0)
                                {{ $campanha->perc }}%
                            @else
                                {{ number_format($campanha->perc, 2, '.', '') }}%
                            @endif
                        </div>

                    </div>
                </div>
                <div class="causes-item__details-holder">
                    <div class="causes-item__details-item">
                        <span>Conquistado:</span>
                        <br />
                        <span>R$ {{ number_format($campanha->vTotal, 2, ',', '.') }}</span>
                    </div>

                    <div class="causes-item__details-item text-right">
                        <span>Meta: </span>
                        <br />
                        <span>R$
                            {{ number_format($campanha->valor, 2, ',', '.') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <a class="button causes-item__button button--primary btn-block"
            href="{{ route('website.campanhas.detalhes', $campanha->id) }}">
            + Doar
        </a>
    </div>

</div>
