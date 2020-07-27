<?php

// Includes - framework
include './model/Database.php';
include './model/user.php';
include './model/hoteis.php';
include './model/reserva.php';
include './controller/userController.php';
include './controller/reservaController.php';

// Tratamento das rotas
use Controller\userController;
use Controller\reservaController;

$op = $_GET['op'];

// Definição das rotas


if ( $op == 1 ) {
  $userController = new userController;
  $userController->listarTodos();
}
if ( $op == 2 ) {
  $userController = new userController;
  $userController->acesso($_POST);
}
if ($op == 3) {
  $reservaController= new reservaController;
  $reservaController->listarTodos();
}

if ($op == 4){
  $reservaController = new reservaController;
  $reservaController->insereReserva($_POST);
}

if ($op == 5) {
  $userController = new userController;
  $userController->insereUser($_POST);
}

if($op == 6){
  $userController = new userController;
  $userController->retorno();
}
if ($op == 7){
  $reservaController = new reservaController;
  $reservaController->listarMyReservas();
}

if($op == 8){
  $reservaController = new reservaController;
  $reservaController-> alterarReserva($_GET);
}

if ($op == 9) {
  $userController = new userController;
  $userController->buscarUsuario($_POST);
}

if($op == 10){
  $userController = new userController;
  $userController->listarUsuario();
}

if($op == 11){
  $reservaController = new reservaController;
  $reservaController-> removeReserva($_GET);
}
if($op == 12){
  $userController = new userController;
  $userController->viewUpdtCad();
}
if($op == 13){
  $userController = new userController;
  $userController->updtUser($_POST);
  $userController->retorno();
}

if($op == 14){
  $reservaController = new reservaController;
  $reservaController-> addReserva($_GET);
}

if($op == 15){
  $userController = new userController;
  session_start();
  $userController->retornoFunc();
}

if($op == 16){
  $reservaController = new reservaController;
  $reservaController->insereReservaFunc($_POST);
}

if($op == 17){
  $userController = new userController;
  $userController->updt($_GET);
}

if($op == 18){
  $userController = new userController;
  $userController->updtFunc($_POST);
  $userController->retornoFunc();
}

if($op == 19){
  $reservaController = new reservaController;
  $reservaController->lista($_GET);
}

if($op == 20){
  $reservaController = new reservaController;
  $reservaController-> alterarReserva($_GET);
}

if($op == 21){
  $reservaController = new reservaController;
  $reservaController-> removeReservaFunc($_GET);
}

if($op == 22){
  $reservaController = new reservaController;
  $reservaController->listarReserva();
}

if($op == 23){
  $reservaController = new reservaController;
  $reservaController->listarReservaData($_POST);
}
