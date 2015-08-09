$(document).ready(function() {

    $('select#articleType').change(function(e) {
        var selected = $(this).val();
        var form = $('form#selectArticleType').serialize();

        $.get('form', form, function(data, textStatus) {
            $('#form').html(data);
        });

        $.get('render/' + selected, function(data) {
            //console.log(data);
            $('#rendered').html(data);
        });

//        $('#form').load(
//            'item/create', 
//            selected,
//            function() {
//                console.log('loaded ' + selected);
//            })
    
    })


});

//# sourceMappingURL=app.js.map