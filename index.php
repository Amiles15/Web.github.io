<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artikel Pengisian Tailwind</title>
  <link href="dist/output.css" rel="stylesheet">
</head>

<body>
  <!-- Nav Bar -->
  <nav class="bg-gray-50 dark:bg-gray-700">
    <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6">
      <div class="flex items-center justify-between">
        <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
          <li>
            <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="text-gray-900 dark:text-white hover:underline">Artikel</a>
          </li>
          <li>
            <a href="#" class="text-gray-900 dark:text-white hover:underline">Project</a>
          </li>
          <li>
            <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
          </li>
        </ul>
        <div class="flex justify-between">
          <a href="login.php" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav Bar End -->

  <!-- Home Section -->
  <section id="home">
    <div class="bg-slate-700 mt-5 mb-5 px-4 py-5 w-full">
      <h2 class="bg-slate-500 text-white text-center hover:text-teal-400">Selamat Datang Di Web Artikel!!!!</h2>
    </div>
  </section>
  <!-- Home Section End -->

  <!-- From  Section -->
  <section id="form">
    <form>
      <div class="container">
        <div class="px-4 w-full flex">
          <ul>
            <li class="my-10 md:px-40">
              <label for="nama">Nama</label>
              <input type="text" id="nama" class="bg-slate-200 p-1 rounded-md text-dark">
            </li>
            <li class="my-10 md:px-40">
              <label for="id">Identitas</label>
              <input type="text" id="id" class="bg-slate-200 p-1 rounded-md text-dark">
            </li>
            <li class="my-10 md:px-40">
              <label for="email">Email</label>
              <input type="text" id="email" class="bg-slate-200 p-1 rounded-md text-dark">
            </li>
          </ul>
          <div class="w-full px-4 flex">
            <ul>
              <li class="my-10 md:px-40">
                <label for="titlt">Judul Artikel</label>
                <input type="text" id="title" class="bg-slate-200 p-1 rounded-md text-dark">
              </li>
              <li class="my-10 md:px-40">
                <label for="artikel">Kategori</label>
                <input type="text" id="artikel" class="bg-slate-200 p-1 rounded-md text-dark">
              </li>
              <li class="my-10 md:px-40">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                  message</label>
                <textarea id="message" rows="4" class="p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg"
                  placeholder="Your message..."></textarea>
              </li>
            </ul>
            <div class="w-full px-4">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-2 mb-4 flex justify-center">
        <a href="#" type="btn" class="bg-slate-500 px-5 p-2 rounded-full hover:opacity-60">Kirim</a>
      </div>
    </form>
  </section>
  <!-- Form End -->

  <!-- Artikel Section -->
  <section id="hero" class="pt-5 pb-10 bg-slate-500">
    <div class="container">
      <div class="w-full px-4 mt-2">
        <h1 class="text-center font-semibold text-xl text-teal-200"> Kumpulan Artikel </h1>
        <h3 class="text-center font-normal text-sm text-teal-200">Artikel Terbaru</h3>
      </div>
      <div class="flex flex-wrap px-4 w-full justify-center py-5">
        <div class="rounded-md shadow-md overflow-hidden">
          <img src="/dist/img/blender.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Artikel End -->
</body>



<script src="https://cdn.tailwindcss.com"></script>

</html>