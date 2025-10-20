@extends('layouts.app')

@section('title', 'UMKM Store - Produk Lokal Berkualitas')

@section('content')
    @include('partials.home.hero')
    @include('partials.home.categories')
    @include('partials.home.featured-products')
    @include('partials.home.why-us')
    @include('partials.home.testimonials')
    @include('partials.home.newsletter')
    @include('partials.home.cta')
@endsection
