@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h3 class="text-center mb-4">Dashboard</h3>
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Statistik Pendonor Data</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area d-flex justify-content-center">
                            <canvas id="myChart" style="height: 300px; width:80%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let monthData = [];
        let countData = [];

        function updateChart(){
          $.ajax({
            type: "GET",
            url: "{{ route('admin.chartData') }}",
            success:function(data){
              const chartData = JSON.parse(data);
              chartData.map((value) => {
                let monthName = '';
                switch (value.bulan) {
                  case 1: monthName = 'Januari'; break;
                  case 2: monthName = 'Februari'; break;
                  case 3: monthName = 'Maret'; break;
                  case 4: monthName = 'April'; break;
                  case 5: monthName = 'Mei'; break;
                  case 6: monthName = 'Juni'; break;
                  case 7: monthName = 'Juli'; break;
                  case 8: monthName = 'Agustus'; break;
                  case 9: monthName = 'September'; break;
                  case 10: monthName = 'Oktober'; break;
                  case 11: monthName = 'November'; break;
                  case 12: monthName = 'Desember'; break;
                  default:
                    '';
                }
                monthData.push(monthName);
                countData.push(value.total);
              });
              myChart.update();
            }
          });
        }

        const data = {
            labels: monthData,
            datasets: [
                {
                    label: 'Pendonor Data',
                    data: countData,
                    backgroundColor: "lightblue",
                    borderColor: "#8b9863",
                    color: "white",
                }
            ]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
              responsive: false,
              plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                }
              },
              scales: {
                y: {
                  min: 0,
                  max: 10,
                  ticks: {
                    stepSize: 2
                  }
                }
              }
            },
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

        updateChart();
    </script>
@endsection