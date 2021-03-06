<ul class="nav navbar-nav navbar-right">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Benvenuto, {{$user->full_name}}
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @if($user->auth_level===2)
            <form id="modifica_form_profilo" action="{{route('modificaprofilo')}}">
                <button type="submit" class="dropdown-item" style="width: 100%; padding: 3px 20px; text-align: left;">Modifica Profilo</button>
            </form>
            @endif
            @if($user->auth_level === 3)
            <form id="area_personale" action="{{ route('staff.homepage') }}"  >
                <button type="submit" class="dropdown-item" style="width: 100%; padding: 3px 20px; text-align: left;">Area Personale</button>
            </form>
            @endif
            @if($user->auth_level === 4)
                <form id="area_personale" action="{{ route('admin.homepage') }}"  >
                    <button type="submit" class="dropdown-item" style="width: 100%; padding: 3px 20px; text-align: left;">Area Personale</button>
                </form>
            @endif
            <div class="dropdown-divider"></div>
            <form id="logout-form-menu" action="{{ route('logout') }}" method="POST">
                <button type="submit" class="btn btn-link btn-logout" style="width: 100%; padding: 3px 20px; text-align: left;">Logout</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</ul>
