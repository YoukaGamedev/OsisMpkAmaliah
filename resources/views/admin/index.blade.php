@extends('main')

@section('content')

</div>
    <div class="welcome-message">
        Selamat Datang di Aplikasi OSIS dan lembar Admin
    </div>
    <div class="container">
        <!-- Pemilu Ketua OSIS dengan icon -->
        <a style="text-decoration: none;" href="{{ ('/admin/dashboard') }}">
            <div class="box highlight pink" style="display: flex; align-items: center; position: relative;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 0.8); position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; opacity: 0.3;"><path d="M20 3H4c-1.103 0-2 .897-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V5c0-1.103-.897-2-2-2zm-1 9h-3.142c-.446 1.722-1.997 3-3.858 3s-3.412-1.278-3.858-3H4V5h16v7h-1z"></path></svg>
                <span style="z-index: 2; font-size: 1.2rem; font-weight: bold;">Pemilu Ketua OSIS</span>
            </div>
        </a>
        
        <!-- Gerakan Disiplin Siswa dengan icon -->
        <a style="text-decoration: none;" href="{{ ('/admin/gds/indexgds') }}">
            <div class="box highlight blue" style="display: flex; align-items: center; position: relative;">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 0.8); position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; opacity: 0.3;"><path d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z"></path></svg>
                <span style="z-index: 2; font-size: 1.2rem; font-weight: bold;">Gerakan Disiplin Siswa</span>
            </div>
        </a>
        
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="large-box box"></div>
    </div>
@endsection
