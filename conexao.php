<?php
// AREA PHP

// CRIAR CLASSE PESSOA
class Pessoa
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

    function BuscarDadosSenha($email,$senha)
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

    function addPost($conteudo){

          // SE FALSO ADICIONA O CADASTRO DO USUARIO AO BANCO
          $comando = $this->pdo->prepare("INSERT INTO  publicaçoes(conteudo) VALUES(:c)");
     
          $comando->bindValue(":c", "$conteudo");
         
          // EXECUTA OS COMANDOS
          $comando->execute();
          Mensagem("Publicado", "success");
          // RETORNA VERDADEIRO
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





