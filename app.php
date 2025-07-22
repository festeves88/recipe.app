<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'receita_app');
if ($con) {
    echo "Conexão com a base de dados concluída!\n";
} else {
    echo "Erro na conexão com a base de dados\n";
}


$fim = false;



while (!$fim) {
    //menu
    echo "escolha uma opção:\n";
    echo "Inserir uma receita -> 1\n";
    echo "Inserir uma categoria->2\n";

    
    echo "Sair do programa -> 0\n";

    //Receber seleção das opções do menu.
    $menu = readline("");

    switch ($menu) {
        case 0:
            echo "Adeus!";
            $fim = true;
            break;

        case 1:
            mostrarReceitas($con);
            break;
         case 2:
            mostrarcategoriaReceitas($con);   

    }

function mostrarReceitas($con)
{
    $id = readline("Nome da receita: ");
    $modo = readline("Modo de Preparação: ");
    $tempo =readline("tempo de preparação:");
    $doses =readline("doses estimadas:");
    $ingredientes=readline("adicionar 3 ingredientes");
    $categoria =readline(" género de receita");

    // Criar comando SQL
    $sql = "INSERT INTO RECEITAS (nome da receita,modo de preparação,tempo de preparação,doses estimadas,adicionar 3 ingredientes,género de receita) VALUES ('$id', '$modo','$tempo','$doses','$ingredientes','$categoria')";

    //Executar o comando SQL
    if (mysqli_query($con, $sql)) {
        echo "receita inserida com sucesso\n";
    } else {
        echo "Erro ao inserir a receita\n";
    }

}

function mostrarcategoriaReceitas($con){
    $id= readline("id das categorias");
    $nome= readline("nome das categorias das receitas");
    $sql= "INSERT INTO Categoria( id das categorias, nome das categorias das receitas) VALUES('$id','$nome',)";

    if (mysqli_query($con, $sql)) {
        echo "categoria inserida com sucesso\n";
    } else {
        echo "Erro ao inserir a categoria\n";
    }

}











mysqli_close($con);
}