<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'color',
        'lang',
        'creator_id',
    ];

    public function creator(){
        return $this->belongsTo(User::class,'creator_id');
    }

    public function files(){
        return $this->belongsToMany(File::class,'group_files');
    }
}
