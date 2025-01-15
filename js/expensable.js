
const acordeoes = document.querySelectorAll(".acordeao");

acordeoes.forEach(acordeao => {
    acordeao.addEventListener('click', function () { 

        this.classList.toggle('active'); 

        const painel = this.nextElementSibling; 
        painel.classList.toggle('show'); });

});