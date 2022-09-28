@extends('theme::Layouts.main')

@section('title', $page->title)

@section('header')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ setting('site.imageStorage').str_replace('\\', '/', $page->image) }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>{{ $page->title }}</h1>
                        <span class="subheading">{{ $page->sub_title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')        <!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                {!!  $page->body !!}
            </div>
        </div>
    </div>
</main>
@stop
