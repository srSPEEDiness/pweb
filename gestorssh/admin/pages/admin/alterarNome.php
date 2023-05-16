<?php
    // Verifica se foi recebido um novo nome para a empresa
    if (isset($_POST['nome_empresa'])) {
        
        // Obtém o novo nome da empresa
        $novo_nome = $_POST['nome_empresa'];
        
        // Abre o arquivo "empresa" em modo de escrita
        $arquivo = fopen("empresa", "w");
        
        // Verifica se o arquivo foi aberto com sucesso
        if (!$arquivo) {
            echo "Erro ao abrir o arquivo";
            exit();
        }
        
        // Escreve o novo nome da empresa no arquivo
        $resultado = fwrite($arquivo, $novo_nome);
        
        // Verifica se a escrita foi realizada com sucesso
        if ($resultado === false) {
            echo "Erro ao escrever no arquivo";
            exit();
        }
        
        // Fecha o arquivo
        fclose($arquivo);
        
        // Mostra mensagem de sucesso
        echo "Nome da empresa alterado com sucesso!";
        
        // Redireciona de volta para a página onde o formulário foi submetido
        header("Location: ../../home.php?page=admin/dados");
        exit();
    }
?>
