<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Description of Profiles
 *
 * @author Poxy
 */
class Profile extends Model {
    
      protected $fillable = [
        'occupation','company', 'city','website', 'facebook','instagram','twitter','plus','pintrest','about_me','description',
    ];
      
     public function user(){
         return $this->belongsTo('App\User');
      }
}
