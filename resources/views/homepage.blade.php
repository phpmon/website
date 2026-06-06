@php
    $latestReleaseVersion = Cache::get('latest_release_version');
    $latestReleasePublishedAt = Cache::get('latest_release_published_at');
@endphp

@extends('layouts.shared')

@section('title', 'PHP Monitor: Set up and manage PHP on macOS')
@section('description', 'Free native Mac app for installing PHP, managing Laravel Valet sites, switching PHP versions, configuring extensions, and monitoring your local PHP environment.')

@push('head')
    @php
        $softwareSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'PHP Monitor',
            'applicationCategory' => 'DeveloperApplication',
            'operatingSystem' => 'macOS',
            'description' => $__env->yieldContent('description'),
            'image' => url('/images/phpmon-social.png'),
            'url' => url('/'),
            'downloadUrl' => route('releases'),
            'softwareHelp' => route('faq'),
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'USD',
            ],
            'author' => [
                '@type' => 'Person',
                'name' => 'Nico Verbruggen',
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($softwareSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
@include('homepage.sponsorship-banner')
@include('homepage.hero')
@include('homepage.overview')
@include('homepage.latest-release')
@include('homepage.features')
@include('homepage.faq')
@include('homepage.footer')
@endsection
