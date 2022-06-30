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
        'stripe_public_key'
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
    public function course()
    {
        return $this->belongsTo(CreateCourse::class, 'id', 'teacher_id');
    }
}
