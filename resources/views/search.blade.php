<!DOCTYPE html>
<html>
    <head>
        <style>ul {
  list-style-type: none;
  overflow: hidden;
}

li {
  float: right;
}

li a {
  color: #000;
  display: block;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size:14px;
}
li a:hover {
  text-decoration: underline;
}
.grid{
  height:23px;
  position:relative;
  bottom:4px;
}
.signbutton{
  background-color: #4885ed;
  color: #fff;
  border:none;
  border-radius:3px;
  padding:7px 10px;
  position:relative;
  bottom:7px;
  font-weight:bold;
}
.logo{
  margin-top:200px;
  margin-bottom:20px;
}
.bar{
  margin:0 auto;
  width:575px;
  border-radius:30px;
  border:1px solid #dcdcdc;
}
.bar:hover{
  box-shadow: 1px 1px 8px 1px #dcdcdc;
}
.bar:focus-within{
  box-shadow: 1px 1px 8px 1px #dcdcdc;
  outline:none;
}
.searchbar{
  height:45px;
  border:none;
  width:500px;
  font-size:16px;
  outline: none;
  
}
.voice{
  height:20px;
  position:relative;
  top:5px;
  left:10px;
}
.buttons{
  margin-top:30px;
}
.button{
  background-color: #f5f5f5;
  border:none;
  color:#707070;
  font-size:15px;
  padding: 10px 20px;
  margin:5px;
  border-radius:4px;
  outline:none;
}
.button:hover{
  border: 1px solid #c8c8c8;
  padding: 9px 19px;
  color:#808080;
}
.button:focus{
  border:1px solid #4885ed;
  padding: 9px 19px;
}

</style>
<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</head>
  <center>
  <div class="container"></br>
    <form method="post" action="{{ route('githubsearch') }}">
        @csrf
    <div class="bar">
      <input class="searchbar" name="search" type="text" placeholder="Enter you search keyword here" title="Search" required>
    </div>
    <div class="buttons">
      <input class="btn-search button" name="Search" type="submit">
     </div>
    </form>
</div>
<div class="container">

        <div class="list-group">
            @if(!empty($data))
            <h2>List Groups</h2>
            @foreach($data as $value)
                <a class="links" href="{{ $value['url'] }}" target="_blank"> {{ $value['name'] }}  </a>
                    <br> {{ $value['description'] }}    
            @endforeach
            @else
            <h2>Result not found</h2>
        @endif
        </div>
    </div>
  </body>