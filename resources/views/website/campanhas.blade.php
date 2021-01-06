@extends('layouts.site.app', ['activePage' => '', 'title' => '| Cofrinhos', 'navName' => '', 'activeButton' => ''])

@section('content')
    <!-- header end-->
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{ asset('img') }}/photos/pig1_3.jpeg" media="(min-width: 992px)">
                <img class="img--bg" src="{{ asset('img') }}/photos/pig1_3.jpeg" alt="img">
            </picture>
            <div class="promo-primary__description"> <span style="color: #efc940;">Cofrinhos</span></div>
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

            @if (!$campanhas->isEmpty())
  <div class="container">
                <div class="row offset-margin">

                    <div class="col-md-8" id="myBtnContainer">
                        {{-- <i class="fas fa-search"></i> --}}
                        <div class="btn-group " role="group">
                            <div class="d-flex">
                                <input list="browsers" id="valorLista" placeholder="Filtre por categoria"/>
                                <datalist id="browsers">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->name }}" >  </option>
                                    @endforeach

                                </datalist>
                                <script>
                                    var e = document.getElementById("valorLista");
                                    console.log(e.value);
                                </script>

                                <button class="btn btn-link" onclick="filterSelection(e.value)">
                                    <i class="fas fa-filter"></i>
                                </button>
                                <button class="btn btn-link" onclick="ClearFields()"
                                style="text-decoration: none; ">
                                <i class="fas fa-times-circle"></i>
                                </button>
                            </div>
                        </div>


                        <div class="col-md-2">
                        <form action="{{ route('website.search') }}" method="POST">
                            @csrf
                            {{-- botão procura cofrinho --}}
                            <div class="btn-group">
                                <input type="text" name="q" class="" placeholder="Procure por cofrinho"
                                    required oninvalid="this.setCustomValidity('Por favor, preencha esse campo.')"
                                    oninput="this.setCustomValidity('')">
                                <button type="submit" class="btn btn-secondary">Pesquisar</button>
                            </div>
                        </form>
                            {{-- botões de categorias --}}
                        </div>

                        <div class="col-12 mt-4">
                            <div class="row">
                                @foreach ($campanhas as $campanha)
                                    @component('website.components.cardCampanha', [
                                        'campanha' => $campanha,
                                        'class' => 'column'
                                    ])@endcomponent
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
            @else
                <div class="d-flex flex-column w-100 justify-content-center align-items-center" style="height:800px;">
                    {{-- class="d-flex flex-column w-100 h-100
                    justify-content-center align-items-center" --}}
                    <i class="far fa-sad-cry mr-4" style="width:150px; height: 150px; color: #643348;"></i>
                    <p style="font-size: 2em;">
                        Infelizmente não temos nenhum cofrinho no momento!!!
                    </p>
                </div>
            @endif
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
        <!-- bottom bg end-->
        <script type="text/javascript">
            function ClearFields() {

                document.getElementById("valorLista").value = "";
                filterSelection("all")
            }
            filterSelection("all") // Execute the function and show all columns
            function filterSelection(c) {

                var x, i;
                x = document.getElementsByClassName("column");
                if (c == "all"){
                    c = "";
                    document.getElementById("valorLista").innerHTML = "";

                }
                // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
                // console.log(c);
                for (i = 0; i < x.length; i++) {
                    // console.log(x[i]);
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

            // // Add active class to the current button (highlight it)
            // var btnContainer = document.getElementById("myBtnContainer");
            // var btns = btnContainer.getElementsByClassName("btn");
            // for (var i = 0; i < btns.length; i++) {
            //     btns[i].addEventListener("click", function() {
            //         var current = document.getElementsByClassName("active");
            //         current[0].className = current[0].className.replace(" active", "");
            //         this.className += " active";
            //     });
            // }

        </script>
    </main>


@endsection

@section('scripts')


@endsection
