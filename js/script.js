//efeito menu scrolltop
$(document).ready(function(){
	  $("a.itemmenu").on('click', function(event) {
	    if (this.hash !== "") {
	      event.preventDefault();
	      var hash = this.hash;
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 3000, function(){
	   
	        window.location.hash = hash;
	      });
	    } 
	  });
	});

//botão voltar ao topo
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('a[href="#home"]').fadeIn();
        } else {
            $('a[href="#home"]').fadeOut();
        }
    });

    $('a[href="#home"]').click(function(){
        $('html, body').animate({scrollTop : 0},3000);
        return false;
    });
})