$(document).ready(function() {

    console.log('hiya');

    $('select#articleType').change(function(e) {
        var selected = $(this).val();
        //console.log(selected);

        $('#form').load(
            'item/create', 
            selected,
            function() {
                console.log('loaded ' + selected);
            })
    
    })


});

//# sourceMappingURL=app.js.map