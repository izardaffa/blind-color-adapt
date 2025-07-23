<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BlindColorAdapt+</title>
  <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  @vite('resources/css/app.css')
</head>
<body class="bg-base-200 min-h-[1000px]">
  <div class="pt-8 mb-8">
    <img src="/logo.png" alt="logo" class="h-24 m-auto">
    <p class="font-semibold text-center">Buat Akun Baru</p>
  </div>

  <div class="m-auto mb-8 flex justify-center">
    <ul class="steps w-56">
      <li class="step step-primary">Buat Akun</li>
      <li class="step step-primary">Isi Data Diri</li>
    </ul>
  </div>

  <div class="card bg-base-100 w-1/3 shadow-sm m-auto">
    <div class="card-body">
      <div class="text-center">
        <h1 class="text-xl font-bold">Lengkapi Data Diri Anda</h1>
        <p>Lengkapi data diri Anda untuk pengalaman yang lebih baik.</p>
      </div>

      <form action="#" method="post" class="px-12">
        <div class="flex gap-4">
          <div class="mb-4 w-1/2">
            <label for="nama_depan" class="font-semibold">Nama Depan*</label><br>
            <input type="text" name="nama_depan" id="nama_depan" placeholder="Masukkan nama depan" class="input w-full">
          </div>
          <div class="mb-4 w-1/2">
            <label for="nama_belakang" class="font-semibold">Nama Belakang*</label><br>
            <input type="text" name="nama_belakang" id="nama_belakang" placeholder="Masukkan nama belakang" class="input w-full">
          </div>
        </div>

        <div class="mb-4">
          <label for="tgl_lahir" class="font-semibold">Tanggal Lahir*</label><br>
          <input type="date" class="input w-full" />
        </div>

        <div class="mb-4">
          <label for="jenis_kelamin" class="font-semibold">Jenis Kelamin*</label><br>
          <div class="mb-2">
            <input type="radio" name="jenis_kelamin" class="radio radio-sm" checked="checked" />
            <label for="">Pria</label>
          </div>
          <div class="mb-2">
            <input type="radio" name="jenis_kelamin" class="radio radio-sm" />
            <label for="">Wanita</label>
          </div>
        </div>

        <div class="mb-4">
          <label for="profesi" class="font-semibold">Profesi</label><br>
          <input type="text" name="profesi" id="profesi" placeholder="Tuliskan nama profesi Anda" class="input w-full">
        </div>

        <div class="mb-4">
          <label for="jenis_buta_warna" class="font-semibold">Jenis Buta Warna</label><br>
          <select class="select w-full">
            <option disabled selected>Pilih jenis buta warna</option>
            <option>Deuteranopia</option>
            <option>Protanopia</option>
            <option>Tritanopia</option>
          </select>
          <span class="label">Jika Anda mempunyai buta warna.</span>
        </div>

        <button class="btn w-full bg-primary mb-4">Kirim</button>

        <p class="text-center">Sudah punya akun? <a href="#" class="link">Masuk Sekarang</a></p>
      </form>
    </div>
  </div>
</body>
</html>