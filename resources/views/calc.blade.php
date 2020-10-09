@extends('welcome')





@section('judul', 'KALKULATOR')


@section('konten')


<div class="row" style='margin-btm:20px'>
<div class="col-sm-6">
   <div class='col-sm-8'>
      <form>
         Nomor 1 : <input type="text" id="num1" /><br><br>
         Nomor 2 : <input type="text" id="num2" /><br><br><br>
         <div class='btn-group' style='margin-top:20px'>
            <input type="button" onClick="plus()" Value="Plus" />
            <input type="button" onClick="minus()" Value="Minus" />
            <input type="button" onClick="multiply()" Value="Kali" />
            <input type="button" onClick="divide()" Value="Bagi" />
         </div>
      </form>
   </div>
</div>

<div class="col-sm-6">
   Hasil : <br>
   <h1 id = "result"></h1>

</div>
</div>


<script>

function plus(){
   num1 = document.getElementById("num1").value;
   num2 = document.getElementById("num2").value;
   document.getElementById("result").innerHTML = parseFloat(num1) + parseFloat(num2);
}
function minus(){
   num1 = document.getElementById("num1").value;
   num2 = document.getElementById("num2").value;
   document.getElementById("result").innerHTML = parseFloat(num1) - parseFloat(num2);
}
function multiply(){
   num1 = document.getElementById("num1").value;
   num2 = document.getElementById("num2").value;
   document.getElementById("result").innerHTML = parseFloat(num1) * parseFloat(num2);
}
function divide(){
   num1 = document.getElementById("num1").value;
   num2 = document.getElementById("num2").value;
   document.getElementById("result").innerHTML = parseFloat(num1) / parseFloat(num2);
}

</script>
@endsection