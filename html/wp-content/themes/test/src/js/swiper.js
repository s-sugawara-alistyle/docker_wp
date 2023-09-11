// var swiper = new Swiper('.swiper-container', {
//     loop: true,
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//     },
//     // white
//     spaceBetween: 60,
//     // true=center
//     centeredSlides: true,
//     // pagination on or off
//     paginationClickable: true,
//     // look
//     slidesPerView: 4,
//     // loop
//     loopAdditionalSlides: 1,
    
//     autoplay: {
//         delay: 2000,
//     },

//     breakpoints: {
//         960: {
//             slidesPerView: 2.5,
//             spaceBetween: 30,

//         },
//         560: {
//             slidesPerView: 1.7,
//             spaceBetween: 20,
//         },
//     },
// });



// var swiper;
// $(window).on('load resize', function () {
//     var w = $(window).width();
//     if (w >= 960) {
//         if (swiper) {
//             return;
//         } else {
//             swiper = new Swiper('.swiper-logo', {
//                 loop: true,
//                 direction: 'horizontal',
//                 speed: 200,
//                 effect: 'slide',
//                 slidesPerView: 8,
//                 spaceBetween: 40,
//                 calculateHeight: true,
//                 freeMode: false,
//                 loopedSlides: 8,
//                 centeredSlides: true,
//                 autoplay: false,
//                 breakpoints: {
//                     1600: {
//                         slidesPerView: 7,
//                         spaceBetween: 30,
//                     },
//                     1400: {
//                         slidesPerView: 6,
//                         spaceBetween: 20,
//                     },
//                     1200: {
//                         slidesPerView: 5,
//                     }
//                 },

//                 navigation: {
//                     nextEl: '.swiper-button-next',
//                     prevEl: '.swiper-button-prev',
//                 },
//                 scrollbar: {
//                     el: '.swiper-scrollbar',
//                 },
//             });
//         }
//     } else {
//         if (swiper) {
//             swiper.destroy();
//             swiper = undefined;
//         }
//     }
// });


