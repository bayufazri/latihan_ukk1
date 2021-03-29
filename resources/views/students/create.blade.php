<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
     <a href="{{ route('students.index') }}"> Back</a>

@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

     <form action="{{ route('students.store') }}" method="POST">
    @csrf
  
    <table>
        <tr>
            <th>NIS</th>
            <th>:</th>
            <th><input type="text" name="nis"></th>
        </tr>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th><input type="text" name="nama"></th>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <th><input type="text" name="jns_kelamin"></th>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <th>:</th>
            <th><input type="text" name="temp_lahir"></th>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <th><input type="date" name="tgl_lahir"></th>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <th><input type="text" name="alamat"></th>
        </tr>
        <tr>
            <th>Asal Sekolah</th>
            <th>:</th>
            <th><input type="text" name="asal_sekolah"></th>
        </tr>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <th><input type="text" name="kelas"></th>
        </tr>
        <tr>
        <tr>
            <th>Jurusan</th>
            <th>:</th>
            <th><input type="text" name="jurusan"></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th><input type="submit"></th>
        </tr>
    </table>
   
</form>

</body>
</html>


   