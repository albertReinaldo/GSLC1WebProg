@extends('template')

@section('container')
    <div class="row row row-cols-9 row-cols-md-9 d-flex justify-content-center p-3 mb-2 bg-info text-dark">
        <h1 class="display-1 text-center">GeTeA V</h1>
            @foreach ($articles as $article)
                    <div class="col-md-4 mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src={{$article->image_url}} class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text">{{$article->content}}</p>
                            </div>
                            <button type="button" class="btn btn-primary">Read More</button>
                        </div>
                    </div>
            @endforeach
    </div>
@endsection

