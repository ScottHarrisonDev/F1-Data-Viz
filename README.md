# Formula One Data Visualization Project
A data visualization web project built on Laravel and React using data from [Kaggle](https://www.kaggle.com/cjgdev/formula-1-race-data-19502017). I decided to build this application as I wanted to learn ES6 Javascript and thought the dataset would suit a visual application pretty nicely as well as giving me a chance to stretch my design legs.

## Stack
- MySQL Database
- Laravel Backend
- React Frontend
    - With D3.js

## Tools
- Docker
- VS Code

## Install
1. Clone this repo
2. Create DB
3. Run `dataset/DB_INSTALL.sql` in database client
4. Run `npm install`
5. Run `composer install`
6. Build Docker `docker-compose build`
7. Run Docker `docker-compose up -d`

## Done
- Decide on metrics to display
    1. Most popular circuits displayed on a map?
    2. Nations that have most succesful drivers
    3. Nations that have most drivers
    4. Drivers with most race wins across the decades
	5. Fastest lap per decade per track
	6. Top speed from each decade and who

- Setup build tool (webpack with Laravel Mix)

## To Do
- Get all API calls finished

- Get all data displayed in page as basic chart just to help visualise the data

- Use basic charts to help figure out how to best display the data visually

### Notes
SQL script to get most popular circuits:
```SQL
SELECT
	C.name,
	COUNT(R.circuit_id) AS races
FROM
	circuits C
JOIN
	races R
	ON
		R.circuit_id = C.id
GROUP BY
	R.circuit_id
ORDER BY
	COUNT(R.circuit_id) DESC;
```

SQL script to get most succesful nations (based on amount of podium finishes):
```SQL
SELECT
	D.nationality,
	COUNT(RE.id)
FROM
	results RE
JOIN
	drivers D
	ON
		D.id = RE.driver_id
WHERE
	position <= 3
GROUP BY
	D.nationality
ORDER BY
	COUNT(RE.id) DESC
```

SQL script to get nations by driver count:
```SQL
SELECT
	nationality,
	COUNT(id) AS count
FROM
	drivers
GROUP BY
	nationality
ORDER BY
	COUNT(id) DESC;
```

SQL script to get driver with highest amount of podiums, grouped by decade
```SQL
SELECT z.podiums, 
       z.decade, 
       z.first_name 
FROM   (SELECT Concat(10 * Floor(Year(date) / 10), 's') AS decade, 
               Count(RE.driver_id)                      AS podiums, 
               d.first_name                             AS first_name 
        FROM   results RE 
               JOIN races R 
                 ON R.id = RE.race_id 
               JOIN drivers D 
                 ON D.id = RE.driver_id 
        WHERE  RE.position <= 3 
        GROUP  BY decade, 
                  D.first_name) z, 
       (SELECT y.decade       AS decade, 
               Max(y.podiums) AS podiums 
        FROM   (SELECT Concat(10 * Floor(Year(date) / 10), 's') AS decade, 
                       Count(RE.driver_id)                      AS podiums 
                FROM   results RE, 
                       races R, 
                       drivers D 
                WHERE  R.id = RE.race_id 
                       AND D.id = RE.driver_id 
                       AND RE.position <= 3 
                GROUP  BY decade, 
                          D.first_name) y 
        GROUP  BY y.decade) a 
WHERE  a.decade = z.decade 
       AND a.podiums = z.podiums 
```