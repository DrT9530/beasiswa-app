<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran - Global Tech</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light font-sans antialiased text-gray-800 min-h-screen flex flex-col">
    @if (session('success'))
        <div id="success-popup"
            class="fixed top-24 left-1/2 transform -translate-x-1/2 z-[100] bg-white border border-green-100 rounded-2xl shadow-2xl p-5 flex items-center gap-4 max-w-md w-[90%] transition-opacity duration-500">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-500 flex-shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <div>
                <h4 class="text-lg font-extrabold text-gray-800">Pendaftaran Berhasil!</h4>
                <p class="text-sm text-gray-600 mt-0.5">{{ session('success') }}</p>
            </div>
            <button onclick="document.getElementById('success-popup').style.display='none'"
                class="ml-auto text-gray-400 hover:text-gray-600 bg-gray-50 hover:bg-gray-100 rounded-full p-2 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <script>
            setTimeout(function () {
                const popup = document.getElementById('success-popup');
                if (popup) {
                    // Buat transparan dulu biar efeknya halus
                    popup.style.opacity = '0';
                    // Hapus dari layar setelah transisi selesai
                    setTimeout(() => popup.style.display = 'none', 500);
                }
            }, 5000); // 5000 milidetik = 5 detik
        </script>
    @endif

    <nav class="bg-primary text-white py-4 shadow-md">
        <div class="w-full px-6 md:px-12 flex justify-between items-center">
            <a href="/" class="flex items-center transition duration-300 hover:opacity-80">
                <img src="{{ asset('images/logo1.png') }}" alt="Logo Global Tech" class="h-10 w-auto">
            </a>
            <a href="/" class="text-sm font-semibold hover:text-accent transition flex items-center gap-2">
                ← Kembali ke Beranda
            </a>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-6 max-w-3xl py-12">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 p-8 md:p-12">

            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-primary mb-2">Formulir Pendaftaran</h2>
                <p class="text-gray-500">Program Beasiswa & Magang Future Leader 2026</p>
            </div>

            <form id="formPendaftaran" action="{{ route('simpan.pendaftaran') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition bg-gray-50 focus:bg-white"
                        placeholder="Masukkan email anda">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="nama" required
                        class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition bg-gray-50 focus:bg-white"
                        placeholder="Masukkan nama lengkap sesuai KTP/KTM">
                </div>

                <div class="relative">
                    <label class="block text-sm font-bold text-gray-700 mb-2">Universitas / Perguruan Tinggi</label>
                    <input type="text" name="universitas" id="univ-input" required autocomplete="off"
                        class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition bg-gray-50 focus:bg-white"
                        placeholder="Ketik atau pilih nama kampusmu">

                    <ul id="univ-list"
                        class="absolute z-50 w-full bg-white border border-gray-200 mt-2 rounded-xl shadow-2xl max-h-64 overflow-y-auto hidden">
                    </ul>
                </div>

                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">NIM</label>
                        <input type="text" name="nim" required
                            class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition bg-gray-50 focus:bg-white"
                            placeholder="Nomor Induk Mahasiswa">
                    </div>
                    <div class="w-full md:w-1/2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Jurusan / Program Studi</label>
                        <input type="text" name="jurusan" required
                            class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition bg-gray-50 focus:bg-white"
                            placeholder="Contoh: Sistem Informasi">
                    </div>
                </div>

                <button type="submit" id="btnSubmit"
                    class="bg-blue-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                    Kirim Pendaftaran
                </button>
            </form>
            </form>
        </div>
    </main>

    <footer class="bg-primary py-6 border-t border-white/10 text-center text-sm text-gray-400">
        &copy; 2026 PT. Global Tech Solution.
    </footer>

    <script>
        const kampusList = [
            "Universitas Tanjungpura", "Universitas Panca Bhakti", "Universitas Muhammadiyah Pontianak",
            "Politeknik Negeri Pontianak", "Politeknik Kesehatan Kemenkes Pontianak", "Institut Agama Islam Negeri Pontianak",
            "Universitas Nahdlatul Ulama Kalimantan Barat", "Universitas Widya Dharma Pontianak", "Universitas OSO Pontianak",
            "Institut Teknologi dan Bisnis Sabda Setia", "Universitas Indonesia", "Universitas Gadjah Mada",
            "Institut Teknologi Bandung", "Institut Teknologi Sepuluh Nopember", "Institut Pertanian Bogor",
            "Universitas Airlangga", "Universitas Brawijaya", "Universitas Diponegoro", "Universitas Padjadjaran",
            "Universitas Sebelas Maret", "Universitas Hasanuddin", "Universitas Syiah Kuala", "Universitas Sumatera Utara",
            "Universitas Andalas", "Universitas Sriwijaya", "Universitas Lampung", "Universitas Riau", "Universitas Jambi",
            "Universitas Bengkulu", "Universitas Mulawarman", "Universitas Lambung Mangkurat", "Universitas Palangka Raya",
            "Universitas Borneo Tarakan", "Universitas Udayana", "Universitas Mataram", "Universitas Nusa Cendana",
            "Universitas Pattimura", "Universitas Cenderawasih", "Universitas Terbuka", "Universitas Pendidikan Indonesia",
            "Universitas Negeri Jakarta", "Universitas Negeri Yogyakarta", "Universitas Negeri Malang", "Universitas Negeri Semarang",
            "Universitas Negeri Surabaya", "Universitas Negeri Padang", "Universitas Negeri Medan", "Universitas Negeri Makassar",
            "Universitas Pembangunan Nasional Veteran Jakarta", "Universitas Pembangunan Nasional Veteran Jawa Timur",
            "Universitas Pembangunan Nasional Veteran Yogyakarta", "Universitas Islam Negeri Syarif Hidayatullah Jakarta",
            "Universitas Islam Negeri Sunan Kalijaga Yogyakarta", "Universitas Islam Negeri Maulana Malik Ibrahim Malang",
            "Universitas Islam Negeri Sunan Ampel Surabaya", "Universitas Telkom", "Bina Nusantara University",
            "Universitas Gunadarma", "Universitas Trisakti", "Universitas Tarumanagara", "Universitas Pelita Harapan",
            "Universitas Mercu Buana", "Universitas Muhammadiyah Surakarta", "Universitas Muhammadiyah Malang",
            "Universitas Muhammadiyah Yogyakarta", "Universitas Islam Indonesia", "Universitas Katolik Parahyangan",
            "Universitas Atma Jaya", "Universitas Sanata Dharma", "Universitas Surabaya", "Universitas Kristen Petra",
            "Politeknik Keuangan Negara", "Politeknik Statistika"
        ];

        const input = document.getElementById('univ-input');
        const list = document.getElementById('univ-list');

        function renderList(filterText = '') {
            list.innerHTML = '';
            // Filter data sesuai ketikan
            const filtered = kampusList.filter(kampus =>
                kampus.toLowerCase().includes(filterText.toLowerCase())
            );

            if (filtered.length === 0) {
                list.innerHTML = '<li class="px-5 py-3 text-gray-500 text-sm">Kampus tidak ditemukan</li>';
                return;
            }

            filtered.forEach(kampus => {
                const li = document.createElement('li');
                // Desain cantik saat di hover (berubah jadi primary navy)
                li.className = 'px-5 py-3 hover:bg-primary hover:text-white cursor-pointer transition text-sm text-gray-700 font-medium border-b border-gray-50 last:border-0';
                li.textContent = kampus;
                li.onclick = () => {
                    input.value = kampus;
                    list.classList.add('hidden');
                };
                list.appendChild(li);
            });
        }

        // Tampilkan list saat diketik
        input.addEventListener('input', (e) => {
            list.classList.remove('hidden');
            renderList(e.target.value);
        });

        // Tampilkan list saat di-klik (focus)
        input.addEventListener('focus', () => {
            list.classList.remove('hidden');
            renderList(input.value);
        });

        // Sembunyikan list jika klik di luar kotak
        document.addEventListener('click', (e) => {
            if (!input.contains(e.target) && !list.contains(e.target)) {
                list.classList.add('hidden');
            }
        });
    </script>
    <script>
        document.getElementById('formPendaftaran').addEventListener('submit', function () {
            let btn = document.getElementById('btnSubmit');

            // 1. Kunci tombol agar tidak bisa diklik lagi
            btn.disabled = true;

            // 2. Tambahkan efek redup ala Tailwind
            btn.classList.add('opacity-75', 'cursor-not-allowed');

            // 3. Ubah teks menjadi ikon loading putar (Spinner)
            btn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg> 
            Memproses Data...
        `;
        });
    </script>
</body>

</html>