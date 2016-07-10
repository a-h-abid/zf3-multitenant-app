function adminLteSidebarActiveMenu(sidebarActiveMenu, sidebarMenu) {
    sidebarMenu.find('.treeview').removeClass('active');
    sidebarMenu.find('.treeview-menu').removeClass('menu-open');

    // Set Active Tree Menu
    sidebarActiveMenu.parents('.treeview-menu').addClass('menu-open');
    sidebarActiveMenu.parents('.treeview').addClass('active');
}

$(document).ready(function(){

    var sidebar = $('.main-sidebar'),
        sidebarMenu = sidebar.find('.sidebar-menu'),
        sidebarActiveMenu = sidebarMenu.find('.active').not('.treeview'),
        sidebarSearch = $('#sidebar-search');

    adminLteSidebarActiveMenu(sidebarActiveMenu, sidebarMenu);

    sidebarSearch.on('keyup', function(e){

        var $self = $(this),
            text = $self.val();



    });

});