@extends('layouts.app')

@section('content')
<div class="container">
    
    <form method="POST" enctype='multipart/form-data'>
    @csrf
    <div class="mb-3">
        <label class="form-label">Item name</label>
        <input name="name" class="form-control" required="required">
    </div>
    <div class="mb-3">
        <label class="form-label">Item price</label>
        <input name="price" class="form-control" required="required" type="number">
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control" required="required">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
