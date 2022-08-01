@extends('application.master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>
@endif
<div class="main-container">

<!-- Start -->
    <div class="card-header">Add Application</div>


        <div class="card">
          <form method="post" action="{{ route('application.store') }}" enctype="multipart/form-data">
            @csrf
              <div class="container" style="">
      
                <div class="tab-wrap">
      
                  <input type="radio" id="tab4" name="tabGroup2" class="tab" checked>
                  <label for="tab4">Applicant Information</label>
      
                  <input type="radio" id="tab5" name="tabGroup2" class="tab">
                  <label for="tab5">Upload Requirements</label>
      
                  <input type="radio" id="tab6" name="tabGroup2" class="tab">
                  <label for="tab6">Bananas</label>
      
      
                  <div class="tab__content">
                    <h3>Basic Information</h3>
                    <div class="row">
                      <div class="col">
      
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" id="lastName" name="lastName" class="form-control" required="">
                    </div>
      
                  </div>
      
                    <div class="col">
      
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="form-control" required="">
                      </div>
      
                    </div>
                      
                    </div>
      
                    <div class="row">
                      <div class="col">
      
                        <div class="form-group">
                          <label for="exampleInputEmail1">Middle Name</label>
                          <input type="text" id="middleName" name="middleName" class="form-control" required="">
                        </div>
      
                      </div>
      
                      <div class="col">
      
                        <div class="form-group">
                          <label for="exampleInputEmail1">Birth Date</label>
                          <input type="date" id="birthDate" name="birthDate" class="form-control" required="">
                          </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col">
      
                        <label class="col-sm-2 col-label-form">Student Gender</label>
                        <div class="col-sm-10">
                          <select name="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                  
                      </div>
                      <div class="col">
      
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email Address</label>
                          <input type="text" id="email" name="email" class="form-control" required="">
                        </div>
                        
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col">
      
                        <div class="form-group">
                          <label for="exampleInputEmail1">Phone Number</label>
                          <input type="text" id="phone" name="phone" class="form-control" required="">
                        </div>
      
                      </div>
      
                      <div class="col">
      
                        <div class="form-group">
                          <label for="exampleInputEmail1">Company</label>
                          <input type="text" id="company" name="company" class="form-control" required="">
                        </div>
      
                      </div>
      
                    </div>
      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" id="address" name="address" class="form-control" required="">
                      </div>
      
                  </div>
      
                  <div class="tab__content">
                    <h3>Upload Requirements</h3>
                    <div class="row mb-4">
                      <label class="col-sm-2 col-label-form">Student Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="applicantImage" />
                      </div>
                    </div>
                  </div>
      
                  <div class="tab__content">
                    <h3>Bananas</h3>
                    <p>Praesent nonummy mi in odio. Nullam accumsan lorem in dui. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Nullam accumsan lorem in dui. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                  </div>
      
                </div>
              </div>
              <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" style="color:black; " />
              </div>	
          </form>
          <br>
        </div>
      </div> 
</div>
<style>
.card{
  display: inline-block;
  height: auto;
}
.tab-wrap {
  transition: 0.3s box-shadow ease;
  border-radius: 6px;
  max-width: 100%;
  display: flex;
  flex-wrap: wrap;
  position: relative;
  list-style: none;
  background-color: #fff;
  margin: 40px 0;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.tab {
  display: none;
}
.tab:checked:nth-of-type(1) ~ .tab__content:nth-of-type(1) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(2) ~ .tab__content:nth-of-type(2) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(3) ~ .tab__content:nth-of-type(3) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(4) ~ .tab__content:nth-of-type(4) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(5) ~ .tab__content:nth-of-type(5) {
  opacity: 1;
  transition: 0.5s opacity ease-in, 0.8s transform ease;
  position: relative;
  top: 0;
  z-index: 100;
  transform: translateY(0px);
  text-shadow: 0 0 0;
}
.tab:first-of-type:not(:last-of-type) + label {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.tab:not(:first-of-type):not(:last-of-type) + label {
  border-radius: 0;
}
.tab:last-of-type:not(:first-of-type) + label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.tab:checked + label {
  background-color: #fff;
  box-shadow: 0 -1px 0 #fff inset;
  cursor: default;
}
.tab:checked + label:hover {
  box-shadow: 0 -1px 0 #fff inset;
  background-color: #fff;
}
.tab + label {
  box-shadow: 0 -1px 0 #eee inset;
  border-radius: 6px 6px 0 0;
  cursor: pointer;
  display: block;
  text-decoration: none;
  color: #333;
  flex-grow: 3;
  text-align: center;
  background-color: #f2f2f2;
  user-select: none;
  text-align: center;
  transition: 0.3s background-color ease, 0.3s box-shadow ease;
  height: 50px;
  box-sizing: border-box;
  padding: 15px;
}
.tab + label:hover {
  background-color: #f9f9f9;
  box-shadow: 0 1px 0 #f4f4f4 inset;
}
.tab__content {
  padding: 10px 25px;
  background-color: transparent;
  position: absolute;
  width: 100%;
  z-index: -1;
  opacity: 0;
  left: 0;
  transform: translateY(-3px);
  border-radius: 6px;
}
/* boring stuff */
body {
  font-family: 'Helvetica', sans-serif;
  background-color: #e7e7e7;
  color: #777;
  padding: 30px 0;
  font-weight: 300;
}
.container {
  margin: 0 auto;
  display: block;
  max-width: 1000px;
}
.container > *:not(.tab-wrap) {
  padding: 0 80px;
}
h1, h2 {
  margin: 0;
  color: #444;
  text-align: center;
  font-weight: 400;
}
h2 {
  font-size: 1em;
  margin-bottom: 30px;
}
h3 {
  font-weight: 400;
}
p {
  line-height: 1.6;
  margin-bottom: 20px;
}

</style>
 
@endsection('content')