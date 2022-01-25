<x-layout>

    <h1 style="margin-top: 50px;text-align: center;color:rgb(25, 140, 218)">Create Post</h1>
    <form class="row g-3" style="margin: 70px;margin-left:350px " action="{{ URL::to('post') }}" method="post">
        @csrf


        <div class="col-md-4">
            <label for="inputTitle4" class="form-label-lg  mb-3" style="color:rgb(25, 140, 218); ">Title</label>
            <input type="Title" class="form-control" style="height:44px" name="title" id="inputTitle4">
        </div>
        <br>
        <div class="col-md-4">
            <label for="inputCategoryTitle4" class="form-label" style="color:rgb(25, 140, 218);">Category
                Title</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-top:5px">
                <option selected disabled>Choose categories</option>
                @foreach ($catagories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-8">
            <label for="inputDescription2" class="form-label" style="color:rgb(25, 140, 218);">Description</label>
            <input type="text" class="form-control" id="inputDescription" name="description" style="height:90px;">
        </div>

        <label for="img" style="color:rgb(25, 140, 218);">Select image:</label>
        <input style="color:rgb(25, 140, 218);" type="file" id="img" name="img" accept="image/*">
        <div class="col-12">
            <br>

            <button type="submit" class="btn btn-primary" style="margin-left:270px ">Share</button>
        </div>
    </form>

</x-layout>
