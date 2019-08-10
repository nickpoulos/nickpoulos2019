<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use \Spatie\Tags\HasTags;

    protected $table = 'experiences';

    protected $casts = [
        'responsibilities' => 'collection',
        'start' => 'date',
        'end' => 'date'
    ];
}
