$(document).ready(function () {
    /** Место для скриптов **/
    coreJsSwitchElement.init();
    Seacrch.init();

    if(typeof $().slick !== 'undefined')
    $('.gallery__photo__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: true,
        dotsClass: 'dots',
        prevArrow: "<svg class='slider__arrow slider__arrow_prev' width='32' height='32' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='slider__arrow slider__arrow_next' width='32' height='32' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    /** Скрипт для Автоподкачки с инстаграмма **/

    $("#result").load("/inwidget/index.php?toolbar=false&width=100%&preview=large");

    /** Cкрипты обработки видео с ютуба в блоке видео отзывов **/

    var itemid = 0;

    $('.video .item-block').each(function() {
      $(this).attr('data-item',itemid);
      var videoid = $(this).attr('data-youtube');
      if(videoid) {
        $(this).children('.time').html('');
        $(this).children('.image').css('background-image', 'url(http://img.youtube.com/vi/' + videoid + '/0.jpg)');
        getVideoDuration(itemid, videoid);
      };
      itemid++;
    });

    function getVideoDuration(itemid, id) {
      $.get(
        "https://www.googleapis.com/youtube/v3/videos",
        {
          part: "snippet, contentDetails",
          key: "AIzaSyDYwPzLevXauI-kTSVXTLroLyHEONuF9Rw",
          id: id
        },
        function(video) {
          var videoID = video.items[0].id;
          var videoDuration = convertTime(video.items[0].contentDetails.duration);
          $('.video .item-block[data-item="' + itemid + '"] .time').append(videoDuration);
        }
      )
    };
    function convertTime(duration) {
        var a = duration.match(/\d+/g);
        if (
            duration.indexOf("M") >= 0 &&
            duration.indexOf("H") == -1 &&
            duration.indexOf("S") == -1
        ) {
        a = [0, a[0], 0];
        }
        if (duration.indexOf("H") >= 0 && duration.indexOf("M") == -1) {
            a = [a[0], 0, a[1]];
        }
        if (
            duration.indexOf("H") >= 0 &&
            duration.indexOf("M") == -1 &&
            duration.indexOf("S") == -1
        ) {
            a = [a[0], 0, 0];
        }
        duration = 0;
        if (a.length == 3) {
            duration = duration + parseInt(a[0]) * 3600;
            duration = duration + parseInt(a[1]) * 60;
            duration = duration + parseInt(a[2]);
        }
        if (a.length == 2) {
            duration = duration + parseInt(a[0]) * 60;
            duration = duration + parseInt(a[1]);
        }
        if (a.length == 1) {
            duration = duration + parseInt(a[0]);
        }
        var h = Math.floor(duration / 3600);
        var m = Math.floor(duration % 3600 / 60);
        var s = Math.floor(duration % 3600 % 60);
        return (
            (h > 0 ? h + ":" + (m < 10 ? "0" : "") : "") +
            m +
            ":" +
            (s < 10 ? "0" : "") +
            s
        );
    }

    $('.video .item-block').click(function() {
      var videoid = $(this).attr('data-youtube');
      var frame = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' + videoid + '?autoplay=1" frameborder="0" allowfullscreen></iframe>';
      $('.popup-video').removeClass('hidden');
      $('.popup-video .inner').append(frame);
    });

    $('.popup-video .inner .fa').click(function() {
      $(this).parent('.inner').children('iframe').remove();
      $('.popup-video').addClass('hidden');
    });

    /** Функция выравнивания левой части шапки **/

    var lastchild = '<li class="dropdown"><a href="#" class="add dropdown-toggle" data-toggle="dropdown">ЕЩЕ</a><ul class="nav dropdown-menu"></ul></li>';

    function resizing() {

      if ( $('.container').outerWidth() <= 1170 && $('.container').outerWidth() > 750 ) {
        var maxwidth = $(document).width() - ( ( $(document).width() - $('.container').width() ) / 2 + ( $(document).width() * 0.1 + $('.offer').outerWidth() ) );
      } else {
        var maxwidth = $('.container').width();
      }

      if ( $('.navbar-toggle').css('display') == 'none' ) {
        var left = 0 - ( $(document).width() - $('.container').width() ) / 2 + $(document).width() * 0.1 ;
        $('.icon-menu .navbar-nav').css('margin-left', left);
        $('.logo').css('margin-left', left);
        for (
          i = 2,
          items = $('.header-menu .navbar-nav > li').length;
          i < items;
          i++
        ) {

          var headermenuwidth = $('.header-menu .navbar-nav').outerWidth();
          if (headermenuwidth > maxwidth) {
            if (!$('.header-menu .navbar-nav > li:eq(-1) a').hasClass('add')) {
              $('.header-menu .navbar-nav').append(lastchild);
            }
            //$('.header-menu .navbar-nav li:eq(-' + i + ')').addClass('hidden');
            $('.header-menu .navbar-nav > li:eq(-' + i + ')').prependTo('.header-menu .navbar-nav > li.dropdown .dropdown-menu');
          };

          var mainmenuwidth = $('.main-menu .navbar-nav').outerWidth();
          if (mainmenuwidth > maxwidth) {
            if (!$('.main-menu .navbar-nav li:eq(-1) a').hasClass('add')) {
              $('.main-menu .navbar-nav').append(lastchild);
            }
            //$('.main-menu .navbar-nav li:eq(-' + i + ')').addClass('hidden');
            $('.main-menu .navbar-nav > li:eq(-' + i + ')').prependTo('.main-menu .navbar-nav > li.dropdown .dropdown-menu');
          };

        };
      } else {
        $('.header-menu .navbar-nav li a.add').parent('li').remove();
        $('.main-menu .navbar-nav li a.add').parent('li').remove();
      };
    };

    $(document).ready(function() {
      resizing();
    });

    $(window).resize(function() {
      resizing();
    });
    /** Туры **/
    (function ($) {

        $('#items .tour .img').bind('touchstart touchend', function (event) {
            event.preventDefault();
            $(this).parent().toggleClass('onhover');
        });

        $('#items .tour .img').hover(function (event) {
            event.preventDefault();

            $(this).parent().toggleClass('onhover');

        });

    })(jQuery);

    // SelectFx кастомизация select
    (function () {
        [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {
            new SelectFx(el);
        });
    })();
    // JQRangeSlider сщздание ползунков выбора
    $('#filter-slider').rangeSlider({
        arrows:false,
        bounds: {min: 1200, max: 25000},
        defaultValues:{min: 2500, max: 15000},
        formatter:function(val){
            var value = Math.round(val);
            return value+" р";
        }
    });
    $('#filter-slider_single').rangeSlider({
        arrows:false,
        bounds: {min: 12, max: 60},
        defaultValues:{min: 18, max: 36}
    });
    //  datepicker окно выбора даты

    $.datepicker.setDefaults($.datepicker.regional['ru']);

    var DP = $('.filter__item__date__inp, input[name*="DATE"]');
    DP.datepicker({
        minDate: new Date()
    });


    $('form.js-add-review').on('submit', function (e) {

        e.preventDefault();

        var curForm = $(this),
            waitElement = curForm.find('input[type="submit"], button[type="submit"]').get(0);

        BX.showWait(waitElement);

        $.post($(this).attr('action'), $(this).serialize(), function (ans) {

            curForm.find('input:not([type="submit"]):not([type="button"]), textarea').css({'border': '1px solid #E9EBEE'});

            console.log(ans.errors)
            if (ans && ans.errors)
            {
                curForm.find('.form__comment__add__block__item__error').empty();
                for(var inputName in ans.errors)
                {
                    curForm.find('[name="' + inputName + '"]').first().css({border: '1px solid red'})
                        .closest('.form__comment__add__block__item').find('.form__comment__add__block__item__error').html(ans.errors[inputName]);
                }
            }
            else
            {
                //ok
                //set gtm event
                if(ans.gtmObject)
                {
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push(ans.gtmObject);
                }
                //show message
                $.fancybox.open(ans.message);
                //clear input value
                curForm.find('input:not([type="submit"]):not([type="button"]), textarea').val('');
            }

            BX.closeWait(waitElement);
        }, 'json');
        return false;
    });

    /** Конец скриптов **/
});


var coreJsSwitchElement = {
    init: function () {
        // Переменные
        //...
        this.$arElements = $('[data-js-core-switch-element]');
        //...
        this.load();
    },
    load: function () {
        // Обработка DATA
        this.$arElements.each(function () {
            var $this = $(this),
                $name = $this.data('js-core-switch-element'),
                $text = $this.text();
            $textSwitch = $this.data('js-core-switch-element-text');

            $this.data({
                element:     $('.' + $name),
                text:        $text,
                textSwitch:  $textSwitch
            });
        });
        this.activation();
    },
    activation: function() {
        this.$arElements.each(function () {
            var $this = $(this);
            $($this).on('click', function(){
                $this.toggleClass('active');
                $this.data('element').toggleClass('active');

                if(!!$this.data('textSwitch') && $this.data('element').hasClass('active')){
                    $this.text($this.data('textSwitch'));
                }else {
                    $this.text($this.data('text'));
                }
            });
        });
    }
};
var Seacrch = {
    init: function () {
        // Переменные
        //...
        var $this = $('.search__btn__close');
        //...
        $this.on('click', function(){
            $('.search__header').removeClass('active');
        });

    }
};


//new order bus-rent

$(function () {
    $('#order-rent_bus').on('submit', function (e) {

        e.preventDefault();

        var curForm = $(this),
            waitElement = curForm.find('input[type="submit"], button[type="submit"]').get(0);

        BX.showWait(waitElement);

        $.post($(this).attr('action'), $(this).serialize(), function (ans) {

            BX.closeWait(waitElement);

            curForm.find('input:not([type="submit"]):not([type="button"]), .cs-placeholder').css({'border': '1px solid green'});

            if (ans && ans.errors)
            {
                curForm.find('.it-error').empty();
                for(var inputName in ans.errors)
                {
                    curForm.find('[name="' + inputName + '"]').first().css({'border' : '1px solid red'})
                        .closest('.it-block').find('.it-error').html(ans.errors[inputName]);
                    curForm.find('[name="' + inputName + '"]').siblings('.cs-placeholder').css({'border' : '1px solid red'});
                }

            }
            else
            {
                $.fancybox.open('Ваша заявка на аредну автобуса отправлена! <br> В скором времени вам ответят! ');
                curForm.find('input.js-clearable:not([type="checkbox"]), textarea.js-clearable').val('');
                curForm.find('.cs-placeholder').text('');
            }
        }, 'json');
        return false;
    })
});


//new order transfer

$(function () {
    $('#order-transfer').on('submit', function (e) {

        e.preventDefault();

        var curForm = $(this),
            waitElement = curForm.find('input[type="submit"], button[type="submit"]').get(0);

        BX.showWait(waitElement);

        $.post($(this).attr('action'), $(this).serialize(), function (ans) {

            BX.closeWait(waitElement);

            curForm.find('input:not([type="submit"]):not([type="button"]), select , .cs-placeholder').css({'border': '1px solid green'});

            if (ans && ans.errors)
            {
                curForm.find('.it-error').empty();
                for(var inputName in ans.errors)
                {
                    curForm.find('[name="' + inputName + '"]').first().css({'border' : '1px solid red'})
                        .closest('.it-block').find('.it-error').html(ans.errors[inputName]);
                    curForm.find('[name="' + inputName + '"]').siblings('.cs-placeholder').css({'border' : '1px solid red'});
                }
            }
            else
            {
                $.fancybox.open('Ваша заявка трансфера отправлена! <br> В скором времени Вам ответят');
                curForm.find('input.js-clearable:not([type="checkbox"]), textarea.js-clearable').val('');
                curForm.find('.cs-placeholder').text('');
            }
        }, 'json');
        return false;
    })
});
/** Автоматическая прокрутка слайдера **/
$(function() {
    window.sliderIntervalTime = 3000;
    function func() {
        $('a.slider-control.right').click();
    }
    window.intervalID_ONE = setInterval(func,window.sliderIntervalTime);

        $('.slider.carousel-inner').mouseover(
             function() {
                 clearInterval(window.intervalID_ONE);
                 clearInterval(window.intervalID_TWO);
            }
        ).mouseout(
            function () {
                window.intervalID_TWO = setInterval(func,window.sliderIntervalTime);
            });
});