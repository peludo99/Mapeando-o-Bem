
const inputfile = document.getElementById('imagem');
const inputfilebtn = document.getElementById('imagembtn');

var redimencionar = $('#preview').croppie({

    enableExif: true,
    enableOrientation: true,

    viewport: {
        width: 550,
        height: 550,
        type: 'circle'

    },
    boundary: { width: 750, height: 550 }
    ,





});




inputfile.addEventListener('change', function (event) {

   
    const arquivoSelecionado = event.target.files[0];
    const btnenviar = document.getElementById("classbtn");
    btnenviar.style.display ='inline';



    // Processar a imagem base64
    const reader = new FileReader();

    // Converter a imagem em base64 quando a leitura for concluída
    reader.onload = function (e) {

        redimencionar.croppie('bind', {
            url: e.target.result
        });




    };

    // Iniciar a leitura do arquivo
    reader.readAsDataURL(arquivoSelecionado);

    if (arquivoSelecionado) {
        const nomeDoArquivo = arquivoSelecionado.name;
        const tamanhoDoArquivo = arquivoSelecionado.size;
        const tipoDoArquivo = arquivoSelecionado.type;

        console.log('Nome do Arquivo:', nomeDoArquivo);
        console.log('Tamanho do Arquivo:', tamanhoDoArquivo);
        console.log('Tipo do Arquivo:', tipoDoArquivo);
    } else {
        console.log('Nenhum arquivo selecionado.');
    }










    // Criar um leitor de arquivos




});




$('#imagembtn').on('click', function () {
    


        redimencionar.croppie('result', {
            type: 'canvas'
            , size: 'viewport'
        }).then(function (img) {

            

            const dadosImagemBase64 = img;


           

            // Enviar os dados da imagem para o servidor


            $.ajax({
                url: 'http://localhost/mapeando-o-bem/controllers/ajax.php',
                type: 'POST',
                data: {
                    imagemuser: dadosImagemBase64,
                 
                }, // Enviar 'imagem' ao invés de 'data'

                success: function (result) {
                    console.log('mandou');
                    setTimeout(window.location.reload(), 2000);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('Erro, arquivo nao enviado');
                }
            });

        });

    }

);


