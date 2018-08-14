<?php

namespace SATUTeM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Declaration extends Model
{
    protected $fillable = ['user_id', 'period','declaration_type','excercise'];

    public function saveDeclaration($data){
        $this->user_id = auth()->user()->id;
        $this->period = $data['period'];
        $this->declaration_type = $data['declaration_type'];
        $this->excercise = $data['excercise'];
        $this->save();
        return 1;
    }
}
