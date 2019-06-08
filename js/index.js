// graphic design projects
$(document).ready(function(){

    $('#grapro1').click(function(){
        $('#petabites_text').hide();
        $('#NuGoFree_text').hide();
        $('#cream_text').hide();
        $('#img2').hide();
        $('#img3').hide();
        $('#img4').hide();
        $('#grapro2').css('color', '#292929');
        $('#grapro3').css('color', '#292929');
        $('#grapro4').css('color', '#292929');

        $('#macsush_text').fadeIn(2000);
        $('#img1').fadeIn(2000);
        $('#grapro1').css('color', '#d4af37');
    });
    $('#grapro2').click(function(){
        $('#macsush_text').hide();
        $('#NuGoFree_text').hide();
        $('#cream_text').hide();
        $('#img1').hide();
        $('#img3').hide();
        $('#img4').hide();
        $('#grapro1').css('color', '#292929');
        $('#grapro3').css('color', '#292929');
        $('#grapro4').css('color', '#292929');

        $('#petabites_text').fadeIn(2000);
        $('#img2').fadeIn(2000);
        $('#grapro2').css('color', '#d4af37');
    });
    $('#grapro3').click(function(){
        $('#macsush_text').hide();
        $('#petabites_text').hide();
        $('#cream_text').hide();
        $('#img1').hide();
        $('#img2').hide();
        $('#img4').hide();
        $('#grapro1').css('color', '#292929');
        $('#grapro2').css('color', '#292929');
        $('#grapro4').css('color', '#292929');

        $('#NuGoFree_text').fadeIn(2000);
        $('#img3').fadeIn(2000);
        $('#grapro3').css('color', '#d4af37');
    });
    $('#grapro4').click(function(){
        $('#macsush_text').hide();
        $('#petabites_text').hide();
        $('#NuGoFree_text').hide();
        $('#img1').hide();
        $('#img2').hide();
        $('#img3').hide();
        $('#grapro1').css('color', '#292929');
        $('#grapro2').css('color', '#292929');
        $('#grapro3').css('color', '#292929');

        $('#cream_text').fadeIn(2000);
        $('#img4').fadeIn(2000);
        $('#grapro4').css('color', '#d4af37');
    });
});