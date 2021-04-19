@extends('landing')

@section('content')
<style type="text/css">
    .desc{
        color: #3A727F;
        font-family: montserrat;
    }
</style>
    <div class="">
        <div class="container ">
            
            <div class="row" style="height: 500px">
                <div class="col-md-6 align-self-center text-center">
                    <a href="{{route('nikah.cowo.SKCowo')}}"><img src="{{asset('img/pria.png')}}" width="250" class="img-fluid" alt="" style="padding-bottom: 10px;"></a>
                    <div class="desc">PRIA</div>
                </div>
                <div class="col-md-6 align-self-center text-center ">
                    <a href="{{route('nikah.cewe.SKCewe')}}"><img src="{{asset('img/wanita.png')}}" width="250" class="img-fluid" alt="" style="padding-bottom: 10px">
                    </a>
                    <div class="desc">WANITA</div>
                </div>
            </div>
        </div>

    </div>
@endsection
