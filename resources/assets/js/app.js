var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", '/api/circuits/mostPopular', false);
xmlHttp.send(null);
const mostpopularcircuitsdata = JSON.parse(xmlHttp.responseText);
const mostpopularcircuitsdataTransformed = {
    x: [],
    y: []
};
for (let i = 0; i < mostpopularcircuitsdata.length; i++) {
    mostpopularcircuitsdataTransformed.x.push(mostpopularcircuitsdata[i].name);
    mostpopularcircuitsdataTransformed.y.push(mostpopularcircuitsdata[i].races);
}
console.log(mostpopularcircuitsdataTransformed);
Plotly.plot('most-popular-display', [mostpopularcircuitsdataTransformed], {
    margin: { t: 0 }
});