<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{   
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, 
        function($query, $search){
            return $query->where('title','like','%'.$search.'%')
                ->orWhere('content','like','%'.$search.'%');
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
