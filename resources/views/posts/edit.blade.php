<x-layout>

<div class="container" style="width: fit-content; margin-top:40px">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @elseif(session('delete'))
                <div class="alert alert-danger" role="alert">
                    {{session('delete')}}
                </div>
                @endif
            </div>
    <h1 style="margin-top: 50px;text-align: center;color:rgb(25, 140, 218)">Edit Post</h1>
    <form class="row g-3" enctype="multipart/form-data" style="margin: 70px;margin-left:350px " action="{{ route('posts.update', $post->id) }}" method="post">
        @method("put")
        @csrf


        <div class="col-md-4">
            <label for="inputTitle4" class="form-label-lg  mb-3" style="color:rgb(25, 140, 218); ">Title</label>
            <input type="Title" class="form-control" style="height:44px" id="inputTitle4" name="title" placeholder="Write the title" value="{{$post->title}}" />
            <span style="color: red"> @error('title'){{ $message }}@enderror</span>

        </div>
        <br>
        <div class="col-md-4">
            <label for="inputCategoryTitle4" class="form-label" style="color:rgb(25, 140, 218);">Category
                Title</label>                                        
            <x-categories :categoryId="$post->category_id"  />



        </div>

        <div class="col-8">
            <label for="inputDescription2" class="form-label" style="color:rgb(25, 140, 218);">Description</label>
            <input type="text" class="form-control" id="inputDescription" style="height:90px;" name="description" placeholder="Write the description" value="{{$post->description}}">
            <span style="color: red"> @error('description'){{ $message }}@enderror</span>
        </div>

        <div class="col-8">
            <img src="{{ URL::to('/storage/posts') . '/' . $post->thumbnail }}" alt="" class="img-thumbnail" style="width:200px ; height: 200px ;">
            </br></br><label for="img" style="color:rgb(25, 140, 218);">Select image:</label>
            <input style="color:rgb(25, 140, 218);" type="file" id="img" name="img" accept="image/*">
        </div>

        <div class="col-12">
            <span style="color: red"> @error('img'){{ $message }}@enderror</span>
            <br>

            <button type="submit" class="btn btn-primary" style="margin-left:270px ">Submit</button>
        </div>
    </form>

</x-layout>
