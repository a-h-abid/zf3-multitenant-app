$.AdminLTE.sidebar = {

    sidebarAside      : $('.main-sidebar'),
    sidebarSearch     : $('#sidebar-search'),
    sidebarMenu       : $('.sidebar-menu'),
    sidebarActiveMenu : $('.sidebar-menu').find('.current-menu').not('.treeview'),
    sidebarTreeList   : $('.sidebar-menu').find('.treeview,.treeview-item'),
    sidebarTreeMenu   : $('.sidebar-menu').find('.treeview-menu'),

    init : function() {
        this.showActiveMenuTree();

        this.sidebarSearch.on('keyup', this.bindSearchBoxEvent);
    },


    showActiveMenuTree : function() {
        this.sidebarTreeList.removeClass('active');
        this.sidebarTreeMenu.removeClass('menu-open');

        // Set Active Tree Menu
        this.sidebarActiveMenu.parents('.treeview-menu').addClass('menu-open');
        this.sidebarActiveMenu.parents('.treeview').addClass('active');
    },


    bindSearchBoxEvent : function(e) {
        var $self = $(this),
            text = $.trim($self.val());

        if (text == '') {
            $.AdminLTE.sidebar.sidebarMenu.find('.hidden').removeClass('hidden');
            return $.AdminLTE.sidebar.showActiveMenuTree();
        } else {
            $.AdminLTE.sidebar.sidebarMenu.find('.treeview,.treeview-menu,.treeview-item').removeAttr('style');
            $.AdminLTE.sidebar.sidebarTreeList.addClass('active').addClass('hidden');
            $.AdminLTE.sidebar.sidebarTreeMenu.addClass('menu-open').addClass('hidden');
        }

        $.AdminLTE.sidebar.sidebarMenu.find('.menu-name').each($.AdminLTE.sidebar.matchMenuPattern);
    },


    matchMenuPattern : function(i, el) {

        var $el = $(el),
            text = $.trim($.AdminLTE.sidebar.sidebarSearch.val()),
            menuName = $el.text(),
            menuListItem = $el.closest('li');

        if ($.AdminLTE.sidebar.fuzzyMatch(menuName, text) != '') {
            menuListItem.removeClass('hidden');
            menuListItem.attr('data-menu-fuzzy-matched', '1');
            menuListItem.parents('.treeview,.treeview-item,.treeview-menu').removeClass('hidden');
        } else {
            menuListItem.attr('data-menu-fuzzy-matched', '0');

            if (menuListItem.closest('.treeview-item').attr('data-menu-fuzzy-matched') == '1') {
                menuListItem.closest('.treeview-menu').removeClass('hidden');
                menuListItem.removeClass('hidden');
            } else {
                menuListItem.addClass('hidden');
            }
        }
    },


    fuzzyMatch : function(text, search) {
        /**
         * Parameter text is a title, search is the user's search
         */
        // remove spaces, lower case the search so the search
        // is case insensitive
        var search = search.replace(/\ /g, '').toLowerCase();
        var tokens = [];
        var search_position = 0;

        // Go through each character in the text
        for (var n=0; n<text.length; n++)
        {
            var text_char = text[n];
            // if we match a character in the search, highlight it
            if(search_position < search.length &&
              text_char.toLowerCase() == search[search_position])
            {
                //text_char = '<b>' + text_char + '</b>';
                search_position += 1;
            }
            tokens.push(text_char);
        }

        // If are characters remaining in the search text,
        // return an empty string to indicate no match
        if (search_position != search.length)
        {
            return '';
        }
        return tokens.join('');
    },
};


$(document).ready(function() {

    $.AdminLTE.sidebar.init();

});