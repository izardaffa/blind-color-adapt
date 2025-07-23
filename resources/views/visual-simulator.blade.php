<x-app-layout>
  <div class="flex justify-between items-center mb-8">
    <div class="flex gap-4 items-center">
      <div class="bg-purple-500 size-16 rounded-lg flex justify-center items-center">
        <i class="fa-solid fa-eye text-white text-4xl"></i>
      </div>
      <div>
        <h1 class="font-bold text-xl">Visual Simulator</h1>
        <p>Simulasi penglihatan berbagai jenis buta warna.</p>
      </div>
    </div>
    <div>
      {{-- <a class="btn btn-outline me-2">Mode Perbandingan</a> --}}
      <a class="btn btn-outline me-2">Mode Tunggal</a>
      <a class="btn btn-outline me-2"><i class="fa-solid fa-share-nodes"></i> Bagikan</a>
      <a class="btn btn-info text-white"><i class="fa-solid fa-download"></i> Unduh Hasil</a>
    </div>
  </div>

  <div class="bg-base-100 w-full border rounded-lg mb-8 hidden">
    <div class="p-6">
      <h2 class="card-title mb-4">Simulator Visual</h2>

      <div class="flex justify-between mb-4">
        <span class="badge badge-ghost">Normal Vision</span>
        <span class="badge badge-ghost">Simulated</span>
      </div>
      
      <figure class="diff aspect-21/9 rounded-lg relative" tabindex="0">
        <div class="diff-item-1" role="img" tabindex="0">
          <img alt="Lampu lalu lintas" src="/visual-simulator-assets/sample-1-normal.png" />
        </div>
        <div class="diff-item-2" role="img">
          <img alt="Lampu lalu lintas" src="/visual-simulator-assets/sample-1-grayscale.png" />
        </div>
        <div class="diff-resizer"></div>

        <div class="absolute bottom-4 right-4 z-10 rounded-lg bg-white min-w-80 p-6">
          <div class="flex justify-between mb-4">
            <span class="font-semibold"><i class="fa-solid fa-eye"></i> Jenis Simulasi</span>
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </div>

          <div class="card border mb-2">
            <div class="card-body p-4">
              <div class="flex items-center gap-4">
                <div class="size-8 bg-black rounded-full"></div>
                <div>
                  <h2 class="font-semibold">Normal Vision</h2>
                  <p>Penglihatan normal tanpa buta warna</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card border mb-2">
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

          <div class="card border mb-2">
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

          <div class="card border mb-2">
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

          <div class="card border mb-2">
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
        </div>
      </figure>
    </div>
  </div>
  
  <div class="bg-base-100 w-full border rounded-lg mb-8">
    <div class="p-6">
      <h2 class="card-title mb-4">Simulator Visual</h2>

      <div class="flex justify-between gap-4 mb-4 relative aspect-21/9">
        <div class="w-1/2 h-full overflow-hidden">
          <span class="badge badge-ghost mb-4">Normal Vision</span>
          <img alt="Lampu lalu lintas" src="/visual-simulator-assets/sample-1-normal.png" class="w-full h-full object-cover rounded-lg" />
        </div>
        <div class="w-1/2 h-full overflow-hidden">
          <span class="badge badge-ghost mb-4">Simulated</span>
          <img alt="Lampu lalu lintas" src="/visual-simulator-assets/sample-1-grayscale.png" class="w-full h-full object-cover rounded-lg simulated-img" />
        </div>

        <div class="absolute bottom-4 right-4 z-10 rounded-lg bg-white min-w-80 p-6">
          <div id="jenisSimulasi" class="flex justify-between mb-4 cursor-pointer">
            <span class="font-semibold"><i class="fa-solid fa-eye"></i> Jenis Simulasi</span>
            <span id="panah"><i class="fa-solid fa-chevron-up"></i></span>
          </div>

          <div class="btn-blindcolor bc-grayscale cursor-pointer hover:bg-slate-200 card border mb-2 hidden">
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

          <div class="btn-blindcolor bc-protan cursor-pointer hover:bg-slate-200 card border mb-2 hidden">
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

          <div class="btn-blindcolor bc-deutan cursor-pointer hover:bg-slate-200 card border mb-2 hidden">
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

          <div class="btn-blindcolor bc-tritan cursor-pointer hover:bg-slate-200 card border mb-2 hidden">
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
    </div>
  </div>

  <div class="grid grid-cols-5 gap-4">
    <div class="card border">
      <div class="card-body">
        <h2 class="card-title">Kontrol Intensitas</h2>
        <form action="#">
          <fieldset class="fieldset mb-2">
            <legend class="fieldset-legend">Intensitas:</legend>
            <input type="range" min="0" max="100" value="50" class="range range-info" />
          </fieldset>
          <button type="reset" class="btn btn-outline btn-wide"><i class="fa-solid fa-rotate-right"></i> Reset</button>
        </form>
      </div>
    </div>
    <div class="card border col-span-4">
      <div class="card-body">
        <div class="flex justify-between items-center">
          <h2 class="card-title">Contoh Gambar</h2>
          <a class="btn btn-outline"><i class="fa-solid fa-upload"></i> Unggah Gambar</a>
        </div>
        
        <div class="overflow-x-auto">
          <div class="flex gap-4 w-max pb-4">
            <div class="card border w-96">
              <div class="card-body">
                <div class="flex gap-4">
                  <img src="/visual-simulator-assets/sample-1-normal.png" alt="Lampu lalu lintas" class="size-36 object-cover rounded-lg">
                  <div>
                    <h2 class="card-title">Lampu Lalu Lintas</h2>
                    <p>Simulasi melihat lampu lalu lintas.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card border w-96">
              <div class="card-body">
                <div class="flex gap-4">
                  <img src="/visual-simulator-assets/sample-2-normal.png" alt="Buah-buahan" class="size-36 object-cover rounded-lg">
                  <div>
                    <h2 class="card-title">Buah-Buahan</h2>
                    <p>Simulasi melihat berbagai warna buah.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card border w-96">
              <div class="card-body">
                <div class="flex gap-4">
                  <img src="/visual-simulator-assets/sample-3-normal.png" alt="Bunga" class="size-36 object-cover rounded-lg">
                  <div>
                    <h2 class="card-title">Bunga</h2>
                    <p>Simulasi melihat warna bunga.</p>
                  </div>
                </div>
              </div>
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

      function closeJenisSimulasi() {
        for (let i = 0; i < btnBlindcolor.length; i++) {
          btnBlindcolor[i].classList.toggle('hidden');
        }
        panah.classList.toggle('rotate-180');
      }

      jenisSimulasi.addEventListener('click', closeJenisSimulasi);

      btnGrayscale.addEventListener('click', () => {
        simulatedImg.src = '{{ url('/visual-simulator-assets/sample-1-grayscale.png') }}';
        closeJenisSimulasi()
      });

      btnProtan.addEventListener('click', () => {
        simulatedImg.src = '{{ url('/visual-simulator-assets/sample-1-protan.png') }}';
        closeJenisSimulasi()
      });

      btnDeutan.addEventListener('click', () => {
        simulatedImg.src = '{{ url('/visual-simulator-assets/sample-1-deutan.png') }}';
        closeJenisSimulasi()
      });

      btnTritan.addEventListener('click', () => {
        simulatedImg.src = '{{ url('/visual-simulator-assets/sample-1-tritan.png') }}';
        closeJenisSimulasi()
      });
    </script>
  </x-slot>
</x-app-layout>