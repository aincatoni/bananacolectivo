$(function (){
  $(window).scroll(function(){
		$('nav').toggleClass("scrolled", $(this).scrollTop() > 45);
		
		
		$(window).scroll(function() {
			var height = $(window).scrollTop();
	
			if(height  > 45) {
				$('.logo-bana-nav').attr("src","/recursos/BANANA/banana-logo-horizontal-navbar-small.png");
			}
			if(height === 0) {
				$('.logo-bana-nav').attr("src","/recursos/BANANA/banana-logo-horizontal-navbar.png");
			}
	});
		
   
});

$('.menu-item').addClass('nav-item');
$('.menu-item a').addClass('nav-link');

AOS.init();


baguetteBox.run('.compact-gallery', { animation: 'slideIn'});


// SMOOTH SCROLL

  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


// SLIDE JQUERY

var $slider = $(".slider"), $bullets = $(".bullets");
		function calculateHeight(){
			var height = $(".slide.active").outerHeight();
			$slider.height(height);
		}

		$(window).resize(function() {
			calculateHeight();
		    clearTimeout($.data(this, 'resizeTimer'));
		});
		
		function resetSlides(){
			$(".slide.inactive").removeClass("inactiveRight").removeClass("inactiveLeft");
		}

		function gotoSlide($activeSlide, $slide, className){
			 $activeSlide.removeClass("active").addClass("inactive "+className);
			 $slide.removeClass("inactive").addClass("active");
			 calculateHeight();
			 resetBullets();
			 setTimeout(resetSlides, 300);
		}

		$(".next").on("click", function(){
			 var $activeSlide = $(".slide.active"),
				 $nextSlide = $activeSlide.next(".slide").length != 0 ? $activeSlide.next(".slide") : $(".slide:first-child");
				 console.log($nextSlide);
				 gotoSlide($activeSlide, $nextSlide, "inactiveLeft");
		});
		$(".previous").on("click",  function(){
			 var $activeSlide = $(".slide.active"),
				 $prevSlide = $activeSlide.prev(".slide").length != 0 ? $activeSlide.prev(".slide") : $(".slide:last-child");

				 gotoSlide($activeSlide, $prevSlide, "inactiveRight");
		});
		$(document).on("click", ".bullet", function(){
			if($(this).hasClass("active")){
				return;
			}
			var $activeSlide = $(".slide.active");
			var currentIndex = $activeSlide.index();
			var targetIndex = $(this).index();
			console.log(currentIndex, targetIndex);
			var $theSlide = $(".slide:nth-child("+(targetIndex+1)+")");
			gotoSlide($activeSlide, $theSlide, currentIndex > targetIndex ? "inactiveRight" : "inactiveLeft");
		})
		function addBullets(){
			var total = $(".slide").length, index = $(".slide.active").index();
			for (var i=0; i < total; i++){
				var $bullet = $("<div>").addClass("bullet");
				if(i==index){
					$bullet.addClass("active");	
				}
				$bullets.append($bullet);
			}
		}
		function resetBullets(){
			$(".bullet.active").removeClass("active");
			var index = $(".slide.active").index()+1;
			console.log(index);
			$(".bullet:nth-child("+index+")").addClass("active");
		}
		addBullets();
		calculateHeight();	

});

// 
$(function (){

      $('#links').on('click',function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
		});
		
// API LASTFM

			$(function (){
				var EVlastFm = 'http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=54dd79fc66ea166a369732e7b7546b3f&artist=espacio+volátil&album=Cuenta+regresiva&format=json'
				var NTHlastFm = 'http://ws.audioscrobbler.com//2.0/?method=artist.getinfo&artist=No+Tan+Humano&api_key=54dd79fc66ea166a369732e7b7546b3f&format=json'
				var ARClastFm = 'http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=54dd79fc66ea166a369732e7b7546b3f&artist=Arrecifes&album=Arrecifes&format=json'
				

					$.ajax ({
						url: EVlastFm,
						method: 'GET',
					}).then(function (data){
						console.log(data);
						$('.ev').append('<h2>' + data.album.artist + '</h2>');
						$('.ev').append('<h3>' + data.album.name + '</h3>');
						$('.ev').append('<p>' + 'Reproduciones esta semana: ' + data.album.playcount + '</p>');
						
				
						});

						$.ajax ({
							url: NTHlastFm,
							method: 'GET',
						}).then(function (data){
							console.log(data);
							$('.nth').append('<h2>' + data.artist.name + '</h2>');
							
							$('.nth').append('<h3>' + data.stats.playcount + '</h3>');
					
							});

							$.ajax ({
						url: ARClastFm,
						method: 'GET',
					}).then(function (data){
						console.log(data);
						$('.arc').append('<h2>' + data.album.artist + '</h2>');
						$('.arc').append('<h3>' + data.album.name + '</h3>');
						$('.arc').append('<p>' + 'Reproduciones esta semana: ' + data.album.playcount + '</p>');
						
				
						});
				});

			
	});
	


		


