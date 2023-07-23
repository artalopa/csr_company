document.addEventListener("DOMContentLoaded", function () {
    var options = {
      series: [44, 55, 13, 43],
      chart: {
      width: 350,
      type: 'pie',
    },
    title: {
      text: 'PROGRAM UNGGULAN'
    },
    plotOptions: {
      pie: {
        dataLabels: {
            offset: -20
        }
      }
    },
    legend: {
        show: true,
        position: 'bottom'
    },
    colors: ['#b2d037', '#00adad', '#4e4c8c', '#f2591f'],
    labels: ['Terlaksana', 'Belum Terlaksana', 'Melebihi Jadwal', 'Tidak Terlaksana'],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
    };

    var chart = new ApexCharts(document.querySelector("#program_unggulan"), options);
    chart.render();

});
