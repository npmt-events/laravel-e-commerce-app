<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    public function category() {
    	return $this->belongsTo("App\Category","category_id","id");
    }

    public function subCategory() {
    	return $this->belongsTo("\App\subCategory","sub_category_id","id");
    }
}
