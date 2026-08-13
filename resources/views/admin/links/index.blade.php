@extends('layouts.app')

@section('title', 'Kelola Link - Kedai Senja')

@section('content')

<div class="space-y-6 sm:space-y-8">

    <!-- ========================================== -->
    <!-- HEADER -->
    <!-- ========================================== -->

    <div
        class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-6 bg-[#fdf9f4] p-5 sm:p-6 rounded-2xl border-2 border-[#3f2a1d] shadow-[4px_4px_0px_0px_#3f2a1d]">

        <div>

            <div class="flex items-center gap-3">

                <div
                    class="w-11 h-11 bg-[#d4b08c] border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center shadow-[2px_2px_0px_0px_#3f2a1d]">

                    <i data-lucide="coffee"
                        class="w-5 h-5 text-[#3f2a1d]">
                    </i>

                </div>

                <div>

                    <h1 class="text-xl sm:text-2xl font-black text-[#3f2a1d] tracking-tight">
                        Kelola Link Kedai
                    </h1>

                    <p class="text-xs sm:text-sm font-semibold text-[#8b6a50] mt-1">
                        Atur menu, WhatsApp, GoFood, GrabFood, Instagram, dan lokasi Kedai Senja.
                    </p>

                </div>

            </div>

        </div>


        <!-- BUTTON TAMBAH -->

        <a href="{{ route('admin.links.create') }}"
            class="w-full sm:w-auto bg-[#6f4e37] hover:bg-[#5b3d2a] text-white font-extrabold py-3 px-6 rounded-xl border-2 border-[#3f2a1d] shadow-[3px_3px_0px_0px_#3f2a1d] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all flex items-center justify-center gap-2">

            <i data-lucide="plus"
                class="w-5 h-5">
            </i>

            Tambah Link

        </a>

    </div>



    <!-- ========================================== -->
    <!-- RINGKASAN -->
    <!-- ========================================== -->

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

        <!-- Total Link -->

        <div
            class="bg-[#fdf9f4] border-2 border-[#3f2a1d] rounded-2xl p-4 shadow-[3px_3px_0px_0px_#3f2a1d]">

            <div class="flex items-center justify-between mb-3">

                <div
                    class="w-10 h-10 bg-[#ead8c4] rounded-xl border-2 border-[#3f2a1d] flex items-center justify-center">

                    <i data-lucide="link"
                        class="w-5 h-5">
                    </i>

                </div>

            </div>

            <p class="text-2xl font-black text-[#3f2a1d]">
                {{ $links->count() }}
            </p>

            <p class="text-xs font-bold text-[#8b6a50] mt-1">
                Link di Halaman
            </p>

        </div>


        <!-- Link Aktif -->

        <div
            class="bg-[#fdf9f4] border-2 border-[#3f2a1d] rounded-2xl p-4 shadow-[3px_3px_0px_0px_#3f2a1d]">

            <div class="flex items-center justify-between mb-3">

                <div
                    class="w-10 h-10 bg-emerald-100 rounded-xl border-2 border-emerald-300 flex items-center justify-center">

                    <i data-lucide="eye"
                        class="w-5 h-5 text-emerald-700">
                    </i>

                </div>

            </div>

            <p class="text-2xl font-black text-[#3f2a1d]">
                {{ $links->where('is_active', true)->count() }}
            </p>

            <p class="text-xs font-bold text-[#8b6a50] mt-1">
                Link Aktif
            </p>

        </div>


        <!-- Total Klik -->

        <div
            class="bg-[#fdf9f4] border-2 border-[#3f2a1d] rounded-2xl p-4 shadow-[3px_3px_0px_0px_#3f2a1d]">

            <div class="flex items-center justify-between mb-3">

                <div
                    class="w-10 h-10 bg-blue-100 rounded-xl border-2 border-blue-300 flex items-center justify-center">

                    <i data-lucide="mouse-pointer-click"
                        class="w-5 h-5 text-blue-700">
                    </i>

                </div>

            </div>

            <p class="text-2xl font-black text-[#3f2a1d]">
                {{ number_format($links->sum('clicks')) }}
            </p>

            <p class="text-xs font-bold text-[#8b6a50] mt-1">
                Total Klik
            </p>

        </div>


        <!-- Status -->

        <div
            class="bg-[#fdf9f4] border-2 border-[#3f2a1d] rounded-2xl p-4 shadow-[3px_3px_0px_0px_#3f2a1d]">

            <div class="flex items-center justify-between mb-3">

                <div
                    class="w-10 h-10 bg-[#d4b08c] rounded-xl border-2 border-[#3f2a1d] flex items-center justify-center">

                    <i data-lucide="store"
                        class="w-5 h-5 text-[#3f2a1d]">
                    </i>

                </div>

            </div>

            <p class="text-sm font-black text-[#3f2a1d]">
                Kedai Senja
            </p>

            <p class="text-xs font-bold text-[#8b6a50] mt-1">
                Microsite Aktif
            </p>

        </div>

    </div>



    <!-- ========================================== -->
    <!-- DATA TABLE -->
    <!-- ========================================== -->

    <div
        class="bg-[#fdf9f4] rounded-3xl border-2 border-[#3f2a1d] shadow-[6px_6px_0px_0px_#3f2a1d] overflow-hidden flex flex-col">


        <!-- HEADER TABLE -->

        <div
            class="hidden lg:grid grid-cols-12 gap-4 bg-[#ead8c4] text-[#3f2a1d] px-6 py-4 border-b-2 border-[#3f2a1d] text-xs font-black uppercase tracking-wider">

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



        <!-- BODY -->

        <div class="divide-y-2 divide-[#3f2a1d] bg-white">

            @forelse($links as $link)

                <div
                    class="flex flex-col lg:grid lg:grid-cols-12 gap-4 items-start lg:items-center p-5 hover:bg-[#faf3ea] transition-colors group">


                    <!-- ========================== -->
                    <!-- JUDUL -->
                    <!-- ========================== -->

                    <div class="lg:col-span-5 flex items-center space-x-4 w-full">


                        @if($link->image)

                            <img
                                src="{{ asset('storage/' . $link->image) }}"
                                alt="{{ $link->title }}"
                                class="flex-shrink-0 h-12 w-12 object-cover border-2 border-[#3f2a1d] rounded-xl shadow-[2px_2px_0px_0px_#3f2a1d]">

                        @else

                            <div
                                class="flex-shrink-0 h-12 w-12 bg-[#ead8c4] text-[#3f2a1d] font-black border-2 border-[#3f2a1d] flex items-center justify-center rounded-xl shadow-[2px_2px_0px_0px_#3f2a1d]">

                                {{ strtoupper(substr($link->title,0,2)) }}

                            </div>

                        @endif


                        <div class="overflow-hidden">

                            <div
                                class="text-base font-black text-[#3f2a1d] group-hover:text-[#6f4e37] transition-colors truncate">

                                {{ $link->title }}

                            </div>

                            <div class="text-xs font-semibold text-[#8b6a50] truncate mt-1">

                                {{ $link->url }}

                            </div>

                        </div>

                    </div>



                    <!-- MOBILE STATUS + KLIK -->

                    <div class="flex flex-row lg:contents w-full gap-4">


                        <!-- STATUS -->

                        <div class="lg:col-span-2 flex flex-col flex-1">

                            <span class="text-[10px] font-bold text-[#b59a83] uppercase lg:hidden mb-1">
                                Status
                            </span>

                            @if($link->is_active)

                                <span
                                    class="px-3 py-1 inline-flex text-xs font-black rounded-lg bg-emerald-200 text-emerald-900 border-2 border-[#3f2a1d] items-center gap-1.5 w-fit">

                                    <span class="w-2 h-2 bg-emerald-600 rounded-full"></span>

                                    Aktif

                                </span>

                            @else

                                <span
                                    class="px-3 py-1 inline-flex text-xs font-black rounded-lg bg-rose-200 text-rose-900 border-2 border-[#3f2a1d] items-center gap-1.5 w-fit">

                                    <span class="w-2 h-2 bg-rose-600 rounded-full"></span>

                                    Nonaktif

                                </span>

                            @endif

                        </div>



                        <!-- KLIK -->

                        <div class="lg:col-span-3 flex flex-col flex-1">

                            <span class="text-[10px] font-bold text-[#b59a83] uppercase lg:hidden mb-1">
                                Klik
                            </span>

                            <div
                                class="inline-flex items-center px-3 py-1 rounded-lg bg-[#f5efe6] border-2 border-[#d4b08c] text-xs font-black text-[#3f2a1d] w-fit">

                                <i data-lucide="mouse-pointer-click"
                                    class="w-3.5 h-3.5 mr-1.5 text-blue-600">
                                </i>

                                {{ number_format($link->clicks) }}

                            </div>

                        </div>

                    </div>



                    <!-- AKSI -->

                    <div
                        class="lg:col-span-2 flex items-center justify-start lg:justify-end gap-2 w-full pt-3 border-t-2 border-dashed border-[#ead8c4] lg:border-none">


                        <!-- EDIT -->

                        <a href="{{ route('admin.links.edit', $link->id) }}"
                            class="flex-1 lg:flex-none text-center px-4 py-2 bg-[#e8d3bc] text-[#3f2a1d] rounded-xl border-2 border-[#3f2a1d] shadow-[2px_2px_0px_0px_#3f2a1d] hover:bg-[#d9bea0] text-xs font-black transition-all">

                            Edit

                        </a>


                        <!-- DELETE -->

                        <form
                            action="{{ route('admin.links.destroy', $link->id) }}"
                            method="POST"
                            class="flex-1 lg:flex-none m-0"
                            onsubmit="return confirm('Yakin ingin menghapus link ini?');">

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="w-full text-center px-4 py-2 bg-rose-200 text-[#3f2a1d] rounded-xl border-2 border-[#3f2a1d] shadow-[2px_2px_0px_0px_#3f2a1d] hover:bg-rose-300 text-xs font-black transition-all">

                                Hapus

                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <!-- EMPTY -->

                <div class="px-6 py-16 text-center">

                    <div
                        class="flex flex-col items-center justify-center max-w-sm mx-auto p-6 bg-[#f5efe6] rounded-2xl border-2 border-dashed border-[#cdb89f]">

                        <div
                            class="bg-[#ead8c4] p-4 rounded-2xl border-2 border-[#3f2a1d] shadow-[2px_2px_0px_0px_#3f2a1d] mb-4">

                            <i data-lucide="coffee"
                                class="w-7 h-7 text-[#3f2a1d]">
                            </i>

                        </div>

                        <p class="text-lg font-black text-[#3f2a1d]">
                            Belum Ada Link
                        </p>

                        <p class="text-xs font-semibold text-[#8b6a50] mt-2 leading-relaxed">
                            Tambahkan menu, WhatsApp, GoFood, GrabFood,
                            Instagram, atau lokasi Kedai Senja.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>



        <!-- PAGINATION -->

        @if($links->hasPages())

            <div
                class="bg-[#ead8c4] border-t-2 border-[#3f2a1d] px-6 py-4">

                {{ $links->links('vendor.pagination.custom') }}

            </div>

        @endif

    </div>

</div>

@endsection