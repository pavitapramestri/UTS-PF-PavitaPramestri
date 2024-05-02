@extends('layout.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi bi-postcard-heart-fill h3"></i>
                    <h4>Detail Product</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Code</label>
                                <h5>{{ $product->code_product }}</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Name Product</label>
                                <h5>{{ $product->name_product }}</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Price</label>
                                <h5>{{ $product->price_product }}</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Product Description</label>
                                <h5>{{ $product->desc_product }}</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Unit</label>
                                <h5>{{ $product->unit->name_unit }}</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 d-grid">
                                <a href="{{ route('product.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
