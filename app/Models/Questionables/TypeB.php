<?php

namespace App\Models\Questionables;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;

class TypeB extends Model
{

    protected $table = 'question_typeb';

    var array $visualisationTypes = [
        'RatingButtons' => [
            'description' => 'Visual Type B',
            'help' => 'Basic Type B'
        ]
    ];


    public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }
    public function visualable()
    {
        return $this->morphTo();
    }
}
