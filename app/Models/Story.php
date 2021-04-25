<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Story extends Model
{
    protected $table ='story';
    public $timestamps = false;

    public function listStory(){
        $query = $this->where('id','=', 1)->get();
        return $query;
    }
}
