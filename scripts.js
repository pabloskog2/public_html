document.body.addEventListener('touchstart',function(){},false);
$("#linkUnDorm").on('click', function() {
   
   $("#dosDormitorios, #tresDormitorios").hide();
   $("#unDormitorios").show();
   $('html, body').animate({
        scrollTop: $('#unDormitorios').offset().top
    }, 1000);
});
$("#linkDosDorm").on('click', function() {
   
   $("#unDormitorios, #dosDormitorios, #tresDormitorios").hide();
   $("#unDormitorio").show();
   $('html, body').animate({
        scrollTop: $('#unDormitorio').offset().top
    }, 1000);
});
$("#linkTresDorm").on('click', function() {
   
   $("#unDormitorio, #tresDormitorios").hide();
   $("#dosDormitorios").show();
   $('html, body').animate({
        scrollTop: $('#dosDormitorios').offset().top
    }, 1000);
});

$("#linkDuplex").on('click', function() {
   
   $("#unDormitorio, #dosDormitorios, #unDormitorios").hide();
   $("#tresDormitorios").show();
   $('html, body').animate({
        scrollTop: $('#tresDormitorios').offset().top
    }, 1000);
});

$("#linkUnPriv").on('click', function() {
   
   $("#dosPrivados, #tresPrivados").hide();
   $("#unPrivado").show();
   $('html, body').animate({
        scrollTop: $('#unPrivado').offset().top
    }, 1000);
});
$("#linkDOsPriv").on('click', function() {
   
   $("#unPrivado, #tresPrivados").hide();
   $("#dosPrivados").show();
   $('html, body').animate({
        scrollTop: $('#dosPrivados').offset().top
    }, 1000);
});
$("#linkTresPriv").on('click', function() {
   
   $("#dosPrivados, #unPrivado").hide();
   $("#tresPrivados").show();
   $('html, body').animate({
        scrollTop: $('#tresPrivados').offset().top
    }, 1000);
});