<?php

namespace App\Models\Questionables;


use App\Models\Question;
use Illuminate\Database\Eloquent\Model;

class TypeA extends Model
{

    protected $table = 'question_typea';

    var array $visualisationTypes = [
        'RatingButtons' => [
            'description' => 'Visual Type A',
            'help' => 'Basic Type A'
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
