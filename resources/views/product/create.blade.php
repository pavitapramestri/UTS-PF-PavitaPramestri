@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="mb-3 text-center">
                <i class="bi bi-box2-heart-fill h3"></i>
                <h4>Create Product</h4>
            </div>
            <hr>
            <blockquote class="blockquote mb-0">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="code" class="form-label">Code</label>
                            <input class="form-control @error('code') is-invalid @enderror" type="text" name="code_product"
                                id="code" value="{{ old('code') }}" placeholder="Enter Code">
                            @error('code')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name_product" class="form-label">Name Product</label>
                            <input class="form-control @error('name_product') is-invalid @enderror" type="text"
                                name="name_product" id="name_product" value="{{ old('name_product') }}"
                                placeholder="Enter Name Product">
                            @error('name_product')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="price_product" class="form-label">Price</label>
                            <input class="form-control @error('price_product') is-invalid @enderror" type="number"
                                name="price_product" id="price_product" value="{{ old('price_product') }}"
                                placeholder="Enter Price">
                            @error('price_product')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="unit_id" class="form-label">Unit</label>
                            <select name="unit_id" id="unit_id" class="form-select">
                                <option value="">Choose Unit</option>
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">
                                        {{ old('unit') == $unit->id ? 'selected' : '' }}
                                        {{ $unit->code_unit . ' - ' . $unit->name_unit }}
                                    </option>
                                @endforeach
                            </select>
                            @error('unit_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="desc_product" class="form-label">Product Description</label>
                            <input class="form-control @error('desc_product') is-invalid @enderror" type="textarea"
                                name="desc_product" id="desc_product" value="{{ old('desc_product') }}"
                                placeholder="Enter Description">
                            @error('desc_product')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('product.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                                        class="bi bi-x-circle"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-primary btn-lg mt-3"><i
                                        class="bi bi-box-arrow-down"></i>
                                    Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </blockquote>
        </div>
    </div>
@endsection
