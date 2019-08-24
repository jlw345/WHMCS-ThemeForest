 
 
 // Initialize Swiper
             var swiper = new Swiper('.swiper-container', {
              effect: 'coverflow',
              grabCursor: false,
              centeredSlides: true,
              slidesPerView: 'auto',
              autoplay:true,
               autoplay: {
                 delay: 3000,
                },
                loop:true,
              coverflowEffect: {
                rotate:0.5,
                stretch: 20,
                depth: 30,
                modifier: 2,
                slideShadows : true,
              },
            });