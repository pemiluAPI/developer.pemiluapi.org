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

            <p class="lead">
                Pemilih butuh jawaban. Apakah saya terdaftar? Bagaimana pendirian
                para kandidat mengenai permasalahan yang penting bagi saya? Bagaimana
                mencoblos yang baik dan benar? Bagaimana apabila saya menemui
                kesulitan untuk memilih?
            </p>
            <p>
                Untuk menjawab pertanyaan-pertanyaan tersebut, dan masih banyak lagi,
                kami membantu membangun sebuah tempat penyimpanan informasi terbuka
                untuk para pemilih Indonesia pada tahun 2014 — sebuah API Pemilu.
            </p>
            <p>Pengembang akan dapat menggunakan API tersebut untuk membangun aplikasi yang dapat mengerjakan hal-hal berikut:</p>

            <ul>
                <li>Membantu masyarakat untuk memastikan bahwa mereka adalah pemilih terdaftar</li>
                <li>Memberi tahu teman-teman kalau kamu sudah memilih</li>
                <li>Membuat animasi .gif mengenai suatu topik dan menyebarkannya</li>
                <li>Mengingatkan bila ada acara politik yang ingin dihadiri</li>
                <li>Memainkan video buatan pendukung calon tertentu</li>
                <li>Menjalankan program otomatis (bot) untuk Twitter yang akan men-twit setiap seorang calon diliput oleh media</li>
                <li>Menunjukkan seperti apa lembar suara itu</li>
                <li>Memberikan kuis lalu men-twit skormu</li>
                <li>Membantu pelaporan apabila ditemukan pemalsuan atau intimidasi</li>
            </ul>

            <p>
                Kami mencari pengembang untuk server, database, web dan mobile
                untuk membantu kami dalam membangun API dan aplikasi-aplikasi
                untuk itu.
            </p>
            <p>
                Kami juga membuka kesempatan bagi desainer, marketer, ilustrator,
                animator atau individu berbakat lainnya yang ingin terlibat dalam
                proyek ini.
            </p>
            <p>
                <strong>Jadilah bagian dari sejarah</strong> dan mudahkanlah pemilihan dalam
                pemilihan umum demokratis terbesar di Indonesia.
            </p>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Apa itu API?</h3>
                </div>
                <div class="panel-body">
                    <p>
                        API adalah singkatan dari <em>Application Programming Interface</em>. Interface
                        atau antarmuka adalah dimana dua sistem bertemu dan berinteraksi.
                        Sebuah API adalah antarmuka yang digunakan oleh sebuah aplikasi agar
                        dapat berkomunikasi dengan aplikasi lain.
                    </p>
                    <p>
                        <em>API Pemilu</em> akan menjadi sebuah aplikasi yang menggunakan antarmukanya agar
                        informasi dan fungsionalitas tentang pemilu 2014 di Indonesia tersedia
                        untuk aplikasi lain.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop