@extends('main')

@section('content')


</div>
    <div class="welcome-message">
        Selamat Datang di Aplikasi OSIS dan lembar Admin
    </div>
    <div class="container">
        <a style="text-decoration: none;" href="{{ ('/admin/dashboard') }}"><div class="box highlight pink">
           pemilu ketua osis
        </div></a>
        <a style="text-decoration: none;" href="{{ ('/admin/gds/indexgds') }}"><div class="box highlight blue">
            Gerakan Disiplin Siswa
        </div></a>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="large-box box"></div>
    </div>
@endsection 