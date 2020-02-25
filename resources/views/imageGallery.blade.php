@extends('layouts.app')

@section('title', 'Johny Burnz - Posts')

@section('link')
    <link href="https://fonts.googleapis.com/css?family=Handlee|Indie+Flower&display=swap" rel="stylesheet">
@endsection

@section('style')
@endsection

@section('content')
    <div class="container">
        <div class="row" style="">
            <div class="d-flex col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto justify-content-center" style="align-items: center;">
                <div class="row w-100" style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center;">
                    <h1 class="w-50" style="font-family: 'Montserrat Alternates', sans-serif; font-weight: bold; text-align: center;">Picture Gallery</h1>

                    <div class="row" style="">
                            @if(!App\User::find(1))
                                <!-- this should always fail but in the case that it doesn't, at least the site won't break -->
                            @else


                            <div style="display: none;">
                                {{ $user = App\User::find(1) }}
                            </div>
                                <div class="row d-flex justify-content-center">
                                    @foreach($user->posts as $post)
                                        <div class="mr-2 ml-2" style="width: 200px; display: inline-flex; flex-direction: column; justify-content: center; align-content: center; margin: 20px 2px 2px 2px;">
                                            <span style="text-align: center; font-family: 'Indie Flower', cursive; font-size: 150%; font-weight: bold;">{{ $post->caption ?? "No Caption" }}</span>

                                            <div class="" style="height: 200px; display: flex; flex-direction: row; justify-content: center; align-items: center;  background-color: rgba(99,107,111,0.44);">
                                                <a href="/showImage/{{$post->id}}">
                                                    <img src="/storage/{{ $post->image }}" alt="" class="w-100"  style="">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
