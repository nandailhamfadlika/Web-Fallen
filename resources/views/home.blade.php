<x-layouts.app>
    <!-- HERO SECTION -->
    <section id="hero" class="relative min-h-[90vh] flex items-center justify-center overflow-hidden border-b border-[#1a1d26]">
        <!-- Background Ambient Video & Vignette -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/stages/ruined_school_stage.png') }}" alt="FALLEN Stage Backdrop" class="w-full h-full object-cover opacity-25 filter blur-[2px] scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-[#07080b] via-[#07080b]/80 to-[#07080b]/90"></div>
            <div class="absolute inset-0 bg-radial-gradient opacity-40"></div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center flex flex-col items-center">
            <!-- Studio Badge -->
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#12141a]/90 border border-[#d97706]/40 text-[#fbbf24] text-xs font-semibold uppercase tracking-[0.2em] mb-6 shadow-[0_0_15px_rgba(217,119,6,0.2)]">
                <span class="w-2 h-2 rounded-full bg-[#dc2626] animate-pulse"></span>
                Official Game Project by Noxvera
            </div>

            <!-- Game Logo & Title -->
            <div class="mb-4">
                <img src="{{ asset('assets/branding/fallen_logo.png') }}" alt="FALLEN Logo" class="w-72 sm:w-96 md:w-[480px] mx-auto object-contain drop-shadow-[0_0_35px_rgba(220,38,38,0.45)]">
            </div>

            <!-- Tagline -->
            <h1 class="font-cinzel text-xl sm:text-2xl md:text-3xl font-bold tracking-wider text-[#f8fafc] max-w-3xl mb-5 uppercase leading-snug">
                Rebut Takhta Pengabul Hasrat, <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#fbbf24] via-[#ef4444] to-[#fbbf24]">Hadapi Jurang Kehampaan!</span>
            </h1>

            <p class="text-sm sm:text-base text-[#94a3b8] max-w-2xl mx-auto leading-relaxed mb-10 font-light">
                Game 2D platform brawler bertempo cepat di mana status penguasa tidak ditentukan oleh garis moralitas, melainkan keunggulan kombat jarak dekat dan kemampuan bertahan di platform agar tidak terdorong ke <em>Death Zone</em>.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                <a href="#trailer" class="w-full sm:w-auto px-8 py-3.5 rounded-sm bg-gradient-to-r from-[#dc2626] to-[#b91c1c] hover:from-[#ef4444] hover:to-[#dc2626] text-white font-semibold text-xs tracking-[0.15em] uppercase border border-[#ef4444]/40 shadow-[0_0_20px_rgba(220,38,38,0.4)] hover:shadow-[0_0_30px_rgba(220,38,38,0.7)] transition-all flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11v11.78a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/></svg>
                    <span>Tonton Video Kursi Fallen</span>
                </a>

                <a href="#roster" class="w-full sm:w-auto px-8 py-3.5 rounded-sm bg-[#12141a] hover:bg-[#1a1d26] text-[#cbd5e1] hover:text-[#fbbf24] font-semibold text-xs tracking-[0.15em] uppercase border border-[#262a36] hover:border-[#d97706]/60 transition-all flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    <span>Kenali 8 The Claimants</span>
                </a>
            </div>

            <!-- Game Pillars Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-16 w-full pt-10 border-t border-[#1a1d26]">
                <div class="p-4 rounded-sm bg-[#0b0c10]/70 border border-[#1e222e]">
                    <div class="text-[#fbbf24] font-cinzel text-lg font-bold">1v1 PvP</div>
                    <div class="text-[11px] text-[#94a3b8] uppercase tracking-wider mt-1">Kombat Jarak Dekat</div>
                </div>
                <div class="p-4 rounded-sm bg-[#0b0c10]/70 border border-[#1e222e]">
                    <div class="text-[#ef4444] font-cinzel text-lg font-bold">Death Zone</div>
                    <div class="text-[11px] text-[#94a3b8] uppercase tracking-wider mt-1">Ring-Out Platform</div>
                </div>
                <div class="p-4 rounded-sm bg-[#0b0c10]/70 border border-[#1e222e]">
                    <div class="text-[#fbbf24] font-cinzel text-lg font-bold">8 Claimants</div>
                    <div class="text-[11px] text-[#94a3b8] uppercase tracking-wider mt-1">Cerita & Mitologi</div>
                </div>
                <div class="p-4 rounded-sm bg-[#0b0c10]/70 border border-[#1e222e]">
                    <div class="text-[#ef4444] font-cinzel text-lg font-bold">Godot 4</div>
                    <div class="text-[11px] text-[#94a3b8] uppercase tracking-wider mt-1">Pixel Action Engine</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRAILER SECTION -->
    <section id="trailer" class="py-24 bg-[#0b0c10] border-b border-[#1a1d26] relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs uppercase tracking-[0.25em] text-[#dc2626] font-bold">Sinematik Teaser</span>
                <h2 class="font-metal text-3xl sm:text-4xl text-[#f8fafc] mt-2 tracking-wide">Misteri Kursi Fallen</h2>
                <div class="w-16 h-0.5 bg-[#d97706] mx-auto mt-4 mb-4"></div>
                <p class="text-sm text-[#94a3b8] leading-relaxed">
                    Bukan takhta emas kerajaan biasa. Kursi ini memanggil mereka yang telah terpojok di tepi jurang nasib dan tidak memiliki jalan mundur lagi. Saksikan wujud sang takhta penentu takdir dunia.
                </p>
            </div>

            <!-- Video Player Card -->
            <div class="relative rounded-sm overflow-hidden bg-[#07080b] border-2 border-[#262a36] shadow-[0_0_50px_rgba(0,0,0,0.8)] group"
                 x-data="{ isMuted: true, isPlaying: true }">
                
                <video id="fallenVideo" 
                       autoplay 
                       loop 
                       muted 
                       playsinline
                       class="w-full h-auto aspect-video object-cover"
                       src="{{ asset('assets/media/trailer_kursi_fallen.mp4') }}">
                    Browser Anda tidak mendukung tag video.
                </video>

                <!-- Floating Video Overlay Controls -->
                <div class="absolute bottom-4 right-4 flex items-center gap-3 bg-[#07080b]/80 backdrop-blur-md px-4 py-2 rounded-sm border border-[#262a36]">
                    <!-- Play/Pause Toggle -->
                    <button @click="
                                const v = document.getElementById('fallenVideo');
                                if (v.paused) { v.play(); isPlaying = true; } else { v.pause(); isPlaying = false; }
                            " 
                            class="text-xs text-[#cbd5e1] hover:text-[#fbbf24] flex items-center gap-1.5 transition-colors">
                        <template x-if="isPlaying">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                <span>Pause</span>
                            </span>
                        </template>
                        <template x-if="!isPlaying">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/></svg>
                                <span>Putar</span>
                            </span>
                        </template>
                    </button>

                    <div class="w-px h-4 bg-[#262a36]"></div>

                    <!-- Mute/Unmute Toggle -->
                    <button @click="
                                const v = document.getElementById('fallenVideo');
                                v.muted = !v.muted;
                                isMuted = v.muted;
                            " 
                            class="text-xs text-[#cbd5e1] hover:text-[#fbbf24] flex items-center gap-1.5 transition-colors">
                        <template x-if="isMuted">
                            <span class="flex items-center gap-1 text-[#ef4444]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"/></svg>
                                <span>Suara: Mati (Klik untuk Bunyi)</span>
                            </span>
                        </template>
                        <template x-if="!isMuted">
                            <span class="flex items-center gap-1 text-[#22c55e]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/></svg>
                                <span>Suara: Hidup</span>
                            </span>
                        </template>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- PROLOGUE COMIC & LORE SECTION -->
    <section id="prologue" class="py-24 bg-[#07080b] border-b border-[#1a1d26] relative"
             x-data="{ comicModal: false }">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs uppercase tracking-[0.25em] text-[#fbbf24] font-bold">Kisah Pembuka</span>
                <h2 class="font-metal text-3xl sm:text-4xl text-[#f8fafc] mt-2 tracking-wide">Prolog: Mitos Takhta Fallen</h2>
                <div class="w-16 h-0.5 bg-[#dc2626] mx-auto mt-4 mb-4"></div>
                <p class="text-sm text-[#94a3b8] leading-relaxed">
                    Bagaimana kekacauan bermula? Mengapa para penantang dari berbagai latar belakang rela saling menumbangkan di atas jurang kematian? Simak komik pengantar singkat berikut.
                </p>
            </div>

            <!-- Comic Interactive Showcase -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Comic Preview Image Container -->
                <div class="lg:col-span-7 relative group cursor-pointer" @click="comicModal = true">
                    <div class="overflow-hidden rounded-sm border-2 border-[#262a36] hover:border-[#fbbf24]/60 transition-all bg-[#0b0c10] shadow-2xl relative">
                        <img src="{{ asset('assets/media/comic_singkat.png') }}" 
                             alt="Comic Singkat Kursi Fallen" 
                             class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-500">
                        
                        <!-- Hover hint -->
                        <div class="absolute inset-0 bg-[#07080b]/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="px-4 py-2 bg-[#07080b]/90 border border-[#fbbf24] text-[#fbbf24] text-xs font-semibold uppercase tracking-wider flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                Klik untuk Perbesar Komik
                            </span>
                        </div>
                    </div>
                    <span class="block text-center text-xs text-[#64748b] mt-3 italic">Klik gambar untuk membaca komik dalam layar penuh.</span>
                </div>

                <!-- Lore Narrative Pillars -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="p-6 rounded-sm bg-[#0b0c10] border border-[#1e222e]">
                        <h3 class="font-cinzel text-base font-bold text-[#fbbf24] mb-2 flex items-center gap-2">
                            <span class="text-[#dc2626]">✦</span> Kuasa Mutlak Tanpa Syarat
                        </h3>
                        <p class="text-xs text-[#94a3b8] leading-relaxed">
                            Mitos kuno menyatakan bahwa siapapun petarung yang berhasil menaklukkan seluruh lawan dan duduk di atas Kursi Fallen akan dianugerahi kuasa mutlak serta pengabulan segala ambisi tanpa syarat.
                        </p>
                    </div>

                    <div class="p-6 rounded-sm bg-[#0b0c10] border border-[#1e222e]">
                        <h3 class="font-cinzel text-base font-bold text-[#fbbf24] mb-2 flex items-center gap-2">
                            <span class="text-[#dc2626]">✦</span> Arena Melayang & Death Zone
                        </h3>
                        <p class="text-xs text-[#94a3b8] leading-relaxed">
                            Para penantang (<em>The Claimants</em>) berkumpul di atas arena melayang yang brutal. Di sini, posisi berpijak sama pentingnya dengan bar HP. Terdorong keluar dari tepi platform berarti jatuh ke jurang kehampaan seketika.
                        </p>
                    </div>

                    <div class="p-6 rounded-sm bg-[#0b0c10] border border-[#1e222e]">
                        <h3 class="font-cinzel text-base font-bold text-[#fbbf24] mb-2 flex items-center gap-2">
                            <span class="text-[#dc2626]">✦</span> Kontras Komedi Gelap & Tragedi
                        </h3>
                        <p class="text-xs text-[#94a3b8] leading-relaxed">
                            Daya pikat FALLEN terletak pada kontras tajamnya: Mike yang mengamuk membawa kursi lipat karena sidangnya batal dan terancam bayar UKT, Om Hami yang kesal pos ronda dan lapak warga rusak, bertarung satu lawan satu melawan mutan laboratorium dan cucu Sun Wukong.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fullscreen Comic Modal -->
        <div x-show="comicModal" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 bg-black/95 backdrop-blur-md flex items-center justify-center p-4 sm:p-6" 
             style="display: none;"
             @keydown.escape.window="comicModal = false">
            
            <button @click="comicModal = false" 
                    class="absolute top-6 right-6 p-2 text-slate-400 hover:text-white bg-[#12141a] rounded-full border border-slate-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <div class="max-w-5xl max-h-[90vh] overflow-auto custom-scrollbar p-2" @click.outside="comicModal = false">
                <img src="{{ asset('assets/media/comic_singkat.png') }}" 
                     alt="Comic Singkat Fullscreen" 
                     class="w-full h-auto rounded border border-[#262a36]">
            </div>
        </div>
    </section>

    <!-- THE CLAIMANTS ROSTER SECTION (8 UNIFIED CHARACTERS) -->
    <section id="roster" class="py-24 bg-[#0b0c10] border-b border-[#1a1d26] relative"
             x-data="{
                 activeSlug: '{{ $characters->first()->slug }}',
                 characters: {{ Js::from($characters) }},
                 get activeChar() {
                     return this.characters.find(c => c.slug === this.activeSlug) || this.characters[0];
                 }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs uppercase tracking-[0.25em] text-[#dc2626] font-bold">Roster Petarung Lengkap</span>
                <h2 class="font-metal text-3xl sm:text-4xl md:text-5xl text-[#f8fafc] mt-2 tracking-wide">The Claimants (8 Petarung)</h2>
                <div class="w-20 h-0.5 bg-[#d97706] mx-auto mt-4 mb-4"></div>
                <p class="text-sm text-[#94a3b8] leading-relaxed">
                    Setiap penantang membawa beban kehidupan, senjata khas, dan alasan nekat masing-masing untuk merebut takhta Kursi Fallen. Pilih karakter untuk menyingkap arsip rahasia mereka.
                </p>
            </div>

            <!-- Character Selection Bar (8 Avatars Grid) -->
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-2.5 mb-10">
                <template x-for="char in characters" :key="char.slug">
                    <button @click="activeSlug = char.slug" 
                            :class="activeSlug === char.slug 
                                ? 'border-[#fbbf24] bg-[#1a1d26] shadow-[0_0_16px_rgba(251,191,36,0.4)] scale-105' 
                                : 'border-[#1e222e] bg-[#07080b] hover:border-[#d97706]/60 hover:bg-[#12141a]'"
                            class="p-2 rounded-sm border transition-all text-left flex flex-col items-center group relative overflow-hidden">
                        
                        <!-- Thumbnail Image -->
                        <div class="w-full aspect-square rounded-sm overflow-hidden mb-2 bg-[#07080b]">
                            <img :src="'/' + char.image_path" 
                                 :alt="char.name" 
                                 class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-300">
                        </div>

                        <!-- Name & Archetype Tag -->
                        <div class="w-full text-center truncate">
                            <span x-text="char.name" 
                                  :class="activeSlug === char.slug ? 'text-[#fbbf24]' : 'text-slate-300'"
                                  class="block font-cinzel text-xs font-bold truncate"></span>
                            <span x-text="char.archetype" class="block text-[10px] text-[#94a3b8] truncate"></span>
                        </div>

                        <!-- Active Indicator Glow -->
                        <div x-show="activeSlug === char.slug" class="absolute bottom-0 inset-x-0 h-0.5 bg-[#fbbf24]"></div>
                    </button>
                </template>
            </div>

            <!-- Active Character Spotlight Dossier -->
            <div class="rounded-sm bg-[#07080b] border-2 border-[#262a36] shadow-2xl overflow-hidden p-6 sm:p-8 lg:p-10 transition-all">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <!-- Left: Large 1536x1024 Artwork Frame -->
                    <div class="lg:col-span-6 relative">
                        <div class="relative rounded-sm overflow-hidden border-2 border-[#1e222e] bg-[#0b0c10] shadow-[0_0_30px_rgba(0,0,0,0.9)]">
                            <img :src="'/' + activeChar.image_path" 
                                 :alt="activeChar.name" 
                                 class="w-full aspect-[3/2] object-cover object-center">
                            
                            <!-- Overlay Vignette -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#07080b] via-transparent to-transparent opacity-60"></div>

                            <!-- Floating Archetype Badge -->
                            <div class="absolute top-4 left-4 px-3 py-1 bg-[#07080b]/85 backdrop-blur-md border border-[#d97706]/60 rounded-sm">
                                <span class="text-[11px] font-mono uppercase tracking-wider text-[#fbbf24]" x-text="activeChar.archetype"></span>
                            </div>

                            <!-- Weapon Tag -->
                            <div class="absolute bottom-4 left-4 right-4 px-4 py-2 bg-[#07080b]/90 backdrop-blur-md border border-[#262a36] rounded-sm flex items-center justify-between">
                                <span class="text-[11px] uppercase tracking-wider text-[#94a3b8]">Senjata Andalan:</span>
                                <span class="text-xs font-bold text-white font-cinzel" x-text="activeChar.weapon"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Narrative Details & Stats -->
                    <div class="lg:col-span-6 space-y-6">
                        <!-- Header & Title -->
                        <div>
                            <div class="flex items-center gap-3 mb-1">
                                <span class="text-xs uppercase font-mono tracking-[0.2em] text-[#dc2626]">Arsip Penantang #<span x-text="activeChar.display_order"></span></span>
                            </div>
                            <h3 class="font-metal text-3xl sm:text-4xl text-white tracking-wide" x-text="activeChar.name"></h3>
                            <h4 class="font-cinzel text-sm sm:text-base text-[#fbbf24] font-semibold italic mt-1" x-text="'&ldquo;' + activeChar.title + '&rdquo;'"></h4>
                        </div>

                        <!-- Gritty Voice Line Quote -->
                        <div class="p-4 rounded-sm bg-[#12141a] border-l-4 border-[#dc2626] italic text-xs sm:text-sm text-[#cbd5e1] leading-relaxed">
                            <span class="text-[#dc2626] font-bold not-italic">&ldquo;</span>
                            <span x-text="activeChar.quote"></span>
                            <span class="text-[#dc2626] font-bold not-italic">&rdquo;</span>
                        </div>

                        <!-- Combat Stats Meter (1-5 Bars) -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 py-2 border-y border-[#1a1d26]">
                            <!-- Power -->
                            <div>
                                <div class="flex justify-between text-[11px] text-[#94a3b8] mb-1">
                                    <span>Power</span>
                                    <span class="text-white font-mono" x-text="activeChar.power + '/5'"></span>
                                </div>
                                <div class="w-full bg-[#1e222e] h-1.5 rounded-full overflow-hidden flex gap-0.5">
                                    <template x-for="i in 5">
                                        <div class="flex-1 h-full" :class="i <= activeChar.power ? 'bg-[#ef4444]' : 'bg-transparent'"></div>
                                    </template>
                                </div>
                            </div>

                            <!-- Speed -->
                            <div>
                                <div class="flex justify-between text-[11px] text-[#94a3b8] mb-1">
                                    <span>Speed</span>
                                    <span class="text-white font-mono" x-text="activeChar.speed + '/5'"></span>
                                </div>
                                <div class="w-full bg-[#1e222e] h-1.5 rounded-full overflow-hidden flex gap-0.5">
                                    <template x-for="i in 5">
                                        <div class="flex-1 h-full" :class="i <= activeChar.speed ? 'bg-[#fbbf24]' : 'bg-transparent'"></div>
                                    </template>
                                </div>
                            </div>

                            <!-- Range -->
                            <div>
                                <div class="flex justify-between text-[11px] text-[#94a3b8] mb-1">
                                    <span>Range</span>
                                    <span class="text-white font-mono" x-text="activeChar.range + '/5'"></span>
                                </div>
                                <div class="w-full bg-[#1e222e] h-1.5 rounded-full overflow-hidden flex gap-0.5">
                                    <template x-for="i in 5">
                                        <div class="flex-1 h-full" :class="i <= activeChar.range ? 'bg-[#38bdf8]' : 'bg-transparent'"></div>
                                    </template>
                                </div>
                            </div>

                            <!-- Difficulty -->
                            <div>
                                <div class="flex justify-between text-[11px] text-[#94a3b8] mb-1">
                                    <span>Kesulitan</span>
                                    <span class="text-white font-mono" x-text="activeChar.difficulty + '/5'"></span>
                                </div>
                                <div class="w-full bg-[#1e222e] h-1.5 rounded-full overflow-hidden flex gap-0.5">
                                    <template x-for="i in 5">
                                        <div class="flex-1 h-full" :class="i <= activeChar.difficulty ? 'bg-[#a855f7]' : 'bg-transparent'"></div>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- Combat Tags -->
                        <div class="flex flex-wrap gap-2">
                            <template x-for="tag in activeChar.combat_tags" :key="tag">
                                <span class="px-2.5 py-1 bg-[#12141a] border border-[#262a36] text-[11px] text-[#cbd5e1] font-mono rounded-sm" x-text="'#' + tag"></span>
                            </template>
                        </div>

                        <!-- Narrative Breakdown -->
                        <div class="space-y-3 pt-2">
                            <div>
                                <h5 class="text-xs font-cinzel font-bold text-[#fbbf24] uppercase tracking-wider">Premis Karakter</h5>
                                <p class="text-xs text-[#94a3b8] leading-relaxed mt-0.5" x-text="activeChar.premise"></p>
                            </div>

                            <div>
                                <h5 class="text-xs font-cinzel font-bold text-[#ef4444] uppercase tracking-wider">Akar Masalah Hidup (Tragedi Nyata)</h5>
                                <p class="text-xs text-[#94a3b8] leading-relaxed mt-0.5" x-text="activeChar.obstacle"></p>
                            </div>

                            <div>
                                <h5 class="text-xs font-cinzel font-bold text-[#fbbf24] uppercase tracking-wider">Ambisi pada Takhta Fallen</h5>
                                <p class="text-xs text-[#94a3b8] leading-relaxed mt-0.5" x-text="activeChar.ambition"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ARENAS & GAME MECHANICS SECTION (GDD NOXVERA) -->
    <section id="arenas" class="py-24 bg-[#07080b] border-b border-[#1a1d26]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs uppercase tracking-[0.25em] text-[#fbbf24] font-bold">Arena Melayang & Fisika Pertarungan</span>
                <h2 class="font-metal text-3xl sm:text-4xl text-[#f8fafc] mt-2 tracking-wide">Arena Tempur & Sistem Knockback</h2>
                <div class="w-16 h-0.5 bg-[#dc2626] mx-auto mt-4 mb-4"></div>
                <p class="text-sm text-[#94a3b8] leading-relaxed">
                    Setiap arena dibangun di Godot 4 dengan TileMap dan fisika 2D bertekanan tinggi. Satu langkah ceroboh di dekat tepi platform akan membawamu ke dasar jurang maut.
                </p>
            </div>

            <!-- Stages Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                @foreach ($stages as $stage)
                    <div class="rounded-sm bg-[#0b0c10] border border-[#1e222e] overflow-hidden group hover:border-[#fbbf24]/50 transition-all shadow-xl">
                        <div class="relative aspect-video overflow-hidden bg-[#07080b]">
                            <img src="{{ asset($stage['image']) }}" 
                                 alt="{{ $stage['name'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent"></div>
                            
                            <!-- Hazard Warning Badge -->
                            <div class="absolute bottom-3 left-3 px-3 py-1 bg-[#dc2626]/85 backdrop-blur-sm rounded-sm text-[11px] font-semibold text-white uppercase tracking-wider flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                <span>{{ $stage['hazard'] }}</span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="font-cinzel text-xl font-bold text-white">{{ $stage['name'] }}</h3>
                            <h4 class="text-xs text-[#fbbf24] font-medium mt-0.5 mb-3">{{ $stage['subtitle'] }}</h4>
                            <p class="text-xs text-[#94a3b8] leading-relaxed">{{ $stage['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Mechanics & PC Controls Breakdown -->
            <div class="p-8 rounded-sm bg-[#0b0c10] border border-[#262a36]">
                <h3 class="font-cinzel text-lg font-bold text-white mb-6 text-center sm:text-left flex items-center gap-2">
                    <span class="text-[#dc2626]">✦</span> Sistem Kontrol Lokal 1v1 PC (Godot 4)
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs">
                    <!-- Player 1 Controls -->
                    <div class="p-4 rounded-sm bg-[#07080b] border border-[#1e222e]">
                        <span class="text-xs font-mono font-bold text-[#38bdf8] uppercase tracking-wider block mb-2">Player 1 (Keyboard Kiri)</span>
                        <ul class="space-y-1.5 text-[#94a3b8]">
                            <li><strong class="text-white font-mono">WASD</strong> — Bergerak & Melompat</li>
                            <li><strong class="text-white font-mono">J</strong> — Serangan Normal / Combo</li>
                            <li><strong class="text-white font-mono">K</strong> — Serangan Kuat / Knockback</li>
                            <li><strong class="text-white font-mono">L</strong> — Dodge / Menghindar</li>
                            <li><strong class="text-white font-mono">I</strong> — Block / Tangkis</li>
                        </ul>
                    </div>

                    <!-- Player 2 Controls -->
                    <div class="p-4 rounded-sm bg-[#07080b] border border-[#1e222e]">
                        <span class="text-xs font-mono font-bold text-[#ef4444] uppercase tracking-wider block mb-2">Player 2 (Keyboard Kanan)</span>
                        <ul class="space-y-1.5 text-[#94a3b8]">
                            <li><strong class="text-white font-mono">Arrow Keys</strong> — Bergerak & Melompat</li>
                            <li><strong class="text-white font-mono">Num 1</strong> — Serangan Normal / Combo</li>
                            <li><strong class="text-white font-mono">Num 2</strong> — Serangan Kuat / Knockback</li>
                            <li><strong class="text-white font-mono">Num 3</strong> — Dodge / Menghindar</li>
                            <li><strong class="text-white font-mono">Num 5</strong> — Block / Tangkis</li>
                        </ul>
                    </div>

                    <!-- Multiple Feedback Internal Economy -->
                    <div class="p-4 rounded-sm bg-[#07080b] border border-[#1e222e]">
                        <span class="text-xs font-mono font-bold text-[#fbbf24] uppercase tracking-wider block mb-2">Ekonomi Internal Pertandingan</span>
                        <p class="text-[#94a3b8] leading-relaxed mb-2">
                            Pemain menghadapi dua ancaman sekaligus: kehabisan HP dan terlempar keluar lapangan (*Death Zone*).
                        </p>
                        <p class="text-[11px] text-[#64748b] leading-relaxed">
                            Mekanisme <em>Block & Dodge</em> memberi kesempatan membalikkan tempo serangan musuh dan merebut kembali posisi tengah arena.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NOXVERA STUDIO & CONTACT SECTION -->
    <section id="studio" class="py-24 bg-[#0b0c10] border-b border-[#1a1d26]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- Studio Overview -->
                <div class="lg:col-span-5 space-y-6">
                    <div>
                        <span class="text-xs uppercase tracking-[0.25em] text-[#dc2626] font-bold">Tentang Pengembang</span>
                        <h2 class="font-metal text-3xl sm:text-4xl text-white mt-1 tracking-wide">Noxvera Studio</h2>
                        <div class="w-16 h-0.5 bg-[#d97706] mt-4 mb-4"></div>
                    </div>

                    <p class="text-xs sm:text-sm text-[#94a3b8] leading-relaxed">
                        <strong>Noxvera</strong> adalah tim indie game developer yang berdedikasi membangun game aksi dengan rasa otentik, membumi, dan berani. <strong>FALLEN</strong> lahir dari eksperimen memadukan intensitas mekanik fighting game klasik seperti <em>The King of Fighters</em> dan bahaya platform brawler ala <em>Brawlhalla</em> dengan realita cerita sosial sehari-hari.
                    </p>

                    <div class="p-5 rounded-sm bg-[#07080b] border border-[#1e222e] space-y-3">
                        <h4 class="font-cinzel text-xs font-bold text-[#fbbf24] uppercase tracking-wider">Filosofi Noxvera</h4>
                        <p class="text-xs text-[#94a3b8] leading-relaxed">
                            &ldquo;Kami percaya bahwa setiap karakter game harus memiliki alasan hidup yang nyata untuk bertarung. Dendam skripsi, keresahan pos ronda, dan mimpi musisi sama bernilainya dengan kutukan mitologi kuno.&rdquo;
                        </p>
                    </div>

                    <div class="text-xs text-[#64748b]">
                        Tertarik bekerjasama, meliput game FALLEN, atau bergabung menjadi tester? Hubungi tim kami melalui formulir di samping.
                    </div>
                </div>

                <!-- Contact & Playtest Signup Form -->
                <div id="contact" class="lg:col-span-7 rounded-sm bg-[#07080b] border-2 border-[#262a36] p-6 sm:p-8 shadow-2xl">
                    <h3 class="font-cinzel text-xl font-bold text-white mb-1">Daftar Playtest & Kontak Studio</h3>
                    <p class="text-xs text-[#94a3b8] mb-6">Dapatkan kesempatan memainkan build prototype awal Godot 4 atau kirimkan pertanyaan langsung ke Noxvera Studio.</p>

                    @if (session('status'))
                        <div class="mb-6 p-4 rounded-sm bg-[#065f46]/30 border border-[#059669] text-[#34d399] text-xs leading-relaxed flex items-center gap-3">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>{{ session('status') }}</span>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 p-4 rounded-sm bg-[#7f1d1d]/30 border border-[#dc2626] text-[#fca5a5] text-xs space-y-1">
                            @foreach ($errors->all() as $error)
                                <p>• {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf
                        
                        <!-- Honeypot for spam bots -->
                        <div class="hidden">
                            <input type="text" name="hp_verification" tabindex="-1" autocomplete="off">
                        </div>

                        <!-- Nama & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-xs font-medium text-slate-300 mb-1">Nama Lengkap / Alias</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}" 
                                       required 
                                       placeholder="Contoh: Aron Pratama"
                                       class="w-full px-3.5 py-2.5 rounded-sm bg-[#12141a] border border-[#262a36] focus:border-[#fbbf24] focus:ring-1 focus:ring-[#fbbf24] text-xs text-white placeholder-[#475569] outline-none transition-all">
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-medium text-slate-300 mb-1">Alamat Email</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       required 
                                       placeholder="nama@email.com"
                                       class="w-full px-3.5 py-2.5 rounded-sm bg-[#12141a] border border-[#262a36] focus:border-[#fbbf24] focus:ring-1 focus:ring-[#fbbf24] text-xs text-white placeholder-[#475569] outline-none transition-all">
                            </div>
                        </div>

                        <!-- Keperluan -->
                        <div>
                            <label for="inquiry_type" class="block text-xs font-medium text-slate-300 mb-1">Keperluan / Kategori</label>
                            <select id="inquiry_type" 
                                    name="inquiry_type" 
                                    class="w-full px-3.5 py-2.5 rounded-sm bg-[#12141a] border border-[#262a36] focus:border-[#fbbf24] focus:ring-1 focus:ring-[#fbbf24] text-xs text-white outline-none transition-all">
                                <option value="playtest" {{ old('inquiry_type') === 'playtest' ? 'selected' : '' }}>🎮 Daftar Closed Alpha Playtest (PC)</option>
                                <option value="publisher" {{ old('inquiry_type') === 'publisher' ? 'selected' : '' }}>💼 Publisher / Sponsor / Investor</option>
                                <option value="press" {{ old('inquiry_type') === 'press' ? 'selected' : '' }}>📰 Press Kit & Media Coverage</option>
                                <option value="general" {{ old('inquiry_type') === 'general' ? 'selected' : '' }}>✉️ Pertanyaan Umum / Komunitas</option>
                            </select>
                        </div>

                        <!-- Pesan -->
                        <div>
                            <label for="message" class="block text-xs font-medium text-slate-300 mb-1">Pesan / Catatan Tambahan</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="4" 
                                      required 
                                      placeholder="Tuliskan spesifikasi PC Anda untuk playtest atau rincian pertanyaan Anda..."
                                      class="w-full px-3.5 py-2.5 rounded-sm bg-[#12141a] border border-[#262a36] focus:border-[#fbbf24] focus:ring-1 focus:ring-[#fbbf24] text-xs text-white placeholder-[#475569] outline-none transition-all">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full py-3 rounded-sm bg-gradient-to-r from-[#dc2626] to-[#b91c1c] hover:from-[#ef4444] hover:to-[#dc2626] text-white font-semibold text-xs tracking-wider uppercase border border-[#ef4444]/40 shadow-[0_0_20px_rgba(220,38,38,0.3)] hover:shadow-[0_0_28px_rgba(220,38,38,0.5)] transition-all">
                            Kirim Formulir ke Noxvera Studio
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
