<h1>Página de Cadastro:</h1>

<form action="?page=atuarNoBanco" method="post" class="mt-4">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3"><!--nome-->
        <label for="nome" class="mb-2">Nome do Aluno:</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o primeiro nome do aluno..." required>
    </div>
    <div class="mb-3"><!--sobrenome-->
          <label for="sobrenome" class="mb-2">Sobrenome do Aluno:</label>
          <input type="text" name="sobrenome" class="form-control" placeholder="Digite o sobrenome do aluno..." required>
    </div>
    <div class="mb-3"><!--data de nascimento-->
    <label for="datadenascimento" class="mb-2">Data de nascimento do Aluno:</label>
          <input type="text" name="datadenascimento" class="form-control" placeholder="Digite a data de nascimento do aluno..." required>
    </div>
    <div class="mb-3"><!--curso-->
    <label for="curso" class="mb-2">Curso do Aluno:</label>
          <input type="text" name="curso" class="form-control" placeholder="Digite o curso do aluno..."required>
    </div>
    <div class="mb-3"><!--e-mail-->
    <label for="email" class="mb-2">E-mail do Aluno:</label>
          <input type="text" name="email" class="form-control" placeholder="Digite o e-mail do aluno..."required>
    </div>
    <div class="mb-3"><!--senha-->
    <label for="senhar" class="mb-2">Senha do Aluno:</label>
          <input type="text" name="senhar" class="form-control" placeholder="Digite a senha do aluno..."required>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<?php?>