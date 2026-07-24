@extends('layouts.app')

@section('title', 'Donasi')

@section('content')

<div class="text-center">

    <h1 class="text-4xl font-bold text-green-600 mb-4">
        Donasi Sekarang
    </h1>

    <p class="text-gray-600 mb-8">
        Setiap bantuan yang Anda berikan akan sangat berarti bagi mereka
        yang membutuhkan.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white rounded-xl shadow-lg p-6">

            <h2 class="text-xl font-bold mb-3">
                Donasi Pendidikan
            </h2>

            <p class="text-gray-600 mb-5">
                Membantu anak-anak mendapatkan pendidikan yang layak.
            </p>

            <button class="bg-green-500 text-white px-5 py-2 rounded-lg hover:bg-green-600">
                Donasi
            </button>

        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">

            <h2 class="text-xl font-bold mb-3">
                Donasi Kesehatan
            </h2>

            <p class="text-gray-600 mb-5">
                Membantu biaya pengobatan masyarakat kurang mampu.
            </p>

            <button class="bg-green-500 text-white px-5 py-2 rounded-lg hover:bg-green-600">
                Donasi
            </button>

        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">

            <h2 class="text-xl font-bold mb-3">
                Donasi Bencana
            </h2>

            <p class="text-gray-600 mb-5">
                Membantu korban bencana alam di seluruh Indonesia.
            </p>

            <button class="bg-green-500 text-white px-5 py-2 rounded-lg hover:bg-green-600">
                Donasi
            </button>

        </div>

    </div>

</div>

@endsection