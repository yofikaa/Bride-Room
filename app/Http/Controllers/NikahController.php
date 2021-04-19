<?php

namespace App\Http\Controllers;

use App\Models\BiodataFemale;
use App\Models\BiodataMale;
use App\Models\BiodataOfEx;
use App\Models\BiodataOfParent;
use App\Models\DataSipora;
use App\Models\Date;
use App\Models\Sipora;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\VarDumper\Dumper\esc;

class NikahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function check($gender=[])
    {
        $user = Auth::guard('web')->user();
        $data = Date::where('user_id',$user->id)->where('final',0)->with($gender)->first();
//        dd($data);
        return $data;
    }
    function listpengajuan($gender=[])
    {
        $user = Auth::guard('web')->user();
        $data = Date::where('user_id',$user->id)->with($gender)->get();
//        dd($data);
        return $data;
    }
//    function checkPerent($gender=[])
//    {
//        $user = Auth::guard('web')->user();
//        $data = Date::where('user_id',$user->id)->where(function ($query) {
//            $query->where('biodata_male_id', '=', null)
//                ->orWhere('biodata_female_id', '=', null);
//        })->with($gender)->first();
//
//        return $data;
//    }

    public function redirect(){
        if (Auth::check()){
        $data = $this->check();

        if ($data == null){

            view()->share([
                'data' => $data
            ]);
            return view('component/daftar/form/jadwal');
        }else{
            view()->share([
                'data' => $data
            ]);
            return view('component/daftar/form/pilih');

        }
        }else{
            return redirect()->route('login');
        }
    }


    function cekStep($data,$gender=[],$step = 1)
    {
        $cekStep = [];
        $data->toArray();

        if ($data!=null){
           $cekStep['biodata'] = 1;

        }
        if ($data[$gender]!=null){
            $cekStep['asalusul'] = 2;
        }

        if ($cekStep != $step){

        }

    }
    public function Date(Request $request){
        $data = $this->check();

        view()->share([
            'data' => $data
        ]);
//
        return view('component/daftar/form/jadwal');


    }

    public function DateSumbit( Request $request){
        $data = $this->check();
//        dd('dqwdqwd');

        $validate = [
            'day'                  =>  'required',
            'date'                  =>  'required',
            'time'                  =>  'required',
            'dowry'                  =>  'required',
            'place'                  =>  'required',
        ];
        $request->validate($validate);
        if ($data ==null ){
            $data = new Date();
        }
        $data->user_id =  Auth::id();
        $data->day = $request->day;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->dowry = $request->dowry;
        $data->debt = ($request->debt == "on") ? 1 : 0 ;
        $data->place = $request->place;

        $data->save();
//        return ($request->submit == 'save') ? redirect()->back() :  redirect()->route('nikah.step-2-cowo');
        return redirect()->route('nikah.pilih');

    }
    public function Pilih( Request $request){
        $data = $this->check();

        view()->share([
            'data' => $data
        ]);
        return view('component/daftar/form/pilih');

    }
    public function verifikasisubmit( Request $request){
        $data = $this->check();

        if ($data ==null ){
            $data = new Date();
        }

        $data->final = $request->final;
        $data->save();

        return redirect()->route('landing');

    }
//=======================================cowo==========================================
    public function BiodataCowo( Request $request){
        $data = $this->check(['MaleCandidate']);

//        $this->cekStep($data,'MaleCandidate');
        view()->share([
            'data' => $data
        ]);
        return view('component/daftar/form/cowo/BiodataCowo');
    }
    public function SKCowo (Request $request){
        $data = $this->check(['MaleCandidate']);
        view()->share([
            'data' => $data
        ]);
        return view('component/daftar/form/cowo/SK');
    }

    public function SKCowoSubmit(Request $request){
        $data = $this->check(['MaleCandidate']);
        $validate = [
            'letter'                     =>  'required',
            'village'                    =>  'required',
            'district'                   =>  'required',
            'city'                       =>  'required'
        ];
        $request->validate($validate);


        if ( $data->MaleCandidate ==null ){
            $Candidate = new BiodataMale();
        }else{
            $Candidate = BiodataMale::where('id',$data->MaleCandidate->id)->first();
        }
        $Candidate->letter = $request->letter;
        $Candidate->village = $request->village;
        $Candidate->district = $request->district;
        $Candidate->city = $request->city;

        $Candidate->save();
        if ( $data->MaleCandidate ==null ){
            $data->biodata_male_id = $Candidate->id;
            $data->save();
        }

        return redirect()->route('nikah.cowo.BiodataCowo');

    }
    public function BiodataCowoSubmit( Request $request){
        $data = $this->check(['MaleCandidate']);

        $validate = [
            'full_name'                  =>  'required',
            'place_of_birth'             =>  'required',
            'date_of_birth'              =>  'required',
            'citizen'                    =>  'required',
            'religion'                   =>  'required',
            'profession'                 =>  'required',
            'residence'                  =>  'required',
            'bin_binti'                  =>  'required',
            'status'                     =>  'required',
        ];

        $request->validate($validate);
        if ( $data->MaleCandidate ==null ){
            $Candidate = new BiodataMale();
        }else{
            $Candidate = BiodataMale::where('id',$data->MaleCandidate->id)->first();
        }
        $Candidate->full_name = $request->full_name;
        $Candidate->place_of_birth = $request->place_of_birth;
        $Candidate->date_of_birth = $request->date_of_birth;
        $Candidate->citizen = $request->citizen;
        $Candidate->religion = $request->religion;
        $Candidate->profession = $request->profession;
        $Candidate->residence = $request->residence;
        $Candidate->bin_binti = $request->bin_binti;
        $Candidate->status = $request->status;
        $Candidate->ex_spouse = $request->ex_spouse;


        $Candidate->save();
        if ( $data->MaleCandidate ==null ){
            $data->biodata_male_id = $Candidate->id;
            $data->save();
        }

//        return ($request->submit == 'save') ? redirect()->back() :  redirect()->route('nikah.step-2-cowo');
        return redirect()->route('nikah.cowo.DataOrtuCowo');
//        return view('component/daftar/form/cowo/s2-asalusul');
    }

    public function DataOrtuCowo( Request $request){
        $ayah = $this->check(['MaleCandidate.perenFathertMale']);
        $ibu = $this->check(['MaleCandidate.perenMothertMale']);
        view()->share([
            'ayah' => $ayah,
            'ibu' => $ibu
        ]);

        return view('component/daftar/form/cowo/DataOrtuCowo');

    }
    public function DataOrtuCowoSubmit( Request $request){
        $ayah = $this->check(['MaleCandidate.perenFathertMale']);
        $ibu = $this->check(['MaleCandidate.perenMothertMale']);


        if ( $ayah->MaleCandidate->perenFathertMale ==null && $ibu->MaleCandidate->perenMothertMale ==null){
            $ayahku = new BiodataOfParent();
            $ibuku = new BiodataOfParent();
        }else{
            $ayahku = BiodataOfParent::where('id',$ayah->MaleCandidate->perenFathertMale->id)->first();
            $ibuku = BiodataOfParent::where('id',$ibu->MaleCandidate->perenMothertMale->id)->first();

        }

        $ayahku->full_name = $request->full_nameayah;
        $ayahku->place_of_birth = $request->place_of_birthayah;
        $ayahku->date_of_birth = $request->date_of_birthayah;
        $ayahku->citizen = $request->citizenayah;
        $ayahku->religion = $request->religionayah;
        $ayahku->profession = $request->professionayah;
        $ayahku->residence = $request->residenceayah;

        $ibuku->full_name = $request->full_nameibu;
        $ibuku->place_of_birth = $request->place_of_birthibu;
        $ibuku->date_of_birth = $request->date_of_birthibu;
        $ibuku->citizen = $request->citizenibu;
        $ibuku->religion = $request->religionibu;
        $ibuku->profession = $request->professionibu;
        $ibuku->residence = $request->residenceibu;


        $ayahku->save();
        $ibuku->save();

        if ( $ayah->MaleCandidate->perenFathertMale ==null && $ibu->MaleCandidate->perenMothertMale ==null){
            $biodata = BiodataMale::where('id',$ayah->MaleCandidate->id)->first();
            $biodata->father_biodata_of_parents_id = $ayahku->id;
            $biodata->mother_biodata_of_parents_id = $ibuku->id;

            $biodata->save();
        }

        return redirect()->route('nikah.cowo.KematianCowo');

    }


    public function KematianCowo( Request $request){
        $data = $this->check(['MaleCandidate.extMale']);
//        $this->cekStep($data,'MaleCandidate');
        view()->share([
            'data' => $data
        ]);
        return view('component/daftar/form/cowo/KematianCowo');

    }
    public function KematianCowoSubmit ( Request $request){
        $data = $this->check(['MaleCandidate.extMale']);

        $validate = [
            'day'                  =>  'required',
            'date'                  =>  'required',
            'time'                  =>  'required',
            'dowry'                  =>  'required',
            'place'                  =>  'required',
        ];

//        dd($data->extMale);
//        $request->validate($validate);
        if ($data->MaleCandidate->extMale == null ){
            $Candidate = new BiodataOfEx();
        }else{
            $Candidate = BiodataOfEx::where('id',$data->MaleCandidate->extMale->id)->first();
        }
        $Candidate->full_name = $request->full_name;
        $Candidate->name = $request->name;
        $Candidate->place_of_birth = $request->place_of_birth;
        $Candidate->date_of_birth = $request->date_of_birth;
        $Candidate->citizen = $request->citizen;
        $Candidate->religion = $request->religion;
        $Candidate->profession = $request->profession;
        $Candidate->residence = $request->residence;



        $Candidate->save();
        if ( $data->MaleCandidate->extMale ==null ){
            $biodata = BiodataMale::where('id',$data->MaleCandidate->id)->first();
            $biodata->ex_id = $Candidate->id;
            $biodata->save();
        }
        return redirect()->route('nikah.pilih');


    }
//=================================cewe============================
   public function SKCewe (Request $request){
        $data = $this->check(['FemaleCandidate']);
        view()->share([
            'data' => $data
        ]);
        return view('component/daftar/form/cewe/SK');
    }

    public function SKCeweSubmit(Request $request){
        $data = $this->check(['FemaleCandidate']);
        $validate = [
            'letter'                     =>  'required',
            'village'                    =>  'required',
            'district'                   =>  'required',
            'city'                       =>  'required'
        ];
        $request->validate($validate);


        if ( $data->FemaleCandidate ==null ){
            $Candidate = new BiodataFemale();
        }else{
            $Candidate = BiodataFemale::where('id',$data->FemaleCandidate->id)->first();
        }
        $Candidate->letter = $request->letter;
        $Candidate->village = $request->village;
        $Candidate->district = $request->district;
        $Candidate->city = $request->city;

        $Candidate->save();
        if ( $data->FemaleCandidate ==null ){
            $data->biodata_female_id = $Candidate->id;
            $data->save();
        }

        return redirect()->route('nikah.cewe.BiodataCewe');

    }

    public function BiodataCewe( Request $request){
        $data = $this->check(['FemaleCandidate']);

//        $this->cekStep($data,'FemaleCandidate');
        view()->share([
            'data' => $data
        ]);
        return view('component/daftar/form/cewe/BiodataCewe');
    }

    public function BiodataCeweSubmit( Request $request){
        $data = $this->check(['FemaleCandidate']);

        $validate = [
            'full_name'                  =>  'required',
            'place_of_birth'             =>  'required',
            'date_of_birth'              =>  'required',
            'citizen'                    =>  'required',
            'religion'                   =>  'required',
            'profession'                 =>  'required',
            'residence'                  =>  'required',
            'bin_binti'                  =>  'required',
            'status'                     =>  'required',
        ];

        $request->validate($validate);
        if ( $data->FemaleCandidate ==null ){
            $Candidate = new BiodataFemale();
        }else{
            $Candidate = BiodataFemale::where('id',$data->FemaleCandidate->id)->first();
        }
        $Candidate->full_name = $request->full_name;
        $Candidate->place_of_birth = $request->place_of_birth;
        $Candidate->date_of_birth = $request->date_of_birth;
        $Candidate->citizen = $request->citizen;
        $Candidate->religion = $request->religion;
        $Candidate->profession = $request->profession;
        $Candidate->residence = $request->residence;
        $Candidate->bin_binti = $request->bin_binti;
        $Candidate->status = $request->status;
        $Candidate->ex_spouse = $request->ex_spouse;


        $Candidate->save();
        if ( $data->FemaleCandidate ==null ){
            $data->biodata_Female_id = $Candidate->id;
            $data->save();
        }

//        return ($request->submit == 'save') ? redirect()->back() :  redirect()->route('nikah.step-2-cewe');
        return redirect()->route('nikah.cewe.DataOrtuCewe');
//        return view('component/daftar/form/cewe/s2-asalusul');
    }

    

    public function DataOrtuCewe( Request $request){
        $ayah = $this->check(['FemaleCandidate.perenFathertFemale']);
        $ibu = $this->check(['FemaleCandidate.perenMothertFemale']);
        view()->share([
            'ayah' => $ayah,
            'ibu' => $ibu
        ]);

        return view('component/daftar/form/cewe/DataOrtuCewe');

    }
    public function DataOrtuCeweSubmit( Request $request){
        $ayah = $this->check(['FemaleCandidate.perenFathertFemale']);
        $ibu = $this->check(['FemaleCandidate.perenMothertFemale']);


        if ( $ayah->FemaleCandidate->perenFathertFemale ==null && $ibu->FemaleCandidate->perenMothertFemale ==null){
            $ayahku = new BiodataOfParent();
            $ibuku = new BiodataOfParent();
        }else{
            $ayahku = BiodataOfParent::where('id',$ayah->FemaleCandidate->perenFathertFemale->id)->first();
            $ibuku = BiodataOfParent::where('id',$ibu->FemaleCandidate->perenMothertFemale->id)->first();

        }

        $ayahku->full_name = $request->full_nameayah;
        $ayahku->place_of_birth = $request->place_of_birthayah;
        $ayahku->date_of_birth = $request->date_of_birthayah;
        $ayahku->citizen = $request->citizenayah;
        $ayahku->religion = $request->religionayah;
        $ayahku->profession = $request->professionayah;
        $ayahku->residence = $request->residenceayah;

        $ibuku->full_name = $request->full_nameibu;
        $ibuku->place_of_birth = $request->place_of_birthibu;
        $ibuku->date_of_birth = $request->date_of_birthibu;
        $ibuku->citizen = $request->citizenibu;
        $ibuku->religion = $request->religionibu;
        $ibuku->profession = $request->professionibu;
        $ibuku->residence = $request->residenceibu;


        $ayahku->save();
        $ibuku->save();

        if ( $ayah->FemaleCandidate->perenFathertFemale ==null && $ibu->FemaleCandidate->perenMothertFemale ==null){
            $biodata = BiodataFemale::where('id',$ayah->FemaleCandidate->id)->first();
            $biodata->father_biodata_of_parents_id = $ayahku->id;
            $biodata->mother_biodata_of_parents_id = $ibuku->id;

            $biodata->save();
        }

        return redirect()->route('nikah.cewe.KematianCewe');

    }


    public function KematianCewe( Request $request){
        $data = $this->check(['FemaleCandidate.extFemale']);
//        $this->cekStep($data,'FemaleCandidate');
        view()->share([
            'data' => $data
        ]);
        return view('component/daftar/form/cewe/KematianCewe');

    }
    public function KematianCeweSubmit ( Request $request){
        $data = $this->check(['FemaleCandidate.extFemale']);

        $validate = [
            'day'                  =>  'required',
            'date'                  =>  'required',
            'time'                  =>  'required',
            'dowry'                  =>  'required',
            'place'                  =>  'required',
        ];

//        $request->validate($validate);
        if ($data->FemaleCandidate->extFemale == null ){
            $Candidate = new BiodataOfEx();
        }else{
            $Candidate = BiodataOfEx::where('id',$data->FemaleCandidate->extFemale->id)->first();
        }
        $Candidate->full_name = $request->full_name;
        $Candidate->name = $request->name;
        $Candidate->place_of_birth = $request->place_of_birth;
        $Candidate->date_of_birth = $request->date_of_birth;
        $Candidate->citizen = $request->citizen;
        $Candidate->religion = $request->religion;
        $Candidate->profession = $request->profession;
        $Candidate->residence = $request->residence;



        $Candidate->save();
        if ( $data->FemaleCandidate->extFemale ==null ){
            $biodata = BiodataFemale::where('id',$data->FemaleCandidate->id)->first();
            $biodata->ex_id = $Candidate->id;
            $biodata->save();
        }
        return redirect()->route('nikah.pilih');


    }





    

    public function pengajuan ( Request $request){
        $data = $this->listpengajuan(['MaleCandidate','FemaleCandidate']);
//        dd($data);
//        dd($datacowo,$datacewe,$data);
//        $this->cekStep($data,'MaleCandidate');
        view()->share([
            'data' => $data
        ]);
        return view('component/pengajuan');
    }
}
