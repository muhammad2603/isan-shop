const viewportWidth = window.innerWidth;
// Event Listener: Saat dokumen telah siap dimanipulasi
document.addEventListener('DOMContentLoaded', () => {
    // Elemen Slider
    const slider = document.querySelector('.slider-w-next-prev .slider-items'),
        // Lebar Slider
        sliderWidth = slider.getBoundingClientRect().width,
        // Semua elemen item dalam Slider
        sliderItems = slider.querySelectorAll('.item'),
        // Lebar elemen item dalam Slider
        sliderItemWidth = sliderItems[0].getBoundingClientRect().width,
        // Elemen tombol Previous
        prevBtn = document.querySelector('.slider-w-next-prev .indicators .prev-btn'),
        // Elemen tombol Next
        nextBtn = document.querySelector('.slider-w-next-prev .indicators .next-btn');

    /*
     * Inisialisasi calcsArray dengan nilai awal 0
     * @expected: [0, 1200, 1400]
     * @explain:
     *      0 -> index slide pertama
     *      1200 -> index slide kedua
     *      1400 -> index slide ketiga atau untuk menampilkan sisa item terakhir
     */
    let calcsArray = [0];
    // Ambil total items dalam slider
    const totalItems = sliderItems.length;
    // Tentukan total item yang ditampilkan dalam 1 slide
    const totalItemsPerSlide = (viewportWidth < 500 ? 3 : (viewportWidth < 640 ? 4 : (viewportWidth < 768 || viewportWidth < 1023 ? 5 : (viewportWidth < 1280 ? 6 : viewportWidth < 1536 ? 7 : 8))));
    // Tentukan total gap yang ada dalam 1 slide
    const totalGap = 4;
    // Dapatkan lebar gap menggunakan computedStyle agar lebih efektif. Tiap viewport memiliki gap yang berbeda-beda.
    const gapPixel = parseInt(window.getComputedStyle(slider).gap);
    /*
     * Inisialisasi function expression: Untuk menghasilkan kalkulasi pergerakan setiap perpindahan slide
     * @param idx_slide (number): Digunakan untuk mendapatkan kalkulasinya dalam calcsArray berdasarkan index slide yang diberikan
     */
    const functCalcPerSlide = (idx_slide) => {
        // Kalkulasi
        return ((sliderItemWidth * totalItemsPerSlide) + (totalGap * gapPixel)) * idx_slide;
    }
    /*
     * Ambil total slide keseluruhan (tidak termasuk slide sisa item akhir)
     * @explain: Misalnya slider memiliki 18 item, maka:
     *      16 / 8 = 2 -> total slide adalah 2 (termasuk slide pertama)
     *      18 % 8 = 2 -> item terakhir ada 2
     * @notes:
     *      - item terakhir tidak terhitung sebagai 1 slide
     *      - ... - 8) -> ini ditambahkan karena slide pertama tidak termasuk
     */
    const totalSlides = (totalItems - (totalItems % 4) - 4) / 4;
    // @looping:
    // @explain: looping ini dilakukan untuk melakukan kalkulasi secara langsung dan disimpan ke dalam Array
    for (let i = 0; i < totalSlides; i++) {
        // Kalkulasi posisi setiap slide dan masukkan ke-dalam calcsArray
        calcsArray.push(functCalcPerSlide(i + 1))
    }
    // Dapatkan total sisa item akhir
    const totalSisaItemAkhir = totalItems % 4;
    /*
     * Inisialisasi function expression: Untuk melakukan kalkulasi terhadap slide agar sisa item akhir ditampilkan
     */
    const functCalcLastItem = () => {
        // Kalkulasi
        return (sliderItemWidth * totalSisaItemAkhir) + (gapPixel * totalSisaItemAkhir)
    }
    // @if
    // Jika total sisa item akhir bukan 0, maka masukkan hasil kalkulasi ke-dalam calcsArray
    // @note: Kondisi ini dibutuhkan saat itemnya bisa dibagi 8 (tidak ada sisa item akhir) supaya calcsArray indeks terakhir tidak ada 0 karena kalkulasi tetap berjalan dan dimasukkan ke-dalam calcsArray
    if (totalSisaItemAkhir !== 0) calcsArray.push(calcsArray.at(-1) + functCalcLastItem())
    // Inisialisasi indeks slide dengan nilai awal 0
    // Default 0 dikarenakan untuk menyesuaikan dengan indeks pada Array calcsArray, yang berarti 0 = slide pertama
    let currIdxSlide = 0;
    // @event-listener: Saat tombol next ditekan
    nextBtn.addEventListener('click', () => {
        // Tambahkan indeks slide + 1 untuk memperbarui indeks slide
        currIdxSlide++;
        // @if
        // Jika setelah indeks slide ditambah dengan 1 dan sama dengan 1, tampilkan tombol previous dengan menghapus class hidden (tailwind class utility)
        // @explain: Ini sama saja saat berpindah dari slide pertama ke slide kedua, hal ini dilakukan agar tombol tersebut tidak dieksekusi berkali-kali saat perpindahan slide
        if (currIdxSlide === 1) prevBtn.classList.remove('hidden')
        /*
         * @if
         * Jika setelah indeks slide ditambah dengan 1, lalu tambah lagi dengan 1, jika hasilnya sama dengan total item pada calcsArray, sembunyikan tombol next dengan menambahkan class hidden (tailwind class utility)
         * @explain:
         *      - Kondisi ini bekerja saat berada di-slide terakhir
         *      - (currIdxSlide + 1) -> ini dilakukan karena indeks slide terakhir tidak sama dengan total item pada calcsArray, karena indeks slide berawal dari 0, sedangkan total item pada calcsArray selalu dari 1
         * @example:
         *      - total item pada calcsArray ada 3 [0, 1200, 1400]
         *      - indeks slide terakhir pasti bernilai 2
         * @expected: Karena itu, indeks slide perlu ditambah dengan 1 agar cocok dengan total item pada calcsArray
         */
        if ((currIdxSlide + 1) === calcsArray.length) nextBtn.classList.add('hidden')
        // Geser slider agar slide saat ini digeser untuk disembunyikan (overflow) dan menampilkan slide selanjutnya
        // @explain: hasil kalkulasi didapatkan dari calcsArray dan indeks item berasal dari indeks slide yang ingin dituju
        slider.style.left = `-${calcsArray.at(currIdxSlide)}px`;
    })
    // @event-listener: Saat tombol prev ditekan
    prevBtn.addEventListener('click', () => {
        /* @if
         * Jika indeks slide saat ini sama dengan total item pada calcsArray yang dikurang dengan 1, sembunyikan tombol next menggunakan hidden (tailwind class utility)
         * @explain: Kondisi ini hanya bekerja saat slider berpindah dari slide terakhir ke-slide sebelumnya agar kondisi ini tidak ikut terpicu saat tombol prev ditekan terus menerus
         * @example:
         *      - total item pada calcsArray berjumlah 3 [0, 1200, 1400]
         *      - indeks slide berada di-posisi 2 (karena indeks slide defaultnya adalah 0)
         *      - jadi, saat berada di-slide terakhir (3), lalu jumlah item calcsArray dikurang 1 agar sama dengan indeks slide (2)
         * @note: Kondisi ini sengaja di-eksekusi dulu sebelum indeks slide dikurang 1 karena urutan eksekusi tersebut lebih baik
         */
        if (currIdxSlide === (calcsArray.length - 1)) nextBtn.classList.remove('hidden')
        // Perbarui indeks slide dengan menguranginya dengan 1 (currIdxSlide - 1)
        currIdxSlide--;
        // @if
        // Jika setelah indeks slide berkurang dan indeks slide saat ini sama dengan 0, tampilkan tombol prev menggunakan hidden (tailwind class utility)
        // @explain: Kondisi ini bekerja saat slide berpindah ke-slide pertama
        if (currIdxSlide === 0) prevBtn.classList.add('hidden')
        // Geser slider agar slide saat ini digeser untuk disembunyikan (overflow) dan menampilkan slide selanjutnya
        // @explain: hasil kalkulasi didapatkan dari calcsArray dan indeks item berasal dari indeks slide yang ingin dituju
        slider.style.left = `-${calcsArray.at(currIdxSlide)}px`;
    })
})