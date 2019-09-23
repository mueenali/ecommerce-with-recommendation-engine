@extends('layouts.app', ['title' => __('Product Management')])

@section('content')
    @include('admin.partials.header', ['title' => __('View Photos')])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Product Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('photos.edit',$product->id) }}" class="btn btn-sm btn-primary">{{ __('Upload new photos') }}</a>
                                <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="container">

                            <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Product Photos</h1>

                            <hr class="mt-2 mb-5">

                            <div class="row text-center text-lg-left">
                                @if($product->photos)
                                    @foreach($product->photos as $photo)
                                <div class="col-lg-3 col-md-4 col-6">
                                    <a href="#" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{$photo->path}}" height="" alt="">
                                        <form method="post" action="{{route('photos.destroy', $photo->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button  style="margin-left: 80px; margin-top: 10px" type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </a>
                                </div>
                                    @endforeach
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
    <!-- /.container -->

    @endsection
