<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Add News</title>
</head>
@include('navbar')
<body>
    <form action="{{route('articles_add_logic')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="Article" class="form-label">Artikel</label>
          <input type="text" placeholder="Article Name" name = "content" class="form-control" id="Article" aria-describedby="emailHelp">
          @error('content')
                {{$message}}
          @enderror
        </div>

        <div class="mb-3">
            <label for="image_url" class="form-label">Link Gambar</label>
            <input type="text" placeholder="Link Gambar" name = "image_url" class="form-control" id="Article" aria-describedby="emailHelp">
            @error('image_url')
                {{$message}}
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @include('footer')
</body>
</html>
