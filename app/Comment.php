<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Define nome da tabela do model
     *
     * @var string
     */
    protected $table = 'comentario';

    /**
     * Define coluna chave primária da tabela
     *
     * @var string
     */
    protected $primaryKey = 'codigo';

    /**
     * Define tipo da chave primária
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Define que a chave primária não é auto_increment
     *
     * @var boolean
     */
    public $incrementing = false;

    /**
     * Define que a tabela não terá colunas de timestamp
     *
     * @var boolean
     */
    public $timestamps = false;

}
