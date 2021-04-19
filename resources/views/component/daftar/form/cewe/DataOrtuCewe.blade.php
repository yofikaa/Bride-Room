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
    <form action="{{route('nikah.cewe.DataOrtuCeweSubmit')}}" method="post">
      @csrf
    <center><h1>Data Diri Ayah</h1></center>
        <div class="form-group">
          <label>Nama Lengkap *</label>
          <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="full_nameayah" value="{{($ayah->FemaleCandidate->perenFathertFemale != null) ? $ayah->FemaleCandidate->perenFathertFemale->full_name : '' }}">
        </div>
        <div class="form-group row">
          <div class="col-md-3">
            <label>Tanggal Lahir *</label>
            <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{($ayah->FemaleCandidate->perenFathertFemale != null) ? \Carbon\Carbon::parse($ayah->FemaleCandidate->perenFathertFemale->date_of_birth)->format('Y-m-d') : '' }}" name="date_of_birthayah">
          </div>
          <div class="form-group col">
            <label>Tempat Lahir *</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="place_of_birthayah" value="{{($ayah->FemaleCandidate->perenFathertFemale != null) ? $ayah->FemaleCandidate->perenFathertFemale->place_of_birth : '' }}">
          </div>
        </div>
        <div class="form-group">
          <label>Warga Negara *</label>
          <input type="text" class="form-control" name="citizenayah" value="{{($ayah->FemaleCandidate->perenFathertFemale != null) ? $ayah->FemaleCandidate->perenFathertFemale->citizen : '' }}" placeholder="Masukkan Warga Negara" >
        </div>
        <div class="form-group">
          <label>Agama *</label>
          <select class="form-control" name="religionayah">
              <option value="{{($ayah->FemaleCandidate->perenFathertFemale != null) ? $ayah->FemaleCandidate->perenFathertFemale->religion : '' }}" selected>{{($ayah->FemaleCandidate->perenFathertFemale != null) ? $ayah->FemaleCandidate->perenFathertFemale->religion : '' }}</option>
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
            <input type="text" class="form-control" placeholder="Masukkan Pekerjaan" name="professionayah" value="{{($ayah->FemaleCandidate->perenFathertFemale != null) ? $ayah->FemaleCandidate->perenFathertFemale->profession : '' }}">
          </div>
           <div class="form-group">
            <label>Tempat Tinggal *</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Tinggal" name="residenceayah" value="{{($ayah->FemaleCandidate->perenFathertFemale != null) ? $ayah->FemaleCandidate->perenFathertFemale->residence : '' }}">
          </div>
          <br>
          <hr>

          <center><h1>Data Diri Ibu</h1></center>

          <div class="form-group">
          <label>Nama Lengkap *</label>
          <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="full_nameibu" value="{{($ibu->FemaleCandidate->perenMothertFemale != null) ? $ibu->FemaleCandidate->perenMothertFemale->full_name : '' }}">
        </div>
        <div class="form-group row">
          <div class="col-md-3">
            <label>Tanggal Lahir *</label>
            <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{($ibu->FemaleCandidate->perenMothertFemale != null) ? \Carbon\Carbon::parse($ibu->FemaleCandidate->perenMothertFemale->date_of_birth)->format('Y-m-d') : '' }}" name="date_of_birthibu">
          </div>
          <div class="form-group col">
            <label>Tempat Lahir *</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="place_of_birthibu" value="{{($ibu->FemaleCandidate->perenMothertFemale != null) ? $ibu->FemaleCandidate->perenMothertFemale->place_of_birth : '' }}">
          </div>
        </div>
        <div class="form-group">
          <label>Warga Negara *</label>
          <input type="text" class="form-control" name="citizenibu" value="{{($ibu->FemaleCandidate->perenMothertFemale != null) ? $ibu->FemaleCandidate->perenMothertFemale->citizen : '' }}" placeholder="Masukkan Warga Negara" >
        </div>
        <div class="form-group">
          <label>Agama *</label>
          <select class="form-control" name="religionibu">
              <option value="{{($ibu->FemaleCandidate->perenMothertFemale != null) ? $ibu->FemaleCandidate->perenMothertFemale->religion : '' }}" selected>{{($ibu->FemaleCandidate->perenMothertFemale != null) ? $ibu->FemaleCandidate->perenMothertFemale->religion : '' }}</option>
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
            <input type="text" class="form-control" placeholder="Masukkan Pekerjaan" name="professionibu" value="{{($ibu->FemaleCandidate->perenMothertFemale != null) ? $ibu->FemaleCandidate->perenMothertFemale->profession : '' }}">
          </div>
           <div class="form-group">
            <label>Tempat Tinggal *</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Tinggal" name="residenceibu" value="{{($ibu->FemaleCandidate->perenMothertFemale != null) ? $ibu->FemaleCandidate->perenMothertFemale->residence : '' }}">
          </div>


          <button type="submit" class="btn btn-blue text-center" href="">NEXT</button>
          <a type="submit" class="btn btn-red text-center" href="">BACK</a>
          <br><br><br><br>


</form>
  </div>
</body>

@endsection