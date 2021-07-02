@extends('layout.layout')
@section('title')
    The Movie App
@endsection

@section('content')
    {{-- Showcase --}}
    <section class="bg-dark text-light p-5 pb-lg-0 pt-lg-4 text-center text-sm-start">
        <div class="conatiner">
            <!-- FlexBox -->
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1><span class="text-success">Movies and Shows</span></h1>
                    <p class="lead my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur provident
                        tempora possimus
                        necessitatibus earum explicabo ratione, ipsa quaerat voluptas nisi ad harum a ut, reprehenderit
                        iste eos aut deleniti repudiandae?</p>
                    <a class="btn btn-primary btn-lg" type="button" href="#searchM" >Search for movies & TV</a>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="{{ asset('static/img/undraw_movie_night_fldd.svg') }}" alt="">
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-dark text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up for Our Daily Newsletter</h3>
                <div class="input-group newsletter">
                    <input type="text" class="form-control" placeholder="Enter your email">
                    <button class="btn btn-dark btn-lg" type="button">Submit</button>
                </div>
            </div>
        </div>
    </section>


{{--    Searchbar--}}
    <section class="bg-light p-5">
        <div class="container">
            <h2 class="mb-4 mb-md-0 text-center pb-5">Search for your Entertainment</h2>
            <img class="img-fluid" src="{{ asset('static/img/undraw_horror_movie_3988.svg') }}" alt="">
            <livewire:search-dropdown />
        </div>
    </section>



{{--    Popular Movies--}}
    <section class="bg-dark p-5">
        <div class="container">
            <h2 class="mb-4 mb-md-0 text-center text-white pb-5">Popular movies</h2>
            <div class="row g-4">
                @foreach($popularMovies as $movie)
                        <div class="col-md-6 col-lg-3">
                            <div class="card bg-light">
                                <a href="{{route('movieapp.show',$movie['id'])}}">
                                 <img src="{{'https://image.tmdb.org/t/p/w500'.$movie['poster_path']}}"  class="img-fluid" alt="">
                                </a>
                                <div class="card-body bg-dark text-white">
                                    <a href="{{route('movieapp.show',$movie['id'])}}" class="link-unstyled">
                                        <h5 class="card-title text-white">{{$movie['title']}}</h5>
                                    </a>
                                    <p>Rating : <i class="bi bi-star"></i> {{$movie['vote_average']}}/10
{{--                                        | Release date : {{ \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')}}--}}
                                    </p>
                                    <p>
                                        @foreach($movie['genre_ids'] as $genre)
                                            {{$genres->get($genre)}}@if(!$loop->last), @endif
                                        @endforeach
                                    </p>

                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

        </div>
    </section>


@endsection
