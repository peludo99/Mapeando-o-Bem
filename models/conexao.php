<?php
// AREA PHP

// CRIAR CLASSE PESSOA
class Conexao
{
    // CRIAR VARIAVEL PRIVADA $pdo
    private $pdo;
    // CRIAR CONSTRUTORES COM PARAMETROS (BANCO,USUARIO,SENHA)
    public function __construct($dbname, $host, $user, $pass)
    {
        // TESTA SE O BANCO FOI ENCONTRADO
        try {

            $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $pass);
        } catch (PDOException $e) {
            exit();
        } catch (Exception $e) {

            exit();
        }
    }

    // FUNÇÃO CADASTRAR USUARIO COM PARAMETROS(NOME USUARIO, EMAIL,SENHA)

    function Cadastrarusuario($nick, $email, $senha)
    {

        // VERIFICA SE O USUARIO JA ESTAR CADRASTRADO COM O COMANDO PREPARE E SALVA NA VARIAVEL $comando
        $comando = $this->pdo->prepare("SELECT idcadastro FROM cadastros WHERE email = :n");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $comando->bindValue(":n", $email);
        // EXECUTA OS COMANDOS ANTERIORES
        $comando->execute();

        // VERIFICA SE COMANDO DA LINHA 31 RETORNOU ALGO ATRAVEZ DA FUNÇÃO ROWCOUNT 
        if ($comando->rowCount() > 0) {

            // SE VERDADEIRO O CADASTRO JA EXISTE

            Mensagem("OPS!, Essa Conta ja foi cadastrada!", "danger");

            // RETORNA FALSO
            return false;
        } else {

            // SE FALSO ADICIONA O CADASTRO DO USUARIO AO BANCO
            $comando = $this->pdo->prepare("INSERT INTO  cadastros(nick, email, senha) VALUES(:n, :e, :s)");
            // DIRECIONA O VALOR DE ":n, :e :s" PARA OS ATRIBUTOS  COM O COMANDO BINDVALUE
            $comando->bindValue(":n", $nick);
            $comando->bindValue(":e", $email);
            $comando->bindValue(":s", $senha);
            // EXECUTA OS COMANDOS
            $comando->execute();
            Mensagem("A conta foi cadastrada!", "success");
            // RETORNA VERDADEIRO
            return true;
        }

        // FIM FUNÇÃO CADASTRAR PESSOA
    }


    // FUNÇÃO BUSCAR DADOS COM PARAMETRO EMAIL
    function BuscarDados($email)
    {
        // CRIA ARRAY $res
        $res = array();
        // VERIFICA SE O EMAIL ESTA NO BANCO COM O COMANDO PREPARE
        $cmd = $this->pdo->prepare("SELECT * FROM cadastros WHERE email = :n ORDER BY idcadastro");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $cmd->bindValue(":n", $email);
        // EXECUTA OS COMANDOS ACIMA
        $cmd->execute();
        // TRANSFORMA O RESULTADO EM UMA LISTA
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        // RETORNA A LISTA
        return $res;
    }

    function BuscarDadosPermissoesSIM($email)
    {
        // CRIA ARRAY $res
        $res = array();
        // VERIFICA SE O EMAIL ESTA NO BANCO COM O COMANDO PREPARE
        $cmd = $this->pdo->prepare("SELECT * FROM cadastros WHERE email = :n and permissoes = 1");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $cmd->bindValue(":n", $email);
        // EXECUTA OS COMANDOS ACIMA
        $cmd->execute();
        // TRANSFORMA O RESULTADO EM UMA LISTA
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        // RETORNA A LISTA
        return $res;
    }

    function BuscarDadosSenha($email, $senha)
    {
        // CRIA ARRAY $res
        $res = array();
        // VERIFICA SE O EMAIL ESTA NO BANCO COM O COMANDO PREPARE
        $cmd = $this->pdo->prepare("SELECT * FROM cadastros WHERE email = :n and senha = :s ORDER BY idcadastro");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $cmd->bindValue(":n", $email);
        $cmd->bindValue(":s", $senha);
        // EXECUTA OS COMANDOS ACIMA
        $cmd->execute();
        // TRANSFORMA O RESULTADO EM UMA LISTA
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        // RETORNA A LISTA
        return $res;
    }

    function addPost($conteudo, $file, $email, $nomeusuario, $data, $id)


    {

        $cont = nl2br($conteudo);

        // SE FALSO ADICIONA O CADASTRO DO USUARIO AO BANCO
        $comando = $this->pdo->prepare("INSERT INTO  publi(conteudo,files,email_user,nome, data, id_user) VALUES(:c, :f, :e, :n, :d, :i)");
        $comando->bindValue(":c", "$cont");
        $comando->bindValue(":f", "$file");
        $comando->bindValue(":e", "$email");
        $comando->bindValue(":n", "$nomeusuario");
        $comando->bindValue(":d", "$data");
        $comando->bindValue(":i", "$id");
        // EXECUTA OS COMANDOS
        $comando->execute();
        // RETORNA VERDADEIRO
        return true;
    }

    function adduserpost($file, $email)


    {


        // SE FALSO ADICIONA O CADASTRO DO USUARIO AO BANCO
        $comando = $this->pdo->prepare("UPDATE cadastros
        SET img_perfil = :f
        WHERE email = :e");
        $comando->bindValue(":f", "$file");
        $comando->bindValue(":e", "$email");

        // EXECUTA OS COMANDOS
        $comando->execute();
        // RETORNA VERDADEIRO
        return true;
    }

    function buscarimguser($email)


    {


        // SE FALSO ADICIONA O CADASTRO DO USUARIO AO BANCO
        $comando = $this->pdo->prepare("SELECT img_perfil FROM `cadastros` WHERE email = :e");
      
        $comando->bindValue(":e", "$email");

        // EXECUTA OS COMANDOS
        $comando->execute();
        $res = $comando->fetchAll(PDO::FETCH_ASSOC);
    
        return $res;
    }

    
    function buscarimguserbyid($id)


    {


        // SE FALSO ADICIONA O CADASTRO DO USUARIO AO BANCO
        $comando = $this->pdo->prepare("SELECT img_perfil FROM `cadastros` WHERE idcadastro = :i");
      
        $comando->bindValue(":i", "$id");

        // EXECUTA OS COMANDOS
        $comando->execute();
        $res = $comando->fetchAll(PDO::FETCH_ASSOC);
    
        return $res;
    }





    function Buscarpost()
    {

        $cmd = $this->pdo->prepare("SELECT * FROM publi");
        $cmd->execute();
        $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    function Buscarpostbyid($id)
    {

        $cmd = $this->pdo->prepare("SELECT * FROM publi WHERE id_user = :i ");
        $cmd->bindValue(":i", "$id");
        $cmd->execute();
        $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }



    function Buscarcadastro1($id)
    {
        // CRIA ARRAY $res
        $res = array();
        // VERIFICA SE O EMAIL ESTA NO BANCO COM O COMANDO PREPARE
        $cmd = $this->pdo->prepare("SELECT * FROM cadastros WHERE idcadastro = :i ORDER BY idcadastro");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $cmd->bindValue(":i", $id);
        // EXECUTA OS COMANDOS ACIMA
        $cmd->execute();
        // TRANSFORMA O RESULTADO EM UMA LISTA
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        // RETORNA A LISTA
        return $res;
    }

    function Post_temp($File, $user, $text)
    {


        $comando = $this->pdo->prepare("INSERT INTO  temp(files_temp,user,texto) VALUES(:f, :u, :t)");
        $comando->bindValue(":f", "$File");
        $comando->bindValue(":u", "$user");
        $comando->bindValue(":t", "$text");
        $comando->execute();
        return true;
    }


    function Buscarimagem($email)
    {
        // CRIA ARRAY $res
        $res = array();
        // VERIFICA SE O EMAIL ESTA NO BANCO COM O COMANDO PREPARE
        $cmd = $this->pdo->prepare("SELECT files_temp FROM `temp` WHERE user=:e");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $cmd->bindValue(":e", $email);
        // EXECUTA OS COMANDOS ACIMA
        $cmd->execute();
        // TRANSFORMA O RESULTADO EM UMA LISTA
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        // RETORNA A LISTA
        return $res;
    }
    function Buscarimagemtexto($email)
    {
        // CRIA ARRAY $res
        $res = array();
        // VERIFICA SE O EMAIL ESTA NO BANCO COM O COMANDO PREPARE
        $cmd = $this->pdo->prepare("SELECT texto FROM `temp` WHERE user=:e");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $cmd->bindValue(":e", $email);
        // EXECUTA OS COMANDOS ACIMA
        $cmd->execute();
        // TRANSFORMA O RESULTADO EM UMA LISTA
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        // RETORNA A LISTA
        return $res;
    }

    function Deletartudo($email)
    {
        $res = array();
        // VERIFICA SE O EMAIL ESTA NO BANCO COM O COMANDO PREPARE
        $cmd = $this->pdo->prepare("DELETE FROM `temp` WHERE user = :e");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $cmd->bindValue(":e", $email);
        // EXECUTA OS COMANDOS ACIMA
        $cmd->execute();
        // TRANSFORMA O RESULTADO EM UMA LISTA
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

        return true;
    }




    function Alterarcadastro($nome, $email, $senha, $rua, $cep, $estado, $bairro, $id)
    {

        // VERIFICA SE O EMAIL ESTA NO BANCO COM O COMANDO PREPARE
        $cmd = $this->pdo->prepare("UPDATE cadastros SET nick= :n, email= :e,senha= :s, cep= :c, rua= :r, bairro= :b , estado= :T WHERE idcadastro = :i");
        // DIRECIONA O VALOR DE ":n" PARA O ATRIBUTO $email COM O COMANDO BINDVALUE
        $cmd->bindValue(":i", $id);
        $cmd->bindValue(":n", $nome);
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":s", $senha);
        $cmd->bindValue(":r", $rua);
        $cmd->bindValue(":c", $cep);
        $cmd->bindValue(":T", $estado);
        $cmd->bindValue(":b", $bairro);
        // EXECUTA OS COMANDOS ACIMA
        $cmd->execute();
        // TRANSFORMA O RESULTADO EM UMA LISTA
        $cmd->fetchAll(PDO::FETCH_ASSOC);
        // RETORNA A LISTA
        return true;
    }
}
// FIM CLASSE PESSOA

function Mensagem($mensagem, $tipo)
{

    echo "<div class='alert alert-$tipo' role='alert'>
                $mensagem
                </div>
                <br>";
}
