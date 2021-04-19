<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataFemale extends Model
{
    use HasFactory;

    public function FemaleCandidate(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasOne(Date::class);
    }

    public function perenFathertFemale(){
        return $this->belongsTo(BiodataOfParent::class,'father_biodata_of_parents_id');
    }
    public function perenMothertFemale(){
        return $this->belongsTo(BiodataOfParent::class,'mother_biodata_of_parents_id');
    }
    public function extFemale(){
        return $this->belongsTo(BiodataOfEx::class,'ex_id');
    }
}
