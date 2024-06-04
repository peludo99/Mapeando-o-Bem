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