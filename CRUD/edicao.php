<h1>Página de Edição:</h1>

<?php
  $id = $_GET["id"];
  $sql = "SELECT * FROM alunos WHERE id={$id}";
  $resultado = $conexao->query($sql);
  $produto = $resultado->fetch_object();


  $nomeProduto = $produto->nome;
  $sobrenomeProduto = $produto->sobrenome;
  $datadenascimentoProduto = $produto->datadenascimento;
  $cursoProduto = $produto->curso;
  $emailProduto = $produto->email;
 
?>
<form action="?page=atuarNoBanco" method="post" class="mt-4">
       
       <input type="hidden" name="acao" value="editar">
       <input type="hidden" name="id" value="<?php echo $id ?>">
       <!--nome-->
       <label for="nome">Nome do Aluno:</label>
       <input type="text" name="nome" placeholder="Digite o nome do aluno..." class="form-control mt-2 mb-3" value="<?php echo $nomeProduto;?>" >
       <!--sobrenome-->
       <label for="sobrenome">Sobrenome do Aluno:</label>
       <input type="text" name="sobrenome" placeholder="Digite o sebrenome do aluno..." class="form-control mt-2 mb-3" value="<?php echo $sobrenomeProduto?>">
       <!--data de nascimento-->
       <label for="datadenascimento">Data de nascimento do Aluno:</label>
       <input type="text" name="datadenascimento" placeholder="Digite a data de nascimento do aluno..." class="form-control mt-2 mb-3" value="<?php echo $datadenascimentoProduto?>">
       <!--curso-->
       <label for="curso">curso do Aluno:</label>
       <input type="text" name="curso" placeholder="Digite o curso do aluno..." class="form-control mt-2 mb-3" value="<?php echo $cursoProduto?>">
       <!--e-mail-->
       <label for="email">E-mail do Aluno:</label>
       <input type="text" name="email" placeholder="Digite o e-mail do aluno..." class="form-control mt-2 mb-3" value="<?php echo $emailProduto?>">
       <!--senha-->
       <label for="senhar">Senha do Aluno:</label>
       <input type="password" name="senhar" placeholder="Redefinir senha do aluno..." class="form-control mt-2 mb-3">

       <button type="submit" class="btn btn-success">Editar</button>
</form>