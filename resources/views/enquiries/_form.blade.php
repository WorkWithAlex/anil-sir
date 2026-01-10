@if (session('success'))
    <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{ route('enquiry.store') }}" class="space-y-6">
    @csrf

    <!-- Card -->
    <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

        <h2 class="mb-6 text-xl font-semibold text-gray-800">
            Submit Hiring Requirement
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Company Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Company Name <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    name="company_name"
                    value="{{ old('company_name') }}"
                    required
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Contact Person -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Contact Person <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    name="contact_person"
                    value="{{ old('contact_person') }}"
                    required
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email <span class="text-red-500">*</span>
                </label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Phone
                </label>
                <input
                    type="text"
                    name="phone"
                    value="{{ old('phone') }}"
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Job Title -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Job Title <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    name="job_title"
                    value="{{ old('job_title') }}"
                    required
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Skills -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Skills
                </label>
                <input
                    type="text"
                    name="skills"
                    placeholder="Laravel, React, MySQL"
                    value="{{ old('skills') }}"
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Experience -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Experience Required
                </label>
                <input
                    type="text"
                    name="experience_required"
                    placeholder="2-4 years"
                    value="{{ old('experience_required') }}"
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Employment Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Employment Type
                </label>
                <select
                    name="employment_type"
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
                    <option value="">Select</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Contract">Contract</option>
                    <option value="Remote">Remote</option>
                </select>
            </div>

            <!-- Location -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Location
                </label>
                <input
                    type="text"
                    name="location"
                    value="{{ old('location') }}"
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Budget -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Budget
                </label>
                <input
                    type="text"
                    name="budget"
                    placeholder="₹ / Month or Fixed"
                    value="{{ old('budget') }}"
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Timeline -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Timeline
                </label>
                <input
                    type="text"
                    name="timeline"
                    placeholder="Immediate / 2 weeks"
                    value="{{ old('timeline') }}"
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >
            </div>

            <!-- Message -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Additional Message
                </label>
                <textarea
                    name="message"
                    rows="4"
                    class="w-full rounded-lg border-gray-300 focus:border-black focus:ring-black"
                >{{ old('message') }}</textarea>
            </div>

        </div>
    </div>

    <!-- Submit -->
    <div class="flex justify-end">
        <button
            type="submit"
            class="inline-flex items-center rounded-lg bg-black px-6 py-2.5 text-white font-medium hover:bg-gray-800 transition"
        >
            Submit Requirement
        </button>
    </div>
</form>
