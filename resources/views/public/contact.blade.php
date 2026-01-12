@extends('layouts.public.app')

@section('content')

{{-- Hero --}}
<section class="max-w-7xl mx-auto px-6 pt-28 pb-20">
    <div class="max-w-3xl">
        <span class="inline-block text-sm font-semibold text-slate-500 uppercase tracking-wide">
            Contact us
        </span>

        <h1 class="mt-4 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
            Get in touch with our team
        </h1>

        <p class="mt-6 text-lg text-slate-600 leading-relaxed">
            Have a question about our staffing workflow or need help getting started? We are here to help.
        </p>
    </div>
</section>

{{-- Contact content --}}
<section class="max-w-7xl mx-auto px-6 pb-32">
    <div class="grid md:grid-cols-2 gap-16">

        {{-- Contact information --}}
        <div>
            <h2 class="text-2xl font-semibold text-slate-900">
                Contact information
            </h2>

            <p class="mt-4 text-slate-600 leading-relaxed max-w-md">
                Reach out to us using the details below or submit the form and our team will respond shortly.
            </p>

            <div class="mt-10 space-y-6 text-sm text-slate-700">
                <div>
                    <span class="block text-slate-500">Email</span>
                    <span class="font-medium">support@staffingapp.com</span>
                </div>

                <div>
                    <span class="block text-slate-500">Phone</span>
                    <span class="font-medium">+91 90000 00000</span>
                </div>

                <div>
                    <span class="block text-slate-500">Business hours</span>
                    <span class="font-medium">Monday to Friday, 10:00 AM – 6:00 PM IST</span>
                </div>

                <div>
                    <span class="block text-slate-500">Office address</span>
                    <span class="font-medium">
                        Pune, Maharashtra, India
                    </span>
                </div>
            </div>
        </div>

        {{-- Contact form --}}
        <div>
            <div class="rounded-2xl border border-slate-200 bg-white p-10">

                <h2 class="text-xl font-semibold text-slate-900 mb-8">
                    Send us a message
                </h2>

                <form method="POST" action="#" class="space-y-8">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Name
                        </label>
                        <input type="text"
                               class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Email
                        </label>
                        <input type="email"
                               class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Message
                        </label>
                        <textarea rows="4"
                                  class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                                class="inline-flex items-center rounded-lg bg-slate-900 px-8 py-3 text-white font-medium">
                            Send message
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</section>

{{-- Map section --}}
<section class="bg-slate-50 py-28">
    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-2xl mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">
                Our location
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                Visit our office or find us on the map.
            </p>
        </div>

        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white">
            {{-- Replace src with your actual Google Maps embed URL --}}
            <iframe
                src="https://www.google.com/maps?q=Pune%20Maharashtra%20India&output=embed"
                class="w-full h-[400px] border-0"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</section>

@endsection
