<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Define colunas do timestamp
     */
    const CREATED_AT = 'criacao';
    const UPDATED_AT = 'atualizacao';

    /**
     * Define nome da tabela do model
     *
     * @var string
     */
    protected $table = 'artigo';

    /**
     * Define coluna chave primária da tabela
     *
     * @var string
     */
    protected $primaryKey = 'codigo';
}
