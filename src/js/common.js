import { WOW } from 'wowjs';
const autosize = require('autosize/dist/autosize');
import 'hammerjs';
import '@fancyapps/fancybox/dist/jquery.fancybox.min';
import Swiper from 'swiper/swiper-bundle.min.js';
import './svg-sprite';

$(document).ready(function () {
    'use strict';

    // init wow
    let wow = new WOW({
        live: false
    });
    wow.init();

    // init fancybox
    $("[data-fancybox]").fancybox({
        loop: true,
        infobar : false,
    });

    $(window).on('resize', function () {
        if ($(window).width() >= 768) {
            if ($('.blog-aside.show').length) {
                $('.blog-aside').removeClass('show');
            }
        }
            
        if ($(window).width() >= 992) {
            if ($('.main-header__menu.show').length) {
                closeMenu();
            }
        }
    });

    // input change class on fill
    $('input, textarea').on('change', function () {
        if ($(this).val()) {
            $(this).addClass('is-filled');
        } else {
            $(this).removeClass('is-filled');
        }
    })

    $('.form').on('reset', function(){
        $(this).find('input, textarea').each(function(){
            $(this).removeClass('is-filled');
        })
    })

    // textareas autosize
    autosize($('textarea'));

    /**
     * header mobile menu
     */
    $('.js-menu-btn').on('click', function () {
        $(this).toggleClass("active");
        $('.main-header__menu').toggleClass('show');
        $('body').toggleClass('overflow');
    });

    $(document).on('mouseup', function (e) {
        if ($('.main-header__menu.show').length) {
            if (!$('.main-header__menu').is(e.target) &&
                $('.main-header__menu').has(e.target).length === 0 &&
                !$('.js-menu-btn').is(e.target) &&
                $('.js-menu-btn').has(e.target).length === 0) {
                closeMenu();
            }
        }
    });

    function closeMenu() {
        $('.js-menu-btn').removeClass('active');
        $('.main-header__menu').removeClass('show');
        $('body').removeClass('overflow');
    }

    /**
     *  Anchor services links
     */
    $(".services-nav__link").click(function(e){
        e.preventDefault();
        let item = $($(this).attr("href"));
        item[0].scrollIntoView({
            behavior: 'smooth'
        });
        $(".service").removeClass("service--scrolled");
        setTimeout(function(){
            item.addClass("service--scrolled");
        }, 700)
    })

    /** 
     * Filters
     */
    $(".filter__current").click(function(e){
        e.preventDefault();
        $(this).parent().toggleClass("filter--opened");
    })

    $(document).on('mouseup', function(e){
        if ($('.filter--opened').length) {
            if (!$('.filter').is(e.terget) &&
                $('.filter').has(e.target).length === 0) {
                $('.filter').removeClass('filter--opened');
            }
        }
    });

    $(".filter__item").on('click', function(e){
        e.preventDefault();
        $(".filter__current").text($(this).text());
        $('.filter').removeClass('filter--opened');
    })

    /**
     * Blog bottom panel mobile
     */
    $('.blog-aside').on('click', function(){
        if ($(window).width() < 768) {
            $(this).addClass('show');
        }
    })

    $(document).on('mouseup scroll', function(e){
        if ($(window).width() < 768) {
            if ($('.blog-aside.show').length) {
                if (!$('.blog-aside').is(e.terget) &&
                    $('.blog-aside').has(e.target).length === 0) {
                    $('.blog-aside').removeClass('show');
                }
            }
        }
    });

    if ($('.blog').length) {
        // add swiper events
        var myElement = document.getElementsByClassName('blog-aside');
        var mc = new Hammer(myElement[0]);
        mc.get('pan').set({ direction: Hammer.DIRECTION_VERTICAL });
        mc.on("panup", function() {
            $('.blog-aside').addClass('show');
        });
        mc.on("pandown", function() {
            $('.blog-aside').removeClass('show');
        });
    }

    // mobile bottom panels hide on footer
    var scrollBottom = false;
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
            if (!scrollBottom) {
                scrollBottom = true;
            }
        }
        else if (scrollBottom) {
            scrollBottom = false;
        }
    });

    // Contacts banner
    $("#contacts-reason-4").on("change", function(){
        if ($(this).is(":checked")) {
            $(".form__banner").fadeIn();
        } else {
            $(".form__banner").hide();
        }
    });
    
    // faq modal fancybox
    $('.faq-item__button').fancybox({
        touch: false,
        backFocus: false,
        afterLoad: function(){
            var target = $.fancybox.getInstance().current.opts.$orig,
                faqItem = $(target).parents(".faq-item"),
                title = faqItem.find(".faq-item__title").html(),
                text = faqItem.find(".faq-item__text").html();
            $(".modal__title").html(title);
            $(".modal__text").html(text);
        }
    });

    // letters swiper
    let swiper = new Swiper((".letters__slider"), {
        loop: true,
        navigation: {
            nextEl: ".swiper-button--next",
            prevEl: ".swiper-button--prev",
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets'
        },
        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 50,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 50,
            }
        }
    });

    // 100 vh fix
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');
    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', vh + 'px');
    });

}); // end ready