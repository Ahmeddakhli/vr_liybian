@extends('8x.layouts.main')
@section('title', trans('inventory::inventory.sell_unit_requests'))

@section('content')
    @include('inventory::sell_unit_requests.index-content')
@endsection

@push('footer-scripts')
    @include('inventory::sell_unit_requests.index-scripts')
@endpush
