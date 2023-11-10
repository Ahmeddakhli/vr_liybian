@extends('8x.layouts.main')
@section('title', __('domainsetting::domains.domains'))

@section('content')
    @include('domainsetting::domains.index-content')
@endsection

@push('footer-scripts')
    @include('domainsetting::domains.index-scripts')
@endpush