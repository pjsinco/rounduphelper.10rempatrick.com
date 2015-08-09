$(document).ready(function() {

    var newVue = function(vueData) {
        new Vue({
        
            el: '#workspace',
        
            data: vueData,
        
            methods: {
        
            },
        
            ready: function() {
        
                console.log('hi from vue');
        
            }
        
        });
    };

    $('select#articleType').change(function(e) {
        var selected = $(this).val();
        var form = $('form#selectArticleType').serialize();

        $.get('form', form, function(data, textStatus) {
            $('#form').html(data);

            var vueData = {};
            switch (selected) {
                case 'top-story' | 'feature' | 'brief':
                    vueData = {
                        kicker: '',
                        headline: '',
                        excerpt: '',
                        link: '',
                        imageUrl: '',
                    };
                    break;
                 case 'quote' :
                    vueData = {
                        quote: '',
                        quoter: '',
                        link: ''
                    };
                    break;
                 case 'date' :
                    vueData = {
                        date: ''
                    };
                    break;
                 case 'section-title' :
                    vueData = {
                        section_title: 'More stories'
                    };
                    break;
            }
            newVue(vueData);
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

//new Vue({
//
//    el: '#form',
//
//    data: {
//        kicker: 'lorem vue kicker',
//    },
//
//    methods: {
//
//    },
//
//    ready: function() {
//
//        console.log('hi from vue');
//
//    }
//
//});

//# sourceMappingURL=app.js.map