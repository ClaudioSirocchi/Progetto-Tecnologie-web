@extends('layouts.app')

@section('title', 'Utenti')

@section('content')
@include('components.modalInsertStaffUser')
    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin_controller') }}">AdminPage</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gestione Staff</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-body">

                        <div class="row mb-3">
                            <div class="col">
                                <button class="btn btn-primary" onclick='$("#modalInsertStaffUser").modal("show")'>
                                    <i class="fa fa-plus-circle icon"></i>
                                    Inserisci Utente Staff
                                </button>
                            </div>
                        </div>


                        <form method="POST" action="">
                            <div class="col-md-12" id="message">
                                <div style="text-align: left; font-size: 35px;">
                                    <b>Elimina o Modifica Utente Staff</b>
                                </div>
                                <br>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Cognome</th>
                                        <th scope="col">Azioni</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <form action="">
                                    @foreach($utente as $utenti)
                                        <tr>
                                            <th scope="row">{{$utenti->id}}</th>
                                            <td>{{$utenti->first_name}}</td>
                                            <td>{{$utenti->last_name}}</td>
                                            <td>
                                                <button id="{{$utenti->id}}"   class="btn btn-outline-danger" type="submit">Elimina Utente  <i class="fa fa-trash"></i></button>
                                                <button id="{{$utenti->id}}"   class="btn btn-outline-info enable-edit" type="submit">Abilita Modifica Utente   <i class="fa fa-user" aria-hidden="true"></i></button>
                                                <button class="btn btn-outline-danger disable-edit mt-2">Annulla</button>
                                                <input type="submit" class="btn btn-primary modifica-submit-button no-pointer-events float-right mt-2" disabled value="Modifica Utente">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </form>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </form>



                    </div>
            </div>
        </div>
    </div>


@endsection

