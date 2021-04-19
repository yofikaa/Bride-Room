<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataMale extends Model
{
    use HasFactory;

    public function MaleCandidate(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasOne(Date::class);
    }


    public function perenFathertMale(){
        return $this->belongsTo(BiodataOfParent::class,'father_biodata_of_parents_id');
    }
    public function perenMothertMale(){
        return $this->belongsTo(BiodataOfParent::class,'mother_biodata_of_parents_id');
    }
    public function extMale(){
        return $this->belongsTo(BiodataOfEx::class,'ex_id');
    }
}
