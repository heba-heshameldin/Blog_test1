@include('admin.layout.sidebar')

<section>
    <div class="container" style="margin-right:50px; margin-top:90px">
        <div class="panel panel-default">
            <div class="panel-heading">
                User's edit table
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form role="form" action="{{ route('admin.users-update', $users->id) }}" method="POST">
                    @method("put")  
                    @csrf
                    <div class="form-group">
                        <label>user name</label>
                        <input type="text" name="username" value="{{$users->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" value="{{$users->email}}">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" value="{{$users->phone}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input class="form-control" type="text" name="date_of_birth" value="{{$users->date_of_birth}}">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="{{$users->address}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('admin.users') }}" type="submit" class="btn btn-danger">Cancel</a>
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->






















</section>