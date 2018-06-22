$(function(){
    $('.company-item').click(showEditPopup);
    $('.search-button').click(function() {
        var query = $('#search_form_query').val();
        if (query.length > 1) {
            $.post('/company/search', {'query':query}, showCompanyList);
        }
    });
    $('#editCompany').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();
    });

});

function showCompanyList(data) {
     $('.list-group').replaceWith(data);
}

function showEditPopup() {
    $('input#app_bundle_company_edit_title').val($(this).children('.title').text());
    $('input#app_bundle_company_edit_password').val('');
    $('input#app_bundle_company_edit_id').val($(this).children('.id').text());
    $('#editCompany').modal('show');
}