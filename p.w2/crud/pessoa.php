<?php


class Pessoa
{
    private $Pdo;

    //conexao banco
    public function __construct($dbname, $host, $user, $password){ //construtor 

     try {
            $this->Pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$password);
    }  catch (PDOException $th) {
            echo" erro banco : ".$th->getmessage();
            exit();
    }  catch (Exception $th) {
            echo" erro generico : ".$th->getmessage();
    }

    }
    
    //buscar dados a imprimir na tela
    public function buscarDados(){
        $res = array();
        $cmd = $this->Pdo->query("SELECT * FROM pessoa ORDER BY nome");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;

        $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $indice => $value) {
                echo $indice.": ".$value."<br>"; 
            }
        
    }


    public function cadastroPessoa($Name,$Number,$Emai){
        //verificacao se ja ha registro: 
        $cmd = $this->Pdo->prepare(" SELECT id_pessoa FROM pessoa where email = :e ");
        $cmd-> bindValue(":e",$Emai);
        $cmd->execute();

        if($cmd->rowcount() > 0){ // email ja existe no banco 
                return false;
        }
    }
}