<?php
$kintamasis =date('s')%2;

print $kintamasis;
print date('s');

?>

<html>
<head>
    <style>
      .kvadratas {
          background-color: yellow;
          height: 50px;
          width: 50px;
          border:3px solid black;
      }
      .apskritimas {
          background-color: yellow;
          height: 50px;
          width: 50px;
          border:3px solid black;
          border-radius:50px;
      }
    </style>

</head>
<body>
<?php if ($kintamasis==0):?>

<div class="kvadratas"> </div>

<?php else: ?>

    <div class="apskritimas"> </div>



<?php endif?>



</body>

</html>


<?php

$sauleta= rand(0,1);
$lyja= rand(0,1);



if (){
    if (){
    } else {
    }
}else


