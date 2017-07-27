<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model {

    protected $table = "profiles";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'occupation', 'company', 'city', 'website', 'facebook', 'twitter', 'plus', 'instagram', 'pinterest', 'about_me', 'description',
    ];

    public function Profiles() {
        return $this->belongTo('App\Profiles', 'user_id');
    }

}
