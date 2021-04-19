@extends('landing')

@section('styles')
@endsection

@section('content')

    <style>
          h1{
          font-family: backslash;
          color: #3A727F;
          font-size: 60px;
          margin-top: 20px;
          margin-bottom: 35px;
        }
        label{
          color:  #3A727F;
        }
        body{
          font-family: montserrat;
        }
    </style>

    <div class="">
        <div class="container ">
            <center><h1 style="font-family: backslash; color:; ">Jadwalkan Pernikahan!</h1></center>
            <form method="post" action="{{route('nikah.dateSubmit')}}">
                @csrf
                     
                                <div class="form-group">
                                    <label >Hari <a style="font-size: 20px" class="text-danger">*</a></label>
                                    <input type="text" class="form-control" name="day" value="{{($data != null) ? $data->day : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Hari...">
                                 </div>
                                <div class="form-group">
                                    <label>Tanggal Pernikahan <a style="font-size: 20px" class="text-danger">*</a></label>
                                    <input class="form-control" type="date" value="{{($data != null) ? \Carbon\Carbon::parse($data->date)->format('Y-m-d') : '' }}" name="date" id="example-date-input">
                                </div>
                                <div class="form-group">
                                    <label >Jam Pernikahan <a style="font-size: 20px" class="text-danger">*</a></label>
                                    <input class="form-control" type="time" name="time" value="{{($data != null) ? $data->time : '' }}" id="example-time-input">
                                </div>
                                <div class="form-group">
                                    <label>Mas Kawin <a style="font-size: 20px" class="text-danger">*</a></label>
                                    <input type="text" class="form-control" name="dowry" value="{{($data != null) ? $data->dowry : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Mas Kawin...">
                                </div>
                                <div class="form-group">
                                    <label>Hutang ?  <a style="font-size: 20px" class="text-danger">*</a></label>
                                    <!-- Default switch -->
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="debt" class="custom-control-input" id="customSwitches" {{($data != null && $data->debt == 1) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customSwitches"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tempat <a style="font-size: 20px" class="text-danger">*</a></label>
                                    <input type="text" class="form-control" value="{{($data != null) ? $data->place : '' }}" name="place" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Temat...">
                                </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-blue text-center" href="">NEXT</button>
            </div>
            </form>
            <br><br><br><br>
        </div>
    </div>
@endsection
