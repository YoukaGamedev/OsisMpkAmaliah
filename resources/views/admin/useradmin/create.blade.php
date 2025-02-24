@extends('main')
@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-2xl mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-gray-50 border-b px-6 py-4">
                <h2 class="text-xl font-bold text-gray-800">
                    {{ isset($dpt) ? 'Edit Data Pemilih' : 'Tambah Data Baru' }}
                </h2>
                <p class="text-sm text-gray-600 mt-1">
                    {{ isset($dpt) ? 'Perbarui informasi pemilih yang sudah ada' : 'Tambahkan Data baru ke dalam sistem' }}
                </p>
            </div>

            <!-- Helpful Tips Card -->
            <div class="bg-blue-50 p-4 rounded-lg shadow-md my-4">
                <h3 class="font-semibold text-gray-700">Helpful Tips</h3>
                <ul class="list-disc pl-5 text-sm text-gray-600 mt-2">
                    <li><strong>Nama Lengkap:</strong> Masukkan nama lengkap seperti yang tertera pada KTP.</li>
                    <li><strong>Alamat Email:</strong> Gunakan email yang valid dan aktif untuk komunikasi penting.</li>
                    <li><strong>Peran Pengguna:</strong> Pilih peran yang sesuai. "Admin" memiliki akses penuh, sementara "User" hanya dapat melihat data.</li>
                    <li><strong>Password:</strong> Minimal 8 karakter, pastikan mengandung angka dan huruf untuk keamanan.</li>
                    <li><strong>Konfirmasi Password:</strong> Masukkan ulang password untuk memastikan kesalahan pengetikan tidak terjadi.</li>
                </ul>
            </div>

            <!-- Form Section -->
            <div class="p-6">
                <form action="{{ isset($dpt) ? route('useradmin.update', $dpt->id) : route('useradmin.store') }}" 
                      method="POST"
                      class="space-y-6">
                    @csrf
                    @if(isset($dpt))
                        @method('PUT')
                    @endif

                    <!-- Name Input -->
                    <div class="space-y-2">
                        <label for="name" class="text-sm font-medium text-gray-700 block">
                            Nama Lengkap
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name', isset($dpt) ? $dpt->name : '') }}" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                            placeholder="Masukkan nama lengkap"
                            required
                        >
                        <small class="text-gray-500">Masukkan nama lengkap seperti yang tertera pada KTP.</small>
                        @error('name')
                            <p class="text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium text-gray-700 block">
                            Alamat Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email', isset($dpt) ? $dpt->email : '') }}" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                            placeholder="nama@domain.com"
                            required
                        >
                        <small class="text-gray-500">Gunakan email yang valid dan aktif.</small>
                        @error('email')
                            <p class="text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Role Selection -->
                    <div class="space-y-2">
                        <label for="role" class="text-sm font-medium text-gray-700 block">
                            Peran Pengguna
                        </label>
                        <select 
                            id="role" 
                            name="role" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                            required
                        >
                            <option value="user" {{ old('role', isset($dpt) ? $dpt->role : '') == 'user' ? 'selected' : '' }}>
                                User
                            </option>
                            <option value="admin" {{ old('role', isset($dpt) ? $dpt->role : '') == 'admin' ? 'selected' : '' }}>
                                Admin
                            </option>
                        </select>
                        <small class="text-gray-500">Pilih peran yang sesuai. "Admin" memiliki akses penuh.</small>
                        @error('role')
                            <p class="text-sm text-red-600 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    @if(!isset($dpt))
                        <!-- Password Input -->
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-medium text-gray-700 block">
                                Password
                            </label>
                            <div class="relative">
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150 pr-12"
                                    placeholder="Minimal 8 karakter"
                                    required
                                >
                                <button 
                                    type="button" 
                                    class="absolute inset-y-0 right-0 px-3 flex items-center focus:outline-none"
                                    onclick="togglePasswordVisibility('password')"
                                >
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                            <small class="text-gray-500">Minimal 8 karakter, gunakan kombinasi huruf dan angka.</small>
                            @error('password')
                                <p class="text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Password Confirmation -->
                        <div class="space-y-2">
                            <label for="password_confirmation" class="text-sm font-medium text-gray-700 block">
                                Konfirmasi Password
                            </label>
                            <input 
                                type="password" 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                                placeholder="Masukkan ulang password"
                                required
                            >
                            <small class="text-gray-500">Masukkan ulang password untuk memastikan tidak ada kesalahan ketik.</small>
                            @error('password_confirmation')
                                <p class="text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button 
                            type="submit" 
                            class="w-full bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-150"
                        >
                            {{ isset($dpt) ? 'Simpan Perubahan' : 'Tambah Pemilih' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility(inputId) {
        const passwordInput = document.getElementById(inputId);
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    }
</script>
@endsection
