@include('admin.layout.sidebar')
<section>

    <div class="conitaner" style=" margin-left:20%;  margin-top:90px; width: 75%;">
        <div class="panel panel-default">
            <div class="panel-heading">
             Comments 
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
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Post's name</th>
                                <th>description</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($comment as $row)
                            <tr>
                            <td>{{ App\Models\User::find($row->user_id)->name ?? 'No name' }}</td>
                                <td>{{ App\Models\Post::find($row->post_id)->description ?? 'No description' }} </td>
                                <td> {{ $row->description }}</td>
                                <td><a target="_blank" href='/posts/view/{{$row->post_id}}'><i class="fa fa-eye" aria-hidden="true"  style=" margin-left:15px"></i></a></td>
                                <form action="{{ route('admin.comment-delete', $row->id) }}" method="POST">
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
    </div>

</section>