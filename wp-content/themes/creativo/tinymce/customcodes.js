
//////////////////////////////////////////////////////////////////
// Add Button button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.button', {  
        init : function(ed, url) {  
            ed.addButton('button', {  
                title : 'Add a button',  
                image : url+'/button-button.png',  
                onclick : function() {  
                     ed.selection.setContent('[button style="e.g. green, yellow, purple, blue, red, black, grey" float="right or left" margin="e.g. 10, 15, 20" size="large or small" link="" target=""]Your Text[/button]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('button', tinymce.plugins.button);  
})();

//////////////////////////////////////////////////////////////////
// Add Divider button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.divider', {  
        init : function(ed, url) {  
            ed.addButton('divider', {  
                title : 'Add a divider',  
                image : url+'/divider-button.png',  
                onclick : function() {  
                     ed.selection.setContent('[divider style="e.g. blank, dotted, solid, double" padding_top="0" padding_bottom="0"][/divider]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('divider', tinymce.plugins.divider);  
})();

//////////////////////////////////////////////////////////////////
// Add Dropcap button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.dropcap', {  
        init : function(ed, url) {  
            ed.addButton('dropcap', {  
                title : 'Add a dropcap',  
                image : url+'/button-dropcap.png',  
                onclick : function() {  
                     ed.selection.setContent('[dropcap color="e.g. green, yellow, purple, blue, red, black, grey" background="e.g. green, yellow, purple, blue, red, grey, black" style="rectangle, rounded, circle" size="e.g. small, big"]...[/dropcap]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('dropcap', tinymce.plugins.dropcap);  
})();

//////////////////////////////////////////////////////////////////
// Add Highlight button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.highlight', {  
        init : function(ed, url) {  
            ed.addButton('highlight', {  
                title : 'Add a highlight',  
                image : url+'/button-highlight.png',  
                onclick : function() {  
                     ed.selection.setContent('[highlight style="eg. green, yellow, purple, blue, red, black, grey"]...[/highlight]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('highlight', tinymce.plugins.highlight);  
})();

//////////////////////////////////////////////////////////////////
// Add Checklist button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.checklist', {  
        init : function(ed, url) {  
            ed.addButton('checklist', {  
                title : 'Add a checklist',  
                image : url+'/button-checklist.png',  
                onclick : function() {  
                     ed.selection.setContent('[checklist text_color="" icon_color="" icon_bg_color="" shape="circle, rounded, square" font_size="" fontawesome_icon="fa fa-star"]<ul>\r<li>My First Item</li>\r<li>My Second Item</li>\r<li>My Third Item</li>\r</ul>[/checklist]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('checklist', tinymce.plugins.checklist);  
})();

//////////////////////////////////////////////////////////////////
// Add testimonial button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.testimonial', {  
        init : function(ed, url) {  
            ed.addButton('testimonial', {  
                title : 'Add a testimonial',  
                image : url+'/testimonial-icon.png',  
                onclick : function() {  
                     ed.selection.setContent('[testimonial name="Easy JacK" style="eg. green, yellow, purple, blue, red, black, grey" company="My Company"]"Donec eget dignissim augue. Donec ante felis, aliquam ut consequat eget, lobortis dapibus risus. Aliquam laoreet enim et lectus ornare hendrerit. Aliquam rhoncus enim libero. Morbi aliquam, nibh mattis feugiat dapibus, nisi massa adipiscing justo, sit amet condimentum urna ipsum et lacus. "[/testimonial]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('testimonial', tinymce.plugins.testimonial);  
})();

//////////////////////////////////////////////////////////////////
// Add Custom BlockQuote button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.custom_blockquote', {  
        init : function(ed, url) {  
            ed.addButton('custom_blockquote', {  
                title : 'Add a Custom Blockquote',  
                image : url+'/blockquote.png',  
                onclick : function() {  
                     ed.selection.setContent('[custom_blockquote style="eg. green, yellow, purple, blue, red, black, grey"] Donec eget dignissim augue. Donec ante felis, aliquam ut consequat eget, lobortis dapibus risus. Aliquam laoreet enim et lectus ornare hendrerit. Aliquam rhoncus enim libero. Morbi aliquam, nibh mattis feugiat dapibus, nisi massa adipiscing justo, sit amet condimentum urna ipsum et lacus. [/custom_blockquote]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('custom_blockquote', tinymce.plugins.custom_blockquote);  
})();