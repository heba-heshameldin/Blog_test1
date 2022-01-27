<x-layout>

    <h1 style="margin-top: 50px;text-align: center;color:rgb(25, 140, 218)">Edit Post</h1>
    <form class="row g-3" enctype="multipart/form-data" style="margin: 70px;margin-left:350px "
        action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf


        <div class="col-md-4">
            <label for="inputTitle4" class="form-label-lg  mb-3" style="color:rgb(25, 140, 218); ">Title</label>
            <input type="Title" class="form-control" style="height:44px" id="inputTitle4" name="title"
                placeholder="Write the title" value="{{$post->title}}" />
                <span style="color: red"> @error('title'){{ $message }}@enderror</span>

        </div>
        <br>
        <div class="col-md-4">
            <label for="inputCategoryTitle4" class="form-label" style="color:rgb(25, 140, 218);">Category
                Title</label>

                <select name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-top:5px">
                    <option selected disabled>Choose categories</option>
                    @foreach ($catagories as $category)
                        <option value="{{ $category->id }}" {{ $post->category_id === $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                    @endforeach
                </select>

                
        </div>

        <div class="col-8">
            <label for="inputDescription2" class="form-label" style="color:rgb(25, 140, 218);">Description</label>
            <input type="text" class="form-control" id="inputDescription" style="height:90px;" name="description"
                placeholder="Write the description" value="{{$post->description}}">
                <span style="color: red"> @error('description'){{ $message }}@enderror</span>
        </div>

        {{-- <div>
            <img src="{{asset($post->thumbnail)}}"/>
        </div> --}}

        <label for="img" style="color:rgb(25, 140, 218);">Select image:</label>
        <input style="color:rgb(25, 140, 218);" type="file" id="img" name="img" accept="image/*">
        <div class="col-12">
            <span style="color: red"> @error('img'){{ $message }}@enderror</span>
            <br>

            <button type="submit" class="btn btn-primary" style="margin-left:270px ">Submit</button>
        </div>
    </form>

</x-layout>
