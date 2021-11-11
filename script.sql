
-- Base de datos: 'roux_academy'
CREATE DATABASE IF NOT EXISTS roux_academy

CREATE TABLE IF NOT EXISTS artistas (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'nombre' varchar(50) DEFAULT NULL,
  'descripcion' varchar(200) DEFAULT NULL,
  'img' varchar(200) DEFAULT NULL,
  PRIMARY KEY ('id')
)
CREATE TABLE IF NOT EXISTS usuarios (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'usuario' varchar(50) DEFAULT NULL,
  'contrasena' varchar(50) DEFAULT NULL,
  PRIMARY KEY ('id')
)

INSERT INTO artistas VALUES
(5, 'Barot Bellingham', 'Barot has just finished his final year at The Royal Academy of Painting and Sculpture, where he excelled in glass etching paintings and portraiture.', 'images/artists/Barot_Bellingham_tn.jpg'),
(6, 'Jonathan G. Ferrar II', 'Labeled as “The Artist to Watch in 2016” by the London Review.', 'images/artists/Constance_Smith_tn.jpg'),
(7, 'Hillary Hewitt Goldwynn-Post', 'Hillary is a sophomore art sculpture student at New York University, and has already won all the major international prizes for new sculptors, including the Divinity Circle', 'images/artists/Hassum_Harrod_tn.jpg');

INSERT INTO artistas VALUES
(8, 'Eduardo Uriegas', 'Hillary is a sophomore art sculpture student at New York University, and has already won all the major international prizes for new sculptors, including the Divinity Circle', 'images/artists/Hassum_Harrod_tn.jpg');