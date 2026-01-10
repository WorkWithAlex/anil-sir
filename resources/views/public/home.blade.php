@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-6">

    <h1 class="text-3xl font-bold mb-4">IT Staffing Services</h1>
    <p class="mb-8">
        Share your hiring requirements and our team will get back to you.
    </p>

    @include('enquiries._form')

</div>
@endsection
