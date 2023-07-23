document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('program_trafic'), {
        chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 246,
            parentHeightOffset: 0,
            toolbar: {
                show: false,
            },
            animations: {
                enabled: false
            },
        },
        fill: {
            opacity: 1,
        },
        stroke: {
            width: 2,
            lineCap: "round",
            curve: "smooth",
        },
        series: [{
            name: "Terlaksana",
            data: [80, 76, 50]
        },
        {
            name: "Belum Terlaksana",
            data: [40, 60, 65]
        },
        {
            name: "Melebihi Jabwal",
            data: [50, 60, 64]
        },{
            name: "Tidak Terlaksana",
            data: [30, 20, 10]
        }],
        tooltip: {
            theme: 'dark'
        },
        grid: {
            padding: {
                top: -20,
                right: 0,
                left: -4,
                bottom: -4
            },
            strokeDashArray: 4,
        },
        xaxis: {
            labels: {
                padding: 0,
            },
            tooltip: {
                enabled: false
            },
        },
        yaxis: {
            labels: {
                padding: 4
            },
        },
        labels: [
            '2020', '2021', '2022'
        ],
        colors: ['#b2d037', '#00adad', '#4e4c8c', '#f2591f'],
        legend: {
            show: false,
        },
    })).render();
});
