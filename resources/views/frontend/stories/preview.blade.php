@extends('frontend.layouts.master')

@section('intro')
    <h1 class="animation-slideDown"><strong> Proin ac nibh rutrum lectus rhoncus eleifend</strong></h1>
    <h2 class="h3 animation-slideUp">Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. </h2>
@stop

@section('content')
    <div class="col-sm-12 site-block">
        <h3 class="site-heading"><strong>Quick</strong> Description</h3>
        <div id="project-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
                <div class="active item">
                    <img src="img/placeholders/photos/photo11.jpg" alt="Image 1" width="100%">
                </div>
                <div class="item">
                    <img src="img/placeholders/photos/photo13.jpg" alt="Image 2" width="100%">
                </div>
                <div class="item">
                    <img src="img/placeholders/photos/photo17.jpg" alt="Image 3" width="100%">
                </div>
            </div>
            <!-- END Wrapper for slides -->

            <!-- Controls -->
            <a class="left carousel-control" href="#project-carousel" data-slide="prev">
                <span>
                    <i class="fa fa-chevron-left"></i>
                </span>
            </a>
            <a class="right carousel-control" href="#project-carousel" data-slide="next">
                <span>
                    <i class="fa fa-chevron-right"></i>
                </span>
            </a>
            <!-- END Controls -->
        </div>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <td style="width: 50%;"><strong>Author</strong></td>
                    <td class="text-right">Company Inc</td>
                </tr>
                <tr>
                    <td><strong>Category</strong></td>
                    <td class="text-right">Web Design</td>
                </tr>
                <tr>
                    <td><strong>Date upload</strong></td>
                    <td class="text-right">Feb 25, 2016</td>
                </tr>
            </tbody>
        </table>
        <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="{{ route('frontend.story.show', ['slug' => 'a', 'id' => 1]) }}" class="btn btn-info">Read more</a>

        <hr>
        <h3>Comment</h3>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId={{ env('FACEBOOK_APP_ID') }}";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <div class="fb-comments" data-href="{{ route('frontend.story.show', ['slug' => 'a', 'id' => 1]) }}" data-width="100%" data-numposts="5"></div>
    </div>
@stop