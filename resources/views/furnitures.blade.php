<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select class="form-select" aria-label="Default select example">
        @foreach ( $furniture as $furniture)
        <option value="">{{$furniture->kode}}</option>
        @endforeach
    </select>
    <table>
        <table>
            <th>{{$furniture->nama}}</th>
        </table>
    </table>
</body>
</html>
