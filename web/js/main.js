/**
 * Created by jared on 24/10/2016.
 */
$(function(){
    $('#modalButton').click(function () {
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });
});
