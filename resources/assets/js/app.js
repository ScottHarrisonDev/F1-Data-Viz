var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", '/api/circuits/mostPopular', false);
xmlHttp.send(null);
document.getElementById('most-popular').innerHTML = xmlHttp.responseText;