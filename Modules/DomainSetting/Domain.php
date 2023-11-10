<?php

namespace Modules\DomainSetting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Facades\Event;
use App\Language;
use App;
use Cache;
use Wildside\Userstamps\Userstamps;
use App\User;

class Domain extends Model
{
    use SoftDeletes, SoftCascadeTrait, LogsActivity, Userstamps ;

    const CREATED_BY = 'created_by';
    const UPDATED_BY = 'updated_by';
    const DELETED_BY = 'deleted_by';

    /**
     * Get the class being used to provide a User.
     *
     * @return string
     */
    protected function getUserClass()
    {
        return "App\User";
    }

    protected $table = 'domains';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'is_active', 'tour_code',"folder_name",  'domain', 'created_at', 'updated_at',
    ];

  

    // protected $softCascade = ['translations'];
    // Deleting translations manually to overcome laravel issue with composite primary key
    protected $softCascade = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];
    protected static $logAttributes = ['*'];
    protected static $logAttributesToIgnore = [];
    protected static $recordEvents = ['created', 'updated', 'deleted'];
    protected static $ignoreChangedAttributes = [];
    protected static $logOnlyDirty = true;
    protected static $logName = 'domain_log';

    // Handle IS Featured 
    public function setIsActiveAttribute($value)
    {
        if ($value === "on") {
            $this->attributes['is_active'] = 1;
        } else {
            $this->attributes['is_active'] = 0;
        }
    }

    public static function boot()
    {
        parent::boot();

        static::created(function (Domain $domains) {
            Event::dispatch('domains.created', $domains);
        });
        static::updated(function (Domain $domains) {
            Event::dispatch('domains.updated', $domains);
        });
        static::saved(function (Domain $domains) {
            Event::dispatch('domains.saved', $domains);
        });
        static::deleted(function (Domain $domains) {
            Event::dispatch('domains.deleted', $domains);
        });
        static::restored(function (Domain $domains) {
            Event::dispatch('domains.restored', $domains);
        });
    }
}
