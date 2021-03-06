@include('components.modalRegistra')

<div class="row shadow m-0 w-100 custom-header-fixed">
    <div class="col col-md-2 col-sm-2 col-2">
        <!-- First Column -->
        <img onclick="document.location.href='{{route('catalogo')}}'" src="{{ asset("/img/logoSito.png") }}" class="show-on-desktop image-fluid h-100 mt-2 ml-2" style="max-height: 130px; cursor: pointer;" />
        <img onclick="document.location.href='{{route('catalogo')}}'" src="{{ asset("/img/logoSitoMobile.png") }}" class="show-on-mobile image-fluid h-100 mt-2 ml-2"  style="max-height: 70px; cursor: pointer;" />
    </div>
    <div class="col col-md-10">
        <section>
            <div class="row">
                <!-- Second Column -->
                <div class="col d-none d-md-block col-md-8 col-sm-12 ml-0 mr-0">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('cerca') }}" method="GET">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-prepend">
                                        <select class="custom-select" style="border-radius: .25rem 0 0 .25rem;"
                                                name="categoria"
                                        >
                                            <option value="*" selected>Tutte le categorie</option>
                                            @foreach( $listaCategorie as $categoria )
                                                <option
                                                        value="{{$categoria->id_categoria}}">{{$categoria->nome_categoria}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="text"
                                           class="form-control"
                                           name="nomeProdotto"
                                    />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Cerca</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pr-0">
                            <div class="w-100">
                                <button data-toggle="collapse" data-target="#navcol-1"
                                        class="navbar navbar-toggler navbar-light navbar-collapse navbar-toggler-right float-right menu-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <nav class="navbar navbar-expand-md float-right float-md-left w-100 shadow-on-mobile rounded" style="padding: 0px; background-color: white;" >
                                    <div class="container-fluid ">
                                        <div class="collapse navbar-collapse" style="margin: .5rem 1rem;" id="navcol-1">

                                            <div class="nav navbar-nav">
                                                <li class="nav-item">
                                                    <div class="row d-sm-block d-md-none mr-0 ml-0 w-100">
                                                        <div class="input-group mt-2 mb-2">
                                                            <input
                                                                type="text" class="form-control"/>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                @foreach($listaCategorie as $categoria)

                                                    <div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdown{{ strtoupper($categoria->nome_categoria) }}" data-toggle="dropdown">
                                                            {{ $categoria->nome_categoria }}
                                                            <span class="caret"></span>
                                                        </button>
                                                        <div class="dropdown-menu" role="menu" aria-labelledby="dropdown{{ strtoupper($categoria->nome_categoria) }}">
                                                            @foreach( $categoria->sotto_categorie->sortBy('nome_sotto_categoria') as $sotto_categoria )
                                                                <a class="dropdown-item"
                                                                   href="{{ route('lista_prodotti', ['id_sotto_categoria' => $sotto_categoria->id_sotto_categoria]) }}"
                                                                >{{ $sotto_categoria->nome_sotto_categoria }}</a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Third column -->

                <div class="col d-none d-md-block mt-2 mr-2" >

                    @auth
                    <div class="float-right mt-1 ml-1">
                        @include('components.loggedInUser')
                    </div>
                    @endauth


                    @guest
                        <div class="float-right mt-1 ml-1">
                            <a href="#panelRegistrati" class="btn btn-primary float-right modal-toggle" onclick='$("#modalLRForm").modal("show")'>
                                Registrati
                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="float-right mt-1 ml-1">
                            <a href="#panelAccedi" class="btn btn-light float-right modal-toggle" onclick='$("#modalLRForm").modal("show")'>
                                Accedi
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                            </a>
                        </div>

                    @endguest


                </div>


            </div>
        </section>
    </div>
    @includeWhen(  request()->route()->getName() == 'catalogo' || request()->route()->getName() == 'lista_sotto_categorie' || request()->route()->getName() == 'lista_prodotti', 'layouts.filtri-bar')
</div>
