@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Edit Campaign
</h1>

<form action="/campaign/{{ $campaign->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-4">

        <label>Judul</label>

        <input
            type="text"
            name="title"
            value="{{ $campaign->title }}"
            class="border w-full p-2 rounded">

    </div>

    <div class="mb-4">

        <label>Target Donasi</label>

        <input
            type="number"
            name="target_donation"
            value="{{ $campaign->target_donation }}"
            class="border w-full p-2 rounded">

    </div>

    <div class="mb-4">

        <label>Dana Terkumpul</label>

        <input
            type="number"
            name="collected_donation"
            value="{{ $campaign->collected_donation }}"
            class="border w-full p-2 rounded">

    </div>

    <button
        class="bg-blue-500 text-white px-4 py-2 rounded">

        Update

    </button>

</form>

@endsection