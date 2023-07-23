// Prioritas
var prioritas = echarts.init(document.getElementById('prioritas'));
var optionPrioritas = {
        tooltip : {
            formatter: "{b} : {c}%"
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: false},
                restore : {show: false},
                saveAsImage : {show: true}
            }
        },
        series : [
            {
                name:'Status',
                type:'gauge',
                center: ['50%', '50%'],
                radius: ['0%', '100%'],
                axisLine: {
                    show: true,
                    lineStyle: {
                        color: [
                            [0.25, '#f2591f'],
                            [0.5, '#4e4c8c'],
                            [0.75, '#00adad' ],
                            [1, '#b2d037'],
                        ],
                        width: 25
                    }
                },
                axisLabel: {
                    show: false,
                },
                title: {
                    show : false,
                    offsetCenter: [0, '10%'],
                    textStyle: {
                        color: '#93BE52',
                        fontSize : 15
                    }
                }  ,
                detail: {
                    show : true,
                    backgroundColor: 'rgba(0,0,0,0)',
                    borderWidth: 0,
                    borderColor: '#ccc',
                    width: 200,
                    height: 40,
                    offsetCenter: [0, '50%'],
                    formatter:'EXCELLENT',
                    textStyle: {
                        color: 'auto',
                        fontSize : 15,
                        fontWeight: 'bolder',
                    }
                },
                data:[{value: 90, name: 'Status'}]
            }
    ]
};

load_chart(optionPrioritas);
var timeTicket = setInterval(function (){
    load_chart(optionPrioritas);
},1000);

function load_chart(optionPrioritas){
    prioritas.setOption(optionPrioritas,true);
}
