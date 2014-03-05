/* ---------------------------------------------------------------------
Global JavaScript & jQuery

Target Browsers: All
------------------------------------------------------------------------ */

var FED = FED || {};

$(function () {

    // Initialize!
    FED.ExternalLinks.init();
});

/* ---------------------------------------------------------------------
ExternalLinks
Author: Anthony Ticknor

Launches links with a rel="external" in a new window
------------------------------------------------------------------------ */

FED.ExternalLinks = {
    init: function () {
        $('a[rel=external]').on('click', function(e){
            e.preventDefault();
            window.open($(this).attr('href'));
        });
    }
};