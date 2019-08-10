<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use \Spatie\Tags\HasTags;

    protected $table = 'projects';

    protected $casts = [
        'specs' => 'collection',
        'features' => 'collection',
        'facts' => 'collection',
    ];

    static $typeWebApp = 'web';
    static $typeMobile = 'mobile';
    static $typeSocial = 'social';
    static $typeOther = 'other';

    public static function getTypes()
    {
        return [
            self::$typeWebApp => 'Web App',
            self::$typeMobile => 'Mobile App',
            self::$typeSocial => 'Social App',
            self::$typeOther => 'Other'
        ];
    }
}
