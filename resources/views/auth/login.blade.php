@extends('landing')

@section('content')

<style type="text/css">
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat
}
.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px;
    background-color: #FAECD1;
}

.card2 {
    margin: 0px 40px;
    background-color: #FAECD1;
}

.logo {
    width: 50px;
    height: 50px;
    margin-top: 8px;
    margin-left: 40px
}

.image {
    width: 360px;
    height: 400px;
    margin-top: 20px;
}

.border-line {
    border-right: 1px solid #3A727F;
}

.text-sm {
    font-size: 14px !important;
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

a {
    color: inherit;
    cursor: pointer
}

.btn-blue {
    background-color:  #3A727F;
    width: 150px;
    color: #fff;
    border-radius: 2px
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer;
}

.bg-blue {
    color: #fff;
    background-color: #3A727F;
}

@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px
    }

    .image {
        width: 300px;
        height: 220px;
    }

    .border-line {
        border-right: none
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px
    }
}

.judul{
    font-family: backslash;
    color: #3A727F;
    font-size: 70px;
    padding-bottom: 40px;
    padding-top: 20px;
}
</style>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="{{asset('img/br.png')}}" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="{{asset('img/lg.png')}}" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row px-3">
                    	<h1 class="judul">Login</h1>
                    </div>
                    <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="row px-3"> 
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email</h6>
                        </label> 
                    <input class="mb-4 @error('email') is-invalid @enderror" type="text" name="email"  value="{{ old('email') }}" required autocomplete="email" placeholder="Enter a valid username"> 
                    </div>
                    <div class="row px-3"> 
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> 
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password"> </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> 
                        <button type="submit" class="btn btn-blue text-center">Login</button> 
                    </div>
                </form>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger " href="">Register</a></small> </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. Yofika Audrey.</small>
            </div>
        </div>
    </div>
</div>
@endsection