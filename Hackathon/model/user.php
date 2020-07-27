<?php

namespace Model;

use Model\Database;

class user {

  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function all() {
    $sql = "SELECT * FROM usuario WHERE tipo = '1'";
    return $this->db->query($sql);
  }

  public function login($email, $senha) {
    $sql = "SELECT tipo,email,senha,id,nome FROM usuario WHERE senha = $senha AND email = '$email' ";
    return $this->db->query($sql);
  }

  public function nomeUser($id) {
    $sql = "SELECT * FROM usuario WHERE id = $id ";
    return $this->db->query($sql);

  }

  public function buscarUser($cpf) {
    $sql = "SELECT nome,cpf,id FROM usuario WHERE cpf = '$cpf' ";
    return $this->db->query($sql);
  }

  public function registrarUser($nome,$cpf,$telefone,$email,$dataNasc,$senha){
    $sql = "INSERT INTO usuario(nome,cpf,telefone,email,datanasc,tipo,senha)
    values ('$nome','$cpf','$telefone','$email','$dataNasc','1','$senha')";
    $this->db->query($sql);
    $aux = "INSERT INTO usuario(nome,cpf,telefone,email,datanasc,tipo,senha) values ('{$nome}','{$cpf}','{$telefone}','{$email}','{$dataNasc}','1','{$senha}')";
    $sql2 = $this->db->prepare("INSERT INTO query(string) values (:string)");
    $sql2->bindParam(':string', $aux);
    $sql2->execute();
  }

  public function altcad($nome,$cpf,$telefone,$email,$dataNasc,$senha,$id){
    $sql = "UPDATE usuario
    SET nome = '$nome', cpf = '$cpf' ,telefone = '$telefone',email ='$email',datanasc='$dataNasc',tipo = '1',senha = '$senha'
    WHERE id = '$id'";
    $this->db->query($sql);
    $aux = "UPDATE usuario
    SET nome = '{$nome}', cpf = '{$cpf}' ,telefone = '{$telefone}',email ='{$email}',datanasc='{$dataNasc}',tipo = '1',senha = '{$senha}'
    WHERE id = '{$id}'";
    $sql2 = $this->db->prepare("INSERT INTO query(string) values (:string)");
    $sql2->bindParam(':string', $aux);
    $sql2->execute();

  }
}
