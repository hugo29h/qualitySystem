<?php
/**
 * Created by PhpStorm.
 * User: CALIDAD_ASIST01
 * Date: 5/11/2018
 * Time: 10:55 AM
 */
    require_once "global.php";

    $conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');

    //Si tenemos un posible error en la conexion lo mostramos
    if(mysqli_connect_errno()){
        printf("Falló la Conexión a Base de Datos: %s\n",mysqli_connect_error());
        exit();
    }

    if(!function_exists('ejecuctarConsulta')){
        function ejecuctarConsulta($sql){
            global $conexion;
            $query = $conexion->query($sql);
            return $query;
        }

        function ejecuctarConsultaSimpleFila($sql){
            global $conexion;
            $query = $conexion->query($sql);
            $row = $query->fetch_assoc();
            return $row;
        }

        function ejecuctarConsulta_retornarID($sql){
            global $conexion;
            $query = $conexion->query($sql);
            return $conexion->insert_id;
        }

        function limpiarCadena($str){
            global $conexion;
            $str = mysqli_real_escape_string($conexion,trim($str));
            return htmlspecialchars($str);
        }
    }