@extends('landing')

@section('content')
<style type="text/css">
    body{
        background-image: url("../img/mgz.png");
        background-size: 110%;
    }
    .judul{
        font-size: 90px;
        font-family: backslash;
        color: #FAECD1;
    }
    .carousel-caption{
        width:100%;
        height:100%;
        margin:0 auto;
        position: flex;
        text-align: center;
    }
    .trickcenter {
        position: fixed;
        top: 85%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .btn-tengah{
        background-color: #FAECD1!important;
        color: #3A727F;
        font-size: 20px;
        font-style: bold;
        width: 200px;
        border: 0;
        border-radius: 30px;
    }
</style>
<div class="">
    <div class="container ">
        <div class="carousel-caption trickcenter">
        <div class="judul">Bride Room</div>
        <a class="btn btn-primary btn-tengah" href="{{route('nikah.redirect')}}" type="button">GET STARTED</a>
    </div>
        <!-- <div class="row" style="height: 500px">
            <div class="col-12 col-md-7 align-self-center text-center mt-3">
                <img src="{{asset('img/lg.png')}}" width="500" class="img-fluid" alt="">
            </div> 
            <div class="col-md-4 align-self-center">
                <h1 style="color: #3A727F; font-size: 45px; font-family: backslash" >
                    Jadwalkan Pernikahanmu
                    dan Lengkapi Data<br> Sekarang Juga!
                </h1>
                <br>
                <a href="{{route('nikah.redirect')}}" type="button" class="btn bg-orange text-white pd-20">DAFTAR</a>
            </div>
        </div> -->
    </div>
</div>
@endsection
