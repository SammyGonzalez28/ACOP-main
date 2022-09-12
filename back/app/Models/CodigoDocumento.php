<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class CodigoDocumento extends Model{

        protected $table ='codigo_documento';

        public $timestamps = true;

        protected $filllable =['codigo', 'id_tipo','id_fondo', 'id_sub_f', 'id_sub', 'id_serie', 'id_usuario' ];


    }
?>