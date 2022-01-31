<x-layout>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container" style="margin-top: 50px; ">
        <div class="row">
            <div class="col-md-8">
                <div class="post-content">
                    <img src="{{ URL::to('/storage/posts') . '/' . $post->thumbnail }}" alt="post-image" class="img-responsive post-image">
                    <div class="post-container">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="profile-photo-md pull-left">
                        <div class="post-detail">
                            <div class="user-info">
                                <h5><a href="timeline.html" class="profile-link">{{
                                        App\Models\User::find($post->user_id)->name }}</a>
                                    <p class="text-muted">Published in {{ $post->created_at }}</p>
                            </div>
                            <hr>
                            <div class="line-divider"></div>
                            <div class="post-text">
                                <b>Title:</b> {{ $post->title }}<br>
                                <hr>
                                <p><b>Body: </b>{{ $post->description }} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                            </div>
                            <div class="line-divider"></div>
                            <div class="comment-container">
                                <hr><b>Comments: </b><br>

                                @foreach ($comments as $comment)
                                <div class="post-comment">


                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="profile-photo-sm">

                                    <p><a href="timeline.html" class="profile-link" style="display: block">{{$comment->name}}</a>


                                        <i class="em em-laughing"></i>
                                        {{ $comment->description }}

                                    </p>
                                </div>
                                <div class="btn" style='float: right'>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="{{ '#exampleModal' . $comment->id }}" style="margin-bottom: 20px; width: 70px">
                                        Edit
                                    </button>
         
                                     <!-- Modal -->
         
                                     <div class="modal fade" id="{{ 'exampleModal' . $comment->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to edit?
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('comment.update', $comment->id) }}" method="POST">
                                                        @csrf
                                                        <div>
                                                            <input name="" id="" value="{{$comment->description}}" style="display: block ; width: 450px; height: 90px; text-align:center " />
                                                        </div>
                                                        <input type="submit" class="btn btn-success" value="update" style="margin-top: 10px">
                                                    </form>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                         {{-- @endif --}}
                                     </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-bottom: 20px; width: 70px">
                                        Delete </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    {{-- <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE') --}}
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                    {{-- </form>  --}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear" style="clear: both"></div>

                                <hr>
                                <div class="line-divider"></div>


                                @endforeach
                            </div>
                            <div class="post-comment">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="profile-photo-sm">
                                <form method="POST" action="{{ route('comment.posts', $post->id) }}">
                                    @csrf
                                    <input type="text" class="form-control" placeholder="Post a comment" name="description" style="width: 420px ;height: 50px;">
                            </div>
                            <div class="button">
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-left:200px">Add comment</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
