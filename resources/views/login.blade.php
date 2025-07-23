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
    <p class="font-semibold text-center">Masuk ke akun Anda</p>
  </div>

  <div class="card bg-base-100 w-1/3 shadow-sm m-auto">
    <div class="card-body">
      <div class="text-center">
        <h1 class="text-xl font-bold">Selamat Datang!</h1>
        <p>Akses semua fitur BlindColorAdapt+ dengan akun Anda</p>
      </div>

      <form action="#" method="post" class="px-12">
        <div class="mb-4">
          <label for="email" class="font-semibold">Email</label><br>
          <input type="email" name="email" id="email" placeholder="Masukkan email" class="input w-full">
        </div>

        <div class="mb-4">
          <label for="password" class="font-semibold">Password</label><br>
          <input type="password" name="password" id="password" placeholder="Masukkan password" class="input w-full">
        </div>

        <div class="mb-4 flex justify-between">
          <label class="label">
            <input type="checkbox" checked="checked" class="checkbox" />
            Remember me
          </label>
          <a class="link">Lupa Password</a>
        </div>

        <button class="btn w-full bg-primary mb-4">Masuk</button>

        <p class="text-center">Belum punya akun? <a href="#" class="link">Daftar Sekarang</a></p>
      </form>
    </div>
  </div>
</body>
</html>