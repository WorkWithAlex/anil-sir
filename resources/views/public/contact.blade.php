@extends('layouts.public.app')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-gradient-to-r from-brand-navy to-brand-teal text-white">
    <div class="max-w-7xl mx-auto px-6 pt-32 pb-24">

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 text-xl font-bold uppercase tracking-wide text-brand-teal">
                {{-- <span class="w-2 h-2 rounded-full bg-brand-teal"></span> --}}
                Contact Us
            </span>

            <h1 class="mt-6 text-5xl font-extrabold tracking-tight leading-tight">
                Get in touch with our team
            </h1>

            <p class="mt-6 text-lg text-slate-200 leading-relaxed">
                Have a question about our staffing workflow or need help getting started?
                Our team is here to help you move forward with clarity.
            </p>
        </div>

    </div>
</section>

{{-- CONTACT CONTENT --}}
<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20">

        {{-- CONTACT INFO --}}
        <div>
            <h2 class="text-3xl font-bold tracking-tight text-brand-navy">
                Contact information
            </h2>

            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-md">
                Reach out using the details below or send us a message.
                We typically respond within one business day.
            </p>

            <div class="mt-12 space-y-8">

                <div class="group flex items-start gap-4">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-brand-teal/10 text-xl">
                        📧
                    </div>
                    <div>
                        <span class="block text-sm text-slate-500">Email</span>
                        <span class="font-medium text-slate-900 group-hover:text-brand-teal transition">
                            support@staffingapp.com
                        </span>
                    </div>
                </div>

                <div class="group flex items-start gap-4">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-brand-teal/10 text-xl">
                        📞
                    </div>
                    <div>
                        <span class="block text-sm text-slate-500">Phone</span>
                        <span class="font-medium text-slate-900 group-hover:text-brand-teal transition">
                            +91 90000 00000
                        </span>
                    </div>
                </div>

                <div class="group flex items-start gap-4">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-brand-teal/10 text-xl">
                        🕒
                    </div>
                    <div>
                        <span class="block text-sm text-slate-500">Business hours</span>
                        <span class="font-medium text-slate-900">
                            Monday to Friday, 10:00 AM – 6:00 PM IST
                        </span>
                    </div>
                </div>

                <div class="group flex items-start gap-4">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-brand-teal/10 text-xl">
                        📍
                    </div>
                    <div>
                        <span class="block text-sm text-slate-500">Office location</span>
                        <span class="font-medium text-slate-900">
                            Pune, Maharashtra, India
                        </span>
                    </div>
                </div>

            </div>
        </div>

        {{-- CONTACT FORM --}}
        <div>
            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-12 shadow-sm">

                <h2 class="text-2xl font-semibold text-brand-navy mb-10">
                    Send us a message
                </h2>

                <form method="POST" action="#" class="space-y-8">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Name
                        </label>
                        <input
                            type="text"
                            class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Email
                        </label>
                        <input
                            type="email"
                            class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Message
                        </label>
                        <textarea
                            rows="4"
                            class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal"></textarea>
                    </div>

                    <div class="pt-4">
                        <button
                            type="submit"
                            class="inline-flex items-center justify-center px-8 py-4 rounded-lg bg-brand-navy text-white font-semibold hover:bg-brand-teal transition">
                            Send message
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</section>

{{-- MAP --}}
<section class="py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-2xl mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-brand-navy">
                Our location
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                Visit our office or find us on the map.
            </p>
        </div>

        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
            <iframe
                src="https://www.google.com/maps?q=Pune%20Maharashtra%20India&output=embed"
                class="w-full h-[420px] border-0"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</section>

@endsection
