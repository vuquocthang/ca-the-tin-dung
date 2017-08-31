@extends('site.base')

@section('meta_description')
    @parent
@endsection

@section('slider')
    @parent
@endsection

@section('content')
    <div class='tpl-blog-holder'>
        @foreach($posts as $post)
        <div class="column dt-sc-one-column">
            <article id="post-7786" class="blog-entry entry-classic post-7786 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-asia tag-nature">
                <!-- Entry Meta Data -->
                <div class="entry-meta-data">
                    <div class="entry-title">
                        <h4><a href="" title="">{{ $post['title'] }}</a></h4>
                    </div>
                    <!-- Entry Meta Data -->



                    <!-- Featured Image -->

                    <div class="entry-details">
                        <div class="entry-body">
                            <?php echo htmlspecialchars_decode($post['body']) ?>
                        </div>




                    </div>

                </div>
                <!-- Entry Meta Data -->
            </article>
        </div>

        @endforeach

    </div>
@endsection