<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<!-- Main Content -->
<main class="sm:pt-[30px] px-[10px] sm:px-[30px] xl:pt-[20px] sm:pb-[160px] xl:pb-[200px] xl:px-[80px]">
    <!-- Categories -->
    <section class="categories pb-[8px] xl:pb-0 text-xs sm:text-sm 2xl:text-lg flex gap-6 overflow-x-scroll xl:overflow-visible">
        <!-- Button All Categories -->
        <a href="<?= base_url('/category/all') ?>" class="flex cursor-pointer shrink-0">
            <!-- Menu Icon -->
            <figure class="2xl:h-fit 2xl:self-center">
                <img src="/assets/icons/menu.png" alt="Menu Image">
            </figure>
            <!-- Akhir Menu Icon -->
            <span class="ml-1.5 font-semibold">Semua Kategori</span>
        </a>
        <!-- Akhir Button Categories -->
        <!-- List Categories -->
        <div class="list-categories shrink-0">
            <ul class="flex gap-3.5">
                <li><a href="<?= base_url('/category/electronic') ?>" class="transition duration-150 hover:text-blue-600">Elektronik</a></li>
                <li><a href="<?= base_url('/category/computer') ?>" class="transition duration-150 hover:text-blue-600">Komputer</a></li>
                <li><a href="<?= base_url('/category/fashion') ?>" class="transition duration-150 hover:text-blue-600">Fashion</a></li>
                <li><a href="<?= base_url('/category/watch') ?>" class="transition duration-150 hover:text-blue-600">Jam Tangan</a></li>
                <li><a href="<?= base_url('/category/shirt') ?>" class="transition duration-150 hover:text-blue-600">Baju Kemeja</a></li>
                <li><a href="<?= base_url('/category/cosmetic') ?>" class="transition duration-150 hover:text-blue-600">Kosmetik</a></li>
            </ul>
        </div>
        <!-- Akhir List Categories -->
    </section>
    <!-- Akhir Categories -->
    <!-- Product Showcase -->
    <section class="products-showcase mt-8 slider">
        <!-- Showcase Items -->
        <div class="showcase-items slider-items flex gap-4 rounded-xl overflow-hidden">
            <!-- Show Case Product -->
            <div class="item showcase sm:w-full lg:w-[780px] xl:w-[650px] xl:h-[300px] 2xl:w-[780px] 2xl:h-[350px] p-[18px] sm:p-[40px] flex flex-col 2xl:grow-1 xl:justify-between shrink-0 will-change-transform transition duration-700 bg-gray-100 bg-contain bg-[center_right_5.5rem] sm:bg-right bg-no-repeat bg-[url(/assets/images/products-showcase/iphone/iphone_16_pro_max.webp)] rounded-xl transition duration-150 hover:shadow-md">
                <!-- Product Details -->
                <div class="product-details w-[40%] sm:w-[50%] flex flex-col">
                    <h2 class="text-sm sm:text-xl xl:text-lg 2xl:text-xl">iPhone 16 Pro Max</h2>
                    <span class="mt-1 sm:mt-0 sm:text-xl font-semibold">Hanya Rp. 20.699.000</span>
                    <span class="features mt-2 text-[10px] sm:text-[12px] xl:text-[10px] 2xl:text-[12px] text-gray-500/95 leading-4 sm:leading-[1.25rem]">Chipset A18 Pro. Kamera 48MP dan Telefoto 5x zoom optik. Layar 6.9 inci. Memori Internal 1TB.</span>
                    <a href="<?= base_url('/product/view/iphone-16-pro-max') ?>" class="mt-4 sm:mt-5 xl:mt-4 inline-block w-fit py-1 px-3 sm:py-1.5 sm:px-5 text-[10px] sm:text-xs xl:text-sm text-gray-500 font-bold tracking-wide border-1 border-solid border-gray-500 hover:border-transparent hover:bg-gray-300 hover:text-white transition duration-300 rounded-full tracking-wider">
                        Beli Sekarang
                    </a>
                </div>
                <!-- Akhir Product Details -->
                <!-- More Details -->
                <div class="more-details text-gray-500/95 mt-6 sm:mt-4 xl:mt-0 text-[10px] sm:text-xs">
                    <span class="align-top">*</span><span>Persediaan Lengkap</span>
                </div>
                <!-- Akhir More Details -->
            </div>
            <!-- Akhir Show Case Product -->
            <div class="item showcase relative sm:w-full lg:w-[780px] xl:w-[650px] xl:h-[300px] 2xl:w-[780px] 2xl:h-[350px] p-[18px] sm:p-[40px] flex flex-col 2xl:grow-1 justify-between shrink-0 will-change-transform transition duration-700 bg-gray-100 bg-cover bg-right bg-no-repeat bg-[url(/assets/images/products-showcase/xiaomi-tv/xiaomi-google-tv.webp)] rounded-xl overflow-hidden transition duration-150 hover:shadow-md">
                <div class="overlay absolute inset-0 bg-black/40"></div>
                <div class="product-details relative w-[40%] sm:w-[50%] flex flex-col">
                    <h2 class="text-sm sm:text-xl xl:text-lg text-white text-shadow-lg/10">Xiaomi Google TV</h2>
                    <span class="mt-1 sm:mt-0 sm:text-xl font-semibold text-white text-shadow-lg/10">Hanya Rp. 2.699.000</span>
                    <span class="features mt-2 text-[10px] sm:text-[12px] xl:text-[10px] 2xl:text-[12px] text-white leading-4 sm:leading-[1.25rem] text-shadow-lg/10">Layar 43 Inci. Resolusi FHD 1920 x 1080 piksel. Prosesor Quad A55. RAM 1.5GB + Storage 8GB.</span>
                    <a href="<?= base_url('/product/view/xiaomi-google-tv') ?>" class="mt-4 sm:mt-5 xl:mt-4 inline-block w-fit py-1 px-3 sm:py-1.5 sm:px-5 text-[10px] sm:text-xs xl:text-sm text-white font-bold tracking-wide border-1 border-solid border-white hover:border-transparent hover:bg-gray-300 hover:text-white transition duration-300 rounded-full tracking-wider text-shadow-md">Beli Sekarang</a>
                </div>
                <div class="more-details relative mt-6 sm:mt-4 xl:mt-0 text-[10px] sm:text-xs text-white text-shadow-lg/10">
                    <span class="align-top">*</span><span>Persediaan Lengkap</span>
                </div>
            </div>
        </div>
        <!-- Akhir Showcase Items -->
        <!-- Indicators -->
        <div class="indicators w-fit mt-6 2xl:mt-10 mx-auto py-[6px] px-[10px] sm:py-[12px] lg:py-2 sm:px-[22px] lg:px-4 2xl:py-3 2xl:px-5 flex gap-2 2xl:gap-2.5 border-2 border-solid border-blue-600 rounded-full">
            <span class="indicator inline-block w-[10px] h-[10px] sm:w-[12px] xl:w-[8px] sm:h-[12px] xl:h-[8px] lg:w-[10px] lg:h-[10px] 2xl:w-[14px] 2xl:h-[14px] rounded-full active" data-index="0"></span>
            <span class="indicator inline-block w-[10px] h-[10px] sm:w-[12px] xl:w-[8px] sm:h-[12px] xl:h-[8px] lg:w-[10px] lg:h-[10px] 2xl:w-[14px] 2xl:h-[14px] rounded-full" data-index="1"></span>
        </div>
        <!-- Akhir Indicators -->
    </section>
    <!-- Akhir Product Showcase -->
    <!-- Popular Categories -->
    <section class="popular-categories mt-[60px] slider-w-next-prev relative">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl">Kategori Populer</h2>
            <a href="<?= base_url('/category/all') ?>" class="text-xs sm:text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Semua Kategori</a>
        </div>
        <!-- Akhir Title -->
        <!-- List Categories Popular -->
        <section class="list-categories-popular mt-6 overflow-hidden">
            <!-- List Items Categories -->
            <div class="list-items slider-items relative flex gap-4 sm:gap-8 md:gap-5 xl:gap-5 2xl:gap-9">
                <div class="item">
                    <a href="<?= base_url('/category/elektronik') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden">
                            <img src="/assets/images/tv.png" class="w-full h-full object-cover scale-[0.8]" alt="TV Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Elektronik</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/jam-tangan') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden">
                            <img src="/assets/images/jam-tangan.png" class="w-full h-full object-cover scale-[0.8]" alt="Jam Tangan Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Jam Tangan</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/fashion') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/jas.png" class="w-full h-full object-cover scale-[0.8]" alt="Jas Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Fashion</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/baju-kemeja') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/kemeja.png" class="w-full h-full object-cover scale-[0.8]" alt="Kemeja Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Baju Kemeja</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/pakaian-dalam') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/celana-dalam.png" class="w-full h-full object-cover scale-[0.8]" alt="Celana Dalam Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Pakaian Dalam</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/kosmetik') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/kosmetik.png" class="w-full h-full object-cover scale-[0.8]" alt="Kosmetik Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Kosmetik</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/celana') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/celana.png" class="w-full h-full object-cover scale-[0.8]" alt="Celana Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Celana</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/perabotan-rumah') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/perabotan-rumah.png" class="w-full h-full object-cover scale-[0.8]" alt="Perabotan Rumah Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Perabotan Rumah</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/hiasan') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/hiasan.webp" class="w-full h-full object-cover scale-[0.8] rounded-full" alt="Hiasan Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Hiasan</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita 3</span>
                </div>
                <div class="item">
                    <a href="<?= base_url('/category/rok-wanita') ?>">
                        <figure class="w-[90px] md:w-[120px] mx-auto bg-gray-100 rounded-full hover:bg-blue-600/35 transition duration-200 overflow-hidden aspect-square">
                            <img src="/assets/images/rok-wanita.png" class="w-full h-full object-cover scale-[0.8]" alt="Rok Wanita Image">
                        </figure>
                    </a>
                    <span class="category-name w-full mt-2 inline-block text-xs sm:text-sm text-center font-semibold cursor-default">Rok Wanita</span>
                </div>
            </div>
            <!-- Akhir List Items Categories -->
        </section>
        <!-- Akhir List Categories Popular -->
        <!-- Indicators -->
        <div class="indicators w-full flex justify-between absolute top-[50%] translate-y-[-50%]">
            <!-- Previous Button -->
            <button type="button" class="prev-btn hidden bg-white p-2 absolute left-0 sm:left-[-16px] rounded-full shadow-md cursor-pointer">
                <figure class="rotate-90 w-[16px]">
                    <img src="/assets/icons/down-arrow.png" />
                </figure>
            </button>
            <!-- Akhir Previous Button -->
            <!-- Next Button -->
            <button type="button" class="next-btn bg-white p-2 absolute right-0 sm:right-[-16px] rounded-full shadow-md cursor-pointer">
                <figure class="-rotate-90 w-[16px]">
                    <img src="/assets/icons/down-arrow.png" />
                </figure>
            </button>
            <!-- Akhir Next Button -->
        </div>
        <!-- Akhir Indicators -->
    </section>
    <!-- Akhir Popular Categories -->
    <!-- Flash Sale -->
    <section class="flash-sale sm:relative xl:static lg:w-[85%] xl:w-[90%] 2xl:w-[75%] mx-auto flex h-[400px] mt-[60px] bg-linear-to-r from-slate-200 to-gray-100 sm:overflow-hidden xl:overflow-visible sm:shadow-md xl:shadow-none">
        <!-- Left Side Flash Sale -->
        <aside class="left sm:relative xl:static p-4 sm:p-8 flex-1">
            <!-- Flash Sale Info -->
            <div class="flash-sale-info flex flex-col sm:flex-row gap-3 sm:gap-4 items-start sm:items-center">
                <h2 class="bg-linear-to-r from-amber-400 to-orange-500 w-fit py-1.5 px-3 uppercase text-sm text-white text-shadow-lg/20 tracking-widest rounded-sm">Flash Sale</h2>
                <!-- Countdown -->
                <div class="countdown text-sm sm:text-lg">
                    <span>Tersisa</span>
                    <span class="tracking-wider">12</span>
                    <span> Jam</span>
                    <span>:</span>
                    <span class="tracking-wider">35</span>
                    <span> Menit</span>
                    <span>:</span>
                    <span class="tracking-wider">40</span>
                    <span> Detik</span>
                </div>
                <!-- Akhir Countdown -->
            </div>
            <!-- Akhir Flash Sale Info -->
            <!-- Flash Sale Details -->
            <article class="flash-sale-details mt-2 sm:mt-6">
                <!-- Brand Name -->
                <h3 class="text-2xl sm:text-3xl tracking-wider">LENOVO LOQ 15AHP10</h3>
                <!-- Akhir Brand Name -->
                <p class="text-sm mt-1">Buruan beli sebelum kehabisan waktu!</p>
                <!-- More Informations Product -->
                <ul class="list-disc mt-2 ml-4 text-xs sm:text-sm">
                    <li class="text-shadow-md mb-1 sm:mb-0.5">Refresh Rate: 144Hz</li>
                    <li class="text-shadow-md mb-1 sm:mb-0.5">Screen Size: 15.6"</li>
                    <li class="text-shadow-md mb-1 sm:mb-0.5">Resolution: 1920x1080 (Full-HD)</li>
                    <li class="text-shadow-md mb-1 sm:mb-0.5">Processor: AMD Ryzen 5 220</li>
                    <li class="text-shadow-md mb-1 sm:mb-0.5">GPU: NVIDIA GeForce RTX 5050</li>
                    <li class="text-shadow-md mb-1 sm:mb-0.5">RAM: 16 GB (DDR5)</li>
                    <li class="text-shadow-md ">SSD: 512 GB M.2 NVMe (1 Slot Free)</li>
                </ul>
                <!-- Akhir More Informations Product -->
                <!-- Costs Flash Sale -->
                <div class="costs-flash-sale mt-4 sm:mt-8 xl:mt-6">
                    <a href="<?= base_url('/product/view/lenovo-loq-15ahp10') ?>" class="py-2 px-3 bg-blue-600/30 text-xs sm:text-sm border-1 border-solid border-blue-600/30 uppercase font-bold text-white text-shadow-md tracking-widest rounded-sm cursor-pointer transition duration-150 hover:bg-blue-600 hover:shadow-sm/80 hover:shadow-blue-600">Beli Sekarang</a>
                    <span class="inline-block mt-3 sm:ml-2 text-xs font-semibold text-nowrap">Hanya Rp 16.350.000 Dari <span class="text-red-400 line-through">Rp 16.999.000</span></span>
                </div>
                <!-- Akhir Costs Flash Sale -->
            </article>
            <!-- Akhir Flash Sale Details -->
        </aside>
        <!-- Akhir Left Side Flash Sale -->
        <!-- Right Side Flash Sale -->
        <aside class="right hidden sm:block sm:absolute xl:relative sm:right-[70px] sm:top-[36px] xl:top-0 flex-1 bg-no-repeat bg-position-[center_bottom_3rem] bg-[url(/assets/images/stand-podium-product.png)]">
            <figure class="absolute top-[70px] left-[48%] translate-x-[-50%] w-[250px] aspect-square rotate-x-[35deg]">
                <img src="/assets/images/products/electronics/laptop/lenovo-loq-15ahp10.png" alt="Lenovo LOQ 15AHP10" class="w-full h-full object-contain drop-shadow-lg/25" />
            </figure>
        </aside>
        <!-- Akhir Right Side Flash Sale -->
    </section>
    <!-- Akhir Flash Sale -->
    <!-- Related Products -->
    <div class="related-products mt-[60px]">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Produk yang Mungkin Anda Sukai</h2>
            <a href="<?= base_url('/related-products') ?>" class="basis-[120px] text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Semua Produk</a>
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
    <!-- Sponsor -->
    <section class="sponsor w-full h-full mt-[60px] bg-gray-100 rounded-md">
        <!-- Sponsor Image -->
        <figure>
            <img src="/assets/images/sponsor/asus-tuf-gaming-a16.jpg" alt="Asus TUF Gaming A16" class="w-full object-contain aspect-video rounded-md">
        </figure>
        <!-- Akhir Sponsor Image -->
    </section>
    <!-- Akhir Sponsor -->
    <!-- Discount Products -->
    <div class="discount-products mt-[60px]">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Produk yang Sedang Diskon</h2>
            <a href="<?= base_url('/discount-products') ?>" class="basis-[120px] text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Semua Produk</a>
        </div>
        <!-- Akhir Title -->
        <!-- Products List -->
        <div class="products mt-6 flex gap-x-4 gap-y-8 flex-wrap">
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                        <div class="costs">
                            <span class="text-sm font-bold">Rp. 22.999.000</span>
                            <span class="text-xs text-gray-500/95 font-extralight sm:text-nowrap xl:text-wrap">( <span class="line-through decoration-1 decoration-red-400">Rp. 23.699.000</span> )</span>
                        </div>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                        <div class="costs">
                            <span class="text-sm font-bold">Rp. 239.000</span>
                            <span class="text-xs text-gray-500/95 font-extralight sm:text-nowrap xl:text-wrap">( <span class="line-through decoration-1 decoration-red-400">Rp. 260.000</span> )</span>
                        </div>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                        <div class="costs">
                            <span class="text-sm font-bold">Rp. 3.000.000</span>
                            <span class="text-xs text-gray-500/95 font-extralight sm:text-nowrap xl:text-wrap">( <span class="line-through decoration-1 decoration-red-400">Rp. 3.299.000</span> )</span>
                        </div>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                        <div class="costs">
                            <span class="text-sm font-bold">Rp. 1.300.000</span>
                            <span class="text-xs text-gray-500/95 font-extralight sm:text-nowrap xl:text-wrap">( <span class="line-through decoration-1 decoration-red-400">Rp. 1.500.000</span> )</span>
                        </div>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                        <div class="costs">
                            <span class="text-sm font-bold">Rp. 8.699.000</span>
                            <span class="text-xs text-gray-500/95 font-extralight sm:text-nowrap xl:text-wrap">( <span class="line-through decoration-1 decoration-red-400">Rp. 8.999.000</span> )</span>
                        </div>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                        <div class="costs">
                            <span class="text-sm font-bold">Rp. 4.460.000</span>
                            <span class="text-xs text-gray-500/95 font-extralight sm:text-nowrap xl:text-wrap">( <span class="line-through decoration-1 decoration-red-400">Rp. 4.520.000</span> )</span>
                        </div>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                        <div class="costs">
                            <span class="text-sm font-bold">Rp. 248.640</span>
                            <span class="text-xs text-gray-500/95 font-extralight sm:text-nowrap xl:text-wrap">( <span class="line-through decoration-1 decoration-red-400">Rp. 266.900</span> )</span>
                        </div>
                    </article>
                </a>
            </div>
        </div>
        <!-- Akhir Products List -->
    </div>
    <!-- Akhir Discount Products -->
    <!-- Smartphone Products -->
    <div class="smartphone-products mt-[60px]">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl">Smartphone Terbaik</h2>
            <a href="<?= base_url('/smartphone-products') ?>" class="basis-[120px] text-xs sm:text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Semua Produk</a>
        </div>
        <!-- Akhir Title -->
        <!-- Products List -->
        <div class="products mt-6 flex gap-x-4 gap-y-8 flex-wrap">
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/electronics/smartphone/infinix/infinix-note-40-pro-5g.webp" alt="Smartphone Infinix Note 40 Pro 5G" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Infinix Note 40 Pro 5G 8/256 GB</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star-nofill.png" alt="Star Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(14.3k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 3.799.000</span>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/electronics/smartphone/infinix/infinix-gt-30-pro-se.webp" alt="Smartphone Infinix GT 30 Pro SE" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Infinix GT 30 Pro SE 8/256 GB MediaTek Dimensity 8350 Ultimate</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star-nofill.png" alt="Star Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(14.3k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 3.799.000</span>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/electronics/smartphone/iphone/iphone-14-pro.webp" alt="Smartphone Iphone 14 Pro" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Iphone 14 Pro 6 GB / 1 TB Black</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star-nofill.png" alt="Star Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(14.3k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 19.999.000</span>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/electronics/smartphone/xiaomi/xiaomi-14-ultra.webp" alt="Smartphone Xiaomi 14 Ultra" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Xiaomi 14 Ultra Snapdragon 8 Gen 3 16 GB RAM 512 GB Storage</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star-nofill.png" alt="Star Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(18k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 17.899.000</span>
                    </article>
                </a>
            </div>
        </div>
        <!-- Akhir Products List -->
    </div>
    <!-- Akhir Smartphone Products -->
    <!-- Cosmetic Products -->
    <div class="cosmetic-products mt-[60px]">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Kosmetik Terbaik</h2>
            <a href="<?= base_url('/cosmetic-products') ?>" class="text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Semua Produk</a>
        </div>
        <!-- Akhir Title -->
        <!-- Products List -->
        <div class="products mt-6 flex gap-x-4 gap-y-8 flex-wrap">
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/cosmetics/glad2glow/glad2glow-set-5pcs.webp" alt="Glad2Glow Set 5pcs" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Glad2Glow Set - isi 5pcs Produk Kecantikan</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/rating.png" alt="Star Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(899)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 226.500</span>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/cosmetics/wardah/wardah-facial-wash-hydra-rose.webp" alt="Wardah Facial Wash Hydra Rose" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Skincare Wardah Facial Wash Hydra Rose</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/rating.png" alt="Star Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(24k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 38.500</span>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/cosmetics/wardah/wardah-lipstick-korea-matte.webp" alt="Wardah Lipstick Korea Ultralight Matte" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Lipstick Wardah Ultralight Matte Korea Edition</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/rating.png" alt="Star Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(24k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 38.500</span>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/cosmetics/kahf/kahf-paket-lengkap.webp" alt="Kahf Paket Lengkap" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Skincare Pria Kahf Paket Lengkap Cocok Disemua Kulit</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star-nofill.png" alt="Star With Nofill Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(1.2k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 391.500</span>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/cosmetics/scarlett/scarlett-romansa-brightening-handbody.webp" alt="Skincare Handbody Scarlett Romansa" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Scarlett Romansa Fragrance Brightening Hand & Body 300ml</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star-nofill.png" alt="Star With Nofill Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(6.7k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 142.900</span>
                    </article>
                </a>
            </div>
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
                    <figure class="w-full h-[164px] bg-gray-100 rounded-sm overflow-hidden border-2 border-solid border-transparent group-hover:border-gray-300 transition duration-150">
                        <img src="/assets/images/products/cosmetics/skintific/retinol-skin-renewal-serum.webp" alt="Skintific Retinol Skin Renewal Serum" class="w-full h-full aspect-square object-contain transition duration-150 group-hover:scale-[1.15]">
                    </figure>
                    <article class="details-product mt-2">
                        <h2 class="h-[40px] text-sm text-gray-500/95 overflow-hidden text-ellipsis group-hover:text-gray-500">Skincare Skintific Retinol Skin Renewal Serum 20ml</h2>
                        <div class="rating-star my-1.5 flex gap-2">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star.png" alt="Star Image" class="w-[14px] h-fit">
                            <img src="/assets/icons/star-nofill.png" alt="Star With Nofill Image" class="w-[14px] h-fit">
                            <span class="text-xs text-gray-500/95">(8.9k)</span>
                        </div>
                        <span class="text-sm font-bold">Rp. 154.200</span>
                    </article>
                </a>
            </div>
        </div>
        <!-- Akhir Products List -->
    </div>
    <!-- Akhir Cosmetics Products -->
    <!-- Official Brands -->
    <div class="official-brands mt-[60px]">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Cari Produk Berdasarkan Merk Terbaik!</h2>
        </div>
        <!-- Akhir Title -->
        <!-- Brands Logo -->
        <div class="brands-logo sm:mt-8 xl:mt-6 flex gap-4 flex-wrap justify-center">
            <a href="<?= base_url('/brand/xiaomi') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/xiaomi.webp" alt="Xiaomi Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Xiaomi</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Just For Fans.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/asus') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/asus.webp" alt="Asus Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Asus</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Always Strong. Always On.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/axioo') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/axioo.webp" alt="Axioo Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Axioo</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Pilih Pasti. Pilih Axioo.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/apple') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/apple.webp" alt="Apple Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Apple</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Think Different.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/samsung') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/samsung.webp" alt="Samsung Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Samsung</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Inspire The World. Create The Future.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/adidas') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/adidas.png" alt="Adidas Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Adidas</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Impossible is Nothing.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/xiaomi-tv') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/xiaomi-tv.png" alt="Xiaomi Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Xiaomi TV</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Live Right. Live Smart.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/lenovo') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/lenovo.webp" alt="Lenovo Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Lenovo</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Stylish Outside, Savage Inside.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/realme') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/realme.webp" alt="Realme Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Realme</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Make It Real.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/gucci') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/gucci.png" alt="Gucci Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Gucci</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">My Body My Choice.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/panasonic') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/panasonic.webp" alt="Panasonic Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Panasonic</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Live Your Best.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/google-tv') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/google-tv.webp" alt="Google TV Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Google TV</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">Everything You Stream. All On One Screen.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/infinix') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/infinix.webp" alt="Infinix Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logo-name text-sm xl:text-sm font-semibold">Infinix</span>
                        <br>
                        <span class="logo-slogan text-sm sm:text-md xl:text-xs">The Future Is Now.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/converse') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/converse.png" alt="Converse Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logotext-sm font-semibold">Converse</span>
                        <br>
                        <span class="logo-slogan text-sm text-xs">Shoes Are Boring, Wear Sneakers</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/kahf') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/kahf.webp" alt="Kahf Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logotext-sm font-semibold">Kahf</span>
                        <br>
                        <span class="logo-slogan text-sm text-xs">#LanjutTerusBro</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/wardah') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/wardah.webp" alt="Wardah Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logotext-sm font-semibold">Wardah</span>
                        <br>
                        <span class="logo-slogan text-sm text-xs">Beauty Moves You.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/scarlett') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/scarlett.webp" alt="Scarlett Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logotext-sm font-semibold">Scarlett</span>
                        <br>
                        <span class="logo-slogan text-sm text-xs">Reveal Your Beauty.</span>
                    </div>
                </div>
            </a>
            <a href="<?= base_url('/brand/skintific') ?>" class="grow-1 sm:grow-0">
                <div class="logo w-full sm:w-auto p-3 sm:py-3 sm:pl-4 sm:pr-14 flex gap-5 sm:gap-3 bg-gray-100 w-fit rounded-xs shrink-0">
                    <figure class="w-[65px] bg-white aspect-square p-2.5 rounded-full">
                        <img src="/assets/images/brands-logo/skintific.png" alt="Skintific Logo" class="w-full h-full object-contain">
                    </figure>
                    <div class="identity self-center">
                        <span class="logotext-sm font-semibold">Skintific</span>
                        <br>
                        <span class="logo-slogan text-sm text-xs">We Repair Your Skin Barrier.</span>
                    </div>
                </div>
            </a>
        </div>
        <!-- Akhir Brands Logo -->
    </div>
    <!-- Akhir Official Brands -->
    <!-- Promotional Banners -->
    <div class="promotional-banners my-[100px] sm:my-[80px] lg:my-[120px] grid lg:grid-cols-2 xl:grid-cols-3 gap-6 sm:gap-8 xl:gap-4">
        <!-- First Column -->
        <figure class="first-col bg-gray-100 relative order-1">
            <img src="/assets/images/promotional-banners/samsung-galaxy-z-fold-4.jpg" class="w-full h-full shadow-md rounded-md" alt="Samsung Galaxy Z Fold 4">
            <a href="<?= base_url('/product/view/samsung-galaxy-z-fold-4') ?>" class="absolute right-[12px] bottom-[12px] sm:right-[14px] xl:right-[8px] sm:bottom-[14px] xl:bottom-[8px] py-1 px-3 sm:py-2 sm:px-6 xl:py-1 xl:px-2.5 2xl:py-2 2xl:px-6 bg-blue-800 text-sm sm:text-lg xl:text-xs 2xl:text-sm text-blue-200 font-semibold border-2 border-solid border-blue-200 rounded-full shadow-sm">Beli Sekarang</a>
        </figure>
        <!-- Akhir First Column -->
        <!-- Second Column -->
        <div class="second-col grid lg:col-span-2 xl:col-span-1 grid-cols-subgrid order-2 lg:order-last xl:order-2 gap-6 sm:gap-8 lg:gap-4">
            <figure class="bg-gray-100 relative">
                <img src="/assets/images/promotional-banners/asus-tuf-gaming-a5.jpg" class="w-full h-full shadow-md rounded-md" alt="Diskon Laptop Asus TUF Gaming A5">
                <a href="<?= base_url('/product/view/asus-tuf-gaming-a5') ?>" class="absolute right-[12px] bottom-[12px] sm:right-[14px] xl:right-[8px] sm:bottom-[14px] xl:bottom-[8px] py-1 px-3 sm:py-2 sm:px-6 xl:py-1 xl:px-2.5 2xl:py-2 2xl:px-6 bg-red-700 text-sm sm:text-lg xl:text-xs 2xl:text-sm text-red-200 font-semibold border-2 border-solid border-red-200 rounded-full shadow-sm">Beli Sekarang</a>
            </figure>
            <figure class="bg-gray-100 relative">
                <img src="/assets/images/promotional-banners/redmi-a5.webp" class="w-full h-full shadow-md rounded-md" alt="Redmi A5">
                <a href="<?= base_url('/product/view/redmi-a5') ?>" class="absolute right-[12px] bottom-[12px] sm:right-[14px] xl:right-[8px] sm:bottom-[14px] xl:bottom-[8px] py-1 px-3 sm:py-2 sm:px-6 xl:py-1 xl:px-2.5 2xl:py-2 2xl:px-6 bg-emerald-600 text-sm sm:text-lg xl:text-xs 2xl:text-sm text-emerald-200 font-semibold border-2 border-solid border-emerald-200 rounded-full shadow-sm">Beli Sekarang</a>
            </figure>
        </div>
        <!-- Akhir Second Column -->
        <!-- Third Column -->
        <figure class="third-col bg-gray-100 relative order-3">
            <img src="/assets/images/promotional-banners/blibli-panasonic-promo.jpg" class="w-full h-full shadow-md rounded-md" alt="Panasonic Promo - BliBli">
            <a href="<?= base_url('/product/view/panasonic') ?>" class="absolute right-[12px] bottom-[12px] sm:right-[14px] xl:right-[8px] sm:bottom-[14px] xl:bottom-[8px] py-1 px-3 sm:py-2 sm:px-6 xl:py-1 xl:px-2.5 2xl:py-2 2xl:px-6 bg-amber-600 text-sm sm:text-lg xl:text-xs 2xl:text-sm text-amber-200 font-semibold border-2 border-solid border-amber-200 rounded-full shadow-sm">Beli Sekarang</a>
        </figure>
        <!-- Akhir Third Column -->
    </div>
    <!-- Akhir Promotional Banners -->
    <!-- Laptop & Accessories -->
    <div class="laptop-accessories bg-gray-100 p-6">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Laptop & Aksesori</h2>
            <a href="<?= base_url('/category/laptop-accessories') ?>" class="text-xs sm:text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Lihat Semua</a>
        </div>
        <!-- Akhir Title -->
        <!-- Cards -->
        <div class="cards flex gap-4 mt-6 justify-between overflow-x-auto xl:overflow-visible">
            <a href="<?= base_url('/category/electronic/laptop') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/laptop-thumbnail.webp" alt="Laptop" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-lg sm:text-sm text-center mt-2 sm:mt-4 font-semibold">Laptop</span>
                </div>
            </a>
            <a href="<?= base_url('/category/electronic/monitor') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/monitor-thumbnail.webp" alt="Monitor" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-lg sm:text-sm text-center mt-2 sm:mt-4 font-semibold">Monitor</span>
                </div>
            </a>
            <a href="<?= base_url('/category/accessories/headphone') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/headphone-thumbnail.webp" alt="Headphone" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-lg sm:text-sm text-center mt-2 sm:mt-4 font-semibold">Headphone</span>
                </div>
            </a>
            <a href="<?= base_url('/category/accessories/mouse') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/mouse-thumbnail.webp" alt="Mouse" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-lg sm:text-sm text-center mt-2 sm:mt-4 font-semibold">Mouse</span>
                </div>
            </a>
            <a href="<?= base_url('/category/accessories/storage-device') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/ssd-thumbnail.webp" alt="Storage" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-lg sm:text-sm text-center mt-2 sm:mt-4 font-semibold">Penyimpanan</span>
                </div>
            </a>
        </div>
        <!-- Akhir Cards -->
    </div>
    <!-- Akhir Laptop & Accessories -->
    <!-- Fashion & Style -->
    <div class="fashion-style mt-[60px] bg-gray-100 p-6">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Fashion & Gaya</h2>
            <a href="<?= base_url('/category/fashion-style') ?>" class="text-xs sm:text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Lihat Semua</a>
        </div>
        <!-- Akhir Title -->
        <!-- Cards -->
        <div class="cards flex gap-4 mt-6 justify-between overflow-x-auto xl:overflow-visible">
            <a href="<?= base_url('/category/fashion-style/hoodie') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/hoodie-thumbnail.webp" alt="Hoodie" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Hoodie</span>
                </div>
            </a>
            <a href="<?= base_url('/category/fashion-style/bag') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/tas-thumbnail.webp" alt="Tas" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Tas</span>
                </div>
            </a>
            <a href="<?= base_url('/category/fashion-style/shoe') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/sneaker-thumbnail.webp" alt="Sepatu" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Sepatu</span>
                </div>
            </a>
            <a href="<?= base_url('/category/fashion-style/t-shirt') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/kaos-thumbnail.webp" alt="Kaos" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Kaos</span>
                </div>
            </a>
            <a href="<?= base_url('/category/fashion-style/jacket') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/jaket-thumbnail.webp" alt="Jaket" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Jaket</span>
                </div>
            </a>
        </div>
        <!-- Akhir Cards -->
    </div>
    <!-- Akhir Fashion & Style -->
    <!-- Health & Beauty -->
    <div class="health-beauty mt-[60px] bg-gray-100 p-6">
        <!-- Title -->
        <div class="title flex justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Kesehatan & Kecantikan</h2>
            <a href="<?= base_url('/category/health-beauty') ?>" class="text-xs sm:text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Lihat Semua</a>
        </div>
        <!-- Akhir Title -->
        <!-- Cards -->
        <div class="cards flex gap-4 mt-6 justify-between overflow-x-auto xl:overflow-visible">
            <a href="<?= base_url('/category/health-beauty/makeup') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/makeup-thumbnail.webp" alt="Makeup" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Makeup</span>
                </div>
            </a>
            <a href="<?= base_url('/category/health-beauty/skincare') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/skincare-thumbnail.webp" alt="Skincare" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Skincare</span>
                </div>
            </a>
            <a href="<?= base_url('/category/health-beauty/hair-care') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/hair-care-thumbnail.webp" alt="Hair Care" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Vitamin Rambut</span>
                </div>
            </a>
            <a href="<?= base_url('/category/health-beauty/beauty-tools') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/beauty-tools-thumbnail.webp" alt="Alat Kecantikan" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Alat Kecantikan</span>
                </div>
            </a>
            <a href="<?= base_url('/category/health-beauty/fragrance') ?>" class="text-center group 2xl:grow-1">
                <div class="card bg-white pb-4 flex flex-col grow-1 shrink-0 items-center rounded-lg shadow-sm transition duration-150 group-hover:-translate-y-[12px]">
                    <figure class="w-[180px] p-5 aspect-square rounded-full">
                        <img src="/assets/images/thumbnails/parfum-thumbnail.webp" alt="Parfum" class="w-full h-full object-contain">
                    </figure>
                    <span class="text-sm text-center mt-4 font-semibold">Parfum</span>
                </div>
            </a>
        </div>
        <!-- Akhir Cards -->
    </div>
    <!-- Akhir Fashion & Style -->
    <!-- Most Wanted Products -->
    <div class="most-wanted-products mt-[60px]">
        <!-- Title -->
        <div class="title flex items-center sm:items-start justify-between">
            <h2 class="sm:text-2xl xl:text-xl 2xl:text-2xl text-pretty">Produk yang Banyak Dicari</h2>
            <a href="<?= base_url('/most-wanted-products') ?>" class="text-xs sm:text-sm lg:text-lg xl:text-sm 2xl:text-lg text-blue-600">Semua Produk</a>
        </div>
        <!-- Akhir Title -->
        <!-- Products List -->
        <div class="products mt-6 flex gap-x-4 gap-y-8 flex-wrap">
            <div class="card cards-divide w-full sm:w-auto sm:shrink-0 group">
                <a href="#" class="group">
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
                <a href="#" class="group">
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
                <a href="#" class="group">
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
                <a href="#" class="group">
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
                <a href="#" class="group">
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
                <a href="#" class="group">
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
                <a href="#" class="group">
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
    <!-- Akhir Most Wanted Products -->
</main>
<!-- Custom Utilities CSS -->
<link rel="stylesheet" href="/assets/css/custom-utilities.css">
<!-- Slider JS -->
<script src="<?= base_url('/assets/js/slider.js') ?>"></script>
<!-- Slider Buttons JS -->
<script src="<?= base_url('/assets/js/slider-buttons.js') ?>"></script>
<!-- Akhir Main Content -->
<?= $this->endSection() ?>