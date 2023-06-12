@extends('layout.app')


@section('content')
    <section class="our-work">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-work__content entry-title text-center">
                        <h4 class="sub-title font-la font-weight-normal aos-init aos-animate" data-aos="fade-right">All Posts</h4>
                        <h2 class="title aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">Our Working Process</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-30"> 
                <div class="12 aos-init text-center w-100 aos-animate" data-aos="fade-up">
                    <div class="our-work__item text-center">
                        <h5 class="title">{{ $post[0]->title }}</h5>
                        <p>{{ $post[0]->excerpt }}</p>
                        <p>{{ $post[0]->description }}</p>
                        <span>Author: {{ $post[0]->name }}</span>
                        <br>
                        <span>{{ $post[0]->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>   
@endsection