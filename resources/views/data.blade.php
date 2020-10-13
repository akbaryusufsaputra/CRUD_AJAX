<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>
        </thead>
        <tbody>
            @php
             $no = 0;
            @endphp

            @foreach ($data as $a)
            @php
            $no++;
            @endphp
            <tr>
            <th>{{$no}}</th>
                <td>{{$a['attributes']['Provinsi']}}</td>
                <td>{{$a['attributes']['Kasus_Posi']}}</td>
                <td>{{$a['attributes']['Kasus_Semb']}}</td>
                <td>{{$a['attributes']['Kasus_Meni']}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>
