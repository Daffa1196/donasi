@extends('layouts.app')

@section('title', 'Profil')

@section('content')

<div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md p-8">

    <h1 class="text-3xl font-bold text-green-600 mb-6">
        Profil DonasiKu
    </h1>

    <p class="text-gray-700 leading-8">
        DonasiKu merupakan platform donasi online yang membantu masyarakat
        untuk menyalurkan bantuan kepada mereka yang membutuhkan secara
        mudah, aman, transparan, dan terpercaya.
    </p>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-green-100 p-5 rounded-lg">
            <h2 class="font-bold text-green-700 mb-2">Visi</h2>

            <p class="text-gray-700">
                Menjadi platform donasi digital terpercaya di Indonesia.
            </p>
        </div>

        <div class="bg-blue-100 p-5 rounded-lg">
            <h2 class="font-bold text-blue-700 mb-2">Misi</h2>

            <ul class="list-disc ml-5 text-gray-700">
                <li>Mempermudah proses donasi.</li>
                <li>Meningkatkan transparansi.</li>
                <li>Membantu masyarakat yang membutuhkan.</li>
            </ul>
        </div>

    </div>

</div>

@endsection