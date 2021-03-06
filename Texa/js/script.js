var mySwiperCatalog = new Swiper ('.swiper-catalog', {
    direction: 'horizontal',
    noSwiping: false,
    slidesPerView: 1,
    slidesPerGroup: 1,
    breakpoints: {
        415: {
            slidesPerView: '3',
            slidesPerGroup: 3,
            noSwiping: true,
        },
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
})

var mySwiperVideo = new Swiper ('.swiper-video', {
    direction: 'horizontal',
    noSwiping: false,
    slidesPerView: 1,
    slidesPerGroup: 1,
    breakpoints: {
        415: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            noSwiping: true,
        },
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
})

var catalogItems = document.querySelectorAll('.catalog-item');
if (catalogItems) {
    var characteristicShows = document.querySelectorAll('.characteristic-show');
    var characteristicCloses = document.querySelectorAll('.characteristic-close');
    var videoClose = document.querySelector('.close-video');
    var videoLinks = document.querySelectorAll('.review-link');
    var frames = document.querySelectorAll('.frame');
    var modalVideo = document.querySelector('.modal-video');
    var images = document.querySelectorAll('.catalog-image');
    var imagesZoom = document.querySelector('.catalog-images-zoom');
    var imageZoom = document.querySelectorAll('.image-zoom');

    images.forEach(function(images, i) {
        images.addEventListener("click", function(evt) {
            imagesZoom.classList.add('zoom')
            imageZoom[i].classList.add('zoom')
        });
    });

    imagesZoom.addEventListener("click", function() {
        var imageZoomed = imagesZoom.querySelector('.zoom');
        imageZoomed.classList.remove('zoom');
        imagesZoom.classList.remove('zoom');
    });

    videoLinks.forEach(function(videoLink, i) {
        videoLink.addEventListener("click", function(evt) {
            modalVideo.classList.add('modal-video-show')
            frames[i].classList.add('loadframe')
        });
    });

    videoClose.addEventListener("click", function() {
        var loadFrame = modalVideo.querySelector('.loadframe');
        loadFrame.classList.remove('loadframe');
        modalVideo.classList.remove('modal-video-show');
        var srcFrame = loadFrame.getAttribute('src');
        loadFrame.setAttribute('src', srcFrame);
    });

    var onButtonShowClick = function(evt) {
        evt.preventDefault();
        var modal = evt.target.parentNode.querySelector('.characteristic');
        modal.classList.toggle('characteristic-popup');
    };

    var onButtonCloseClick = function(evt) {
        evt.preventDefault();
        var modal = evt.target.parentNode;
        modal.classList.remove('characteristic-popup');
    };

    [].forEach.call(characteristicShows, (element) => {
        element.addEventListener(`click`, onButtonShowClick);
    });

    [].forEach.call(characteristicCloses, (element) => {
        element.addEventListener(`click`, onButtonCloseClick);
    });


    window.addEventListener("keydown", function(evt) {
        if (evt.keyCode === 27) {
            var modal = document.querySelector(".characteristic-popup") ? document.querySelector(".characteristic-popup") : ''
            if (modal) {
                evt.preventDefault()
                modal.classList.remove("characteristic-popup")
            }
        }
    })
}



var menubutton = document.querySelector(".menu-button") ? document.querySelector(".menu-button") : ''

if (menubutton) {
    var navigation = document.querySelector(".navigation-list")
    var menuclose = navigation.querySelector(".menu-close")

    menubutton.addEventListener("click", function(evt) {
        evt.preventDefault()
        navigation.classList.add("navigation-show")
    })

    menuclose.addEventListener("click", function(evt) {
        evt.preventDefault()
        navigation.classList.remove("navigation-show")
    })
}
