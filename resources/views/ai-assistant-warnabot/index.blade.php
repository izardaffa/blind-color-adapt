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
          {{-- <div class="chat chat-end">
            <div class="chat-bubble">Apa penyebab buta warna?</div>
          </div>
          <div class="chat chat-start">
            <div class="chat-bubble">
              Buta warna umumnya disebabkan oleh faktor genetik. Kondisi ini terjadi ketika sel-sel kerucut di mata yang bertanggung jawab untuk mendeteksi warna tidak berfungsi dengan baik atau tidak ada sama sekali.
            </div>
          </div> --}}
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
      const chatContainer = document.querySelector('.px-8.py-4.flex-1.overflow-y-auto');
      const chatForm = document.getElementById('chatForm');
      const messageInput = document.getElementById('messageInput');
      const sendButton = document.getElementById('sendButton');

      chatForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const message = messageInput.value.trim();
        if (!message) return;

        // Validasi panjang pesan
        if (message.length > 500) {
          alert('Pertanyaan terlalu panjang. Maksimal 500 karakter.');
          return;
        }

        // Add user message to chat
        addMessage(message, 'user');
        
        // Clear input and disable button
        messageInput.value = '';
        sendButton.disabled = true;
        sendButton.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';

        // Show typing indicator
        showTypingIndicator();

        // Send request to API
        fetch('{{ route('ai-assistant-warnabot.chat') }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({
            text: message,
          }),
        })
        .then(response => response.json())
        .then(data => {
          removeTypingIndicator();
          
          if (data.response) {
            addMessage(data.response, 'bot');
          } else if (data.error) {
            addMessage('Maaf, terjadi kesalahan: ' + data.error, 'bot');
          }
        })
        .catch(error => {
          removeTypingIndicator();
          console.error('Error:', error);
          addMessage('Maaf, terjadi kesalahan saat menghubungi server.', 'bot');
        })
        .finally(() => {
          // Re-enable button
          sendButton.disabled = false;
          sendButton.innerHTML = '<i class="fa-solid fa-paper-plane"></i>';
        });
      });

      function addMessage(message, sender) {
        const chatDiv = document.createElement('div');
        chatDiv.className = sender === 'user' ? 'chat chat-end' : 'chat chat-start';
        
        const bubbleDiv = document.createElement('div');
        bubbleDiv.className = 'chat-bubble';
        
        // Clean any remaining formatting
        const cleanMessage = message.replace(/\*\*(.*?)\*\*/g, '$1')
                                .replace(/\*(.*?)\*/g, '$1')
                                .replace(/`(.*?)`/g, '$1')
                                .replace(/#{1,6}\s*/g, '');
    
        bubbleDiv.textContent = cleanMessage;
        
        chatDiv.appendChild(bubbleDiv);
        chatContainer.appendChild(chatDiv);
        
        // Scroll to bottom
        chatContainer.scrollTop = chatContainer.scrollHeight;
      }

      function showTypingIndicator() {
        const typingDiv = document.createElement('div');
        typingDiv.className = 'chat chat-start';
        typingDiv.id = 'typing-indicator';
        
        const bubbleDiv = document.createElement('div');
        bubbleDiv.className = 'chat-bubble';
        bubbleDiv.innerHTML = '<span class="loading loading-dots loading-sm"></span>';
        
        typingDiv.appendChild(bubbleDiv);
        chatContainer.appendChild(typingDiv);
        chatContainer.scrollTop = chatContainer.scrollHeight;
      }

      function removeTypingIndicator() {
        const typingIndicator = document.getElementById('typing-indicator');
        if (typingIndicator) {
          typingIndicator.remove();
        }
      }

      // Handle quick questions
      document.querySelectorAll('.link').forEach(link => {
        link.addEventListener('click', function() {
          messageInput.value = this.textContent;
          chatForm.dispatchEvent(new Event('submit'));
        });
      });

      // Auto-focus input
      messageInput.focus();

      // Handle Enter key
      messageInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
          e.preventDefault();
          chatForm.dispatchEvent(new Event('submit'));
        }
      });
    </script>
  </x-slot>
</x-app-layout>