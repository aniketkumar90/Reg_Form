window.addEventListener('load', function () {
    const bottle = document.querySelector('.juice-bottle');
    if (bottle) {
        setTimeout(() => {
            bottle.classList.add('slide-in');
        }, 100); // wait 100ms before starting the slide
    }
});
