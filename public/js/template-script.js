$(document).ready(function() {
    handleMainMenu();
});

var handleMainMenu = function () {
    handleMenu();
};

var handleMenu = function () {
    addBootstrapClasses();
    addMenuEvents();
};

var addBootstrapClasses = function () {
    var menuList = $('.main-menu nav div > ul').addClass('navbar-nav mr-auto');
    var menuItemsList = menuList.children('li');
    menuItemsList.each(function(i, item) {
        item = $(item).addClass('nav-item');
        item.children('a').addClass('nav-link');
        addDropDownClasses(item);
    });
}

var addDropDownClasses = function (listItem) {
    if(listItem.children('ul').length > 0){
        listItem.addClass('dropdown');
        var id = changeIdLink(listItem);
        var dropdownItem = listItem.children('ul').addClass('dropdown-menu').attr('aria-labelledby', id);
        dropdownItem.children('ul').addClass('dropdown-item');
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
