<x-app-layout>
  <div class="flex justify-between items-center mb-8">
    <div class="flex gap-4 items-center">
      <div class="bg-blue-500 size-16 rounded-lg flex justify-center items-center">
        <i class="fa-solid fa-book-open text-white text-4xl"></i>
      </div>
      <div>
        <h1 class="font-bold text-xl">Pusat Edukasi</h1>
        <p>Artikel, video, dan materi edukasi tentang buta warna.</p>
      </div>
    </div>
  </div>

  <div class="card bg-base-100 w-full mb-4">
    <div class="card-body">
      <div class="flex justify-between gap-4">
        <input type="text" placeholder="Cari Artikel, Video, atau Sumber Daya" class="input" />
        <div class="flex gap-4">
          <button class="btn btn-info btn-soft">Semua</button>
          <button class="btn">Medis</button>
          <button class="btn">Praktikal</button>
          <button class="btn">Edukasi</button>
          <button class="btn">Teknologi</button>
        </div>
      </div>
    </div>
  </div>

  <div class="card bg-base-100 w-full mb-4">
    <div class="card-body">
      <h2 class="card-title">Artikel Unggulan</h2>
      <div class="grid grid-cols-2 gap-8">
        <div class="max-w-4/5">
          <img src="{{ url('/pusat-edukasi-assets/banner-1.png') }}" alt="banner 1" class="mb-2">
          <h3 class="font-semibold text-lg mb-4">Memahami Buta Warna: Jenis, Penyebab, dan Dampaknya</h3>
          <p>Panduan lengkap tentang berbagai jenis buta warna, penyebabnya, dan bagaimana kondisi ini mempengaruhi kehidupan sehari-hari.</p>
        </div>
        <div class="max-w-4/5">
          <img src="{{ url('/pusat-edukasi-assets/banner-2.png') }}" alt="banner 2" class="mb-2">
          <h3 class="font-semibold text-lg mb-4">Mendukung Anak dengan Buta Warna: Panduan untuk Orang Tua</h3>
          <p>Cara orang tua dapat mendukung perkembangan anak dengan buta warna agar tetap percaya diri.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="tabs tabs-border">
    <input type="radio" name="my_tabs_2" class="tab" aria-label="Artikel" checked="checked" />
    <div class="tab-content border-base-300 bg-base-100 p-10">
      <div class="grid grid-cols-5 gap-4">
        <div class="card border col-span-3">
          <div class="card-body">
            <div class="mb-4">
              <div class="flex gap-4">
                <img src="{{ url('/pusat-edukasi-assets/artikel-1.png') }}" alt="Artikel" class="mb-2">
                <div>
                  <a class="font-semibold text-lg link">Memahami Buta Warna: Jenis, Penyebab, dan Dampaknya</a>
                  <p>Panduan lengkap tentang berbagai jenis buta warna, penyebabnya, dan bagaimana kondisi ini mempengaruhi kehidupan sehari-hari.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card border col-span-2">
          <div class="card-body">
            <h2 class="card-title">Tag Populer</h2>
            <div class="mb-2">
              <a href="#" class="badge badge-neutral badge-outline text-xs mb-2">Buta Warna</a>
              <a href="#" class="badge badge-neutral badge-outline text-xs mb-2">Kesehatan Mata</a>
              <a href="#" class="badge badge-neutral badge-outline text-xs mb-2">Anak Kecil</a>
              <a href="#" class="badge badge-neutral badge-outline text-xs mb-2">Teknologi</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <input type="radio" name="my_tabs_2" class="tab" aria-label="Video" />
    <div class="tab-content border-base-300 bg-base-100 p-10">⚠️</div>

    <input type="radio" name="my_tabs_2" class="tab" aria-label="Sumber Daya" />
    <div class="tab-content border-base-300 bg-base-100 p-10">⚠️</div>
  </div>
</x-app-layout>