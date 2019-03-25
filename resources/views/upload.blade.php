@extends('layout.base')

@section('content')

<div class="py-5 bg-light">
    <div class="container">

    <div class="row justify-content-md-center">
        <div class="col col-lg-8">

        <h2 class="text-muted">Upload your Picture</h2>

        <form class="was-validated" enctype="multipart/form-data" method="post" action="{{url('upload/picture')}}">
        <div class="mb-3">
            <label for="validationTextarea">Description</label>
            <textarea name="description" id="description" class="form-control is-invalid" id="validationTextarea" placeholder="Tell me something about your experience..." required></textarea>
        </div>

        <div class="custom-file">
            <input name="picture" id="picture" type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .jpeg" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        </div>

        <br><br>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>


@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

        </div>
    </div>

    </div>
</div>

@endsection


@section('inline-scripts')
    $(document).ready(function () {
    bsCustomFileInput.init()
    })
@endsection