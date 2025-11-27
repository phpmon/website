@extends('layouts.shared')

@section('title', 'PHP Monitor EAP')
@section('description', 'This page details all recent changes to EAP builds for PHP Monitor.')

@section('content')
<div>
    <div class="bg-dim flex">
        <header class="flex flex-col m-auto max-w-xl py-5 md:py-8 lg:py-10 p-4">
            <div class="flex">
                <x-logo size="95"></x-logo>
                <h1 class="text-xl font-bold mb-2 text-white mt-3">
                    <span class="text-black text-3xl">PHP Monitor</span><br/>
                    <span class="text-primary text-3xl">Early Access</span>
                </h1>
            </div>
        </header>
    </div>
    <div class="px-4">
        <style>
            .infobox {
                border-radius: 5px;
            }
            h1 {
                font-size: 26px;
                font-weight: bold;
            }
            h3 {
                font-size: 18px;
                font-weight: bold;
                margin: 32px 0 20px 0;
            }
            h4 {
                font-size: 16px;
                color: #939393;
                border-bottom: 1px solid #b6b6b6;
                font-weight: bold;
                margin: 0 0 15px;
            }
            ul {
                list-style: square;
                line-height: 160%;
                margin-left: 20px;
            }
            ul li {
                margin-bottom: 10px;
            }
            ul li ul {
                font-size: 14px;
                margin-top: 10px;
                color: #555;
            }
            ul li ul li code {
                font-size: 12px;
            }
            a {
                text-decoration: underline;
                color: #4894FC;
            }
            p.info {
                margin-top: 15px;
                background-color: #e4f5f8;
                padding: 25px;
                line-height: 160%;
                border-radius: 5px;
            }
            p.warning {
                position: relative;
                margin-top: 15px;
                background-color: #ffcfc3;
                padding: 25px;
                line-height: 160%;
                border-radius: 5px;
            }
            code {
                background-color: #ebf9ff;
                border: 1px solid #bed9ef;
                border-radius: 3px;
                padding: 2px 5px;
                font-size: 14px;
            }
        </style>
        <div class="flex flex-col m-auto max-w-3xl py-4 md:py-10">
            <div class="p-4 mb-8 bg-yellow-100 py-4 infobox shadow-sm">
                <p>This is the changelog for the early access builds of PHP Monitor. You can gain access to these builds by <a href="https://github.com/sponsors/nicoverbruggen" target="_blank">sponsoring the project</a> on a monthly basis on GitHub for as low as $5 per month.</p>
                <p class="text-sm mt-2 text-gray-500">You also get early access to a private repository, and I will prioritize issues opened by you if you are sponsor.</p>
            </div>

            <h1>Release Notes</h1>
            {!! $content !!}
        </div>
    </div>
</div>
@endsection
