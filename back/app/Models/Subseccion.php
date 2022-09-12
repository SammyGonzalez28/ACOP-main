<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class Subseccion extends Model{

        protected $table ='subseccion';

        public $timestamps = true;

        protected $filllable =['subseccion', 'codigo_sub', 'estado'];


    }
?>