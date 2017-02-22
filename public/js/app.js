$(function () {

});

if (typeof Object.assign != 'function') {
  Object.assign = function(target, varArgs) { // .length of function is 2
    'use strict';
    if (target == null) { // TypeError if undefined or null
      throw new TypeError('Cannot convert undefined or null to object');
    }

    var to = Object(target);

    for (var index = 1; index < arguments.length; index++) {
      var nextSource = arguments[index];

      if (nextSource != null) { // Skip over if undefined or null
        for (var nextKey in nextSource) {
          // Avoid bugs when hasOwnProperty is shadowed
          if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
            to[nextKey] = nextSource[nextKey];
          }
        }
      }
    }
    return to;
  };
}

var colorMap = {
  purple: {
    full: '#a464c5',
    tint: '#DBC1E8',
    lightest: '',
  },
  red: {
    full: '#f26046',
    tint: '#FABFB5',
    lightest: '#FDE9E6',
  },
  green: {
    full: '#7abfb4',
    tint: '#D7EBE8',
    lightest: '',
  },
  blue: {
    full: '#4e98da',
    tint: '#B8D6F0',
    lightest: '#E8F1FA',
  },
};

var categoryColors = {
  "AOA Communication": colorMap.green,
  "Original Contribution": colorMap.purple,
  "Reviews": colorMap.purple,
  "Evidence-Based Clinical Reviews": colorMap.purple,
  "Clinical Review": colorMap.purple,
  "Clinical Practice": colorMap.purple,
  "Brief Report": colorMap.purple,
  "Medical Education": colorMap.purple,
  "Case Report": colorMap.purple,
  "Special Communication": colorMap.purple,
  "Special Report": colorMap.green,
  "Health Policy": colorMap.green,
  "Still Relevant?":  colorMap.green,
  "Editorials": colorMap.green,
  "In My View": colorMap.green,
  "Empathy in Medicine": colorMap.red,
  "The Somatic Connection": colorMap.red,
  "Clinical Images": colorMap.red,
  "In Your Words": colorMap.red,
  "Letters to the Editor": colorMap.green,
  "SURF": colorMap.red,
  "CME Quiz": colorMap.blue,
  "Book Reviews": colorMap.red,
};

$(document).ready(function() {

    var owner = window.location.pathname.substr(1);

    var vueData = {};

    var newVue = function(vueData) {

        new Vue({
            el: '#workspace',
            data: vueData,
            methods: {
                copyHtml: function() {
                  this.collapseSelection('clone');
                  this.cloneRenderedVersion();

                  var clipboard = new Clipboard('#copyHtml', {
                    target: function(trigger) {
                      return document.getElementById('clone');
                    }
                  });

                  clipboard.on('success', function(evt) {
                    console.log('Copied!');
                    $('#highlight').effect('highlight', { color: 'lightyellow' }, 'slow');
                    clipboard.destroy();
                  });
                },

                copyTextVersion: function(trigger) {
                    var clipboard = new Clipboard('#copyTextVersion', {
                        text: this.textVersion
                    });

                    clipboard.on('success', function(e) {
                        $('#highlight').effect('highlight', { color: 'azure' }, 'slow');
                        clipboard.destroy();
                    });


                    clipboard.on('error', function(e) {
                        clipboard.destroy();
                    });
                },

                textVersion: function(trigger) {
                    var component = trigger.dataset.component;
                    switch (component) {
                        case 'article':
                            return [
                                vueData.kicker,
                                vueData.headline.toUpperCase(),
                                '------------------------------------' +
                                    '------------------------------------',
                                vueData.excerpt,
                                vueData.link,
                                '',
                            ].join('\n');
                            
                            break;
                        case 'date':
                            return [
                                'Most recent posts: ' + vueData.date,
                                '(http://thedo.osteopathic.org)',
                                '',
                            ].join('\n');
                            
                            break;
                        
                        case 'section-title':
                            return [
                                vueData.section_title
                                    .toUpperCase()
                                    .split('')
                                    .join(' '),
                                '',
                            ].join('\n');
                            
                            break;
                        
                        case 'quote':
                            return [
                                '\n',
                                'Q U O T E D',
                                '\n',
                                vueData.quote,
                                '--' + vueData.quoter,
                                vueData.link,
                            ].join('\n');
                            
                            break;
  
                        case 'jaoa-article':
                          return [
                            vueData.cateogry,
                            vueData.title.toUpperCase(),
                            vueData.authors,
                            '------------------------------------' +
                                '------------------------------------',
                            vueData.blurb,
                            vueData.articleUrl,
                            '',
                          ].join('\n');
                    }
                },

                log: function(evt) {
                  console.log(evt);
                },

                handleCategoryChange: function(evt) {
                  var category = evt.targetVM.category;
                  setArticleColors(category);
                },

                onClick: function() {
                    console.log('onclick');
                },

                collapseSelection: function(elementId) {
                    var elem = document.getElementById(elementId);
                    if (window.getSelection()) {
                        window.getSelection().collapse(elem, 0);
                    }
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
        });
    };

    function getRendered(selected) {
        return $.ajax('render/' + owner + '/' + selected, {
            async: false,
            success: function(data) {
                $('#highlight').html(data);
                console.log('got rendered');
            }
        });
    };

    function clearInputs() {
      // leave "More stories" in the input
      if ($('input').val() != 'More stories') {
          $('input, textarea').val('');
      }
    }

    /**
     * http://stackoverflow.com/questions/1740700/
     *   how-to-get-hex-color-value-rather-than-rgb-value
     *
     */
    function rgb2Hex(rgb) {

      if (rgb.search('rgb') == -1) {
        return rgb;
      }

      rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/);

      function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
      }

      return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
      
    }

    function setArticleColors(category) {

      var color = categoryColors[category];

      $table = $('#categoryTable');
    
      $table
        .attr('bgcolor', color.full)
        .find('tr > td')
          .css('background-color', color.full);

      $table.find('table td').eq(1)
        .attr('style', 
              'border-top: 4px solid ' + color.tint + 
                '; font-size: 0;');
      
      $('#articleTitle')
        .attr('style', 'text-decoration: none; font-family: "Raleway", Helvetica, arial, sans-serif; font-weight: 500; font-size: 22px; line-height: 28px; color: ' + color.full + ';');
    }

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
                    ruleBelow: true,
                    ruleAbove: false,
                };
                break;
             case 'quote' :
                vueData = {
                    quote: 'Lorem quote',
                    quoter: 'Lorem quoter',
                    link: '',
                };
                break;
             case 'date' :
                vueData = {
                    date: 'Lorem',
                };
                break;
             case 'section-title' :
                vueData = {
                    section_title: 'More stories',
                };
                break;
             case 'jaoa-article' :
                vueData = {
                  title: 'Lorem article title',
                  category: 'Original Contribution',
                  authors: 'Lorem authors',
                  blurb: '',
                  articleUrl: '',
                  imageUrl: '',
                };
                break;
        }

        return vueData;
    };

    function isJaoaArticle(term) {
      return term.indexOf('jaoa-article') === 0;
    }

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
                clearInputs();

                if (isJaoaArticle(selected)) {
                  setArticleColors(vueData.category);
                }
                
                $('#workspace').delay(300).fadeToggle(300);
            });
        });
    };


    $('select#articleType').change(render);

    $('#workspace').on('click', '#refresh', render);

    // kick things off
    render();

});

//# sourceMappingURL=app.js.map
