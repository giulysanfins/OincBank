@extends('layouts.site.app', ['activePage' => '', 'title' => '| Cofrinhos', 'navName' => '', 'activeButton' => ''])

@section('content')
    <!-- header end-->
<main class="main">
    <section class="promo-primary">
        <picture>
            <source srcset="{{ asset('img') }}/photos/pig1_3.jpeg" media="(min-width: 992px)">
            <img class="img--bg" src="{{ asset('img') }}/photos/pig1_3.jpeg" alt="img">
        </picture>
        <div class="promo-primary__description" > <span style="color: #efc940;">Cofrinhos</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item">
                            <span class="promo-primary__pre-title"></span>
                            <h1 class="promo-primary__title"><span>Cofrinhos</span> <span></span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- causes inner start-->
    <section class="section causes-inner">
        <div class="container">
            <div class="row offset-margin">

                <div class="col-md-8" id="myBtnContainer">
                    <label for="text">Filtrar</label>
                    <div class="btn-group" role="group" >
                        <button class="btn btn-link active" onclick="filterSelection('all')" style="text-decoration: none; color: black;"> Todos</button>
                        @foreach ($categorias as $categoria)
                            <button class="btn btn-link" onclick="filterSelection('{{ $categoria->name }}')" >
                                {{ $categoria->name }}
                            </button>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-2">
                    <form action="{{ route('website.search') }}" method="POST">
                        @csrf
                        {{-- botão procura cofrinho --}}
                        {{-- <label for="text">Procure por cofrinho</label> --}}
                        <div class="input-group-prepend">
                            <input type="search" name="q" class="form-control-lg" placeholder="Procure por cofrinho" required>
                            <button type="submit" class="btn btn-secondary" >Pesquisar</button>
                        </div>
                    </form>
                    {{-- botões de categorias --}}
                </div>

                <div class="col-12 mt-4">
                    <div class="row">
                    @foreach ($campanhas as $campanha)
                    @php
                        $payments = \App\Yahp\Models\Payment::where('campanha_id',$campanha->id)->where('tipo',1);
                        $vTotal = 0;
                        foreach ($payments->get() as $key => $pag) {
                            $vTotal = $vTotal+$pag->valor;
                        }
                        $perc = (($vTotal*100)/$campanha->valor);
                    @endphp
                        @if ($payments->count() >= $minpay)
                            <div class="col-12 col-md-6 col-lg-4 column {{ $campanha->categoria->name }}">
                                <div class="causes-item causes-item--primary">
                                    <div class="causes-item__body">
                                        <div class="causes-item__top">
                                            <h6 class="causes-item__title">
                                                <a href="{{ route('website.campanhas.detalhes', $campanha->id) }}">{{ $campanha->titulo }}</a>
                                            </h6>
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
                                                <img class="img--bg"
                                                    src="{{ asset('storage') }}/images/{{ $campanha->profile_image }}"
                                                    alt="foto_{{ $campanha->titulo }}">
                                            </a>
                                        </div>

                                        <div class="causes-item__lower">
                                            <div class="progress-bar">

                                                <div class="progress-bar__inner" style="width: {{($perc >= 100)?'100':$perc}}%;">
                                                    <div class="progress-bar__value" ">
                                                       @if($perc == 0)
                                                       {{$perc}}%
                                                       @else
                                                       {{number_format($perc, 2, '.', "")}}%
                                                       @endif
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="causes-item__details-holder">
                                                <div class="causes-item__details-item">
                                                    <span>Conquistado:</span>
                                                    <br />
                                                    <span>R$  {{number_format($vTotal,2,",",".")}}</span>
                                                </div>

                                                <div class="causes-item__details-item text-right">
                                                    <span>Meta: </span>
                                                    <br />
                                                    <span>R$ {{number_format($campanha->valor,2,",",".")}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button causes-item__button button--primary btn-block" href="{{ route('website.campanhas.detalhes', $campanha->id) }}">
                                        + Doar
                                    </a>
                                </div>

                            </div>
                        @endif

                    @endforeach
                    </div>
                </div>
                {{ $campanhas->onEachSide(1)->links() }}
{{-- <div class="col-12">

    teste
    {{ $campanhas->render() }}
</div> --}}

            </div>
        </div>
    </section>

    <!-- bottom bg start-->
    <section class="bottom-background background--brown">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-background__img"><img src="{{ asset('helpo-theme') }}/img/bottom-bg.png"
                            alt="img"></div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

@section('scripts')

    <!-- bottom bg end-->
    <script>
        filterSelection("all") // Execute the function and show all columns
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

    </script>

@endsection
