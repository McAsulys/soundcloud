$(document).ready(function(){
  $('#app').on('click', 'a.chanson', function(e){
    e.preventDefault();
    let f = $(this).attr('data-file');
    console.log(f);

    let audio = $('#audio');
    audio.attr('src',f);
    audio[0].load();
    audio[0].play();
  });
});
