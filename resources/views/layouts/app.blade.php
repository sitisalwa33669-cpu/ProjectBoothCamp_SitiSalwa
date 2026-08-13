<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'KopiKita Admin - Dashboard')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .bg-kopi-pattern {
            background-color: #f8f5ef;
            background-image:
                linear-gradient(
                    to right,
                    rgba(68, 44, 30, 0.045) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    to bottom,
                    rgba(68, 44, 30, 0.045) 1px,
                    transparent 1px
                );
            background-size: 28px 28px;
        }

        .coffee-gradient {
            background: linear-gradient(
                135deg,
                #3f2417 0%,
                #5b321f 50%,
                #2c1810 100%
            );
        }
    </style>
</head>

<body
    class="bg-kopi-pattern text-stone-900 antialiased min-h-screen flex flex-col overflow-x-hidden selection:bg-amber-300 selection:text-stone-900">

    <!-- ========================================= -->
    <!-- NAVBAR ADMIN -->
    <!-- ========================================= -->

    <nav
        class="coffee-gradient text-white shadow-xl sticky top-0 z-50 border-b-4 border-stone-950">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-center justify-between min-h-16 sm:min-h-20 gap-3">

                <!-- BRAND -->
                <div class="flex items-center space-x-2 sm:space-x-3 min-w-0">

                    <div
                        class="bg-amber-300 text-stone-950 p-2 sm:p-2.5 rounded-xl sm:rounded-2xl border-2 border-stone-950 shadow-[3px_3px_0px_0px_#0c0a09] shrink-0">

                        <i
                            data-lucide="coffee"
                            class="w-5 h-5 sm:w-6 sm:h-6 stroke-[2.5]">
                        </i>

                    </div>

                    <div class="flex flex-col min-w-0">

                        <span
                            class="font-black text-lg sm:text-xl tracking-tight truncate">
                            KopiKita
                        </span>

                        <span
                            class="hidden sm:block text-[10px] text-amber-200 font-bold uppercase tracking-widest leading-none mt-0.5">
                            Admin Dashboard
                        </span>

                    </div>

                </div>


                <!-- NAVIGATION -->
                <div class="flex items-center gap-1.5 sm:gap-3">

                    <!-- Dashboard -->
                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="text-amber-100 hover:text-white hover:bg-white/10 transition-all duration-200 p-2 sm:px-4 sm:py-2.5 rounded-lg sm:rounded-xl text-sm font-bold flex items-center gap-2">

                        <i
                            data-lucide="layout-dashboard"
                            class="w-5 h-5 sm:w-4 sm:h-4 stroke-[2.5]">
                        </i>

                        <span class="hidden md:inline">
                            Dashboard
                        </span>

                    </a>


                    <!-- Kelola Link -->
                    <a
                        href="{{ route('admin.links.index') }}"
                        class="text-amber-100 hover:text-white hover:bg-white/10 transition-all duration-200 p-2 sm:px-4 sm:py-2.5 rounded-lg sm:rounded-xl text-sm font-bold flex items-center gap-2">

                        <i
                            data-lucide="link-2"
                            class="w-5 h-5 sm:w-4 sm:h-4 stroke-[2.5]">
                        </i>

                        <span class="hidden md:inline">
                            Kelola Menu
                        </span>

                    </a>


                    <!-- Preview Public -->
                    <a
                        href="/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-amber-300 hover:bg-amber-200 text-stone-950 font-black px-3 py-2 sm:px-5 sm:py-2.5 rounded-lg sm:rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1.5 sm:gap-2 shadow-[3px_3px_0px_0px_#0c0a09] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none border-2 border-stone-950">

                        <span class="hidden sm:inline">
                            Lihat Microsite
                        </span>

                        <span class="sm:hidden">
                            Preview
                        </span>

                        <i
                            data-lucide="external-link"
                            class="w-4 h-4 stroke-[2.5]">
                        </i>

                    </a>


                    <!-- LOGOUT -->
                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                        class="m-0">

                        @csrf

                        <button
                            type="submit"
                            class="bg-rose-200 hover:bg-rose-300 text-stone-950 font-black text-xs sm:text-sm px-3 py-2 sm:px-5 sm:py-2.5 rounded-lg sm:rounded-xl border-2 border-stone-950 shadow-[3px_3px_0px_0px_#0c0a09] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all flex items-center gap-1.5 sm:gap-2">

                            <i
                                data-lucide="log-out"
                                class="w-4 h-4 stroke-[2.5]">
                            </i>

                            <span class="hidden sm:inline">
                                Keluar
                            </span>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </nav>


    <!-- ========================================= -->
    <!-- MAIN CONTENT -->
    <!-- ========================================= -->

    <main
        class="max-w-7xl mx-auto py-6 sm:py-10 px-4 sm:px-6 lg:px-8 flex-grow w-full">

        <!-- SUCCESS MESSAGE -->

        @if(session('success'))

            <div
                class="mb-6 p-4 sm:p-5 bg-emerald-200 text-emerald-950 font-extrabold rounded-2xl border-2 border-stone-950 shadow-[4px_4px_0px_0px_#0c0a09] flex items-start gap-3">

                <div
                    class="bg-emerald-300 border-2 border-stone-950 rounded-xl p-2 shrink-0">

                    <i
                        data-lucide="check-circle-2"
                        class="w-5 h-5 text-stone-950 stroke-[2.5]">
                    </i>

                </div>

                <div>

                    <p class="text-xs uppercase tracking-widest font-black text-emerald-800">
                        Berhasil
                    </p>

                    <p class="text-sm sm:text-base mt-0.5">
                        {{ session('success') }}
                    </p>

                </div>

            </div>

        @endif


        <!-- ERROR MESSAGE -->

        @if($errors->any())

            <div
                class="mb-6 p-4 sm:p-5 bg-rose-200 text-rose-950 font-extrabold rounded-2xl border-2 border-stone-950 shadow-[4px_4px_0px_0px_#0c0a09] flex items-start gap-3">

                <div
                    class="bg-rose-300 border-2 border-stone-950 rounded-xl p-2 shrink-0">

                    <i
                        data-lucide="alert-triangle"
                        class="w-5 h-5 text-stone-950 stroke-[2.5]">
                    </i>

                </div>

                <div>

                    <p class="text-xs uppercase tracking-widest font-black text-rose-800">
                        Terjadi Kesalahan
                    </p>

                    <ul class="text-sm mt-1 space-y-1">

                        @foreach($errors->all() as $error)

                            <li>
                                • {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        @endif


        <!-- PAGE CONTENT -->

        @yield('content')

    </main>


    <!-- ========================================= -->
    <!-- FOOTER -->
    <!-- ========================================= -->

    <footer
        class="coffee-gradient text-white border-t-4 border-stone-950 py-7 px-4 mt-auto">

        <div
            class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3">

            <div class="flex items-center gap-2">

                <div
                    class="bg-amber-300 text-stone-950 p-2 rounded-lg border-2 border-stone-950">

                    <i
                        data-lucide="coffee"
                        class="w-4 h-4 stroke-[2.5]">
                    </i>

                </div>

                <div>

                    <p class="font-black text-sm">
                        KopiKita Coffee
                    </p>

                    <p class="text-[10px] text-amber-200 font-semibold">
                        Admin Management System
                    </p>

                </div>

            </div>


            <p class="text-xs font-semibold text-stone-300 text-center">

                &copy; {{ date('Y') }}
                KopiKita Coffee
                •
                Microsite Management

            </p>

        </div>

    </footer>


    <!-- ========================================= -->
    <!-- LUCIDE -->
    <!-- ========================================= -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            lucide.createIcons();
        });
    </script>

</body>

</html>