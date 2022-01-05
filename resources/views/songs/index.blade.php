<style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #2f3b38;
        color: #ffffff;
        text-align: left;
    }
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #2f3b38;
    }
    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #2f3b38;
    }

</style>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap">
    <title>Document</title>
</head>
<body>

@if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
@endif

<table class="styled-table">
    <thead>
    <tr>
        <td>Title</td>
        <td>Nom du fichier</td>
        <td>Description</td>
        <td>Tags</td>
        <td>Creer le</td>
        <td>Modifier le </td>
    </tr>
    </thead>

    <tbody>
    @foreach($songs as $song)
        <tr>
            <td>{{$song->title}}</td>
            <td>{{$song->filename}}</td>
            <td>{{$song->description}}</td>
            <td>{{$song->tags}}
            <td>{{$song->created_at}}</td>
            <td>{{$song->updated_at}}</td>

        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>
            <a href="{{ route('songs.create')  }}">Ajouter un song</a>
        </th>
    </tr>
    </tfoot>
</table>
</body>
</html>
