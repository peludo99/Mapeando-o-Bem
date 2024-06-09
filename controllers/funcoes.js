





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

    escreverMensagem()
    setTimeout(retornoAutomatico, 1000)


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



inputfile.addEventListener('change', function (event) {

    const textareaElement = document.getElementById("idtextarea");
    const textareaValue = textareaElement.value;
    console.log(textareaValue);
    const arquivoSelecionado = event.target.files[0];

    // Criar um leitor de arquivos
    const reader = new FileReader();

    // Converter a imagem em base64 quando a leitura for concluída
    reader.onload = function (e) {
        const dadosImagemBase64 = e.target.result;

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
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('Erro, arquivo nao enviado');
            }
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
 


    setTimeout(function(){
        window.location.reload();
    },1000);


});





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

    }

    else {

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






    }



}

function retornoAutomatico(valor) {

    let message = `

    <div class="chatbox-message-item received">
        <span class="chatbox-message-item-text">
            Mensagem automatica
        </span>
    <span class="chatbox-messege-item-time">${addzero(hoje.getHours())}:${addzero(hoje.getMinutes())}</span>
</div>
    
    
    
    `;

    chatboxMEssegeWrapper.insertAdjacentHTML('beforeend', message);
    chatboxform.style.alingItems = 'center';

}