<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard - BioLink')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Font: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        ::selection {
            background-color: #93c5fd;
            color: #172554;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #0f172a;
            border-radius: 999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #1e293b;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col overflow-x-hidden">

    <!-- ========================================================= -->
    <!-- NAVBAR -->
    <!-- ========================================================= -->

    <nav class="bg-gradient-to-r from-slate-950 via-blue-950 to-indigo-950 text-white sticky top-0 z-50 border-b-2 border-slate-900 shadow-xl">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-center justify-between min-h-16 sm:min-h-20 gap-3">

                <!-- ================================================= -->
                <!-- LOGO -->
                <!-- ================================================= -->

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-2.5 sm:gap-3 shrink-0 group"
                >

                    <div class="bg-blue-400 text-slate-950 p-2 sm:p-2.5 rounded-xl sm:rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_0px_#0f172a] group-hover:bg-blue-300 transition-all">
                        <i
                            data-lucide="link"
                            class="w-5 h-5 sm:w-6 sm:h-6 stroke-[2.5]"
                        ></i>
                    </div>

                    <div class="flex flex-col">

                        <span class="font-black text-lg sm:text-xl tracking-tight leading-none">
                            BioLink
                        </span>

                        <span class="hidden sm:block text-[9px] text-blue-200 font-bold uppercase tracking-[0.18em] mt-1">
                            Dashboard Panel
                        </span>

                    </div>

                </a>


                <!-- ================================================= -->
                <!-- NAVIGATION -->
                <!-- ================================================= -->

                <div class="flex items-center gap-1.5 sm:gap-2">

                    <!-- Dashboard -->
                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="text-blue-100 hover:text-white hover:bg-white/10 p-2 sm:px-4 sm:py-2.5 rounded-xl text-sm font-bold flex items-center gap-2 transition-all"
                    >
                        <i
                            data-lucide="layout-dashboard"
                            class="w-5 h-5 sm:w-4 sm:h-4 stroke-[2.5]"
                        ></i>

                        <span class="hidden md:inline">
                            Dashboard
                        </span>
                    </a>


                    <!-- Manage Links -->
                    <a
                        href="{{ route('admin.links.index') }}"
                        class="text-blue-100 hover:text-white hover:bg-white/10 p-2 sm:px-4 sm:py-2.5 rounded-xl text-sm font-bold flex items-center gap-2 transition-all"
                    >
                        <i
                            data-lucide="link-2"
                            class="w-5 h-5 sm:w-4 sm:h-4 stroke-[2.5]"
                        ></i>

                        <span class="hidden md:inline">
                            Kelola Link
                        </span>
                    </a>


                    <!-- Preview Public -->
                    <a
                        href="{{ url('/') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-blue-400 hover:bg-blue-300 text-slate-950 font-black px-3 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm transition-all flex items-center gap-1.5 sm:gap-2 border-2 border-slate-900 shadow-[3px_3px_0px_0px_#0f172a] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none"
                    >
                        <span class="hidden sm:inline">
                            Preview Public
                        </span>

                        <span class="sm:hidden">
                            Preview
                        </span>

                        <i
                            data-lucide="external-link"
                            class="w-4 h-4 stroke-[2.5]"
                        ></i>
                    </a>


                    <!-- ================================================= -->
                    <!-- LOGOUT -->
                    <!-- ================================================= -->

                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                        class="m-0"
                    >
                        @csrf

                        <button
                            type="submit"
                            onclick="return confirm('Apakah Anda yakin ingin keluar dari dashboard?')"
                            class="bg-rose-200 hover:bg-rose-300 text-slate-900 font-black text-xs sm:text-sm px-3 py-2 sm:px-5 sm:py-2.5 rounded-xl border-2 border-slate-900 shadow-[3px_3px_0px_0px_#0f172a] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all flex items-center gap-1.5 sm:gap-2"
                        >

                            <i
                                data-lucide="log-out"
                                class="w-4 h-4 stroke-[2.5]"
                            ></i>

                            <span class="hidden sm:inline">
                                Keluar
                            </span>

                        </button>
                    </form>

                </div>

            </div>

        </div>

    </nav>


    <!-- ========================================================= -->
    <!-- MAIN CONTENT -->
    <!-- ========================================================= -->

    <main class="max-w-7xl mx-auto py-6 sm:py-8 lg:py-10 px-4 sm:px-6 lg:px-8 flex-grow w-full">

        <!-- ===================================================== -->
        <!-- SUCCESS MESSAGE -->
        <!-- ===================================================== -->

        @if(session('success'))

            <div
                id="success-alert"
                class="mb-6 p-4 sm:p-5 bg-emerald-200 text-emerald-950 font-extrabold rounded-2xl border-2 border-slate-900 shadow-[4px_4px_0px_0px_#0f172a] flex items-start sm:items-center gap-3"
            >

                <div class="bg-emerald-300 border-2 border-slate-900 rounded-xl p-1.5 shrink-0">

                    <i
                        data-lucide="check"
                        class="w-5 h-5 text-emerald-950 stroke-[3]"
                    ></i>

                </div>

                <div class="flex-1">

                    <p class="text-xs uppercase tracking-wider font-black text-emerald-800">
                        Berhasil
                    </p>

                    <p class="text-sm sm:text-base mt-0.5">
                        {{ session('success') }}
                    </p>

                </div>

                <button
                    type="button"
                    onclick="document.getElementById('success-alert').remove()"
                    class="p-1.5 hover:bg-emerald-300 rounded-lg transition-colors shrink-0"
                    aria-label="Tutup notifikasi"
                >

                    <i
                        data-lucide="x"
                        class="w-5 h-5 stroke-[2.5]"
                    ></i>

                </button>

            </div>

        @endif


        <!-- ===================================================== -->
        <!-- ERROR MESSAGE -->
        <!-- ===================================================== -->

        @if(session('error'))

            <div
                id="error-alert"
                class="mb-6 p-4 sm:p-5 bg-rose-200 text-rose-950 font-extrabold rounded-2xl border-2 border-slate-900 shadow-[4px_4px_0px_0px_#0f172a] flex items-start sm:items-center gap-3"
            >

                <div class="bg-rose-300 border-2 border-slate-900 rounded-xl p-1.5 shrink-0">

                    <i
                        data-lucide="circle-alert"
                        class="w-5 h-5 text-rose-950 stroke-[3]"
                    ></i>

                </div>

                <div class="flex-1">

                    <p class="text-xs uppercase tracking-wider font-black text-rose-800">
                        Terjadi Kesalahan
                    </p>

                    <p class="text-sm sm:text-base mt-0.5">
                        {{ session('error') }}
                    </p>

                </div>

                <button
                    type="button"
                    onclick="document.getElementById('error-alert').remove()"
                    class="p-1.5 hover:bg-rose-300 rounded-lg transition-colors shrink-0"
                    aria-label="Tutup notifikasi"
                >

                    <i
                        data-lucide="x"
                        class="w-5 h-5 stroke-[2.5]"
                    ></i>

                </button>

            </div>

        @endif


        <!-- ===================================================== -->
        <!-- VALIDATION ERRORS -->
        <!-- ===================================================== -->

        @if($errors->any())

            <div
                id="validation-alert"
                class="mb-6 p-4 sm:p-5 bg-rose-200 text-rose-950 rounded-2xl border-2 border-slate-900 shadow-[4px_4px_0px_0px_#0f172a]"
            >

                <div class="flex items-start gap-3">

                    <div class="bg-rose-300 border-2 border-slate-900 rounded-xl p-1.5 shrink-0">

                        <i
                            data-lucide="alert-triangle"
                            class="w-5 h-5 stroke-[2.5]"
                        ></i>

                    </div>

                    <div class="flex-1">

                        <p class="text-sm font-black">
                            Periksa kembali data yang dimasukkan.
                        </p>

                        <ul class="mt-2 space-y-1">

                            @foreach($errors->all() as $error)

                                <li class="text-xs sm:text-sm font-bold flex items-start gap-2">
                                    <span>•</span>
                                    <span>{{ $error }}</span>
                                </li>

                            @endforeach

                        </ul>

                    </div>

                    <button
                        type="button"
                        onclick="document.getElementById('validation-alert').remove()"
                        class="p-1.5 hover:bg-rose-300 rounded-lg transition-colors shrink-0"
                        aria-label="Tutup notifikasi"
                    >

                        <i
                            data-lucide="x"
                            class="w-5 h-5 stroke-[2.5]"
                        ></i>

                    </button>

                </div>

            </div>

        @endif


        <!-- ===================================================== -->
        <!-- PAGE CONTENT -->
        <!-- ===================================================== -->

        @yield('content')

    </main>


    <!-- ========================================================= -->
    <!-- FOOTER -->
    <!-- ========================================================= -->

    <footer class="bg-white border-t-2 border-slate-900 mt-auto">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="py-5 sm:py-6 flex flex-col sm:flex-row items-center justify-between gap-2 text-center sm:text-left">

                <p class="text-xs sm:text-sm font-bold text-slate-500">
                    &copy; {{ date('Y') }} BioLink Admin Dashboard
                </p>

                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                    Laravel 12 • Bio Link Application
                </p>

            </div>

        </div>

    </footer>


    <!-- ========================================================= -->
    <!-- LUCIDE INITIALIZATION -->
    <!-- ========================================================= -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // Auto hide success message
            const successAlert = document.getElementById('success-alert');

            if (successAlert) {
                setTimeout(() => {
                    successAlert.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    successAlert.style.opacity = '0';
                    successAlert.style.transform = 'translateY(-8px)';

                    setTimeout(() => {
                        successAlert.remove();
                    }, 400);

                }, 4000);
            }

        });
    </script>


    @stack('scripts')

</body>
</html>