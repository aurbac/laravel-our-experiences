@extends('layout.main-base')

@section('content')

<div class="album py-5 bg-light">



        <div class="container">

          @if (\Session::has('success'))
              <div class="alert alert-success" role="alert">
                <h6 class="alert-heading">{!! \Session::get('success') !!}</h6>
              </div>
          @endif


          <div class="row">

            @if ( $pictures!=FALSE && count($pictures) > 0)
              @foreach ($pictures as $picture)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="https://s3.amazonaws.com/{{ $bucket_name }}/images/thumbnail-{{ $picture->key }}" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">{{ $picture->description }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">

                        </div>
                        <small class="text-muted">{{ $picture->created_at->diffForHumans() }}</small>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              @else



              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=C7EEAD&fg=9FBE8A&text=Thumbnail" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>

              @endif
          </div>
        </div>
      </div>

@endsection