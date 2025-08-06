<x-app-layout>
  <section id="top">
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
        <a href="{{ route('tes-diagnosis-adaptif/test') }}" class="btn btn-info btn-wide text-white m-auto">Mulai Tes Diagnosis</a>
      </div>
    </div>
  </section>
</x-app-layout>