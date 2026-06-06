@php
    $latestReleaseVersion = Cache::get('latest_release_version');
    $latestReleasePublishedAt = Cache::get('latest_release_published_at');
@endphp

@extends('layouts.shared')

@section('title', 'PHP Monitor: Set up and manage PHP on macOS')
@section('description', 'Free native Mac app for installing PHP, managing Laravel Valet sites, switching PHP versions, configuring extensions, and monitoring your local PHP environment.')

@section('content')
@include('homepage.sponsorship-banner')
@include('homepage.hero')
@include('homepage.overview')
@include('homepage.latest-release')
@include('homepage.features')
@include('homepage.footer')
@endsection
