<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function checkUser($email){
        #Criar a variável com a consulta SQL
        $sql = "SELECT email FROM usuarios WHERE email = :e";

        #Chamar o método prepare passando a consulta
        $stmt = $this->pdo->prepare($sql);

        #Para cada apelido um bindValue:
        $stmt->bindValue(":e", $email);

        #Executar o comando
        $stmt->execute();

        #SELECT
        return $stmt->rowCount() > 0;
    }

    public function checkPass($email,$senha){
         #Criar a variável com a consulta SQL
        $sql = "SELECT email FROM usuarios WHERE email = :e";

        #Chamar o método prepare passando a consulta
        $stmt = $this->pdo->prepare($sql);

        #Para cada apelido um bindValue:
        $stmt->bindValue(":e", $email);

        #Executar o comando
        $stmt->execute();

        #SELECT
        return $stmt->rowCount() > 0;
    }

    public function conn() {
        $dns = "mysql:dbname=banco;host=localhost";
        $user = "root";
        $pass = "";

        try {
            $this->pdo = new PDO($dns, $user,$pass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}