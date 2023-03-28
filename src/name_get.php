<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bubble.css">
</head>
<body>
<div class="header"></div>
<div class="wrap">
<div class="box">
<main class="item">
<form action="../index.html">
 <div class ='bubble'>
 <?php 
        $name = $_GET["name"];
	if (strcmp($name, "พี่เป้")==0){ 
              $str = ["เป็นคนดีย์", "คนเก่ง", "คนซื่อสัตย์", "คนขี้เกรงใจ", "คนรู้ทัน"];
               foreach($str as $s){
		 echo "<label><div class ='bubble'><div class='bubble-content'> ".$s."</div> </div></label>";
		}
	}else if (strcmp($name, "น้องเจ")==0){ 
              $str = ["เป็นคนซุ่มซ่าม เอ่ย คนโก๊ะๆ","จี้เก่ง เซ็นท์ดีจริงๆ", "แม่สาวไอติม ดีนะ ไม่ใด้ให้ยาคูล", "เป็นเศรษฐีแน่ๆ เปย์ข้าวหนุ่มๆเก่ง","มีหนุ่มๆจะไปหา ก็ไม่ออกมาเจอ","หัวหัวหอมอยากได้น้องเพิ่มไหมจ๊ะ"];
               foreach($str as $s){
		 echo "<label><div class ='bubble'><div class='bubble-content'> ".$s."</div> </div></label>";
		}
	}else { 
		echo "<label><div class ='bubble'><div class='bubble-content'>Name isn't found</div> </div></label>";
	}
?>
 </div>
 <br>
 <input type="submit" value="กลับ" class="button">
</main>
</form>
</div>
</div>
<div class="footer"></div>
</body>
</html>