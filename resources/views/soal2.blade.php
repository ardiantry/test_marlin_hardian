<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
            color:#000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            /*.flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }*/

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

          .content {
    margin: 31px;
}

            .title {
                font-size: 24px;
            }

            .links > a {
              
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
            <div class="title m-b-md">
                    Tes soal 1 Marlin
                </div>
                <ul>
                    <li>1.Jelaskan perbedaan program terstruktur dan pemrograman berorientasi objek.<br>
                    jawaban:
                   <textarea> <p> perbedaannya ada pada struktur pengkodingan yg dimana OOP lebih efisien menggunakan class yg berfungsi mengelompokan fungsi2 yg dibutuhkan dan di gunakan dalam membangun aplikasi</p></textarea>
                    </li>
                    <li>2.Jelaskan yang dimaksud code reuse di pemrograman berorientasi objek.<br>
                    jawaban:<textarea><p>pemrograman berorientasi objek adalah mengkombinasikan data dan prosedur-prosedur untuk mengakses data menjadi sebuah kesatuan unit. Unit ini dikenal dengan nama objek (object).</p></textarea>
                    </li>
                    <li>3.Jelaskan tentang class, object, function manfaat penggunaan pewarisan dan implementasi method di pemrograman berorientasi objek.
<br>    
                    jawaban:<p></p>
                    </li>
                    <li>4.Tulis class dan object sederhana dengan bahasa pemrograman atau framework yang anda kuasai.<br>
                    jawaban:
                   <textarea> class rumah()
                    {

                        fungtion kamar($aksi)
                        {
                            return $aksi;
                        }
                        fungtion toilet($aksi)
                        {
                            return $aksi;
                        }

                    }
                     $rumah=new rumah();
                    echo  $rumah->kamar('tidur');</textarea>
                    </li>
                    <li>5.Tulis secara sederhana orientasi object dengan struktur MVC , dengan model controller dan script view dengan helpers untuk memanipulasi database.<br>
                    jawaban
                    </li>
                    
                </ul>
               
                <div class="title m-b-md">
                    Tes soal 2 Marlin
                </div>

                <div class="links">no.1
                    <form   method="post" action="{{url("/cek")}}"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <input type="text" name="bilangan" >
                        <button class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0" >Cek</button>
                    </form>
                </div><hr>
                <div class="links">no.2
                    <form   method="post" action="{{url("/cekongkir")}}"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        kota asal<br>
                        <input type="text" name="kotaasal" value="yogyakarta" readonly="readonly"><br>
                        kurir<br>
                         <input type="text" name="kurir" value="jne" readonly="readonly"><br>
                        kode kota tujuan<br>
                        <input type="text" name="kota" value="114"><br>
                         berat total<br>
                        <input type="text" name="berat"  value="1700"><br>
                        <button class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0" >Cek</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
