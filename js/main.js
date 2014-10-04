//page loader
$(window).load(function() {
	$('#loader').delay(100).fadeOut(800);
	$('body').delay(120).css('overflow','auto');
    $('#vid1').delay(120).show();
    $('#vid2').delay(120).show();
    
});


// When document is ready...
$(document).ready(function() {

    // If cookie is set, scroll to the position saved in the cookie.
    if ( $.cookie("home-scroll") !== null) {
        $(document).scrollTop( $.cookie("home-scroll") );
    }

    if ( $.cookie("face-scroll") !== null) {
        $(document).scrollTop( $.cookie("face-scroll") );
    }

    if($('#home-page').length || $('#home-popup-page').length){
        // When a button is clicked...
        $('.thumbnail').on("click", function() {
            console.log('thumbnail clicked')
            // Set a cookie that holds the scroll position.
            $.cookie("home-scroll", $(document).scrollTop() );
            console.log( $.cookie("home-scroll"));
        });
    }
    
    if($('face-page').length) {
        // When a button is clicked...
        $('.thumbnail').on("click", function() {

            // Set a cookie that holds the scroll position.
            $.cookie("face-scroll", $(document).scrollTop() );
             console.log( $.cookie("face-scroll"));
        });
    }

    $('.nav.navbar-nav li a').on("click",function(){
         // Set a cookie that holds the scroll position.
        $.cookie("home-scroll", 0 );
        $.cookie("face-scroll", 0 );
    });
    
  
    

});

/*
$(document).ready(function(){

    if($('#face-popup-page').length || $('#face-page').length){
          
            var num = 4;
            var take = num;
            var skip = num;
            var offset = num;

            $('form').submit(function(e){
                console.log('clicked');
                e.preventDefault();
                
                
                //var name = $(this).find('input[name=name]').val();
                //post ajax
                $.post('ajax',{take:take,skip:skip,offset:offset},function(data){
                    
                    $.each(data, function(i, item) {
                        console.log('remain: '+data[i].remain);
                        
                        var slug = function(str) {
                            var $slug = '';
                            var trimmed = $.trim(str);
                            $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                            replace(/-+/g, '-').
                            replace(/^-|-$/g, '');
                            return $slug.toLowerCase();
                        }
                        var root = location.protocol + '//' + location.host;
                        //var url = root + '/cuoitoadieuky/bi-mat-nu-cuoi/' + data[i].id  + '/' + take + '/'+ slug(data[i].title);
                        //var image_url = root + '/uploads/originals/' + data[i].cover_image;

                        var url = root + '/lipzo' + '/cuoitoadieuky/bi-mat-nu-cuoi/' + data[i].id  + '/'+ slug(data[i].title);
                        var image_url = root + '/lipzo' + '/uploads/originals/' + data[i].cover_image;
                        console.log( slug(data[i].title) );

                        $('#face-section').append(
                            '<div class="col-xs-6 col-sm-4 col-md-3">' +
                                 '<div class="thumbnail">'+
                                    '<a href=\"' + url +  '\">' +
                                    '<img class=\"img-responsive img-thumbnail img-circle buzz-out\" src=\"' + image_url + '\" >'+
                                    '</a>'+
                                    '<div class="caption">'+
                                        '<h3>' + data[i].title +'</h3>'+
                                        '<p class=\"text-description\">' + data[i].desc.substring(0,50) + '</p>'+
                                      
                                    '</div>'+
                                '</div>'+
                            '</div>'

                            //'<h1> ' + data[i].title + '</h1>'
                        );
                        
                        

                        if(data[i].ok == false){
                            $('form').hide();
                        }
                        
                    })                               
                    
                });
                
            });
    }
});

*/

//home page script
$( document ).ready(function() {        

    if($('#home-page').length || $('#home-popup-page').length){
        /*
            Countdown
            http://www.timestampgenerator.com/1362139200/ convert date to unix timestamp
        */

        //get the current time in unix timestamp seconds

        var seconds = new Date().getTime() / 1000;

        var endTime = '1413738000';

        $('.countdown').final_countdown({
            'start': '1362139200',
            'end': endTime,
            'now': seconds
        });   


        //video js
        if($('#vid1').length){
            videojs('vid1', { "techOrder": ["youtube"], "src": "https://www.youtube.com/watch?v=6hTZgcN2oQk&feature=youtu.be" }).ready(function() {
                // Cue a video using ended event
                // Most video.js events are supported
                this.one('ended', function() {
                  this.src('https://www.youtube.com/watch?v=6hTZgcN2oQk&feature=youtu.be');
                     this.play();
                });
            });

        }

        if($('#vid2').length){
            videojs('vid2', { "techOrder": ["youtube"], "src": "https://www.youtube.com/watch?v=jbNMhce5MZU" }).ready(function() {
                // Cue a video using ended event
                // Most video.js events are supported
                this.one('ended', function() {
                  this.src('https://www.youtube.com/watch?v=jbNMhce5MZU');
                     this.play();
                });
            });
        }       
        
    }  
});   

$( document ).ready(function() {

    if($('#face-popup-page').length){


        $('html').css('overflow','hidden');
        $('#modal').modal('show');

        $('#modal').on('shown.bs.modal', function (e) {
          $('html').css('overflow','hidden');
            console.log('modal is opened');
        })

        $('#modal').on('hidden.bs.modal', function (e) {
          $('html').css('overflow','scroll');
          var root = location.protocol + '//' + location.host;
          //var url = root + '/lipzo' +'/cuoitoadieuky/bi-quyet-cuoi-xinh';
          var url = root +'/cuoitoadieuky/bi-quyet-cuoi-xinh';
          window.location.replace(url);
            console.log('modal is closed');
        })

        //$('.prettySocial').prettySocial();
        
    }   

    if($('#home-popup-page').length){

       
        $('#modal').hide();

        $('html').css('overflow','hidden');
        $('#modal').modal('show');

        $('#modal').on('shown.bs.modal', function (e) {

          $('html').css('overflow','hidden');
          $('#modal').show();
            console.log('modal is opened');
        })

        $('#modal').on('hidden.bs.modal', function (e) {
          $('html').css('overflow','scroll');
          $('#modal').hide();
          //var root = location.protocol + '//' + location.host;
          //var url = root + '/lipzo' +'/cuoitoadieuky';
          //var url = root +'/cuoitoadieuky';
          //window.location.replace(url);
            console.log('modal is closed');
        })
        
    }   



});



$( document ).ready(function() { 
    
    if(jQuery.browser.mobile || $(window).width() < 768)
    {
		 onMobileAction();    
    }
    else
    {
        outMobileAction();
    }
});

$(window).resize(function() {
    if($(window).width() < 768)
    {	
		 onMobileAction();     
    }
    else
    {
        outMobileAction();
    }
});


function onMobileAction(){

    if ($('#product-page').length) {

        $(".nav.nav-tabs a").click(function(e){
            e.preventDefault();
        });

        // Smooth scroll js
        smoothScroll.init();
        
        // swiper touch
        var tabsSwiper = new Swiper('.swiper-container',{speed:500,
        onSlideChangeStart: function(){
          $(".tabs .active").removeClass('active')
          $(".tabs a").eq(tabsSwiper.activeIndex).addClass('active')  
        }})

        $(".tabs a").on('touchstart mousedown',function(e){
            e.preventDefault()
            $(".tabs .active").removeClass('active')
            $(this).addClass('active')
            tabsSwiper.swipeTo( $(this).index() )
        })

        $(".tabs a").click(function(e){
            e.preventDefault()
        })


        var leftMainBanner = $('#product-main-banner .container .row #left-main-banner');
        leftMainBanner.remove();
        $('#product-main-banner .container .row').append(leftMainBanner);
   
        console.log('You are using a mobile device!');
    }
}

function outMobileAction(){

    if ($('#product-page').length) {

        $(".nav.nav-tabs a").click(function(e){
            e.preventDefault();
        });

        // Smooth scroll js
        smoothScroll.init();
   
        var leftMainBanner = $('#product-main-banner .container .row #left-main-banner');
        leftMainBanner.remove();
        $('#product-main-banner .container .row').prepend(leftMainBanner);

        window.scrollReveal = new scrollReveal( );

        console.log('You are not using a mobile device!');
    }
    
}
