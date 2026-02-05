<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | iSan Shop</title>
    <link rel="stylesheet" href="/assets/css/fonts.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <!-- Header -->
    <header class="px-[10px] sm:px-[30px] sm:py-[14px] xl:px-[80px] xl:py-0 w-full">
        <!-- Box Wrapper -->
        <div class="box-wrapper py-4 flex gap-[14px] sm:gap-0 justify-between">
            <!-- Header Identity -->
            <div class="header-identity hidden sm:block">
                <!-- Brand Logo -->
                <?php if ($title === 'Beranda'): ?>
                    <h1 class="brand text-lg sm:text-2xl 2xl:text-3xl">iSan Shop</h1>
                <?php else: ?>
                    <h2 class="brand text-lg sm:text-2xl 2xl:text-3xl">iSan Shop</h1>
                    <?php endif; ?>
                    <!-- Akhir Brand Logo -->
            </div>
            <!-- Akhir Header Identity -->
            <!-- Search Box -->
            <div class="search-box relative sm:basis-[45%] xl:basis-[30%] 2xl:basis-[35%]">
                <input id="searchProducts" type="text" placeholder="Cari produk favorit anda..." class="search-input w-full h-full py-[7px] sm:py-0 px-8 bg-gray-100 text-gray-600/85 text-sm rounded-full focus:outline-none">
                <img src="/assets/icons/sparkle.png" alt="Sparkle Image" class="absolute top-[50%] left-1 translate-y-[-50%]">
                <img src="/assets/icons/search.png" alt="Search Image" class="absolute top-[50%] right-1 translate-y-[-50%]">
                <!-- Search Box Output -->
                <div class="search-box-output hidden absolute bottom-[-230px] z-[1000] w-full bg-white flex flex-col shadow-md rounded-md overflow-hidden">
                    <a href="/search/text" class="p-[12px] text-sm transition duration-150 hover:bg-gray-100">Result 1</a>
                    <a href="/search/text" class="p-[12px] text-sm transition duration-150 hover:bg-gray-100">Result 2</a>
                    <a href="/search/text" class="p-[12px] text-sm transition duration-150 hover:bg-gray-100">Result 3</a>
                    <a href="/search/text" class="p-[12px] text-sm transition duration-150 hover:bg-gray-100">Result 4</a>
                    <a href="/search/text" class="p-[12px] text-sm transition duration-150 hover:bg-gray-100">Result 5</a>
                </div>
                <!-- Akhir Search Box Output -->
            </div>
            <!-- Akhir Search Box -->
            <div class="header-feature flex items-center gap-[10px] sm:gap-6 text-gray-600/85">
                <!-- Cart -->
                <a href="<?= base_url('/cart') ?>">
                    <div class="cart relative w-[22px] sm:w-auto">
                        <img src="/assets/icons/cart.png" alt="Cart Image" class="w-full h-full">
                        <span class="cart-badge px-1 absolute top-[-6px] sm:top-[-8px] right-[-4px] bg-blue-600 text-[10px] sm:text-xs text-white rounded-full">4</span>
                    </div>
                </a>
                <!-- Akhir Cart -->
                <!-- Login Button -->
                <div class="login flex items-center 2xl:justify-center gap-1.5">
                    <div>
                        <img src="/assets/icons/user.png" class="w-full h-full hidden sm:block" alt="User Image">
                    </div>
                    <a href="<?= base_url('/login') ?>" class="text-sm 2xl:text-lg">Masuk</a>
                </div>
                <!-- Akhir Login Button -->
            </div>
            <!-- Akhir Search Box -->
        </div>
        <!-- Akhir Box Wrapper -->
    </header>
    <!-- Akhir Header -->
    <!-- Content -->
    <!-- Main Content -->
    <main class="sm:pt-[30px] px-[10px] sm:px-[30px] xl:pt-[20px] pb-[160px] xl:pb-[200px] xl:px-[80px]">
        <?= $this->renderSection('content') ?>
    </main>
    <!-- Akhir Main -->
    <!-- Akhir Content -->
    <!-- Footer -->
    <footer class="px-[10px] py-[40px] sm:px-[30px] lg:px-[80px] sm:py-[60px] lg:py-[40px] xl:py-[60px] bg-gray-100">
        <!-- Box Wrapper -->
        <div class="box-wrapper">
            <!-- User Benefits -->
            <div class="user-benefits flex flex-col lg:flex-row sm:items-center lg:justify-center xl:justify-between 2xl:justify-center gap-4.5 xl:gap-0 2xl:gap-8">
                <!-- Box -->
                <div class="box w-3/4 mx-auto sm:mx-0 sm:w-fit p-4 flex gap-4 bg-white rounded-sm shadow-md">
                    <!-- Figure Image Fast Delivery -->
                    <figure class="w-[45px]">
                        <img src="/assets/icons/fast-delivery.png" alt="Fast Delivery Image">
                    </figure>
                    <!-- Akhir Figure Image Fast Delivery -->
                    <!-- Benefits Details -->
                    <div class="details">
                        <h2 class="text-[.95rem]">Pengiriman Cepat & Terlacak</h2>
                        <p class="text-gray-600/85 text-[.8rem]">Barang cepat sampai, hati lebih tenang</p>
                    </div>
                    <!-- Akhir Benefits Details -->
                </div>
                <!-- Akhir Box -->
                <!-- Box -->
                <div class="box w-3/4 mx-auto sm:mx-0 sm:w-fit p-4 flex gap-4 bg-white rounded-sm shadow-md">
                    <!-- Figure Image Discount -->
                    <figure class="w-[45px]">
                        <img src="/assets/icons/voucher.png" alt="Discount Image">
                    </figure>
                    <!-- Akhir Figure Image Discount -->
                    <!-- Benefits Details -->
                    <div class="details">
                        <h2 class="text-[.95rem]">Harga Transparan & Diskon Berkala</h2>
                        <p class="text-gray-600/85 text-[.8rem]">Tidak perlu takut menguras dompet anda!</p>
                    </div>
                    <!-- Akhir Benefits Details -->
                </div>
                <!-- Akhir Box -->
                <!-- Box -->
                <div class="box w-3/4 mx-auto sm:mx-0 sm:w-fit p-4 flex gap-4 bg-white rounded-sm shadow-md">
                    <!-- Figure Image Shirt -->
                    <figure class="w-[45px]">
                        <img src="/assets/icons/shirt.png" alt="Shirt Image">
                    </figure>
                    <!-- Akhir Figure Image Shirt -->
                    <!-- Benefits Details -->
                    <div class="details">
                        <h2 class="text-[.95rem]">Produk Terjamin & Berkualitas</h2>
                        <p class="text-gray-600/85 text-[.8rem]">Barang berkualitas cocok untuk semua</p>
                    </div>
                    <!-- Akhir Benefits Details -->
                </div>
                <!-- Akhir Box -->
            </div>
            <!-- Akhir User Benefits -->
        </div>
        <!-- Akhir Box Wrapper -->
        <!-- Footer Details -->
        <div class="footer-details mt-[40px] flex justify-center gap-5 sm:gap-[32px] lg:gap-[80px] xl:gap-[140px] flex-wrap sm:flex-nowrap">
            <!-- About -->
            <div class="about-shop text-gray-600/85">
                <h2 class="2xl:text-xl">Tentang Toko</h2>
                <ul class="text-sm mt-1 2xl:text-lg">
                    <li class="mb-0.5">Visi & Misi</li>
                    <li class="mb-0.5">Kebijakan & Privasi</li>
                    <li class="mb-0.5">Sertifikasi</li>
                </ul>
            </div>
            <!-- Akhir About -->
            <!-- Order -->
            <div class="order-purchases text-gray-600/85">
                <h2 class="2xl:text-xl">Pesanan & Pembelian</h2>
                <ul class="text-sm mt-1 2xl:text-lg">
                    <li class="mb-0.5">Cek Status Pesanan</li>
                    <li class="mb-0.5">Pengembalian Barang</li>
                    <li class="mb-0.5">Kerusakan Barang</li>
                </ul>
            </div>
            <!-- Akhir Order -->
            <!-- Kategori -->
            <div class="category text-gray-600/85">
                <h2 class="2xl:text-xl">Kategori Barang</h2>
                <ul class="text-sm mt-1 2xl:text-lg">
                    <li class="mb-0.5">Kategori 1</li>
                    <li class="mb-0.5">Kategori 2</li>
                    <li class="mb-0.5">Kategori 3</li>
                    <li class="mb-0.5">Kategori 4</li>
                    <li class="mb-0.5">Kategori 5</li>
                    <li class="mb-0.5">Kategori 6</li>
                    <li class="mb-0.5">Kategori 7</li>
                    <li class="mb-0.5">Kategori 8</li>
                </ul>
            </div>
            <!-- Akhir Kategori -->
            <!-- Dukungan dan Layanan -->
            <div class="category text-gray-600/85">
                <h2 class="2xl:text-xl">Dukungan & Layanan</h2>
                <ul class="text-sm mt-1 2xl:text-lg">
                    <li class="mb-0.5">Cara Pemesanan</li>
                    <li class="mb-0.5">Metode Pembayaran</li>
                    <li class="mb-0.5">Pengiriman</li>
                    <li class="mb-0.5">FAQ</li>
                    <li class="mb-0.5">Kontak</li>
                </ul>
            </div>
            <!-- Akhir Dukungan dan Layanan -->
        </div>
        <!-- Akhir Footer Details -->
        <!-- Media Social -->
        <div class="media-social mt-[40px]">
            <h2 class="text-center 2xl:text-lg">Dapatkan informasi lebih banyak melalui sosial media kami:</h2>
            <!-- Media Social Lists -->
            <ul class="flex mt-4 xl:mt-2 2xl:mt-3.5 justify-center gap-4">
                <li>
                    <figure>
                        <img src="/assets/icons/instagram.png" alt="Instagram Image">
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="/assets/icons/facebook.png" alt="Facebook Image">
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="/assets/icons/tiktok.png" alt="TikTok Image">
                    </figure>
                </li>
            </ul>
            <!-- Akhir Media Social Lists -->
        </div>
        <!-- Akhir Media Social -->
        <!-- More Information -->
        <div class="more-information mt-[60px] flex flex-col sm:flex-row sm:justify-between text-xs sm:text-sm text-gray-600/85">
            <span class="copyright text-center sm:text-left">&copy; Copyright iSan Shop. All Rights Reserved.</span>
            <span class="mt-2 sm:mt-0 text-center sm:text-left">Lokasi: Jln. Merpati, Blok M, Jakarta.</span>
        </div>
        <!-- Akhir More Information -->
    </footer>
    <!-- Akhir Footer -->
</body>

</html>