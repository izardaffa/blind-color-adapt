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
<body">
  {{-- Navigation --}}
  <div class="navbar bg-base-100 shadow-lg px-40 fixed z-20">
    <div class="flex-1">
      {{-- <a class="btn btn-ghost text-xl font-bold text-primary">BlindColorAdapt+</a> --}}
      <a href="/">
        <img src="/logo.png" alt="logo" class="h-12">
      </a>
    </div>
    <div class="flex-none">
      <a href="{{ route('ai-assistant-warnabot.index') }}" class="btn btn-sm mr-4"><i class="fa-solid fa-robot"></i> WarnaBot</a>
      <a href="{{ route('auth.login') }}" class="btn btn-sm mr-4"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
      <a href="{{ route('auth.register') }}" class="btn btn-sm mr-4"><i class="fa-solid fa-user-plus"></i> Register</a>
      {{-- <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img
              alt="Tailwind CSS Navbar component"
              src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
          </div>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
          <li>
            <a class="justify-between">
              Profile
              <span class="badge">New</span>
            </a>
          </li>
          <li><a>Settings</a></li>
          <li><a>Logout</a></li>
        </ul>
      </div> --}}
    </div>
  </div>

  <section class="bg-base-200 px-48 py-24">
    {{ $slot }}
  </section>

  <footer class="footer sm:footer-horizontal footer-center bg-base-100 text-base-content p-10">
    <aside>
      <p>Copyright © {{ date('Y') }} - All right reserved by BlindColorAdapt+</p>
    </aside>
  </footer>

  {{ $script ?? '' }}
</body>
</html>