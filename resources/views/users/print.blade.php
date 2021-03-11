<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center">laporan Data Siswa</h1>
<div class="card-body">
    <table class="table table-bordered">
        <tbody class="text-center">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Sebagai</th>
                    <th>nilai</th>
                    <th>No Telpon</th>
                    <th>kode Unik</th>
                    <th>Alamat</th>
                    <th>Akun Dibuat</th>
                    
                </tr>
            @foreach($users as $users)
                <tr>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->sebagai }}</td>
                    <td>{{ $users->nilai }}</td>
                    <td>{{ $users->telpon }}</td>
                    <td>{{ $users->kode_unik }}</td>
                    <td>{{ $users->alamat }}</td>
                    <td>{{ $users->created_at }}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



