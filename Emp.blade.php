<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  background: linear-gradient(135deg, #86e3ce, #d0e6a5);
}

.container {
  max-width: 700px;
  width: 100%;
  background: #ffffff;
  padding: 25px 30px;
  border-radius: 5px;
}

.container .title {
  font-size: 25px;
  font-weight: 500;
  position: relative;
}

.container .title::before {
  content: "";
  position: absolute;
  height: 3px;
  width: 30px;
  background: linear-gradient(135deg, #86e3ce, #d0e6a5);
  left: 0;
  bottom: 0;
}

.container form .user-details {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}

form .user-details .input-box {
  margin-bottom: 15px;
  width: calc(100% / 2-20px);
}

.user-details .input-box .details {
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}

.user-details .input-box input {
  height: 45px;
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: 1px solid #cccccc;
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid {
  border-color: #d0e6a5;
}

form .gender-details .gender-title {
  font-size: 20px;
  font-weight: 500;
}

form .gender-details .category {
  display: flex;
  width: 80%;
  justify-content: space-between;
  margin: 14px 0;
}

.gender-details .category label {
  display: flex;
  align-items: center;
}

.gender-details .category .dot {
  height: 18px;
  width: 18px;
  background: #d9d9d9;
  border-radius: 50%;
  margin-right: 10px;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three {
  border-color: #a8a7a7;
  background: #d0e6a5;
}

form input[type="radio"] {
  display: none;
}

form .button {
  height: 45px;
  margin: 45px 0;
}

form .button input {
  height: 100%;
  width: 100%;
  outline: none;
  color: #fff;
  border: none;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  border-radius: 5px;
  background: linear-gradient(135deg, #86e3ce, #d0e6a5);
}

form .button input:hover {
  background: linear-gradient(-135deg, #86e3ce, #d0e6a5);
}

@media (max-width: 584px) {
  .container {
    max-width: 100%;
  }

  form .user-details .input-box {
    margin-bottom: 15px;
    width: 100%;
  }

  form .gender-details .category {
    width: 100%;
  }

  .container form .user-details {
    max-height: 300px;
    overflow-y: scroll;
  }

  .user-details::-webkit-scrollbar {
    width: 0;
  }
}



</style>

<div class="container">
  <div class="title">EMPLOYEE DASHBOARD </div>


  <form action="{{route('insertdata')}}" method="POST" enctype="multipart/form-data">
    <div class="user-details">
   
 @csrf


<div class="input-box">
        <span class="details"> Name</span>
        <input type="text" name="name" id="" placeholder="Enter your name"  />
      </div>

@if($errors->any())
<ul> @foreach ($errors->get('name') as $message)
  <li> {{$message}}</li>
  @endforeach
  @endif
</ul>



      <div class="input-box">
        <span class="details">Email</span>
        <input type="text" name="email" id="" placeholder="Enter your username" />
     
   

    @if($errors->any())
<ul> @foreach ($errors->get('email') as $message)
  <li> {{$message}}</li>
  @endforeach
  @endif
</ul>


      <div class="input-box">
        <span class="details">Phone Number</span>
        <input type="tel" name="number" id="" placeholder="Enter your number"  />
     </div>


      @if($errors->any())
<ul> @foreach ($errors->get('number') as $message)
  <li> {{$message}}</li>
  @endforeach
  @endif
</ul> 

      <div class="input-box">
        <span class="details">Password</span>
        <input type="text" name="password" id="" placeholder="Enter your password"  />
  </div>


      @if($errors->any())
<ul> @foreach ($errors->get('password') as $message)
  <li> {{$message}}</li>
  @endforeach
  @endif
</ul> 

 

    <div class="input-box">
        <span class="details"> Image</span>
        <input type="file" name="image" id="" placeholder="Enter your name"  />
      </div>
@if($errors->any())
<ul> @foreach ($errors->get('image') as $message)
  <li> {{$message}}</li>
  @endforeach
  @endif
</ul>


    <div class="button">
      <input type="submit"  value ="Register" />
    </div>
  </form>

  <div>
            <a href="{{url('/employee/get')}}"><button type="button" class="btn btn-primary">GO TO DASHBOARD</button> </a>
</div>