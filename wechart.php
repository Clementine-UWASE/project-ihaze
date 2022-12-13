<html>
  <head>
    <title></title>
<style>
#chart{
  width:600px;
}
</style>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  </head>
  <body>
<h3>Weight data record in fish food</h3>
<div id="chart"></div>


<?php
$connect =new mysqli("localhost", "root", "", "ihaze");
$query = "SELECT * FROM weight order by id limit 5 ";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{

 $chart_data .= "{ Time:'".$row[3]."', kg:".$row[1]."}, ";
}
$chart_data = substr($chart_data, 0, -1);
?>
<script>
Morris.Line({
 element : 'chart',
 data:[<?php  echo $chart_data; ?>],
 xkey:'Time',
 ykeys:['kg'],
 labels:['kg'],
 hideHover:'auto',
 stacked:true
});
// Morris.Bar({
//   element: 'chart',
//   data: [
//     { y: '2006', a: 100 },
//     { y: '2007', a: 75 },
//     { y: '2008', a: 50 },
//     { y: '2009', a: 75 },
//     { y: '2010', a: 50 },
//     { y: '2011', a: 75 },
//     { y: '2012', a: 100 }
//   ],
//   xkey: 'y',
//   ykeys: ['a'],
//   labels: ['Series A']
// });

</script>
</body>
</html>
