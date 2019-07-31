function initTabNav(){

const tabMenu = document.querySelectorAll('.js-tabmenu li');
const tabContent = document.querySelectorAll('.js-tabcontent section');


// verificação da existência dos itens

if(tabMenu.length && tabContent.length){
    tabContent[0].classList.add('ativo');

// Criar função para adicionar uma classe no conteúdo

function activeTab(index){
    // limpar os ativos
    tabContent.forEach((section) =>{
        section.classList.remove('ativo');
    } )
    tabContent[index].classList.add('ativo');
}

// Adicionar o evento criado a li 

tabMenu.forEach((itemMenu, index) => {
    itemMenu.addEventListener('click', () =>{
        activeTab(index);
    })
})

}
}

initTabNav();

function initAccortion(){
const accordionList = document.querySelectorAll('.js-accordion dt');

if(accordionList.length){
accordionList[0].classList.add('ativo');
accordionList[0].nextElementSibling.classList.add('ativo');

function activeAccordion(){
    this.classList.toggle('ativo');
    this.nextElementSibling.classList.toggle('ativo');
}

accordionList.forEach((item) => {
    item.addEventListener('click', activeAccordion);
})
}
}

initAccortion();

function initScroll(){

const linksInternos = document.querySelectorAll('.js-menu a[href^="#"]');

function scrollToSection (event){
    event.preventDefault();
    const href = event.currentTarget.getAttribute('href');
    const section = document.querySelector(href);
    const topo = section.offsetTop;

    section.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
    });
}

linksInternos.forEach((link) => {
    link.addEventListener('click', scrollToSection);
});

}

initScroll();


function initAnimation(){
    const sections = document.querySelectorAll('.js-scroll');

    if(sections.length){

    const halfWindow = window.innerHeight * 0.6;

    function animaScroll(){
        sections.forEach((section) => {
            const sectionTop = section.getBoundingClientRect().top;
            const isSectionVisible = (sectionTop - halfWindow) < 0;
            if(isSectionVisible){
                section.classList.add('ativo');
            }
        })
    }

    animaScroll();

    window.addEventListener('scroll', animaScroll);

    }

}

initAnimation();


