<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato_VagaEmprego extends Model
{
    use HasFactory;
    protected $fillable = ['candidato_id','vaga_id'];
    protected $table = 'candidato_vaga_empregos';

    public function candidatos(){

    }

    public function vagas(){

    }
}
