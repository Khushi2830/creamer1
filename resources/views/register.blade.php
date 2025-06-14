@extends('homeparent')
@section('title', 'ragister Page')

@section('content1')
    <div class="container-w ">
        <div class="form-container">
            <form>
                <div class="row">
                    <div class="col">
                        <label for="name">First Name</label>
                        <input type="text" id="name" name="name">

                    </div>
                    <div class="col">
                        <label for="name">last Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <label for="phone">Your Phone number</label>
                        <div class="input-icon">
                            <input type="text" id="phone" name="phone" style="flex: 1;">
                        </div>


                    </div>
                    <div class="col">
                        <label for="date">Date of the Event</label>
                        <input type="date" id="date" name="date">
                    </div>
                </div>
                <label for="email">Email</label>
                <div class="input-icon">
                    <input type="email" id="email" name="email" style="flex: 1;">
                </div>
                <label for="password">Password</label>
                <div class="input-icon">
                    <input type="password" id="password" name="password" style="flex: 1;">
                </div>



                <button class="button w-100 " style="background-color:  #5f3dc4;" type="submit">Create an new account</button>

            </form>
            <h5 class="signup-link justify-content-center align-items-center d-flex text-muted " >New to Creamer? <a href="{{ Route("login") }}"> <span class="highlight" style="color: #5f3dc4;" >sign up</span></a></h5>
        </div>
        <div class="image-container"></div>
    </div>

@endsection