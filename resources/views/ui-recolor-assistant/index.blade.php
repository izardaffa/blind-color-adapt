<x-app-layout>
  <div class="flex justify-between items-center mb-8">
    <div class="flex gap-4 items-center">
      <div class="bg-blue-500 size-16 rounded-lg flex justify-center items-center">
        <i class="fa-solid fa-palette text-white text-4xl"></i>
      </div>
      <div>
        <h1 class="font-bold text-xl">UI Recolor Assistant</h1>
        <p>Sesuaikan warna antarmuka untuk aksesibilitas yang baik.</p>
      </div>
    </div>
    <div>
      <a class="btn btn-outline me-2">Reset</a>
      <a class="btn btn-outline me-2"><i class="fa-solid fa-share-nodes"></i> Bagikan</a>
      <a href="{{ url('/extensions.zip') }}" class="btn btn-info text-white"><i class="fa-solid fa-download"></i> Unduh Plugin</a>
    </div>
  </div>

  <div class="grid grid-cols-8 gap-4">
    <div class="col-span-2">
      <div class="card border mb-4">
        <div class="card-body">
          <h2 class="card-title"><i class="fa-solid fa-eye"></i> Jenis Buta Warna</h2>
          <div class="cursor-pointer hover:bg-slate-200 card border mb-2">
            <div class="card-body p-4">
              <div class="flex items-center gap-4">
                <div class="size-8 bg-slate-500 rounded-full"></div>
                <div>
                  <h2 class="font-semibold">Achromatopsia</h2>
                  <p>Buta warna total (monokrom)</p>
                </div>
              </div>
            </div>
          </div>

          <div class="cursor-pointer hover:bg-slate-200 card border mb-2">
            <div class="card-body p-4">
              <div class="flex items-center gap-4">
                <div class="size-8 bg-red-500 rounded-full"></div>
                <div>
                  <h2 class="font-semibold">Protanopia</h2>
                  <p>Kesulitan melihat warna merah</p>
                </div>
              </div>
            </div>
          </div>

          <div class="cursor-pointer hover:bg-slate-200 card border mb-2">
            <div class="card-body p-4">
              <div class="flex items-center gap-4">
                <div class="size-8 bg-green-500 rounded-full"></div>
                <div>
                  <h2 class="font-semibold">Deuteranopia</h2>
                  <p>Kesulitan melihat warna hijau</p>
                </div>
              </div>
            </div>
          </div>

          <div class="cursor-pointer hover:bg-slate-200 card border mb-2">
            <div class="card-body p-4">
              <div class="flex items-center gap-4">
                <div class="size-8 bg-blue-500 rounded-full"></div>
                <div>
                  <h2 class="font-semibold">Tritanopia</h2>
                  <p>Kesulitan melihat warna biru</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card border">
        <div class="card-body">
          <h2 class="card-title"><i class="fa-solid fa-palette"></i> Penyesuaian Warna</h2>
          <form action="#">
            <div class="flex justify-between">
              <p class="font-semibold">Aktifkan Filter</p>
              <input type="checkbox" checked="checked" class="toggle toggle-info" />
            </div>
            <fieldset class="fieldset mb-2">
              <legend class="fieldset-legend">Kecerahan:</legend>
              <input type="range" min="0" max="100" value="50" class="range range-info" />
            </fieldset>
            <fieldset class="fieldset mb-2">
              <legend class="fieldset-legend">Kontras:</legend>
              <input type="range" min="0" max="100" value="50" class="range range-info" />
            </fieldset>
            <fieldset class="fieldset mb-2">
              <legend class="fieldset-legend">Saturasi:</legend>
              <input type="range" min="0" max="100" value="50" class="range range-info" />
            </fieldset>
          </form>
        </div>
      </div>
    </div>

    <div class="card border col-span-6">
      <div class="card-body grow-0">
        <h2 class="card-title">Preview & Installasi</h2>
        <p>Lihat bagaimana filter akan diterapkan pada berbagai antarmuka.</p>
        
        <div class="tabs tabs-border">
          <input type="radio" name="my_tabs_2" class="tab" aria-label="Preview" checked="checked" />
          <div class="tab-content border-base-300 bg-base-100 p-10">
            <h2 class="font-semibold mb-4">Contoh antarmuka web:</h2>
            {{-- <img src="{{ url('/ui-recolor-assistant-assets/preview-normal.png') }}" alt="preview normal" class="mb-4"> --}}
            {{-- <img src="{{ url('/ui-recolor-assistant-assets/preview-protan.png') }}" alt="preview filter protanopia" class="mb-4"> --}}
            <img src="{{ url('/ui-recolor-assistant-assets/preview-real.png') }}" alt="preview" class="mb-4">
          </div>

          <input type="radio" name="my_tabs_2" class="tab" aria-label="Installasi" />
          <div class="tab-content border-base-300 bg-base-100 p-10">
            <div class="mb-2">
              <h2 class="font-semibold">1. Unduh Ekstensi</h2>
              <p>Unduh ekstensi ColorAdapt+.</p>
              <a href="{{ url('/extensions.zip') }}" class="btn btn-info text-white"><i class="fa-solid fa-download"></i> Unduh Plugin</a>
              <p>Lalu ekstrak file .zip yang sudah terunduh.</p>
            </div>
            
            <div class="mb-2">
              <h2 class="font-semibold">2. Install Ekstensi</h2>
              <p>Buka pengaturan ekstensi <a href="edge://extensions/" target="_blank" class="link">untuk Edge</a> & <a href="chrome://extensions/" target="_blank" class="link">untuk Chrome</a>.</p>
              <img src="{{ url('/ui-recolor-assistant-assets/edge-extensions.png') }}" alt="edge extensions">
              <p>Aktifkan "Developer mode", lalu klik "Load unpacked" dan pilih folder ekstensi yang baru diunduh.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <x-slot:script>
    <script>
      const jenisSimulasi = document.getElementById('jenisSimulasi');
      const panah = document.getElementById('panah');
      const btnBlindcolor = document.querySelectorAll('.btn-blindcolor');
      
      const simulatedImg = document.querySelector('.simulated-img');
      const btnGrayscale = document.querySelector('.bc-grayscale');
      const btnProtan = document.querySelector('.bc-protan');
      const btnDeutan = document.querySelector('.bc-deutan');
      const btnTritan = document.querySelector('.bc-tritan');

      jenisSimulasi.addEventListener('click', () => {
        for (let i = 0; i < btnBlindcolor.length; i++) {
          btnBlindcolor[i].classList.toggle('hidden');
        }
        panah.classList.toggle('rotate-180');
      });

      btnGrayscale.addEventListener('click', () => {
        simulatedImg.src = '{{ url('/visual-simulator-assets/sample-1-grayscale.png') }}';
      });

      btnProtan.addEventListener('click', () => {
        simulatedImg.src = '{{ url('/visual-simulator-assets/sample-1-protan.png') }}';
      });

      btnDeutan.addEventListener('click', () => {
        simulatedImg.src = '{{ url('/visual-simulator-assets/sample-1-deutan.png') }}';
      });

      btnTritan.addEventListener('click', () => {
        simulatedImg.src = '{{ url('/visual-simulator-assets/sample-1-tritan.png') }}';
      });
    </script>
  </x-slot>
</x-app-layout>