<x-app-layout>
  <section id="hasil">
    <div class="flex justify-between items-center mb-8">
      <div class="flex gap-4 items-center">
        <div class="bg-red-500 size-16 rounded-lg flex justify-center items-center">
          <i class="fa-solid fa-stethoscope text-white text-4xl"></i>
        </div>
        <div>
          <h1 class="font-bold text-xl">Hasil Tes Diagnosis</h1>
          <p>Tes selesai dalam 165 detik</p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-8 gap-4">
      <div class="col-span-5 mb-4">
        <div class="card border bg-base-100 w-full p-4 pb-20 mb-4">
          <div class="card-body grow-0">
            <h2 class="card-title">Diagnosis AI</h2>
            
            <div class="text-center">
              <p class="font-semibold text-2xl">Protanopia</p>
              <p class="mb-4">Hasil tes menunjukkan kemungkinan adanya kesulitan membedakan warna merah.</p>
              <p class="border font-semibold text-lg w-fit px-4 py-2 rounded-lg m-auto">Tingkat Keyakinan: 80%</p>
            </div>
          </div>
        </div>

        <div class="card border bg-base-100 w-full p-4">
          <div class="card-body grow-0">
            <h2 class="card-title">Rekomendasi</h2>
            
            <ul class="list-inside list-decimal mb-2">
              <li>Segera konsultasi dengan dokter spesialis mata.</li>
              <li>Gunakan kacamata khusus untuk buta warna.</li>
              <li>Ikuti program edukasi dan adaptasi.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-span-3 mb-4">
        <div class="card border bg-base-100 w-full mb-4">
          <div class="card-body">
            <h2 class="card-title">Statistik Tes</h2>
            
            <div class="flex justify-between w-full">
              <p>Waktu Tes</p>
              <p class="text-end">9 detik</p>
            </div>
            <div class="flex justify-between w-full">
              <p>Pertanyaan</p>
              <p class="text-end">0</p>
            </div>
            <div class="flex justify-between w-full">
              <p>Jawaban Benar</p>
              <p class="text-end">0</p>
            </div>
            <div class="flex justify-between w-full">
              <p>Akurasi</p>
              <p class="text-end">0%</p>
            </div>
          </div>
        </div>

        <div class="card border bg-base-100 w-full">
          <div class="card-body">
            <h2 class="card-title">Aksi</h2>
            
            <button class="btn btn-wide btn-info text-white m-auto mb-4"><i class="fa-solid fa-download"></i> Unduh Hasil</button>
            <button class="btn btn-wide btn-outline m-auto mb-4"><i class="fa-solid fa-file"></i> Bagikan Hasil</button>
            <button class="btn btn-wide btn-outline m-auto mb-4"><i class="fa-solid fa-rotate-right"></i> Ulangi Tes</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>