<x-app-layout>
  <section id="top" class="min-h-screen">
    <div class="flex justify-between items-center mb-8">
      <div class="flex gap-4 items-center">
        <div class="bg-red-500 size-16 rounded-lg flex justify-center items-center">
          <i class="fa-solid fa-stethoscope text-white text-4xl"></i>
        </div>
        <div>
          <h1 class="font-bold text-xl">Tes Diagnosis Adaptif</h1>
          <p>Tes Ishihara untuk deteksi buta warna.</p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-8 gap-4">
      <div class="col-span-3 mb-4">
        <div class="card border bg-base-100 w-full h-full">
          <div class="card-body">
            <h2 class="card-title"><i class="fa-solid fa-brain"></i> Tentang Tes Ini</h2>
            <p>Tes diagnosis AI ini untuk menganalisis kemampuan penglihatan warna Anda berdasarkan tes Ishihara yang telah dimodifikasi.</p>
            
            <p><i class="fa-solid fa-circle-check text-green-500"></i> Tes adaptif yang disesuaikan</p>
            <p><i class="fa-solid fa-circle-check text-green-500"></i> Hasil instan dengan rekomendasi</p>
            <p><i class="fa-solid fa-circle-check text-green-500"></i> Data aman dan terlindungi</p>
          </div>
        </div>
      </div>

      <div class="col-span-5 mb-4">
        <div class="card border bg-base-100 w-full h-full">
          <div class="card-body">
            <h2 class="card-title"><i class="fa-solid fa-file"></i> Instruksi Tes</h2>
            
            <ul class="list-inside list-decimal mb-2">
              <li>Pastikan layar dalam kondisi terang dan bersih.</li>
              <li>Duduk pada jarak normal dari layar (40-50 cm).</li>
              <li>Jawab setiap pertanyaan dengan jawaban pertama yang terlintas.</li>
              <li>Jangan khawatir jika tidak bisa melihat gambar tertentu.</li>
            </ul>

            <div class="border rounded-lg p-4">
              <p class="font-semibold">Penting:</p>
              <p>Tes ini hanya untuk skrining awal. Hasil yang akurat memerlukan pemeriksaan oleh dokter spesialis mata.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card border bg-base-100 w-full mb-4">
      <div class="card-body">
        <div class="grid grid-cols-3 gap-4 text-center mb-4">
          <p>Estimasi waktu: 3-5 menit</p>
          <p>3 Pertanyaan</p>
          <p>Sertifikat Hasil</p>
        </div>
        <a href="#soal" class="btn btn-info btn-wide text-white m-auto">Mulai Tes Diagnosis</a>
      </div>
    </div>
  </section>

  <section id="soal" class="min-h-screen py-24">
    <div class="flex justify-between items-center mb-8">
      <div class="flex gap-4 items-center">
        <div class="bg-red-500 size-16 rounded-lg flex justify-center items-center">
          <i class="fa-solid fa-stethoscope text-white text-4xl"></i>
        </div>
        <div>
          <h1 class="font-bold text-xl">Tes Diagnosis Adaptif</h1>
          <p>Pertanyaan 1 dari 3</p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-8 gap-4">
      <div class="col-span-3 mb-4">
        <div class="card border bg-base-100 w-full h-full">
          <div class="card-body">
            <h2 class="card-title">Gambar Tes</h2>
            
            <div class="w-full">
              <img src="{{ url('/tes-diagnosis-adaptif-assets/soal-1.png') }}" alt="soal 1" class="object-cover m-auto">
            </div>
          </div>
        </div>
      </div>

      <div class="col-span-5 mb-4">
        <div class="card border bg-base-100 w-full h-full">
          <div class="card-body grow-0">
            <h2 class="card-title">Pertanyaan</h2>
            
            <p>Angka berapa yang Anda lihat di dalam lingkaran?</p>
            <div class="mb-2">
              <input type="radio" name="soal-1" id="jawaban-1" class="radio"> <label for="jawaban-1">3</label>
            </div>
            <div class="mb-2">
              <input type="radio" name="soal-1" id="jawaban-2" class="radio"> <label for="jawaban-2">12</label>
            </div>
            <div class="mb-2">
              <input type="radio" name="soal-1" id="jawaban-3" class="radio"> <label for="jawaban-3">23</label>
            </div>
            <div class="mb-2">
              <input type="radio" name="soal-1" id="jawaban-4" class="radio"> <label for="jawaban-4">2</label>
            </div>

            <a href="#hasil" class="btn btn-info btn-wide text-white">Lanjutkan</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="hasil" class="min-h-screen py-24">
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