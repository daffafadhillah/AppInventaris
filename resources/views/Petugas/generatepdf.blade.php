{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset("asset/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("asset/dist/css/adminlte.min.css") }}">
</head>
<body>
    <div class="card-body">
              
        <table id="example2" class="table table-bordered table-striped">
          <thead>
          <tr>
           <th>No</th>
           <th>Tanggal Pinjam</th>
           <th>Tanggal Kembali</th>
           <th>Status</th>
          </tr>
          </thead>
          <tbody>
            
            @foreach ($data as $d)
            <tr>
                <th>{{ $loop->iteration  }}</th>

                <th>{{ $d->tanggalpeminjaman }}</th>

                <th>{{ $d->tanggalkembali }}</th>

                <th>{{ $d->statuspeminjaman }}</th>

            </tr>
            @endforeach
           
          </tbody>

        </table>
      </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset("asset/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("asset/dist/css/adminlte.min.css") }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Petugas</th>
                    <th>Username</th>
                    <th>Pangkat</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($petugas as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->namapetugas }}</td>
                    <td>{{ $p->username }}</td>
                    <td>{{ $p->namalevel }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
