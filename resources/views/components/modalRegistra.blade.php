<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg"  role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panelAccedi" role="tab">
                            Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panelRegistrati" role="tab">
                            Registrati</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 1-->
                    <div class="tab-pane fade in show active" id="panelAccedi" role="tabpanel">

                        <!--Body Login-->
                        <div class="modal-body mb-1">
                            <form class="login" action="{{ route('login') }}" method="POST">
                                <div style="text-align: center;"><img src="{{ asset("/img/logoSitoMobile.png") }}" style="max-height: 130px" /></div><br>
                                <div class="form-row form-group">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Username</label></div>
                                    <div class="col"><input type="text" name="username" class="form-control" /></div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Password</label></div>
                                    <div class="col"><input type="password" name="password" class="form-control" /></div>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-primary">Accedi</button>
                                </div>
                                @csrf
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 1-->

                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panelRegistrati" role="tabpanel">

                        <!--Body Register-->
                        <div class="modal-body mb-2">
                            <div class="row register-form">
                                <div class="col-md-10 offset-md-1">
                                    <form class="register" action="{{route('registrazione')}}" method="post"><div style="text-align: center;"><img src="{{ asset("/img/logoSitoMobile.png") }}"  style="max-height: 130px" /></div><br>
                                        @csrf
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                                            <div class="col"><input type="text" name="first_name" class="form-control" /></div>
                                        </div>
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Cognome</label></div>
                                            <div class="col"><input type="text" name="last_name" class="form-control" /></div>
                                        </div>
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Luogo di Residenza</label></div>
                                            <div class="col"><input type="text"  name="location" class="form-control" /></div>
                                        </div>
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Data di Nascita</label></div>
                                            <div class="col"><input  name="birth_date" class="form-control" type="date" /></div>
                                        </div>
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Occupazione</label></div>
                                            <div class="col"><select name="occupation" class="custom-select">
                                                @for($i=0; $i < count($datiOccupazione); $i++)
                                                <option value="{{$datiOccupazione[$i]->occupazione}}"
                                                @if($i === 0)
                                                    selected
                                                @endif
                                                >{{$datiOccupazione[$i]->occupazione}}</option>
                                                @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Username</label></div>
                                            <div class="col"><input type="text" name="username" class="form-control" /></div>
                                        </div>
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Email</label></div>
                                            <div class="col"><input type="email" name="email" class="form-control" /></div>
                                        </div>
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Password</label></div>
                                            <div class="col"><input type="password"  name="password" class="form-control" /></div>
                                        </div>
                                        <div class="form-row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Ripeti Password</label></div>
                                            <div class="col"><input type="password" name="password_confirmation" class="form-control" /></div>
                                        </div>
                                        <div class="text-center mt-2">
                                            <button class="btn btn-info">Registrati</button>
                                        </div></form>
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
