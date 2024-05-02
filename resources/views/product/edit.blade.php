@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="mb-3 text-center">
                <i class="bi bi-clipboard-heart-fill h3"></i>
                <h4>Edit Product</h4>
            </div>
            <hr>
            <blockquote class="blockquote mb-0">
                <form action="{{ route('product.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Code</label>
                            <input type="text" name="code_product" class="form-control"
                                value="{{ $product->code_product }}">
                            @error('code_product')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Name Product</label>
                            <input type="text" name="name_product" class="form-control"
                                value="{{ $product->name_product }}">
                            @error('name_product')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Price</label>
                            <input type="number" name="price_product" class="form-control"
                                value="{{ $product->price_product }}">
                            @error('price_product')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Unit</label>
                            <select name="unit_id" id="unit_id" class="form-select">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('unit_id');
                                    } else {
                                        $selected = $product->unit_id;
                                    }
                                @endphp
                                @foreach ($unit as $unit)
                                    <option value="{{ $unit->id }}" {{ $selected == $unit->id ? 'selected' : '' }}>
                                        {{ $unit->code_unit . ' - ' . $unit->name_unit }}</option>
                                @endforeach
                            </select>
                            @error('unit_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea name="desc_product" class="form-control">{{ $product->desc_product }}</textarea>
                            @error('desc_product')
                                <div class="text-danger">{{ $message }}</div>
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
                                    Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </blockquote>
        </div>
    </div>
@endsection
