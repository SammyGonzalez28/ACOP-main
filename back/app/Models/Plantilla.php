<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class Plantilla extends Model{

        protected $table ='plantilla';

        public $timestamps = true;

        protected $filllable =['nombre', 'descripcion', 'estado', 'id_usuario', 'ubicacion'];


    }
?>