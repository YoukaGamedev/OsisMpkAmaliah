@extends('main')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-2xl mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header Section -->
            <div class="bg-gray-50 border-b px-6 py-4">
                <h2 class="text-xl font-bold text-gray-800">
                    Edit Data User Dan Admin
                </h2>
                <p class="text-sm text-gray-600 mt-1">
                    Perbarui informasi pengguna.
                </p>
            </div>

            <!-- Form Section -->
            <div class="p-6">
                <form action="{{ route('useradmin.update', $user->id) }}" 
                      method="POST" 
                      class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Nama Lengkap -->
                    <div class="space-y-2">
                        <label for="name" class="text-sm font-medium text-gray-700 block">
                            Nama Lengkap
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name', $user->name) }}" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300"
                            required
                        >
                        @error('name')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium text-gray-700 block">
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email', $user->email) }}" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300"
                            required
                        >
                        @error('email')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Kepengurusan -->
                    <div class="space-y-2">
                        <label for="kepengurusan" class="text-sm font-medium text-gray-700 block">
                            Kepengurusan
                        </label>
                        <select id="kepengurusan" name="kepengurusan" class="w-full px-4 py-3 rounded-lg border border-gray-300" required>
                            <option value="OSIS" {{ old('kepengurusan', $user->kepengurusan) == 'OSIS' ? 'selected' : '' }}>OSIS</option>
                            <option value="MPK" {{ old('kepengurusan', $user->kepengurusan) == 'MPK' ? 'selected' : '' }}>MPK</option>
                            <option value="Lain" {{ old('kepengurusan', $user->kepengurusan) == 'Lain' ? 'selected' : '' }}>Lain</option>
                        </select>
                        @error('kepengurusan')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Sekolah -->
                    <div class="space-y-2">
                        <label for="sekolah" class="text-sm font-medium text-gray-700 block">
                            Sekolah
                        </label>
                        <select id="sekolah" name="sekolah" class="w-full px-4 py-3 rounded-lg border border-gray-300" required>
                            <option value="A1" {{ old('sekolah', $user->sekolah) == 'A1' ? 'selected' : '' }}>A1</option>
                            <option value="A2" {{ old('sekolah', $user->sekolah) == 'A2' ? 'selected' : '' }}>A2</option>
                        </select>
                        @error('sekolah')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div class="space-y-2">
                        <label for="role" class="text-sm font-medium text-gray-700 block">
                            Role
                        </label>
                        <select id="role" name="role" class="w-full px-4 py-3 rounded-lg border border-gray-300" required>
                            <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User (Siswa)</option>
                            <option value="admin_osis" {{ old('role', $user->role) == 'admin_osis' ? 'selected' : '' }}>Admin OSIS</option>
                            <option value="admin_pembina" {{ old('role', $user->role) == 'admin_pembina' ? 'selected' : '' }}>Admin Pembina</option>
                         </select>

                        @error('role')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password (Opsional) -->
                    <div class="space-y-2">
                        <label for="password" class="text-sm font-medium text-gray-700 block">
                            Password (Kosongkan jika tidak ingin mengubah)
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300"
                            placeholder="Minimal 8 karakter"
                        >
                        @error('password')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="password_confirmation" class="text-sm font-medium text-gray-700 block">
                            Konfirmasi Password
                        </label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300"
                            placeholder="Masukkan ulang password"
                        >
                        @error('password_confirmation')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button 
                            type="submit" 
                            class="w-full bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700"
                        >
                            Update Data User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
