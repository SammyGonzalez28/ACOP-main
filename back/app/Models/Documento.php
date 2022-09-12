<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class Documento extends Model{

        protected $table ='documento';

        public $timestamps = true;

        protected $filllable =['id_codigo', 'id_tipo', 'asunto', 'generado', 'id_usu_firmado', 'id_usu_elaborado', 'id_usus_receptor', 'nombre_remitente', 'fecha_recepcion', 'ubicacion'];


    }
?>