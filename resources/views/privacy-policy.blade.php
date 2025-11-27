@extends('layouts.shared')

@section('title', 'Privacy Policy')
@section('description', 'Document detailing privacy policy for PHP Monitor.')

@section('content')
<div>
    <div class="bg-dim flex">
        <header class="flex flex-col m-auto max-w-xl py-5 md:py-8 lg:py-10 p-4">
            <div class="flex">
                <x-logo size="95"></x-logo>
                <h1 class="text-xl font-bold mb-2 text-white mt-3">
                    <span class="text-black text-3xl">PHP Monitor</span><br/>
                    <span class="text-primary text-3xl">Privacy Policy</span>
                </h1>
            </div>
        </header>
    </div>
    <div class="p-4 m-auto max-w-3xl mb-8">
        <style>
            h2 {
                font-size: 22px;
                font-weight: bold;
                margin: 30px 0;
                border-bottom: 3px solid #BBB;
            }
            h3 {
                font-size: 18px;
                font-weight: bold;
                margin: 40px 20px 0 0;
                border-bottom: 3px solid #EEE;
            }
            hr {
                margin: 20px 0;
            }
            a {
                color: #4894FC;
            }
            p {
                margin: 20px 0;
            }
            ul li {
                list-style: disc;
                margin-left: 22px;
                margin-bottom: 3px;
            }
        </style>
        <p class="text-center">This document was last updated on: {{ $lastUpdated }}.</p>
        {!! $content !!}
    </div>
</div>
@endsection
