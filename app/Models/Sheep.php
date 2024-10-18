<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheep extends Model {
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function initial_assessments() {
        return $this->hasMany(InitialAssessment::class);
    }
}
