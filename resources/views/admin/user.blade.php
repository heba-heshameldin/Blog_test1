@include('admin.layout.sidebar')

<section>
    <div class="container" style="margin-right:50px; margin-top:90px">
        <div class="panel panel-default">
            <div class="panel-heading">
                User's table

            </div>
            <div class="container" style="width: fit-content; margin-top:5px">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Full name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th>Edit</th>
                                <th>Delete</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $row)
                            <tr class="success">
                                <td>{{$row->email}} <small style='color: gray'>{{$row->id === 1 ? 'admin' : 'user'}}</small></td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->date_of_birth}}</td>
                                <td><a href='user-edit/{{$row->id}}'><i class="fa fa-pencil-square-o" aria-hidden="true" style="  color:green ;margin-left:15px"></i></a></td>
                                <form action="user-delete/{{$row->id}}" method="POST">
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