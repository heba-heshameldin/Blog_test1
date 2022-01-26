<x-layout>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container" style="margin-top: 50px; ">
        <div class="row">
            <div class="col-md-8">
                <div class="post-content">
                    <img src="{{ URL::asset('assets/img') . '/' . $post->thumbnail }}" alt="post-image"
                        class="img-responsive post-image">
                    <div class="post-container">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user"
                            class="profile-photo-md pull-left">
                        <div class="post-detail">
                            <div class="user-info">
                                <h5><a href="timeline.html" class="profile-link">{{ App\Models\User::find($post->user_id)->name }}</a>
                                    <p class="text-muted">Published in {{ $post->created_at }}</p>
                            </div>
                            <hr>
                            <div class="line-divider"></div>
                            <div class="post-text">
                                <b>Title:</b> {{ $post->title }}<br><hr>
                                <p><b>Body: </b>{{ $post->description }} <i class="em em-anguished"></i> <i
                                        class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                            </div>
                            <div class="line-divider"></div>
                            <hr><b>Comments: </b><br>
                            <div class="post-comment">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""
                                    class="profile-photo-sm">
                                <p><a href="timeline.html" class="profile-link">Diana </a><i
                                        class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                    minim veniam, quis nostrud </p>
                            </div>
                            <div class="post-comment">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                    class="profile-photo-sm">
                                <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                            </div>
                            <div class="post-comment">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                    class="profile-photo-sm">
                                <input type="text" class="form-control" placeholder="Post a comment">
                            </div>
                            <div class="button">
                                <button type="button" class="btn btn-primary"
                                    style="margin-bottom: 10px; margin-left:200px"><a href="editprofile"
                                        style="color: white; text-decoration: none">Add comment</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
