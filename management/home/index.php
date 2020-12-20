<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>管理者用 | project Little Lindo</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <script>
    (function(d) {
      var config = {
        kitId: 'slv4dzh',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
</head>

<body style="margin: 0px; padding: 0px;">
  <header>
    <h1>PLLM</h1>
  </header>
  <div id="sidebar">
    <ul id="mainTab">
      <h2>NAIN</h2>
      <li><a href=""><i class="fas fa-home" style="margin: 3px;"></i>Home</a></li>
      <li><a href=""><i class="fas fa-chart-pie" style="margin: 4px;"></i>Analytics</a></li>
      <li><a href=""><i class="fas fa-file-alt" style="margin: 0 4px 0 7px;"></i>Page</a></li>
    </ul>
    <ul id="pageTab">
      <h2>PAGE</h2>
      <li><a href=""><i class="fas fa-newspaper" style="margin-right: 4px;"></i>News</a></li>
      <li><a href=""><i class="fas fa-edit" style="margin-right: 3px;"></i>Edit</a></li>
    </ul>
  </div>
  <main>
    <h1>管理者画面</h1>
    <div id="analytics">
      <h2>アクセス解析</h2>
      <canvas id="myChart"></canvas>
    </div>
    <div id="draft">
      <h2>ニュース下書き一覧</h2>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var ChartDemo = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ["Item1", "Item2", "Item3", "Item4", "Item5", "Item6", "Item7"],
          datasets: [
          {
            label: "Chart-1",
            borderColor: 'rgb(255, 0, 0)',
            lineTension: 0, //<===追加
            fill: false,    //<===追加
            data: [20, 26, 12, 43, 33, 21, 29],
          },
          ]
      },
      options: {
          responsive: true,
      }
    });
  </script>
</body>

</html>