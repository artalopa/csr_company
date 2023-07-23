document.addEventListener("DOMContentLoaded", function () {
    var options = {
    series: [{
      name: 'Terlaksana',
      data: [44, 55, 41, 37, 22, 43, 21]
    }, {
      name: 'Belum Terlaksana',
      data: [53, 32, 33, 52, 13, 43, 32]
    }, {
      name: 'Melebihi Jadwal',
      data: [12, 17, 11, 9, 15, 11, 20]
    }, {
      name: 'Tidak Terlaksana',
      data: [9, 7, 5, 8, 6, 9, 4]
    },],
      chart: {
      type: 'bar',
      height: 363,
      stacked: true,
    },
    plotOptions: {
      bar: {
        horizontal: true,
        dataLabels: {
          total: {
            enabled: true,
            offsetX: 0,
            style: {
              fontSize: '12px',
              fontWeight: 900
            }
          }
        }
      },
    },
    stroke: {
      width: 1,
      colors: ['#fff']
    },
    title: {
      text: 'SEKTOR & BIDANG CSR'
    },
    xaxis: {
      categories: ['Pendidikan', 'Kesehatan', 'Lingkungan', 'Ekonomi', 'Infrastruktur'],
      labels: {
        formatter: function (val) {

        }
      }
    },
    yaxis: {
      title: {
        text: undefined
      },
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val + "K"
        }
      }
    },
    fill: {
      opacity: 1
    },
    colors: ['#b2d037', '#00adad', '#4e4c8c', '#f2591f'],
    legend: {
      position: 'top',
      horizontalAlign: 'center',
      offsetX: 40
    }
    };

    var chart = new ApexCharts(document.querySelector("#sector"), options);
    chart.render();
});
