<h1>Todos os alunos cadastrados:</h1>

<?php
    $sql = "SELECT id, nome, sobrenome, datadenascimento, curso, email FROM alunos ";

    $resultado = $conexao->query($sql);

    $qtdLinhas = $resultado->num_rows;

    if ($qtdLinhas > 0) {
        while ($produto = $resultado->fetch_assoc()) {
           echo 
           "<div class='card mt-4'>
              <div class='card-body'>
                <h2>Nome: {$produto['nome']}{$produto['sobrenome']}</h2>
                <h4>ID: {$produto['id']}</h4>
                <p>Data de nascimento: {$produto['datadenascimento']}</p>
                <p>Curso: {$produto['curso']}</p>
                <p>E-mail: {$produto[ 'email']}</p>

                 <button class=\"btn btn-success\" onclick=\"location.href='?page=edicao&id={$produto['id']}'\">Editar</button>
                 
                 <button class=\"btn btn-danger\"onclick=\"location.href='?page=exclusao&id={$produto['id']}'\">Deletar</button>

              </div>
           </div>";
        }
    }else {
        echo "<p class=\"alert alert-danger mt-4\">Não há nenhum aluno cadastrado no sistema.</p>";
    }
?>