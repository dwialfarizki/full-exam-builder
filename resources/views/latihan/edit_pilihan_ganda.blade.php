<x-app-layout>
    <div class="flex min-h-screen bg-gray-50 text-gray-700 Inter">

        <aside
            class="w-64 bg-white border-r border-gray-200 flex flex-col hidden md:flex sticky top-0 h-screen select-none font-sans text-sm">

            <div class="h-14 flex items-center px-6 border-b border-gray-200/80 space-x-3 text-gray-600">
                <x-lucide-menu class="w-4 h-4 text-gray-500" />
                <span class="font-normal text-gray-700">Menu</span>
            </div>

            <div class="flex-1 py-4 overflow-y-auto space-y-1">

                <div x-data="{ open: true }">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-6 py-3 text-gray-700 hover:bg-gray-50/80 transition-colors font-normal text-left">
                        <div class="flex items-center space-x-3">
                            <x-lucide-book-open class="w-4 h-4 text-blue-600" />
                            <span>Mata Kuliah</span>
                        </div>
                        <x-lucide-chevron-down class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div x-show="open" class="border-l border-gray-200 ml-8 my-1 space-y-0.5">
                        <div class="relative -ml-[1px] border-l-2 border-blue-600 bg-blue-50/40">
                            <a href="{{ route('latihan.index') }}" class="block pl-5 py-2 text-blue-600 font-medium">
                                Mata Kuliah Saya
                            </a>
                        </div>
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Katalog
                            </a>
                        </div>
                    </div>
                </div>

                <div x-data="{ open: true }">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-6 py-3 text-gray-700 hover:bg-gray-50/80 transition-colors font-normal text-left">
                        <div class="flex items-center space-x-3">
                            <x-lucide-database class="w-4 h-4 text-gray-500" />
                            <span>Pengelolaan</span>
                        </div>
                        <x-lucide-chevron-down class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div x-show="open" class="border-l border-gray-200 ml-8 my-1 space-y-0.5">
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Buat Mata Kuliah
                            </a>
                        </div>
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Kelola Sesi
                            </a>
                        </div>
                    </div>
                </div>

                <div x-data="{ open: true }">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-6 py-3 text-gray-700 hover:bg-gray-50/80 transition-colors font-normal text-left">
                        <div class="flex items-center space-x-3">
                            <x-lucide-pie-chart class="w-4 h-4 text-gray-500" />
                            <span>Aktivitas</span>
                        </div>
                        <x-lucide-chevron-down class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div x-show="open" class="border-l border-gray-200 ml-8 my-1 space-y-0.5">
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Terakhir Dikunjungi
                            </a>
                        </div>
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Riwayat
                            </a>
                        </div>
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Laporan Waktu
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0 bg-[#F7F8FA]">

            <div class="px-8 pt-4 pb-2 flex-1 flex flex-col">
                <header class="pl-3 pb-2">
                    <div class="flex items-center gap-4 h-10 text-[13px] text-[#98A2B3]">
                        <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="hover:underline cursor-pointer">Pengelolaan Mata Kuliah</span>
                        <span>&rsaquo;</span>
                        <span class="hover:underline cursor-pointer">Katalog Mata Kuliah</span>
                        <span>&rsaquo;</span>
                        <span class="hover:underline cursor-pointer">Mata Kuliah</span>
                        <span>&rsaquo;</span>
                        <a href="{{ route('latihan.exam', $latihan->id) }}" class="hover:underline">Latihan</a>
                        <span>&rsaquo;</span>
                        {{-- MODIFIKASI: Mengubah teks menjadi Ubah Soal --}}
                        <span class="text-blue-600 font-medium">Ubah Soal</span>
                    </div>
                </header>

                <main
                    class="w-full bg-white rounded-[24px] border border-gray-100 px-8 py-8 shadow-[0_4px_20px_rgba(0,0,0,0.03)] space-y-6 flex-1">

                    <div class="pb-2">
                        {{-- MODIFIKASI: Mengubah judul menjadi Ubah Soal --}}
                        <h1 class="text-xl font-bold text-gray-900 tracking-tight">Ubah Soal Pilihan Ganda</h1>
                    </div>

                    @if ($errors->any())
                        <div class="bg-red-50 text-red-600 p-4 rounded-xl text-xs space-y-1 border border-red-100">
                            <p class="font-bold">Gagal memperbarui soal. Silakan periksa kembali:</p>
                            <ul class="list-disc pl-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- MODIFIKASI: Mengubah route action ke update_soal dan membawa id soal, menggunakan method POST --}}
                    <form action="{{ route('latihan.exam.update_soal', $soal->id) }}" method="POST"
                        class="space-y-5">
                        @csrf
                        {{-- MODIFIKASI: Wajib menambahkan @method('PUT') agar dikenali sebagai rute update data oleh Laravel --}}
                        @method('PUT')

                        <div class="space-y-2">
                            <label class="block text-xs font-semibold text-gray-700">Soal<span
                                    class="text-red-500">*</span></label>
                            <div class="flex gap-3">
                                {{-- MODIFIKASI: Mengisi value otomatis menggunakan old atau data asli dari database --}}
                                <input type="text" name="pertanyaan" value="{{ old('pertanyaan', $soal->pertanyaan) }}"
                                    placeholder="Masukkan soal ..."
                                    class="flex-1 border border-gray-200 rounded-xl px-4 py-3 text-sm bg-[#F8F9FA]/50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition placeholder-gray-400 text-gray-800"
                                    required>
                                <button type="button"
                                    class="p-3 bg-[#E3F2FD] text-[#1976D2] border border-[#BBDEFB] rounded-xl hover:bg-[#BBDEFB] transition flex items-center justify-center">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="4" y1="21" x2="4" y2="14"></line>
                                        <line x1="4" y1="10" x2="4" y2="3"></line>
                                        <line x1="12" y1="21" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12" y2="3"></line>
                                        <line x1="20" y1="21" x2="20" y2="16"></line>
                                        <line x1="20" y1="12" x2="20" y2="3"></line>
                                        <line x1="1" y1="14" x2="7" y2="14"></line>
                                        <line x1="9" y1="8" x2="15" y2="8"></line>
                                        <line x1="17" y1="16" x2="23" y2="16"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="relative flex py-2 items-center">
                            <span
                                class="flex-shrink pr-3 text-gray-400 text-[11px] font-medium tracking-wide">Pengaturan
                                Lanjutan</span>
                            <div class="flex-grow border-t border-gray-100"></div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-semibold text-gray-700">Komentar Opsional</label>
                            <div
                                class="border border-gray-200 rounded-xl overflow-hidden bg-white shadow-sm transition">
                                <div
                                    class="flex items-center justify-between px-3 py-2 bg-white border-b border-gray-100 text-gray-400 text-xs">
                                    <div class="flex items-center space-x-2 select-none">
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition font-bold">B</button>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition italic font-serif">I</button>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition underline">U</button>
                                        <span class="text-gray-200 border-r h-3.5 mx-1"></span>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition text-[11px]">H1</button>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition text-[11px]">H2</button>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition text-[11px]">H3</button>
                                        <span class="text-gray-200 border-r h-3.5 mx-1"></span>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition">
                                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2">
                                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition">
                                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2">
                                                <line x1="10" y1="6" x2="21" y2="6"></line>
                                                <line x1="10" y1="12" x2="21" y2="12"></line>
                                                <line x1="10" y1="18" x2="21" y2="18"></line>
                                                <path
                                                    d="M4 6H3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1z">
                                                </path>
                                            </svg>
                                        </button>
                                        <span class="text-gray-200 border-r h-3.5 mx-1"></span>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                            </path>
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                            </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition">
                                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2">
                                                <rect x="3" y="3" width="18" height="18" rx="2"
                                                    ry="2"></rect>
                                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                <polyline points="21 15 16 10 5 21"></polyline>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition">
                                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2">
                                                <rect x="3" y="3" width="18" height="18" rx="2"
                                                    ry="2"></rect>
                                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                            </svg>
                                        </button>
                                    </div>
                                    <button type="button"
                                        class="p-1 hover:text-gray-700 hover:bg-gray-50 rounded transition">
                                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <polyline points="15 3 21 3 21 9"></polyline>
                                            <polyline points="9 21 3 21 3 15"></polyline>
                                            <line x1="21" y1="3" x2="14" y2="10"></line>
                                            <line x1="3" y1="21" x2="10" y2="14"></line>
                                        </svg>
                                    </button>
                                </div>
                                {{-- MODIFIKASI: Memasukkan data lama komentar opsional jika ada ke dalam textarea --}}
                                <textarea name="optional_feedback" placeholder="Type here..." rows="12"
                                    class="w-full p-4 text-xs bg-white border-none resize-none placeholder-gray-400 text-gray-600 focus:outline-none focus:ring-0 focus:border-transparent shadow-none">{{ old('optional_feedback', $soal->optional_feedback ?? '') }}</textarea>
                            </div>
                            <span class="text-[11px] text-gray-400 block text-left">0 / 5000 characters</span>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-semibold text-gray-700">Kesulitan</label>
                            <div class="relative">
                                <select name="tingkat_kesulitan"
                                    class="w-full border border-gray-200 bg-white rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 appearance-none text-gray-600 cursor-pointer"
                                    required>
                                    <option value="">Pilih opsi kesulitan ...</option>
                                    {{-- MODIFIKASI: Memberi logika selected berdasarkan data tingkat_kesulitan --}}
                                    <option value="1" {{ old('tingkat_kesulitan', $soal->tingkat_kesulitan) == '1' ? 'selected' : '' }}>Mudah</option>
                                    <option value="2" {{ old('tingkat_kesulitan', $soal->tingkat_kesulitan) == '2' ? 'selected' : '' }}>Sedang</option>
                                    <option value="3" {{ old('tingkat_kesulitan', $soal->tingkat_kesulitan) == '3' ? 'selected' : '' }}>Sangat Sulit</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-semibold text-gray-700">Kategori</label>
                            <div class="relative">
                                <select name="kategori"
                                    class="w-full border border-gray-200 bg-white rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 appearance-none text-gray-600 cursor-pointer">
                                    <option value="">Pilih kategori ...</option>
                                    {{-- MODIFIKASI: Memberi logika selected berdasarkan data kategori --}}
                                    <option value="Umum" {{ old('kategori', $soal->kategori) == 'Umum' ? 'selected' : '' }}>Umum</option>
                                    <option value="Sains" {{ old('kategori', $soal->kategori) == 'Sains' ? 'selected' : '' }}>Sains</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3 pt-4">
                            <div class="relative flex py-2 items-center">
                                <span
                                    class="flex-shrink pr-3 text-gray-400 text-[11px] font-medium tracking-wide">Jawaban</span>
                                <div class="flex-grow border-t border-gray-100"></div>
                            </div>

                            <div class="border border-[#E4E7EC] rounded-2xl overflow-hidden bg-white">

                                <div class="grid grid-cols-12 h-[60px] px-4 bg-[#F5FAFF] border-b border-[#E4E7EC]">
                                    <div class="col-span-1 flex items-center justify-center text-[14px] font-medium text-[#2E90FA]">
                                        Benar
                                    </div>
                                    <div class="col-span-5 flex items-center px-2 text-[14px] font-medium text-[#2E90FA]">
                                        Jawaban
                                    </div>
                                    <div class="col-span-4 flex items-center px-2 text-[14px] font-medium text-[#2E90FA]">
                                        Komentar
                                    </div>
                                    <div class="col-span-1 flex items-center justify-center text-[14px] font-medium text-[#2E90FA]">
                                        Nilai
                                    </div>
                                    <div class="col-span-1 flex items-center justify-center text-[14px] font-medium text-[#2E90FA]">
                                        Aksi
                                    </div>
                                </div>

                                <div class="divide-y divide-gray-100 bg-white">

                                    {{-- ROW OPSI A --}}
                                    <div class="grid grid-cols-12 items-center py-3.5 px-4 group">
                                        <div class="col-span-1 flex items-center justify-center space-x-2">
                                            <svg class="w-3.5 h-3.5 text-gray-300 cursor-grab active:cursor-grabbing"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <circle cx="9" cy="5" r="1.5" />
                                                <circle cx="9" cy="12" r="1.5" />
                                                <circle cx="9" cy="19" r="1.5" />
                                                <circle cx="15" cy="5" r="1.5" />
                                                <circle cx="15" cy="12" r="1.5" />
                                                <circle cx="15" cy="19" r="1.5" />
                                            </svg>
                                            {{-- MODIFIKASI: Memasukkan logika checked dari data jawaban_benar awal --}}
                                            <input type="radio" name="jawaban_benar" value="A"
                                                {{ old('jawaban_benar', $soal->jawaban_benar) == 'A' ? 'checked' : '' }}
                                                class="text-blue-600 focus:ring-blue-500/20 w-4 h-4 border-gray-300 cursor-pointer">
                                        </div>
                                        <div class="col-span-5 px-2">
                                            {{-- MODIFIKASI: Mengisi value opsi_a dari data lama --}}
                                            <input type="text" name="opsi_a" value="{{ old('opsi_a', $soal->opsi_a) }}"
                                                placeholder="Opsi A"
                                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition placeholder-gray-300 text-gray-700"
                                                required>
                                        </div>
                                        <div class="col-span-4 px-2">
                                            {{-- MODIFIKASI: Mengisi value komentar_a jika ada --}}
                                            <input type="text" name="komentar_a" value="{{ old('komentar_a', $soal->komentar_a ?? '') }}"
                                                placeholder="Komentar opsional opsi A"
                                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition placeholder-gray-300 text-gray-700">
                                        </div>
                                        <div class="col-span-1 flex justify-center">
                                            {{-- MODIFIKASI: Mengisi value nilai_a. Jika jawaban_benar == A maka tampilkan nilai asli, jika tidak default ke data lama/5 --}}
                                            <input type="number" name="nilai_a" value="{{ old('nilai_a', $soal->jawaban_benar == 'A' ? $soal->nilai : 5) }}"
                                                class="w-14 border border-gray-200 rounded-xl py-2.5 text-center text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition text-gray-600 font-medium">
                                        </div>
                                        <div class="col-span-1 flex justify-center">
                                            <button type="button"
                                                class="text-red-500 hover:text-red-700 transition-colors duration-150">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- ROW OPSI B --}}
                                    <div class="grid grid-cols-12 items-center py-3.5 px-4 group">
                                        <div class="col-span-1 flex items-center justify-center space-x-2">
                                            <svg class="w-3.5 h-3.5 text-gray-300 cursor-grab active:cursor-grabbing"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <circle cx="9" cy="5" r="1.5" />
                                                <circle cx="9" cy="12" r="1.5" />
                                                <circle cx="9" cy="19" r="1.5" />
                                                <circle cx="15" cy="5" r="1.5" />
                                                <circle cx="15" cy="12" r="1.5" />
                                                <circle cx="15" cy="19" r="1.5" />
                                            </svg>
                                            {{-- MODIFIKASI: Memasukkan logika checked dari data jawaban_benar awal --}}
                                            <input type="radio" name="jawaban_benar" value="B"
                                                {{ old('jawaban_benar', $soal->jawaban_benar) == 'B' ? 'checked' : '' }}
                                                class="text-blue-600 focus:ring-blue-500/20 w-4 h-4 border-gray-300 cursor-pointer">
                                        </div>
                                        <div class="col-span-5 px-2">
                                            {{-- MODIFIKASI: Mengisi value opsi_b dari data lama --}}
                                            <input type="text" name="opsi_b" value="{{ old('opsi_b', $soal->opsi_b) }}"
                                                placeholder="Opsi B"
                                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition placeholder-gray-300 text-gray-700"
                                                required>
                                        </div>
                                        <div class="col-span-4 px-2">
                                            {{-- MODIFIKASI: Mengisi value komentar_b jika ada --}}
                                            <input type="text" name="komentar_b" value="{{ old('komentar_b', $soal->komentar_b ?? '') }}"
                                                placeholder="Komentar opsional opsi B"
                                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition placeholder-gray-300 text-gray-700">
                                        </div>
                                        <div class="col-span-1 flex justify-center">
                                            {{-- MODIFIKASI: Mengisi value nilai_b. Jika jawaban_benar == B maka tampilkan nilai asli, jika tidak default ke data lama/-1 --}}
                                            <input type="number" name="nilai_b" value="{{ old('nilai_b', $soal->jawaban_benar == 'B' ? $soal->nilai : -1) }}"
                                                class="w-14 border border-gray-200 rounded-xl py-2.5 text-center text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition text-gray-600 font-medium">
                                        </div>
                                        <div class="col-span-1 flex justify-center">
                                            <button type="button"
                                                class="text-red-500 hover:text-red-700 transition-colors duration-150">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- ROW OPSI C --}}
                                    <div class="grid grid-cols-12 items-center py-3.5 px-4 group">
                                        <div class="col-span-1 flex items-center justify-center space-x-2">
                                            <svg class="w-3.5 h-3.5 text-gray-300 cursor-grab active:cursor-grabbing"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <circle cx="9" cy="5" r="1.5" />
                                                <circle cx="9" cy="12" r="1.5" />
                                                <circle cx="9" cy="19" r="1.5" />
                                                <circle cx="15" cy="5" r="1.5" />
                                                <circle cx="15" cy="12" r="1.5" />
                                                <circle cx="15" cy="19" r="1.5" />
                                            </svg>
                                            {{-- MODIFIKASI: Memasukkan logika checked dari data jawaban_benar awal --}}
                                            <input type="radio" name="jawaban_benar" value="C"
                                                {{ old('jawaban_benar', $soal->jawaban_benar) == 'C' ? 'checked' : '' }}
                                                class="text-blue-600 focus:ring-blue-500/20 w-4 h-4 border-gray-300 cursor-pointer">
                                        </div>
                                        <div class="col-span-5 px-2">
                                            {{-- MODIFIKASI: Mengisi value opsi_c dari data lama --}}
                                            <input type="text" name="opsi_c" value="{{ old('opsi_c', $soal->opsi_c) }}"
                                                placeholder="Opsi C"
                                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition placeholder-gray-300 text-gray-700"
                                                required>
                                        </div>
                                        <div class="col-span-4 px-2">
                                            {{-- MODIFIKASI: Mengisi value komentar_c jika ada --}}
                                            <input type="text" name="komentar_c" value="{{ old('komentar_c', $soal->komentar_c ?? '') }}"
                                                placeholder="Komentar opsional opsi C"
                                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition placeholder-gray-300 text-gray-700">
                                        </div>
                                        <div class="col-span-1 flex justify-center">
                                            {{-- MODIFIKASI: Mengisi value nilai_c. Jika jawaban_benar == C maka tampilkan nilai asli, jika tidak default ke data lama/-1 --}}
                                            <input type="number" name="nilai_c" value="{{ old('nilai_c', $soal->jawaban_benar == 'C' ? $soal->nilai : -1) }}"
                                                class="w-14 border border-gray-200 rounded-xl py-2.5 text-center text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition text-gray-600 font-medium">
                                        </div>
                                        <div class="col-span-1 flex justify-center">
                                            <button type="button"
                                                class="text-red-500 hover:text-red-700 transition-colors duration-150">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- ROW OPSI D --}}
                                    <div class="grid grid-cols-12 items-center py-3.5 px-4 group">
                                        <div class="col-span-1 flex items-center justify-center space-x-2">
                                            <svg class="w-3.5 h-3.5 text-gray-300 cursor-grab active:cursor-grabbing"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <circle cx="9" cy="5" r="1.5" />
                                                <circle cx="9" cy="12" r="1.5" />
                                                <circle cx="9" cy="19" r="1.5" />
                                                <circle cx="15" cy="5" r="1.5" />
                                                <circle cx="15" cy="12" r="1.5" />
                                                <circle cx="15" cy="19" r="1.5" />
                                            </svg>
                                            {{-- MODIFIKASI: Memasukkan logika checked dari data jawaban_benar awal --}}
                                            <input type="radio" name="jawaban_benar" value="D"
                                                {{ old('jawaban_benar', $soal->jawaban_benar) == 'D' ? 'checked' : '' }}
                                                class="text-blue-600 focus:ring-blue-500/20 w-4 h-4 border-gray-300 cursor-pointer">
                                        </div>
                                        <div class="col-span-5 px-2">
                                            {{-- MODIFIKASI: Mengisi value opsi_d dari data lama --}}
                                            <input type="text" name="opsi_d" value="{{ old('opsi_d', $soal->opsi_d) }}"
                                                placeholder="Opsi D"
                                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition placeholder-gray-300 text-gray-700"
                                                required>
                                        </div>
                                        <div class="col-span-4 px-2">
                                            {{-- MODIFIKASI: Mengisi value komentar_d jika ada --}}
                                            <input type="text" name="komentar_d" value="{{ old('komentar_d', $soal->komentar_d ?? '') }}"
                                                placeholder="Komentar opsional opsi D"
                                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition placeholder-gray-300 text-gray-700">
                                        </div>
                                        <div class="col-span-1 flex justify-center">
                                            {{-- MODIFIKASI: Mengisi value nilai_d. Jika jawaban_benar == D maka tampilkan nilai asli, jika tidak default ke data lama/-1 --}}
                                            <input type="number" name="nilai_d" value="{{ old('nilai_d', $soal->jawaban_benar == 'D' ? $soal->nilai : -1) }}"
                                                class="w-14 border border-gray-200 rounded-xl py-2.5 text-center text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition text-gray-600 font-medium">
                                        </div>
                                        <div class="col-span-1 flex justify-center">
                                            <button type="button"
                                                class="text-red-500 hover:text-red-700 transition-colors duration-150">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button type="button"
                                class="text-[#0284C7] font-semibold flex items-center space-x-2 hover:text-sky-700 transition text-xs py-1.5 pl-1">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.5">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>Tambah Opsi Jawaban</span>
                            </button>
                        </div>

                        <div class="pt-4 flex justify-start">
                            {{-- MODIFIKASI: Mengubah nama tombol aksi menjadi Simpan Perubahan Soal --}}
                            <button type="submit"
                                class="px-5 py-2.5 bg-[#0074D9] hover:bg-blue-700 text-white font-semibold rounded-xl text-xs flex items-center gap-2 shadow-sm transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                                Simpan Perubahan Soal
                            </button>
                        </div>

                    </form>
                </main>
            </div>

            <footer
                class="border-t border-[#e2e8f0] px-8 py-4 flex flex-col sm:flex-row justify-between items-center gap-2 w-full m-0 bg-transparent flex-shrink-0">
                <div class="flex flex-col sm:flex-row items-center gap-[10px] w-full sm:w-auto">
                    <a href="{{ route('dashboard') }}" class="flex items-center justify-center">
                        <img src="{{ asset('images/Logo.svg') }}" alt="Smart Exam"
                            class="w-[54px] h-[32px] object-contain">
                    </a>
                    <span
                        class="text-[#64748b] font-normal text-[12px] leading-[18px] tracking-[0px] text-center block w-full sm:w-auto">
                        &copy; 2026 Smart Exam | All rights reserved.
                    </span>
                </div>
                <div
                    class="flex space-x-4 mt-2 sm:mt-0 text-[12px] leading-[18px] font-normal tracking-[0px] text-[#475569]">
                    <a href="#" class="hover:text-blue-600 transition text-center">Cara Kerja</a>
                    <a href="#" class="hover:text-blue-600 transition text-center">Pusat Bantuan</a>
                    <a href="#" class="hover:text-blue-600 transition text-center">Hubungi Kami</a>
                </div>
            </footer>
        </div>

    </div>
</x-app-layout>
