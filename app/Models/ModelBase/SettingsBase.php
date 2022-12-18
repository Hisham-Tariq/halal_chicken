<?php

namespace App\Models\ModelBase;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SettingsBase
 * @package App\Models\ModelBase
 * 
 * @property integer $id
 * @property string $years_exp
 * @property string $movers_count
 * @property string $families_moved
 * @property string $headline_news
 */
class SettingsBase extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'years_exp',

        'movers_count',

        'families_moved',

        'headline_news',

    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];

    /**
     * @return string[]
     */
    public static function keys(): array
    {
        return [

            'id',

            'years_exp',

            'movers_count',

            'families_moved',

            'headline_news',

        ];
    }


}
