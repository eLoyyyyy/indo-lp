jQuery(document).ready(function($){
    
    var ticker = new Ticker({ info: 4, currency: 'IDR', root_url: 'http://tickers.playtech.com/' });
    ticker.attachToTextBox('progressive_jackpot');
    ticker.tick();
    
    $('.bg-1').parallax({
        speed :	0.15
    });
    
    $('#productsTab').tabCollapse({
        tabsClass: 'hidden-md hidden-sm hidden-xs',
        accordionClass: 'visible-md visible-sm visible-xs'
    });
    
    $('[data-toggle=tab]').click(function(){
        var tab = $(this);
        if(tab.parent('li').hasClass('active')) {
            setTimeout(function(){
                $(".tab-pane").removeClass('active');
                tab.parent('li').removeClass('active');
            });
        } else {
            tab.tab('show');
        }
    })
    
    jQuery('.social-share').click(function(e){
        var social = $(this).data('share');
        var url = encodeURIComponent(window.location.href);
        var width = 545;
        var height = 433;
        var leftPosition, topPosition;
        //Allow for borders.
        leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
        //Allow for title and status bars.
        topPosition = (window.screen.height / 2) - ((height / 2) + 50);
        var settings = "height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,directories=no";
        
        switch ( social ) {
            case 'facebook' :
                console.log('facebook');
                window.open('http://www.facebook.com/sharer.php?u=' + url,'mypopuptitle', settings);
                break;
            case 'twitter' :
                window.open('https://twitter.com/share?url=' + url /*+ '&via=twitterdev&hashtags=bryaaaaaan&text=custom%20share%20text'*/,'mypopuptitle', settings)
                break;
            case 'linkedin' :
                window.open('http://www.linkedin.com/shareArticle?url=' + url,'mypopuptitle', settings)
                break;
            case 'reddit' :
                window.open('http://reddit.com/submit?url=' + url,'mypopuptitle', settings)
                break;
            case 'google-plus' :
                window.open('https://plus.google.com/share?url=' + url,'mypopuptitle', settings)
                break;
            case 'pinterest' :
                window.open('http://pinterest.com/pin/create/link/?url='+url+'&media='+$(this).data('image')+'&description='+$(this).data('title'),'mypopuptitle', settings)
                break;
        }
        
        e.preventDefault()
    });

});

/*
jQuery(function() {

    var active = $('a[data-toggle="tab"]').parents('.active').length;
    var tabClicked = false;

    var close = function() {
        $('a[data-toggle="tab"]').parent().removeClass('active');
        $('.tab-pane.active').removeClass('active');
        active = null;
    }

    $('[data-toggle=tab]').click(function(){
        if ($(this).parent().hasClass('active')){
            $($(this).attr("href")).toggleClass('active');
            active = null;
        } else {
            tabClicked = true;
            active = this;
        }
    });

    $(document).on('click.bs.tab.data-api', function(event) {
        if(active && !tabClicked && !$(event.target).closest('.tab-pane.active').length) {
            close();
        }

        tabClicked = false;
    });

    $(document).keyup(function(e){
        if(active && e.keyCode === 27) { // ESC
            close();
        }
    });
});

*/