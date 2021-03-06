<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sottocategoria extends Model
{
    protected $primaryKey = "id_sotto_categoria";
    protected $table = "sotto_categoria";
    public $timestamps = false;

    protected $fillable = ['id_categoria', 'nome_sotto_categoria', 'percorso_foto', 'id_categoria'];

    public function categoria()
    {
        return $this->hasOne('App\Categoria', 'id_categoria', 'id_categoria');
    }

    public function prodotti()
    {
        return $this->hasMany('App\Prodotto', 'id_sotto_categoria', 'id_sotto_categoria');
    }

}
