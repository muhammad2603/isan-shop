<?= $this->extend('/layouts/default') ?>

<?= $this->section('content') ?>
<nav class="breadcrumb xl:text-sm flex gap-2">
    <a href="#" class="text-gray-950/60 hover:underline hover:text-blue-600">Beranda</a>
    <span>></span>
    <a href="#" class="text-gray-950/60 hover:underline hover:text-blue-600">Category</a>
    <span>></span>
    <a href="#" class="text-gray-950/60 hover:underline hover:text-blue-600">Smartphone</a>
    <span>></span>
    <span class="font-semibold text-blue-600">iPhone 16 Pro Max</span>
</nav>
<section class="flex mt-5 gap-8">
    <article class="product basis-2/4 shrink-0">
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
    </article>
    <article>
        <div class="tags-product flex gap-2.5 text-xs">
            <span class="py-1.5 px-3 bg-gray-100 font-semibold text-gray-950/60 rounded-full">Smartphone</span>
            <span class="py-1.5 px-3 bg-blue-100 font-semibold text-blue-600 rounded-full">Stok Tersedia</span>
            <span class="py-1.5 px-3 bg-pink-100 font-semibold text-pink-600 rounded-full">Stok Terbatas</span>
        </div>
        <div class="abouts-product">
            <h1 class="product-name text-3xl mt-7 mb-5">iPhone 16 Pro Max</h1>
            <div class="rating-star my-1.5 flex gap-2">
                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                <img src="/assets/icons/star.png" alt="Star Image" class="w-[16px] h-fit">
                <img src="/assets/icons/star-nofill.png" alt="Star with No Fill Image" class="w-[16px] h-fit">
                <span class="text-sm text-gray-500/95">(30k Ulasan)</span>
            </div>
        </div>
    </article>
</section>
<?= $this->endSection() ?>