<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class SubseccionF extends Model{

        protected $table ='subseccion_f';

        public $timestamps = true;

        protected $filllable =['subseccion_f', 'codigo_sub_f', 'estado'];


    }
?>