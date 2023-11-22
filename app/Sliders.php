<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Sliders extends Model

{

    protected $table = "sliders";



    protected $fillable = ['title_ar','title_en','description_ar','description_en','image','link','type'];

}

