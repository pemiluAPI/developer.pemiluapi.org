@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>API Pemilu</h1></div>
    <div class="row">
        <div class="col-lg-8">
            <p>
                {{
                    link_to_route(
                        'application.create',
                        'Buat aplikasi sekarang',
                        null,
                        array('class' => 'btn btn-success btn-lg')
                    )
                }}
            </p>

            <p class="lead">Selamat datang di situs khusus pengembang API Pemilu, API informasi sipil untuk Pemilu 2014 dan seterusnya!</p>
            <p>Jika kamu ingin membangun sebuah aplikasi dengan menggunakan API ini, kamu telah datang ke tempat yang tepat.</p>

            <p>Silahkan mendaftar untuk mendapatkan kunci API dengan membuat akun dan mendaftarkan aplikasi, atau gunakan kunci gratis ini: <strong>fea6f7d9ec0b31e256a673114792cb17</strong></p>

            <p>Kami sarankan agar anda mendaftarkan kunci anda sendiri apabila akan menggunakan API ini untuk aplikasi produksi.</p>

            <p>Dokumentasi untuk endpoint API dapat dilihat di sini: http://developer.pemiluapi.org/endpoints</p>

            <p>API Pemilu sepenuhnya adalah proyek sumber terbuka (open-source). Kamu bisa menemukan semua kode untuk API ini pada <a href="https://github.com/pemiluAPI/">laman GitHub organisasi kami</a>. Kamu juga bisa menemukan dan mengunduh semua raw data dari API ini di <a href="https://github.com/pemiluAPI/pemilu-data">repository pemilu-data</a> di sana.</p>

            <p>Terima kasih atas perhatiannya terhadap API ini. Jika kamu menemui masalah, silahkan kontak kami di contact@pemiluapi.org atau Twitter @APIPemilu</p>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>
@stop