class FormPost {

    constructor(idformpost, idtextearea, idulpost) {
        this.form = document.getElementById(idformpost);
        this.textarea = document.getElementById(idtextearea);
        this.ulpost = document.getElementById(idulpost);

        this.addSubmit();

    }

    onSubmit(func) {
        this.form.addEventListener('submit', func);
    }

    formvalidate(value) {
        if (value == '' || value == null || value == undefined || value.length < 3) {
            return false;
        }

        else {
            return true;
        }
    }


    gettime() {
        const time = new Date();
        const day = time.getDate();
        const mes = time.getMonth();
        const ano = time.getFullYear();
        const hour = time.getHours();
        const minutes = time.getMinutes();

        return `${day}/${mes}/${ano} | ${hour}h ${minutes}m`;
    }

    addSubmit() {
        const handleSubmit = (event) => {
            event.preventDefault();


            if (this.formvalidate(this.textarea.value)) {

                const newpost = document.createElement('div');
                const time = this.gettime();

                newpost.classList.add('mainpost');
                newpost.innerHTML = `
                <ul class="Post" id="posts">
                    <div class="infoUser">
                        <div class="imgUser">
    
                        </div>
                        <Strong class="nomeUser">Cauan abraao</Strong>
    
                    </div>
    
                    <li class="formPostA">
                        <stron>
                        ${this.textarea.value}
                        </stron>
                        <div class="hora">
    
                            <hora> Postado em ${time}</hora>
                        </div>
                        <div class="iconsAndButton">
                            <div class="btnpost">
                                <button type="button" class="share-button">
                                    <span class="button__text">Curtir</span>
                                    <span class="button__icon">
    
                                        <i class="fa-solid fa-heart"></i>
                                    </span>
                                </button>
                                <button style="width: 100px;" type="button" class="share-button">
                                    <span class="button__text">Comentar</span>
                                    <span class="button__icon">
    
                                        <i class="fa-solid fa-comments"></i>
                                    </span>
                                </button>
                                <button style="width: 120px;" type="button" class="share-button">
                                    <span class="button__text">Compartilhar</span>
                                    <span class="button__icon">
    
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </span>
                                </button>
    
                            </div>
    
    
                        </div>
                    </li>
                </ul>
             </div>
    
    
    
    
    
               
                `;

                this.ulpost.append(newpost);
                this.textarea.value = '';



            }

            else {
                alert('Envio negado!');
            }



        }

        this.onSubmit(handleSubmit);


    }





}



const postForm = new FormPost('idformpost', 'idtextarea', 'posts');




// mandar para o php







