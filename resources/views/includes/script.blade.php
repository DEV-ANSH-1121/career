<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{url('js/scripts.js')}}"></script>
<script>

        $(window).scroll(function(){
        	if ($(window).scrollTop() > 500) {
        		$('.scrollup').show();
        	}
        	else{
        		$('.scrollup').hide();
        	}
        })
        $('.scrollup').click(function(){
        	$('html').animate({scrollTop:0},1000);
        })
</script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 5,
    autoplay:true,
    
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
</script>

@yield('script')