<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/song/form.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form style="margin-left: auto; margin-right: auto; width: 300px; text-align: center" method="post" enctype="multipart/form-data" action="{{ route('songs.store') }}">
        .         @csrf
        <p>Titre</p>
        <input type="text" name="title" placeholder="titre" value="{{ old('title') }}" class="@error('title') is-invalid @enderror">

        @error('title')
            <p class="alert alert-danger">{{ $message }}</p>
        @enderror

        <p>Description</p>
        <input type="text" name="description" placeholder="Description" value="{{ old('description') }}" class="@error('description') is-invalid @enderror">

        @error('description')
            <p class="alert alert-danger">{{ $message }}</p>
        @enderror

        <p>Tags</p>
        <input type="text" name="tags" placeholder="Tags" value="{{ old('tags') }}" class="@error('tags') is-invalid @enderror">

        @error('tags')
            <p class="alert alert-danger">{{ $message }}</p>
        @enderror

        <p>Active</p>
        <input type="checkbox" name="active" value="{{ old('active') }}" class="@error('active') is-invalid @enderror" ><br>

        @error('active')
            <p class="alert alert-danger">{{ $message }}</p>
        @enderror

        <p>Importer le fichier</p>
        <input type="file" name="file" title="Upload Fichier" accept="file_extension|audio/|video/|image/*|media_type" class="@error('file') is-invalid @enderror">

        @error('file')
            <p class="alert alert-danger">{{ $message }}</p>
        @enderror

        <button style="margin-top: 50px" class="btn btn-success" type="submit">Ajouter le song</button>
    </form>
</body>
</html>
