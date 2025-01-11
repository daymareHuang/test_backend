<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;
    protected $table = 'Tag';
    protected $fillable =['OutfitID','Title','Type','Comment','Size','Brand','X','Y'];

    public function tagComment(){
        return $this->belongsTo(Outfit::class,'OutfitID','OutfitID');
    }
}
