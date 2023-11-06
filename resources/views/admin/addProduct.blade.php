<!DOCTYPE html>
<html>
<head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm Sản Phẩm</h2>
			</div>
            <button type="submit" class="btn btn-info"><a href="{{route('showProduct')}}" style="text-decoration: none; color:yellow">Danh Sách Sản Phẩm</a></button>
			<br>

            <div class="panel-body">
                <form action="{{ route('addProduct')}}" method="POST">
                    
                    {{-- {{ csrf_field() }} --}}
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input required="true" type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="des">Des:</label>
                        <input required="true" type="text" class="form-control" id="des" name="des">
                    </div>
                    <div class="form-group">
                        <label for="img">Img:</label>
                        <input type="text" class="form-control" id="img" name="img">
                    </div>
                    
                    <div class="form-group">
                        <label for="genre">Genre:</label>
                        <input type="text" class="form-control" id="genre" name="genre">
                    </div>
                    <div class="form-group">
                        <label for="release">Release:</label>
                        <input type="text" class="form-control" id="release" name="release">
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <input type="text" class="form-control" id="status" name="status">
                    </div>
                    <div class="form-group">
                        <label for="rate">Rate:</label>
                        <input type="text" class="form-control" id="rate" name="rate">
                    </div>
                    <div class="form-group">
                        <label for="list_ep">List_ep:</label>
                        <input type="text" class="form-control" id="list_ep" name="list_ep">
                    </div>
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
	</div>
</body>
</html>