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
      <li class="step">Isi Data Diri</li>
    </ul>
  </div>

  <div class="card bg-base-100 w-1/3 shadow-sm m-auto">
    <div class="card-body">
      <div class="text-center">
        <h1 class="text-xl font-bold">Buat Akun Anda</h1>
        <p>Masukkan kredensial untuk membuat akun Anda.</p>
      </div>

      <form action="#" method="post" class="px-12">
        <div class="mb-4">
          <label for="email" class="font-semibold">Email</label><br>
          <input type="email" name="email" id="email" placeholder="Masukkan email" class="input w-full">
          <p class="label">Contoh: username@email.com</p>
        </div>

        <div class="mb-4">
          <label for="password" class="font-semibold">Password</label><br>
          <input type="password" name="password" id="password" placeholder="Masukkan password" class="input w-full">
          <p class="label">Minimal 8 karakter.</p>
        </div>

        <div class="mb-4">
          <label for="password-confirm" class="font-semibold">Konfirmasi Password</label><br>
          <input type="password" name="password-confirm" id="password-confirm" placeholder="Masukkan password lagi" class="input w-full">
          <p class="label">Ulangi password.</p>
        </div>

        <button class="btn w-full bg-primary mb-4">Daftar</button>

        <p class="text-center">Sudah punya akun? <a href="#" class="link">Masuk Sekarang</a></p>
      </form>
    </div>
  </div>
</body>
</html>