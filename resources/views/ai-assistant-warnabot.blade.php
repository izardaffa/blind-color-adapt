<x-app-layout>
  <div class="flex justify-between items-center mb-8">
    <div class="flex gap-4 items-center">
      <div class="bg-green-500 size-16 rounded-lg flex justify-center items-center">
        <i class="fa-solid fa-robot text-white text-4xl"></i>
      </div>
      <div>
        <h1 class="font-bold text-xl">AI Assistant "WarnaBot"</h1>
        <p>Asisten AI untuk pertanyaan seputar buta warna.</p>
      </div>
    </div>
    <div>
      <a class="btn btn-outline me-2"><i class="fa-regular fa-heart"></i> Online</a>
      <a class="btn btn-outline me-2">850+ User</a>
    </div>
  </div>

  <div class="grid grid-cols-8 gap-4">
    <div class="col-span-2">
      <div class="card border mb-4">
        <div class="card-body">
          <h2 class="card-title">Pertanyaan Cepat</h2>
          <p>Pertanyaan yang sering ditanyakan.</p>
          <ul>
            <li class="link mb-2">Apa penyebab buta warna?</li>
            <li class="link mb-2">Apakah buta warna ada solusinya?</li>
            <li class="link mb-2">Apa saja bidang pekerjaan yang mendukung buta warna?</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="card border col-span-6 overflow-hidden min-h-[70vh]">
      <div class="card-body p-0">
        <div class="navbar bg-base-100 shadow-sm px-8 py-4">
          <div class="flex-1 flex items-center gap-2">
            <div class="size-12 bg-green-500 rounded-full flex justify-center items-center">
              <i class="fa-solid fa-robot text-white text-2xl"></i>
            </div>
            <div>
              <a class="font-semibold text-xl">WarnaBot</a>
              <p>🟢Online - Siap menjawab pertanyaan Anda!</p>
            </div>
          </div>
          <div class="flex-none">
            <button class="btn"><i class="fa-solid fa-thumbs-up text-2xl"></i></button>
            <button class="btn"><i class="fa-solid fa-thumbs-down text-2xl"></i></button>
          </div>
        </div>

        <div class="px-8 py-4 flex-1 overflow-y-auto">
          <div class="chat chat-start">
            <div class="chat-bubble">
              Halo! Saya WarnaBot, asisten AI yang siap membantu Anda dengan pertanyaan seputar buta warna. Apa yang ingin Anda ketahui?
            </div>
          </div>
          <div class="chat chat-end">
            <div class="chat-bubble">Apa penyebab buta warna?</div>
          </div>
          <div class="chat chat-start">
            <div class="chat-bubble">
              Buta warna umumnya disebabkan oleh faktor genetik. Kondisi ini terjadi ketika sel-sel kerucut di mata yang bertanggung jawab untuk mendeteksi warna tidak berfungsi dengan baik atau tidak ada sama sekali.
            </div>
          </div>
        </div>

        <!-- Input Area -->
        <div class="border-t bg-base-100 px-8 py-4">
          <form id="chatForm" class="flex gap-2">
            <input 
              type="text" 
              id="messageInput"
              placeholder="Ketik pertanyaan Anda di sini..." 
              class="input input-bordered flex-1"
              autocomplete="off"
            />
            <button 
              type="submit" 
              id="sendButton"
              class="btn btn-primary"
            >
              <i class="fa-solid fa-paper-plane"></i>
            </button>
          </form>
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