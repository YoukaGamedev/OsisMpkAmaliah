@extends('admin.pemilu.pemilu')

@section('content1')

<div class="container mx-auto p-6 bg-gray-100 min-h-screen">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Form Input -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Tambah Kandidat Calon Pemilihan</h2>
            <form action="{{ ('/admin/pemilu/datakandidat') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                    <input name="nisn" type="text" id="nisn" class="w-full p-2 border rounded-md" placeholder="NISN">
                </div>
                <div>
                    <label for="nomorPasangan" class="block text-sm font-medium text-gray-700">Nomor Pasangan Calon</label>
                    <input name="nomor_pasangan_calon" type="text" id="nomorPasangan" class="w-full p-2 border rounded-md" placeholder="Nomor Pasangan Calon">
                </div>
                <div>
                    <label for="namaPasangan" class="block text-sm font-medium text-gray-700">Nama Pasangan Calon</label>
                    <input name="nama_pasangan_calon" type="text" id="namaPasangan" class="w-full p-2 border rounded-md" placeholder="Nama Pasangan Calon">
                </div>
                <div>
                    <label for="visiMisi" class="block text-sm font-medium text-gray-700">Visi Misi</label>
                    <textarea name="visi_misi" id="visiMisi" class="w-full p-2 border rounded-md" rows="4" placeholder="Visi Misi"></textarea>
                </div>
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
                    <input name="foto" type="file" id="foto" class="w-full p-2 border rounded-md" onchange="previewImage(event)">
                    <img id="preview" class="mt-2 w-24 h-24 object-cover rounded-md hidden" />
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Submit</button>
            </form>
        </div>
        
        <!-- Data Table -->
        <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Data Kandidat</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">No</th>
                            <th class="border p-2">NISN</th>
                            <th class="border p-2">Nomor Paslon</th>
                            <th class="border p-2">Nama Paslon</th>
                            <th class="border p-2">Visi Misi</th>
                            <th class="border p-2">Foto</th>
                            <th class="border p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($datakandidat as $kandidat)
                        <tr class="bg-white hover:bg-gray-100">
                            <td class="border p-2 text-center">{{$loop -> iteration}}</td>
                            <td class="border p-2">{{ $kandidat->nisn }}</td>
                            <td class="border p-2">{{ $kandidat->nomor_pasangan_calon }}</td>
                            <td class="border p-2">{{ $kandidat->nama_pasangan_calon }}</td>
                            <td class="border p-2">{{ $kandidat->visi_misi }}</td>
                            <td class="border p-2 text-center">
                                @if($kandidat->foto)
                                    <img src="{{ asset('storage/' . $kandidat->foto) }}" class="w-12 h-12 object-cover rounded-md">
                                @endif
                            </td>
                            <td class="border p-2 text-center">
                                <form action="{{ url('admin/pemilu/datakandidat/'.$kandidat->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah data akan dihapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        var input = event.target;
        var preview = document.getElementById('preview');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.classList.add('hidden');
        }
    }
</script>

@endsection