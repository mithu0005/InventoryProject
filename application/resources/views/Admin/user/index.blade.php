<html>
<head>
    <title>user page</title>
    <h1> User Information </h1>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />



</head>

<body>

<hr>
<a href="user/create" class="w3-button w3-black btn btn-danger"><strong>Add User</strong><br></a>
<a href="http://localhost/SoftDelete/admin" class="w3-button w3-black btn btn-danger"><strong>Admin</strong><br></a>

<hr>

<div class="container box">
    <div class="panel panel-default">
        <div class="panel-body">

            <table class="table table-striped table-bordered">
                <thead>
                <tr>

                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id}}<br></td>
                        <td>{{ $user->name}}<br></td>
                        <td>{{ $user->email}}<br></td>
                        <td>
                            <form action="{{action('Admin\UserController@destroy', $user['id']) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <input type="submit" class="delete" value="delete">
                            </form>
                        </td>
                        <td><a href="{{action('Admin\UserController@edit', $user['id']) }}">Edit</a> <br></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>


<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
        $(".delete").click(function(e){
            if(!confirm('Are you sure?')){
                e.preventDefault();
                return false;
            }
            return true;
        });
    });
</script>






