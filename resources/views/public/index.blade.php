<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Kedai Senja | Coffee & Food</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #f5efe6;
        }

        .bg-coffee-pattern {
            background-color: #f5efe6;
            background-image:
                radial-gradient(rgba(91, 60, 38, 0.08) 1px, transparent 1px);
            background-size: 22px 22px;
        }

        .coffee-shadow {
            box-shadow: 5px 5px 0px 0px #3f2a1d;
        }

        .button-shadow {
            box-shadow: 4px 4px 0px 0px #3f2a1d;
        }

        .button-shadow:active {
            transform: translate(3px, 3px);
            box-shadow: 1px 1px 0px 0px #3f2a1d;
        }
    </style>
</head>

<body class="bg-coffee-pattern min-h-screen font-sans antialiased text-[#3f2a1d] pb-20">

    <main class="max-w-md mx-auto pt-10 px-4 flex flex-col items-center relative">

        <!-- ============================= -->
        <!-- PROFILE -->
        <!-- ============================= -->

        <div class="relative mb-5">

            <!-- Decorative circle -->
            <div class="absolute -inset-2 rounded-full border-2 border-dashed border-[#9a6b45]"></div>

            <div
                class="w-28 h-28 rounded-full border-4 border-[#3f2a1d] overflow-hidden coffee-shadow bg-[#ead8c4]">

                <!--
                    GANTI URL GAMBAR DI BAWAH DENGAN LOGO/FOTO KEDAI KAMU
                -->
                <img src="https://ui-avatars.com/api/?name=Kedai+Senja&background=6f4e37&color=fff&size=300"
                    alt="Logo Kedai Senja"
                    class="w-full h-full object-cover">

            </div>

            <!-- Status -->
            <div
                class="absolute -bottom-2 -right-3 bg-emerald-200 border-2 border-[#3f2a1d] px-3 py-1 rounded-full text-[10px] font-black">
                OPEN TODAY
            </div>

        </div>


        <!-- ============================= -->
        <!-- NAME -->
        <!-- ============================= -->

        <h1 class="text-2xl font-black mb-1 text-center tracking-tight">
            Kedai Senja
        </h1>

        <p class="text-sm font-bold text-[#7a5940] text-center">
            Coffee • Food • Good Vibes
        </p>


        <!-- ============================= -->
        <!-- BIO -->
        <!-- ============================= -->

        <p class="text-center text-sm font-bold px-5 mt-3 mb-5 leading-relaxed">
            Tempat ngopi dan nongkrong santai dengan
            kopi pilihan, makanan lezat, dan suasana nyaman.
        </p>


        <!-- ============================= -->
        <!-- LOCATION / OPENING -->
        <!-- ============================= -->

        <div class="flex items-center justify-center gap-2 mb-6">

            <div
                class="flex items-center gap-2 bg-white border-2 border-[#3f2a1d] rounded-full px-4 py-2 button-shadow">

                <i data-lucide="map-pin"
                    class="w-4 h-4 text-rose-600">
                </i>

                <span class="text-xs font-black">
                    Sukabumi, Jawa Barat
                </span>

            </div>

        </div>


        <!-- ============================= -->
        <!-- SOCIAL MEDIA -->
        <!-- ============================= -->

        <div class="flex items-center gap-4 mb-8">

            <!-- Instagram -->
            <a href="#"
                class="p-3 bg-white rounded-full border-2 border-[#3f2a1d] button-shadow hover:-translate-y-1 transition-transform"
                aria-label="Instagram">

                <i data-lucide="instagram"
                    class="w-5 h-5">
                </i>

            </a>


            <!-- Facebook -->
            <a href="#"
                class="p-3 bg-white rounded-full border-2 border-[#3f2a1d] button-shadow hover:-translate-y-1 transition-transform"
                aria-label="Facebook">

                <i data-lucide="facebook"
                    class="w-5 h-5">
                </i>

            </a>


            <!-- WhatsApp -->
            <a href="#"
                class="p-3 bg-white rounded-full border-2 border-[#3f2a1d] button-shadow hover:-translate-y-1 transition-transform"
                aria-label="WhatsApp">

                <i data-lucide="message-circle"
                    class="w-5 h-5">
                </i>

            </a>

        </div>


        <!-- ============================= -->
        <!-- CONTACT / ORDER BUTTON -->
        <!-- ============================= -->

        <div class="w-full space-y-4">


            <!-- Contact -->
            <button onclick="openModal()"
                class="w-full relative group">

                <div
                    class="absolute inset-0 bg-[#3f2a1d] rounded-3xl translate-y-1.5 translate-x-1.5">
                </div>

                <div
                    class="relative w-full bg-[#e8d3bc] border-2 border-[#3f2a1d] rounded-3xl p-4 flex items-center justify-center transition-transform group-active:translate-y-1.5 group-active:translate-x-1.5">

                    <div
                        class="absolute left-4 w-10 h-10 bg-[#d4b08c] border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center">

                        <i data-lucide="phone"
                            class="w-5 h-5">
                        </i>

                    </div>

                    <div class="text-center">

                        <span class="font-black text-[#3f2a1d] text-lg block">
                            Hubungi Kedai
                        </span>

                        <span
                            class="text-xs font-bold text-[#7a5940] flex items-center justify-center gap-1 mt-1">

                            <i data-lucide="coffee"
                                class="w-3 h-3">
                            </i>

                            Reservasi & Informasi

                        </span>

                    </div>

                </div>

            </button>


            <!-- ======================================= -->
            <!-- DATABASE LINKS -->
            <!-- ======================================= -->

            @foreach($links as $link)

                <!--
                    LINK TETAP MENGGUNAKAN DATABASE
                    DAN ENDPOINT TRACKING
                -->

                <a href="{{ route('public.redirect', $link->id) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-full block relative group">

                    <!-- Shadow -->
                    <div
                        class="absolute inset-0 bg-[#3f2a1d] rounded-3xl translate-y-1.5 translate-x-1.5">
                    </div>


                    <!-- Main Button -->
                    <div
                        class="relative w-full bg-white border-2 border-[#3f2a1d] rounded-3xl p-4 flex items-center transition-transform group-active:translate-y-1.5 group-active:translate-x-1.5">


                        <!-- ================================= -->
                        <!-- LINK IMAGE -->
                        <!-- ================================= -->

                        @if($link->image)

                            <img src="{{ asset('storage/' . $link->image) }}"
                                alt="{{ $link->title }}"
                                class="w-11 h-11 object-cover rounded-xl border-2 border-[#3f2a1d] absolute left-4 bg-[#f5efe6]">

                        @else

                            <div
                                class="w-11 h-11 bg-[#ead8c4] border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center absolute left-4">

                                <i data-lucide="coffee"
                                    class="w-5 h-5 text-[#3f2a1d] stroke-[3]">
                                </i>

                            </div>

                        @endif


                        <!-- ================================= -->
                        <!-- LINK TITLE -->
                        <!-- ================================= -->

                        <span
                            class="w-full text-center font-black text-[#3f2a1d] text-base px-14 truncate">

                            {{ $link->title }}

                        </span>


                        <!-- ================================= -->
                        <!-- ARROW -->
                        <!-- ================================= -->

                        <i data-lucide="chevron-right"
                            class="w-5 h-5 text-[#9a6b45] absolute right-4">
                        </i>

                    </div>

                </a>

            @endforeach


        </div>


        <!-- ============================= -->
        <!-- PAGINATION -->
        <!-- ============================= -->

        <div class="mt-6">

            {{ $links->links('vendor.pagination.custom-public') }}

        </div>


        <!-- ============================= -->
        <!-- FOOTER -->
        <!-- ============================= -->

        <div class="mt-8 text-center">

            <div class="flex items-center justify-center gap-2 mb-2">

                <i data-lucide="coffee"
                    class="w-4 h-4">
                </i>

                <span class="font-black text-sm">
                    Kedai Senja
                </span>

            </div>

            <p class="text-[11px] font-bold text-[#8b6a50]">
                Ngopi santai, cerita sampai senja.
            </p>

        </div>

    </main>



    <!-- ================================================= -->
    <!-- CONTACT MODAL -->
    <!-- ================================================= -->

    <div id="contact-modal"
        class="fixed inset-0 z-50 hidden opacity-0 transition-opacity duration-300">


        <!-- Overlay -->
        <div
            class="absolute inset-0 bg-[#3f2a1d]/60 backdrop-blur-sm"
            onclick="closeModal()">
        </div>


        <!-- Modal -->
        <div id="modal-content"
            class="absolute bottom-0 left-0 right-0 bg-[#fdf9f4] border-t-4 border-[#3f2a1d] rounded-t-[2rem] p-6 max-w-md mx-auto h-auto max-h-[85vh] overflow-y-auto pb-10 flex flex-col shadow-[0px_-8px_0px_0px_rgba(63,42,29,0.15)] translate-y-full transition-transform duration-300">


            <!-- Handle -->
            <div
                class="w-12 h-1.5 bg-[#c8aa8d] rounded-full mx-auto mb-6 shrink-0">
            </div>


            <!-- Modal Header -->
            <div class="text-center mb-6">

                <div
                    class="w-16 h-16 mx-auto mb-3 bg-[#e8d3bc] border-2 border-[#3f2a1d] rounded-2xl flex items-center justify-center">

                    <i data-lucide="coffee"
                        class="w-8 h-8">
                    </i>

                </div>

                <h2
                    class="text-sm font-extrabold text-[#9a6b45] uppercase tracking-widest">

                    Contact & Reservasi

                </h2>

                <h3
                    class="text-2xl font-black text-[#3f2a1d] mt-2">

                    Kedai Senja

                </h3>

                <p
                    class="text-xs font-bold text-[#8b6a50] mt-1">

                    Coffee • Food • Good Vibes

                </p>

            </div>



            <!-- ============================= -->
            <!-- CONTACT INFORMATION -->
            <!-- ============================= -->

            <div
                class="bg-[#ead8c4] border-2 border-[#3f2a1d] rounded-2xl p-5 mb-6 space-y-4 coffee-shadow">


                <!-- WhatsApp -->
                <div
                    class="flex items-center gap-3 border-b-2 border-dashed border-[#c7a989] pb-4">

                    <div
                        class="p-2 bg-emerald-200 border-2 border-[#3f2a1d] rounded-lg">

                        <i data-lucide="message-circle"
                            class="w-4 h-4">
                        </i>

                    </div>

                    <div>

                        <p class="text-[10px] font-bold text-[#8b6a50]">
                            WhatsApp
                        </p>

                        <p class="font-extrabold text-sm">
                            +62 812-3456-7890
                        </p>

                    </div>

                </div>



                <!-- Email -->
                <div
                    class="flex items-center gap-3 border-b-2 border-dashed border-[#c7a989] pb-4">

                    <div
                        class="p-2 bg-blue-200 border-2 border-[#3f2a1d] rounded-lg">

                        <i data-lucide="mail"
                            class="w-4 h-4">
                        </i>

                    </div>

                    <div>

                        <p class="text-[10px] font-bold text-[#8b6a50]">
                            Email
                        </p>

                        <p class="font-extrabold text-sm truncate">
                            kedaisenja@gmail.com
                        </p>

                    </div>

                </div>



                <!-- Opening Hours -->
                <div
                    class="flex items-start gap-3">

                    <div
                        class="p-2 bg-amber-200 border-2 border-[#3f2a1d] rounded-lg mt-1">

                        <i data-lucide="clock"
                            class="w-4 h-4">
                        </i>

                    </div>

                    <div>

                        <p class="font-extrabold text-sm">
                            Senin - Minggu
                        </p>

                        <p class="font-bold text-xs text-[#8b6a50] mt-0.5">
                            10:00 - 22:00 WIB
                        </p>

                    </div>

                </div>



                <!-- Address -->
                <div class="flex items-start gap-3">

                    <div
                        class="p-2 bg-rose-200 border-2 border-[#3f2a1d] rounded-lg mt-1">

                        <i data-lucide="map-pin"
                            class="w-4 h-4">
                        </i>

                    </div>

                    <div>

                        <p class="font-extrabold text-sm">
                            Lokasi Kedai
                        </p>

                        <p class="font-bold text-xs text-[#8b6a50] mt-0.5">
                            Sukabumi, Jawa Barat
                        </p>

                    </div>

                </div>

            </div>



            <!-- ============================= -->
            <!-- INFO -->
            <!-- ============================= -->

            <div
                class="bg-amber-100 border-2 border-[#3f2a1d] p-4 rounded-xl flex gap-3 mb-6 button-shadow">

                <i data-lucide="info"
                    class="w-5 h-5 shrink-0 mt-0.5">
                </i>

                <p
                    class="text-[11px] font-bold text-[#5c4635] leading-relaxed">

                    Untuk reservasi meja atau pemesanan dalam jumlah banyak,
                    silakan hubungi kami melalui WhatsApp.

                </p>

            </div>



            <!-- ============================= -->
            <!-- MODAL BUTTON -->
            <!-- ============================= -->

            <div class="mt-auto flex gap-3">


                <!-- WhatsApp -->
                <a href="#"
                    target="_blank"
                    class="flex-1 bg-[#3f2a1d] text-white font-black py-4 rounded-xl text-center hover:bg-[#5b3b28] transition-colors border-2 border-[#3f2a1d]">

                    <span class="flex items-center justify-center gap-2">

                        <i data-lucide="message-circle"
                            class="w-5 h-5">
                        </i>

                        Chat WhatsApp

                    </span>

                </a>


                <!-- Close -->
                <button onclick="closeModal()"
                    class="w-14 h-14 shrink-0 bg-rose-200 border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center shadow-[3px_3px_0px_0px_#3f2a1d] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">

                    <i data-lucide="x"
                        class="w-6 h-6 stroke-[3]">
                    </i>

                </button>

            </div>

        </div>

    </div>



    <!-- ================================================= -->
    <!-- JAVASCRIPT -->
    <!-- ================================================= -->

    <script>

        // Lucide Icons
        lucide.createIcons();


        // Modal
        const modal = document.getElementById('contact-modal');
        const modalContent = document.getElementById('modal-content');


        // Open Modal
        function openModal() {

            modal.classList.remove('hidden');

            requestAnimationFrame(() => {

                modal.classList.remove('opacity-0');

                modalContent.classList.remove('translate-y-full');

            });

            document.body.style.overflow = 'hidden';
        }


        // Close Modal
        function closeModal() {

            modal.classList.add('opacity-0');

            modalContent.classList.add('translate-y-full');


            setTimeout(() => {

                modal.classList.add('hidden');

                document.body.style.overflow = 'auto';

            }, 300);

        }


        // Close modal dengan tombol ESC
        document.addEventListener('keydown', function (event) {

            if (event.key === 'Escape') {

                closeModal();

            }

        });

    </script>

</body>

</html>