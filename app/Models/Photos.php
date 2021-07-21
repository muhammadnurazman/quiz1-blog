<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;
    protected $table = "tb_photos";

 protected $primaryKey = 'photos_id';

 protected $fillable = ['tgl','title','text','post_id'];
}
