var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        
        labels: ['2015', '2016', '2017', '2018', '2019', '2020'],
        datasets: [{
            
            label: ' Notre Chiffre d affaires dans les derniers années ( * 1 000 DH)  ',
            data: [120, 190, 133, 150, 200, 130],
            backgroundColor: [
                'cadetblue',
                'cadetblue',
                'cadetblue',
                'cadetblue',
                'cadetblue',
                'cadetblue'
            ],
            borderColor: [
                '#243738',
                '#243738',
                '#243738',
                '#243738',
                '#243738',
                '#243738'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});