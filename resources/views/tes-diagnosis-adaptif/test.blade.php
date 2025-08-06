<x-app-layout>
  <section id="soal">
    <div class="flex justify-between items-center mb-8">
      <div class="flex gap-4 items-center">
        <div class="bg-red-500 size-16 rounded-lg flex justify-center items-center">
          <i class="fa-solid fa-stethoscope text-white text-4xl"></i>
        </div>
        <div>
          <h1 class="font-bold text-xl">Tes Diagnosis Adaptif</h1>
          <p>Pertanyaan <span id="nomorSoal"></span> dari 8</p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-8 gap-4">
      <div class="col-span-3 mb-4">
        <div class="card border bg-base-100 w-full h-full">
          <div class="card-body">
            <h2 class="card-title">Gambar Tes</h2>
            
            <div class="w-full">
              <img alt="soal" id="imgSoal" class="object-cover m-auto">
            </div>
          </div>
        </div>
      </div>

      <div class="col-span-5 mb-4">
        <div class="card border bg-base-100 w-full h-full">
          <div class="card-body grow-0">
            <h2 class="card-title">Pertanyaan</h2>
            
            <p>Angka berapa yang Anda lihat di dalam lingkaran?</p>

            <form id="questions">
              <div id="q1" class="hidden">
                <div class="mb-2">
                  <input type="radio" name="q1" id="q1a5" class="radio me-2" checked value="Tidak ada"><label for="q1a5">Tidak ada</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q1" id="q1a1" class="radio me-2" value="26"><label for="q1a1">26</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q1" id="q1a2" class="radio me-2" value="29"><label for="q1a2">29</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q1" id="q1a3" class="radio me-2" value="70"><label for="q1a3">70</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q1" id="q1a4" class="radio me-2" value="74"><label for="q1a4">74</label>
                </div>
              </div>

              <div id="q2" class="hidden">
                <div class="mb-2">
                  <input type="radio" name="q2" id="q2a5" class="radio me-2" checked value="Tidak ada"><label for="q2a5">Tidak ada</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q2" id="q2a1" class="radio me-2" value="6"><label for="q2a1">6</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q2" id="q2a2" class="radio me-2" value="26"><label for="q2a2">26</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q2" id="q2a3" class="radio me-2" value="45"><label for="q2a3">45</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q2" id="q2a4" class="radio me-2" value="70"><label for="q2a4">70</label>
                </div>
              </div>

              <div id="q3" class="hidden">
                <div class="mb-2">
                  <input type="radio" name="q3" id="q3a5" class="radio me-2" checked value="Tidak ada"><label for="q3a5">Tidak ada</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q3" id="q3a1" class="radio me-2" value="6"><label for="q3a1">6</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q3" id="q3a2" class="radio me-2" value="16"><label for="q3a2">16</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q3" id="q3a3" class="radio me-2" value="76"><label for="q3a3">76</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q3" id="q3a4" class="radio me-2" value="26"><label for="q3a4">26</label>
                </div>
              </div>

              <div id="q4" class="hidden">
                <div class="mb-2">
                  <input type="radio" name="q4" id="q4a5" class="radio me-2" checked value="Tidak ada"><label for="q4a5">Tidak ada</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q4" id="q4a1" class="radio me-2" value="7"><label for="q4a1">7</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q4" id="q4a2" class="radio me-2" value="2"><label for="q4a2">2</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q4" id="q4a3" class="radio me-2" value="1"><label for="q4a3">1</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q4" id="q4a4" class="radio me-2" value="8"><label for="q4a4">8</label>
                </div>
              </div>

              <div id="q5" class="hidden">
                <div class="mb-2">
                  <input type="radio" name="q5" id="q5a5" class="radio me-2" checked value="Tidak ada"><label for="q5a5">Tidak ada</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q5" id="q5a1" class="radio me-2" value="29"><label for="q5a1">29</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q5" id="q5a2" class="radio me-2" value="28"><label for="q5a2">28</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q5" id="q5a3" class="radio me-2" value="70"><label for="q5a3">70</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q5" id="q5a4" class="radio me-2" value="18"><label for="q5a4">18</label>
                </div>
              </div>

              <div id="q6" class="hidden">
                <div class="mb-2">
                  <input type="radio" name="q6" id="q6a5" class="radio me-2" checked value="Tidak ada"><label for="q6a5">Tidak ada</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q6" id="q6a1" class="radio me-2" value="2"><label for="q6a1">2</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q6" id="q6a2" class="radio me-2" value="4"><label for="q6a2">4</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q6" id="q6a3" class="radio me-2" value="1"><label for="q6a3">1</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q6" id="q6a4" class="radio me-2" value="7"><label for="q6a4">7</label>
                </div>
              </div>

              <div id="q7" class="hidden">
                <div class="mb-2">
                  <input type="radio" name="q7" id="q7a5" class="radio me-2" checked value="Tidak ada"><label for="q7a5">Tidak ada</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q7" id="q7a1" class="radio me-2" value="95"><label for="q7a1">95</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q7" id="q7a2" class="radio me-2" value="46"><label for="q7a2">46</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q7" id="q7a3" class="radio me-2" value="45"><label for="q7a3">45</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q7" id="q7a4" class="radio me-2" value="48"><label for="q7a4">48</label>
                </div>
              </div>

              <div id="q8" class="hidden">
                <div class="mb-2">
                  <input type="radio" name="q8" id="q8a5" class="radio me-2" checked value="Tidak ada"><label for="q8a5">Tidak ada</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q8" id="q8a1" class="radio me-2" value="5"><label for="q8a1">5</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q8" id="q8a2" class="radio me-2" value="15"><label for="q8a2">15</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q8" id="q8a3" class="radio me-2" value="25"><label for="q8a3">25</label>
                </div>
                <div class="mb-2">
                  <input type="radio" name="q8" id="q8a4" class="radio me-2" value="6"><label for="q8a4">6</label>
                </div>
              </div>
            </form>

            <a id="btnNext" class="btn btn-info btn-wide text-white">Lanjutkan</a>
            <a id="btnBack" class="btn btn-info btn-outline btn-wide hover:text-white">Kembali</a>
            <a onclick="resetSoal()" class="btn btn-info btn-outline btn-wide hover:text-white">Refresh</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-slot:script>
    <script>
      const nomorSoal = document.querySelector('#nomorSoal');
      const imgSoal = document.querySelector('#imgSoal');
      const btnNext = document.querySelector('#btnNext');
      const btnBack = document.querySelector('#btnBack');
      
      // Buat tombol submit
      const btnSubmit = document.createElement('button');
      btnSubmit.id = 'btnSubmit';
      btnSubmit.className = 'btn btn-success btn-wide text-white';
      btnSubmit.textContent = 'Submit Hasil Tes';
      btnSubmit.style.display = 'none';
      
      // Tambahkan tombol submit setelah tombol refresh
      const refreshBtn = document.querySelector('a[onclick="resetSoal()"]');
      refreshBtn.parentNode.insertBefore(btnSubmit, refreshBtn.nextSibling);

      const form = document.querySelectorAll('form>div');
      
      const imgSrc = '{{ url('/tes-diagnosis-adaptif-assets/') }}';
      
      const jawabanBenar = ['74', '6', '16', '2', '29', '7', '45', '5'];
      const jawaban = [];

      let soalKe = 0;

      function refreshSoal() {
        nomorSoal.innerText = soalKe+1;
        imgSoal.src = imgSrc + '/Ishihara_' + (soalKe+1) + '.jpg';
        for (let i = 0; i < form.length; i++) {
          form[i].style.display = 'none';
        }
        form[soalKe].style.display = 'block';
        
        // Tampilkan tombol submit di soal terakhir
        if (soalKe === form.length - 1) {
          btnNext.style.display = 'none';
          btnSubmit.style.display = 'block';
        } else {
          btnNext.style.display = 'flex';
          btnSubmit.style.display = 'none';
        }
      }

      function collectAnswers() {
        jawaban.length = 0; // Clear array
        form.forEach((question, index) => {
          const selected = question.querySelector('input[type="radio"]:checked');
          jawaban[index] = selected ? selected.value : null;
        });
      }

      async function sendToGemini() {
        // Collect semua jawaban
        collectAnswers();
        
        // Validasi apakah semua soal sudah dijawab
        const unansweredQuestions = [];
        jawaban.forEach((answer, index) => {
          if (!answer) {
            unansweredQuestions.push(index + 1);
          }
        });
        
        if (unansweredQuestions.length > 0) {
          alert(`Mohon jawab semua soal terlebih dahulu. Soal yang belum dijawab: ${unansweredQuestions.join(', ')}`);
          return;
        }
        
        // Disable tombol submit
        btnSubmit.disabled = true;
        btnSubmit.textContent = 'Sedang memproses...';
        
        try {
          const response = await fetch('{{ route('tes-diagnosis-adaptif/validate') }}', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ 
              answers: jawaban 
            })
          });

          const result = await response.json();
          
          if (result.success) {
            // Tampilkan hasil diagnosis dalam modal atau alert
            showDiagnosisResult(result.diagnosis, result);
          } else {
            alert('Error: ' + (result.error || 'Terjadi kesalahan dalam memproses hasil tes'));
          }
        } catch (error) {
          console.error('Error sending data to Gemini:', error);
          alert('Terjadi kesalahan saat mengirim data. Silakan coba lagi.');
        } finally {
          // Re-enable tombol submit
          btnSubmit.disabled = false;
          btnSubmit.textContent = 'Submit Hasil Tes';
        }
      }

      function showDiagnosisResult(diagnosis, result) {
        // Hitung skor
        const score = result.score || 0;
        const total = result.totalQuestions || 8;
        const percentage = Math.round((score / total) * 100);
        
        // Buat modal untuk menampilkan hasil
        const modal = document.createElement('div');
        modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
        modal.innerHTML = `
          <div class="bg-white rounded-lg p-6 max-w-3xl w-full mx-4 max-h-[80vh] overflow-y-auto">
            <h2 class="text-2xl font-bold mb-4 text-center text-blue-600">Hasil Tes Ishihara</h2>
            
            <!-- Skor -->
            <div class="bg-blue-50 rounded-lg p-4 mb-4">
              <h3 class="font-bold text-lg mb-2">Skor Tes</h3>
              <div class="flex justify-between items-center">
                <span>Jawaban Benar:</span>
                <span class="font-bold text-green-600">${score} dari ${total} soal (${percentage}%)</span>
              </div>
            </div>
            
            <!-- Detail Jawaban -->
            <div class="bg-gray-50 rounded-lg p-4 mb-4">
              <h3 class="font-bold text-lg mb-2">Detail Jawaban</h3>
              <div class="grid grid-cols-2 gap-2 text-sm">
                ${result.answers.map((answer, index) => {
                  const correct = result.correctAnswers[index];
                  const isCorrect = answer === correct;
                  return `<div class="flex justify-between">
                    <span>Soal ${index + 1}:</span>
                    <span class="${isCorrect ? 'text-green-600' : 'text-red-600'}">
                      ${answer} ${isCorrect ? '✓' : '✗ (benar: ' + correct + ')'}
                    </span>
                  </div>`;
                }).join('')}
              </div>
            </div>
            
            <!-- Diagnosis -->
            <div class="prose max-w-none mb-4">
              <h3 class="font-bold text-lg mb-2">Diagnosis Medis</h3>
              <div class="bg-white border rounded-lg p-4">
                ${diagnosis.replace(/\n/g, '<br>').replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')}
              </div>
            </div>
            
            <div class="flex justify-center mt-6 gap-4">
              <button onclick="printResult()" class="btn btn-info">Cetak Hasil</button>
              <button onclick="closeModal()" class="btn btn-success">Tutup</button>
            </div>
          </div>
        `;
        
        document.body.appendChild(modal);
        
        // Fungsi untuk menutup modal
        window.closeModal = function() {
          window.location.href = '{{ route('tes-diagnosis-adaptif/index') }}';
          // document.body.removeChild(modal);
          // delete window.closeModal;
          // delete window.printResult;
        };
        
        // Fungsi untuk mencetak hasil
        window.printResult = function() {
          const printWindow = window.open('', '_blank');
          const detailAnswers = result.answers.map((answer, index) => {
            const correct = result.correctAnswers[index];
            const isCorrect = answer === correct;
            return `<tr>
              <td style="border: 1px solid #ddd; padding: 8px;">Soal ${index + 1}</td>
              <td style="border: 1px solid #ddd; padding: 8px;">${answer}</td>
              <td style="border: 1px solid #ddd; padding: 8px;">${correct}</td>
              <td style="border: 1px solid #ddd; padding: 8px; color: ${isCorrect ? 'green' : 'red'};">
                ${isCorrect ? '✓ Benar' : '✗ Salah'}
              </td>
            </tr>`;
          }).join('');
          
          printWindow.document.write(`
            <html>
              <head>
                <title>Hasil Tes Ishihara</title>
                <style>
                  body { font-family: Arial, sans-serif; margin: 20px; }
                  h1 { color: #2563eb; text-align: center; border-bottom: 2px solid #2563eb; padding-bottom: 10px; }
                  h2 { color: #1f2937; margin-top: 30px; }
                  .score-box { background: #dbeafe; padding: 15px; border-radius: 8px; margin: 20px 0; }
                  .diagnosis-box { background: #f9fafb; padding: 20px; border: 1px solid #d1d5db; border-radius: 8px; margin: 20px 0; }
                  table { width: 100%; border-collapse: collapse; margin: 20px 0; }
                  th { background: #f3f4f6; padding: 12px; border: 1px solid #d1d5db; text-align: left; }
                  td { padding: 8px; border: 1px solid #d1d5db; }
                  .footer { margin-top: 40px; font-size: 12px; color: #6b7280; text-align: center; }
                </style>
              </head>
              <body>
                <h1>Hasil Tes Diagnosis Adaptif Ishihara</h1>
                
                <div class="score-box">
                  <h2>Skor Tes</h2>
                  <p><strong>Jawaban Benar: ${score} dari ${total} soal (${percentage}%)</strong></p>
                </div>
                
                <h2>Detail Jawaban</h2>
                <table>
                  <thead>
                    <tr>
                      <th>Nomor Soal</th>
                      <th>Jawaban Anda</th>
                      <th>Jawaban Benar</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    ${detailAnswers}
                  </tbody>
                </table>
                
                <div class="diagnosis-box">
                  <h2>Diagnosis Medis</h2>
                  ${diagnosis.replace(/\n/g, '<br>').replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')}
                </div>
                
                <div class="footer">
                  <p>Tanggal tes: ${new Date().toLocaleDateString('id-ID', { 
                    weekday: 'long', 
                    year: 'numeric', 
                    month: 'long', 
                    day: 'numeric' 
                  })}</p>
                  <p><em>Catatan: Hasil tes ini bersifat indikatif dan tidak menggantikan pemeriksaan medis langsung oleh dokter mata.</em></p>
                </div>
              </body>
            </html>
          `);
          printWindow.document.close();
          printWindow.print();
        };
      }

      function resetSoal() {
        if (confirm('Apakah Anda yakin ingin mengulang tes? Semua jawaban akan dihapus.')) {
          // Reset semua radio button ke default
          form.forEach(question => {
            const radios = question.querySelectorAll('input[type="radio"]');
            radios.forEach(radio => radio.checked = false);
            // Set default "Tidak ada" terpilih
            const defaultRadio = question.querySelector('input[value="Tidak ada"]');
            if (defaultRadio) {
              defaultRadio.checked = true;
            }
          });
          
          // Reset ke soal pertama
          soalKe = 0;
          jawaban.length = 0;
          refreshSoal();
          
          if (soalKe <= 0) {
            btnBack.style.display = 'none';
          }
        }
      }

      // Event listeners
      refreshSoal();
      if (soalKe <= 0) {
        btnBack.style.display = 'none';
      }
      
      btnNext.addEventListener('click', () => {
        if (soalKe < form.length - 1) {
          soalKe += 1;
          refreshSoal();
        }

        if (soalKe > 0) {
          btnBack.style.display = 'flex';
        }
      });
      
      btnBack.addEventListener('click', () => {
        if (soalKe > 0) {
          soalKe -= 1;
          refreshSoal();
        }

        if (soalKe <= 0) {
          btnBack.style.display = 'none';
        }
      });

      btnSubmit.addEventListener('click', sendToGemini);
    </script>
  </x-slot:script>
</x-app-layout>