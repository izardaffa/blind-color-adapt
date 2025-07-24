<x-app-layout>
  <div class="flex justify-between items-center mb-8">
    <div class="flex gap-4 items-center">
      <div class="bg-orange-500 size-16 rounded-lg flex justify-center items-center">
        <i class="fa-solid fa-user-doctor text-white text-4xl"></i>
      </div>
      <div>
        <h1 class="font-bold text-xl">Direktori Dokter & Rujukan</h1>
        <p>Temukan dokter spesialis mata dan layanan kesehatan terpercaya.</p>
      </div>
    </div>
  </div>

  <div class="card bg-base-100 w-full mb-4">
    <div class="card-body">
      <div class="grid grid-cols-4 gap-4">
        <input type="text" placeholder="Cari dokter atau spesialis mata" class="input" />
        <select class="select">
          <option disabled selected>Semua Spesialis</option>
          <option>Tes Buta Warna</option>
          <option>USG Mata</option>
          <option>Pemeriksaan Mata</option>
        </select>
        <select class="select">
          <option disabled selected>Semua Lokasi</option>
          <option>Jakarta</option>
          <option>Jakarta Selatan</option>
          <option>Sumatera Urara</option>
        </select>
        <button class="btn w-full bg-white"><i class="fa-solid fa-filter"></i> Filter Lainnya</button>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-8 gap-4">
    <div class="col-span-3">
      <div class="flex justify-between mb-4">
        <h2 class="font-semibold text-xl">Dokter Tersedia (3)</h2>
        <select class="select">
          <option disabled selected>Urutkan Berdasarkan</option>
          <option>A-Z</option>
          <option>Z-A</option>
        </select>
      </div>

      <div class="card card-border bg-base-100 w-full mb-4">
        <div class="card-body grow-0">
          <div class="flex gap-4 w-full">
            <div class="size-16">
              <img src="{{ url('/direktori-dokter-rujukan-assets/dokter-3.png') }}" alt="Dokter 1">
            </div>
            <div class="w-full">
              <div class="flex justify-between w-full">
                <h2 class="card-title">dr. Maya Ekakristiani Suwandono, Sp.M</h2>
                <span><i class="fa-solid fa-star text-yellow-500"></i> 4.8 <span class="text-slate-500">(124)</span></span>
              </div>
              <div class="flex justify-between w-full mb-4">
                <span class="text-slate-500">Dokter Mata</span>
                <span class="text-slate-500">Jakarta Selatan</span>
              </div>
              <div class="flex justify-between w-full">
                <div>
                  <div class="badge badge-neutral badge-outline text-xs">Tes Buta Warna</div>
                  <div class="badge badge-neutral badge-outline text-xs">USG Mata</div>
                  <div class="badge badge-neutral badge-outline text-xs">+12 Lainnya</div>
                </div>
                <div>
                  <p class="text-slate-500">Biaya Konsultasi</p>
                  <p class="text-blue-500">Rp.646.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-border bg-base-100 w-full mb-4">
        <div class="card-body grow-0">
          <div class="flex gap-4 w-full">
            <div class="size-16">
              <img src="{{ url('/direktori-dokter-rujukan-assets/dokter-1.png') }}" alt="Dokter 1">
            </div>
            <div class="w-full">
              <div class="flex justify-between w-full">
                <h2 class="card-title">dr. Soeharnila.SpM</h2>
                <span><i class="fa-solid fa-star text-yellow-500"></i> 4.8 <span class="text-slate-500">(124)</span></span>
              </div>
              <div class="flex justify-between w-full mb-4">
                <span class="text-slate-500">Dokter Mata</span>
                <span class="text-slate-500">Jakarta</span>
              </div>
              <div class="flex justify-between w-full">
                <div>
                  <div class="badge badge-neutral badge-outline text-xs">Tes Buta Warna</div>
                  <div class="badge badge-neutral badge-outline text-xs">USG Mata</div>
                  <div class="badge badge-neutral badge-outline text-xs">+12 Lainnya</div>
                </div>
                <div>
                  <p class="text-slate-500">Biaya Konsultasi</p>
                  <p class="text-blue-500">Rp.646.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-border bg-base-100 w-full mb-4">
        <div class="card-body grow-0">
          <div class="flex gap-4 w-full">
            <div class="size-16">
              <img src="{{ url('/direktori-dokter-rujukan-assets/dokter-2.png') }}" alt="Dokter 1">
            </div>
            <div class="w-full">
              <div class="flex justify-between w-full">
                <h2 class="card-title">dr. Sujan Ali Fing, Sp.M, MkM, MSOphth</h2>
                <span><i class="fa-solid fa-star text-yellow-500"></i> 4.8 <span class="text-slate-500">(124)</span></span>
              </div>
              <div class="flex justify-between w-full mb-4">
                <span class="text-slate-500">Dokter Mata</span>
                <span class="text-slate-500">Sumatera Utara</span>
              </div>
              <div class="flex justify-between w-full">
                <div>
                  <div class="badge badge-neutral badge-outline text-xs">Tes Buta Warna</div>
                  <div class="badge badge-neutral badge-outline text-xs">USG Mata</div>
                  <div class="badge badge-neutral badge-outline text-xs">+12 Lainnya</div>
                </div>
                <div>
                  <p class="text-slate-500">Biaya Konsultasi</p>
                  <p class="text-blue-500">Rp.150.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-span-5">
      <div class="card card-border border-sky-500 bg-base-100 w-full mb-4">
        <div class="card-body grow-0">
          <div class="flex gap-4 w-full">
            <div class="size-16">
              <img src="{{ url('/direktori-dokter-rujukan-assets/dokter-3.png') }}" alt="Dokter 1">
            </div>
            <div class="w-full">
              <div class="flex justify-between w-full">
                <h2 class="card-title">dr. Maya Ekakristiani Suwandono, Sp.M</h2>
                <span><i class="fa-solid fa-star text-yellow-500"></i> 4.8 <span class="text-slate-500">(124)</span></span>
              </div>
              <div class="mb-4">
                <p class="text-slate-500">Dokter Mata</p>
                <p class="text-slate-500">KMN EyeCare Jakarta Selatan, Cilandak, Jakarta</p>
              </div>
              <div class="flex justify-between w-full">
                <div class="max-w-3/4 text-justify">
                  <p>dr. Maya Ekakristiani Suwandono, Sp.M menyelesaikan studi spesialis Mata di Universitas Indonesia. Beliau dapat memberikan layanan medis meliputi Konsultasi perihal kesehatan mata, dan secara spesifik menangani permasalahan terkait dengan Katarak, Lasik, dan Glukoma. Beliau mengambil pelatihan studi Glukoma di National University Hospital, Singapura.</p>
                </div>
                <div>
                  <p class="text-slate-500">Rabu - Kamis, <br> 09:00 - 14:30</p>
                  <p class="text-blue-500">Rp.646.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-border border-sky-500 bg-base-100 w-full mb-4">
        <div class="card-body">
          <h2 class="card-title">Layanan</h2>
          <div class="mb-2">
            <div class="badge badge-neutral badge-outline text-xs mb-2">Tes Buta Warna</div>
            <div class="badge badge-neutral badge-outline text-xs mb-2">Pemeriksaan Mata</div>
            <div class="badge badge-neutral badge-outline text-xs mb-2">Konsultasi Retina</div>
            <div class="badge badge-neutral badge-outline text-xs mb-2">Operasi Katarak</div>
            <div class="badge badge-neutral badge-outline text-xs mb-2">Foto Fundus Mata</div>
            <div class="badge badge-neutral badge-outline text-xs mb-2">Implan Lensa Mata</div>
            <div class="badge badge-neutral badge-outline text-xs mb-2">Oftalmoskopi</div>
            <div class="badge badge-neutral badge-outline text-xs mb-2">Operasi Vitroretina</div>
            <div class="badge badge-neutral badge-outline text-xs mb-2">+12 Lainnya</div>
          </div>
          <div class="mb-2">
            <div class="btn btn-info mb-2"><i class="fa-solid fa-book-bookmark"></i> Buat Janji</div>
            <div class="btn btn-soft mb-2"><i class="fa-solid fa-video"></i> Telemedisin</div>
            <div class="btn btn-soft mb-2"><i class="fa-solid fa-comments"></i> Chat</div>
          </div>
        </div>
      </div>
      
      <div class="card card-border border-sky-500 bg-base-100 w-full mb-4">
        <div class="card-body">
          <div class="grid grid-cols-2">
            <div>
              <h2 class="card-title">Pengalaman Praktik</h2>
              <p>Dokter Mata - KMN EyeCare Jakarta Selatan</p>
              <p>Dokter Mata - KMN EyeCare Kemayoran</p>
            </div>
            
            <div>
              <h2 class="card-title">Riwayat Pendidikan</h2>
              <p>Sp.M - Spesialis Mata - Universitas Indonesia</p>
              <p>Clinical Glaucoma Fellowship, National University Hospital, Singapore</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>