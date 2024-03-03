
<h2></h2>
<?php
  $id = $_GET["id"];
  $sql = "SELECT * FROM alunos  WHERE id={$id};";

  $resultado = $conexao->query($sql);
  $quantidadedeLinhas = $resultado->num_rows;

  if ($quantidadedeLinhas > 0) {
    $produto = $resultado->fetch_assoc();
    echo "<h1>Você tem certeza que deseja deletar o cadastro deste aluno?</h1>";
    echo "<div class=\"card mt-4\">
          <div class=\"card-body\">
            <h2>Aluno(a): {$produto['nome']}{$produto['sobrenome']}</h2>
            <h4>ID:{$produto['id']} </h4>
            <p>Data de nascimento: {$produto['datadenascimento']}</p>
            <p>Curso: {$produto['curso']}</p>
            <p>E-mail:{$produto['email']}</p>

            <form action=\"?page=atuarNoBanco\" method=\"post\">
               <input type=\"hidden\" name=\"acao\" value=\"deletar\">
               <input type=\"hidden\" name=\"id\" value=\"{$produto['id']}\">
               <button type=\"submit\" class=\"btn btn-success\">SIM</button>

              
            </form>
             <button class=\"btn btn-danger mt-2 \" onclick=\"location.href='?page=veralunos'\">NÃO</button

          </div>
    </div>";
  }else {
    echo "<p class=\"alert alert-danger mt-4\">Cadastro não encontrado.</p>";
  }


?>
<p></p>