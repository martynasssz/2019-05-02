<?php
$kintamasis =rand(0,1);
//
//if($kintamasis <1 ){
//    print 'sauleta';
//}  else
//{ print 'debesuota';
//
//}
?>

<html>
<head>
    <style>
      .sauleta {
          background-color: yellow;
          height: 100px;
          width: 100px;
      }
      .debesuota {
          background-color: blue;
          height: 100px;
          width: 100px;
      }
    </style>

</head>
<body>
<?php if ($kintamasis<1):?>

<div class="sauleta"> </div>

<?php else: ?>
<div class="debesuota"> </div>


<?php endif?>



</body>

</html>

