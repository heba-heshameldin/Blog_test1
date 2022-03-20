@include('admin.layout.sidebar')

<section>
    <div class="container" style="margin-right:50px; margin-top:90px">
        <div class="panel panel-default">
            <div class="panel-heading">
                User's table

                <button type="button" class="fa fa-plus fa-lg" data-toggle="modal"
                    style="color:green; margin-left:90%; border:none ;" data-target="#add">

                </button>

                <!-- Modal -->
                <form action="{{ route('admin.category-add') }}" method="POST">
                    @csrf
                    <div class="modal fade" id="add" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add new category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputCategoryTitle4" name="category_id"
                                            class="form-label">Category</label>

                                        <input class="form-control" name="title">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
             
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
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID </th>
                                <th>Category</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $row)
                            <tr class="">
                                <td>{{$row->id}}</td>
                                <td>{{$row->title}}</td>
                                <!-- Button trigger modal -->

                                <td> <button type="button" class="fa fa-pencil-square-o" data-toggle="modal"
                                        style=" color:green ;margin-left:15px; border:none ;"
                                        data-target="#edit">

                                    </button>

                                <!-- Modal -->
                                <div class="modal fade"  tabindex="-1" role="dialog" id="edit"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit category</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="inputCategoryTitle4" 
                                            class="form-label">Category</label>
                                            
                                            <form action="{{ route('admin.category-update' , $row->id) }}" method="POST">
                                                @method("put")
                                                @csrf
                                                        <input class="form-control" name="title"
                                                            value="{{$row->title}}">

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">cancel</button>
                                                    <button type="submit" class="btn btn-success">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </td>


                                <form action="{{ route('admin.category-delete', $row->id) }}" method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <td><button class="fa fa-trash fa-1.5x" aria-hidden="true" style="color:red; margin-left:20px; border:none ;"></button></td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->






















</section>