<?php
if (isset($_GET['query']) && strlen($_GET['query']) >= 3) {
    $termo = $_GET['query'];

    // Normaliza o termo para busca (sem acento e minúsculo)
    $termoSQL = '%' . iconv('UTF-8', 'ASCII//TRANSLIT', strtolower($termo)) . '%';

    try {
        $pdo = new PDO('sqlite:BancoDeDadosdeclaracao.db');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta ignorando acentos e maiúsculas/minúsculas
        $sql = "
        SELECT id, NOME FROM alunos
        WHERE REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(LOWER(NOME), 'á', 'a'), 'é', 'e'), 'í', 'i'), 'ó', 'o'), 'ú', 'u'), 'ç', 'c')
              LIKE REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(LOWER(:termo), 'á', 'a'), 'é', 'e'), 'í', 'i'), 'ó', 'o'), 'ú', 'u'), 'ç', 'c')
        LIMIT 10";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':termo', $termoSQL, PDO::PARAM_STR);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($resultados) {
            $contador = 1;
            foreach ($resultados as $linha) {
                // Formata o nome com iniciais maiúsculas
                $nomeFormatado = ucwords(strtolower($linha['NOME']));

                echo '<div class="resultado">';
                echo    '<p class="idResultado">' . $contador . '</p>';
                echo    '<p class="nomesResultado">' . htmlspecialchars($nomeFormatado) . '</p>';
                echo    '<a href="visualizar.php?id=' . $linha['id'] . '" class="visualizarDeclaracao fa fa-eye" title="Visualizar Declaração"></a>';
                echo    '<a href="editar.php?id=' . $linha['id'] . '" class="editarDados fa fa-pencil-square-o" title="Editar dados do Aluno"></a>';
                echo '</div>';
                $contador++;
            }
        } else {
            echo '<div class="resultado"><p class="nomesResultado">Nenhum resultado encontrado.</p></div>';
        }

    } catch (PDOException $e) {
        echo '<div class="resultado"><p class="nomesResultado">Erro: ' . htmlspecialchars($e->getMessage()) . '</p></div>';
    }
}
?>
