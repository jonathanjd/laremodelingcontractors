var $accordionJs = jQuery('.accordions-js > div');
$accordionJs
  .each(function () {
    $(this).find('h3').append(['<svg class="icon icon-arrow-down">',
      '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-down"></use>',
      '</svg>'
    ].join(''));
  })
  .on('click', 'h3', function () {
    var $parent = $(this).parent();

    $accordionJs.not($parent).removeClass('open');
    $parent.toggleClass('open');
  });



(function () {
  var $services = jQuery('.accordion-float');
  if (!$services.length) return;
  var $servicesTitle = $services.find('.accordion-title');
  $services
    .find('.accordion-title')
    .filter('[data-event="hover"]').on('mouseover', function () {
      $servicesTitle.filter('.active').not(this).removeClass('active');
      jQuery(this).addClass('active');
    }).end()
    .not('[data-event]').on('click', function () {
      $servicesTitle.filter('.active').not(this).removeClass('active');
      jQuery(this).toggleClass('active');
    }).end()
    .end()
    .find('.nav').on('click', function () {
      jQuery(this).parent().find('.accordion-title').removeClass('active');
    });
  jQuery('body')
    .on('mouseover.accordion', function (e) {
      var $titles = $servicesTitle.filter('[data-event="hover"]');
      if (!$titles.filter('.active').length) return;
      if (!jQuery(e.target).parents('.accordion-float').length) {
        $titles.removeClass('active');
      }
    })
    .on('click.accordion', function (e) {
      var $titles = $servicesTitle.not('[data-event]');
      if (!$titles.filter('.active').length) return;
      if (!jQuery(e.target).parents('.accordion-float').length) {
        $titles.removeClass('active');
      }
    });
})();