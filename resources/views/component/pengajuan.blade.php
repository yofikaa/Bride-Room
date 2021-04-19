@extends('landing')

@section('content')

<style type="text/css">
    .nama{
        font-family: backslash;
        color: #3A727F;
        font-size: 40px;
    }
    .dan{
        font-family: backslash;
        color: #3A727F;
        font-size: 20px;
        padding: 0;
        margin: 0;
    }
  body{
  font-family: montserrat;
}
 .card{
    margin-top: 60px;
 }
</style>
    <div class="">
        <div class="container ">
            <div class="row">
                @foreach($data as $a)
                        <div class="col-md-5">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('img/mgz.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-center nama">{{$a->MaleCandidate->full_name}}</h4>
                                    <h6 class="text-center dan">&amp;</h6>
                                    <h4 class="card-title text-center nama">{{$a->FemaleCandidate->full_name}}</h4>
                                    <br>
                                        <p class="card-text" style="text-transform: capitalize;">Hari : {{$a->day}}</p>
                                        <p class="card-text">Tanggal : {{\Carbon\Carbon::parse($a->date)->format('Y-m-d')}}</p>
                                        <p class="card-text">Hari : {{$a->time}}</p>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>
            <br>
            <br>

        </div>
    </div>
@endsection
