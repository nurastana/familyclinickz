 $(document).ready(function() {

            $('#carouselv').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: false, itemstodisplay: 3, orientation: 'v' });
            $('#carouselh').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: false, circular: true, masked: false, itemstodisplay: 5, orientation: 'h' });
            $('#carouselhAuto').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: true, itemstodisplay: 5, orientation: 'h' });

        });          
// спойлер
  $(document).ready(function () {
			$('#cssmenu li.has-sub > a').on('click', function(){
				$(this).removeAttr('href');
				var element = $(this).parent('li');
				if (element.hasClass('open')) {
					element.removeClass('open');
					element.find('li').removeClass('open');
					element.find('ul').slideUp();
				}
				else {
					element.addClass('open');
					element.children('ul').slideDown();
					element.siblings('li').children('ul').slideUp();
					element.siblings('li').removeClass('open');
					element.siblings('li').find('li').removeClass('open');
					element.siblings('li').find('ul').slideUp();
				}
			});

			$('#cssmenu>ul>li.has-sub>a').append('<span class="holder"></span>');
        });          
//asdasd
$(document).ready(function() { // запускаем скрипт после загрузки всех элементов
    /* засунем сразу все элементы в переменные, чтобы скрипту не приходилось их каждый раз искать при кликах */
    var overlay = $('#overlay'); // подложка, должна быть одна на странице
    var open_modal = $('.open_modal'); // все ссылки, которые будут открывать окна
    var close = $('.modal_close, #overlay'); // все, что закрывает модальное окно, т.е. крестик и оверлэй-подложка
    var modal = $('.modal_div'); // все скрытые модальные окна

     open_modal.click( function(event){ // ловим клик по ссылке с классом open_modal
         event.preventDefault(); // вырубаем стандартное поведение
         var div = $(this).attr('href'); // возьмем строку с селектором у кликнутой ссылки
         overlay.fadeIn(400, //показываем оверлэй
             function(){ // после окончания показывания оверлэя
                 $(div) // берем строку с селектором и делаем из нее jquery объект
                     .css('display', 'block') 
                     .animate({opacity: 1, top: '50%'}, 200); // плавно показываем
         });
     });

     close.click( function(){ // ловим клик по крестику или оверлэю
            modal // все модальные окна
             .animate({opacity: 0, top: '45%'}, 200, // плавно прячем
                 function(){ // после этого
                     $(this).css('display', 'none');
                     overlay.fadeOut(400); // прячем подложку
                 }
             );
     });
});

