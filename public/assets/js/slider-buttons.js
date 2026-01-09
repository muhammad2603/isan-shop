document.addEventListener('DOMContentLoaded', () => {

    const slider = document.querySelector('.slider-w-next-prev'),
        sliderItems = document.querySelectorAll('.slider-w-next-prev .slider-items > .item'),
        sliderItemWidth = sliderItems[0].getBoundingClientRect().width,
        prevBtn = document.querySelector('.slider-w-next-prev .indicators .prev-btn'),
        nextBtn = document.querySelector('.slider-w-next-prev .indicators .next-btn');

    let x = 3;

    nextBtn.addEventListener('click', () => {

        sliderItems.forEach(item => item.style.transform = `translateX(-${(120 * x) + (20 * x)}px)`)

        x += 3;

    })

})