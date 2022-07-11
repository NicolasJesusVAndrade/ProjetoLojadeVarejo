<?php
namespace APP\Controller;

use APP\Model\Provider;
use APP\Model\Validation;
use APP\Utils\Redirect;

require_once"../../vendor/autoload.php";

if (empty($_POST)){
    Redirect::redirect(
        message:"Requisição inválida!",
        type:"error"
    );
}

$ProductName=$_POST["email"];
$ProductName=$_POST["contato"];
$ProductName=$_POST["CNPJ"];
$ProductName=$_POST["nome"];

$error = array();

if(!Validation::validateName($ProductName)){
   array_push($error, "O email deve conter @");
}

if(!Validation::validateName($ProductName)){
   array_push($error, "O contato deve conter 9 caracteres!!!");
}

if(!Validation::validateName($ProductName)){
    array_push($error, "O CNPJ deve conter 11 caracteres!!!");
}

if(!Validation::validateName($ProductName)){
 array_push($error, "O nome deve conter apenas letras!!!");



 }

 if($error){
    Redirect::redirect(
        message: $error,
        type:'warning'
    );
 }else{
    $Provider = new Provider(
        Email: $ProductName,
        Contato: $ProductName,
        CNPJ: $ProductName,
        nome: $ProductName
    );
    //-TODO-Salvar-no-banco-de-dados

    Redirect::redirect(
        message: "Provedor cadastrado com sucesso!!!"
    );

}