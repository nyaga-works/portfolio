export default function drawer(){
  var toggleIcon = $('.js-toggle'),
      toggleContent = $('.js-toggle-content'),
      toggleMask = $('.js-toggle-mask'),
      active = 'active';

  toggleIcon.on('click', function(){
    $(this).toggleClass(active);
    $(this).parents().find(toggleContent).toggleClass(active);
    $(this).parents().find(toggleMask).toggleClass(active);
  });
}