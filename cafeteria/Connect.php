<?php 

class Conexao{

    
    public static function conectar(){
        
        try{
            $conn = new PDO("mysql:host=localhost;dbname=Cafeteria", 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        }
        catch(PDOException $erro)
        {
            echo "Conexão Falhou! => " . $erro->getMessage();
            return null;
        }    
    }
}



    // $servidor = "localhost";
	// $usuario = "root";
	// $senha = "positivo";
	// $dbname = "Cafeteria";
	
	// //Criar a conexao
	// $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

?>