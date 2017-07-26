@extends('frontEnd.layout')

@section('content')


{{-- @include('frontEnd.includes.slider') --}}
        <!-- start Home Slider -->
@include('frontEnd.partials.slider')


        <!-- end Home Slider -->


@include('frontEnd.partials.home-boxes')


@include('frontEnd.partials.about')
@include('frontEnd.partials.features')
{{-- @include('frontEnd.partials.services') --}}
{{-- @include('frontEnd.partials.pricing') --}}
{{-- @include('frontEnd.partials.experts') --}}
{{-- @include('frontEnd.partials.funfact') --}}
{{-- @include('frontEnd.partials.gallery') --}}
{{-- @include('frontEnd.partials.clients-say') --}}
{{-- @include('frontEnd.partials.blog') --}}
{{-- @include('frontEnd.partials.clients') --}}

{{-- @include('frontEnd.parts.hpbanners') --}}
{{-- @include('frontEnd.parts.hptopics') --}}
{{-- @include('frontEnd.parts.hpphotos') --}}


@endsection

