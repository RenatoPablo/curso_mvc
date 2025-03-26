<?php

namespace app\models;

class Crud extends Connection
{
    public function create()
    {
        $nome =filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email =filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        $conn = $this->connect();
        $sql = "INSERT INTO tb_person(nome, email) VALUES(:NOME, :EMAIL)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':NOME'=>$nome,
            ':EMAIL'=>$email
        ]);

        return $stmt;
    }
    
    public function read()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM tb_person ORDER BY nome";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}