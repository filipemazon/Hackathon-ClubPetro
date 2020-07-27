<?php

namespace Controller;

use Model\user;

class userController {

  public function acesso($request){
    $user = new user;
    $email = $request['email'];
    $senha = $request['senha'];
    $lista = $user->login($email, $senha);

    foreach( $lista as $linha ){
    if($linha['tipo'] == 1){
      session_start();
      $_SESSION['id'] = $linha['id'];
      $lista2 = $user->nomeUser($_SESSION['id']);
      include './view/user/areaUser.php';
      die();
      }
    if($linha['tipo'] == 2){
      session_start();
      $_SESSION['id'] = $linha['id'];
      $lista2 = $user->nomeUser($_SESSION['id']);
      include './view/user/areaFunc.php';
      die();
      }
    }
    print "<script> alert('Usuário não encontrado.'); window.history.go(-1); </SCRIPT>\n";
  }

  public function buscarUsuario($request){
    $user = new user;
    $cpf = $request['cpf'];
    $lista = $user->buscarUser($cpf);
    include './view/reserva/buscarUsuario.php';
  }

  public function listarUsuario(){
    $user = new user;
    $lista = $user->all();
    include './view/reserva/buscarUsuario.php';
  }

  public function insereUser($request){
    $nome = $request['nome'];
    $email = $request['email'];
    $datanasc = $request['datanasc'];
    $cpf = $request['cpf'];
    $tel = $request['tel'];
    $senha = $request['senha'];

    $user = new user;

    $user->registrarUser($nome,$cpf,$tel,$email,$datanasc,$senha);

    print "<script> alert('Registrado com sucesso.') </SCRIPT>\n";
    include './view/user/login.php';
    }

    public function retorno(){
      $user = new user;
      session_start();
      $lista2 = $user->nomeUser($_SESSION['id']);
      include './view/user/areaUser.php';
    }

    public function retornoFunc(){
      $user = new user;
      $lista2 = $user->nomeUser($_SESSION['id']);
      include './view/user/areaFunc.php';
    }

    public function viewUpdtCad(){
      $user = new user;
      session_start();
      $lista = $user->nomeUser($_SESSION['id']);
      include './view/user/updtUser.php';
    }

    public function updtUser($request){
      $nome = $request['nome'];
      $email = $request['email'];
      $datanasc = $request['datanasc'];
      $cpf = $request['cpf'];
      $tel = $request['tel'];
      $senha = $request['senha'];
      session_start();
      $id = $_SESSION['id'];

      $user = new user;

      $user->altcad($nome,$cpf,$tel,$email,$datanasc,$senha,$id);
    }


    public function updt($request){
      $user = new user;
      $id = $request['id'];
      session_start();
      $_SESSION['idU'] = $id;
      $lista = $user->nomeUser($id);
      include './view/user/updtUserFunc.php';
    }

    public function updtFunc($request){
      $nome = $request['nome'];
      $email = $request['email'];
      $datanasc = $request['datanasc'];
      $cpf = $request['cpf'];
      $tel = $request['tel'];
      $senha = $request['senha'];
      session_start();
      $id = $_SESSION['idU'];

      $user = new user;

      $user->altcad($nome,$cpf,$tel,$email,$datanasc,$senha,$id);
    }
}
