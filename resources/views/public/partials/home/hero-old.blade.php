
{{-- HERO (Premium / Modern) --}}
<section class="relative overflow-hidden">

    {{-- Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-brand-navy to-brand-navyDark"></div>

    {{-- Subtle accent --}}
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-teal/20 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6 pt-28 pb-32">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left Content --}}
            <div class="max-w-xl text-white">

                <span class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-wide text-brand-teal">
                    <span class="w-2 h-2 rounded-full bg-brand-teal"></span>
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

            {{-- Right Visual --}}
            <div class="relative">

                <div class="relative rounded-2xl bg-white/5 backdrop-blur border border-white/10 shadow-2xl p-4">
                    <img
                        src="https://placehold.co/560x340/3fa9b5/FFFFFF?text=System+Workflow+Preview"
                        alt="Staffing workflow system preview"
                        class="rounded-xl w-full"
                    >
                </div>

            </div>

        </div>

    </div>

</section>