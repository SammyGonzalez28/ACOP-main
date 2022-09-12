<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class TipoDocumento extends Model{

        protected $table ='tipo_documento';

        public $timestamps = true;

        protected $filllable =['nombre', 'descripcion', 'codigo_tipo'];


    }
?>