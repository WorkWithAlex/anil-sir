@if (session('success'))
    <div class="mb-10 rounded-2xl border border-green-200 bg-green-50 px-6 py-5 text-green-700">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{ route('enquiry.store') }}" class="space-y-12">
    @csrf

    {{-- COMPANY & CONTACT --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-10">
        <h2 class="text-xl font-semibold text-brand-navy mb-8">
            Company & contact details
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Company name <span class="text-red-500">*</span>
                </label>
                <input type="text" name="company_name" value="{{ old('company_name') }}" required
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Contact person <span class="text-red-500">*</span>
                </label>
                <input type="text" name="contact_person" value="{{ old('contact_person') }}" required
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Phone
                </label>
                <input type="text" name="phone" value="{{ old('phone') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

        </div>
    </div>

    {{-- ROLE REQUIREMENT --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-10">
        <h2 class="text-xl font-semibold text-brand-navy mb-8">
            Role requirement
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Job title <span class="text-red-500">*</span>
                </label>
                <input type="text" name="job_title" value="{{ old('job_title') }}" required
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Skills
                </label>
                <input type="text" name="skills" placeholder="Laravel, React, MySQL"
                       value="{{ old('skills') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Experience required
                </label>
                <input type="text" name="experience_required" placeholder="2–4 years"
                       value="{{ old('experience_required') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Employment type
                </label>
                <select name="employment_type"
                        class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
                    <option value="">Select</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Contract</option>
                    <option>Remote</option>
                </select>
            </div>

        </div>
    </div>

    {{-- LOGISTICS --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-10">
        <h2 class="text-xl font-semibold text-brand-navy mb-8">
            Logistics & expectations
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Location
                </label>
                <input type="text" name="location" value="{{ old('location') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Budget
                </label>
                <input type="text" name="budget" placeholder="₹ / Month or Fixed"
                       value="{{ old('budget') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Timeline
                </label>
                <input type="text" name="timeline" placeholder="Immediate / 2 weeks"
                       value="{{ old('timeline') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">
            </div>

        </div>
    </div>

    {{-- ADDITIONAL NOTES --}}
    <div class="rounded-3xl border border-slate-200 bg-white p-10">
        <h2 class="text-xl font-semibold text-brand-navy mb-6">
            Additional notes
        </h2>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Message
            </label>
            <textarea name="message" rows="4"
                      class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal">{{ old('message') }}</textarea>
        </div>
    </div>

    {{-- SUBMIT --}}
    <div class="flex justify-end">
        <button type="submit"
                class="inline-flex items-center rounded-lg bg-brand-navy px-10 py-4 text-white font-semibold hover:bg-brand-teal transition">
            Submit requirement
        </button>
    </div>

</form>