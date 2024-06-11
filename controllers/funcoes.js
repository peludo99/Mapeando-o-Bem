





const chatboxToggle = document.querySelector('.chatbox-toggle');
const chatboxMessage = document.querySelector('.chatbox-menssage-wrapper');

chatboxToggle.addEventListener('click', function () {
    chatboxMessage.classList.toggle('show');
})


// input

const textarea = document.querySelector('.chatbox-message-input');
const chatboxform = document.querySelector('.chatbox-message-form');



textarea.addEventListener('input', function () {

    let line = textarea.value.split('\n').length;


    if (textarea.rows < 3) {
        textarea.rows = line;
    };

    if (textarea.rows > 1) {
        chatboxform.style.alingItems = 'flex-end'
    }

    else {

    }


});



// message


const chatboxMEssegeWrapper = document.querySelector('.chatbox-message-content');
const chatboxnomessege = document.querySelector('.chatbox-message-no-message');

const hoje = new Date();


chatboxform.addEventListener('submit', function (e) {
    e.preventDefault();

    escreverMensagem();







});





const hideSessionButton = document.getElementById('botao-ocultar');
const sessionInfo = document.getElementById('off');


const ShowSessionButton = document.getElementById('botao-mostrar');

hideSessionButton.addEventListener('click', () => {
    sessionInfo.style.display = 'none';
    ShowSessionButton.style.display = 'inline';





});


ShowSessionButton.addEventListener('click', () => {
    sessionInfo.style.display = 'block';
    hideSessionButton.style.display = 'inline';
    ShowSessionButton.style.display = 'none';
    carregarURL();
});








const inputfile = document.getElementById('imagem');
const inputfilebtn = document.getElementById('imagembtn');

var redimencionar = $('#preview').croppie({

    enableExif: true,
    enableOrientation: true,

    viewport: {
        width: 750,
        height: 550,
        type: 'square'

    },
    boundary: { width: 750, height: 550 }
    ,





});




inputfile.addEventListener('change', function (event) {

    const textareaElement = document.getElementById("idtextarea");
    const arquivoSelecionado = event.target.files[0];
    const btnenviar = document.getElementById("classbtn");
    btnenviar.style.display = 'inline';



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

        const textareaElement = document.getElementById("idtextarea");

        const dadosImagemBase64 = img;


        const textareaValue = textareaElement.value;

        // Enviar os dados da imagem para o servidor


        $.ajax({
            url: 'http://localhost/mapeando-o-bem/controllers/ajax.php',
            type: 'POST',
            data: {
                imagem: dadosImagemBase64,
                texto: textareaValue
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





// user















function checkImageExists(src) {
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', src);
    xhr.onload = function () {
        if (xhr.status === 404) {
            // Ocultar a imagem
            document.getElementById('myimg').style.display = 'none';
        }
    };
    xhr.send();
}



function addzero(num) {
    return num < 10 ? '0' + num : num
}

function carregarURL() {
    const url = "../views/tela_inicial.php#anchor-vaga";
    window.location.href = url;
}

function escreverMensagem() {

    if (textarea.value == '') {

        return;

    }

    else {

        if (textarea.value == '1') {




            let message = `

                <div class="chatbox-message-item sent">
                <span class="chatbox-message-item-text">
                   ${textarea.value.trim().replace(/\n/g, '<br>\n')}
                </span>
                <span class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
            </div>
                
                
                
                `;

            chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
            chatboxform.style.alingItems = 'center';
            textarea.rows = 1;
            textarea.value = '';
            chatboxnomessege.style.display = 'none';
            setTimeout(() => textarea.focus(), 10);

            setTimeout(retornoAutomatico1, 2000);
            setTimeout(retornoAutomaticoEscolha, 3000);





        }

        else if (textarea.value == 'ajuda' || textarea.value == 'Ajuda') {







            let message = `

                <div class="chatbox-message-item sent">
                <span class="chatbox-message-item-text">
                   ${textarea.value.trim().replace(/\n/g, '<br>\n')}
                </span>
                <span class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
            </div>
                
                
                
                `;

            chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
            chatboxform.style.alingItems = 'center';
            textarea.rows = 1;
            textarea.value = '';
            chatboxnomessege.style.display = 'none';
            setTimeout(() => textarea.focus(), 10);

            setTimeout(retornoAutomaticoOla, 2000);
            setTimeout(retornoAutomaticoEscolha, 3000);

            return key;
        }

        else if (textarea.value == '2') {

          


            let message = `

                <div class="chatbox-message-item sent">
                <span class="chatbox-message-item-text">
                   ${textarea.value.trim().replace(/\n/g, '<br>\n')}
                </span>
                <span class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
            </div>
                
                
                
                `;

            chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
            chatboxform.style.alingItems = 'center';
            textarea.rows = 1;
            textarea.value = '';
            chatboxnomessege.style.display = 'none';
            setTimeout(() => textarea.focus(), 10);
            setTimeout(retornoAutomatico2, 2000);



        }

        else {

            let message = `

            <div class="chatbox-message-item sent">
            <span class="chatbox-message-item-text">
               ${textarea.value.trim().replace(/\n/g, '<br>\n')}
            </span>
            <span  class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
        </div>
            
            
            
            `;

            chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
            chatboxform.style.alingItems = 'center';
            textarea.rows = 1;
            textarea.value = '';
            chatboxnomessege.style.display = 'none';
            setTimeout(() => textarea.focus(), 10);




        }











    }



}

function retornoAutomaticoOla(valor) {

    let message = `

    <div class="chatbox-message-item received">
        <span class="chatbox-message-item-text">
            Olá,  Este é o BOT de ajuda Mapeando o Bem.
        </span>
    <span style="display:flex;margin-top: auto;" class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
</div>
    
    
    
    `;

    chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
    chatboxform.style.alingItems = 'center';

}

function retornoAutomatico1(valor) {

    let message = `

    <div class="chatbox-message-item received">
        <span class="chatbox-message-item-text">
        Ok, Para fazer parte da comunidade de Casa de Apoio é necessário fazer a validação de seus dados. Por favor, entre em contato com o suporte.
        </span>
    <span style="display:flex;margin-top: auto;" class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
</div>
    
    
    
    `;

    chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
    chatboxform.style.alingItems = 'center';

}


function retornoAutomatico2(valor) {

    let message = `

    <div class="chatbox-message-item received">
        <span class="chatbox-message-item-text">
        Para alterar suas Credenciais: <a href="./usuario.php">Clique aqui</a>
        </span>
    <span style="display:flex;margin-top: auto;" class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
</div>
    
    
    
    `;

    chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
    chatboxform.style.alingItems = 'center';

}



function retornoAutomaticoEscolha(valor) {

    let message = `

    <div class="chatbox-message-item received">
        <span class="chatbox-message-item-text">
            Digite o número que represente uma das opçoes abaixo: <br>
            <strong>1: Torna-se Casa de Apoio <br>
            2:Alterar Credenciais<br>
            3:Entrar em Contato com o Suporte</strong><br>
        </span>
    <span style="display:flex;margin-top: auto;"  class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
</div>
    
    
    
    `;

    chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
    chatboxform.style.alingItems = 'center';

}