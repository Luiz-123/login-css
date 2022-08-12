<?php

$estudantes = array(

   array("nome" => "Bruno", "idade" => "35", "turma" => "203"),

   array("nome" => "Alex", "idade" => "21", "turma" => "203"),

   array("nome" => "Laura", "idade" => "20", "turma" => "201"),

   array("nome" => "Matheus", "idade" => "32", "turma" => "203"),

   array("nome" => "Emerson", "idade" => "23", "turma" => "200"),

   array("nome" => "Sofia", "idade" => "19", "turma" => "201"),

   array("nome" => "Clara", "idade" => "22", "turma" => "202"),

);

echo "Resultado da contagem normal: " . count($estudantes) ."<br />";

echo "Resultado da contagem recursiva: " . count($estudantes,1);

?>


<?php

$nome = array("","./img/background-hd/01.jpg", "./img/background-hd/02.jpg", "./img/background-hd/03.jpg", "./img/background-hd/04.jpg", "./img/background-hd/05.jpg");

/*
echo "O array tem um total de " . count($nome) . " elementos. <br /><br />";

for ($k=1; $k <count($nome); $k++){
    echo "O elemento armazenado no índice $k é: $nome[$k] <br />";
}

echo $aleatorio;

echo $nome[$aleatorio];
*/

$contador = count($nome) -1; // Criamos uma variavel para contar (count();) os dados que estão dentro do array.
$aleatorio = rand(1,$contador); 


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    
</head>
<body>
<img src="<?php echo $nome[$aleatorio]; ?>"/>
</body>
</html>