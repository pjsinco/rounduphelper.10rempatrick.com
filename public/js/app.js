$(document).ready(function() {

    $('select#articleType').change(function(e) {
        var selected = $(this).val();
        console.log('select value: ' + $(this).val());

        $.get('item/create', selected, function(data, textStatus) {
                console.log(textStatus);
                console.log(data);
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