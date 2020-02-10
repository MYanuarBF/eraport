<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
    <style>
        .font{
            font-family: Gotham;
            font-style: normal;
            color: rgba(0, 0, 0, 0.5);
        }
        .bg{
            width: 1000px;
            height: auto;
            background-color: white;
            border-radius: 15px;
        }
        .bg p{
            font-family: Gotham;
            font-style: normal;
            color: #606060;
        }
        .bio{
            padding-left: 80px;
            padding-bottom: 50px;
        }
        .btn{
            color: white;
            background-color: #80A3FF;
            width: 100px;
            height: 40px;
            border-radius: 5px;
            border: none;
        }
        .img{
            width: 200px;
        }
        .profile{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 70px;
        }
        .profile h1{
            font-family: Gotham;
            font-style: normal;
            text-transform: uppercase;
            color: #555555;
        }



    </style>
</head>
<body>
    @include('head') 
    <div class="main">
        <h1 class="font">Biodata Siswa</h1>
        <div class="bg">
            <div class="profile">
                <img class="img" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="">
                <h1>Nama Lo</h1>
            </div>
            <div class="bio">
                <p>NISN</p>
                <p>Alamat</p>
                <p>Agama</p>
                <p>Nomor Telepon</p>
                <p>Status dalam keluarga</p>
                <p>Anak ke</p>
                <p>Nama Ayah</p>
                <p>Nama Ibu</p>
                <button class="btn">Lihat Nilai</button>
            </div>
        </div>
        </div>
</body>
</html>