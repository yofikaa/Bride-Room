<?php

namespace App\Models;

use App\Models\BiodataFemale;
use App\Models\BiodataMale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $table = 'dates';

    public function MaleCandidate(){
        //setiap tanggal memiliki satu mempelai laki"
        return $this->belongsTo(BiodataMale::class,'biodata_male_id');
    }
    public function FemaleCandidate(){
        //setiap tanggal memiliki satu mempelai wanita"
        return $this->belongsTo(BiodataFemale::class,'biodata_female_id');
    }
}
