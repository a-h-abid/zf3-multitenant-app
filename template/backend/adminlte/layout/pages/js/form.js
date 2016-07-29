$.AdminLTE.form = $.AdminLTE.form || {};

$.AdminLTE.form.styleCheckboxRadio = {

    init : function() {
        $('input:checkbox, input:radio').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    }

};

$.AdminLTE.form.tabsets = {

    init : function() {
        var tabsets = $('form .tab-pane');
        if ( tabsets.length > 0 )
        {
            var tabNames = [];
            tabsets.each(function(i,tabEl){
                var $tabEl = $(tabEl),
                    tabButtons = $('<div class="btn-tabs">');
                tabNames.push($tabEl.attr('title'))

                $tabEl.attr('id', ['tab-',i].join(''));

                if (i > 0)
                    tabButtons.append(['<a class="btn btn-info" href="#tab-', i-1, '">', 'Prev', '</a>'].join(''))
                if (i < (tabsets.length - 1))
                    tabButtons.append(['<a class="btn btn-info pull-right" href="#tab-', i+1, '">', 'Next', '</a>'].join(''))

                $tabEl.append(tabButtons);

            });

            var tabList = $('<ul class="nav nav-tabs" role="tablist">');
            for (i=0; i < tabNames.length; i++)
            {
                tabList.append( ['<li role="presentation">', '<a href="#tab-', i, '" role="tab">', tabNames[i], '</a>', '</li>'].join('') );
            }

            tabsets.wrapAll('<div class="tab-content">');

            // Make 1st One Active
            var tabContent = $('form .tab-content');
            tabContent.find('.tab-pane').first().addClass('active');
            tabList.find('li').first().addClass('active');
            tabContent.before(tabList);

            // Add our Custom Nav Tab Style
            $('form ul.nav-tabs, form .tab-content').wrapAll('<div class="nav-tabs-custom">');

            $('form ul.nav.nav-tabs a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });

            $('form .btn-tabs a').click(function (e) {
                e.preventDefault();
                $(['form ul.nav.nav-tabs a[href="', $(this).attr('href'), '"]'].join('')).click();
            });
        }
    }
};

$(function () {

    $.AdminLTE.form.styleCheckboxRadio.init();
    $.AdminLTE.form.tabsets.init();

});