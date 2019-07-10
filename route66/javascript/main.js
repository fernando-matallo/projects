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

var modal = document.querySelectorAll('.simpleModal');

var modalBtn = document.querySelector('.modal-btn');

var closeBtn = document.getElementsByClassName('closeBtn');


// function openModal(elemento){
//     var item = elemento.getAttribute('data-target');

//     var modal = document.querySelector(item);

//     modal.style.display = "block";
// }

// function closeModal (element) {
//     var itemClose = element.getAttribute('data-target');

//     var closeBtn = document.querySelector(element);

//     modal.style.display = 'none';
// }


// window.onclick = function (event){
//     if(event.target==modal){
//         modal.style.display = 'none';
//     }
// }




