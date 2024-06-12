<?php

  include_once('Connect.php');

  include_once('listar-produtos.php');

  $conn = Conexao::conectar();

  $query = "select * from produtos";

//   try {
//     $conn = Conexao::conectar();
//     $sql = $conn->prepare("SELECT * FROM produtos");
//     $sql->execute();
//     $result = $sql->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// } catch (PDOException $erro) {
//     echo "Erro ao listar produtos 1! " . $erro->getMessage();
//     return [];
// }

$materias = new Materia();
$resultado = $materias->ListarMaterias();

// foreach ($resultado as $materia) {
//   echo "<tr>";
//   echo "<td>" . $materia['nome'] . "</td>";
//   echo "<td>" . $materia['descricao'] . "</td>";
//   echo "<td>" . $materia['preco'] . "</td>";
//   echo "<td>" . $materia['img'] . "</td>";
//   echo "</tr>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="produtos.css">
    <title>Nossos produtos</title>

</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="logo.jpg" width="32" height="32" class="d-inline-block align-top icone" alt="">
    Cafeteria
  </a>
  <a class="navbar-brand" href="#">
    <a href="produtos.html">Nossos Produtos</a>
  </a>
</nav>

<?php
// foreach ($resultado as $materia) {
//   echo "<tr>";
//   echo "<td>" . $materia['nome'] . "</td>";
//   echo "<td>" . $materia['descricao'] . "</td>";
//   echo "<td>" . $materia['preco'] . "</td>";
//   echo "<img src='" . $materia['img'] . "'>";

// }
?>



<div class="content">
    <div class="row produtos">
    <?php
foreach ($resultado as $materia) {
  // echo "<tr>";
  // echo "<td>" . $materia['nome'] . "</td>";
  // echo "<td>" . $materia['descricao'] . "</td>";
  // echo "<td>" . $materia['preco'] . "</td>";
  // echo "<img src='" . $materia['img'] . "'>";

 
      echo "<div class='p'>";
        echo "<div class='card' style='width: 18rem;'>";
            echo "<img class='card-img-top' src='" . $materia['img'] . "'>";
            echo "<div class='card-body'>";
              echo "<p class='card-text'>" . $materia['nome'] . "<br> <br> ". $materia['descricao'] . "<br> <br> ". $materia['preco'] ."</p>";
            echo "</div>";
          echo "</div>";

// ";
}
?>
      <!-- <div class="p">
        
      <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top">
            <div class="card-body">
              <p class="card-text"> <br> <br> Um clássico italiano, o cappuccino é uma mistura cremosa de espresso, leite vaporizado e espuma de leite, resultando em uma bebida suave e indulgente, perfeita para começar o dia ou para uma pausa relaxante.</p>
            </div>
          </div>
      </div> -->
      <!-- <div class="p">
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStJZWscibogHVjl7XsMsEFsWJaLMBbU0lZHw&s" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Café Expresso <br> <br> Intenso e encorpado, o espresso é a essência pura do café. Preparado com uma dose única de café moído finamente e extraído sob alta pressão, oferece um sabor rico e concentrado, despertando os sentidos com sua complexidade e aroma robusto.</p>
            </div>
          </div>
      </div>
      <div class="p">
        <div class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/fotos-gratis/close-up-vista-de-sementes-de-cafe-marrom-com-cafe-no-escuro_179666-32787.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Café Preto <br> <br> Simples e revigorante, o café preto é uma escolha clássica para os amantes do café. Feito através da infusão direta de grãos de café moídos em água quente, resulta em uma bebida encorpada e cheia de sabor, com uma energia natural que impulsiona o dia.</p>
            </div>
          </div>
      </div> -->
    </div>
    
  </div>

  <br>
  <br>
  <br>
  <br>
  
</body>

    <footer class="text-center text-lg-start" style="background-color: darkgray;">
  
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">CafeteriaTop.com</a>
      </div>
    </footer>


</html>
