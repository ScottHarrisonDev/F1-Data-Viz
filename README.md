# Formula One Data Visualization Project
A data visualization web project built on Laravel and [insert front end] using data from [Kaggle](https://www.kaggle.com/cjgdev/formula-1-race-data-19502017). I decided to build this application as I wanted to learn ES6 Javascript and thought the dataset would suit a visual application pretty nicely as well as giving me a chance to stretch my design legs.

## Stack
- MySQL Database
- Laravel Backend
- [insert front end] Frontend
    - With D3.js

## Tools
- Docker
- VS Code

## To Do
- Decide on metrics to display and how
    1. Most popular circuits displayed on a map
    2. Nations that have most succesful drivers
    3. Nations that have most drivers
    4. Drivers with most race wins across the decades
- Decide on frontend (React?)
- Setup build tool (webpack potentially?)

### Notes
SQL script to get most popular circuits:
```SQL
SELECT
	C.name,
	COUNT(R.circuit_id) AS "races"
FROM
	circuits C
JOIN
	races R
	ON
		R.circuit_id = C.id
GROUP BY
	R.circuit_id
ORDER BY
	COUNT(R.circuit_id) DESC;```