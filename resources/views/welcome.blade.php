<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa & Magang</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light font-sans antialiased text-gray-800 pt-20">

    <nav class="fixed w-full top-0 z-50 bg-primary text-white py-4 shadow-lg border-b border-white/10">
        <div class="w-full px-6 md:px-12 flex justify-between items-center">

            <a href="#" class="flex items-center transition duration-300 hover:opacity-80">
                <img src="{{ asset('images/logo1.png') }}" alt="Logo Global Tech" class="h-10 md:h-12 w-auto">
            </a>

            <div class="flex items-center gap-8">
                <div class="hidden md:flex gap-8 font-medium">
                    <a href="#tentang" class="nav-link hover:text-accent transition">Tentang Program</a>
                    <a href="#timeline" class="nav-link hover:text-accent transition">Timeline</a>
                    <a href="#faq" class="nav-link hover:text-accent transition">FAQ</a>
                </div>
                <a href="/pendaftaran" target="_blank"
                    class="bg-accent text-primary px-8 py-2.5 font-bold rounded-full hover:bg-yellow-500 transition shadow-xl transform hover:-translate-y-0.5">
                    Daftar
                </a>
            </div>

        </div>
    </nav>

    <section id="tentang" class="relative w-full min-h-screen bg-primary flex items-center pt-10 pb-10">
        <div
            class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center justify-between gap-12 w-full">

            <div class="md:w-1/2 text-left z-10 md:ml-5">
                <p class="text-accent font-bold tracking-widest mb-4 uppercase text-sm md:text-base">Future Leader
                    Scholarship 2026</p>
                <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-md">
                    Peluang Program <br> Beasiswa & Magang
                </h2>
                <p class="text-lg md:text-xl text-gray-300 mb-10 leading-relaxed max-w-lg text-justify">
                    Program beasiswa ini bertujuan untuk memberikan akses dan peluang berprestasi yang seluas-luasnya
                    kepada generasi muda. Kami merancang program ini sebagai inkubator pemimpin masa depan di bidang
                    sains dan teknologi.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="/pendaftaran" target="_blank"
                        class="bg-accent text-primary font-bold py-3.5 px-8 rounded-full shadow-xl hover:bg-yellow-500 hover:-translate-y-1 transition transform duration-300">
                        Daftar Sekarang
                    </a>
                    <button onclick="peringatanUnduh()"
                        class="px-6 py-3 border-2 border-yellow-400 text-yellow-400 rounded-full font-bold hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300">
                        Unduh Panduan
                    </button>
                </div>
            </div>

            <div class="md:w-1/2 w-full flex justify-end z-10">
                <div
                    class="w-full max-w-lg bg-white/10 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20 aspect-[4/3] flex flex-col justify-center items-center transform hover:scale-105 transition duration-500">
                    <img src="{{ asset('images/graduation.png') }}" alt="Ilustrasi Wisuda"
                        class="w-full max-w-lg object-contain transform hover:scale-105 transition duration-500 drop-shadow-2xl">
                </div>
            </div>

        </div>

        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute -top-20 -right-20 w-96 h-96 bg-accent rounded-full opacity-10 blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-72 h-72 bg-blue-400 rounded-full opacity-10 blur-3xl"></div>
        </div>
    </section>

    <section id="timeline" class="bg-white py-24">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-extrabold text-primary">Jadwal & Timeline Seleksi</h3>
                <p class="text-gray-500 mt-4 text-lg">Persiapkan dirimu sesuai dengan tanggal-tanggal penting berikut.
                </p>
            </div>

            <div class="relative border-l-4 border-accent ml-6 md:mx-auto md:w-2/3 text-left">
                <div class="mb-12 pl-8 relative hover:-translate-y-1 transition duration-300">
                    <div
                        class="absolute w-6 h-6 bg-accent rounded-full -left-[14px] top-1 border-4 border-white shadow">
                    </div>
                    <p class="text-sm text-accent font-bold uppercase tracking-wider">14 Feb - 14 Mar 2026</p>
                    <h4 class="text-2xl font-bold text-primary mt-1">Pendaftaran & Seleksi Administrasi</h4>
                    <p class="text-gray-600 mt-2">Pengisian formulir pendaftaran secara online dan pengunggahan berkas
                        persyaratan.</p>
                </div>

                <div class="mb-12 pl-8 relative hover:-translate-y-1 transition duration-300">
                    <div
                        class="absolute w-6 h-6 bg-gray-300 rounded-full -left-[14px] top-1 border-4 border-white shadow">
                    </div>
                    <p class="text-sm text-gray-500 font-bold uppercase tracking-wider">14 - 29 Mar 2026</p>
                    <h4 class="text-2xl font-bold text-primary mt-1">Tes Bakat Skolastik</h4>
                    <p class="text-gray-600 mt-2">Peserta yang lolos seleksi administrasi akan mengikuti tes potensi
                        akademik secara daring.</p>
                </div>

                <div class="mb-4 pl-8 relative hover:-translate-y-1 transition duration-300">
                    <div
                        class="absolute w-6 h-6 bg-gray-300 rounded-full -left-[14px] top-1 border-4 border-white shadow">
                    </div>
                    <p class="text-sm text-gray-500 font-bold uppercase tracking-wider">24 Apr 2026</p>
                    <h4 class="text-2xl font-bold text-primary mt-1">Pengumuman Akhir</h4>
                    <p class="text-gray-600 mt-2">Pengumuman penerima Beasiswa & Magang melalui portal website dan email
                        resmi.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="bg-primary py-24 border-t border-primary">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="flex flex-col md:flex-row gap-12 items-center">

                <div class="md:w-1/2 w-full">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-white leading-tight mb-2">
                        Pertanyaan seputar <br> Program Kami
                    </h3>
                    <p class="text-gray-300 mb-8 text-lg">
                        Hal umum yang sering ditanyakan oleh calon pendaftar.
                    </p>

                    <div class="space-y-4">
                        <details class="bg-white rounded-xl shadow-lg border-none group overflow-hidden">
                            <summary
                                class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-primary hover:text-accent transition duration-300 text-lg">
                                <span>Apa itu Program Beasiswa & Magang ini?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-gray-600 px-6 pb-6 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                Ini adalah program intensif dari PT. Global Tech Solution yang memberikan bantuan dana
                                pendidikan (beasiswa) sekaligus kesempatan bekerja secara nyata (magang) pada
                                proyek-proyek teknologi di perusahaan kami.
                            </div>
                        </details>

                        <details class="bg-white rounded-xl shadow-lg border-none group overflow-hidden">
                            <summary
                                class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-primary hover:text-accent transition duration-300 text-lg">
                                <span>Siapa saja yang bisa mendaftar program ini?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-gray-600 px-6 pb-6 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                Program ini terbuka untuk seluruh mahasiswa aktif jenjang D3/D4/S1 dari jurusan yang
                                berkaitan dengan Ilmu Komputer, Sistem Informasi, Desain Komunikasi Visual, maupun
                                jurusan lain yang memiliki minat tinggi di bidang teknologi.
                            </div>
                        </details>

                        <details class="bg-white rounded-xl shadow-lg border-none group overflow-hidden">
                            <summary
                                class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-primary hover:text-accent transition duration-300 text-lg">
                                <span>Apakah program magang ini berbayar (paid internship)?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-gray-600 px-6 pb-6 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                Ya! Selain mendapatkan dana beasiswa untuk pembayaran Uang Kuliah Tunggal (UKT), peserta
                                yang lolos juga akan mendapatkan uang saku bulanan (allowance) selama masa magang
                                berlangsung.
                            </div>
                        </details>

                        <details class="bg-white rounded-xl shadow-lg border-none group overflow-hidden">
                            <summary
                                class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-primary hover:text-accent transition duration-300 text-lg">
                                <span>Apakah magang dilakukan secara WFO atau WFH?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="text-gray-600 px-6 pb-6 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                Sistem magang kami menerapkan model *Hybrid*. Peserta dapat bekerja dari rumah (WFH)
                                namun diwajibkan untuk hadir ke kantor cabang kami di Pontianak pada hari-hari tertentu
                                untuk rapat kordinasi.
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-primary py-12 border-t border-white/10">
        <div class="container mx-auto px-6 max-w-6xl">

            <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                <div class="flex flex-col items-center md:items-start gap-4">

                    <img src="{{ asset('images/logo1.png') }}" alt="Logo Global Tech"
                        class="h-12 md:h-14 w-auto object-contain">

                    <div class="text-center md:text-left">
                        <h2 class="font-extrabold text-xl text-white">PT. Global Tech Solution</h2>
                        <p class="text-gray-300 mt-1">Email : recruitment.globaltech.id@gmail.com</p>
                    </div>

                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-white/20 text-center md:text-left text-sm text-gray-400">
                &copy; 2026 PT. Global Tech Solution.
            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function peringatanUnduh() {
            Swal.fire({
                icon: 'info',
                title: 'Akses Dibatasi',
                text: 'Anda harus daftar terlebih dahulu untuk mengunduh buku panduan ini!',
                confirmButtonText: 'Daftar Sekarang',
                confirmButtonColor: '#2563EB', // Warna biru Tailwind
                showCancelButton: true,
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Arahkan ke halaman pendaftaran jika tombol Daftar diklik
                    window.location.href = '/pendaftaran';
                }
            });
        }
    </script>
</body>

</html>