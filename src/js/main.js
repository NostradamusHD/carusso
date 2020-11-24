import $ from 'jquery';
import './foundation/foundation-explicit-pieces'

$(document).foundation();

//window.addEventListener('contextmenu', ev => ev.preventDefault());

$(function() {

  /**
   * Menu Mobile
   */
  const buttonOpenMenu = $('#button-open-menu')
  const buttonCloseMenu = $('#button-close-menu')
  const mainMenu = $('#main-menu')
  const mainMenuBackground = $('.main-menu__background')
  
  buttonOpenMenu.on('click', function() {
    mainMenu.addClass('main-menu-active')
    mainMenuBackground.addClass('main-menu__background-active')
  })
  
  buttonCloseMenu.on('click', function() {
    mainMenu.removeClass('main-menu-active')
    mainMenuBackground.removeClass('main-menu__background-active')
  })

  mainMenuBackground.on('click', function() {
    mainMenu.removeClass('main-menu-active')
    $(this).removeClass('main-menu__background-active')
  })

  /**
   * Sub Menu Mobile
   */
  const itemMenu = $('#main-menu > li').has('ul')
  const buttonDownSubMenu = $('#main-menu > li > .main-menu__button')

  buttonDownSubMenu.on('click', function() {
    if($(window).width() < 1024) {
      $(this).toggleClass('active')
      $(this).siblings('ul').toggleClass('active')
    }
  })
  itemMenu.on('mouseenter mouseleave', function() {
    if($(window).width() >= 1024) {
      $(this).children('ul').toggleClass('active')
    }
  })

  $(window).on('resize', function() {
    buttonDownSubMenu.removeClass('active')
    itemMenu.children('ul').removeClass('active')
  })

  /**
   * Search Form
   */
  const buttonOpenSearch = $('#button-open-search')
  const formSearch = $('#form-main-search')
  const buttonCloseSearch = $('#button-close-search')

  buttonOpenSearch.on('click', function(e) {
    e.preventDefault()
    formSearch.toggleClass('active')
  })

  buttonCloseSearch.on('click', function(e) {
    e.preventDefault()
    formSearch.removeClass('active')
  })

  /**
   * Mini Cart Lateral
   */
  const buttonMiniCartMobile = $('#button-minicart-mobile')
  const buttonMiniCartDesktop = $('#button-minicart-desktop')
  const buttonCloseMiniCart = $('#button-close-minicart')
  const miniCart = $('#minicart')
  const backgroundMiniCart = $('#background-minicart')

  buttonMiniCartDesktop.on('click', function(e) {
    e.preventDefault()
    backgroundMiniCart.addClass('active')
    miniCart.addClass('active')
  })

  buttonMiniCartMobile.on('click', function(e) {
    e.preventDefault()
    backgroundMiniCart.addClass('active')
    miniCart.addClass('active')
  })

  buttonCloseMiniCart.on('click', function(e) {
    e.preventDefault()
    backgroundMiniCart.removeClass('active')
    miniCart.removeClass('active')
  })

  backgroundMiniCart.on('click', function(e) {
    e.preventDefault()
    $(this).removeClass('active')
    miniCart.removeClass('active')
  })


  /**
   * Buttons Quantity
   */

  $(document).on('click','.group-quantity-buttons button',function () {

    var btn = $(this);
    var oldValue = btn.closest('.group-quantity-buttons').find('input').val().trim();
    var newVal = 0;

    if( btn.attr('data-dir') == 'up' ) {
      newVal = parseInt(oldValue) + 1;
    } else {
      if(oldValue > 1) {
        newVal = parseInt(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
  
    btn.closest('.group-quantity-buttons').find('input').val(newVal);
  });
})

