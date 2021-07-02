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
                    <buttton class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Search for movies & TV</buttton>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="{{ asset('static/img/undraw_movie_night_fldd.svg') }}" alt="">
            </div>
        </div>
    </section>

    {{-- View Movies and TV--}}
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="{{ asset('static/img/undraw_home_cinema_l7yl.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h2>Rate movies and TV</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam rem sint, unde veniam atque
                        animi?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quia minima exercitationem
                        totam vel libero! Quae
                        consequuntur tenetur labore cum fuga enim soluta quidem ipsam. Et quas voluptatibus distinctio
                        accusantium.
                    </p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>Read More
                    </a>
                </div>
            </div>
        </div>

    </section>


@endsection
