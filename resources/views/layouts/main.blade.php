@extends('layouts.master')

@section('title', __('main.title'))

@section('content')
        <h2>@lang('all_employees')</h2>
        @if(count($products))
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($products as $product )
                @include('products.new-card', compact('product'))
            @endforeach
        </div>
        <div class="col-sm-12 text-right text-center-xs">
            {{ $products->appends(['s' => request()->s])->links() }}
                @else
    <p class="text alert alert-danger">Таких продуктов не найдено</р>
        </div>
        @endif
@endsection
