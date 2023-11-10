@extends('8x.layouts.main')
@section('title', __('domainsetting::domains.create_domains'))

@section('content')
    @include('domainsetting::domains.create-content')
@endsection

@push('footer-scripts')
    @include('domainsetting::domains.create-scripts')
@endpush