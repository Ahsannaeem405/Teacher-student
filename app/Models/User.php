<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
        'bio',
        'linkedin_url',
        'stripe_secret_key',
        'stripe_public_key',
        'subscription_expiry_date',
        'remaining_vids',
        'zoom_api',
        'zoom_secret'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getData(){
        return $this->where('id', auth()->user()->id)
            ->first();
    }

    public function updateProfile($data, $id){
        return $this->where('id', $id)
            ->update($data);
    }

    public function getUser(){
        return $this->where('role', 3)->get();
    }

    public function getTechers(){
        return $this->where('role', 2)->get();
    }

    public function updateTeacher($data, $id){
        //dd($data);
        return $this->where('id', $id)
                ->update($data);
    }

    public function teacherDel($id){
        return $this->where('id', $id)
            ->delete();
    }

    public function updateStudent($data, $id){
        return $this->where('id', $id)
                ->update($data);
    }

    public function studentDel($id){
        return $this->where('id', $id)
            ->delete();
    }

    public function getTeacherData(){
        return $this->where('id', auth()->user()->id)
            ->first();
    }

    public function updateMyProfile($data){

        return $this->where('id', auth()->user()->id)
            ->update($data);
    }

    public function delUser($id){
        return $this->where('id', $id)
            ->delete();
    }

    public function storeExpiry($data){
        return $this->where('id', auth()->user()->id)
            ->update($data);
    }

    public function course()
    {
        return $this->belongsTo(CreateCourse::class, 'id', 'teacher_id');
    }

    public function getStudent($id){
        return $this->where('id', $id)
            ->get(['id','name', 'image']);
    }

    public function studentChats(){
        return $this->hasMany(Chat::class, 'to_id');
    }

    public function teacherChats(){
        return $this->hasMany(Chat::class, 'from_id');
    }

    public function getUserPassword(){
        return $this->where('id', auth()->user()->id)
            ->first('password');
    }

    public function resetPassword($data){
        return $this->where('id', auth()->user()->id)
            ->update($data);
    }

    public function subscription(){
        return $this->hasOne(Subscription::class);
    }

    public function getExpiry(){
        return $this->where('id', auth()->user()->id)
            ->first('subscription_expiry_date');
    }

    public function checkVids(){
        return $this->where('id', auth()->user()->id)
            ->first(['remaining_vids', 'subscription_expiry_date']);
    }

    public function updateRemainingVids($vids_left){
        return $this->where('id', auth()->user()->id)
            ->update([
               'remaining_vids' => $vids_left
            ]);
    }
    public function meets(){
        return $this->hasMany(meeting::class, 'user_id');
    }
}
