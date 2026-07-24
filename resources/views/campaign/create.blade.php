@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Tambah Campaign</h1>

    <form action="{{ route('campaign.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-2">Judul</label>
            <input type="text"
                   name="title"
                   class="w-full border rounded-lg p-3">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2">Deskripsi</label>
            <textarea name="description"
                      class="w-full border rounded-lg p-3"></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2">Target Donasi</label>
            <input type="number"
                   name="target_donation"
                   class="w-full border rounded-lg p-3">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2">Deadline</label>
            <input type="date"
                   name="deadline"
                   class="w-full border rounded-lg p-3">
        </div>

        <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg">
            Simpan Campaign
        </button>

    </form>
</div>

@endsection