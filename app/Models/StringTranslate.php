<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StringTranslate extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'string_tranlates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_locale', 'key', 'value',
    ];

    protected $casts = [
        'id_locale' => 'integer',
        'key' => 'string',
        'value' => 'string',
    ];

    public function Locale(){
    	return $this->belongsTo(\App\Models\Locale::class, 'id', 'id_locale');
    }
}
