export default function smoothscroll(){
  $('a[href^="#"]').click(function(){
    var href= $(this).attr("href"),
        target = $(href == "#" || href == "" ? 'html' : href),
        position = target.offset().top,
        speed = 500;
    
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
}