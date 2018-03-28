@include('include.header')
	<div class="container ">
		<div class="row">
			<div class="col-md-10 center-div">
				<form class= "form-horizontal" method="POST" action="{{ url('/edit', array($articles->id)) }}">
					{{ csrf_field() }}
					<fieldset>
						<br><br><br><br>
						<div class="form-group">

							@if(count($errors)>0)
								@foreach($errors->all() as $error)
									<div class="alert alert-danger center-div">
										{{ $error }}
									</div>

								@endforeach
							@endif
						  <label for="exampleInputEmail1">Update Name</label>
						  <input class="form-control" name="name" value="<?php echo $articles->name; ?>" aria-describedby="emailHelp" placeholder="Enter Name"  background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" type="text">
						  
						</div>
						<div class="form-group">
						  <label for="exampleInputPassword1">Update Address</label>
						  <input class="form-control" name="address" value="<?php echo $articles->address; ?>" placeholder="Enter Address"  background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" type="text">
						</div>

						<div class="form-group">
						  <label for="exampleInputPassword1">Update Phone No</label>
						  <input class="form-control" name="phone_no" value="<?php echo $articles->phone_no; ?>" placeholder="Enter Phone No"  background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" type="text">
						</div>

						<button type="submit" class="btn btn-primary">Update</button>
						<a href="{{ url('/') }}" class="btn btn-primary">Back</a>
					</fieldset>
				</form>
							
			</div>
			
		</div>
		

	</div>

@include('include.footer')