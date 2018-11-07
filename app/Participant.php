<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Workshop;

class Participant extends Model
{
    protected $fillable = [
        'workshop_id',
        'name',
        'surname',
        'email'
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
