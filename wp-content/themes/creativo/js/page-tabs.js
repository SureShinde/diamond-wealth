jQuery(document).ready(function($){

    setTimeout( function() {
        $('.creativo_customization').show();
    }, 100 );

    // Tabs
    //When page loads...
    
    $('.creativo_customization').each(function() {
        $(this).find(".pyre_metabox_tab").hide(); //Hide all content
        $(this).find("ul.cr_metabox_tabs li:first").addClass("active").show(); //Activate first tab
        $(this).find(".pyre_metabox_tab:first").show(); //Show first tab content
    });
   
    //On Click Event
    $("ul.cr_metabox_tabs li").click(function(e) {
        $(this).parents('.creativo_customization').find("ul.cr_metabox_tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(this).parents('.creativo_customization').find(".pyre_metabox_tab").hide(); //Hide all tab content

        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        $(this).parents('.creativo_customization').find('#pyre_tab_' + activeTab).fadeIn(); //Fade in the active ID content
        
        e.preventDefault();
    });
    
    $("ul.cr_metabox_tabs li a").click(function(e) {
        e.preventDefault();
    })      
});