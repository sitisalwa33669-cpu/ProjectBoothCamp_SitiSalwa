<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - Kedai Senja</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        .bg-grid-pattern {
            background-color: #fef3c7;
            background-image:
                linear-gradient(
                    to right,
                    rgba(15, 23, 42, 0.06) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    to bottom,
                    rgba(15, 23, 42, 0.06) 1px,
                    transparent 1px
                );
            background-size: 30px 30px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body class="bg-grid-pattern min-h-screen font-sans antialiased flex flex-col justify-center py-10 sm:px-6 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-md px-4">

        <!-- ========================= -->
        <!-- HEADER BRAND KEDAI SENJA -->
        <!-- ========================= -->
        <div class="text-center mb-8">

            <!-- Logo -->
            <div class="w-20 h-20 bg-amber-300 border-4 border-slate-900 rounded-3xl
                        flex items-center justify-center
                        shadow-[5px_5px_0px_0px_#0f172a]
                        mx-auto mb-5">

                <i
                    data-lucide="coffee"
                    class="w-10 h-10 text-slate-900 stroke-[2.5]">
                </i>

            </div>

            <!-- Brand -->
            <h1 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Kedai Senja
            </h1>

            <p class="text-sm font-bold text-slate-600 mt-2">
                Admin Dashboard
            </p>

            <p class="text-xs font-semibold text-slate-500 mt-1">
                Kelola website Kedai Senja dengan mudah
            </p>

        </div>


        <!-- ========================= -->
        <!-- FORM LOGIN -->
        <!-- ========================= -->
        <div class="bg-white border-4 border-slate-900 rounded-3xl
                    p-6 sm:p-8
                    shadow-[8px_8px_0px_0px_#0f172a]">

            <form
                action="{{ route('login.post') }}"
                method="POST"
                class="space-y-6">

                @csrf


                <!-- ========================= -->
                <!-- ERROR MESSAGE -->
                <!-- ========================= -->
                @if($errors->any())

                    <div class="bg-rose-200
                                border-2 border-slate-900
                                p-4 rounded-xl
                                flex items-start gap-3
                                shadow-[2px_2px_0px_0px_#0f172a]">

                        <i
                            data-lucide="alert-triangle"
                            class="w-5 h-5 text-rose-800 shrink-0 mt-0.5">
                        </i>

                        <div>
                            <p class="text-sm font-black text-rose-900">
                                Login Gagal
                            </p>

                            <p class="text-xs font-bold text-rose-800 mt-1">
                                {{ $errors->first() }}
                            </p>
                        </div>

                    </div>

                @endif


                <!-- ========================= -->
                <!-- EMAIL -->
                <!-- ========================= -->
                <div class="space-y-2">

                    <label
                        for="email"
                        class="block text-sm font-extrabold text-slate-900">

                        Email Admin

                    </label>

                    <div class="relative">

                        <i
                            data-lucide="mail"
                            class="absolute left-4 top-1/2 -translate-y-1/2
                                   w-5 h-5 text-slate-500">
                        </i>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="admin@kedaisenja.com"
                            required
                            autofocus

                            class="w-full pl-12 pr-4 py-3
                                   bg-slate-50
                                   border-2 border-slate-900
                                   rounded-xl
                                   focus:outline-none
                                   focus:ring-4
                                   focus:ring-amber-400/30
                                   focus:border-amber-500
                                   font-medium
                                   text-slate-900
                                   transition-all
                                   placeholder:text-slate-400">

                    </div>

                </div>


                <!-- ========================= -->
                <!-- PASSWORD -->
                <!-- ========================= -->
                <div class="space-y-2">

                    <label
                        for="password"
                        class="block text-sm font-extrabold text-slate-900">

                        Kata Sandi

                    </label>

                    <div class="relative">

                        <i
                            data-lucide="lock"
                            class="absolute left-4 top-1/2 -translate-y-1/2
                                   w-5 h-5 text-slate-500">
                        </i>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan kata sandi"
                            required

                            class="w-full pl-12 pr-4 py-3
                                   bg-slate-50
                                   border-2 border-slate-900
                                   rounded-xl
                                   focus:outline-none
                                   focus:ring-4
                                   focus:ring-amber-400/30
                                   focus:border-amber-500
                                   font-medium
                                   text-slate-900
                                   transition-all
                                   placeholder:text-slate-400">

                    </div>

                </div>


                <!-- ========================= -->
                <!-- LOGIN BUTTON -->
                <!-- ========================= -->
                <div class="pt-2">

                    <button
                        type="submit"

                        class="w-full
                               bg-amber-300
                               hover:bg-amber-400
                               text-slate-950
                               font-extrabold
                               py-3.5
                               rounded-xl
                               border-2 border-slate-900
                               shadow-[4px_4px_0px_0px_#0f172a]
                               hover:translate-x-1
                               hover:translate-y-1
                               hover:shadow-none
                               transition-all
                               flex items-center justify-center gap-2">

                        <i
                            data-lucide="log-in"
                            class="w-5 h-5 stroke-[2.5]">
                        </i>

                        Masuk ke Dashboard

                    </button>

                </div>

            </form>

        </div>


        <!-- ========================= -->
        <!-- FOOTER LOGIN -->
        <!-- ========================= -->
        <div class="text-center mt-6">

            <p class="text-xs font-bold text-slate-500">
                &copy; {{ date('Y') }} Kedai Senja
            </p>

            <p class="text-[11px] font-semibold text-slate-400 mt-1">
                Admin Area
            </p>

        </div>

    </div>


    <!-- Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

</body>
</html>