@extends('admin.pemilu.pemilu')

@section('content1')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-2xl mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-gray-50 border-b px-6 py-4">
                <h2 class="text-xl font-bold text-gray-800">Edit Data User</h2>
                <p class="text-sm text-gray-600 mt-1">Perbarui informasi pengguna di bawah ini.</p>
            </div>

            <!-- Form -->
            <div class="p-6">
                <form action="{{ route('datadpt.update', $user->id) }}" 
                      method="POST"
                      class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div class="space-y-2">
                        <label for="name" class="text-sm font-medium text-gray-700 block">Nama Lengkap</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300" 
                            placeholder="Masukkan nama lengkap" required>
                        <small class="text-gray-500">Masukan Nama.</small>
                        @error('name')
                            <p class="text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Kelas -->
                    <div class="space-y-2">
                        <label for="kelas" class="text-sm font-medium text-gray-700 block">Nama Lengkap</label>
                        <input type="text" id="kelas" name="kelas" value="{{ old('kelas', $user->kelas) }}" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300" 
                            placeholder="Masukkan nama lengkap" required>
                        <small class="text-gray-500">Masukan Nama.</small>
                        @error('kelas')
                            <p class="text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium text-gray-700 block">Alamat Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300" 
                            placeholder="nama@domain.com" required>
                        <small class="text-gray-500">Masukan Email.</small>
                        @error('email')
                            <p class="text-sm text-red-600 flex items-center">{{ $message }}</p>
                        @enderror
                    </div>

                                        <!-- Password -->
                    <div class="space-y-2">
                        <label for="password" class="text-sm font-medium text-gray-700 block">Password (Kosongkan jika tidak ingin mengubah)</label>
                        <input type="password" id="password" name="password" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300" 
                            placeholder="Minimal 8 karakter">
                        <small class="text-gray-500">Masukan Password baru jika ingin mengganti.</small>
                        @error('password')
                            <p class="text-sm text-red-600 flex items-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="space-y-2">
                        <label for="password_confirmation" class="text-sm font-medium text-gray-700 block">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300" 
                            placeholder="Masukkan ulang password">
                        <small class="text-gray-500">Masukkan ulang password jika mengubah.</small>
                        @error('password_confirmation')
                            <p class="text-sm text-red-600 flex items-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Kepengurusan -->
                    <div class="space-y-2">
                        <label for="kepengurusan" class="text-sm font-medium text-gray-700 block">Kepengurusan</label>
                        <select id="kepengurusan" name="kepengurusan" class="w-full px-4 py-3 rounded-lg border border-gray-300">
                            <option value="">-- Pilih Kepengurusan (Opsional) --</option>
                            <option value="OSIS" {{ old('kepengurusan', $user->kepengurusan) == 'OSIS' ? 'selected' : '' }}>OSIS</option>
                            <option value="MPK" {{ old('kepengurusan', $user->kepengurusan) == 'MPK' ? 'selected' : '' }}>MPK</option>
                            <option value="Lain" {{ old('kepengurusan', $user->kepengurusan) == 'Lain' ? 'selected' : '' }}>Lain</option>
                        </select>
                        <small class="text-gray-500">Masukan Kepengurusan.</small>
                        @error('kepengurusan')
                            <p class="text-sm text-red-600 flex items-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Sekolah -->
                    <div class="space-y-2">
                        <label for="sekolah" class="text-sm font-medium text-gray-700 block">Sekolah</label>
                        <select id="sekolah" name="sekolah" class="w-full px-4 py-3 rounded-lg border border-gray-300" required>
                            <option value="A1" {{ old('sekolah', $user->sekolah) == 'A1' ? 'selected' : '' }}>A1</option>
                            <option value="A2" {{ old('sekolah', $user->sekolah) == 'A2' ? 'selected' : '' }}>A2</option>
                            <option value="Guru" {{ old('sekolah', $user->sekolah) == 'Guru' ? 'selected' : '' }}>Guru</option>
                        </select>
                        <small class="text-gray-500">Masukan Sekolah.</small>
                        @error('sekolah')
                            <p class="text-sm text-red-600 flex items-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div class="space-y-2">
                        <label for="role" class="text-sm font-medium text-gray-700 block">Peran Pengguna</label>
                        <select id="role" name="role" class="w-full px-4 py-3 rounded-lg border border-gray-300" required>
                            <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                            <option value="admin_osis" {{ old('role', $user->role) == 'admin_osis' ? 'selected' : '' }}>Admin OSIS</option>
                            <option value="admin_pembina" {{ old('role', $user->role) == 'admin_pembina' ? 'selected' : '' }}>Admin Pembina</option>
                        </select>
                        <small class="text-gray-500">Masukan Peran Pengguna.</small>
                        @error('role')
                            <p class="text-sm text-red-600 flex items-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- NIS -->
                    <div class="space-y-2">
                        <label for="nis" class="text-sm font-medium text-gray-700 block">NIS</label>
                        <input type="text" id="nis" name="nis" 
                            value="{{ old('nis', $user->nis) }}"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300"
                            placeholder="Masukkan NIS siswa" required>
                        <small class="text-gray-500">Masukan Nomor Induk Siswa.</small>
                        @error('nis')
                            <p class="text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Tombol Submit -->
                    <div class="pt-4">
                        <button type="submit" 
                            class="w-full bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                            Update Data User
                        </button>
                    </div>
                </form>

                <!-- Catatan -->
                <div class="bg-blue-50 p-4 rounded-lg shadow-md my-4">
                    <h3 class="font-semibold text-gray-700">Tips Pengisian</h3>
                    <ul class="list-disc pl-5 text-sm text-gray-600 mt-2">
                        <li><strong>Nama & Email:</strong> Perbarui sesuai data terbaru.</li>
                        <li><strong>Kepengurusan:</strong> Bisa dikosongkan jika tidak tergabung organisasi.</li>
                        <li><strong>Sekolah:</strong> Pastikan sesuai unit sekolah pengguna.</li>
                        <li><strong>Peran Pengguna:</strong> Pilih sesuai tanggung jawab pengguna.</li>
                        <li><strong>Password:</strong> Isi hanya jika ingin mengganti password lama.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
