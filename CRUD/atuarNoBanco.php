<?php
   $acaoASerFeita = $_POST["acao"];

   switch ($acaoASerFeita) {
    case "cadastrar":
        $nome = $_POST["nome"];
        $sobrenome  = $_POST["sobrenome"];
        $datadenascimento  = $_POST["datadenascimento"];
        $curso  = $_POST["curso"];
        $email  = $_POST["email"];
        $senhar = $_POST["senhar"];//coloquei sem querer senha com 'r' no final no banco de dados. Mas ta td funcionando certinho S2!

        $sql = "INSERT INTO alunos(id, nome, sobrenome, datadenascimento, curso, email, senhar )
         VALUES('DEFAULT', '{$nome}', '{$sobrenome}', '{$datadenascimento}', '{$curso}','{$email}','{$senhar}' );";
       
       $resultado = $conexao->query($sql);

       if ($resultado) {
            echo "<script>
                   alert('Aluno cadastrado com secesso!')      
                </script>";

            echo "<script>
                   location.href='?page=veralunos'
            </script>";
       }else {
        echo "<script>
        alert('Houve um erro ao cadastrar este aluno. Tente novamente!')      
             </script>";

        echo "<script>
        location.href='?page=veralunos'
            </script>";
       }
       break;



    case "editar":
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $datadenascimento  = $_POST["datadenascimento"];
        $curso  = $_POST["curso"];
        $email  = $_POST["email"];
        $senhar = $_POST["senhar"];
        $id = $_POST["id"];

        $sql = "UPDATE alunos 
                SET nome='{$nome}',
                    sobrenome='{$sobrenome}',
                    datadenascimento='{$datadenascimento}',
                    curso='{$curso}',
                    email='{$email}',
                    senhar='{$senhar}'
                WHERE id={$id}";

        $resultado = $conexao->query($sql);

        if($resultado) {
            echo 
            "<script>
                alert(\"Cadastro editado com sucesso!\")
            </script>";
            echo
            "<script>
                 location.href='?page=veralunos'
            </script>";
        }else {
            echo 
            "<script>
                alert(\"Houve um erro na edição. Tente novamente!\")
            </script>";
            echo
            "<script>
                 location.href='?page=veralunos'
            </script>";
        }
        break;



    case "deletar":
        $id = $_POST["id"];
        $sql = "DELETE FROM alunos WHERE id={$id}";

        $resultado = $conexao->query($sql);

        if ($resultado) {
            echo "<script>
            alert(\"Cadastro deletado com secesso! \")
             </script>";
             echo
             "<script>
               location.href=\"?page=veralunos\";
             </script>";
        }else {
            echo "<script>
            alert(\"Ação cancelada!\")
             </script>";
             echo
             "<script>
               location.href=\"?page=veralunos\";
             </script>";
        }
        break;
    
   }
?>
<script></script>