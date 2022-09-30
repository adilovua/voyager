@extends('theme::Layouts.main')

@section('title', '-Gallery')

@section('header')
<section class="cd-hero js-cd-hero js-cd-autoplay">
    <ul class="cd-hero__slider">
        <li class="cd-hero__slide cd-hero__slide--selected js-cd-slide">
            <div class="cd-hero__content cd-hero__content--full-width">
                <h2>Hero slider</h2>
                <p>A simple, responsive slideshow in CSS &amp; JavaScript.</p>
                <a href="http://codyhouse.co/gem/hero-slider/" class="cd-hero__btn">Article &amp; Download</a>
            </div> <!-- .cd-hero__content -->
        </li>

        <li class="cd-hero__slide js-cd-slide">
            <div class="cd-hero__content cd-hero__content--half-width">
                <h2>Slide title here</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                <a href="#0" class="cd-hero__btn">Start</a>
                <a href="#0" class="cd-hero__btn cd-hero__btn--secondary">Learn More</a>
            </div> <!-- .cd-hero__content -->

            <div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
                <img src="assets/tech-1.jpg" alt="tech 1">
            </div> <!-- .cd-hero__content -->
        </li>

        <li class="cd-hero__slide js-cd-slide">
            <div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
                <img src="assets/tech-2.jpg" alt="tech 2">
            </div> <!-- .cd-hero__content -->

            <div class="cd-hero__content cd-hero__content--half-width">
                <h2>Slide title here</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                <a href="#0" class="cd-hero__btn">Start</a>
                <a href="#0" class="cd-hero__btn cd-hero__btn--secondary">Learn More</a>
            </div> <!-- .cd-hero__content -->

        </li>

        <li class="cd-hero__slide cd-hero__slide--video js-cd-slide">
            <div class="cd-hero__content cd-hero__content--full-width">
                <h2>Slide title here</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
                <a href="#0" class="cd-hero__btn">Learn more</a>
            </div> <!-- .cd-hero__content -->

            <div class="cd-hero__content cd-hero__content--bg-video js-cd-bg-video" data-video="assets/video/video">
                <!-- video element will be loaded using JavaScript -->
            </div> <!-- .cd-hero__content -->
        </li>

        <li class="cd-hero__slide js-cd-slide">
            <div class="cd-hero__content cd-hero__content--full-width">
                <h2>Slide title here</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
                <a href="#0" class="cd-hero__btn">Start</a>
                <a href="#0" class="cd-hero__btn cd-hero__btn--secondary">Learn More</a>
            </div> <!-- .cd-hero__content -->
        </li>
    </ul> <!-- .cd-hero__slider -->

    <div class="cd-hero__nav js-cd-nav">
        <nav>
            <span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>

            <ul>
                <li class="cd-selected"><a href="#0">Intro</a></li>
                <li><a href="#0">Tech 1</a></li>
                <li><a href="#0">Tech 2</a></li>
                <li><a href="#0">Video</a></li>
                <li><a href="#0">Image</a></li>
            </ul>
        </nav>
    </div> <!-- .cd-hero__nav -->
</section> <!-- .cd-hero -->
@stop

@section('content')
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
    </p>
@stop
