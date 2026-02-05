/*
 * function isElementHasClass: Fungsi untuk melakukan validasi apakah elemen memiliki class yang ditargetkan
 *
 * @param element {DOM}: DOM Element yang ingin dicek class-nya
 * @param targetClass {string}: Class yang ingin dicek pada element
 * 
 * @return bool
 */
function isElementHasClass(element, targetClass) {
    return element.classList.contains(targetClass)
}
/*
 * function loopElements: Fungsi untuk melakukan each (looping) elements yang ada pada NodeList
 * 
 * @param element {NodeList}: NodeList Element yang akan di-looping
 * @param callback {fn}: Callback (function) yang berisi kode lanjutan yang akan dilakukan ke setiap loop elementnya
 */
function loopElements(element, callback) {
    element.forEach(item => callback(item))
}
/*
 * function classManipulationChainings: Fungsi untuk melakukan chaining method classList pada element
 *
 * @param element {DOM}: DOM Element yang ingin diberikan method classList
 * 
 * @explain: tiap function selesai, function akan mengembalikan object yang berisi element dan method-nya, sehingga memungkinkan untuk melakukan chaining
 */
function classManipulationChainings(element) {
    return {
        // simpan element dalam object
        element,
        // method add: untuk menambahkan sebuah class
        add(cls) {
            this.element.classList.add(cls)
            // return object
            return this
        },
        // method remove: untuk menghapus sebuah class
        remove(cls) {
            this.element.classList.remove(cls)
            // return object
            return this
        }
    }
}
// ketika document selesai di-load
document.addEventListener('DOMContentLoaded', () => {
    // ambil semua element dengan class summary-button didalam element section dengan class product-summary
    const summaryButton = document.querySelectorAll('section.product-summary > .summary-head > .summary-button'),
        // ambil semua elemen yang ada didalam element dengan class summary-details
        summaryDetailsElements = document.querySelectorAll('section.product-summary > .summary-details > *');
    // lakukan looping pada summaryButton
    loopElements(summaryButton, item => {
        // berikan event listener click pada semua summaryButton
        item.addEventListener('click', function () {
            // ketika salah satu element summaryButton diklik:
            // ambil data atribut yang ada dielement summaryButton (saat ini diklik)
            const elSummaryId = this.dataset.summaryId,
                // ambil summary-details menggunakan id yang ada pada data atribut summaryButton
                summaryEl = document.getElementById(elSummaryId);
            // lakukan validasi jika element summary-details yang terpilih tidak memiliki class hidden, maka hentikan eksekusi
            // ini mencegah program agar tidak melanjutkan eksekusi
            if (!isElementHasClass(summaryEl, 'hidden')) return;
            // jika element summary-details yang terpilih memiliki class hidden:
            // lakukan penghapusan class bg-white dan class custom-shadow-inner-depth, serta menambahkan class cursor-pointer (kedua class tersebut berasal dari Tailwind utilities) pada seluruh summaryButton yang di-looping
            loopElements(summaryButton, item => classManipulationChainings(item).remove('bg-white').add('cursor-pointer').remove('custom-shadow-inner-depth'))
            // tambahkan class bg-white dan custom-shadow-inner-depth, serta hapus class cursor-pointer pada summaryButton yang saat ini diklik
            classManipulationChainings(this).add('bg-white').remove('cursor-pointer').add('custom-shadow-inner-depth')
            // lakukan looping pada element summaryDetailsElements, dan tambahkan class hidden pada tiap elementnya
            loopElements(summaryDetailsElements, item => item.classList.add('hidden'))
            // hapus class hidden pada summaryEl
            classManipulationChainings(summaryEl).remove('hidden')
        })
    })
})