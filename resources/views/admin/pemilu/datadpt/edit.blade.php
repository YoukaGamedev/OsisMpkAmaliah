@extends('admin.pemilu.pemilu')

@section('content1')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-2xl mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header Section -->
            <div class="bg-gray-50 border-b px-6 py-4">
                <h2 class="text-xl font-bold text-gray-800">
                    {{ isset($dpt) ? 'Edit Data Pemilih' : 'Tambah Data Pemilih' }}
                </h2>
                <p class="text-sm text-gray-600 mt-1">
                    {{ isset($dpt) ? 'Perbarui informasi data pemilih' : 'Tambahkan data pemilih baru ke sistem' }}
                </p>
            </div>

            <!-- Form Section -->
            <div class="p-6">
                <form action="{{ isset($dpt) ? route('datadpt.update', $dpt->id) : route('datadpt.store') }}" 
                      method="POST" 
                      class="space-y-6">
                    @csrf
                    @if(isset($dpt))
                        @method('PUT')
                    @endif

                    <!-- Nama Lengkap -->
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
                        @error('name')
                            <p class="text-sm text-red-600 mt-1 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
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
                            value="{{ old('email', isset($dpt) ? $dpt->email : '') }}" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                            placeholder="contoh@email.com"
                            required
                        >
                        @error('email')
                            <p class="text-sm text-red-600 mt-1 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div class="space-y-2">
                        <label for="role" class="text-sm font-medium text-gray-700 block">
                            Role
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
                        @error('role')
                            <p class="text-sm text-red-600 mt-1 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Password Fields -->
                    @if(!isset($dpt))
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-medium text-gray-700 block">
                                Password
                            </label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                                placeholder="Minimal 8 karakter"
                                required
                            >
                            @error('password')
                                <p class="text-sm text-red-600 mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
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
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                                placeholder="Masukkan ulang password"
                                required
                            >
                        </div>
                    @else
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-medium text-gray-700 block">
                                Password (Kosongkan jika tidak ingin mengubah)
                            </label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                                placeholder="Minimal 8 karakter"
                            >
                            @error('password')
                                <p class="text-sm text-red-600 mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
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
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-150"
                                placeholder="Masukkan ulang password"
                            >
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button 
                            type="submit" 
                            class="w-full bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-150"
                        >
                            {{ isset($dpt) ? 'Update Data Pemilih' : 'Tambah Data Pemilih' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection