<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

//    public function getCategory(){
//      return Category::find($this->category_id);
//      dd($category);
//    }

    protected $fillable = [ 'category_id','name', 'code', 'count', 'id_phone_attributes', 'id_laptop_attributes', 'id_tv_attributes', 'id_tablets_attributes', 'image','price'];
    public function category(){
      return $this->belongsTo(Category::class);
    }


    public function getPriceForCount(){
      if (!is_null($this->pivot)){
        return $this->pivot->count*$this->price;
      }
      return $this->price;
    }
}
