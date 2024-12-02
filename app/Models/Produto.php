<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory;

  protected $table = 'produtos';

  // Campos permitidos para inserção/atualização em massa
  protected $fillable = ['nome', 'status', 'estoque', 'fornecedor'];
}
