@extends('layouts.app', ['title' => __('Product Management')])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@section('content')
    @include('admin.partials.header', ['title' => __('Upload Photos')])
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
                                <a href="{{ route('photos.show', $product->id) }}" class="btn btn-sm btn-primary">{{ __('Back to view photos') }}</a>
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
                        <form action="{{ route('photos.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" id="">
                                <span class="help-block text-danger">{{$errors->first('photo')}}</span>
                            </div>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
    <!-- /.container -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@endsection
