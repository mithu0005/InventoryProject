<html>
<head>
    <title>product</title>
    <h1> User Information </h1>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />



</head>

<body>

<hr>
<a href="product/create" class="w3-button w3-black btn btn-danger"><strong>Add Product</strong><br></a>
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
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id}}<br></td>
                        <td>{{ $product->name}}<br></td>
                        <td>{{ $product->description}}<br></td>
                        <td>{{ $product->quantity}}<br></td>
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
