<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['category_id','name','image','description','price','view_count'];

    public function Category(){
        return $this->BelongsTo(Category::class);
    }
}
