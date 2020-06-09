
<?php include("encabezado.php"); ?>



<body>

<div class="home-image">
    <img src="images/e.png" width="absolute" height="absolute" border="0" alt="Imagen de Fondo">
  </div>





<style>
  .home-image .history{font-size: 0.5em;float: right;line-height: 1em;bottom: 2px;right: 9px;position: absolute}
</style>
<script>
jQuery(document).ready(function($){
  function updateBackground() {
  $('.main-home').height('auto');
  $('a','div.history').wrapInner('<span></span>');
  $iH= $('.info-home', '.main-home');
  $iH.css({'margin-top':''});
  $fixHeight= 1;
  $('.image-container').css('width',parseInt($('body').width())-(parseInt($('.image-container').css('margin-left')) + parseInt($('.main-home').css('margin-right')) + parseInt($('.main-home').width())));
  bg = $('img','.home-image');
  mH = $('header#unalTop').outerHeight(true)+$('footer').outerHeight(true)+$('.main-home').outerHeight(true) +$('section#banners').outerHeight(true);
  if($(window).height() > mH){
    bH = $(window).height() -($('header#unalTop').outerHeight(true)+$('footer').outerHeight(true));
    $('.main-home').height(bH-$('section#banners').outerHeight(true));
    $('.home-image').height(bH+$('.navigation','header#unalTop').height() + $fixHeight);
  }else{
    $('.main-home').height('auto');
    $('.home-image').height($('.main-home').height()+$('.navigation','header#unalTop').height()+$('section#banners').height()  + $fixHeight);
  }

  $('.info-home','.main-home').each(function(){
    
    $mt = ($('.main-home').height()-$(this).height() - parseInt($(this).css('margin-bottom')));

    $(this).css({'margin-top': $mt});
  });
  $('.home-image').css({'top':parseInt($('.firstMenu','#unalTop').height())+'px'});
  sW = $('.home-image').width();
  sH = $('.home-image').height();
  ratio = bg.width()/bg.height();
  if (sW/sH > ratio) {
    $(bg).height("auto")
      .width("100%");
  } else {
      $(bg).height("100%")
      .width("auto");
  }
  }
  $(window).resize(function() {
    updateBackground();
  });
  setTimeout(function(){updateBackground();},1)
  //setTimeout(function(){updateBackground();},500)
  //setTimeout(function(){updateBackground();},1000)
  //setTimeout(function(){updateBackground();},2000)
})
</script>


  <div id="services">
    <a id="c457"></a><div class="indicator"></div><ul><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServEmail.png" width="32" height="32"   alt=""  border="0"><a href="http://correo.unal.edu.co" target="_blank">Correo institucional</a></li><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServSia.png" width="32" height="32"   alt=""  border="0"><a href="http://www.sia.unal.edu.co" target="_top">Sistema de Información Académica</a></li><li><img src="http://unal.edu.co/fileadmin/_processed_/csm_hermes_2f244f66ce.png" width="32" height="32"   alt=""  border="0"><a href="http://www.investigacion.unal.edu.co/index.php/mapa-servicios" target="_top">Servicios para la investigación</a></li><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServCall.png" width="32" height="32"   alt=""  border="0"><a href="http://www.bogota.unal.edu.co/convocatorias/" target="_blank">Convocatorias</a></li><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServEngagement.png" width="32" height="32"   alt=""  border="0"><a href="http://www.unal.edu.co/contratacion/" target="_blank">Portal de contratación</a></li><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServLibrary.png" width="32" height="32"   alt=""  border="0"><a href="http://www.sinab.unal.edu.co" target="_top">Bibliotecas</a></li><li><img src="http://unal.edu.co/fileadmin/templates/images/icon_registro.png" width="32" height="32"   alt=""  border="0"><a href="http://unal.edu.co/registro-y-matricula.html" target="_self">Registro y Matrícula</a></li><li><img src="http://unal.edu.co/fileadmin/templates/images/servicios-bienestar.png" width="32" height="32"   alt=""  border="0"><a href="http://www.bienestar.unal.edu.co" target="_top">Bienestar</a></li><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServMuseums.png" width="32" height="32"   alt=""  border="0"><a href="http://circular.unal.edu.co/museumlist/" target="_top">Museos</a></li><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServPress.png" width="32" height="32"   alt=""  border="0"><a href="http://www.editorial.unal.edu.co" target="_top">Editorial</a></li><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServLegalRules.png" width="32" height="32"   alt=""  border="0"><a href="http://www.legal.unal.edu.co" target="_top">Régimen Legal</a></li><li><img src="http://unal.edu.co/fileadmin/user_upload/icnServicesKidsPortal.png" width="32" height="32"   alt=""  border="0"><a href="http://unal.edu.co/portal-para-ninos.html" target="_self">Portal para niños</a></li><li><img src="http://unal.edu.co/fileadmin/templates/images/icon_identidad.png" width="32" height="32"   alt=""  border="0"><a href="http://identidad.unal.edu.co/" target="_blank">Identidad U.N.</a></li></ul>
  </div>
  
  <main class="main-home">
    <div class="info-home info-home-1" id="info-home-wrapper">
      <div id="c265" class="csc-default"><div class="csc-textpic-text"><p class="align-center"><span style="margin-bottom:20px; text-align:center"></a></span></p></div></div><div id="c142" class="csc-default">
    



   

  </script>
</div></div>
    </div>
  </main>
  
  
    
 
<script>
jQuery(document).ready(function($){
  $('#bannerSliderHome').bxSlider({
    slideWidth: 220,
    minSlides: 1,
    maxSlides: 4,
    pager:false,
    controls: true
    });
})
</script>

  </section>

 


<?php include("final.php"); ?>
</body>
</html>
<!-- Cached page generated 25-10-17 09:28. Expires 25-10-17 10:28 -->
<!-- Parsetime: 0ms -->




 