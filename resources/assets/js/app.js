$(document).ready(function() {

    var vueData = {};

    var newVue = function(vueData) {
        new Vue({
            el: '#workspace',
            data: vueData,
            methods: {
                copyHtml: function() {

                    this.cloneRenderedVersion();
                    
                    var range = document.createRange();
                    var selection = document.querySelector('#clone');
                    range.selectNode(selection)
                    window.getSelection().addRange(range);
                    var successful = document.execCommand('copy');
                    var msg = successful ? 'successful' : 'not successful';
                    alert('copying was ' + msg);
                },

                cloneRenderedVersion: function() {

                    var htmlVersion = document.getElementById('rendered');
                    $('#clone').text(htmlVersion.innerHTML);
                }
            },
            ready: function() {
                console.log('ready');
            },
            attached: function() {
                console.log('attached');
            }
        });
    };

    function getForm(form, selected) {
        return $.ajax('form', {
            data: form, 
            async: false,
            success: function(data) {
                $('#form').html(data);
                console.log('got form');
            }
        })
    };

    function getRendered(selected) {
        return $.ajax('render/' + selected, {
            async: false,
            success: function(data) {
                $('#rendered').html(data);
                console.log('got rendered');
            }
        });
    };

    $('select#articleType').change(function(e) {

        var selected = $(this).val();

        // clear the cloned section
        $('#workspace').fadeToggle(300, function() {
            $('#clone').html('');
            $('#rendered').html('');
            $('#form').html('');

            vueData = {};

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

            var form = $('form#selectArticleType').serialize();
    
            var request = getForm(form, selected),
                chained = getRendered(selected);

            chained.done(function() {
                newVue(vueData);
                $('#workspace').delay(300).fadeToggle(300);
            });

        });
    });

});
