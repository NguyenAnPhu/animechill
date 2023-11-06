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
				<h2 class="text-center">Cập Nhật Sản Phẩm</h2>
			</div>
            <button type="submit" class="btn btn-info"><a href="{{route('showProduct')}}" style="text-decoration: none; color:yellow">Danh Sách Sản Phẩm</a></button>
			<br>

            <div class="panel-body">
                <form action="{{ url('admin/update-Product/'.$idProduct->id)}}" method="POST">
                    
                    {{-- {{ csrf_field() }} --}}
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input required="true" type="text" class="form-control" id="name" name="name" value="{{$idProduct->name}}">
                    </div>
                    <div class="form-group">
                        <label for="des">Des:</label>
                        <input required="true" type="text" class="form-control" id="des" name="des" value="{{$idProduct->des}}">
                    </div>
                    <div class="form-group">
                        <label for="img">Img:</label>
                        <input type="text" class="form-control" id="img" name="img"value="{{$idProduct->img}}">
                    </div>
                    <div class="form-group">
                        <label for="video">Video:</label>
                        <input type="text" class="form-control" id="video" name="video"value="{{$idProduct->video}}">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre:</label>
                        <input type="text" class="form-control" id="genre" name="genre"value="{{$idProduct->genre}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="release">Release:</label>
                        <input type="text" class="form-control" id="release" name="release"value="{{$idProduct->release}}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status" id="status">
                            <option value="HOT">HOT</option>
                            <option value="SẮP RA">SẮP RA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rate">Rate:</label>
                        <input type="text" class="form-control" id="rate" name="rate"value="{{$idProduct->rate}}">
                    </div>
                    <div class="form-group">
                        <label for="list_ep">List_ep:</label>
                        <input type="text" class="form-control" id="list_ep" name="list_ep" value="{{$idProduct->list_ep}}">
                    </div>
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
	</div>
</body>
</html>