<x-layout>
    <div class="page" style="margin-top:40px; margin-left:40px; margin-right:40px">
        
        <form action="{{ URL::to('posts/category') }}" method="POST">
            @csrf
        <select onchange="this.form.submit()" name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-top:5px">
            <option selected disabled>Choose categories</option>
            @foreach ($catagories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </form>

        <button type="button" class="btn btn-primary"
            style="margin-bottom: 20px ;  margin-top:17px; position:relative:right"><a href="/createpost"
                style="color: white; text-decoration: none ; "> ➕ Add new post</a></button>
        <!--For Row containing all card-->
        <div class="row" style="width: 1450px ; height:100px ">
            
            @foreach ($posts as $post)

            <div class="col-sm">
                <!--Card image-->
                <div class="card card-cascade card-ecommerce wider shadow mb-5  ">
                    <div class="view view-cascade overlay text-center"> <img class="card-img-top"
                            src="{{ URL::asset('assets/img') . '/' . $post->thumbnail }}" alt="">
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
                            <button type="button" class="btn btn-primary" style="margin-bottom: 20px"><a href="/posts/view/{{$post->id}}"
                                    style="color: white; text-decoration: none">View</a></button>
                            <button type="button" class="btn btn-primary" style="margin-bottom: 20px"><a
                                    href="/posts/edit/{{$post->id}}" style="color: white; text-decoration: none">Edit</a></button>
                            <button type="button" class="btn btn-primary" style="margin-bottom: 20px"><a
                                    href="/posts/delete/{{$post->id}}" style="color: white; text-decoration: none">Delete</a></button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>
