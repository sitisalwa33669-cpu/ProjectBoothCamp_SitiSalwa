@extends('layouts.app')

@section('title', 'Dashboard - Kedai Senja')

@section('content')

<div class="max-w-7xl mx-auto space-y-6 sm:space-y-8">

    <!-- ========================================== -->
    <!-- HEADER DASHBOARD -->
    <!-- ========================================== -->

    <div
        class="bg-[#fdf9f4] border-2 border-[#3f2a1d] rounded-3xl p-5 sm:p-7 shadow-[5px_5px_0px_0px_#3f2a1d]">

        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5">

            <div class="flex items-center gap-4">

                <!-- Logo -->

                <div
                    class="w-14 h-14 sm:w-16 sm:h-16 bg-[#d4b08c] border-2 border-[#3f2a1d] rounded-2xl flex items-center justify-center shadow-[3px_3px_0px_0px_#3f2a1d]">

                    <i data-lucide="coffee"
                        class="w-7 h-7 sm:w-8 sm:h-8 text-[#3f2a1d] stroke-[2.5]">
                    </i>

                </div>

                <div>

                    <p class="text-xs font-black text-[#9a7658] uppercase tracking-[0.2em]">
                        Kedai Senja
                    </p>

                    <h1 class="text-2xl sm:text-3xl font-black text-[#3f2a1d] tracking-tight">
                        Dashboard Analytics
                    </h1>

                    <p class="text-xs sm:text-sm text-[#8b6a50] font-bold mt-1">
                        Pantau performa link dan minat pelanggan Anda.
                    </p>

                </div>

            </div>

            <!-- Tombol Kelola -->

            <a href="{{ route('admin.links.index') }}"
                class="w-full sm:w-auto bg-[#6f4e37] hover:bg-[#5b3d2a] text-white font-black py-3 px-5 rounded-xl border-2 border-[#3f2a1d] shadow-[3px_3px_0px_0px_#3f2a1d] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all flex items-center justify-center gap-2">

                <i data-lucide="settings"
                    class="w-5 h-5 stroke-[2.5]">
                </i>

                Kelola Tautan

            </a>

        </div>

    </div>


    <!-- ========================================== -->
    <!-- SUMMARY CARDS -->
    <!-- ========================================== -->

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

        <!-- TOTAL LINK -->

        <div
            class="bg-[#ead8c4] border-2 border-[#3f2a1d] rounded-3xl p-6 shadow-[5px_5px_0px_0px_#3f2a1d] relative overflow-hidden group hover:-translate-y-1 transition-transform">

            <i data-lucide="link"
                class="w-24 h-24 text-[#d4b08c] absolute -bottom-6 -right-5 stroke-[2.5] group-hover:scale-110 transition-transform">
            </i>

            <div class="relative z-10">

                <div
                    class="w-11 h-11 bg-[#fdf9f4] border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center mb-4">

                    <i data-lucide="link"
                        class="w-5 h-5 text-[#3f2a1d]">
                    </i>

                </div>

                <h3 class="text-xs font-black text-[#6f4e37] uppercase tracking-widest mb-2">
                    Total Tautan
                </h3>

                <div class="flex items-baseline gap-2">

                    <span class="text-5xl font-black text-[#3f2a1d]">
                        {{ $totalLinks }}
                    </span>

                    <span class="text-sm font-black text-[#6f4e37]">
                        ({{ $activeLinks }} Aktif)
                    </span>

                </div>

            </div>

        </div>


        <!-- TOTAL KLIK -->

        <div
            class="bg-[#dceee5] border-2 border-[#3f2a1d] rounded-3xl p-6 shadow-[5px_5px_0px_0px_#3f2a1d] relative overflow-hidden group hover:-translate-y-1 transition-transform">

            <i data-lucide="mouse-pointer-click"
                class="w-24 h-24 text-[#b9d8c8] absolute -bottom-6 -right-5 stroke-[2.5] group-hover:scale-110 transition-transform">
            </i>

            <div class="relative z-10">

                <div
                    class="w-11 h-11 bg-white border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center mb-4">

                    <i data-lucide="mouse-pointer-click"
                        class="w-5 h-5 text-emerald-700">
                    </i>

                </div>

                <h3 class="text-xs font-black text-[#47705c] uppercase tracking-widest mb-2">
                    Total Klik
                </h3>

                <span class="text-5xl font-black text-[#3f2a1d]">
                    {{ number_format($totalClicks) }}
                </span>

                <p class="text-xs font-bold text-[#47705c] mt-2">
                    Total akses seluruh tautan
                </p>

            </div>

        </div>


        <!-- LINK TERPOPULER -->

        <div
            class="bg-[#f4e3b5] border-2 border-[#3f2a1d] rounded-3xl p-6 shadow-[5px_5px_0px_0px_#3f2a1d] relative overflow-hidden group hover:-translate-y-1 transition-transform">

            <i data-lucide="trophy"
                class="w-24 h-24 text-[#e7ce8c] absolute -bottom-6 -right-5 stroke-[2.5] group-hover:scale-110 transition-transform">
            </i>

            <div class="relative z-10">

                <div
                    class="w-11 h-11 bg-[#fffaf0] border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center mb-4">

                    <i data-lucide="star"
                        class="w-5 h-5 text-[#8a6828]">
                    </i>

                </div>

                <h3 class="text-xs font-black text-[#765c28] uppercase tracking-widest mb-2">
                    Link Terpopuler
                </h3>

                @if($topLink)

                    <p class="text-xl font-black text-[#3f2a1d] truncate mb-2">
                        {{ $topLink->title }}
                    </p>

                    <span
                        class="inline-flex items-center gap-1.5 text-xs font-black text-[#3f2a1d] bg-[#e6c967] px-3 py-1.5 rounded-lg border-2 border-[#3f2a1d]">

                        <i data-lucide="mouse-pointer-click"
                            class="w-3.5 h-3.5">
                        </i>

                        {{ number_format($topLink->clicks) }} Klik

                    </span>

                @else

                    <p class="text-xl font-black text-[#3f2a1d]">
                        Belum ada data
                    </p>

                    <p class="text-xs font-bold text-[#765c28] mt-2">
                        Belum ada tautan yang diklik.
                    </p>

                @endif

            </div>

        </div>

    </div>


    <!-- ========================================== -->
    <!-- INFO -->
    <!-- ========================================== -->

    <div
        class="bg-[#6f4e37] border-2 border-[#3f2a1d] rounded-2xl p-5 shadow-[4px_4px_0px_0px_#3f2a1d] text-white">

        <div class="flex items-start gap-3">

            <div
                class="w-10 h-10 bg-[#d4b08c] text-[#3f2a1d] rounded-xl border-2 border-[#3f2a1d] flex items-center justify-center shrink-0">

                <i data-lucide="coffee"
                    class="w-5 h-5">
                </i>

            </div>

            <div>

                <h3 class="font-black text-base">
                    Performa Microsite Kedai Senja
                </h3>

                <p class="text-xs sm:text-sm text-[#f1dfcc] font-semibold mt-1 leading-relaxed">
                    Data pada dashboard ini berasal dari aktivitas pengunjung
                    yang mengakses tautan pada halaman publik Kedai Senja.
                </p>

            </div>

        </div>

    </div>


    <!-- ========================================== -->
    <!-- CHARTS -->
    <!-- ========================================== -->

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- BAR CHART -->

        <div
            class="bg-[#fdf9f4] border-2 border-[#3f2a1d] rounded-3xl p-5 sm:p-6 shadow-[5px_5px_0px_0px_#3f2a1d]">

            <div class="flex items-center justify-between border-b-2 border-dashed border-[#d4b08c] pb-4 mb-5">

                <div>

                    <p class="text-xs font-black text-[#9a7658] uppercase tracking-widest">
                        Statistik
                    </p>

                    <h3 class="text-lg sm:text-xl font-black text-[#3f2a1d] mt-1">
                        Perbandingan Klik
                    </h3>

                </div>

                <div
                    class="w-10 h-10 bg-[#ead8c4] border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center">

                    <i data-lucide="bar-chart-3"
                        class="w-5 h-5 text-[#3f2a1d]">
                    </i>

                </div>

            </div>

            <p class="text-xs font-bold text-[#8b6a50] mb-5">
                5 tautan dengan jumlah klik tertinggi.
            </p>

            <div class="relative w-full h-72">
                <canvas id="barChart"></canvas>
            </div>

        </div>


        <!-- DOUGHNUT CHART -->

        <div
            class="bg-[#fdf9f4] border-2 border-[#3f2a1d] rounded-3xl p-5 sm:p-6 shadow-[5px_5px_0px_0px_#3f2a1d]">

            <div class="flex items-center justify-between border-b-2 border-dashed border-[#d4b08c] pb-4 mb-5">

                <div>

                    <p class="text-xs font-black text-[#9a7658] uppercase tracking-widest">
                        Statistik
                    </p>

                    <h3 class="text-lg sm:text-xl font-black text-[#3f2a1d] mt-1">
                        Distribusi Minat
                    </h3>

                </div>

                <div
                    class="w-10 h-10 bg-[#ead8c4] border-2 border-[#3f2a1d] rounded-xl flex items-center justify-center">

                    <i data-lucide="pie-chart"
                        class="w-5 h-5 text-[#3f2a1d]">
                    </i>

                </div>

            </div>

            <p class="text-xs font-bold text-[#8b6a50] mb-5">
                Distribusi klik berdasarkan tautan yang tersedia.
            </p>

            <div class="relative w-full h-72 flex justify-center items-center">
                <canvas id="doughnutChart"></canvas>
            </div>

        </div>

    </div>


    <!-- ========================================== -->
    <!-- FOOTER DASHBOARD -->
    <!-- ========================================== -->

    <div class="text-center py-4">

        <p class="text-xs font-bold text-[#9a7658]">
            ☕ Kedai Senja • Coffee • Food • Good Mood
        </p>

    </div>

</div>


<!-- ========================================== -->
<!-- CHART.JS -->
<!-- ========================================== -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    // ==========================================
    // DATA DARI LARAVEL
    // ==========================================

    const chartLabels = @json($chartLabels);
    const chartData = @json($chartData);


    // ==========================================
    // WARNA TEMA KEDAI SENJA
    // ==========================================

    const bgColors = [
        '#d4b08c',
        '#ead8c4',
        '#b9d8c8',
        '#e6c967',
        '#d8c2ad'
    ];

    const borderColors = [
        '#3f2a1d',
        '#3f2a1d',
        '#3f2a1d',
        '#3f2a1d',
        '#3f2a1d'
    ];


    // ==========================================
    // DEFAULT CHART FONT
    // ==========================================

    Chart.defaults.font.family =
        'Inter, ui-sans-serif, system-ui, sans-serif';

    Chart.defaults.font.weight = '700';

    Chart.defaults.color = '#3f2a1d';


    // ==========================================
    // BAR CHART
    // ==========================================

    const barCanvas = document.getElementById('barChart');

    if (barCanvas) {

        const ctxBar = barCanvas.getContext('2d');

        new Chart(ctxBar, {

            type: 'bar',

            data: {

                labels: chartLabels,

                datasets: [{

                    label: 'Jumlah Klik',

                    data: chartData,

                    backgroundColor: bgColors,

                    borderColor: borderColors,

                    borderWidth: 2,

                    borderRadius: 8,

                    borderSkipped: false

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                animation: {

                    duration: 700

                },

                scales: {

                    y: {

                        beginAtZero: true,

                        ticks: {

                            precision: 0,

                            color: '#6f4e37',

                            font: {

                                weight: '700'

                            }

                        },

                        grid: {

                            color: '#ead8c4',

                            lineWidth: 1,

                            borderDash: [5, 5]

                        }

                    },

                    x: {

                        ticks: {

                            color: '#3f2a1d',

                            font: {

                                weight: '800'

                            },

                            maxRotation: 35,

                            minRotation: 0

                        },

                        grid: {

                            display: false

                        }

                    }

                },

                plugins: {

                    legend: {

                        display: false

                    },

                    tooltip: {

                        backgroundColor: '#3f2a1d',

                        titleFont: {

                            weight: '900'

                        },

                        bodyFont: {

                            weight: '700'

                        },

                        padding: 12,

                        cornerRadius: 10

                    }

                }

            }

        });

    }


    // ==========================================
    // DOUGHNUT CHART
    // ==========================================

    const doughnutCanvas =
        document.getElementById('doughnutChart');

    if (doughnutCanvas) {

        const ctxDoughnut =
            doughnutCanvas.getContext('2d');

        new Chart(ctxDoughnut, {

            type: 'doughnut',

            data: {

                labels: chartLabels,

                datasets: [{

                    data: chartData,

                    backgroundColor: bgColors,

                    borderColor: borderColors,

                    borderWidth: 2,

                    hoverOffset: 12

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                cutout: '60%',

                animation: {

                    duration: 700

                },

                plugins: {

                    legend: {

                        position: 'right',

                        labels: {

                            color: '#3f2a1d',

                            font: {

                                weight: '800'

                            },

                            padding: 15,

                            usePointStyle: true,

                            pointStyle: 'rectRounded'

                        }

                    },

                    tooltip: {

                        backgroundColor: '#3f2a1d',

                        titleFont: {

                            weight: '900'

                        },

                        bodyFont: {

                            weight: '700'

                        },

                        padding: 12,

                        cornerRadius: 10

                    }

                }

            }

        });

    }

</script>

@endsection