@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-6">
        Documentation Files
    </h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-5">
            {{ session('success') }}
        </div>
    @endif

    <form action="/documentations"
          method="POST"
          enctype="multipart/form-data"
          class="bg-white shadow rounded-lg p-6 mb-10">

        @csrf

        <div class="mb-4">

            <label class="block font-semibold mb-2">
                Nama Dokumen
            </label>

            <input type="text"
                   name="title"
                   class="w-full border rounded-lg p-3"
                   required>

        </div>

        <div class="mb-4">

            <label class="block font-semibold mb-2">
                Pilih File
            </label>

            <input type="file"
                   name="attachment"
                   class="w-full border rounded-lg p-3"
                   required>

        </div>

        <button class="bg-blue-600 text-white px-5 py-2 rounded-lg">
            Upload
        </button>

    </form>

    <h2 class="text-2xl font-bold mb-6">
        Daftar File
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        @foreach($files as $file)

        <div class="bg-white rounded-lg shadow p-5">

            <h3 class="font-bold text-lg">
                {{ $file->title }}
            </h3>

            <p class="text-sm text-gray-500 mb-3">
                {{ strtoupper($file->file_type) }}
            </p>

            @if(in_array($file->file_type,['jpg','jpeg','png']))

                <img src="{{ asset('storage/'.$file->file_path) }}"
                     class="w-full h-48 object-cover rounded">

            @elseif($file->file_type=='pdf')

                <embed src="{{ asset('storage/'.$file->file_path) }}"
                       width="100%"
                       height="250">

            @elseif($file->file_type=='docx')

                <div class="text-center py-10 text-5xl">
                    📄
                </div>

            @endif

            <a href="{{ asset('storage/'.$file->file_path) }}"
               target="_blank"
               class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded">

                Preview

            </a>

        </div>

        @endforeach

    </div>

</div>

@endsection