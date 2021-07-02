@extends('layout.layout')
@section('title')

@endsection

@section('content')
{{--    Movie detail--}}
    <section class="bg-dark text-light p-5 pb-lg-0 pt-lg-4 text-center text-sm-start">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-6">
                    <img src="{{'https://image.tmdb.org/t/p/w500'.$movies['poster_path']}}" alt="">
                </div>

                <div class="col-md-4 col-lg-6">
                    <h1 class="text-white">{{$movies['title']}}</h1>

                    <p>
                        Rating : <i class="bi bi-star"></i> {{$movies['vote_average']}}/10
                        Release date : {{ \Carbon\Carbon::parse($movies['release_date'])->format('M d,Y')}}
                    </p>
                    <span>
                        Genres : @foreach($movies['genres'] as $genre)
                                    {{$genre['name']}}@if(!$loop->last), @endif
                                @endforeach
                    </span>

                    <p>
                        {{$movies['overview']}}
                    </p>
                    <p><span class="bold">Directed by : </span> @foreach($movies['credits']['crew'] as $cred)
                                                                    @if(strtolower($cred['known_for_department']) == "directing")
                                                                    {{$cred['name']}},
                                                                    @endif
                                                                @endforeach
                    </p>
                    <p>
                    <span class="bold">Produced by : </span> @foreach($movies['credits']['crew'] as $cred)
                                                                @if(strtolower($cred['known_for_department']) == "production")
                                                                    {{$cred['name']}},
                                                                @endif
                                                            @endforeach
                    </p>
                    @if($movies['videos']['results'] > 0)
                            <div class="d-grid gap-2 col-12 mx-auto pt-4">
                                <a href="https://www.youtube.com/watch?v={{$movies['videos']['results'][0]['key']}}" class="btn btn-outline-warning" type="button"><i class="bi bi-play-circle"></i> Watch the trailer</a>

                            </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

{{--    Cast--}}
<section class="bg-dark text-light p-5 pb-lg-0 pt-lg-4 text-center text-sm-start">
    <div class="container">
        <h2 class="mb-4 mb-md-0 text-white pb-5">Featured Cast</h2>
            <div class="row g-4">
                @foreach($movies['credits']['cast'] as $cast)
                    @if($loop->index <5)
                            <div class="col-md-6 col-lg-3">
                                <div class="card bg-light">
                                    <img src="{{'https:://image.tmdb.org/t/p/w300'.$cast['profile_path']}}" class="img-fluid" alt="">
                                    <div class="card-body bg-dark text-white">
                                        <h5 class="card-title text-white">{{$cast['name']}}</h5>
                                        <p>as {{$cast['character']}}</p>
                                    </div>
                                </div>
                            </div>
                    @endif
                @endforeach

            </div>
    </div>
</section>

{{--    Images--}}
<section class="bg-dark text-light p-5 pb-lg-0 pt-lg-4 text-center text-sm-start">
    <div class="container">
        <h2 class="mb-4 mb-md-0 text-white pb-5">Images</h2>
        <div class="row g-4">
            @foreach($movies['images']['backdrops'] as $img)
                @if($loop->index <5)
                    <div class="col-md-8 col-lg-6">
                        <img src="{{"https://image.tmdb.org/t/p/w500".$img['file_path']}}" alt="">
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</section>

@endsection
