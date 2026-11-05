<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plague extends Model
{
    use HasFactory;

    protected $fillable = [
        'plague_name',
        'scientific_name',
        'plague_description',
        'plague_symptom1',
        'plague_symptom2',
        'plague_symptom3',
        'plague_symptom4',
        'image_plague_id',
    ];

    public function plants()
    {
        return $this->belongsToMany(\App\Models\plant::class, 'pest_plants', 'plague_id', 'plant_id');
    }

    public function treatments()
    {
        return $this->hasMany(\App\Models\treatment::class);
    }
    public function image_plague()
    {
        return $this->belongsTo(\App\Models\image_plague::class);
    }
}
