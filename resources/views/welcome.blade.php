<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



</head>
<body>
<div class="container-fluid " style="margin-centre ;font-style:italic" >
<div class="jumbotron text-center" style="margin-top:0 ; background-color:lightgray">
   <h1 style='color:black'>Laravel</h1>
   <button  onclick='RequestValidation()' >REFRESH</button>
</div>
</div>

<div class="container" style="margin-center">
<div class="row">
<div class="col-sm-6">
   <h1>CRUD</h1>
   <ul class="nav nav-pills flex-column">
      <li class="nav-item text-center" style="margin-top:5px">
         <a class="nav-link active" style="text-center" href="/addbook">ADD NEW BOOK</a>
      </li>
      <li class="nav-item text-center" style="margin-top:5px">
         <a class="nav-link active" style="text-center" href="/book">LIBRARY</a>
      </li>
      <li class="nav-item text-center" style="margin-top:5px">
         <a class="nav-link active" style="text-center" href="/tugas">SEKAWAN MEDIA TES </a>
      </li>
      <li class="nav-item text-center" style="margin-top:5px">
         <a class="nav-link active" style="text-center" href="/tugastambah">SEKAWAN MEDIA TES TAMBAH DATA</a>
      </li>
   </ul>
</div>

<div class="col-sm-6">
   <h1>JavaScript</h1>
   <ul class="nav nav-pills flex-column">
      <li class="nav-item text-center" style="margin-top:5px">
         <a class="nav-link active" style="text-center" href='#' onclick='setRandomColor()'>Change Background</a>
      </li>
      <li class="nav-item text-center" style="margin-top:5px">
         <a class="nav-link active" style="text-center" href="/calc" >Kalkulator</a>
      </li>
   </ul>
</div>



</div>
</div>

<div class='container' style='margin-top:100px ; background-color:white; padding-top:30px; padding-left:35px'>
   <h2 class='text-center'> @yield('judul')</h3>
   <br/>

   @yield('konten')
   <br/>
   <br/>
   <br/>
   <br/>


</div>

<div class="container-fluid" style="margin-centre">
<div class="jumbotron text-center" style="fixed-bottom; background-color:lightgray; margin-top:100px">
   <h6>Footer</h6>
</div>
</div>

</body>
   <script language="javascript">
   function alertDelete(){
      alert("Deleted")
   }

   function alertAdded(){
      alert("Added")
   }

   function alertUpdated(){
      alert("Updated")
   }
   
   function setRandomColor() {
      var warna = "#"+((1<<24)*Math.random()|0).toString(16)
      document.body.style.backgroundColor = warna
   }
   
   function RequestValidation() {
    $(document).on("click", ".RequestTrigger", function () {
        var selectedButton = this,
            arr = [],
            value = null;

    if (this.getAttribute('data-multiple') == true) {

        $('input[type=checkbox]:checked.check-box').each(function () {
            value = this.getAttribute('data-entityid');
            // ...
        });
    } else {
        value = selectedButton.getAttribute("data-entityid");
        // ...
    }

    var data = {
        ids: arr
    };

    $.ajax({
        url: this.getAttribute('data-url'),

   </script>
</html>