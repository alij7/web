<?php
include("incloude/header.php");
?></br></br>
			<script>
function changee() {
  var x = document.getElementById("test");
  if (x.style.display === 'none') {
    x.style.display = 'block';
  } else {
    x.style.display = 'none';
  }
  document.getElementById("test").style.fontSize='25px';
document.getElementById("test").style.color='blue';
document.getElementById("test").style.textAlign='center';
te

}
</script>
<div class="txt">نشانی مطب:تبریز-پاستور-تقاطع طالقانی به طرف شریعتی-ساختمان سپهر-طبقه چهارم</br></br>
<input style="background-color:white;font-size:25px;" type="button" id="mybtn" value="نمایش شماره مطب" onclick="changee()"></input>
</br>
<a href="#" id="test" style="display:none;text-decoration:none;">041-35536979</a></br>
<a href="https://goo.gl/maps/7HMLM9U9AHnty2Qi9">نمایش موقعیت مکانی مطب</a>
</div>
</div>
</body>
</html>