<style type="text/css">
body{
    background-color: #FAECD1;
}
.navbar-brand{
    font-family: backslash;
    font-size: 30px;
    padding-top: 0;
    margin-top: 0;
    color: #FAECD1!important;
}

.nav-link{
    color: #FAECD1!important;
}


.navbar{
    background-color: #3A727F!important;
    color: #FAECD1;
}

.btn-login{
    background-color: #FAECD1;
    color: #3A727F; 
}

.btn-blue {
    background-color:  #3A727F;
    width: 150px;
    color: #fff;
    border-radius: 5px;
    float: right;
    margin-top: 15px;
    margin-bottom: 40px;
}

.btn-red {
    background-color:  #ba454f;
    width: 150px;
    color: #fff;
    border-radius: 5px;
    float: right;
    margin-top: 15px;
    margin-bottom: 40px;
    margin-right: 20px;
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer;
}

}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #3A727F!important;}">
        <a class="navbar-brand" href="{{url('/')}}" >BR</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pengajuan')}}">Calon</a>
        </li>
      </ul>
      <div class="pdr-50" >
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-light" style="margin-right: 30px; border-radius:30px; width: 150px;">MASUK</button></a>

                @endif

                @if (Route::has('register'))
                        <a href="{{ route('register') }}"><button type="button" class="btn btn-light" style="; border-radius:30px; width: 150px;">DAFTAR</button></a>

                    @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

        </div>
    </div>
</nav>