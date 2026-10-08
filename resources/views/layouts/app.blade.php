<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="FALLEN — Official 2D Platform Fighting Game by Noxvera Studio. Rebut takhta Kursi Fallen di atas arena melayang dan hadapi jurang kehampaan!">
    <title>FALLEN — Official Game Website | Noxvera Studio</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/branding/icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#07080b] text-[#f8fafc] font-sans antialiased selection:bg-[#dc2626] selection:text-white min-h-screen flex flex-col custom-scrollbar">

    <!-- Sticky Ambient Navigation -->
    <header x-data="{ scrolled: false, mobileOpen: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 40)"
            :class="scrolled ? 'bg-[#07080b]/90 backdrop-blur-md border-b border-[#262a36]/80 py-3 shadow-2xl' : 'bg-transparent py-5 border-b border-transparent'"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Studio & Game Logo -->
            <a href="#hero" class="flex items-center gap-3 group">
                <img src="{{ asset('assets/branding/icon.png') }}" alt="FALLEN Icon" class="w-10 h-10 object-contain drop-shadow-[0_0_12px_rgba(220,38,38,0.5)] group-hover:scale-105 transition-transform">
                <div class="flex flex-col">
                    <span class="font-metal text-2xl tracking-wider text-[#f8fafc] group-hover:text-[#fbbf24] transition-colors leading-none">FALLEN</span>
                    <span class="text-[10px] uppercase tracking-[0.25em] text-[#94a3b8] font-semibold">BY NOXVERA</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-7 text-sm font-medium tracking-wide">
                <a href="#hero" class="text-[#cbd5e1] hover:text-[#fbbf24] transition-colors">Takhta</a>
                <a href="#trailer" class="text-[#cbd5e1] hover:text-[#fbbf24] transition-colors">Trailer</a>
                <a href="#prologue" class="text-[#cbd5e1] hover:text-[#fbbf24] transition-colors">Prolog</a>
                <a href="#roster" class="text-[#cbd5e1] hover:text-[#fbbf24] transition-colors">The Claimants</a>
                <a href="#arenas" class="text-[#cbd5e1] hover:text-[#fbbf24] transition-colors">Arena</a>
                <a href="#studio" class="text-[#cbd5e1] hover:text-[#fbbf24] transition-colors">Noxvera</a>
            </nav>

            <!-- CTA & Mobile Toggle -->
            <div class="flex items-center gap-4">
                <a href="#contact" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-sm bg-gradient-to-r from-[#dc2626] to-[#b91c1c] hover:from-[#ef4444] hover:to-[#dc2626] text-white font-semibold text-xs tracking-wider uppercase border border-[#ef4444]/40 shadow-[0_0_18px_rgba(220,38,38,0.35)] hover:shadow-[0_0_24px_rgba(220,38,38,0.6)] transition-all">
                    <span>Gabung Playtest</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>

                <button @click="mobileOpen = !mobileOpen" 
                        class="md:hidden p-2 text-[#94a3b8] hover:text-white focus:outline-none"
                        aria-label="Toggle Menu">
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div x-show="mobileOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden bg-[#0b0c10] border-b border-[#262a36] px-6 py-6 space-y-4 shadow-2xl" 
             style="display: none;">
            <a href="#hero" @click="mobileOpen = false" class="block text-base font-medium text-slate-300 hover:text-[#fbbf24]">Takhta</a>
            <a href="#trailer" @click="mobileOpen = false" class="block text-base font-medium text-slate-300 hover:text-[#fbbf24]">Trailer</a>
            <a href="#prologue" @click="mobileOpen = false" class="block text-base font-medium text-slate-300 hover:text-[#fbbf24]">Prolog</a>
            <a href="#roster" @click="mobileOpen = false" class="block text-base font-medium text-slate-300 hover:text-[#fbbf24]">The Claimants (8 Roster)</a>
            <a href="#arenas" @click="mobileOpen = false" class="block text-base font-medium text-slate-300 hover:text-[#fbbf24]">Arena & Mekanik</a>
            <a href="#studio" @click="mobileOpen = false" class="block text-base font-medium text-slate-300 hover:text-[#fbbf24]">Noxvera Studio</a>
            <a href="#contact" @click="mobileOpen = false" class="block w-full text-center py-3 bg-[#dc2626] text-white font-semibold uppercase text-xs tracking-wider rounded-sm">
                Gabung Playtest
            </a>
        </div>
    </header>

    <!-- Main Content Slot -->
    <main class="flex-grow pt-20">
        {{ $slot }}
    </main>

    <!-- Cinematic Footer -->
    <footer class="bg-[#0b0c10] border-t border-[#1a1d26] py-12 relative overflow-hidden">
        <div class="absolute inset-0 bg-radial-gradient opacity-10 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 pb-10 border-b border-[#1e222e]">
                <!-- Brand Info -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/branding/fallen_logo_banner.png') }}" alt="FALLEN Banner" class="h-10 object-contain">
                    </div>
                    <p class="text-xs text-[#94a3b8] leading-relaxed max-w-md">
                        <strong>FALLEN</strong> adalah game platform-fighting 2D bertempo cepat yang dikembangkan oleh <strong>Noxvera Studio</strong>. Memadukan tensi kombat arena melayang dengan komedi gelap cerita kehidupan yang tajam.
                    </p>
                    <div class="text-[11px] text-[#64748b]">
                        Engine: Godot 4 | Platform: PC Windows
                    </div>
                </div>

                <!-- Navigasi Cepat -->
                <div>
                    <h4 class="font-cinzel text-xs uppercase tracking-[0.2em] text-[#fbbf24] font-bold mb-3">Navigasi Game</h4>
                    <ul class="space-y-2 text-xs text-[#94a3b8]">
                        <li><a href="#hero" class="hover:text-white transition-colors">Takhta Fallen</a></li>
                        <li><a href="#trailer" class="hover:text-white transition-colors">Video Trailer</a></li>
                        <li><a href="#prologue" class="hover:text-white transition-colors">Komik Prolog</a></li>
                        <li><a href="#roster" class="hover:text-white transition-colors">8 The Claimants</a></li>
                        <li><a href="#arenas" class="hover:text-white transition-colors">Arena & Death Zone</a></li>
                    </ul>
                </div>

                <!-- Studio & Hubungi -->
                <div>
                    <h4 class="font-cinzel text-xs uppercase tracking-[0.2em] text-[#fbbf24] font-bold mb-3">Noxvera Studio</h4>
                    <p class="text-xs text-[#94a3b8] leading-relaxed mb-3">
                        Indie Game Development Studio berdedikasi menciptakan pengalaman bermain game yang berani, otentik, dan bernyawa.
                    </p>
                    <a href="#contact" class="inline-block text-xs text-[#dc2626] hover:text-[#ef4444] font-semibold underline underline-offset-4">
                        Hubungi Studio / Press &rarr;
                    </a>
                </div>
            </div>

            <!-- Copyright bar -->
            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-[11px] text-[#64748b] gap-3">
                <p>&copy; {{ date('Y') }} Noxvera Studio. Seluruh hak cipta dilindungi undang-undang.</p>
                <p class="text-[#475569]">Didesain secara khusus untuk dunia Kursi Fallen.</p>
            </div>
        </div>
    </footer>

</body>
</html>
