window.onload = function () {

    // Navegação Mudar de cor com a rolagem do mouse
    $(function () {
        $(document).scroll(function () {
          var $nav = $(".fixed-top");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
  

    //  Alteração na cor da tag p ao passar o mouse no banner principal
    var logoTopped = document.getElementById('topped-logo');
    logoTopped.addEventListener('mouseover', logoDestaque);
    logoTopped.addEventListener('mouseout', logoOrigem);

    function logoDestaque () {
        document.querySelector('.banner-content p').style.color = '#F87101';
    }
    function logoOrigem () {
      document.querySelector('.banner-content p').style.color = 'white';
    }

}
    