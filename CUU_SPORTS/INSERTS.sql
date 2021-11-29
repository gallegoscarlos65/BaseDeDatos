SELECT * FROM productos;
SELECT * FROM catalogo;

INSERT INTO catalogo(nombre) VALUES("OTOÑO'INVIERNO");
INSERT INTO catalogo(nombre) VALUES("PRIMAVERA'VERANO");
DELETE FROM catalogo WHERE idCatalogo = 2;
ALTER TABLE catalogo AUTO_INCREMENT = 1;

INSERT INTO catalogo(nombre) VALUES("ROPA");
INSERT INTO catalogo(nombre) VALUES("CALZADO");

INSERT INTO productos(Talla, Diseño, Catalogo_idCatalogo, Tipo) VALUES ('Mediana', 'Cuadros', 1, 'juvenil');
INSERT INTO productos(Talla, Diseño, Catalogo_idCatalogo, Tipo) VALUES ('28', 'Cocodrilo', 2, 'juvenil');