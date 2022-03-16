@include('admin.layout.sidebar')
@include('admin.layout.sidebar')
<section>

    <div class="conitaner" style=" margin-left:20%;  margin-top:90px; width: 75%;">
        <div class="panel panel-default">
            <div class="panel-heading">
             Comments 
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Post's name</th>
                                <th>description</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>hebaallah</td>
                                <td>Php </td>
                                <td>php is good</td>
                                <td><i class="fa fa-eye" aria-hidden="true"  style=" margin-left:15px"></i></td>
                                <td><i class="fa fa-pencil-square-o" aria-hidden="true" style="  color:green ;margin-left:15px"></i></td>
                                <td><i class="fa fa-trash fa-1.5x" aria-hidden="true" style="color:red; margin-left:20px"></i></td>
                            </tr>

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