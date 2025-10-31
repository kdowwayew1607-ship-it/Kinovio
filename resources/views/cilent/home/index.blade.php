@extends('cilent.welcome.index')
@section('container')
    <div class="container-lg text-white">
        <div class="text-center pb-3 position-relative">
            <img src="{{asset('storage/img/bg-surat.jpg')}}" alt="" width="1000" height="400" class=" w-100 rounded-5 btn">
            <div class="position-absolute " style="left: 50px; top: 50px" >
                <div class="display-4 fw-bold text-start  pb-5">
                   <div class="">
                    Every scene <br> brings a <br> feeling
                   </div>
                </div>
               <div class="pe-5">
                <button class="btn btn-outline-light px-5 border-2 fw-bold me-2 " type="button">
                    Sign Up
                  </button>
                  <button class="btn btn-danger fw-bold px-4" type="button">Sign In</button>
               </div>
            </div>
        </div>
        <div class="display-4 fw-bold text-center">
            Browse by Category
        </div>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col">
                    <div class="pt-4  ">
                        <a href="{{route('category.show', $category->id)}}" class=" text-decoration-none">
                            <div class="h3 text-bg-yellow px-4 py-2 text-center border border-danger rounded-5" >
                                {{$category->name}}
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row   justify-content-center ">
            @foreach ($titles as $titil)
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

