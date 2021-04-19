@extends('landing')

@section('content') 

<style type="text/css">
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

  <div class="container">
    <center><h1>Surat Keterangan Untuk Nikah</h1></center>
    <form action="{{route('nikah.cewe.SKCeweSubmit')}}" method="post">
       @csrf
  <div class="form-group">
    <label>Nomor Surat Keterangan Nikah *</label>
    <input type="text" class="form-control" name="letter" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->letter : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Surat Keterangan Nikah">
  </div>
  <div class="form-group">
    <label>Kantor Desa / Kelurahan *</label>
    <input type="text" class="form-control" name="village" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->village : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kantor Desa / Kelurahan">
  </div>
  <div class="form-group">
    <label>Kecamatan *</label>
    <input type="text" class="form-control" name="district" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->district : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kecamatan">
  </div>
  <div class="form-group">
    <label>Kabupaten / Kota *</label>
    <input type="text" class="form-control" name="city" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->city : '' }}" aria-describedby="emailHelp" placeholder="Masukkan Kabupaten / Kota">
  </div>

    <button type="submit" class="btn btn-blue text-center" >NEXT</button>
    <a href="{{route('nikah.pilih')}}" class="btn btn-red" href="{{route('nikah.pilih')}}">BACK</a>

</form>
  </div> 
  @endsection