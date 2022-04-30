function change2() {
  $('#presidents').load('http://localhost/barca/history/presidents.php');
  $('.hideme').slideDown();
  $('#coaches, #legends').hide();
}

function change3() {
  $('#legends').load('http://localhost/barca/history/legends.php');
  $('.hideme').slideDown();
  $('#presidents, #coaches').hide();
}

function change4() {
  $('#coaches').load('http://localhost/barca/history/coaches.php');
  $('.hideme').slideDown();
  $('#presidents, #legends').hide();
}

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
