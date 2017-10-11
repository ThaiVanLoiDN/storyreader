<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stories extends Model
{
    use SoftDeletes;

    protected $table = 'stories';
   	protected $primaryKey = 'id';
    public $timestamps = true;

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsTo(\App\Models\Categories::class, 'category_id');
    }
}
