

    @extends('layout.app')

    @section('content')
        <section id="blog_container">
            <div class="blog_img">
                <img src="{{ asset('images/bulb.png') }}" alt="bulb">
            </div>
            <article class="blog_content">
                <ul class="blog_content_list">
                    <li class="caty">Travel</li>
                    <li>September 26, 2019 </li>
                    <li> 1 min read</li>
                </ul><br>
                <h2>The spectacle before us was indeed sublime</h2><br>
                <p>
                    The spectacle before us was indeed sublime. It was a great and wonderful thing, a thing of beauty and wonder. It was a thing that made us feel small and insignificant in the face of its grandeur. It was a thing that made us...
                </p><br>
                <ul class="blog_content_list_2">
                    <li class="read_more"><a href="{{ route('single.page') }}">Read more</a></li>
                    <li class="author">
                        <div class="author_img">
                            <img src="{{ asset('images/author.jpg') }}" alt="author">
                        </div>
                        <span>Jonathan Doe</span>
                    </li>
                </ul>
            </article>
        </section>
        <section id="blog_container">
            <div class="blog_img">
                <img src="{{ asset('images/one.png') }}" alt="bulb">
            </div>
            <article class="blog_content">
                <ul class="blog_content_list">
                    <li class="caty">Travel</li>
                    <li>September 26, 2019 </li>
                    <li> 1 min read</li>
                </ul><br>
                <h2>The spectacle before us was indeed sublime</h2><br>
                <p>
                    The spectacle before us was indeed sublime. It was a great and wonderful thing, a thing of beauty and wonder. It was a thing that made us feel small and insignificant in the face of its grandeur. It was a thing that made us...
                </p><br>
                <ul class="blog_content_list_2">
                    <li class="read_more"><a href="{{ route('single.page') }}">Read more</a></li>
                    <li class="author">
                        <div class="author_img">
                            <img src="{{ asset('images/author.jpg') }}" alt="author">
                        </div>
                        <span>Jonathan Doe</span>
                    </li>
                </ul>
            </article>
        </section>
        <section id="blog_container">
            <div class="blog_img">
                <img src="{{ asset('images/fruit.png') }}" alt="fruit">
            </div>
            <article class="blog_content">
                <ul class="blog_content_list">
                    <li class="caty">Travel</li>
                    <li>September 26, 2019 </li>
                    <li> 1 min read</li>
                </ul><br>
                <h2>The spectacle before us was indeed sublime</h2><br>
                <p>
                    The spectacle before us was indeed sublime. It was a great and wonderful thing, a thing of beauty and wonder. It was a thing that made us feel small and insignificant in the face of its grandeur. It was a thing that made us...
                </p><br>
                <ul class="blog_content_list_2">
                    <li class="read_more"><a href="{{ route('single.page') }}">Read more</a></li>
                    <li class="author">
                        <div class="author_img">
                            <img src="{{ asset('images/author.jpg') }}" alt="author">
                        </div>
                        <span>Jonathan Doe</span>
                    </li>
                </ul>
            </article>
        </section>
    @endsection

