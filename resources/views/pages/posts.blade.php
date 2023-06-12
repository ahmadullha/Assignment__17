@extends('layout.app')


@section('content')
    @include('components.post')    

    <section class="our-work">
        <div class="container">
            <div class="row mb-30">  
                <div class="12 aos-init text-center w-100 aos-animate" data-aos="fade-up">
                    <form action="{{ route('posts.store') }}" method="post" class="contact__form">
                        <input type="text" name="user_id" placeholder="user_id" data-aos="fade-right" data-aos-delay="150">  
                        <input type="text" name="title" placeholder="title" data-aos="fade-right" data-aos-delay="150">  
                        <input type="text" name="slug" placeholder="slug" data-aos="fade-right" data-aos-delay="150">  
                        <input type="text" name="excerpt" placeholder="excerpt" data-aos="fade-right" data-aos-delay="150">  
                        <input type="text" name="excerpt" placeholder="excerpt" data-aos="fade-right" data-aos-delay="150">  
                        
                        <p>
                            is_published
                            <input type="radio" name="is_published" value="1">
                            <input type="radio" name="is_published" value="0">
                        </p>
                        <textarea placeholder="description" name="description" data-aos="fade-right" data-aos-delay="300"></textarea>  
                        <input type="text" name="min_to_read" placeholder="min_to_read" data-aos="fade-right" data-aos-delay="150">  

                        <button type="submit" class="btn" data-aos="fade-up" data-aos-delay="350">Send Message</button>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>   
@endsection