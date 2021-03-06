<div class="modal fade" id="modalDeleteUserStaff" role="dialog" aria-labelledby="myModalDeleteUserStaff" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">
            <form method="POST" action="">
                <div class="col-md-12" id="message">
                    <div style="text-align: center; font-size: 30px;">
                        <b>Elimina Utente Staff</b>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cognome</th>
                            <th scope="col">Username</th>
                            <th scope="col">Elmina</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($utente as $utenti)
                        <tr>
                            <th scope="row">{{$utenti->id}}</th>
                            <td>{{$utenti->first_name}}</td>
                            <td>{{$utenti->last_name}}</td>
                            <td>{{$utenti->username}}</td>
                            <td><input id="{{$utenti->id}}" type="checkbox" />     <i class="fa fa-trash"></i></td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block"  onclick="return confirm('Sei Sicuro di voler procedere?')" type="submit">Elimina Utente <i class="fa fa-chevron-circle-right"></i></button>
                    </div>
                </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>

<!--/.Content-->


