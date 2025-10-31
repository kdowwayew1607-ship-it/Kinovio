@extends('cilent.welcome.index')
@section('post')
    <div class="container-lg">
        
        <div class="row   justify-content-center ">
            @foreach ($category->posts as $titil)
            <div class="col-3   my-3 mx-5  py-2  text-bg-yellow   text-center border-2 border-danger border rounded-5">
                <a href="{{route('video.m', $titil->id)}}" class=" text-bg-yellow text-decoration-none">
                    <div class="">
                        <div>
                            <img src="{{asset('storage/img/' .$titil->foto)}}" class="rounded-5 w-100" alt="">
                        </div>
                        <div class="text-start ps-2 pt-3">
                            <div class="h5">
                                Category: {{$titil->category->name}}
                            </div>
                            <hr>
                            <div class="h4 ">
                                Title: <span class="h5">{{$titil->title}}</span>
                            </div>
                            <hr>
                            <div class="h5 align-items center ">
                            Location: {{$titil->location}}
                            </div>
                            <div class="h5 align-items center ">
                            Year: {{$titil->yyl}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection