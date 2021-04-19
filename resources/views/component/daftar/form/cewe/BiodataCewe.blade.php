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
    <center><h1>Data Diri Calon Perempuan</h1></center>
    <form action="{{route('nikah.cewe.BiodataCeweSubmit')}}" method="post">
      @csrf
        <div class="form-group">
          <label>Nama Lengkap *</label>
          <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="full_name" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->full_name : '' }}" id="exampleInputEmail1">
        </div>
        <div class="form-group row">
          <div class="col-md-3">
            <label>Tanggal Lahir *</label>
            <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{($data->FemaleCandidate != null) ? \Carbon\Carbon::parse($data->FemaleCandidate->date_of_birth)->format('Y-m-d') : '' }}" name="date_of_birth">
          </div>
          <div class="form-group col">
            <label>Tempat Lahir *</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="place_of_birth" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->place_of_birth : '' }}">
          </div>
        </div>
        <div class="form-group">
          <label>Warga Negara *</label>
          <input type="text" class="form-control" placeholder="Masukkan Warga Negara" name="citizen" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->citizen : '' }}">
        </div>
        <div class="form-group">
          <label>Agama *</label>
          <select class="form-control" name="religion">
              <option value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->religion : '' }}" selected>{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->religion : '' }}</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Konghuchu">Konghuchu</option>
            </select>
        </div>
        <div class="form-group">
            <label>Pekerjaan *</label>
            <input type="text" class="form-control" placeholder="Masukkan Pekerjaan" name="profession" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->profession : '' }}">
          </div>
           <div class="form-group">
            <label>Tempat Tinggal *</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Tinggal" name="residence" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->residence : '' }}">
          </div>
          <div class="form-group">
            <label>Bin / Binti *</label>
            <input type="text" class="form-control" placeholder="Masukkan Bin / Binti" name="bin_binti" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->bin_binti : '' }}">
          </div>
          <div class="form-group">
            <label>Status Perkawinan *</label>
            <input type="text" class="form-control" name="status" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->status : '' }}" placeholder="Masukkan Status Perkawinan">
          </div>
           <div class="form-group">
            <label>Nama Suami Terdahulu</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Istri Terdahulu" name="ex_spouse" value="{{($data->FemaleCandidate != null) ? $data->FemaleCandidate->ex_spouse : '' }}">
          </div>
          <button type="submit" class="btn btn-blue text-center">NEXT</button>
          <a type="submit" class="btn btn-red text-center" href="{{route('nikah.cewe.SKCewe')}}">BACK</a>
          <br><br><br><br>
</form>
  </div>
</body>

@endsection