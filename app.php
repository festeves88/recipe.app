<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'receita_app');
if ($con) {
    echo "Conexão com a base de dados concluída!\n";
} else {
    echo "Erro na conexão com a base de dados\n";
}


$fim = false;


while (!$fim) 

    //menu
    echo "escolha uma opção:\n";
    echo "Inserir uma receita -> 1\n";
    echo "Listar todas as receitas->2\n";
    echo "Atualizar receitas existentes->3\n";
     echo "Apagar receitas->4\n";

    
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
            listarReceitas($con); 
         
        case 3: atualizarReceitas($con);
             break;
        case 4: apagarReceitas($con) ;  


    }

function mostrarReceitas($con)
{
    $id = readline("Nome da receita: ");
    $modo = readline("Modo de Preparação: ");
    $tempo =readline("tempo de preparação:");
    $doses =readline("doses estimadas:");
    

    // Criar comando SQL
    $sql = "INSERT INTO RECEITAS (nome da receita,modo de preparação,tempo de preparação,doses estimadas) VALUES ('$id', '$modo','$tempo','$doses')";

    //Executar o comando SQL
    if (mysqli_query($con, $sql)) {
        echo "receita inserida com sucesso\n";
    } else {
        echo "Erro ao inserir a receita\n";
    }

}

function listarReceitas($con){
    $id= readline("Nome da receita");
    $nome= readline("lista das receitas");
    $sql = "INSERT INTO RECEITAS (nome da receita,modo de preparação,tempo de preparação,doses estimadas) VALUES ('$id', '$nome')";

    //Executar o comando SQL
    if (mysqli_query($con, $sql)) {
        echo "receita inserida com sucesso\n";
    } else {
        echo "Erro ao inserir a receita\n";
    }

}

function atualizarReceitas($con){
    $id= readline(" atualizar receitas existentes");
 } 



function apagarReceitas($con){
    mostrarReceitas($con,false);
    $id = readline(" ID da receita que deseja remover:");
    $sql = "SELECT id FROM receitas WHERE id =$id";
    $verificacao = mysqli_query($con,$sql);
    if (mysqli_num_rows ($verificacao) == 0){
        echo ("Erro: Receita não encontrada");
        return;
    

}



function voltarMenu(){
    $input = "";
    echo "Selecione 0 Para voltar: ";
    while ($input != "0") {
        $input = readline("");
    }
}






mysqli_close($con);
}