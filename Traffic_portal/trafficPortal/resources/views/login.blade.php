<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
<div class="tetx-center">
  <h1>login</h1>
  <div>
    <form action="{{route('login')}}" method="POST" class="form-group">
      {{csrf_field()}}
      @if ($errors->any())
      <div class="alert alert-success">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                  
              @endforeach
          </ul>
  
      </div>
          
      @endif
  
      <div class="col-md-4 form-group">
          <label>Username or email</label>
          <input type="email" name="email" value="{{old('email')}}" class="form-control">
          @error('email')
              <span class="text-danger">{{$message}}</span>
              
          @enderror
          <br>
          <label>Password</label>
          <input type="password" name="password" value="{{old('passwords')}}" class="form-control">
          <br>
          <input type="submit" name="submit" value="Login" class="btn btn-success">
  
  
      </div>
  </form>
  </div>
  

</div>
