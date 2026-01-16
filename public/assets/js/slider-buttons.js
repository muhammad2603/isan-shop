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

    // Inisialisasi item yang sudah dilewati
    // Note: 8 adalah item awal yang diperlihatkan pada slider (ini bisa berbeda tergantung lebar perangkat)
    let itemCardYangTelahTerlewati = 8;

    // Inisialisasi calcMove untuk digunakan saat menentukan nilai pergeseran slider
    let calcMove = 0;
    // Inisialisasi array untuk nilai-nilai pergeseran sebelumnya (saat next ditekan) agar memudahkan pergeseran item tanpa mengkalkulasi ulang
    let previousCalc = [];

    // Event Listener: Saat tombol next di-klik
    nextBtn.addEventListener('click', () => {
        // Validasi jika item yang sudah dilewati telah mencapai total item dalam slider, untuk mencegah pergeseran tetap berlanjut saat mencapai batas akhir
        if (itemCardYangTelahTerlewati === sliderItems.length) return;
        // Note: angka 8 ditentukan karena nilai awalnya adalah 8, saat tombol next ditekan, baris ini langsung dieksekusi
        // Jika item card yang sudah dilewati sama dengan 0, maka tampilkan tombol previous
        if (itemCardYangTelahTerlewati === 8) prevBtn.classList.remove('hidden')
        // Masukkan nilai saat ini (sebelum calcMove berubah) agar bisa digunakan saat user kembali ke-kategori sebelumnya
        previousCalc.push(calcMove)
        // Validasi apakah total item dalam slider - item yang sudah dilewati adalah lebih besar dari 8? Digunakan untuk mengetahui apakah item bisa bergeser sebanyak item yang ditampilkan satu slider
        if (sliderItems.length - itemCardYangTelahTerlewati > 8) {
            // Jika benar:
            // Kalkulasi pergeseran slider
            /*
             * Info:
             * 20: adalah nilai gap antar item
             * 8: adalah berapa banyak gap yang juga memakan ruang
             */
            calcMove = (sliderItemWidth * itemCardYangTelahTerlewati) + (20 * 8);
            // Perbarui item yang sudah dilewati, digunakan untuk pelacakan item yang telah bergeser
            itemCardYangTelahTerlewati += 8;
        } else { // Jika lebih kecil dari 8
            // Kalkulasi pergeseran slider
            /*
             * Info:
             * 20: adalah nilai gap antar item
             * 1: adalah berapa banyak gap yang juga memakan ruang (koreksi lagi demi mencapai hasil yang baik)
             */
            calcMove += (sliderItemWidth + (20 * 1)) * (sliderItems.length - itemCardYangTelahTerlewati);
            // Perbarui item yang sudah dilewati dengan menambahkan sisa itemnya
            itemCardYangTelahTerlewati += sliderItems.length % 8;
            // Sembunyikan tombol next agar tidak ditampilkan saat mencapai akhir
            // Info: Ini dilakukan agar terhindar dari pergeseran yang melebihi batas
            nextBtn.classList.add('hidden')
        }
        // Geser slider ke-kiri untuk menampilkan kategori selanjutnya, baik sebanyak item yang tampil satu slider (full) maupun sisa item
        slider.style.left = `-${calcMove}px`;
    })

    prevBtn.addEventListener('click', () => {
        // Saat menyentuh item card terakhir dan setelahnya user menekan tombol prev, tampilkan tombol next
        if (itemCardYangTelahTerlewati === sliderItems.length) nextBtn.classList.remove('hidden')
        // Jika item yang dilewati dimodulus 8 sama dengan 0, maka kurangi nilai-nya dengan 8
        if (itemCardYangTelahTerlewati % 8 === 0) itemCardYangTelahTerlewati -= 8
        // Jika hasilnya bukan 0, maka kurangi dengan sisa item card terakhir
        else itemCardYangTelahTerlewati -= sliderItems.length % 8
        // Jika slider kembali ke-paling awal, maka hilangkan tombol previous
        if (itemCardYangTelahTerlewati === 8) prevBtn.classList.add('hidden')
        // Geser slide menggunakan nilai pergeseran sebelumnya yang disimpan dalam array previousCalc
        slider.style.left = `-${previousCalc.pop()}px`;
    })

})