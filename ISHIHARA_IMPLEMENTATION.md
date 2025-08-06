# Dokumentasi Implementasi Tes Ishihara dengan Validasi Gemini AI

## Fitur yang Telah Dibuat:

### 1. Backend (Controller)
- **File**: `app/Http/Controllers/TestDiagnosisAdaptifController.php`
- **Method baru**: `validate()` untuk memproses jawaban dan mengirim ke Gemini AI
- **Fungsi**: 
  - Menerima jawaban dari frontend
  - Membandingkan dengan jawaban benar: ['74', '6', '16', '2', '29', '7', '45', '5']
  - Menghitung skor dan persentase kebenaran
  - Format jawaban dengan konteks medis untuk Gemini
  - Mengirim prompt detail ke Gemini AI dengan analisis pola jawaban
  - Mengembalikan diagnosis lengkap dalam format JSON

### 2. Routing
- **File**: `routes/web.php` 
- **Route baru**: `POST /tes-diagnosis-adaptif/validate`
- **Fungsi**: Endpoint untuk validasi hasil tes

### 3. Frontend JavaScript
- **File**: `resources/views/tes-diagnosis-adaptif/test.blade.php`
- **Fitur baru**:
  - Array `jawabanBenar` dengan jawaban standar untuk penglihatan normal
  - Menyimpan jawaban user ke array `jawaban`
  - Tombol submit yang muncul di soal terakhir
  - Validasi semua soal sudah dijawab
  - Kirim data ke backend via AJAX
  - Modal hasil dengan tampilan yang lebih informatif:
    - Skor dan persentase kebenaran
    - Detail perbandingan jawaban user vs jawaban benar
    - Diagnosis medis dari Gemini AI
  - Fungsi cetak hasil dengan format yang lebih lengkap
  - Reset tes dengan konfirmasi

## Interpretasi Jawaban:

### Jawaban "Tidak ada"
- Artinya user tidak dapat melihat angka sama sekali di dalam lingkaran
- Ini indikasi kemungkinan gangguan penglihatan warna
- Gemini AI akan menganalisis pola "Tidak ada" untuk menentukan jenis buta warna

### Jawaban Benar untuk Penglihatan Normal
- Soal 1: **74** (Ishihara_1.jpg)
- Soal 2: **6** (Ishihara_2.jpg)  
- Soal 3: **16** (Ishihara_3.jpg)
- Soal 4: **2** (Ishihara_4.jpg)
- Soal 5: **29** (Ishihara_5.jpg)
- Soal 6: **7** (Ishihara_6.jpg)
- Soal 7: **45** (Ishihara_7.jpg)
- Soal 8: **5** (Ishihara_8.jpg)

## Cara Kerja:

1. **Pengisian Tes**:
   - User menjawab 8 soal Ishihara
   - Setiap jawaban dibandingkan dengan jawaban standar
   - Sistem menghitung skor real-time

2. **Submit Tes**:
   - Tombol submit muncul di soal terakhir
   - Validasi semua soal sudah dijawab
   - Kirim jawaban ke backend dengan konteks jawaban benar

3. **Analisis AI**:
   - Backend membandingkan jawaban user vs jawaban benar
   - Format data untuk Gemini dengan konteks medis
   - Gemini menganalisis pola kesalahan untuk diagnosis
   - AI mempertimbangkan:
     - Persentase jawaban benar
     - Pola jawaban "Tidak ada"
     - Jenis kesalahan yang konsisten

4. **Hasil**:
   - Modal menampilkan skor lengkap
   - Detail perbandingan setiap jawaban
   - Diagnosis medis dari AI
   - Opsi cetak hasil dengan format profesional

## Format Diagnosis dari Gemini AI:

```
**STATUS PENGLIHATAN:** [Normal/Kemungkinan Buta Warna Ringan/Sedang/Berat]

**JENIS GANGGUAN:** [Normal/Protanopia/Deuteranopia/Tritanopia/Tidak dapat ditentukan]

**ANALISIS HASIL:**
[Penjelasan detail berdasarkan pola jawaban dan persentase kebenaran]

**REKOMENDASI:**
[Saran medis dan langkah selanjutnya]

**CATATAN PENTING:**
[Informasi tambahan tentang kondisi dan kehidupan sehari-hari]
```

## Interpretasi Skor:

- **8/8 (100%)**: Penglihatan warna normal
- **6-7/8 (75-87.5%)**: Kemungkinan gangguan ringan
- **4-5/8 (50-75%)**: Kemungkinan gangguan sedang  
- **0-3/8 (0-50%)**: Kemungkinan gangguan berat

### 2. Routing
- **File**: `routes/web.php` 
- **Route baru**: `POST /tes-diagnosis-adaptif/validate`
- **Fungsi**: Endpoint untuk validasi hasil tes

### 3. Frontend JavaScript
- **File**: `resources/views/tes-diagnosis-adaptif/test.blade.php`
- **Fitur baru**:
  - Menyimpan jawaban user ke array `jawaban`
  - Tombol submit yang muncul di soal terakhir
  - Validasi semua soal sudah dijawab
  - Kirim data ke backend via AJAX
  - Modal untuk menampilkan hasil diagnosis
  - Fungsi cetak hasil
  - Reset tes dengan konfirmasi

## Cara Kerja:

1. **Pengisian Tes**:
   - User menjawab 8 soal Ishihara
   - Setiap jawaban disimpan dalam array

2. **Submit Tes**:
   - Tombol submit muncul di soal terakhir
   - Validasi semua soal sudah dijawab
   - Kirim jawaban ke backend

3. **Validasi AI**:
   - Backend format jawaban untuk Gemini
   - Kirim prompt medis ke Gemini AI
   - Gemini memberikan diagnosis berdasarkan pola jawaban

4. **Hasil**:
   - Tampilkan hasil dalam modal
   - Opsi cetak hasil
   - Format diagnosis meliputi: Status, Jenis, Penjelasan, Saran

## Konfigurasi yang Diperlukan:

1. **Environment Variable**:
   - Pastikan `GEMINI_API_KEY` sudah diset di file `.env`

2. **Dependencies**:
   - Package `gemini-api-php/client` sudah terinstall
   - Laravel CSRF protection aktif

## Testing:

1. Buka halaman tes: `/tes-diagnosis-adaptif/test`
2. Jawab semua 8 soal
3. Klik tombol "Submit Hasil Tes"
4. Lihat hasil diagnosis dari Gemini AI
5. Test fitur cetak dan reset

## Error Handling:

- Validasi jawaban kosong
- Handle API errors dari Gemini
- Loading state saat proses
- Konfirmasi reset tes

## Format Diagnosis dari Gemini:

```
Status: [Normal/Kemungkinan Buta Warna Ringan/Sedang/Berat]
Jenis: [Protanopia/Deuteranopia/Tritanopia/Tidak terdeteksi]
Penjelasan: [Penjelasan kondisi]
Saran: [Langkah selanjutnya]
```
