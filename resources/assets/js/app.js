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
                    console.log(msg);
                    if (successful) {
                        $('#highlight').effect('highlight', 'slow');
                    }
                },

                onClick: function() {
                    console.log('onclick');
                },
                refreshClone: function() {

                },

                cloneRenderedVersion: function() {

                    var htmlVersion = document.getElementById('highlight');
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
                $('#highlight').html(data);
                console.log('got rendered');
            }
        });
    };

    function render() {
        var selected = $('select#articleType').val();
        var form = $('form#selectArticleType').serialize();
        
        // clear the cloned section
        $('#workspace').fadeToggle(300, function() {
            $('#clone').text('');
            $('#highlight').html('');
            $('#form').html('');

            vueData = setVueData(selected);
    
            var request = getForm(form, selected),
                chained = getRendered(selected);

            chained.done(function() {
                newVue(vueData);
                // leave "More stories" in the input
                if ($('input').val() != 'More stories') {
                    $('input').val('');
                }
                $('#workspace').delay(300).fadeToggle(300);
            });
        });
    };

    function setVueData(selected) {
        vueData = {};

        switch (selected) {
            case 'top-story':
                vueData = {
                    kicker: 'lorem kicker',
                    headline: 'Lorem headline',
                    excerpt: 'Lorem excerpt',
                    link: '',
                    imageUrl: 'http://placehold.it/480x320',
                };
                break;
             case 'feature':
                vueData = {
                    kicker: 'lorem kicker',
                    headline: 'Lorem headline',
                    excerpt: 'Lorem excerpt',
                    link: '',
                    imageUrl: 'http://placehold.it/320x213',
                    ruleBelow: true,
                    ruleAbove: false,
                };
                break;
             case 'brief':
                vueData = {
                    kicker: 'lorem kicker',
                    headline: 'Lorem headline',
                    excerpt: 'Lorem excerpt',
                    link: '',
                    imageUrl: 'http://placehold.it/134x89',
                };
                break;
             case 'quote' :
                vueData = {
                    quote: 'Lorem quote',
                    quoter: 'Lorem quoter',
                    link: ''
                };
                break;
             case 'date' :
                vueData = {
                    date: 'Lorem'
                };
                break;
             case 'section-title' :
                vueData = {
                    section_title: 'More stories'
                };
                break;
        }

        return vueData;
    };

    $('select#articleType').change(render);

    $('#workspace').on('click', '#refresh', render);

    // kick things off
    render();

});
