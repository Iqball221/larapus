<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $visible =['tittle','author_id','amount','cover'];
    protected $fillable =['tittle','author_id','amount','cover'];
    public $timestamps=true;


    public function author()
    {
        return $this->belongsTo('App\Models\Author','author_id');
    }
}
