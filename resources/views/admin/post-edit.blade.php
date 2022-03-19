@include('admin.layout.sidebar')

<section>
    <div class="container" style="margin-right:50px; margin-top:90px">
        <div class="panel panel-default">
            <div class="panel-heading">
                Post's table
            </div> 
             <div class="container" style="width: fit-content; margin-top:5px">
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
           
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form role="form" action="{{ route('admin.post-update', $post->id) }}" method="POST">
                @method("put")  
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control"  name="title" value="{{$post->title}}" require>
                        <span style="color: red"> @error('title'){{ $message }}@enderror</span>

                    </div>
                    <div class="form-group">
                    <label for="inputCategoryTitle4" name="category_id" class="form-label">Category</label>
                     <x-categories :categoryId="$post->category_id"  />
                    </div>
                    <div class="form-group">
                        <label>description</label>
                        <input class="form-control"  name="description" value="{{$post->description}}" require>
                        <span style="color: red"> @error('description'){{ $message }}@enderror</span>

                    </div>
                    {{-- <div>
            <img src="{{asset($post->thumbnail)}}"/>
        </div> --}}
        <img src="{{ URL::to('/storage/posts') . '/' . $post->thumbnail }}" alt="" style="weight:80px ; height: 90px ;">
                    <div class="form-group">
                    <label for="img" style="color:rgb(25, 140, 218);">Select image:</label>
                    <input style="color:rgb(25, 140, 218);" type="file" id="img" name="img" accept="image/*">  

                    </div>
                    
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('admin.post') }}" type="submit" class="btn btn-danger">Cancel</a>
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->






















</section>