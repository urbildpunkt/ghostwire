
// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    /*
     Responsive jQuery is a tricky thing.
     There's a bunch of different ways to handle
     it, so be sure to research and find the one
     that works for you best.
     */

    /* getting viewport width */
    var responsive_viewport = $(window).width();

    /* if is below 481px */
    if (responsive_viewport < 481) {


    } /* end smallest screen */

    /* if is larger than 481px */
    if (responsive_viewport > 481) {
            
    } /* end larger than 481px */

    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {

        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });

        $('#recent-posts').FeedEk({
            FeedUrl: 'http://urbildpunkt.com/ghostwire/feed.rss',
            MaxCount: 10,
            ShowDesc: false,
            ShowPubDate: true,
            DescCharacterLimit: 150
        });


    }

    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {

    }


    // add all your scripts here

    // Scroll to Top
    $('.top-link').fadeOut();

    $(window).scroll(function(){

        if ($(this).scrollTop() > 100) {
            $('.top-link').fadeIn();
        } else {
            $('.top-link').fadeOut();
        }

        }); 

        $('.top-link').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;

    });

    // way of checking if we're on a paginated page.)
    if (window.location.pathname.indexOf('page') === 1) {
        $('.post').removeAttr('id');
        $('#featured-content').css('background', '');
        $('#featured-content').removeAttr('id');
        $('.top-stories').css( "display", "none" );
    }

    var $featuredImage = $('.page-content img[alt="featured-header"]');
      if ( $featuredImage.length ) {
        var featuredImageURL = $featuredImage.attr('src');
        $('#featured-content').css('background-image','url(' + featuredImageURL + ')');
      }
    $featuredImage.remove()

}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
 */
(function(w){
    // This fix addresses an iOS bug, so return early if the UA claims it's something else.
    if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
        x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
        aig = e.accelerationIncludingGravity;
        x = Math.abs( aig.x );
        y = Math.abs( aig.y );
        z = Math.abs( aig.z );
        // If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
            if( enabled ){ disableZoom(); } }
        else if( !enabled ){ restoreZoom(); } }
    w.addEventListener( "orientationchange", restoreZoom, false );
    w.addEventListener( "devicemotion", checkTilt, false );
})( this );

(function ($) {
    $.fn.FeedEk = function (opt) {
        var def = $.extend({
            FeedUrl: "http://urbildpunkt.com/ghostwire/feed.rss",
            MaxCount: 10,
            ShowDesc: false,
            ShowPubDate: true,
            CharacterLimit: 0,
            TitleLinkTarget: "_self"
        }, opt);

        var id = $(this).attr("id");
        var i;
        $("#" + id).empty().append('<img src="/assets/images/loader.gif" />');
        $.ajax({
            url: "http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=" + def.MaxCount + "&output=json&q=" + encodeURIComponent(def.FeedUrl) + "&hl=en&callback=?",
            dataType: "json",
            success: function (data) {
                $("#" + id).empty();
                var s = "";
                var counter = 1;
                $.each(data.responseData.feed.entries, function (e, item) {
                    s += '<li id="' + counter + '"><a href="' + item.link + '" target="' + def.TitleLinkTarget + '" ><div class="itemTitle">' + item.title + "</div>";
                    if (def.ShowPubDate) {
                        i = new Date(item.publishedDate);
                        s += '<div class="itemDate">' + i.toLocaleDateString() + "</div>";
                    }
                    if (def.ShowDesc) {
                        if (def.DescCharacterLimit > 0 && item.content.length > def.DescCharacterLimit) {
                            s += '<div class="itemContent">' + item.content.substr(0, def.DescCharacterLimit) + "...</div>";
                        }
                        else {
                            s += '<div class="itemContent">' + item.content + "</div>";
                        }
                    }
                    s += '</a></li>'
                    counter++;
                });
                $("#" + id).append('<ul class="feedEkList">' + s + "</ul>");
            }
        });
    };
})(jQuery);


