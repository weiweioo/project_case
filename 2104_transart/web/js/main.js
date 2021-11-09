// -------------------- header --------------------
let header = {
  // headerScroll() {
  //   const $header = $('header.header-primary');
  //   const $headerPrimary = $('header.header-primary');
  //   let after = 0;
  //   $(window).on('scroll', function() {
  //     let before = $(this).scrollTop();
  //     if (before > 135 && before > after) {
  //       $header.addClass('header-hide').find('.sub-nav').slideUp(300);
  //       $header.find('ul.lang-select').slideUp(300).siblings('a.lang-btn').removeClass('active');
  //     } else {
  //       $header.removeClass('header-hide');
  //     }
  //     setTimeout(() => {
  //       after = before;
  //     }, 200);

  //     if (this.scrollY < 135) {
  //       $header.removeClass('header-bg');
  //     } else {
  //       $header.addClass('header-bg');
  //     }
  //   });
  // },
  menuSetting() {
    $('.menu .scrollbar-inner').scrollbar();
    // main li click
    let $mainLi = $('ul.main-list > li');
    $mainLi.on('click', function() {
      let vm = $(this);
      if (!vm.hasClass('active')) {
        vm.addClass('active').find('ul.sub-list').slideDown();
        vm.siblings().removeClass('active').find('ul.sub-list').slideUp();
      } else {
        vm.removeClass('active').find('ul.sub-list').slideUp();
      }
    });
    // sub li click
    let $subUl = $('ul.sub-list'),
        $subLi = $('ul.sub-list > li');
    $subUl.on('click', function(e) {
      e.stopPropagation();
    });
    $subLi.on('click', function() {
      let vm = $(this);
      if (!vm.hasClass('active')) {
        vm.addClass('active').find('ul.third-list').slideDown();
        vm.siblings().removeClass('active').find('ul.third-list').slideUp();
      } else {
        vm.removeClass('active').find('ul.third-list').slideUp();
      } 
    });
    // third li click
    let $thirdUl = $('ul.third-list');
    $thirdUl.on('click', function(e) {
      e.stopPropagation();
    })
  },
  menuOpenFunc() {
    let $menu = $('section.menu');
    $menu.show();
    $('body').css('overflow-y', 'hidden');
    setTimeout(() => {
      $menu.addClass('show');
    }, 100);
  },
  menuCloseFunc() {
    let $menu = $('section.menu');
    $menu.removeClass('show');
    $('body').css('overflow-y', 'visible');
    setTimeout(() => {
      $menu.hide();
    }, 600);
  },
  menuOpenClose() {
    let $menuBtn = $('a.menu-btn');
    $menuBtn.on('click', function() {
      let vm = $(this);
      if(!vm.hasClass('active')) {
        vm.addClass('active');
        header.menuOpenFunc();
      } else {
        vm.removeClass('active');
        header.menuCloseFunc();
      }
    });
  },
  langOpenCLose() {
    let $langBtn = $('.lang-box a.lang-btn'),
        $select = $('ul.lang-select');
    $langBtn.on('click', function(e) {
      e.stopPropagation();
      let vm = $(this);
      if (!vm.hasClass('active')) {
        vm.addClass('active');
        $select.slideDown();
      } else {
        vm.removeClass('active');
        $select.slideUp();
      }
    });
    $select.on('click', function(e) {
      e.stopPropagation();
    });
    $('body').on('click', function() {
      $langBtn.removeClass('active');
      $select.slideUp();
    });
  }
}

// header.headerScroll();
header.menuSetting();
header.menuOpenClose();
header.langOpenCLose();
