<div class="list-admin">
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Danh Mục', 'Số Lượng Sản Phẩm'],
  <?php
    $tongdm=count($listthongke);
    $i=1;
    foreach ($listthongke as $thongke) {
        extract($thongke);
        if($i==$tongdm) $dauphay=""; else $dauphay=",";
        echo "['".$tendm."',".$countsp."]".$dauphay;
        $i+=1;
    }
  ?>
]);

var options = {
  title:'Thống Kê Sản Phẩm Theo Danh Mục', 'width':1100, 'height':800
};
    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
</div>
