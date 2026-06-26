<x-app-layout>
    <div class="flex min-h-screen bg-gray-50 text-gray-700 font-sans">

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

        <div class="flex-1 flex flex-col min-w-0">
            <main class="flex-1 p-6 max-w-7xl w-full mx-auto space-y-4">

                <div class="flex items-center space-x-2 text-xs text-gray-500 font-medium py-1 pl-3">
                    <a href="#" class="hover:text-gray-700 flex items-center">
                        <x-lucide-home class="w-3.5 h-3.5 text-gray-400 mr-2" />
                        <span class="text-gray-400 font-normal">Pengelolaan Mata Kuliah</span>
                    </a>
                    <x-lucide-chevron-right class="w-3 h-3 text-gray-300" />
                    <a href="#" class="text-gray-400 font-normal hover:text-gray-700">Katalog Mata Kuliah</a>
                    <x-lucide-chevron-right class="w-3 h-3 text-gray-300" />
                    <a href="#" class="text-gray-400 font-normal hover:text-gray-700">Mata Kuliah</a>
                    <x-lucide-chevron-right class="w-3 h-3 text-gray-300" />
                    <span class="text-blue-600 font-semibold">Latihan</span>
                </div>

                <div class="bg-white rounded-2xl border border-gray-200/70 shadow-sm p-8 space-y-6">

                    <div>
                        <h1 class="text-xl font-bold text-gray-800">Latihan</h1>
                        <p class="text-xs text-gray-400 mt-1">Jelajahi berbagai latihan dan soal yang ingin anda kelola
                            hari ini.</p>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                        <a href="{{ route('latihan.create') }}"
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-folder-plus class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Latihan Baru</span>
                        </a>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-file-plus-2 class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Tambah Pertanyaan</span>
                        </button>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-layout-grid class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Kategori Pertanyaan</span>
                        </button>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-database class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Bank Soal</span>
                        </button>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-cloud-upload class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Impor Tes HotPotatoes</span>
                        </button>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-arrow-up-circle class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Impor Latihan Qti2</span>
                        </button>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-upload-cloud class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Impor Kuis Aiken</span>
                        </button>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-file-up class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Impor Kuis dari Excel</span>
                        </button>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-download class="w-5 h-5 text-blue-600 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Ekspor Semua Hasil Tes</span>
                        </button>

                        <button
                            class="flex items-center space-x-3 p-3 bg-white border border-[#E2E4E6] rounded-full shadow-sm hover:shadow-md hover:bg-gray-50 transition text-left">
                            <x-lucide-trash-2 class="w-5 h-5 text-red-500 flex-shrink-0" />
                            <span class="text-xs font-medium text-gray-700">Hapus Semua Hasil Tes</span>
                        </button>
                    </div>

                    <div class="flex flex-col gap-1.5 pt-2">
                        <label class="text-[13px] font-medium text-[#475467]">
                            Nama Latihan
                        </label>

                        <form action="{{ route('latihan.index') }}" method="GET" class="flex gap-3">
                            <input type="text" name="search" placeholder="Masukkan nama latihan"
                                value="{{ request('search') }}"
                                class="w-[380px] h-10 px-4
                                    border border-[#D0D5DD]
                                    rounded-xl
                                    bg-white
                                    text-[14px] text-[#344054]
                                    placeholder:text-[#667085]
                                    focus:outline-none
                                    focus:border-[#2E90FA]
                                    focus:ring-0">
                            <button type="submit"
                                class="h-10 px-5
                                    rounded-xl
                                    bg-[#EAF4FF]
                                    hover:bg-[#DCEEFF]
                                    text-[#2E90FA]
                                    font-medium
                                    text-[14px]
                                    flex items-center gap-2
                                    transition">
                                <x-lucide-search class="w-4 h-4" />
                                <span>Telusuri</span>
                            </button>
                        </form>
                    </div>

                    <div
                        class="flex justify-between items-center text-xs text-gray-400 font-medium border-b border-gray-100 pb-2">
                        <span>List</span>
                        <div class="flex items-center space-x-1 cursor-pointer hover:text-gray-600">
                            <span>Tampilkan {{ $exams->perPage() }} Data</span>
                            <x-lucide-chevron-down class="w-3.5 h-3.5" />
                        </div>
                    </div>

                    <div class="border border-[#E4E7EC] rounded-2xl shadow-sm bg-white">
                        <div
                            class="grid grid-cols-12 h-[60px] px-6 bg-[#F5FAFF] border-b border-[#E4E7EC] rounded-t-2xl">

                            <div class="col-span-1 flex items-center justify-center">
                                <input type="checkbox"
                                    class="w-6 h-6 appearance-none rounded-lg
                                        bg-[#F5FAFF]
                                        border border-[#B8E5EF]
                                        checked:bg-[#2E90FA]
                                        checked:border-[#2E90FA]
                                        cursor-pointer
                                        transition">
                            </div>

                            <div class="col-span-7 flex items-center text-sm font-medium text-[#2E90FA]">
                                Nama Latihan
                            </div>

                            <div
                                class="col-span-2 flex items-center justify-center text-sm font-medium text-[#2E90FA]">
                                Pertanyaan
                            </div>

                            <div
                                class="col-span-2 flex items-center justify-end pr-2 text-sm font-medium text-[#2E90FA]">
                                Aksi
                            </div>

                        </div>

                        <div class="divide-y divide-[#EAECF0] text-[14px] text-[#344054]">

                            @forelse ($exams as $exam)
                                <div class="grid grid-cols-12 px-6 py-4 items-center hover:bg-gray-50/40 transition">
                                    <div class="col-span-1 flex items-center justify-center">
                                        <input type="checkbox" name="selected_exams[]" value="{{ $exam->id }}"
                                            class="w-6 h-6 appearance-none rounded-lg cursor-pointer
                                            bg-[#F5FAFF]
                                            border border-[#B8E5EF]
                                            checked:bg-[#2E90FA]
                                            checked:border-[#2E90FA]
                                            transition-all duration-200">
                                    </div>

                                    <div class="col-span-7">
                                        <a href="{{ route('latihan.exam', $exam->id) }}"
                                            class="text-gray-600 font-semibold hover:underline cursor-pointer">
                                            {{ $exam->nama }}
                                        </a>
                                    </div>

                                    <div class="col-span-2 flex items-center justify-center space-x-1.5 text-gray-500">
                                        <span>{{ $exam->soals_count ?? 0 }}</span>
                                    </div>

                                    <div class="col-span-2 flex justify-end pr-2 relative" x-data="{ open: false }">
                                        <button @click="open = !open" @click.away="open = false"
                                            class="text-sky-500 hover:text-sky-700 p-1 focus:outline-none z-10">
                                            <x-lucide-chevron-down class="w-4 h-4 transition-transform duration-200"
                                                ::class="{ 'rotate-180': open }" />
                                        </button>

                                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                            x-transition:enter-start="transform opacity-0 scale-95"
                                            x-transition:enter-end="transform opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-75"
                                            x-transition:leave-start="transform opacity-100 scale-100"
                                            x-transition:leave-end="transform opacity-0 scale-95"
                                            class="absolute right-0 top-8 w-64 bg-white border border-gray-200 rounded-xl shadow-xl py-1.5 z-50 text-xs text-gray-700 font-normal"
                                            style="display: none;">

                                            <a href="{{ route('latihan.edit', $exam->id) }}"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-pencil class="w-3.5 h-3.5 text-blue-500" />
                                                <span>Sunting</span>
                                            </a>

                                            <a href="#"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-settings class="w-3.5 h-3.5 text-gray-400" />
                                                <span>Setel</span>
                                            </a>

                                            <a href="#"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-bar-chart-2 class="w-3.5 h-3.5 text-gray-400" />
                                                <span>Hasil dan Umpan Balik</span>
                                            </a>

                                            <a href="#"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-copy class="w-3.5 h-3.5 text-gray-400" />
                                                <span>Salin Sebagai Baru</span>
                                            </a>

                                            <a href="#"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-link class="w-3.5 h-3.5 text-gray-400" />
                                                <span>Dapatkan Tautan untuk Disematkan</span>
                                            </a>

                                            <a href="#"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-history class="w-3.5 h-3.5 text-gray-400" />
                                                <span>Hapus Semua Hasil Belajar</span>
                                            </a>

                                            <a href="#"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-eye-off class="w-3.5 h-3.5 text-gray-400" />
                                                <span>Nonaktifkan</span>
                                            </a>

                                            <a href="#"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-database class="w-3.5 h-3.5 text-gray-400" />
                                                <span>IMS/QTI</span>
                                            </a>

                                            <a href="#"
                                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-50 transition text-left">
                                                <x-lucide-mail class="w-3.5 h-3.5 text-gray-400" />
                                                <span>Beritahu Pelanggan Melalui Email</span>
                                            </a>

                                            <hr class="border-gray-100 my-1">

                                            <form action="{{ route('latihan.destroy', $exam->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus paket latihan ini beserta seluruh soal di dalamnya?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="w-full flex items-center space-x-3 px-4 py-2 hover:bg-red-50 text-red-500 transition text-left font-normal">
                                                    <x-lucide-trash-2 class="w-3.5 h-3.5 text-red-500" />
                                                    <span>Hapus Latihan</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="px-6 py-10 text-center text-xs text-gray-400 rounded-b-xl">
                                    Belum ada data latihan yang tersedia atau tidak ditemukan.
                                </div>
                            @endforelse

                        </div>
                    </div>

                    @if ($exams->hasPages() || $exams->total() > 0)
                        <div
                            class="pt-2 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-400 font-medium gap-3">
                            <div>
                                Menampilkan {{ $exams->firstItem() ?? 0 }} s.d. {{ $exams->lastItem() ?? 0 }} dari
                                total {{ $exams->total() }} data
                            </div>
                            <div class="laravel-pagination">
                                {{ $exams->links() }}
                            </div>
                        </div>
                    @endif

                </div>
            </main>

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
