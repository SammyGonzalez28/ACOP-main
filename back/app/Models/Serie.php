<?php
    namespace App\Models;

    use Illuminate\DataBase\Eloquent\Model;

    class Serie extends Model{

        protected $table ='serie';

        public $timestamps = true;

        protected $filllable =['serie', 'codigo_serie', 'estado'];


    }
?>