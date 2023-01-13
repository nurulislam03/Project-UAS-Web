
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-2 py-6 flex gap-2">
            <img src="{{ url('img') }}/logo.png" alt="" />
            <a href="#home" class="font-bold text-lg text-white block">HightSchool</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamburger-line transition duration-300 origin-top-left"></span>
              <span class="hamburger-line transition duration-300"></span>
              <span class="hamburger-line transition duration-300 origin-bottom-left"></span>
            </button>
            <nav id="nav-menu" class="hidden absolute right-4 py-5 bg-[#0E2123] rounded-lg shadow-lg max-w-[250px] w-full top-full transition duration-700 lg:block lg:static lg:max-w-full lg:shadow-none lg:rounded-none lg:bg-transparent">
              <ul class="block lg:flex lg:items-center">
                <li class="group">
                  <a href="#home" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Home</a>
                </li>
                <li class="group">
                  <a href="#profil" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Profil Sekolah</a>
                </li>
                <li class="group">
                  <a href="#jurusan" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Data Akademik</a>
                </li>
                <li class="group">
                  <a href="#artikel" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Artikel</a>
                </li>
                <li class="group">
                  <a href="#" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Fasilitas</a>
                </li>
                <li class="group">
                  <a href="#galery" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">Galery</a>
                </li>
                <li class="group">
                  <a href="#" class="text-base text-white py-2 mx-6 flex group-hover:text-primary lg:text-sm">E-Learning</a>
                </li>
                <li class="group">
                  <a href="#" class="button-primary invisible xl:visible">Hubungi kami</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Start -->
    <section id="home" class="py-40 bg-cover" style="background-image: url({{ url('img') }}/hero.png)">
        <div class="container">
            <h1 class="font-bold text-4xl text-white md:max-w-lg lg:text-6xl">Buku - Buku yang dapat membuat anda Termotivasi</h1>
            <p class="font-thin text-xs text-slate-200 my-6 lg:text-sm">September 6, 2022</p>
            <p class="font-thin text-sm text-slate-200 mb-8 lg:w-1/2">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi.</p>
            <button type="button" class="button-primary">Read more</button>
        </div>
    </section>

    {{ $slot }}
    <!-- Galeri End -->

    <!-- Footer Start -->
    <footer class="pt-24 bg-[#0E2123] text-white">
      <div class="container">
        <div class="flex items-center gap-2 mb-11">
          <img src="{{ url('img') }}/logo.png" alt="" />
          <h4 class="font-semibold text-base lg:text-lg">Hight School</h4>
        </div>
        <div class="flex flex-wrap w-full">
          <div class="w-full mb-10 p-6 md:w-1/2 lg:w-1/4">
            <p class="font-thin text-sm mb-10">“ Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi. “</p>
            <div class="flex gap-x-4">
              <img src="{{ url('img') }}/medsos/facebook.png" alt="" />
              <img src="{{ url('img') }}/medsos/Twitter.png" alt="" />
              <img src="{{ url('img') }}/medsos/linkedin.png" alt="" />
              <img src="{{ url('img') }}/medsos/instagram.png" alt="" />
            </div>
          </div>
          <div class="w-full mb-10 p-6 md:w-1/2 lg:w-1/4">
            <h4 class="font-semibold text-base mb-6 lg:text-lg">Jelajah</h4>
            <ul class="font-medium text-sm text-slate-300">
              <li class="mb-4"><a href="">Identitas Sekolah</a></li>
              <li class="mb-4"><a href="">Berita</a></li>
              <li class="mb-4"><a href="">Galery</a></li>
              <li class="mb-4"><a href="">Fasilitas</a></li>
              <li class="mb-4"><a href="">Kontak Kami</a></li>
            </ul>
          </div>
          <div class="w-full mb-10 p-6 md:w-1/2 lg:w-1/4">
            <h4 class="font-semibold text-base mb-6 lg:text-lg">Data Akademi</h4>
            <ul class="font-medium text-sm text-slate-300">
              <li class="mb-4"><a href="">Tenaga Pendidik</a></li>
              <li class="mb-4"><a href="">Tenaga Kependidikan</a></li>
              <li class="mb-4"><a href="">Dafar Siswa</a></li>
              <li class="mb-4"><a href="">Absensi Siswa</a></li>
              <li class="mb-4"><a href="">Organisasi Sekolah</a></li>
              <li class="mb-4"><a href="">Jadwal Pelajaran</a></li>
              <li class="mb-4"><a href="">Jadwal Ujian</a></li>
            </ul>
          </div>
          <div class="w-full mb-10 p-6 md:w-1/2 lg:w-1/4">
            <h4 class="font-semibold text-base mb-6 lg:text-lg">Lokasi</h4>
            <div class="flex items-start w-full mb-4 gap-4">
              <img src="{{ url('img') }}/location.png" alt="alamat" />
              <div class="font-medium text-sm">
                <h5 class="mb-4">Alamat</h5>
                <p class="text-slate-300">3891 Ranchview Dr. Richardson,</p>
                <p class="text-slate-300">California 62639</p>
              </div>
            </div>
            <div class="flex items-start w-full gap-4">
              <img src="{{ url('img') }}/mail.png" alt="kontak" />
              <div class="font-medium text-sm">
                <h5 class="mb-4">Kontak Kami</h5>
                <p class="text-slate-300">Telp: (0266) 123456</p>
                <p class="text-slate-300">Web : www.higntschool.sch.id</p>
                <p class="text-slate-300">email : info@hightschool.sch.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>