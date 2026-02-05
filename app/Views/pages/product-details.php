<?= $this->extend('/layouts/default') ?>

<?= $this->section('content') ?>
<!-- Navigasi Breadcrumb -->
<nav class="breadcrumb text-xs xl:text-sm flex gap-2">
    <a href="#" class="text-gray-500/95 hover:underline hover:text-blue-600">Beranda</a>
    <span>></span>
    <a href="#" class="text-gray-500/95 hover:underline hover:text-blue-600">Category</a>
    <span>></span>
    <a href="#" class="text-gray-500/95 hover:underline hover:text-blue-600">Smartphone</a>
    <span>></span>
    <span class="font-semibold text-blue-600">iPhone 16 Pro Max</span>
</nav>
<!-- Akhir Navigasi Breadcrumb -->
<!-- Section Main Product -->
<section class="main-product flex flex-col md:flex-row mt-5 gap-4 sm:gap-8">
    <!-- Article -->
    <article class="product basis-2/4 shrink-0">
        <!-- Product Images: Get images from DB -->
        <div class="product-images grid xl:grid-cols-3 gap-4">
            <figure class="col-span-3 aspect-video rounded-xl overflow-hidden">
                <img src="https://images.ctfassets.net/ck9jtoelxwa6/3Rk5ISoHY8YyPe7RZzRnPV/b1a91c12541079c40f6ea22421a18ef0/jb-nz-202412-apple-intelligence-16-pro-HP-MOB.png?fm=webp&f=top&fit=fill&q=75&w=1124&h=654" alt="iPhone 16 Pro Max" class="w-full h-full object-cover">
            </figure>
            <figure class="aspect-square rounded-xl overflow-hidden">
                <img src="https://goodmockups.com/wp-content/uploads/2024/10/Free-iPhone-16-Pro-Max-Mockup-PSD.jpg" alt="iPhone 16 Pro Max Desert Titanium" class="w-full h-full object-cover">
            </figure>
            <figure class="aspect-square rounded-xl overflow-hidden">
                <img src="https://blog.kredivo.com/wp-content/uploads/2024/09/iPhone-16-Side-2-Feature.jpg" alt="iPhone 16 Pro Max" class="w-full h-full object-cover">
            </figure>
            <figure class="aspect-square rounded-xl overflow-hidden">
                <img src="https://cdsassets.apple.com/live/7WUAS350/images/tech-specs/121032-iphone-16-pro-max.png" alt="iPhone 16 Pro Max All Variants" class="w-full h-full object-cover">
            </figure>
        </div>
        <!-- Akhir Images Product -->
        <!-- Product Benefits -->
        <div class="product-benefits my-10 flex flex-col gap-5">
            <div class="benefit flex gap-3">
                <div class="benefit-icon">
                    <img src="/assets/icons/express-delivery.png" alt="Fast Delivery Icon" class="w-[32px]">
                </div>
                <div class="benefit-description text-xs sm:text-sm text-gray-500/90">
                    <h3>Gratis Ongkir</h3>
                    <p>Untuk pembelian minimal Rp 60.000</p>
                </div>
            </div>
            <div class="benefit flex gap-3">
                <div class="benefit-icon">
                    <img src="/assets/icons/return.png" alt="Return Icon" class="w-[32px]">
                </div>
                <div class="benefit-description text-xs sm:text-sm text-gray-500/90">
                    <h3>Pengembalian 30 Hari</h3>
                    <p>Pengembalian (return) gratis dalam 30 hari</p>
                </div>
            </div>
            <div class="benefit flex gap-3">
                <div class="benefit-icon">
                    <img src="/assets/icons/warranty.png" alt="Warranty Icon" class="w-[32px]">
                </div>
                <div class="benefit-description text-xs sm:text-sm text-gray-500/90">
                    <h3>Garansi 1 Tahun</h3>
                    <p>Garansi Resmi</p>
                </div>
            </div>
        </div>
        <!-- Akhir Product Benefits -->
    </article>
    <!-- Akhir Article -->
    <!-- Product Meta -->
    <article class="product-meta">
        <!-- Tags Product -->
        <div class="tags-product flex gap-2.5 text-xs">
            <span class="py-1.5 px-3 bg-gray-100 font-semibold text-gray-950/60 rounded-full">Smartphone</span>
            <span class="py-1.5 px-3 bg-blue-100 font-semibold text-blue-600 rounded-full">Stok Tersedia</span>
            <span class="py-1.5 px-3 bg-pink-100 font-semibold text-pink-600 rounded-full">Stok Terbatas</span>
        </div>
        <!-- Tags Product -->
        <!-- Abouts Product -->
        <div class="abouts-product">
            <!-- Product Name -->
            <h1 class="product-name text-2xl lg:text-3xl mt-5 mb-3 lg:mt-7 lg:mb-5">iPhone 16 Pro Max</h1>
            <!-- Product Stars -->
            <div class="rating-star lg:my-1.5 flex gap-2">
                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                <img src="/assets/icons/star-nofill.png" alt="Star with No Fill Image" class="w-[16px] h-fit">
                <span class="text-sm text-gray-500/95">(30k Ulasan)</span>
            </div>
            <!-- Products Cost -->
            <div class="costs mt-3 lg:mt-7">
                <span class="text-xl lg:text-2xl font-semibold align-middle">Rp. 22.999.000</span>
                <!-- Tambah logika pada diskon, hanya tampilkan jika produk sedang diskon -->
                <span class="text-lg lg:text-xl text-gray-500/95 font-extralight align-middle">( <span class="line-through decoration-1 decoration-red-400">Rp. 23.699.000</span> )</span>
            </div>
            <!-- Horizontal Rule -->
            <hr class="my-7 bg-gray-200" style="height: 1px; border: 0px;">
            <!-- Description Product -->
            <div class="description-product my-7">
                <h2 class="text-xl mb-2.5">Deskripsi Produk</h2>
                <p class="text-xs md:text-[.90rem] lg:text-sm text-pretty text-gray-500/95">iPhone 16 Pro Max menghadirkan pengalaman smartphone premium dengan layar besar yang tajam, desain Pro yang elegan dan kokoh, serta performa tinggi untuk multitasking, hiburan, hingga kebutuhan profesional. Didukung sistem kamera canggih untuk foto dan video berkualitas tinggi di berbagai kondisi, serta iOS yang stabil, aman, dan terintegrasi sempurna dengan ekosistem Apple, iPhone ini cocok bagi pengguna yang menginginkan kenyamanan, kecepatan, dan kualitas tanpa kompromi dalam satu perangkat flagship.</p>
            </div>
            <!-- List Variants Product -->
            <div class="variants-product my-7">
                <div class="colors-variant my-7">
                    <h2 class="text-xl mb-2.5">Warna</h2>
                    <div class="colors flex gap-4 flex-wrap">
                        <div class="color-choose w-fit py-3 px-6 flex items-center gap-3 text-sm border-2 border-solid border-blue-600 rounded-sm cursor-pointer transition duration-100 ease-in group hover:bg-blue-600" data-color="black">
                            <div class="w-[18px] h-[18px] bg-black border-2 border-solid border-blue-600 rounded-full"></div>
                            <span class="color-name text-sm font-semibold transition duration-100 ease-in group-hover:text-white">Hitam</span>
                        </div>
                        <div class="color-choose border-2 border-solid border-blue-600 w-fit py-3 px-6 flex items-center gap-3 text-sm rounded-sm cursor-pointer transition duration-100 ease-in group hover:bg-blue-600" data-color="white">
                            <div class="w-[18px] h-[18px] bg-white border-2 border-solid border-blue-600 rounded-full"></div>
                            <span class="color-name text-sm font-semibold transition duration-100 ease-in group-hover:text-white">Putih</span>
                        </div>
                        <div class="color-choose border-2 border-solid border-blue-600 w-fit py-3 px-6 flex items-center gap-3 text-sm rounded-sm cursor-pointer transition duration-100 ease-in group hover:bg-blue-600" data-color="abu-abu">
                            <div class="w-[18px] h-[18px] bg-gray-500 border-2 border-solid border-blue-600 rounded-full"></div>
                            <span class="color-name text-sm font-semibold transition duration-100 ease-in group-hover:text-white">Abu-Abu</span>
                        </div>
                        <div class="color-choose border-2 border-solid border-blue-600 w-fit py-3 px-6 flex items-center gap-3 text-sm rounded-sm cursor-pointer transition duration-100 ease-in group hover:bg-blue-600" data-color="abu-abu">
                            <div class="w-[18px] h-[18px] bg-rose-300 border-2 border-solid border-blue-600 rounded-full"></div>
                            <span class="color-name text-sm font-semibold transition duration-100 ease-in group-hover:text-white">Rose</span>
                        </div>
                    </div>
                </div>
                <div class="memory-variant">
                    <h2 class="text-xl mb-2.5">Memori</h2>
                    <div class="colors flex gap-4 flex-wrap">
                        <div class="memory-choose border-2 border-solid border-blue-600 w-fit py-3 px-6 flex items-center gap-3 text-sm rounded-sm cursor-pointer transition duration-100 ease-in group hover:bg-blue-600" data-color="black">
                            <span class="color-name text-sm font-semibold transition duration-100 ease-in group-hover:text-white">256 GB</span>
                        </div>
                        <div class="memory-choose border-2 border-solid border-blue-600 w-fit py-3 px-6 flex items-center gap-3 text-sm rounded-sm cursor-pointer transition duration-100 ease-in group hover:bg-blue-600" data-color="white">
                            <span class="color-name text-sm font-semibold transition duration-100 ease-in group-hover:text-white">512 GB</span>
                        </div>
                        <div class="memory-choose border-2 border-solid border-blue-600 w-fit py-3 px-6 flex items-center gap-3 text-sm rounded-sm cursor-pointer transition duration-100 ease-in group hover:bg-blue-600" data-color="abu-abu">
                            <span class="color-name text-sm font-semibold transition duration-100 ease-in group-hover:text-white">1 TB</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quantity Product -->
            <div class="quantity my-7">
                <span class="text-xl font-semibold">Jumlah</span>
                <div class="quantity-details mt-2.5 flex gap-4">
                    <div class="quantity-indicators flex gap-8">
                        <button type="button" class="py-1 px-4 text-lg font-semibold border-2 border-solid border-blue-600 rounded-lg cursor-pointer hover:bg-blue-600 hover:text-white disabled:bg-gray-300 disabled:border-transparent disabled:text-black" id="substractQuantity" disabled>-</button>
                        <span class="current-quantity self-center text-gray-500/90">1</span>
                        <!-- Tambah Logika pada button dengan ID addQuantity agar tidak bisa ditambah saat diatas dari stok produk yang tersedia -->
                        <button type="button" class="py-1 px-4 text-lg border-2 border-solid border-blue-600 rounded-lg cursor-pointer hover:bg-blue-600 hover:text-white" id="addQuantity">+</button>
                    </div>
                    <div class="stock-product flex items-center text-gray-500/90"><span>45 Tersedia</span></div>
                </div>
            </div>
            <!-- Checkout Buttons -->
            <div class="checkout-buttons flex flex-wrap gap-4">
                <!-- Button Add to Cart -->
                <button type="button" class="basis-full shrink-0 justify-center py-2 px-4 flex gap-3 border-2 border-solid border-emerald-400 rounded-md cursor-pointer transition duration-250 ease-in hover:bg-emerald-400 hover:text-white">
                    <img src="/assets/icons/cart.png" alt="Cart Image" class="w-[20px] aspect-square">
                    <span class="text-sm">Masukkan Keranjang</span>
                </button>
                <!-- Button Buy Now -->
                <button type="button" class="shrink-0 basis-1/2 py-2 px-4 bg-blue-600 text-white flex-1 text-sm font-bold rounded-md cursor-pointer">Beli Sekarang</button>
                <!-- Button Like Product -->
                <button type="button" class="px-3 border border-solid border-gray-950/60 rounded-sm cursor-pointer" title="Like"><img src="/assets/icons/heart.png" alt="Heart Icon"></button>
                <!-- Shares Wrapper -->
                <div class="shares-wrapper relative">
                    <!-- Button Share Product -->
                    <button type="button" class="h-full px-3 border border-solid border-gray-950/60 rounded-sm cursor-pointer" title="Share">
                        <img src="/assets/icons/share.png" alt="Share Icon">
                    </button>
                    <div class="share-options hidden absolute bottom-[-145%] translate-x-[-50%] py-3 px-4 w-40 flex gap-3 bg-white border-2 border-solid border-gray-100 rounded-full">
                        <span class="cursor-pointer"><img src="/assets/icons/whatsapp.png" alt="WhatsApp Icon" title="Bagikan ke WhatsApp"></span>
                        <span class="cursor-pointer"><img src="/assets/icons/twitter.png" alt="Twitter Icon" title="Bagikan ke Twitter"></span>
                        <span class="cursor-pointer"><img src="/assets/icons/telegram.png" alt="Telegram Icon" title="Bagikan ke Telegram"></span>
                        <span class="cursor-pointer"><img src="/assets/icons/copy.png" alt="Copy Link Icon" title="Salin Link"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Abouts Product -->
    </article>
    <!-- Akhir Product Meta -->
</section>
<!-- Akhir Section Main Product -->
<!-- Product Summary -->
<section class="product-summary mt-14">
    <!-- Summary Head -->
    <div class="summary-head p-1 flex bg-gray-100 rounded-full">
        <h2 class="summary-button py-1.5 flex-1 bg-white text-center text-sm text-gray-500/90 custom-shadow-inner-depth rounded-full" data-summary-id="spesificationsProduct">Spesifikasi</h2>
        <h2 class="summary-button py-1.5 flex-1 text-center text-sm text-gray-500/90 rounded-full cursor-pointer" data-summary-id="reviewsProduct">Ulasan (30k)</h2>
        <h2 class="summary-button py-1.5 flex-1 text-center text-sm text-gray-500/90 rounded-full cursor-pointer" data-summary-id="deliveryInformation">Pengiriman</h2>
    </div>
    <!-- Summary Details -->
    <div class="summary-details mt-4">
        <!-- Spesifications Product -->
        <article id="spesificationsProduct" class="spesifications-product p-6 border-2 border-solid border-gray-100 rounded-lg">
            <h3 class="text-lg">Spesifikasi Produk</h3>
            <table class="w-full text-gray-500/90 border-separate border-spacing-y-[22px]">
                <tbody>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Brand</td>
                        <td class="text-sm sm:text-base">iPhone</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Model</td>
                        <td class="text-sm sm:text-base">16 Pro Max</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Chipset & Performa</td>
                        <td class="text-sm sm:text-base">Apple A18 Pro fabrikasi 3nm dengan CPU 6-core, GPU 6-core, Neural Engine 16-core.</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">RAM</td>
                        <td class="text-sm sm:text-base">8 GB</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Penyimpanan</td>
                        <td class="text-sm sm:text-base">256 GB | 512 GB | 1 TB</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Layar</td>
                        <td class="text-sm sm:text-base">6,9 Inci Super Retina XDR OLED dengan teknologi ProMotion 120 Hz, kecerahan maksimum hingga 2000 nits, fitur Alway-On Display (AOD), Dynamic Islan, True Tone, HDR10, Dolby Vision.</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Desain</td>
                        <td class="text-sm sm:text-base">Bodi premium dengan rangka titanium elegan</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Ukuran</td>
                        <td class="text-sm sm:text-base">163 x 77,6 x 8,25 mm</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Berat</td>
                        <td class="text-sm sm:text-base">~227 gram</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Kamera Belakang</td>
                        <td class="text-sm sm:text-base">Triple kamera, 48 MP (Utama) dengan sensor fusion, ultrawide 48 MP, telefoto 12 MP (zoom optikal 5x), rekaman video 4K 120 fps Dolby Vision</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Kamera Depan</td>
                        <td class="text-sm sm:text-base">12 MP TrueDepth untuk selfie dan Face ID</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Baterai</td>
                        <td class="text-sm sm:text-base">4865 mAh, fast charging</td>
                    </tr>
                    <tr class="pb-2 border-b-2 border-solid border-gray-100">
                        <td class="font-semibold text-sm sm:text-lg w-2/5">Konektivitas & Fitur lain</td>
                        <td class="text-sm sm:text-base">5G, Dual SIM (nano + eSIM), USB-C SuperSpeed 10 Gbps, Wi-Fi 7, Bluetooth 5.3, NFC, sensor LiDAR, IP68 tahan air & debu, dan dukuran Apple Intelligence (AI cerdas)</td>
                    </tr>
                </tbody>
            </table>
        </article>
        <!-- Akhir Spesifications Product -->
        <!-- Reviews Product -->
        <article id="reviewsProduct" class="reviews-product hidden">
            <div class="reviews-star-wrapper flex flex-col md:flex-row gap-4 md:gap-0 p-6 border-2 border-solid border-gray-100 rounded-lg">
                <!-- Total Reviews Star -->
                <div class="total-reviews-star basis-1/2">
                    <!-- Information Reviews on Decimal -->
                    <h3 class="ratings-decimal font-semibold text-4xl text-center">4.8</h3>
                    <!-- Product Stars -->
                    <div class="rating-star my-1.5 flex gap-2 justify-center">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                        <img src="/assets/icons/star-nofill.png" alt="Star with No Fill Image" class="w-[16px] h-fit">
                    </div>
                    <span class="block mt-2 text-sm text-gray-500/95 text-center">30k Ulasan</span>
                </div>
                <!-- Akhir Total Reviews Star -->
                <!-- Review Stars Detail -->
                <div class="review-stars-detail basis-1/2 flex flex-col">
                    <div class="five-star flex items-center gap-5 text-sm">
                        <span class="inline-block shrink-0 w-[30px]">
                            <span class="mr-0.5 align-middle">5</span>
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit inline">
                        </span>
                        <div class="filled-star w-full h-[10px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="fill w-3/4 h-full bg-gray-950"></div>
                        </div>
                        <span class="total-reviews shrink-0 w-[30px] align-middle">20k</span>
                    </div>
                    <div class="four-star flex items-center gap-5 text-sm">
                        <span class="inline-block shrink-0 w-[30px]">
                            <span class="mr-0.5 align-middle">4</span>
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit inline">
                        </span>
                        <div class="filled-star w-full h-[10px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="fill w-2/5 h-full bg-gray-950"></div>
                        </div>
                        <span class="total-reviews shrink-0 w-[30px] align-middle">4k</span>
                    </div>
                    <div class="three-star flex items-center gap-5 text-sm">
                        <span class="inline-block shrink-0 w-[30px]">
                            <span class="mr-0.5 align-middle">3</span>
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit inline">
                        </span>
                        <div class="filled-star w-full h-[10px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="fill w-1/5 h-full bg-gray-950"></div>
                        </div>
                        <span class="total-reviews shrink-0 w-[30px] align-middle">3k</span>
                    </div>
                    <div class="two-star flex items-center gap-5 text-sm">
                        <span class="inline-block shrink-0 w-[30px]">
                            <span class="mr-0.5 align-middle">2</span>
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit inline">
                        </span>
                        <div class="filled-star w-full h-[10px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="fill w-[15%] h-full bg-gray-950"></div>
                        </div>
                        <span class="total-reviews shrink-0 w-[30px] align-middle">2k</span>
                    </div>
                    <div class="first-star flex items-center gap-5 text-sm">
                        <span class="inline-block shrink-0 w-[30px]">
                            <span class="mr-1 align-middle">1</span>
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit inline">
                        </span>
                        <div class="filled-star w-full h-[10px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="fill w-[3%] h-full bg-gray-950"></div>
                        </div>
                        <span class="total-reviews shrink-0 w-[30px] align-middle">1k</span>
                    </div>
                </div>
                <!-- Akhir Review Stars Detail -->
            </div>
            <div class="review-comments mt-8 flex flex-col gap-4">
                <div class="comment p-6 border-2 border-solid border-gray-100 rounded-lg">
                    <div class="comment-identity flex gap-3 flex-wrap md:flex-nowrap">
                        <div class="profiles">
                            <div class="user-photo bg-gray-100 w-[50px] aspect-square flex justify-center items-center font-semibold text-xl rounded-full">S</div>
                        </div>
                        <div class="username-with-star-review mt-1 shrink-0 grow-1 md:grow-0">
                            <span>Susan</span>
                            <div class="rating-star mt-1 flex gap-2 justify-start md:justify-center">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                            </div>
                        </div>
                        <div class="comment-date mt-2 md:mt-0 w-full flex justify-start md:justify-end items-center text-xs sm:text-sm text-gray-500/90">
                            <span>01 Februari 2026</span>
                        </div>
                    </div>
                    <div class="comment mt-3 sm:mt-5 text-sm sm:text-base text-pretty text-gray-500/90">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro delectus eaque dolores repellendus totam dolor eius ducimus saepe eligendi!</p>
                    </div>
                </div>
                <div class="comment p-6 border-2 border-solid border-gray-100 rounded-lg">
                    <div class="comment-identity flex gap-3 flex-wrap md:flex-nowrap">
                        <div class="profiles">
                            <div class="user-photo bg-gray-100 w-[50px] aspect-square flex justify-center items-center font-semibold text-xl rounded-full">B</div>
                        </div>
                        <div class="username-with-star-review mt-1 shrink-0 grow-1 md:grow-0">
                            <span>Budi Santoso</span>
                            <div class="rating-star mt-1 flex gap-2 justify-start md:justify-center">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                            </div>
                        </div>
                        <div class="comment-date mt-2 md:mt-0 w-full flex justify-start md:justify-end items-center text-xs sm:text-sm text-gray-500/90">
                            <span>10 Januari 2026</span>
                        </div>
                    </div>
                    <div class="comment mt-3 sm:mt-5 text-sm sm:text-base text-pretty text-gray-500/90">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro delectus eaque dolores repellendus totam dolor eius ducimus saepe eligendi!</p>
                    </div>
                </div>
                <div class="comment p-6 border-2 border-solid border-gray-100 rounded-lg">
                    <div class="comment-identity flex gap-3 flex-wrap md:flex-nowrap">
                        <div class="profiles">
                            <div class="user-photo bg-gray-100 w-[50px] aspect-square flex justify-center items-center font-semibold text-xl rounded-full">H</div>
                        </div>
                        <div class="username-with-star-review mt-1 shrink-0 grow-1 md:grow-0">
                            <span>Hanypul Huda</span>
                            <div class="rating-star mt-1 flex gap-2 justify-start md:justify-center">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                            </div>
                        </div>
                        <div class="comment-date mt-2 md:mt-0 w-full flex justify-start md:justify-end items-center text-xs sm:text-sm text-gray-500/90">
                            <span>12 Desember 2025</span>
                        </div>
                    </div>
                    <div class="comment mt-3 sm:mt-5 text-sm sm:text-base text-pretty text-gray-500/90">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro delectus eaque dolores repellendus totam dolor eius ducimus saepe eligendi!</p>
                    </div>
                </div>
                <div class="comment p-6 border-2 border-solid border-gray-100 rounded-lg">
                    <div class="comment-identity flex gap-3 flex-wrap md:flex-nowrap">
                        <div class="profiles">
                            <div class="user-photo bg-gray-100 w-[50px] aspect-square flex justify-center items-center font-semibold text-xl rounded-full">U</div>
                        </div>
                        <div class="username-with-star-review mt-1 shrink-0 grow-1 md:grow-0">
                            <span>Uwais</span>
                            <div class="rating-star mt-1 flex gap-2 justify-start md:justify-center">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                            </div>
                        </div>
                        <div class="comment-date mt-2 md:mt-0 w-full flex justify-start md:justify-end items-center text-xs sm:text-sm text-gray-500/90">
                            <span>08 Desember 2025</span>
                        </div>
                    </div>
                    <div class="comment mt-3 sm:mt-5 text-sm sm:text-base text-pretty text-gray-500/90">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro delectus eaque dolores repellendus totam dolor eius ducimus saepe eligendi!</p>
                    </div>
                </div>
                <div class="comment p-6 border-2 border-solid border-gray-100 rounded-lg">
                    <div class="comment-identity flex gap-3 flex-wrap md:flex-nowrap">
                        <div class="profiles">
                            <div class="user-photo bg-gray-100 w-[50px] aspect-square flex justify-center items-center font-semibold text-xl rounded-full">H</div>
                        </div>
                        <div class="username-with-star-review mt-1 shrink-0 grow-1 md:grow-0">
                            <span>Harmoko</span>
                            <div class="rating-star mt-1 flex gap-2 justify-start md:justify-center">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                                <img src="/assets/icons/star-nofill.png" alt="Star with No Fill Image" class="w-[16px] h-fit">
                            </div>
                        </div>
                        <div class="comment-date mt-2 md:mt-0 w-full flex justify-start md:justify-end items-center text-xs sm:text-sm text-gray-500/90">
                            <span>12 Desember 2025</span>
                        </div>
                    </div>
                    <div class="comment mt-3 sm:mt-5 text-sm sm:text-base text-pretty text-gray-500/90">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro delectus eaque dolores repellendus totam dolor eius ducimus saepe eligendi!</p>
                    </div>
                </div>
            </div>
        </article>
        <!-- Akhir Reviews Product -->
        <!-- Delivery Information -->
        <article id="deliveryInformation" class="delivery-information p-6 border-2 border-solid border-gray-100 rounded-lg hidden">
            <h3 class="text-lg">Informasi Pengiriman</h3>
            <!-- Delivery Estimated -->
            <div class="delivery-estimated mt-4 text-gray-500/90">
                <span>Estimasi Pengiriman</span>
                <ul class="ml-6 mt-1.5">
                    <li class="list-disc">Jakarta: 1-2 hari kerja</li>
                    <li class="list-disc">Pulau Jawa: 2-4 hari kerja</li>
                    <li class="list-disc">Diluar Pulau Jawa: 3-7 hari kerja</li>
                </ul>
            </div>
            <!-- Akhir Delivery Estimated -->
            <!-- Courier Available -->
            <div class="courier-available mt-4 text-gray-500/90">
                <span>Kurir Tersedia</span>
                <p class="mt-1.5">JNE, J&T Express, SiCepat, Ninja Express, Shopee Express, AnterAja</p>
            </div>
            <!-- Akhir Courier Available -->
            <!-- Free Ongkir -->
            <div class="free-ongkir mt-4 text-gray-500/90">
                <span>Gratis Ongkir</span>
                <p class="mt-1.5">Gratis ongkir untuk minimal pembelian Rp 60.000 ke seluruh Indonesia</p>
            </div>
            <!-- Akhir Free Ongkir -->
        </article>
        <!-- Akhir Delivery Information -->
    </div>
</section>
<!-- Akhir Product Summary -->
<!-- Related Products -->
<div class="related-products mt-[60px]">
    <!-- Title -->
    <div class="title flex items-center sm:items-start justify-between">
        <h3 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Produk yang Mungkin Anda Sukai</h3>
    </div>
    <!-- Akhir Title -->
    <!-- Products List -->
    <div class="products mt-6 flex gap-x-4 gap-y-8 flex-wrap">
        <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
            <a href="/product/view/product-name" class="group">
                <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                    <img src="/assets/images/products/electronics/smartphone/samsung/samsung-s25-ultra-black.png" alt="Samsung S25 Ultra Black" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                </figure>
                <article class="details-product mt-2">
                    <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Samsung Galaxy S25 Ultra 12GB/512GB Varian Black</h2>
                    <div class="rating-star my-1.5 flex gap-2">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/rating.png" alt="Star Image" class="w-[14px] h-fit">
                        <span class="text-xs text-gray-500/95">(1.2k)</span>
                    </div>
                    <span class="text-sm font-bold">Rp. 22.999.000</span>
                </article>
            </a>
        </div>
        <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
            <a href="/product/view/product-name" class="group">
                <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                    <img src="/assets/images/products/kebaya/kebaya-brokat-cotton-lace.jpg" alt="Kebaya Brokat Cotton Lace" class="w-full h-full aspect-square object-cover transition duration-150 group-hover:scale-[1.15]">
                </figure>
                <article class="details-product mt-2">
                    <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Kebaya Brokat Cotton Lace</h2>
                    <div class="rating-star my-1.5 flex gap-2">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/rating.png" alt="Star Image" class="w-[14px] h-fit">
                        <span class="text-xs text-gray-500/95">(369)</span>
                    </div>
                    <span class="text-sm font-bold">Rp. 239.000</span>
                </article>
            </a>
        </div>
        <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
            <a href="/product/view/product-name" class="group">
                <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                    <img src="/assets/images/products/sepatu/adidas-adizero-adios-pro-3.jpg" alt="Adidas Adizero Adios Pro 3" class="w-full h-full aspect-square object-cover transition duration-150 group-hover:scale-[1.15]">
                </figure>
                <article class="details-product mt-2">
                    <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Adidas Adizero Adios Pro 3</h2>
                    <div class="rating-star my-1.5 flex gap-2">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/rating.png" alt="Star Image" class="w-[14px] h-fit">
                        <span class="text-xs text-gray-500/95">(4.5k)</span>
                    </div>
                    <span class="text-sm font-bold">Rp. 3.000.000</span>
                </article>
            </a>
        </div>
        <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
            <a href="/product/view/product-name" class="group">
                <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                    <img src="/assets/images/products/sparepart/sodimm-ddr5-4800-ramaxel.png" alt="Memory RAM Ramaxel 4800 MHz SODIMM 12 GB" class="w-full h-full aspect-square object-cover transition duration-150 group-hover:scale-[1.15]">
                </figure>
                <article class="details-product mt-2">
                    <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Memory RAM Ramaxel 12 GB 4800 MHz SODIMM</h2>
                    <div class="rating-star my-1.5 flex gap-2">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <span class="text-xs text-gray-500/95">(289)</span>
                    </div>
                    <span class="text-sm font-bold">Rp. 1.300.000</span>
                </article>
            </a>
        </div>
        <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
            <a href="/product/view/product-name" class="group">
                <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                    <img src="/assets/images/products/electronics/laptop/laptop-axioo-hyper5-12gb.webp" alt="Laptop Axioo Hyper-R 5 12GB/512GB" class="w-full h-full aspect-square object-cover transition duration-150 group-hover:scale-[1.15]">
                </figure>
                <article class="details-product mt-2">
                    <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Laptop Axioo Hype-R 5 RAM 12 GB Storage 512 GB OLED Display</h2>
                    <div class="rating-star my-1.5 flex gap-2">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/rating.png" alt="Star Image" class="w-[14px] h-fit">
                        <span class="text-xs text-gray-500/95">(19.59k)</span>
                    </div>
                    <span class="text-sm font-bold">Rp. 8.699.000</span>
                </article>
            </a>
        </div>
        <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
            <a href="/product/view/product-name" class="group">
                <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                    <img src="/assets/images/products/sparepart/ssd-laptop-samsung-970-evo-1tb.png" alt="SSD Laptop Samsung 970 Evo Plus 1 TB" class="w-full h-full aspect-square object-cover transition duration-150 group-hover:scale-[1.15]">
                </figure>
                <article class="details-product mt-2">
                    <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">SSD Laptop Samsung Evo Plus 1 TB M.2 2280 High Transfer</h2>
                    <div class="rating-star my-1.5 flex gap-2">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/rating.png" alt="Star Image" class="w-[14px] h-fit">
                        <span class="text-xs text-gray-500/95">(8k)</span>
                    </div>
                    <span class="text-sm font-bold">Rp. 4.460.000</span>
                </article>
            </a>
        </div>
        <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
            <a href="/product/view/product-name" class="group">
                <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                    <img src="/assets/images/products/jam-tangan/jam-tangan-lorenzo.webp" alt="Jam Tangan Wanita Lorenzo Stainless" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                </figure>
                <article class="details-product mt-2">
                    <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Jam Tangan Wanita Lorenzo Stainless Silver</h2>
                    <div class="rating-star my-1.5 flex gap-2">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                        <img src="/assets/icons/star-nofill.png" alt="Star with No Fill Image" class="w-[14px] h-fit">
                        <span class="text-xs text-gray-500/95">(30k)</span>
                    </div>
                    <span class="text-sm font-bold">Rp. 248.640</span>
                </article>
            </a>
        </div>
    </div>
    <!-- Akhir Products List -->
</div>
<!-- Akhir Related Products -->
<!-- CSS Custom Utilities -->
<link rel="stylesheet" href="/assets/css/custom-utilities.css">
<!-- Script Summary Product UI -->
<script src="/assets/js/summary-product-ui.js"></script>
<?= $this->endSection() ?>