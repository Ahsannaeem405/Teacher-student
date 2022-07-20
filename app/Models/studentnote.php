<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentnote extends Model
{
    use HasFactory;

    protected $fillable = [
      'student_id',
      'title',
      'note_description'
    ];

    public function getNotes(){
        return $this->where('student_id', auth()->user()->id)
            ->get();
    }

    public function storeNotes($data){
        //dd($data);
        return $this->create($data);
    }

    public function editNote($id){
        return $this->find($id);
    }

    public function updateNote($data, $id){

        return $this->where('id', $id)
            ->update($data);
    }

    public function delNote($id){
        return $this->where('id', $id)
            ->delete();
    }
}
