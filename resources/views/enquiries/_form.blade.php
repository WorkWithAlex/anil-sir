@if (session('success'))
    <div class="mb-10 rounded-xl border border-green-200 bg-green-50 px-6 py-4 text-green-700">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{ route('enquiry.store') }}" class="space-y-0">
    @csrf

    <div class="rounded-2xl border border-slate-200 bg-white p-10">

        <h2 class="text-xl font-semibold text-slate-900 mb-8">
            Hiring details
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Company Name --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Company name <span class="text-red-500">*</span>
                </label>
                <input type="text" name="company_name" value="{{ old('company_name') }}" required
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Contact Person --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Contact person <span class="text-red-500">*</span>
                </label>
                <input type="text" name="contact_person" value="{{ old('contact_person') }}" required
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Phone --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Phone
                </label>
                <input type="text" name="phone" value="{{ old('phone') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Job Title --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Job title <span class="text-red-500">*</span>
                </label>
                <input type="text" name="job_title" value="{{ old('job_title') }}" required
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Skills --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Skills
                </label>
                <input type="text" name="skills" placeholder="Laravel, React, MySQL"
                       value="{{ old('skills') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Experience --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Experience required
                </label>
                <input type="text" name="experience_required" placeholder="2-4 years"
                       value="{{ old('experience_required') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Employment Type --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Employment type
                </label>
                <select name="employment_type"
                        class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
                    <option value="">Select</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Contract</option>
                    <option>Remote</option>
                </select>
            </div>

            {{-- Location --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Location
                </label>
                <input type="text" name="location" value="{{ old('location') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Budget --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Budget
                </label>
                <input type="text" name="budget" placeholder="₹ / Month or Fixed"
                       value="{{ old('budget') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Timeline --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Timeline
                </label>
                <input type="text" name="timeline" placeholder="Immediate / 2 weeks"
                       value="{{ old('timeline') }}"
                       class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">
            </div>

            {{-- Message --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Additional message
                </label>
                <textarea name="message" rows="4"
                          class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900">{{ old('message') }}</textarea>
            </div>

        </div>
    </div>

    {{-- Submit --}}
    <div class="flex justify-end">
        <button type="submit"
                class="inline-flex items-center rounded-lg bg-slate-900 px-8 py-3 text-white font-medium">
            Submit requirement
        </button>
    </div>
</form>
