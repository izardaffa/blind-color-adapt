<x-app-layout>
  <div class="hero mb-12">
    <div class="hero-content text-center">
      <div class="max-w-4xl">
        {{-- <h1 class="text-5xl font-bold text-primary">ColorAdapt+</h1> --}}
        <img src="/logo.png" alt="logo" class="h-24 m-auto">
        <p class="py-6">
          Platform Inkubasi berbasis AI untuk Simulasi, Koreksi, dan Asistensi Buta Warna Parsial di Indonesia.
        </p>
      </div>
    </div>
  </div>

  <div class="mb-12">
    <div class="grid grid-cols-4 gap-12 justify-between">
      <div class="card bg-base-100 shadow-sm">
        <div class="card-body">
          <div class="grid grid-cols-6 gap-4">
            <div class="col-span-4">
              <h2 class="font-normal text-lg">Total Pengguna</h2>
              <p class="font-bold text-4xl text-blue-500">12,888</p>
            </div>
            <div class="col-span-2">
              <div class="size-16 bg-blue-50 rounded-full flex justify-center items-center">
                <i class="fa-solid fa-user text-blue-500 text-4xl"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-sm">
        <div class="card-body">
          <div class="grid grid-cols-6 gap-4">
            <div class="col-span-4">
              <h2 class="font-normal text-lg">Tes Diagnosis</h2>
              <p class="font-bold text-4xl text-green-500">8,450</p>
            </div>
            <div class="col-span-2">
              <div class="size-16 bg-green-50 rounded-full flex justify-center items-center">
                <i class="fa-solid fa-stethoscope text-green-500 text-4xl"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-sm">
        <div class="card-body">
          <div class="grid grid-cols-6 gap-4">
            <div class="col-span-4">
              <h2 class="font-normal text-lg">Dokter Terdaftar</h2>
              <p class="font-bold text-4xl text-purple-500">200</p>
            </div>
            <div class="col-span-2">
              <div class="size-16 bg-purple-50 rounded-full flex justify-center items-center">
                <i class="fa-solid fa-user-doctor text-purple-500 text-4xl"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-sm">
        <div class="card-body">
          <div class="grid grid-cols-6 gap-4">
            <div class="col-span-4">
              <h2 class="font-normal text-lg">Artikel Edukasi</h2>
              <p class="font-bold text-4xl text-red-500">150</p>
            </div>
            <div class="col-span-2">
              <div class="size-16 bg-red-50 rounded-full flex justify-center items-center">
                <i class="fa-solid fa-book-open text-red-500 text-4xl"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-12">
    <div class="grid grid-cols-3 gap-12 justify-between">
      <div class="card bg-blue-50 shadow-sm">
        <div class="card-body">
          <div class="flex justify-between">
            <div class="bg-blue-500 size-12 rounded-lg flex justify-center items-center">
              <i class="fa-solid fa-palette text-white text-3xl"></i>
            </div>
            <div>
              <span class="badge badge-ghost font-semibold text-sm">Active</span>
              <span class="inline-block size-2.5 rounded-full bg-green-500"></span>
            </div>
          </div>
          <h2 class="font-semibold text-xl text-blue-500">UI Recolor Assistant</h2>
          <p>Plugin dan ekstensi untuk menyesuaikan warna antarmuka web agar lebih accesible.</p>
          <a href="{{ route('ui-recolor-assistant') }}" class="btn btn-wide bg-primary">Kunjungi</a>
        </div>
      </div>
      <div class="card bg-green-50 shadow-sm">
        <div class="card-body">
          <div class="flex justify-between">
            <div class="bg-green-500 size-12 rounded-lg flex justify-center items-center">
              <i class="fa-solid fa-robot text-white text-3xl"></i>
            </div>
            <div>
              <span class="badge badge-ghost font-semibold text-sm">Active</span>
              <span class="inline-block size-2.5 rounded-full bg-green-500"></span>
            </div>
          </div>
          <h2 class="font-semibold text-xl text-green-500">AI Assistant "Warna Bot"</h2>
          <p>Chat bot berbasis LLM untuk menjawab pertanyaan medis, psikologis, dan praktikal untuk buta warna.</p>
          <a href="{{ route('ai-assistant-warnabot.index') }}" class="btn btn-wide bg-primary">Kunjungi</a>
        </div>
      </div>
      <div class="card bg-purple-50 shadow-sm">
        <div class="card-body">
          <div class="flex justify-between">
            <div class="bg-purple-500 size-12 rounded-lg flex justify-center items-center">
              <i class="fa-solid fa-eye text-white text-3xl"></i>
            </div>
            <div>
              <span class="badge badge-ghost font-semibold text-sm">Active</span>
              <span class="inline-block size-2.5 rounded-full bg-green-500"></span>
            </div>
          </div>
          <h2 class="font-semibold text-xl text-purple-500">Visual Simulator</h2>
          <p>Simulasi AR  yang memperlihatkan dunia dari sudut pandang berbagai jenis buta warna.</p>
          <a href="{{ route('visual-simulator') }}" class="btn btn-wide bg-primary">Kunjungi</a>
        </div>
      </div>
      <div class="card bg-red-50 shadow-sm">
        <div class="card-body">
          <div class="flex justify-between">
            <div class="bg-red-500 size-12 rounded-lg flex justify-center items-center">
              <i class="fa-solid fa-stethoscope text-white text-3xl"></i>
            </div>
            <div>
              <span class="badge badge-ghost font-semibold text-sm">Active</span>
              <span class="inline-block size-2.5 rounded-full bg-green-500"></span>
            </div>
          </div>
          <h2 class="font-semibold text-xl text-red-500">Tes Diagnosis Adaptif</h2>
          <p>Tes ishihara untuk mendeteksi jenis buta warna dengan pendekatan personal.</p>
          <a href="{{ route('tes-diagnosis-adaptif.index') }}" class="btn btn-wide bg-primary">Kunjungi</a>
        </div>
      </div>
      <div class="card bg-orange-50 shadow-sm">
        <div class="card-body">
          <div class="flex justify-between">
            <div class="bg-orange-500 size-12 rounded-lg flex justify-center items-center">
              <i class="fa-solid fa-user-doctor text-white text-3xl"></i>
            </div>
            <div>
              <span class="badge badge-ghost font-semibold text-sm">Active</span>
              <span class="inline-block size-2.5 rounded-full bg-green-500"></span>
            </div>
          </div>
          <h2 class="font-semibold text-xl text-orange-500">Direktori Dokter & Rujukan</h2>
          <p>Database dokter spesialis mata dan layanan kesehatan.</p>
          <a href="{{ route('direktori-dokter-rujukan') }}" class="btn btn-wide bg-primary">Kunjungi</a>
        </div>
      </div>
      <div class="card bg-blue-50 shadow-sm">
        <div class="card-body">
          <div class="flex justify-between">
            <div class="bg-blue-500 size-12 rounded-lg flex justify-center items-center">
              <i class="fa-solid fa-book-open text-white text-3xl"></i>
            </div>
            <div>
              <span class="badge badge-ghost font-semibold text-sm">Active</span>
              <span class="inline-block size-2.5 rounded-full bg-green-500"></span>
            </div>
          </div>
          <h2 class="font-semibold text-xl text-blue-500">Pusat Edukasi</h2>
          <p>Artikel, Video, dan alat Edukasi.</p>
          <a href="{{ route('pusat-edukasi') }}" class="btn btn-wide bg-primary">Kunjungi</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card bg-base-100 w-full shadow-sm">
    <div class="card-body">
      <h2 class="card-title"><i class="fa-solid fa-bolt"></i> Aksi Cepat</h2>
      
      <div class="grid grid-cols-3 gap-12 justify-between">
        <div class="card bg-base-100 border">
          <div class="card-body">
            <div class="flex">
              <div class="size-12 bg-red-50 rounded-full flex justify-center items-center me-4">
                <i class="fa-solid fa-stethoscope text-red-500 text-xl"></i>
              </div>
              <div>
                <h2 class="card-title">Tes Buta Warna</h2>
                <p>Mulai tes diagnosis.</p>
              </div>
            </div>
            <a href="{{ route('tes-diagnosis-adaptif.index') }}" class="stretched-link" aria-label="Tes Buta Warna"></a>
          </div>
        </div>
        <div class="card bg-base-100 border">
          <div class="card-body">
            <div class="flex">
              <div class="size-12 bg-green-50 rounded-full flex justify-center items-center me-4">
                <i class="fa-solid fa-robot text-green-500 text-xl"></i>
              </div>
              <div>
                <h2 class="card-title">Tanya Warna Bot</h2>
                <p>Tanyakan sesuatu!</p>
              </div>
            </div>
            <a href="{{ route('ai-assistant-warnabot.index') }}" class="stretched-link" aria-label="Tanya Warna Bot"></a>
          </div>
        </div>
        <div class="card bg-base-100 border">
          <div class="card-body">
            <div class="flex">
              <div class="size-12 bg-orange-50 rounded-full flex justify-center items-center me-4">
                <i class="fa-solid fa-user-doctor text-orange-500 text-xl"></i>
              </div>
              <div>
                <h2 class="card-title">Cari Dokter</h2>
                <p>Cari profesional mata.</p>
              </div>
            </div>
            <a href="{{ route('direktori-dokter-rujukan') }}" class="stretched-link" aria-label="Cari DOkter"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>