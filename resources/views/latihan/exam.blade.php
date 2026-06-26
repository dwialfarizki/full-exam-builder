<x-app-layout>
    <div class="flex min-h-screen bg-gray-50 text-gray-700 font-sans">
        {{-- Sidebar --}}
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

        {{-- Main Content Area --}}
        {{-- PERBAIKAN 1: Menghapus px-8 dari container utama agar footer bisa menyentuh ujung --}}
        <div class="flex-1 flex flex-col min-w-0 bg-[#F7F8FA] pt-4 min-h-screen justify-between">

            {{-- PERBAIKAN 2: Bungkus Header & Main ke dalam div baru yang menampung padding px-8 --}}
            <div class="px-8 w-full flex-1">
                {{-- Breadcrumb --}}
                <header class="pl-3 pb-2 flex-shrink-0">
                    <div class="flex items-center gap-4 h-10 text-[13px] text-[#98A2B3]">
                        <svg class="w-3.5 h-3.5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>

                        <span>Pengelolaan Mata Kuliah</span>
                        <span>&rsaquo;</span>

                        <span>Katalog Mata Kuliah</span>
                        <span>&rsaquo;</span>

                        <span>Mata Kuliah</span>
                        <span>&rsaquo;</span>

                        <a href="{{ route('dashboard') }}"
                            class="hover:underline hover:text-blue-600 transition-colors cursor-pointer">Latihan</a>
                        <span>&rsaquo;</span>

                        <span class="text-blue-600 font-medium">Exam</span>
                    </div>
                </header>

                {{-- Main Exam Card --}}
                <main
                    class="w-full bg-white rounded-[20px] border border-gray-200 px-7 py-5 shadow-sm mb-8 flex-shrink-0">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-xl font-bold text-gray-900">Exam</h1>
                        <button type="button" class="text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </button>
                    </div>

                    <div
                        class="bg-sky-50 text-sky-700 text-xs py-2.5 px-4 rounded-lg mb-6 border border-sky-100 font-medium">
                        {{ $totalSoal }} soal, dengan total nilai (untuk semua soal) sebesar {{ $totalNilai }}.
                    </div>

                    @php
                        $tipeSoal = [
                            1 => 'Pilihan Ganda<br>(Jawaban Unik)',
                            7 => 'Jawaban Bebas',
                            26 => 'Ambil Soal Dari<br>Latihan Lain',
                        ];
                    @endphp

                    <div
                        class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-9 gap-3 mb-8 text-center text-[10px] text-gray-500 font-medium tracking-tight">
                        @foreach ($tipeSoal as $index => $label)
                            @if ($index == 1)
                                <a href="{{ route('latihan.exam.create_pilihan_ganda', $latihan->id) }}"
                                    class="flex flex-col items-center justify-between p-2.5 bg-white hover:bg-gray-50 rounded-xl transition border border-gray-100 hover:border-gray-200 shadow-sm h-[100px] cursor-pointer">
                                    <div class="flex-1 flex items-center justify-center">
                                        <img src="{{ asset('images/' . $index . '.svg') }}"
                                            alt="{!! strip_tags($label) !!}" class="w-10 h-10 object-contain">
                                    </div>
                                    <span class="leading-tight text-gray-600 block mt-1">{!! $label !!}</span>
                                </a>
                            @elseif ($index == 7)
                                <a href="#"
                                    class="flex flex-col items-center justify-between p-2.5 bg-white hover:bg-gray-50 rounded-xl transition border border-gray-100 hover:border-gray-200 shadow-sm h-[100px] cursor-pointer">
                                    <div class="flex-1 flex items-center justify-center">
                                        <img src="{{ asset('images/' . $index . '.svg') }}"
                                            alt="{!! strip_tags($label) !!}" class="w-10 h-10 object-contain">
                                    </div>
                                    <span class="leading-tight text-gray-600 block mt-1">{!! $label !!}</span>
                                </a>
                            @else
                                <a href="#"
                                    class="flex flex-col items-center justify-between p-2.5 bg-white hover:bg-gray-50 rounded-xl transition border border-gray-100 hover:border-gray-200 shadow-sm h-[100px] cursor-pointer">
                                    <div class="flex-1 flex items-center justify-center">
                                        <img src="{{ asset('images/' . $index . '.svg') }}"
                                            alt="{!! strip_tags($label) !!}" class="w-10 h-10 object-contain">
                                    </div>
                                    <span class="leading-tight text-gray-600 block mt-1">{!! $label !!}</span>
                                </a>
                            @endif
                        @endforeach
                    </div>

                    {{-- Table Area --}}
                    <div class="overflow-visible bg-white border border-[#E4E7EC] rounded-2xl shadow-sm">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="h-[60px] bg-[#F5FAFF] border-b border-[#E4E7EC]">
                                    <th class="w-12"></th>

                                    <th class="w-[367px] px-4 text-left text-sm font-medium text-[#2E90FA]">
                                        Soal
                                    </th>

                                    <th class="w-[100px] text-left text-sm font-medium text-[#2E90FA]">
                                        Tipe
                                    </th>

                                    <th class="w-[200px] text-left text-sm font-medium text-[#2E90FA]">
                                        Kategori
                                    </th>

                                    <th class="w-[100px] text-center text-sm font-medium text-[#2E90FA]">
                                        Kesulitan
                                    </th>

                                    <th class="w-[100px] text-center text-sm font-medium text-[#2E90FA]">
                                        Nilai
                                    </th>

                                    <th class="w-[75px] text-center text-sm font-medium text-[#2E90FA]">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-[#EAECF0]" x-data="{ openDropdown: null }">
                                @forelse ($latihan->soals as $index => $soal)
                                    <tr class="h-[88px] border-b border-[#EAECF0]">

                                        {{-- Drag Handle --}}
                                        <td class="text-center align-middle">
                                            <svg class="w-4 h-4 mx-auto text-[#D0D5DD]" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="9" cy="5" r="1"></circle>
                                                <circle cx="9" cy="12" r="1"></circle>
                                                <circle cx="9" cy="19" r="1"></circle>
                                                <circle cx="15" cy="5" r="1"></circle>
                                                <circle cx="15" cy="12" r="1"></circle>
                                                <circle cx="15" cy="19" r="1"></circle>
                                            </svg>
                                        </td>

                                        {{-- Soal --}}
                                        <td class="w-[367px] px-4 align-middle">
                                            <div class="line-clamp-2 text-[14px] font-normal text-[#344054] leading-5">
                                                {!! strip_tags($soal->pertanyaan) !!}
                                            </div>
                                        </td>

                                        {{-- Tipe --}}
                                        <td class="w-[100px] align-middle">
                                            @php
                                                $iconFile = '1.svg';

                                                if (in_array($soal->tipe, [1, '1', 'Pilihan Ganda'])) {
                                                    $iconFile = '1.svg';
                                                } elseif (in_array($soal->tipe, [7, '7', 'Jawaban Bebas'])) {
                                                    $iconFile = '7.svg';
                                                } elseif (in_array($soal->tipe, [26, '26', 'Ambil Soal'])) {
                                                    $iconFile = '26.svg';
                                                }
                                            @endphp

                                            <img src="{{ asset('images/' . $iconFile) }}" alt="Tipe Soal"
                                                class="w-6 h-6 object-contain">
                                        </td>

                                        {{-- Kategori --}}
                                        <td class="w-[200px] align-middle text-[14px] font-normal text-[#667085]">
                                            {{ $soal->kategori ?? '-' }}
                                        </td>

                                        {{-- Kesulitan --}}
                                        <td class="w-[100px] text-center align-middle text-[14px] text-[#475467]">
                                            {{ $soal->tingkat_kesulitan }}
                                        </td>

                                        {{-- Nilai --}}
                                        <td class="w-[100px] text-center align-middle text-[14px] text-[#475467]">
                                            {{ $soal->nilai }}
                                        </td>

                                        {{-- Aksi Dropdown --}}
                                        <td class="w-[75px] text-center align-middle relative"
                                            @click.away="openDropdown = null">
                                            <button
                                                @click.stop="openDropdown = openDropdown === {{ $index }} ? null : {{ $index }}"
                                                class="text-[#008FFB] hover:text-[#0077D9] focus:outline-none p-2 inline-flex items-center justify-center transition-colors">
                                                <svg class="w-4 h-4 mx-auto transition-transform duration-200"
                                                    :class="{ 'rotate-180': openDropdown === {{ $index }} }"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </button>

                                            <div x-show="openDropdown === {{ $index }}"
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="opacity-0 scale-95"
                                                x-transition:enter-end="opacity-100 scale-100"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-start="opacity-100 scale-100"
                                                x-transition:leave-end="opacity-0 scale-95"
                                                class="absolute right-4 top-[55px] w-32 bg-white border border-[#E4E7EC] rounded-xl shadow-xl z-[100] py-1 text-left text-[13px] font-normal"
                                                style="display: none;">

                                                <a href="{{ route('latihan.exam.edit_soal', $soal->id) }}"
                                                    class="flex items-center gap-2.5 px-3.5 py-2 text-[#344054] hover:bg-[#F9FAFB] transition-colors">
                                                    <svg class="w-4 h-4 text-[#008FFB]" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M12 20h9"></path>
                                                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path>
                                                    </svg>
                                                    <span>Ubah</span>
                                                </a>

                                                <a href="#"
                                                    class="flex items-center gap-2.5 px-3.5 py-2 text-[#344054] hover:bg-[#F9FAFB] transition-colors">
                                                    <svg class="w-4 h-4 text-[#008FFB]" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="14" height="14" x="8" y="8"
                                                            rx="2" ry="2"></rect>
                                                        <path
                                                            d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2">
                                                        </path>
                                                    </svg>
                                                    <span>Salin</span>
                                                </a>

                                                <hr class="border-[#F2F4F7] my-0.5">

                                                {{-- PERUBAHAN DI SINI: Mengubah tag <a> menjadi <form> --}}
                                                <form action="{{ route('latihan.exam.destroy', $soal->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus soal ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="w-full flex items-center gap-2.5 px-3.5 py-2 text-[#D92D20] hover:bg-[#FEF3F2] transition-colors text-left font-normal">
                                                        <svg class="w-4 h-4 text-[#D92D20]" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M3 6h18"></path>
                                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        </svg>
                                                        <span>Hapus</span>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="py-10 text-center text-sm text-[#98A2B3]">
                                            Belum ada soal ujian di dalam latihan ini.
                                            Silakan klik tipe pertanyaan di atas untuk menambahkan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>

            {{-- PERBAIKAN 3: Footer sekarang di luar div padding, jadi bisa loss menempel ke aside dan kanan layar --}}
            {{-- Ditambahkan juga px-8 di dalam footer agar konten teks di dalam footernya tetap sejajar rapi dengan isi card --}}
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
