var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", '/api/circuits/mostPopular', false);
xmlHttp.send(null);
const mostpopularcircuitsdata = JSON.parse(xmlHttp.responseText);
const mostpopularcircuitsdataTransformed = {
    circuits: [],
    data: []
};
for (let i = 0; i <= 10; i++) {
    mostpopularcircuitsdataTransformed.circuits.push(mostpopularcircuitsdata[i].name);
    mostpopularcircuitsdataTransformed.data.push(mostpopularcircuitsdata[i].races);
}
const ctx = document.getElementById('most-popular-display');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: mostpopularcircuitsdataTransformed.circuits,
        datasets: [{
            label: '# of Races',
            data: mostpopularcircuitsdataTransformed.data,
            backgroundColor: 'rgba(255,255,255,0.6)',
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