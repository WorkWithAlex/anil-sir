<style>
    /* =========================================
    Final Earth-Rotation Animation
    ========================================= */

    .map-drift {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 200%;
        display: flex;
        animation: earth-rotate 50s linear infinite;
        will-change: transform;
    }

    @keyframes earth-rotate {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .map-rotation {
            animation: none;
        }
    }
</style>
{{-- HERO : Animated Global Network --}}
<section class="relative overflow-hidden">

    {{-- Base gradient --}}
    {{-- <div class="absolute inset-0 bg-gradient-to-br from-brand-navy to-brand-navyDark"></div> --}}
    <div class="absolute inset-0 bg-gradient-to-r from-brand-navy to-brand-teal"></div>

    {{-- Revolving world map --}}
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="map-drift">
            <img src="{{ asset('images/world.svg') }}" alt="" class="w-1/2 max-w-none">
            <img src="{{ asset('images/world.svg') }}" alt="" class="w-1/2 max-w-none">
        </div>
    </div>

    {{-- Content --}}
    <div class="relative max-w-7xl mx-auto px-6 pt-32 pb-48">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left --}}
            <div class="max-w-xl text-white">
                <span class="inline-flex items-center gap-2 text-xl font-bold uppercase tracking-wide text-brand-teal">
                    IT Staffing Workflow
                </span>

                <h1 class="mt-6 text-5xl sm:text-6xl font-extrabold tracking-tight leading-tight">
                    Collect and manage staffing requirements
                    <span class="block text-brand-teal">
                        without chaos
                    </span>
                </h1>

                <p class="mt-6 text-lg text-slate-200 leading-relaxed">
                    A structured system for companies to submit hiring needs and for admins
                    to review, track, and manage them in one secure place.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="{{ route('enquiry.create') }}"
                       class="inline-flex items-center justify-center px-7 py-3 rounded-lg bg-brand-teal text-brand-navy font-semibold hover:bg-brand-gold transition">
                        Submit staffing requirement
                    </a>

                    <a href="#how-it-works"
                       class="inline-flex items-center justify-center px-7 py-3 rounded-lg border border-white/30 text-white font-medium hover:border-brand-teal hover:text-brand-teal transition">
                        See how it works
                    </a>
                </div>
            </div>

            {{-- Right preview --}}
            <div class="relative">
                <div class="rounded-2xl bg-white/5 backdrop-blur border border-white/10 shadow-2xl p-4">
                    <img
                        src="{{asset('images/full-logo.jpg')}}"
                        alt="System workflow preview"
                        class="rounded-xl w-full"
                    >
                </div>
            </div>

        </div>
    </div>

</section>
