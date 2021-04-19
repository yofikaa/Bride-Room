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
    <center><h1>Data Kematian</h1></center>
    <form method="post" action="{{route('nikah.cowo.KematianCowo')}}">
      @csrf
        <div class="form-group">
          <label>Nama Lengkap *</label>
          <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="full_name" value="{{($data->MaleCandidate->extMale != null) ? $data->MaleCandidate->extMale->full_name : '' }}">
        </div>
        <div class="form-group">
          <label>Nama Alias *</label>
          <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="name" value="{{($data->MaleCandidate->extMale != null) ? $data->MaleCandidate->extMale->name : '' }}">
        </div>
        <div class="form-group row">
          <div class="col-md-3">
            <label>Tanggal Lahir *</label>
            <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{($data->MaleCandidate->extMale != null) ? \Carbon\Carbon::parse($data->MaleCandidate->extMale->date_of_birth)->format('Y-m-d') : '00-00-0000' }}" name="date_of_birth">
          </div>
          <div class="form-group col">
            <label>Tempat Lahir *</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="place_of_birth" value="{{($data->MaleCandidate->extMale != null) ? $data->MaleCandidate->extMale->place_of_birth : '' }}">
          </div>
        </div>
        <div class="form-group">
          <label>Warga Negara *</label>
          <input type="text" class="form-control" name="citizen" value="{{($data->MaleCandidate->extMale != null) ? $data->MaleCandidate->extMale->citizen : '' }}" >
        </div>
        <div class="form-group">
          <label>Agama *</label>
          <select class="form-control" name="religion">
              <option value="{{($data->MaleCandidate->extMale != null) ? $data->MaleCandidate->extMale->religion : ' ' }}" selected>{{($data->MaleCandidate->extMale != null) ? $data->MaleCandidate->extMale->religion : null }}</option>
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
            <input type="text" class="form-control" placeholder="Masukkan Pekerjaan" name="profession" value="{{($data->MaleCandidate->extMale != null) ? $data->MaleCandidate->extMale->profession : '' }}">
          </div>
           <div class="form-group">
            <label>Tempat Tinggal *</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Tinggal" name="residence" value="{{($data->MaleCandidate->extMale != null) ? $data->MaleCandidate->extMale->residence : '' }}">
          </div>
          <button type="submit" class="btn btn-blue text-center">NEXT</button>
          <button type="submit" class="btn btn-red text-center">BACK</button>

          <br><br><br><br>
    
</form>
  </div>
</body>

@endsection
