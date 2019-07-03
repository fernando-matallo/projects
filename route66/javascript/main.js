// Criado função showslides e passado um parâmetro
function showSlides (n) {

    // Localizado a class das imagens
    const slides = document.querySelectorAll(".slide-fade");

    // for para percorrer as imagens e aplicando o display none
    for(let i=0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // chamando o display block para o slidefade declarado como slides
    slides[n].style.display = "block";
    
}

window.onload = function (){
    
    // Botão para trocar as imagens
    let botoesImagem = document.querySelectorAll(".dot");

    // Gerado um loop para percorrer os botoes e aplicar o evento click
   for(let i=0; i<botoesImagem.length; i++ ) {
        botoesImagem[i].addEventListener("click", function(){
            showSlides(i);
        })
    }

    // Chamada da função para testar o funcionamento
    showSlides(0);

}



// Modal 

var modal = document.getElementById ('simpleModal');

var modalBtn = document.getElementById('modal-btn');

var closeBtn = document.getElementsByClassName('closeBtn')[0];


modalBtn.addEventListener('click', openModal);

closeBtn.addEventListener('click', closeModal);

window.addEventListener('click', outsideClick);

function openModal (){
    modal.style.display = 'block';
}

function closeModal (){
    modal.style.display = 'none';
}

function outsideClick (e){
    if(e.target == modal){
    modal.style.display = 'none';
    }
}



