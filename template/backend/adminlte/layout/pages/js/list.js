$(function () {

    $('#grid-panel').DataTable({
        "responsive": true,
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": true
    });


    $('#prompt-box').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var promptTitle = button.data('promptTitle');
        var promptMessage = button.data('promptMessage');
        var promptAccept = button.data('promptAccept');
        var promptReject = button.data('promptReject');
        var formMethod = button.data('promptVerb');
        var formUrl = button.data('promptUrl');

        var modal = $(this);
        modal.find('.modal-title').text(promptTitle);
        modal.find('.modal-body').text(promptMessage);
        modal.find('.modal-footer button[data-reject]').text(promptReject);
        modal.find('.modal-footer button[data-accept]').text(promptAccept);
        modal.find('.prompt-form')
                .attr('method', formMethod == 'get' ? 'get' : 'post')
                .attr('action', formUrl)
                .find('input[name="_method"]').val(formMethod);

    })

});