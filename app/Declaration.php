<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Declaration extends Model
{
    protected $fillable = ['user_id', 'period', 'date', 'operation','declaration','declaration_type','excercise', 'capture'];

    public function saveDeclaration($data){
        $this->user_id = auth()->user()->id;
        $this->period = $data['period'];
        $this->date = $data['date'];
        $this->operation = $data['operation'];
        $this->declaration = $data['declaration'];
        $this->declaration_type = $data['declaration_type'];
        $this->excercise = $data['excercise'];
        $this->capture = $data['capture'];
        $this->save();
        return 1;
    }
}
