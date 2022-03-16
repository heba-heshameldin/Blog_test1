<x-layout>
    <div class="page" style="margin-top:40px; margin-left:40px; margin-right:40px">

        <select onchange="location = '/posts/category/' + this.value;" name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-top:5px">
            <option selected disabled>Choose categories</option>
            @foreach ($catagories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
        <button type="button" class="btn btn-primary" style="margin-bottom: 20px ;  margin-top:17px; position:relative-right"><a href="{{ route('posts.create') }}" style="color: white; text-decoration: none ; "> ➕ Add new
                post</a></button>

        <div class="row  ">

            @foreach ($posts as $post)

            <div class="col-lg-4 col-md-6">
                <!--Card image-->
                <div class="card card-cascade card-ecommerce wider shadow mb-5  ">
                    <div class="view view-cascade overlay text-center"> <img class="card-img-top" src="{{ URL::to('/storage/posts') . '/' . $post->thumbnail }}" alt="" style="height: 300px">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card Body-->
                    <div class="card-body card-body-cascade">
                        <!--Card Title-->
                        <h4 class="card-title"><strong><a href="">{{ $post->title }}</a></strong></h4>
                        <!-- Card Description-->
                        <p class="card-text">{{ $post->description }}</p>
                        <h6 style="display: inline-block">Cateogry Title: </h6>
                        <span>{{ App\Models\Category::find($post->category_id)->title }}</span>
                        <br>
                        <h6 style="display: inline-block">User Name :</h6>
                        <span>{{ App\Models\User::find($post->user_id)->name }}</span>


                        <!--Card footer-->
                        <div>
                            <button type="button" class="btn btn-success" style="margin-bottom: 20px"><a href="/posts/view/{{ $post->id }}" style="color: white; text-decoration: none">View</a></button>

                            @can('isPostAuth', $post)
                            <button type="button" class="btn btn-primary" style="margin-bottom: 20px"><a href="{{ route('posts.edit', $post->id) }}" style="color: white; text-decoration: none">Edit</a></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="{{ '#exampleModal' . $post->id }}" style="margin-bottom: 20px">
                                Delete
                            </button>
                            @endcan

                            <!-- Modal -->

                            <div class="modal fade" id="{{ 'exampleModal' . $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                            <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $posts->links() }}
        {{-- {{dd($posts)}} --}}

    </div>

</x-layout>
