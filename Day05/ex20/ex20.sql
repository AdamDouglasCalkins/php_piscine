SELECT
  genre.id_genre AS 'id_genre',
  genre.name AS 'genre name',
  distrib.id_distrib AS 'id_distrib',
  distrib.name AS 'distributor’s name',
  film.title AS 'film title'
FROM
  film
  LEFT JOIN genre ON genre.id_genre = film.id_genre
  LEFT JOIN distrib ON distrib.id_distrib = film.id_distrib
WHERE
  film.id_genre BETWEEN 4
  AND 8;
