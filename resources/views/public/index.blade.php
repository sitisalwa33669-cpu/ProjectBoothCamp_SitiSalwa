@extends('layouts.app')

@section('title', 'Kelola Menu - Kedai Senja')

@section('content')

<div class="space-y-6 sm:space-y-8">

    <!-- ========================= -->
    <!-- HEADER -->
    <!-- ========================= -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-6
                bg-white p-5 sm:p-6
                rounded-2xl sm:rounded-3xl
                border-2 border-[#4A2F20]
                shadow-[4px_4px_0px_0px_#4A2F20]">

        <div class="flex items-center gap-4">

            <!-- Icon -->
            <div class="w-14 h-14 sm:w-16 sm:h-16
                        bg-[#E8C9A8]
                        border-2 border-[#4A2F20]
                        rounded-2xl
                        flex items-center justify-center
                        shadow-[3px_3px_0px_0px_#4A2F20]">

                <i
                    data-lucide="coffee"
                    class="w-7 h-7 sm:w-8 sm:h-8 text-[#4A2F20] stroke-[2.5]">
                </i>

            </div>

            <div>

                <h1 class="text-xl sm:text-2xl font-black text-[#3B2418] tracking-tight">
                    Kelola Menu Kedai Senja
                </h1>

                <p class="text-xs sm:text-sm text-[#8B6245] mt-1 sm:mt-1.5 font-semibold">
                    Atur menu, WhatsApp, GoFood, GrabFood, Instagram, dan lokasi Kedai Senja.
                </p>

            </div>

        </div>


        <!-- ========================= -->
        <!-- TOMBOL TAMBAH MENU -->
        <!-- ========================= -->

        <a
            href="{{ route('admin.links.create') }}"
            class="w-full sm:w-auto
                   bg-[#795538]
                   hover:bg-[#68472F]
                   text-white
                   font-extrabold
                   py-3 sm:py-3.5
                   px-6
                   rounded-xl sm:rounded-2xl
                   border-2 border-[#4A2F20]
                   shadow-[3px_3px_0px_0px_#4A2F20]
                   hover:translate-x-0.5
                   hover:translate-y-0.5
                   hover:shadow-none
                   transition-all
                   flex items-center justify-center gap-2">

            <i
                data-lucide="plus"
                class="w-5 h-5 stroke-[2.5]">
            </i>

            Tambah Menu

        </a>

    </div>


    <!-- ========================= -->
    <!-- SUMMARY CARDS -->
    <!-- ========================= -->

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">


        <!-- Total Menu -->
        <div class="bg-white
                    border-2 border-[#4A2F20]
                    rounded-2xl sm:rounded-3xl
                    p-5 sm:p-6
                    shadow-[4px_4px_0px_0px_#4A2F20]
                    hover:-translate-y-1
                    transition-transform">

            <div class="w-12 h-12
                        bg-[#E8D8C8]
                        border-2 border-[#4A2F20]
                        rounded-xl
                        flex items-center justify-center
                        mb-5">

                <i
                    data-lucide="link"
                    class="w-6 h-6 text-[#4A2F20] stroke-[2.5]">
                </i>

            </div>

            <div class="text-4xl font-black text-[#3B2418]">
                {{ $links->total() }}
            </div>

            <div class="text-sm font-bold text-[#8B6245] mt-1">
                Menu di Halaman
            </div>

        </div>


        <!-- Menu Aktif -->
        <div class="bg-white
                    border-2 border-[#4A2F20]
                    rounded-2xl sm:rounded-3xl
                    p-5 sm:p-6
                    shadow-[4px_4px_0px_0px_#4A2F20]
                    hover:-translate-y-1
                    transition-transform">

            <div class="w-12 h-12
                        bg-emerald-100
                        border-2 border-emerald-300
                        rounded-xl
                        flex items-center justify-center
                        mb-5">

                <i
                    data-lucide="eye"
                    class="w-6 h-6 text-emerald-600 stroke-[2.5]">
                </i>

            </div>

            <div class="text-4xl font-black text-[#3B2418]">

                {{ $links->where('is_active', true)->count() }}

            </div>

            <div class="text-sm font-bold text-[#8B6245] mt-1">
                Menu Aktif
            </div>

        </div>


        <!-- Total Klik -->
        <div class="bg-white
                    border-2 border-[#4A2F20]
                    rounded-2xl sm:rounded-3xl
                    p-5 sm:p-6
                    shadow-[4px_4px_0px_0px_#4A2F20]
                    hover:-translate-y-1
                    transition-transform">

            <div class="w-12 h-12
                        bg-blue-100
                        border-2 border-blue-300
                        rounded-xl
                        flex items-center justify-center
                        mb-5">

                <i
                    data-lucide="mouse-pointer-click"
                    class="w-6 h-6 text-blue-600 stroke-[2.5]">
                </i>

            </div>

            <div class="text-4xl font-black text-[#3B2418]">

                {{ number_format($links->sum('clicks')) }}

            </div>

            <div class="text-sm font-bold text-[#8B6245] mt-1">
                Total Klik
            </div>

        </div>


        <!-- Microsite -->
        <div class="bg-white
                    border-2 border-[#4A2F20]
                    rounded-2xl sm:rounded-3xl
                    p-5 sm:p-6
                    shadow-[4px_4px_0px_0px_#4A2F20]
                    hover:-translate-y-1
                    transition-transform">

            <div class="w-12 h-12
                        bg-[#D9B38C]
                        border-2 border-[#4A2F20]
                        rounded-xl
                        flex items-center justify-center
                        mb-5">

                <i
                    data-lucide="store"
                    class="w-6 h-6 text-[#4A2F20] stroke-[2.5]">
                </i>

            </div>

            <div class="text-xl font-black text-[#3B2418]">
                Kedai Senja
            </div>

            <div class="text-sm font-bold text-[#8B6245] mt-1">
                Microsite Aktif
            </div>

        </div>

    </div>


    <!-- ========================= -->
    <!-- DATA LIST -->
    <!-- ========================= -->

    <div class="bg-white
                rounded-2xl sm:rounded-3xl
                border-2 border-[#4A2F20]
                shadow-[4px_4px_0px_0px_#4A2F20]
                overflow-hidden
                flex flex-col">


        <!-- TABLE HEADER DESKTOP -->

        <div class="hidden lg:grid
                    grid-cols-12
                    gap-4
                    bg-[#E8D8C8]
                    text-[#3B2418]
                    px-6 py-4
                    border-b-2 border-[#4A2F20]
                    text-xs
                    font-black
                    uppercase
                    tracking-wider">

            <div class="col-span-5">
                Menu / Link
            </div>

            <div class="col-span-2">
                Status
            </div>

            <div class="col-span-3">
                Klik
            </div>

            <div class="col-span-2 text-right">
                Aksi
            </div>

        </div>


        <!-- TABLE BODY -->

        <div class="divide-y-2 divide-[#4A2F20] bg-white">

            @forelse($links as $link)

                <div class="flex flex-col
                            lg:grid lg:grid-cols-12
                            gap-4
                            lg:gap-4
                            items-start
                            lg:items-center
                            p-4 sm:p-6
                            hover:bg-[#FFF8F1]
                            transition-colors
                            group">


                    <!-- ========================= -->
                    <!-- MENU / LINK -->
                    <!-- ========================= -->

                    <div class="lg:col-span-5
                                flex items-center
                                space-x-3 sm:space-x-4
                                w-full">

                        <!-- IMAGE / INITIAL -->

                        @if($link->image)

                            <img
                                src="{{ asset('storage/' . $link->image) }}"
                                alt="{{ $link->title }}"
                                class="flex-shrink-0
                                       h-12 w-12 sm:h-14 sm:w-14
                                       object-cover
                                       border-2 border-[#4A2F20]
                                       rounded-xl
                                       shadow-[2px_2px_0px_0px_#4A2F20]">

                        @else

                            <div class="flex-shrink-0
                                        h-12 w-12 sm:h-14 sm:w-14
                                        bg-[#E8D8C8]
                                        text-[#3B2418]
                                        font-black
                                        border-2 border-[#4A2F20]
                                        flex items-center justify-center
                                        rounded-xl
                                        shadow-[2px_2px_0px_0px_#4A2F20]">

                                {{ strtoupper(substr($link->title, 0, 2)) }}

                            </div>

                        @endif


                        <!-- TITLE + URL -->

                        <div class="overflow-hidden">

                            <div class="text-sm sm:text-base
                                        font-extrabold
                                        text-[#3B2418]
                                        group-hover:text-[#795538]
                                        transition-colors
                                        truncate">

                                {{ $link->title }}

                            </div>

                            <div class="text-xs
                                        font-medium
                                        text-[#8B6245]
                                        truncate
                                        mt-0.5">

                                {{ $link->url }}

                            </div>

                        </div>

                    </div>


                    <!-- MOBILE STATUS + KLIK -->

                    <div class="flex flex-row
                                lg:contents
                                w-full
                                gap-4
                                mt-2
                                lg:mt-0">


                        <!-- ========================= -->
                        <!-- STATUS -->
                        <!-- ========================= -->

                        <div class="lg:col-span-2
                                    flex flex-col
                                    lg:flex-row
                                    items-start
                                    lg:items-center
                                    flex-1">

                            <span class="text-[10px]
                                         font-bold
                                         text-slate-400
                                         uppercase
                                         tracking-wider
                                         mb-1
                                         lg:hidden">

                                Status

                            </span>


                            @if($link->is_active)

                                <span class="px-2.5 py-1
                                             inline-flex
                                             text-xs
                                             font-extrabold
                                             rounded-lg
                                             bg-emerald-200
                                             text-emerald-900
                                             border-2 border-[#4A2F20]
                                             shadow-[2px_2px_0px_0px_#4A2F20]
                                             items-center
                                             gap-1.5
                                             whitespace-nowrap">

                                    <span class="w-2 h-2
                                                 bg-emerald-600
                                                 rounded-full
                                                 border border-emerald-800">
                                    </span>

                                    Aktif

                                </span>

                            @else

                                <span class="px-2.5 py-1
                                             inline-flex
                                             text-xs
                                             font-extrabold
                                             rounded-lg
                                             bg-rose-200
                                             text-rose-900
                                             border-2 border-[#4A2F20]
                                             shadow-[2px_2px_0px_0px_#4A2F20]
                                             items-center
                                             gap-1.5
                                             whitespace-nowrap">

                                    <span class="w-2 h-2
                                                 bg-rose-600
                                                 rounded-full
                                                 border border-rose-800">
                                    </span>

                                    Non-Aktif

                                </span>

                            @endif

                        </div>


                        <!-- ========================= -->
                        <!-- TOTAL KLIK -->
                        <!-- ========================= -->

                        <div class="lg:col-span-3
                                    flex flex-col
                                    lg:flex-row
                                    items-start
                                    lg:items-center
                                    flex-1">

                            <span class="text-[10px]
                                         font-bold
                                         text-slate-400
                                         uppercase
                                         tracking-wider
                                         mb-1
                                         lg:hidden">

                                Klik

                            </span>

                            <div class="inline-flex
                                        items-center
                                        px-3 py-1.5
                                        rounded-lg
                                        bg-[#F8EFE6]
                                        border-2 border-[#D6B58F]
                                        text-xs
                                        font-extrabold
                                        text-[#3B2418]
                                        whitespace-nowrap">

                                <i
                                    data-lucide="mouse-pointer-click"
                                    class="w-3.5 h-3.5
                                           mr-1.5
                                           text-blue-600">
                                </i>

                                {{ number_format($link->clicks) }}

                            </div>

                        </div>

                    </div>


                    <!-- ========================= -->
                    <!-- AKSI -->
                    <!-- ========================= -->

                    <div class="lg:col-span-2
                                flex items-center
                                justify-start
                                lg:justify-end
                                space-x-2 sm:space-x-3
                                w-full
                                lg:w-auto
                                mt-2
                                lg:mt-0
                                pt-4
                                lg:pt-0
                                border-t-2
                                border-dashed
                                border-slate-200
                                lg:border-none">


                        <!-- EDIT -->

                        <a
                            href="{{ route('admin.links.edit', $link->id) }}"
                            class="flex-1
                                   lg:flex-none
                                   text-center
                                   px-4 py-2
                                   bg-[#E8D8C8]
                                   text-[#3B2418]
                                   rounded-lg sm:rounded-xl
                                   border-2 border-[#4A2F20]
                                   shadow-[2px_2px_0px_0px_#4A2F20]
                                   hover:bg-[#D9B38C]
                                   text-xs
                                   font-bold
                                   transition-all
                                   hover:translate-x-0.5
                                   hover:translate-y-0.5
                                   hover:shadow-none">

                            Edit

                        </a>


                        <!-- HAPUS -->

                        <form
                            action="{{ route('admin.links.destroy', $link->id) }}"
                            method="POST"
                            class="flex-1 lg:flex-none m-0"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini? Berkas gambar terkait juga akan terhapus secara permanen.');">

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="w-full
                                       text-center
                                       px-4 py-2
                                       bg-rose-200
                                       text-[#3B2418]
                                       rounded-lg sm:rounded-xl
                                       border-2 border-[#4A2F20]
                                       shadow-[2px_2px_0px_0px_#4A2F20]
                                       hover:bg-rose-300
                                       text-xs
                                       font-bold
                                       transition-all
                                       hover:translate-x-0.5
                                       hover:translate-y-0.5
                                       hover:shadow-none">

                                Hapus

                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <!-- ========================= -->
                <!-- EMPTY STATE -->
                <!-- ========================= -->

                <div class="px-6 py-16 text-center">

                    <div class="flex flex-col
                                items-center
                                justify-center
                                max-w-sm
                                mx-auto
                                p-6
                                bg-[#FFF8F1]
                                rounded-2xl
                                border-2
                                border-dashed
                                border-[#A88970]">

                        <div class="bg-[#E8D8C8]
                                    p-3
                                    rounded-2xl
                                    border-2 border-[#4A2F20]
                                    shadow-[2px_2px_0px_0px_#4A2F20]
                                    mb-3
                                    text-[#3B2418]">

                            <i
                                data-lucide="coffee"
                                class="w-7 h-7">
                            </i>

                        </div>

                        <p class="text-base font-black text-[#3B2418]">
                            Belum ada menu.
                        </p>

                        <p class="text-xs text-[#8B6245] mt-1">
                            Silakan tambahkan menu baru untuk mulai menampilkan menu Kedai Senja.
                        </p>

                        <a
                            href="{{ route('admin.links.create') }}"
                            class="mt-5
                                   bg-[#795538]
                                   hover:bg-[#68472F]
                                   text-white
                                   font-extrabold
                                   py-2.5
                                   px-5
                                   rounded-xl
                                   border-2 border-[#4A2F20]
                                   shadow-[3px_3px_0px_0px_#4A2F20]
                                   transition-all">

                            + Tambah Menu

                        </a>

                    </div>

                </div>

            @endforelse

        </div>


        <!-- ========================= -->
        <!-- PAGINATION -->
        <!-- ========================= -->

        @if($links->hasPages())

            <div class="bg-[#FFF8F1]
                        border-t-2 border-[#4A2F20]
                        px-6 py-4">

                {{ $links->links('vendor.pagination.custom') }}

            </div>

        @endif

    </div>

</div>

@endsection