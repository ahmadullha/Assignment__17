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
            @foreach ($posts as $post)
                <div class="col-lg-3 col-md-4 col-6 aos-init aos-animate" data-aos="fade-up">
                    <a href="posts/{{ $post->id }}" class="our-work__item text-center">
                        <h5 class="title">{{ $post->title }}</h5>
                        <p>{{ $post->excerpt }}</p>
                        <span>Author: {{ $post->name }}</span>
                        <br>
                        <span>{{ $post->created_at }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>