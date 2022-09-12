<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class Fondo extends Model{

        protected $table ='fondo';

        public $timestamps = true;

        protected $filllable =['fondo', 'codigo_fondo', 'estado'];


    }
?>