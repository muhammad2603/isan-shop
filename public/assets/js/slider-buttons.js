document.addEventListener('DOMContentLoaded', () => {

    const slider = document.querySelector('.slider-w-next-prev .slider-items'),
        sliderWidth = slider.getBoundingClientRect().width,
        sliderItems = slider.querySelectorAll('.item'),
        sliderItemWidth = sliderItems[0].getBoundingClientRect().width,
        prevBtn = document.querySelector('.slider-w-next-prev .indicators .prev-btn'),
        nextBtn = document.querySelector('.slider-w-next-prev .indicators .next-btn'),
        totalCurrentItems = 8;

    console.log('Sisa bagi total item dengan item yang ditampilkan:', sliderItems.length / totalCurrentItems)

    nextBtn.addEventListener('click', () => {

        let calcMove = (sliderItemWidth * sliderItems.length) + (20 * (sliderItems.length - 1)) - sliderWidth;

        // console.log("Hasil Kalkulasi:", calcMove)
        // console.log("Lebar Slider:", sliderWidth)
        // console.log(calcMove >= sliderWidth ? "Pergeseran harus penuh dari total kategori" : "Pergeseran sudah mencapai akhir")

        slider.style.left = `-${calcMove}px`;

    })

})