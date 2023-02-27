$(window).on('load', function () {
    jso_local.lazyLoad.jsf_init();
});

var jso_local = {
    lazyLoad: {
        /*<a href="#" class="lazy-img-bg" data-src="url('image.jpg')"></a>
        <img data-src="image.jpg" class="lazy-img">*/
        jsi_observer: new IntersectionObserver(function(p_entries, p_observer) {
                p_entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        if (entry.target.className.indexOf('lazy-img-bg') >= 0) {
                            entry.target.style.backgroundImage = entry.target.dataset.src;
                            p_observer.unobserve(entry.target);
                        } else if (entry.target.className.indexOf('lazy-img') >= 0) {
                            entry.target.src = entry.target.dataset.src;
                            p_observer.unobserve(entry.target);
                        }
                    } else {
                        if (entry.target.className.indexOf('lazy-video-pause') >= 0) {
                            entry.target.pause();
                        } else if (entry.target.className.indexOf('lazy-youtube-pause') >= 0) {
                            var frame = entry.target.querySelector("iframe");
                            if (frame) {
                                var src = frame.getAttribute('src');
                                frame.setAttribute('src', '');
                                frame.setAttribute('src', src);
                            }
                        } else if (entry.target.className.indexOf('lazy-audio-pause') >= 0) {
                            entry.target.pause();
                        }
                    }
                });
            }, { threshold: 0.10 }
        ),
        jsf_init: function () {
            $('.lazy-img, .lazy-img-bg').each(function(index, img) {jso_local.lazyLoad.jsi_observer.observe(img);});
            $('.lazy-video-pause, .lazy-youtube-pause, .lazy-audio-pause').each(function(index, video) {jso_local.lazyLoad.jsi_observer.observe(video);});
        },
        jsf_initSelector: function (p_parent) {
            $(p_parent).find('.lazy-img, .lazy-img-bg').each(function(index, img) {jso_local.lazyLoad.jsi_observer.observe(img);});
            $(p_parent).find('.lazy-video-pause, .lazy-youtube-pause, .lazy-audio-pause').each(function(index, video) {jso_local.lazyLoad.jsi_observer.observe(video);});
        }
    }
};

