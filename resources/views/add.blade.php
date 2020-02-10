<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <style>
        .font{
            font-family: Gotham;
            font-style: normal;
            color: rgba(0, 0, 0, 0.5);
        }

        .form1 input,textarea{
            width: 500px;
            height: 30px;
            border-radius: 20;
        }

        .form1 textarea{
            width: 500px;
            height: 70px;
            border-radius: 20;
        }
        .form2{
            display: flex;
            flex: 1;
            flex-direction: row;
        }
        .form2 input,select{
            width: 240px;
            height: 30px;
            border-radius: 20;
        }
        .formrow{
            padding-right: 20px;
            
        }
        
    </style>
</head>
<body>
    @include('head') 

    <div class="main">
        <h1 class="font">Tambah Siswa</h1>
        <h2 class="font">Biodata Siswa</h2>
        <div>
            <form action="" >
                <input type="file" accept="image/*">
                <p>JURUSAN</p>
                <select name="" id="">
                    <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                    <option value="TEKNIK KOMPUTER JARINGAN">TEKNIK KOMPUTER JARINGAN</option>
                    <option value="TEKNIK JARINGAN AKSES">TEKNIK JARINGAN AKSES</option>
                </select>
                <p>JENIS KELAMIN</p>
                <input type="radio" name="gender" value="male"> Laki - Laki<br>
                <input type="radio" name="gender" value="female"> Perempuan<br>
                <input type="radio" name="gender" value="other"> Other<br>  
                <p>TANGGAL LAHIR</p>
                <input type="date" >

                <div class="form1">
                    <p>NAMA : </p>
                    <input type="text" placeholder="Masukan Nama">
                </div>
                <div class="form2">
                    <div class="formrow">
                        <p>NISN : </p>
                        <input type="number" placeholder="Masukan NISN">
                    </div>
                    <div class=""> 
                        <p>AGAMA</p>
                        <input type="text" placeholder="Masukan Agama">
                    </div> 
                </div>
                <div class="form1">
                    <p>ALAMAT</p>
                    <textarea cols="30" rows="10" placeholder="Masukan Alamat"></textarea>
                </div>
                <div class="form2">
                    <div class="formrow">
                        <p>NAMA AYAH</p>
                        <input type="text" placeholder="Masukan Nama Ayah">
                    </div>
                        <div>
                        <p>NAMA IBU</p>
                        <input type="text" placeholder="Masukan Nama Ibu">
                    </div>
                    </div>
                <div class="form2">
                    <div class="formrow">
                        <p>NO. TELEPON SISWA</p>
                        <input type="number" placeholder="Masukan No Telepon Siswa">
                    </div>
                    <div>
                        <p>NO. TELEPON ORANG TUA</p>
                        <input type="number" placeholder="Masukan No Telepon Siswa">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>