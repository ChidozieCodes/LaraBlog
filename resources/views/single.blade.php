@extends('layout.app') {{-- Your main layout with header/footer --}}

@section('content')
    <section id="single_container">
        <article id="single_header">
            <div class="single_img">
                <img src="{{ asset('images/bulb.png') }}" alt="bulb">
            </div>
    
            <article class="single_content">
                <ul class="single_content_list">
                    <li class="caty">Travel</li><br>
                    <li>September 26, 2019 </li><br>
                    <li> 1 min read</li>
                </ul><br>
                <h2>The spectacle before us was indeed sublime</h2><br>
                <ul class="blog_content_list_2">
                    <li class="author">
                        <div class="author_img">
                            <img src="{{ asset('images/author.jpg') }}" alt="author">
                        </div>
                        <span>Jonathan Doe</span>
                    </li>
                </ul>
            </article>
        </article><br>
        <article>
           <p> Welcome, it’s great to have you here.</p><br>

            <p> 
                We know that first impressions are important, so we’ve populated your new site with some initial getting started posts that will help you get familiar with everything in no time. This is the first one!
            </p><br>
            <p>
                Ghost is made by an independent non-profit organisation called the Ghost Foundation. We are 100% self funded by revenue from our Ghost(Pro) service, and every penny we make is re-invested into funding further development of free, open source technology for modern publishing.
            </p><br>
            <p>
                We’re a small team of designers and developers, and we’re always looking for ways to improve Ghost. If you have any feedback or suggestions, please let us know! You can reach us at Ghost is made by an independent non-profit organisation called the Ghost Foundation. We are 100% self funded by revenue from our Ghost(Pro) service, and every penny we make is re-invested into funding further development of free, open source technology for modern publishing.
                Ghost is made by an independent non-profit organisation called the Ghost Foundation. We are 100% self funded by revenue from our Ghost(Pro) service, and every penny we make is re-invested into funding further development of free, open source technology for modern publishing.

            </p><br>
        </article>
        
    </section>

@endsection
