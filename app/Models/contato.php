<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contato extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contatos';
    protected $primaryKey = 'id_contato';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['nome', 'email', 'numero', 'mensagem'];
}
