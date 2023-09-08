@extends('layout.main-template')

@section('title', 'Comics list');

@section('content')

    <h1>
        Comics-list
    </h1>

    <div class="container">


        <div class="row justify-space-between align-items-start w-100">
            @foreach ($comics as $index=> $singledata)
            
                <div class="col-2">

                    <div class="card">

                        <img class=" img-fluid card-img-top" src="{{$singledata['thumb']}}" alt="">

                        <div class="card-body">

                            <h4>
                                {{$singledata['title']}}
                            </h4>
                            
                            <h6>
                                {{$singledata['series']}}
                            </h6>
                      
                            {{-- <p style="text-overflow: ellipsis;">
                                {{$singledata['description']}}
                            </p> --}}

                            <div>
                                {{$singledata['price']}} €
                            </div>

                            

                            

                        </div>

                    </div>

                </div>

            @endforeach
                
        </div>

        

    </div>

@endsection