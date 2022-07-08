@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-wrap: wrap">
    
    @foreach($item as $key => $data)
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/' . $data->image) }}" style="height:200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 id='title' class="card-title">{{$data->name}}</h5>
                        <p id='price' class="card-title">{{$data->price}}$</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div> 
                </div>
            </div>
    </div>
    @endforeach
</div>
@endsection
