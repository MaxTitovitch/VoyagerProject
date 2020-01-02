$(document).ready(function() {
    handleMainMenu();
});

var handleMainMenu = function () {
    handleMenu();
};

var handleMenu = function () {
    addBootstrapClasses();
    addMenuEvents();
    removeMainPage();
    addEventHoverForMenu();
    changeImageHeight();
    updateSizeDropdown();
    handleScroll();
};

var addBootstrapClasses = function () {
    var menuList = $('.main-menu nav div > ul').addClass('navbar-nav mr-auto');
    var menuItemsList = menuList.children('li');
    menuItemsList.each(function(i, item) {
        item = $(item).addClass('nav-item');
        item.children('a').addClass('nav-link');
        addDropDownClasses(item);
    });
};

var addDropDownClasses = function (listItem) {
    if(listItem.children('ul').length > 0){
        listItem.addClass('dropdown');
        var id = changeIdLink(listItem);
        var dropdownItem = listItem.children('ul').addClass('dropdown-menu dropdown-menu-right').attr('aria-labelledby', id);
        // dropdownItem.children('li').addClass('dropdown-item');
    }
};

var changeIdLink = function (listItem) {
    var listItemLink = listItem.children('a');
    var linkParts = listItemLink.attr('href').split('/');
    var id = linkParts[linkParts.length-1];
    listItemLink.attr('id', id);
    return id;
};

var addMenuEvents = function () {
    addEventDropdownOn();
    addEventDropdownOff();
};

var addEventDropdownOn = function () {
    $('.dropdown').mouseenter(function () {
        var displayBlock = {display: 'block'};
        $(this).children('.dropdown-menu').css(displayBlock);
    });
};

var addEventDropdownOff = function () {
    $('.dropdown').mouseleave(function () {
        var displayNone = {display: 'none'};
        $(this).children('.dropdown-menu').css(displayNone);
    });
};

var removeMainPage = function () {
    var menuItems = $('.main-menu .nav-item');
    menuItems.eq(0).remove();
};

var addEventHoverForMenu = function () {
    changeHover(function () {
        if(!$(this).hasClass('active')) {
            changeBackground(this, '#fff');
            changeColor($(this).children('a').children('span'), '#222');
        }
    }, function () {
        if(!$(this).hasClass('active')) {
            changeBackground(this, 'rgba(0,0,0,0)');
            changeColor($(this).children('a').children('span'), '#fff');
        }
    });
};

var changeHover = function (functionEnter, functionLeave) {
    $('.main-menu nav div > ul > li').hover(functionEnter, functionLeave);
}

var changeBackground = function (element, color) {
    $(element).css({'background-color': color})
};

var changeColor = function (element, color) {
    $(element).css({'color': color})
};

var changeImageHeight = function () {
    $('.logo-image').css({height: $('.main-menu .nav-item').height()})
};

var handleScroll = function (event) {
    var lastScrollTop = -1, currentScrollTop = 0;
    $(window).scroll(function () {
        currentScrollTop = $(window).scrollTop();
        if (currentScrollTop < 50) {
            if(currentScrollTop > lastScrollTop) {
                minimizeMenu();
            } else {
                maximizeMenu();
            }
        }
        lastScrollTop = currentScrollTop;
    });
};

var minimizeMenu = function () {
    changeMenuSize('55px', 'img/logo-dark.png',  'rgba(0,0,0,0.5)', '#fff', '#fff', "#002596");
};

var maximizeMenu = function () {
    changeMenuSize('110px', 'img/logo.png', '#fff', '#222', 'rgba(0,0,0,0)', "#fff");
};

var changeMenuSize = function (height, src, color, colorHover, background, backgroundHover){
    changeSources(height, src, background);
    changeColors (color, colorHover, background, backgroundHover)
    addEventHoverToItems(color, colorHover, background, backgroundHover);
    changeImageHeight();
};

var changeSources = function (height, src, background) {
    $('.navbar-nav > li').css({'height':  height,});
    $('header').css({'background': background});
    $('.logo-image').attr('src', src);
};

var changeColors = function (color, colorHover, background, backgroundHover) {
    var templateSelector = '.main-menu nav div > ul > ';
    $(templateSelector + 'li').css({'background-color': background});
    $(templateSelector + '.active > a').css({'color': color, 'background': backgroundHover});
    $(templateSelector + 'li > a > span').css({'color': color});
    $(templateSelector + '.active > a > span').css({'color': colorHover});
};

var addEventHoverToItems = function (color, colorHover, background, backgroundHover) {
    changeHover(function () {
        if(!$(this).hasClass('active')) {
            changeBackground(this, backgroundHover);
            changeColor($(this).children('a').children('span'), colorHover);
        }
    }, function () {
        if(!$(this).hasClass('active')) {
            changeBackground(this, background);
            changeColor($(this).children('a').children('span'), color);
        }
    });
};

var updateSizeDropdown = function () {
    var items = $('.dropdown-menu');
    var maxWidth = 0;

    for (let i = 0; i < items.length; i++) {
        if(maxWidth < items.eq(i).width()) {
            maxWidth = items.eq(i).width();
        }
    }
    $('.dropdown-menu').width(maxWidth + 'px');
};
