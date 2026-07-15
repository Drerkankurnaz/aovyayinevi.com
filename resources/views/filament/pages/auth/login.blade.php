<div class="fixed inset-0 z-[60] flex min-h-screen w-full bg-[#0d1120]">
    {{-- Left visual panel --}}
    <div class="relative hidden w-1/2 flex-col items-center justify-center overflow-hidden p-10 text-center lg:flex"
         style="background: radial-gradient(circle at 15% 15%, #6366f1 0%, transparent 45%), radial-gradient(circle at 85% 85%, #22d3ee 0%, transparent 45%), linear-gradient(160deg, #0b1024 0%, #131a35 55%, #171f3d 100%);">
        <a href="{{ url('/') }}" class="absolute right-10 top-10 rounded-full bg-white/10 px-4 py-2 text-sm text-white/90 backdrop-blur transition hover:bg-white/20">
            ← Siteye dön
        </a>
        <div class="flex max-w-lg flex-col items-center">
            <div class="rounded-2xl bg-white p-4">
                <img src="{{ asset('assets/images/logo.png') }}" alt="AOV Yayınevi" class="h-20 w-auto lg:h-24">
            </div>
            <h2 class="mt-10 text-4xl font-semibold leading-tight text-white lg:text-5xl">
                Bilimin izinde,<br>kalemin gücüyle.
            </h2>
            <p class="mt-6 text-lg text-white/60">
                AOV Yayınevi içerik yönetim paneline hoş geldiniz.
            </p>
        </div>
    </div>

    {{-- Right form panel --}}
    <div id="cool-login" class="flex w-full flex-col justify-center bg-[#0d1120] px-6 py-16 sm:px-12 lg:w-1/2 lg:px-20">
        <div class="mx-auto w-full max-w-sm">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="mb-8 h-10 w-auto rounded-lg bg-white p-1 lg:hidden">

            <h1 class="text-2xl font-semibold text-white">Yönetim Paneli</h1>
            <p class="mt-2 text-sm text-white/50">Devam etmek için giriş yapın</p>

            <div class="mt-8">
                <x-filament-panels::form id="form" wire:submit="authenticate">
                    {{ $this->form }}

                    <x-filament-panels::form.actions
                        :actions="$this->getCachedFormActions()"
                        :full-width="$this->hasFullWidthFormActions()"
                    />
                </x-filament-panels::form>
            </div>
        </div>

        <style>
            #cool-login .fi-fo-field-wrp-label,
            #cool-login label { color: #cbd5e1 !important; }
            #cool-login input {
                background-color: rgba(255,255,255,0.06) !important;
                border-color: rgba(255,255,255,0.14) !important;
                color: #f1f5f9 !important;
            }
            #cool-login input::placeholder { color: #64748b !important; }
            #cool-login input:focus {
                border-color: #6366f1 !important;
                box-shadow: 0 0 0 1px #6366f1 !important;
            }
            #cool-login .fi-fo-field-wrp-error-message { color: #fb7185 !important; }
        </style>
    </div>
</div>
