<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

   public $timestamps = false;
   protected $table = "contact";
   protected $fillable = ['id','namalengkap','alamat','profesi','jabatan_id','gaji','jumlahsaudara'];
  

public function jabatan(){
   return $this->belongsTo(Jabatan::class);
}

}
