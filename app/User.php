<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'country', 'password', 'dob',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Function to load my friends
    function friendsOfMine() {
        return $this->belongsToMany('App\User', 'friends', 'user_id', 'friend_id');
    }

    //Function to get who has me as a friend
    function friendsOf() {
        return $this->belongsToMany('App\User', 'friends', 'friend_id', 'user_id');
    }

    //Function to get who has me as a friend
    function friends() {
        return $this->friendsOfMine()->wherePivot('accepted', true)->get()->merge($this->friendsOf()->wherePivot('accepted', true)->get());
    }

    public function profile() {
        return $this->hasOne('App\Profile');
    }

    function friendRequests() {
        return $this->friendsOfMine()->wherePivot('accepted', false)->get();
    }

    function friendRequestsPending() {
        return $this->friendsOf()->wherePivot('accepted', false)->get();
    }

    function hasFriendRequestPending(User $user) {
        return (bool) $this->hasFriendRequestPending()->where('id', $user->id)->count();
    }

    function hasFriendRequestAccepted(User $user) {
        return (bool) $this->friendRequests()->where('id', $user->id)->count();
    }
    
    function addFriend(User $user){
        $this->friendsOf()->attach($user->id);
    }
    
    function acceptFriendRequest(User $user){
        $this->friendRequests()->where('id',$user->id)->first()->pivot->update([
           'accepted'=>TRUE 
        ]);   
    }
    
    function isFriendsWith(User $user){
       return (bool)$this->friends()->where('id',$user->id)->count(); 
    }

}
