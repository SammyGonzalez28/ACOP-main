<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class Usuario extends Model{

        protected $table ='usuario';

        public $timestamps = true;

        protected $filllable =['correo', 'clave', 'nombres', 'apellidos', 'cargo', 'telefono', 'estado','rol'];


    }
?>