@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('product.create') }}" class="btn btn-outline-dark btn-md me-2"><i
                        class="bi bi-plus-circle"></i></a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Unit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $product->code_product }}</td>
                            <td>{{ $product->name_product }}</td>
                            <td>{{ $product->price_product }}</td>
                            <td>{{ $product->desc_product }}</td>
                            <td>{{ $product->unit->name_unit }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="{{ route('product.show', ['product' => $product->id]) }}"
                                        class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-view-list"></i></a>
                                    <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                                        class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-pencil-square"></i></a>
                                    <div>
                                        <form action="{{ route('product.destroy', ['product' => $product->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"
                                                onclick="return confirm('Apakah anda yakin mengahpus data ini?')"><i
                                                    class="bi bi-trash3"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
