<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
     <a href="{{ route('students.index') }}">Back</a>

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

    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
  
    <table>
        <tr>
            <th>NIS</th>
            <th>:</th>
            <th><input type="text" name="nis" value="{{ $student->nis }}"></th>
        </tr>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th><input type="text" name="nama" value="{{ $student->nama }}"></th>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <th><input type="text" name="jns_kelamin" value="{{ $student->jns_kelamin }}">
            </th>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <th>:</th>
            <th><input type="text" name="temp_lahir" value="{{ $student->temp_lahir }}"></th>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <th><input type="date" name="tgl_lahir" value="{{ $student->tgl_lahir }}"></th>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <th><input type="text" name="alamat" value="{{ $student->alamat }}"></th>
        </tr>
        <tr>
            <th>Asal Sekolah</th>
            <th>:</th>
            <th><input type="text" name="asal_sekolah" value="{{ $student->asal_sekolah }}"></th>
        </tr>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <th><input type="text" name="kelas" value="{{ $student->kelas }}">
            </th>
        </tr>
        <tr>
        <tr>
            <th>Jurusan</th>
            <th>:</th>
            <th><input type="text" name="jurusan" value="{{ $student->jurusan }}">
            </th>
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
