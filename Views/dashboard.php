<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="Views/Assets/image/favion.png" type="image/x-icon">
  <link id="mainStyle" rel="stylesheet" href="Views/Assets/css/dashboard.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
  <title>Statistiques</title>
</head>


<body>
  <?php require_once "Includes/navbar.php"; ?>
  <?php require_once "Includes/sidebar.php"; ?>

  <div class="container col-10 d-flex">
    <div class="col">
      <div class="row">
        <div class=" col-12 col-sm-6 col-md-3 py-3">
          <div class="card card1 px-3 py-3">
            <span class="bubble"><i class="fa-solid fa-user-graduate fs-5 px-3 py-3 "></i></span>
            <span class="txt mt-3">Total Students</span>
            <div class="card-body">
              <p class="card-text text-end"></p>
            </div>
          </div>
        </div>
        <div class=" col-12 col-sm-6 col-md-3 py-3">
          <div class="card card2 px-3 py-3">
            <span class="bubble"><i class="fa-solid fa-user-group fs-5 ps-3 py-3"></i> </span>
            <span class="txt mt-3">Total parent</span>
            <div class="card-body">
              <p class="card-text text-end"></p>
            </div>
          </div>
        </div>
        <div class=" col-12 col-sm-6 col-md-3 py-3">
          <div class="card card3 px-3 py-3">
            <span class="bubble"><i class="fa-solid fa-user fs-5 px-3 py-3"></i></span>

            <span class="txt mt-3">Total profs</a></span>
            <div class="card-body">
              <p class="card-text text-end"></p>
            </div>
          </div>
        </div>
        <div class=" col-12 col-sm-6 col-md-3 py-3">
          <div class="card card4 px-3 py-3">
            <span class="bubble"> <i class="fa-solid fa-book-bookmark fs-5 px-3 py-3"></i></span>

            <span class="txt mt-3">Total classes</span>
            <div class="card-body">
              <p class="card-text text-end"></p>
            </div>
          </div>
        </div>
      </div>

      <div style="display:flex; justify-content: space-around;">
        <div style="height:250px; width: 250px">
          <h3 style="color:#158ee5;justify-content:center;margin-top:10px;margin-bottom:10px">Gender statistics</h3>
          <canvas id="mychart"></canvas>
        </div>


        <div style="display:flex; flex-direction: column; align-items: center; " style="height: 30%; width: 30%">
          <h3 style="color: #158ee5;margin-top:10px;margin-bottom:10px">classes statistics/Students</h3>
          <div class="spc">
            <div style="width:150px; margin-right: 10px;"><canvas id="myChart1"></canvas></div>
            <div style="width:150px; margin-left: 10px;"><canvas id="myChart2"></canvas></div>
          </div>
          <div style="width:150px;"><canvas id="myChart3"></canvas></div>
        </div>
      </div>
    </div>

    <script>
      const data = {
        labels: ["male", "female"],
        datasets: [{
          label: "mass",
          data: [89, 11],
          backgroundColor: ["#FFAA16", "#2480EA"],
          borderWidth: 1,
          borderColor: "#777",
          hoverBorderWidth: 1,
          hoverBorderColor: "#000",
          cutout: "82%",

        }, ],
      };
      const counter = {
        id: "counter",
        beforeDraw(chart, args, options) {
          const {
            ctx,
            chartArea: {
              top,
              right,
              bottom,
              left,
              width,
              height
            },
          } = chart;
          ctx.save();
          ctx.fillStyle = options.fontColor[0];
          //ctx.fillRect(width/2,(height/2)+top,10,10)
          ctx.font = options.fontSize + " " + options.fontFamily;
          ctx.textAlign = "center";
          ctx.fillText(
            data.datasets[0].data[0] + "%" + data.labels[0],
            width / 1.5,
            height / 1.5 + top
          );
          ctx.fillStyle = options.fontColor[1];
          ctx.fillText(
            data.datasets[0].data[1] + "%" + data.labels[1],
            width / 2.8,
            height / 2.8 + top
          );
        },
      };
      const config = {
        type: "pie",
        data,
        options: {
          plugins: {
            legend: {
              display: false,
            },
            title: {
              display: false,
              text: "statistics of gender",
              color: "#2480EA",
              fontSize: "10%"
            },
            tooltip: {
              enabled: true,
            },
            counter: {
              fontColor: ["#FFAA16", "#2480EA"],
              fontSize: "12px",
              fontFamily: "serif",
            },
          },

        },
        plugins: [counter],
      };
      const myChart = new Chart(document.getElementById('mychart'), config);
    </script>
    <script>
      const chart = new Chart(document.getElementById('myChart1'), config);
      const chart1 = new Chart(document.getElementById('myChart2'), config);
      const chart2 = new Chart(document.getElementById('myChart3'), config);
    </script>
</body>

</html>