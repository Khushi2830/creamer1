@extends('homeparent')
@section('title', 'ragister Page')

@section('content1')
 <div class="container-w ">
    <div class="form-container">
      <form>


        <label for="email">Email</label>
        <div class="input-icon">
          <input type="email" id="email" name="email" style="flex: 1;">
        </div>
        <label for="password">password</label>
        <div class="input-icon">
          <input type="password" id="password" name="password" style="flex: 1;">
        </div>

        

        <button class="button w-100 " style="background-color:  #5f3dc4;" type="submit">Sign up</button>
      </form>
      
            <h5 class="signup-link justify-content-center align-items-center d-flex text-muted " >sign up here. <a href="{{ Route("register") }}"> <span class="highlight" style="color: #5f3dc4;" >Register</span></a></h5>
        
    </div>
    <div class="image-container"></div>
  </div>

@endsection