@extends('layout.main')

@section('navbar')
@php
$no=1;
@endphp

<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Total Keluarga</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warga as $w)
            <!-- row 1 -->
            <tr>
                <th>{{ $no }}</th>
                <td>{{ $w -> nama }}</td>
                <td>{{ $w -> jumlah }}</td>
                <td>{{ $w -> alamat }}</td>
                <td>
                    <a href="/{{ $w -> id }}/edit"
                        class="relative inline-flex items-center justify-center p-0.5 mb-5 mt-5 ml-5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Edit
                        </span>
                    </a>

                    <form action="/update/{{ $w->id }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                          <span
                              class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                             Hapus
                          </span>
                        </button >
  
                    </form>
                </td>
                @php
                $no++
                @endphp

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection