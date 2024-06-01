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
    

})



function addzero(num) {
    return num < 10 ? '0' + num : num
}

function escreverMensagem() {

    if(textarea.value == '')
        {

        }

    else{

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

function retornoAutomatico(valor)
{
    
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