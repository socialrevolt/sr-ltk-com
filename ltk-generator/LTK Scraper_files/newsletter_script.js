var url;

// LAYOUT OPTIONS
var products_4_3x = '<td class="full_column"> <table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column products_4 product_row"> <td valign="top" class="prod product_1" width="52" height="52"> <img height="52" width="52" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_2" width="52" height="52"> <img height="52" width="52" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_3" width="52" height="52"> <img height="52" width="52" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_4" width="52" height="52"> <img height="52" width="52" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"></td></tr><tr class="full_column products_4 product_row hide"> <td valign="top" class="prod product_1" width="52" height="52"> <img height="52" width="52" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_2" width="52" height="52"> <img height="52" width="52" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_3" width="52" height="52"> <img height="52" width="52" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_4" width="52" height="52"> <img height="52" width="52" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"></td></tr></table></td>';
var products_4_2x = '<td class="full_column"> <table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column products_4 product_row"> <td valign="top" class="prod product_1" width="84" height="84"> <img height="84" width="84" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_2" width="84" height="84"> <img height="84" width="84" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_3" width="84" height="84"> <img height="84" width="84" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_4" width="84" height="84"> <img height="84" width="84" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"></td></tr><tr class="full_column products_4 product_row hide"> <td valign="top" class="prod product_1" width="84" height="84"> <img height="84" width="84" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_2" width="84" height="84"> <img height="84" width="84" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_3" width="84" height="84"> <img height="84" width="84" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_4" width="84" height="84"> <img height="84" width="84" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"></td></tr></table></td>';
var products_3_3x = '<td class="full_column"> <table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column product_row products_3"> <td valign="top" class="prod product_1" width="70" height="70"> <img height="70" width="70" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:70px; max-height:70px;"> </td> <td valign="top" class="prod product_2" width="70" height="70"> <img height="70" width="70" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:70px; max-height:70px;"> </td> <td valign="top" class="prod product_3" width="70" height="70"> <img height="70" width="70" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:70px; max-height:70px;"></td></tr><tr class="full_column product_row products_3 hide"> <td valign="top" class="prod product_1" width="70" height="70"> <img height="70" width="70" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:70px; max-height:70px;"> </td> <td valign="top" class="prod product_2" width="70" height="70"> <img height="70" width="70" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:70px; max-height:70px;"> </td> <td valign="top" class="prod product_3" width="70" height="70"> <img height="70" width="70" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:70px; max-height:70px;"></td></tr></table></td>';
var products_3_2x = '<td class="full_column"> <table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column products_3 product_row"> <td valign="top" class="prod product_1" width="113" height="113"> <img height="113" width="113" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:113px; max-height:113px;"> </td> <td valign="top" class="prod product_2" width="113" height="113"> <img height="113" width="113" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:113px; max-height:113px;"> </td> <td valign="top" class="prod product_3" width="113" height="113"> <img height="113" width="113" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:113px; max-height:113px;"> </td> </tr><tr class="full_column products_3 product_row hide"> <td valign="top" class="prod product_1" width="113" height="113"> <img height="113" width="113" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:113px; max-height:113px;"> </td> <td valign="top" class="prod product_2" width="113" height="113"> <img height="113" width="113" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:113px; max-height:113px;"> </td> <td valign="top" class="prod product_3" width="113" height="113"> <img height="113" width="113" class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:113px; max-height:113px;"> </td> </tr> </table> </td>';

var amplitude_tracking = '?utm_source=newsletter&utm_medium=email&utm_campaign=trend-alert';

// SETTINGS CHANGE FUNCTIONS
$('#blog_names').change(function() {
  var selected = $('#blog_names option:selected').text();
  if (selected == 'No') {
    $('h3').addClass('hide');
    $('.gram').css('paddingTop', '30px');
  } else {
    $('h3').removeClass('hide');
    $('.gram').css('paddingTop', '0px');
  }
});


$('#ctas').change(function() {
  var selected = $('#ctas option:selected').text();
  if (selected == 'No') {
    $('.cta').addClass('hide');
    $('.gram').addClass('no_cta');
  } else {
    $('.cta').removeClass('hide');
    $('.gram').removeClass('no_cta');
  }
});

$('#export').click(function(){
  var html = $('.export').html();
  $('#code').text(html);
})

$('#ads').change(function() {
  var selected = $('#ads option:selected').text();
  if (selected == 'No') {
    $('#adBlock').addClass('hide');
    $('#ad_edit').fadeOut();
    //
  } else {
    $('#adBlock').removeClass('hide');
    $('#ad_admin').fadeIn();
    $('#ad_edit').fadeIn();
  }
});

$('#ad_edit').click(function() {
  $('#ad_admin').fadeIn();
})

$('.ltk-newsletter-close').click(function() {
  $('#ad_admin').fadeOut();
  $('#build_admin').fadeOut();
  $('#build_dump').html('');
  $('#build_code').html('');
});

$('#insert_ads').click(function() {
  var link = $('#ad_link').val();
  var leader = $('#leaderboard').val();
  var mobile = $('#mobile').val();
  $('#leaderboard_ad').attr('src', leader);
  $('#mobile_ad').attr('src', mobile);
  $('.ad_link').attr('href', link);
  $('#ad_admin').fadeOut('slow');
});

$('#count').change(function() {
  var selected = $('#count option:selected').text();
  if (selected == '3') {
    $('.wide_3 .product_row').html(products_3_3x);
    $('.wide_2 .product_row').html(products_3_2x);
  } else if (selected == '4') {
    $('.wide_3 .product_row').html(products_4_3x);
    $('.wide_2 .product_row').html(products_4_2x);
  } else if (selected == '6') {
    $('.wide_3 .product_row').html(products_3_3x);
    $('.wide_2 .product_row').html(products_3_2x);
    $('.product_row.hide').addClass('showing').removeClass('hide');
  } else {
    $('.wide_3 .product_row').html(products_4_3x);
    $('.wide_2 .product_row').html(products_4_2x);
    $('.product_row.hide').addClass('showing').removeClass('hide');
  }
});

$('#layout').change(function() {
  var selected = $('#layout option:selected').text();
  if (selected == '3x3x3') {
    $('#row_2').html('<tr align="center"> <td width="224" align="center" valign="top" class="undone gram wide_3 col_1"> <table class="gram_box" border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column blog_name"> <td valign="middle" class="full_column"> <a class="blog_link" href="#"><h3 contenteditable="true">BLOGGER NAME</h3></a> </td> </tr> <tr class="full_column"> <td class="full_column"> <a class="gram_link" href="#"><img width="224" height="224" src="/ltk-newsletter-content/gram.png" style="max-width:100%; width:224px;" class="columnImage" /></a> </td> </tr> <tr class="full_column product_row"> <td class="full_column"> <table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column products_4 product_row"> <td valign="top" class="prod product_1" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_2" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_3" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_4" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"></td></tr><tr class="full_column products_4 product_row showing"> <td valign="top" class="prod product_1" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_2" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_3" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_4" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"></td></tr></table></td> </tr> <tr class="full_column"> <td valign="top" class="full_column"> <a href="#" class="cta" contenteditable="true">SHOP THE LOOK</a> </td> </tr> </table> </td> <td width="224" align="center" valign="top" class="undone gram wide_3 col_2"> <table class="gram_box" border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column blog_name"> <td valign="middle" class="full_column"> <a class="blog_link" href="#"><h3 contenteditable="true">BLOGGER NAME</h3></a> </td> </tr> <tr> <td class="full_column"> <a class="gram_link" href="#"><img width="224" height="224" src="/ltk-newsletter-content/gram.png" style="max-width:100%; width:224px;" class="columnImage" /></a> </td> </tr> <tr class="full_column product_row"> <td class="full_column"> <table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column products_4 product_row"> <td valign="top" class="prod product_1" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_2" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_3" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_4" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"></td></tr><tr class="full_column products_4 product_row showing"> <td valign="top" class="prod product_1" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_2" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_3" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_4" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"></td></tr></table></td> </tr> <tr> <td valign="top" class="full_column"> <a href="#" class="cta" contenteditable="true">SHOP THE LOOK</a> </td> </tr> </table> </td> <td width="224" align="center" valign="top" class="undone gram wide_3 col_3"> <table class="gram_box" border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column blog_name"> <td valign="middle" class="full_column"> <a class="blog_link" href="#"><h3 contenteditable="true">BLOGGER NAME</h3></a> </td> </tr> <tr> <td class="full_column"> <a class="gram_link" href="#"><img width="224" height="224" src="/ltk-newsletter-content/gram.png" style="max-width:100%; width:224px;" class="columnImage" /></a> </td> </tr> <tr class="full_column product_row"> <td class="full_column"> <table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr class="full_column products_4 product_row"> <td valign="top" class="prod product_1" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_2" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_3" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_4" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"></td></tr><tr class="full_column products_4 product_row showing"> <td valign="top" class="prod product_1" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_2" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_3" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td> <td valign="top" class="prod product_4" width="52" height="52"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:52px; max-height:52px;"></td></tr></table></td> </tr> <tr> <td valign="top" class="full_column"> <a href="#" class="cta" contenteditable="true">SHOP THE LOOK</a> </td> </tr> </table> </td> </tr>');
    $('#row_2').addClass('tripleColumns').removeClass('doubleColumns');
    $('.undone img').click(function() {
      $('.active').removeClass('active');
      $('#returned, #product_container').html('');
      $('#url').val('');
      $('#product_container').html();
      $('#product_container').fadeOut();
      $(this).closest('.gram').addClass('active');
      $('#admin_content').fadeIn();
      $('#form').fadeIn();
      $('#url').focus();
    });
  } else {
    $('#row_2').html('<tr align="center"> <td width="351" align="center" valign="top" class="undone gram wide_2 col_1"> <table class="gram_box" width="100%" border="0" cellpadding="0" cellspacing="0"> <tbody><tr class="full_column blog_name"> <td valign="middle" class="full_column"> <a class="blog_link" href="#"><h3 contenteditable="true">BLOGGER NAME</h3></a> </td> </tr> <tr class="full_column"> <td class="full_column"> <a class="gram_link" href="#"><img width="351" height="351" src="/ltk-newsletter-content/gram.png" style="max-width:351px; width:351px;" class="columnImage"></a> </td> </tr> <tr class="full_column product_row"> <td class="full_column"> <table width="100%" border="0" cellpadding="0" cellspacing="0"> <tbody><tr class="full_column products_4 product_row"> <td valign="top" class="prod product_1" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_2" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_3" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"></td><td valign="top" class="prod product_4" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td></tr> <tr class="full_column products_4 product_row showing"> <td valign="top" class="prod product_1" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_2" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_3" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td><td valign="top" class="prod product_4" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td></tr> </tbody></table> </td> </tr> <tr class="full_column"> <td valign="top" class="full_column"> <a href="#" class="cta" contenteditable="true">SHOP THE LOOK</a> </td> </tr> </tbody></table> </td> <td width="351" align="center" valign="top" class="undone gram wide_2 col_2"> <table class="gram_box" width="100%" border="0" cellpadding="0" cellspacing="0"> <tbody><tr class="full_column blog_name"> <td valign="middle" class="full_column"> <a class="blog_link" href="#"><h3 contenteditable="true">BLOGGER NAME</h3></a> </td> </tr> <tr> <td class="full_column"> <a class="gram_link" href="#"><img width="351" height="351" src="/ltk-newsletter-content/gram.png" style="max-width:351px; width:351px;" class="columnImage"></a> </td> </tr> <tr class="full_column product_row"> <td class="full_column"> <table width="100%" border="0" cellpadding="0" cellspacing="0"> <tbody><tr class="full_column products_4 product_row"> <td valign="top" class="prod product_1" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_2" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_3" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td><td valign="top" class="prod product_4" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td></tr> <tr class="full_column products_4 product_row showing"> <td valign="top" class="prod product_1" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_2" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td> <td valign="top" class="prod product_3" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"></td><td valign="top" class="prod product_4" width="84" height="84"> <img class="prods" src="/ltk-newsletter-content/white.png" style="height:auto; max-width:84px; max-height:84px;"> </td></tr> </tbody></table> </td></tr> <tr> <td valign="top" class="full_column"> <a href="#" class="cta" contenteditable="true">SHOP THE LOOK</a> </td> </tr> </tbody></table> </td> </tr>');
    $('#row_2').addClass('doubleColumns').removeClass('tripleColumns');
    $('.undone img').click(function() {
      $('.active').removeClass('active');
      $('#returned, #product_container').html('');
      $('#url').val('');
      $('#product_container').html();
      $('#product_container').fadeOut();
      $(this).closest('.gram').addClass('active');
      $('#admin_content').fadeIn();
      $('#form').fadeIn();
      $('#url').focus();
    });
  }
});

// EMAIL BUILDER & REMOVAL OF BUILDER CODE
$('#finish').click(function() {
  function removeNewlines(str) {
    //remove line breaks from str
    str = str.replace(/\s{2,}/g, "");
    str = str.replace(/\t+/g, "");
    str = str.replace("		", "");
    str = str.toString().trim().replace(/(\r\n|\n|\r)/g, "");
  }
  if ($('#newsletter_type').val() === 'GS') {
      var gs_comment = document.createComment('GS NEWSLETTER');
      document.head.appendChild(gs_comment);
  }
  var subtitle = $('#bodyContent h2').html();
  $('#invisContent').html(subtitle);
  $('#build_dump').html();
  $('#build_code').html();
  var all_html = $("html").html();
  all_html = all_html.replace('<script name="admin_script" src="/ltk-newsletter-content/newsletter_script.js"></script>', '');
  $('#build_dump').html(all_html);
  $('#build_dump .hide').remove();
  $('#build_dump .admin').remove();
  $('#build_dump #build_dump').html();
  $('#build_dump #build_code').html();
  $("#build_dump img[src*='http://static.liketoknow.it/ltk-newsletter-content/1.0.0/white.png']").attr('src', 'http://static.liketoknow.it/ltk-newsletter-content/1.0.0/blank.png');
	// $("#build_dump img[src='/ltk-newsletter-content/white.png']").attr('src', 'https://gallery.mailchimp.com/5d5efa6119f4f416c8b639bb5/images/568612d1-1566-45b8-8df4-a28332bb9b86.png');
  $("#build_dump link[name='admin_script']").remove();
  $("#build_dump script[name='admin_script']").remove();
  $('#build_dump footer').remove();
	$('.header-container').remove();
	$('.navbar-fixed-top').remove();
  var new_html = $("#build_dump").html();
  $('#build_code').text('<html><head>' + new_html + '</body></html>');
  var textcode = $('#build_code').text();
  // textcode = textcode.replace(/http:/, "https:");
  // textcode = textcode.replace("http://images", "https://images");
  textcode = textcode.replace(/(\r\n|\n|\r)/gm, "");
  removeNewlines(textcode);
  textcode = textcode.replace(/&amp;/g, '&');
  textcode = textcode.replace(/contenteditable=\"true\"/g, '');
  textcode = textcode.replace(/<div id=\"email_content\">/g, '</head><body><div id=\"email_content\">');
  textcode = textcode.replace(/\t+/g, ' ');
  textcode = textcode.replace(/> </g, '><');
  $('#build_code').text(textcode);
  $('#build_admin').fadeIn();
});

// GRAM ADDING/EDITING FUNCTIONS
$('#email_content').on('click', '.undone img', function() {
  // console.log('running the undone code');
  $('.active').removeClass('active');
  $('#returned, #product_container').html('');
  $('#url').val('');
  $('#product_container').html();
  $('#product_container').fadeOut();
  $(this).closest('.gram').addClass('active');
  $('#admin_content').fadeIn();
  $('#form').fadeIn();
  $('#url').focus();
});

$('#email_content').on('click', '.edit img', function() {
  // console.log('does this run');
  $('.active').removeClass('active');
  $('#returned, #product_container').html('');
  $('#url').val('');
  $('#product_container').html();
  $('#product_container').fadeOut();
  var parent_gram = $(this).closest('.gram');
  $(parent_gram).addClass('active');
  // console.log('active was added');
  $('#admin_content').fadeIn();
  $('.active td.prodx').addClass('prod').removeClass('prodx');
  $('#form').fadeIn();
  $('#url').focus();
});

$('#admin_content').on('click', '#close_form', function() {
  $('.active').removeClass('active');
  $('#returned, #product_container').html('');
  $('#url').val('');
  $('#product_container').html();
  $('#product_container').fadeOut();
  $('#admin_content').fadeOut();
  $('#form').fadeOut();
});

$('#newsletter_type').change(function() {
  $('.prodx > a').attr('href', function() {
    var link_type = $('#newsletter_type').val() === 'GS' ? 'data-gs_link' : 'data-reg_link';
    return $(this).children().attr(link_type) + amplitude_tracking;
  });
});

$('#admin_content').on('click', '.image_add', function() {
  var new_image = $(this).children('img').attr("src");
  var new_link;
  if ($('#newsletter_type').val() === 'GS') {
      new_link = $(this).attr("data-gs_link");
  } else {
      new_link = $(this).attr("data-reg_link");
  }
  $('.active .prod:first img').attr("src", new_image);
  $('.active .prod:first img').wrap('<a href="' + new_link + amplitude_tracking + '" target="_blank"></a>');
    // $('.active .prod:first img').parent('a').attr("href", new_link);
  $('.active .prod:first img').attr("data-gs_link", $(this).attr("data-gs_link"));
  $('.active .prod:first img').attr("data-reg_link", $(this).attr("data-reg_link"));
  $('.active .prod:first').addClass('prodx').removeClass('prod');
});

$('#email_content').on('click', 'a.gram_link, a.cta, a.blog_link', function() {
  return false;
});

// GET GRAM FROM RS API
// Note: this is calling the LTK PHP API's that only exist in QA currently. This link will need to be updated when prod is up
function ajaxGetGram(hash) {
  var api_url = 'https://api.liketoknow.it/api/v1/ltks/';
  $.get(api_url + hash, function(data) {
   
    console.log(data);

    $('.hash').val(hash);

    var products = data.data.products;
    var hero_image = data.data.hero_image;
  
    // LTK Meta
    var display_name = data.data.profile.display_name;
    var avatar_url = data.data.profile.avatar_url;
    var share_url = data.data.share_url;


    var ltk_hash = data.data.hash;
    $('#product_container').html();
    $('#form').fadeOut();


    // Product loop
    products.forEach(function(product) {
      console.log(product);
      var img = product.image_url;
      
      var ltk_link = 'https://www.liketoknow.it/ltk/' + ltk_hash + amplitude_tracking;
      var ltk_email = product.links.ltk_email;
      var gs_email = product.links.gs_email;
      $('#product_container').append('<div class="image_add" data-reg_link="' + product.links.ltk_email + '"data-gs_link="' + product.links.gs_email + '"><img src="' + img + '" /></div>');
    });
    // End product loop


      $('#product_container').fadeIn('fast');
      // $('#product_container').append('<div id="close_form">↓</div>');
      $('td.active h3').html(display_name);
      $('td.active a.blog_link').attr('href', 'https://www.liketoknow.it/' + display_name + amplitude_tracking);
      $('td.active a.cta, td.active a.gram_link').attr('href', 'https://www.liketoknow.it/ltk/' + ltk_hash + amplitude_tracking);
      $('.active img.columnImage').attr("src", hero_image);
      $('.hero').attr('src',hero_image);

      $('.author-meta').append('<img class="author" src="' + avatar_url + '">');
      $('.author-meta').append('<h2><img style="height: 24px;" src="http://sliketoknowit.wpengine.com/wp-content/uploads/2018/09/ltklogo.svg">' + display_name + '</h2>');
      // selection
      $('#product_container .image_add').click(function() {
          $(this).addClass('selected');
          var img = $(this).find('img').attr('src');

          var images = [];

          console.log($(this).attr('data-reg_link'));
          var display_link = $(this).attr('data-reg_link');

          $('.thumbstrip img').each(function(item,val){
            images.push($(val).attr('src'));
          });

          if (images.indexOf(img) !== -1) {
            $('.thumbstrip').find('img[src="' + img + '"]').parent().parent().remove();
          } else if (images.length < 4) {
            $('.thumbstrip').append('<div class="col-xs-3 col-md-3 image"><div class="box"><a href="' + display_link + '" target="_blank"><img src="' + img + '"></a></div></div>');
          }
          
      });
      // change to edit
      $('td.active').addClass('edit').removeClass('undone');
    });
};



$('#submit').click(function() {
  url = $('#url').val();
  // console.log('the url is ' + url);
  // getGram(url);
  var hash = url.split("/").pop();
  // console.log('hash is ' + hash);
  ajaxGetGram(hash);
});

// SAVE DRAFT
// currently this functionality was not working properly or desired, so it will be commented out until further notice
// $("#save").unbind("click").bind('click', function (e) {
// 	$('#build_dump').html('');
// 	$('#build_code').html('');
// 	var all_data = $("html").prop('outerHTML');
// 	var new_all_data = all_data.replace(/&amp;/g, '%26');
// 	var current_time = 123;
// 	var dataString = "current_time="+ current_time + "&save_data=" + new_all_data;
// 	$.ajax({
// 		type: "POST",
// 		url: "http://ourownmaking.webfactional.com/save.php",
// 		data: dataString,
// 		success: function() {
// 			// console.log('been called');
// 			// console.log(dataString);
// 			}
// 	});
// 	return false;
// });
