@extends('layouts.app')

@section('title', 'Edit Menu / Link - Kedai Senja')

@section('content')

<div class="max-w-3xl mx-auto space-y-6 sm:space-y-8">

    <!-- ========================================== -->
    <!-- HEADER -->
    <!-- ========================================== -->

    <div
        class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-[#fdf9f4] p-5 sm:p-6 rounded-2xl border-2 border-[#3f2a1d] shadow-[4px_4px_0px_0px_#3f2a1d]">

        <div>

            <div class="flex items-center gap-2.5">

                <a href="{{ route('admin.links.index') }}"
                    class="bg-[#e8d3bc] hover:bg-[#d9bea0] p-2 rounded-lg border-2 border-[#3f2a1d] shadow-[2px_2px_0px_0px_#3f2a1d] transition-all">

                    <i data-lucide="arrow-left"
                        class="w-5 h-5 stroke-[2.5]">
                    </i>

                </a>

                <div>

                    <h1 class="text-xl sm:text-2xl font-black text-[#3f2a1d]">
                        Edit Link
                    </h1>

                    <p class="text-xs sm:text-sm font-bold text-[#8b6a50] mt-1">
                        Perbarui informasi menu atau link Kedai Senja
                    </p>

                </div>

            </div>

        </div>

    </div>



    <!-- ========================================== -->
    <!-- INFO -->
    <!-- ========================================== -->

    <div
        class="bg-[#ead8c4] border-2 border-[#3f2a1d] rounded-2xl p-4 flex gap-3 shadow-[3px_3px_0px_0px_#3f2a1d]">

        <div
            class="w-10 h-10 shrink-0 bg-[#d4b08c] border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center">

            <i data-lucide="pencil"
                class="w-5 h-5 stroke-[2.5]">
            </i>

        </div>

        <div>

            <p class="font-black text-sm text-[#3f2a1d]">
                Edit Informasi Link
            </p>

            <p class="text-xs font-semibold text-[#7a5940] mt-1 leading-relaxed">
                Perubahan yang disimpan akan langsung memperbarui link pada halaman publik.
            </p>

        </div>

    </div>



    <!-- ========================================== -->
    <!-- FORM UTAMA -->
    <!-- ========================================== -->

    <div
        class="bg-[#fdf9f4] rounded-2xl border-2 border-[#3f2a1d] shadow-[4px_4px_0px_0px_#3f2a1d] p-6 sm:p-8">

        <form
            action="{{ route('admin.links.update', $link->id) }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-6">

            @csrf

            @method('PUT')



            <!-- ================================== -->
            <!-- JUDUL LINK -->
            <!-- ================================== -->

            <div class="space-y-2">

                <label
                    for="title"
                    class="block text-sm font-extrabold text-[#3f2a1d]">

                    Nama Menu / Link

                    <span class="text-rose-500">*</span>

                </label>


                <div class="relative">

                    <div
                        class="absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 bg-[#ead8c4] border-2 border-[#3f2a1d] rounded-lg flex items-center justify-center">

                        <i data-lucide="link"
                            class="w-4 h-4 stroke-[2.5]">
                        </i>

                    </div>


                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title', $link->title) }}"
                        placeholder="Contoh: Lihat Menu Kedai"
                        required
                        class="w-full pl-14 pr-4 py-3 bg-white border-2 border-[#3f2a1d] rounded-xl focus:outline-none focus:ring-4 focus:ring-[#c49a6c]/30 font-bold text-[#3f2a1d] placeholder:text-[#b59a83]">

                </div>


                @error('title')

                    <p class="text-xs font-bold text-rose-600 flex items-center gap-1 mt-1">

                        <i data-lucide="circle-alert"
                            class="w-3.5 h-3.5">
                        </i>

                        {{ $message }}

                    </p>

                @enderror

            </div>



            <!-- ================================== -->
            <!-- URL TUJUAN -->
            <!-- ================================== -->

            <div class="space-y-2">

                <label
                    for="url"
                    class="block text-sm font-extrabold text-[#3f2a1d]">

                    URL Tujuan

                    <span class="text-rose-500">*</span>

                </label>


                <div class="relative">

                    <div
                        class="absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 bg-[#e8d3bc] border-2 border-[#3f2a1d] rounded-lg flex items-center justify-center">

                        <i data-lucide="globe"
                            class="w-4 h-4 stroke-[2.5]">
                        </i>

                    </div>


                    <input
                        type="url"
                        id="url"
                        name="url"
                        value="{{ old('url', $link->url) }}"
                        placeholder="https://..."
                        required
                        class="w-full pl-14 pr-4 py-3 bg-white border-2 border-[#3f2a1d] rounded-xl focus:outline-none focus:ring-4 focus:ring-[#c49a6c]/30 font-bold text-[#3f2a1d] placeholder:text-[#b59a83]">

                </div>


                <p class="text-[11px] font-semibold text-[#8b6a50]">
                    Pastikan URL masih aktif dan sesuai dengan menu atau layanan Kedai Senja.
                </p>


                @error('url')

                    <p class="text-xs font-bold text-rose-600 flex items-center gap-1 mt-1">

                        <i data-lucide="circle-alert"
                            class="w-3.5 h-3.5">
                        </i>

                        {{ $message }}

                    </p>

                @enderror

            </div>



            <!-- ================================== -->
            <!-- GAMBAR SAAT INI -->
            <!-- ================================== -->

            <div class="space-y-3">

                <label
                    class="block text-sm font-extrabold text-[#3f2a1d]">

                    Ikon / Foto Menu

                    <span class="text-[#9a7b5c] font-medium">
                        (Opsional)
                    </span>

                </label>


                <!-- CURRENT IMAGE CARD -->

                <div
                    class="p-4 border-2 border-[#cdb89f] border-dashed rounded-xl bg-[#f5efe6]">

                    <div class="flex items-center justify-between gap-4">

                        <div>

                            <p
                                class="text-[10px] font-black text-[#8b6a50] uppercase tracking-wider mb-2">

                                Gambar Saat Ini

                            </p>


                            @if($link->image)

                                <div class="flex items-center gap-3">

                                    <img
                                        src="{{ asset('storage/' . $link->image) }}"
                                        class="h-20 w-20 object-cover border-2 border-[#3f2a1d] rounded-xl shadow-[2px_2px_0px_0px_#3f2a1d]"
                                        alt="Gambar Saat Ini">


                                    <div>

                                        <p class="text-xs font-black text-[#3f2a1d]">
                                            Gambar tersimpan
                                        </p>

                                        <p class="text-[10px] font-semibold text-[#8b6a50] mt-1">
                                            Upload gambar baru di bawah jika ingin menggantinya.
                                        </p>

                                    </div>

                                </div>

                            @else

                                <div
                                    class="inline-flex items-center gap-2 px-3 py-2 bg-white border-2 border-[#cdb89f] rounded-lg text-xs font-bold text-[#8b6a50]">

                                    <i data-lucide="image-off"
                                        class="w-4 h-4">
                                    </i>

                                    Belum Ada Gambar

                                </div>

                            @endif

                        </div>

                    </div>

                </div>



                <!-- ================================= -->
                <!-- DROPZONE GAMBAR BARU -->
                <!-- ================================= -->

                <div
                    id="preview-wrapper"
                    class="relative overflow-hidden rounded-2xl border-2 border-[#3f2a1d] bg-[#f5efe6] transition-colors duration-200">


                    <!-- EMPTY -->

                    <div
                        id="preview-empty"
                        class="flex flex-col items-center justify-center gap-3 py-9 px-6 cursor-pointer hover:bg-[#eee2d2] text-center">

                        <div
                            class="w-14 h-14 rounded-2xl bg-[#d4b08c] border-2 border-[#3f2a1d] flex items-center justify-center shadow-[3px_3px_0px_0px_#3f2a1d]">

                            <i data-lucide="image-plus"
                                class="w-7 h-7 stroke-[2.5]">
                            </i>

                        </div>


                        <div>

                            <p class="text-sm font-extrabold text-[#3f2a1d]">
                                Ganti dengan Gambar Baru?
                            </p>

                            <p class="text-[11px] font-semibold text-[#8b6a50] mt-1">
                                Klik atau seret gambar ke sini
                            </p>

                            <p class="text-[10px] font-medium text-[#a58b72] mt-1">
                                JPG, PNG, WEBP — Maksimal 2MB
                            </p>

                        </div>

                    </div>



                    <!-- FILLED -->

                    <div id="preview-filled" class="hidden">

                        <img
                            id="preview-img"
                            src=""
                            class="w-full max-h-72 object-contain bg-[#f5efe6]"
                            alt="Pratinjau Gambar Baru">


                        <div
                            class="flex justify-between items-center gap-3 p-4 bg-white border-t-2 border-[#3f2a1d]">

                            <div class="flex items-center gap-2 min-w-0">

                                <i data-lucide="image"
                                    class="w-5 h-5 shrink-0">
                                </i>

                                <p
                                    id="preview-file-name"
                                    class="text-sm font-extrabold text-[#3f2a1d] truncate">

                                    nama-file.png

                                </p>

                            </div>


                            <button
                                type="button"
                                id="preview-remove"
                                class="shrink-0 text-xs text-rose-700 bg-rose-100 font-extrabold px-3.5 py-2 rounded-lg border-2 border-[#3f2a1d] shadow-[2px_2px_0px_0px_#3f2a1d] hover:bg-rose-200 transition-all">

                                Batal Ganti

                            </button>

                        </div>

                    </div>

                </div>


                <!-- FILE INPUT -->

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept="image/*"
                    class="hidden">


                @error('image')

                    <p class="text-xs font-bold text-rose-600 flex items-center gap-1 mt-1">

                        <i data-lucide="circle-alert"
                            class="w-3.5 h-3.5">
                        </i>

                        {{ $message }}

                    </p>

                @enderror

            </div>



            <!-- ================================== -->
            <!-- STATUS -->
            <!-- ================================== -->

            <div class="pt-2">

                <label
                    for="is_active"
                    class="cursor-pointer select-none">

                    <div
                        class="flex items-center justify-between gap-4 bg-[#f5efe6] border-2 border-[#3f2a1d] rounded-2xl px-4 sm:px-5 py-4 shadow-[3px_3px_0px_0px_#3f2a1d] transition-all hover:shadow-[5px_5px_0px_0px_#3f2a1d]">


                        <div class="flex items-center gap-3">

                            <span
                                class="bg-emerald-100 text-emerald-700 p-2 rounded-xl border-2 border-emerald-300">

                                <i data-lucide="eye"
                                    class="w-5 h-5 stroke-[2.5]">
                                </i>

                            </span>


                            <div class="flex flex-col">

                                <span
                                    class="text-sm font-extrabold text-[#3f2a1d]">

                                    Tampilkan Link ke Publik

                                </span>


                                <span
                                    id="is_active_hint"
                                    class="text-[11px] font-semibold text-[#8b6a50] mt-0.5">

                                    Link akan terlihat di halaman publik

                                </span>

                            </div>

                        </div>


                        <input
                            type="checkbox"
                            id="is_active"
                            name="is_active"
                            class="sr-only peer"
                            {{ old('is_active', $link->is_active) ? 'checked' : '' }}>


                        <span
                            class="relative w-12 h-7 bg-slate-300 peer-checked:bg-emerald-400 rounded-full border-2 border-[#3f2a1d] transition-colors duration-300 shrink-0 after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:w-5 after:h-5 after:bg-white after:rounded-full after:border-2 after:border-[#3f2a1d] after:transition-transform peer-checked:after:translate-x-5">
                        </span>

                    </div>

                </label>

            </div>



            <!-- ================================== -->
            <!-- INFORMATION -->
            <!-- ================================== -->

            <div
                class="bg-amber-100 border-2 border-[#3f2a1d] rounded-xl p-4 flex gap-3">

                <div
                    class="w-9 h-9 shrink-0 bg-amber-200 border-2 border-[#3f2a1d] rounded-lg flex items-center justify-center">

                    <i data-lucide="info"
                        class="w-4 h-4">
                    </i>

                </div>


                <div>

                    <p class="text-xs font-black text-[#3f2a1d]">
                        Perubahan Link
                    </p>

                    <p
                        class="text-[11px] font-semibold text-[#6f5540] leading-relaxed mt-1">

                        Jika gambar baru tidak dipilih, gambar lama akan tetap digunakan.
                        Jika status dimatikan, link tidak akan muncul pada halaman publik.

                    </p>

                </div>

            </div>



            <!-- ================================== -->
            <!-- BUTTON -->
            <!-- ================================== -->

            <div
                class="pt-6 flex flex-col-reverse sm:flex-row justify-end gap-3 border-t-2 border-dashed border-[#d7c3ad]">


                <!-- BATAL -->

                <a
                    href="{{ route('admin.links.index') }}"
                    class="bg-[#f5efe6] hover:bg-[#ead8c4] text-[#3f2a1d] font-extrabold py-3 px-6 rounded-xl border-2 border-[#3f2a1d] shadow-[3px_3px_0px_0px_#3f2a1d] text-center transition-all">

                    Batal

                </a>



                <!-- SIMPAN -->

                <button
                    type="submit"
                    class="bg-[#6f4e37] hover:bg-[#5b3d2a] text-white font-extrabold py-3 px-8 rounded-xl border-2 border-[#3f2a1d] shadow-[3px_3px_0px_0px_#3f2a1d] flex items-center justify-center gap-2 transition-all">

                    <i data-lucide="check-circle-2"
                        class="w-5 h-5 stroke-[2.5]">
                    </i>

                    Simpan Perubahan

                </button>

            </div>

        </form>

    </div>

</div>



<!-- ========================================== -->
<!-- IMAGE PREVIEW -->
<!-- ========================================== -->

<script src="{{ asset('js/image-preview.js') }}"></script>


<script>

    document.addEventListener('DOMContentLoaded', function () {

        /* ==========================================
           STATUS TOGGLE
        ========================================== */

        const toggle = document.getElementById('is_active');
        const hint = document.getElementById('is_active_hint');


        if (toggle && hint) {

            const updateHint = () => {

                hint.textContent = toggle.checked
                    ? 'Link akan terlihat di halaman publik'
                    : 'Link disembunyikan dari halaman publik';

            };


            toggle.addEventListener('change', updateHint);

            updateHint();

        }


        /* ==========================================
           LUCIDE ICON
        ========================================== */

        if (typeof lucide !== 'undefined') {

            lucide.createIcons();

        }

    });

</script>

@endsection