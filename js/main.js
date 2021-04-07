
//Menu-Hamburger
const menuBtn = document.querySelector ('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener ('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add ('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove ('open');
    menuOpen = false;
  }
});

$('.nav-proprio ul').origamidMenu({
	breakpoint: 992,
	top: 126,
	background: "#F8F8F8",
	color: "#a130aa"
});

//Slick Slide

$(document).ready(function(){
  $('.autoplay').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3500,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
      
      // Você pode desmarcar em um determinado ponto de interrupção agora adicionando:
      // configurações: "unslick"
      // em vez de um objeto de configurações
    ]
  
  });

  $('.slide').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: false,
          dots: true
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});


