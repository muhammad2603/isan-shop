/*
 * Problem Solving
 * di ukuran lebar viewport < 500px, item selalu terdorong yang dimana tepi kiri item tidak menempel disisi paling kiri slider
 */

// Ambil semua elemen dengan class indikator yang ada dalam slider
const indicatorsEl = document.querySelectorAll('.slider .indicators > span.indicator');
// Ambil semua elemen dengan class item yang ada dalam slider
const items = document.querySelectorAll('.slider .slider-items > .item');
// Gap antar items
const gapItem = 16;
// Ambil total lebar viewport dari window
const deviceWidth = window.innerWidth;
// Looping semua elemen indikator
indicatorsEl.forEach((item, index) => {
    // Terapkan event listener "click" pada indikator
    item.addEventListener('click', e => {
        // Looping elemen indikator lagi, lalu hapus class active pada semua elemen indikator
        indicatorsEl.forEach(item => item.classList.remove('active'))
        // Tambah class active pada indikator yang saat ini telah di-klik
        e.target.classList.add('active')
        // Ambil ukuran lebar total dari slider
        const sliderWidth = document.querySelector('.slider').getBoundingClientRect().width;
        // Ambil indeks indikator yang diklik saat ini
        const indicatorIdx = index;
        // Ambil ukuran lebar total dari item slider
        const itemWidth = document.querySelector('.slider .slider-items > .item').getBoundingClientRect().width;
        // Kalkulasi item terakhir berdasarkan lebar viewport
        const calcDivLastItemByDeviceWidth = (deviceWidth < 480 ? (itemWidth - sliderWidth) : 0);
        // Kalkulasi nilai pergeseran item terakhir yang terpotong
        // Note: angka 2 merujuk pada total item yang dilihatkan dislider
        const divLastItem = (itemWidth * 2 + gapItem) - Math.floor(sliderWidth) - calcDivLastItemByDeviceWidth;
        // Kalkulasi lebar total item slider + gap (jarak antar item slider)
        const moveVal = itemWidth + gapItem;
        // @if: jika index indikator yang diklik sudah mencapai akhir
        if (indicatorIdx === (indicatorsEl.length - 1)) {
            // Terapkan pergeseran (transform) pada seluruh item slider yang ditambah dengan kalkulasi sisa lebar item terakhir yang terpotong
            // Note: (indicatorIdx - 1) digunakan saat total item melebihi 3 atau lebih
            items.forEach(item => item.style.transform = `translateX(-${(moveVal * (indicatorIdx - 1)) + divLastItem}px)`)
        } else // @else: jika index indikator yang diklik belum mencapai akhir
        {
            // Terapkan pergeseran (transform) pada seluruh item slider
            items.forEach(item => item.style.transform = `translateX(-${moveVal * indicatorIdx}px)`)
        }
    })
})