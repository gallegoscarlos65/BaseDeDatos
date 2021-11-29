INSERT INTO Catalogo(cantidad, nombre) VALUES (2, 'CUU_SPORTS_VERANO');

CREATE VIEW View_Catalogo as SELECT * FROM catalogo;
select * FROM View_Catalogo;
DROP TRIGGER TR_agregar_producto;
DROP TRIGGER TR_eliminar_producto;
DROP TRIGGER TR_actualizar_producto;
DROP TRIGGER TR_agregar_cliente;
DROP TRIGGER TR_eliminar_cliente;
DROP TRIGGER TR_actualizar_cliente;

CREATE TRIGGER TR_agregar_producto after insert on productos for each row 
insert into bitacora(nombre_tabla,accion, usuario, fecha)
values ('productos', concat('se crea un producto'), user(),date(now()));

CREATE TRIGGER TR_eliminar_producto after delete on productos for each row 
insert into bitacora(nombre_tabla,accion, usuario, fecha)
values ('productos', concat('se elimina un producto'), user(),date(now()));

CREATE TRIGGER TR_actualizar_producto after update on productos for each row 
insert into bitacora(nombre_tabla,accion, usuario, fecha)
values ('productos', concat('se edita un producto'), user(),date(now()));

CREATE TRIGGER TR_agregar_cliente after insert on clientes for each row 
insert into bitacora(nombre_tabla,accion, usuario, fecha)
values ('clientes', concat('se da de alta un cliente'), user(),date(now()));

CREATE TRIGGER TR_eliminar_cliente after delete on clientes for each row 
insert into bitacora(nombre_tabla,accion, usuario, fecha)
values ('clientes', concat('se elimina un cliente'), user(),date(now()));

CREATE TRIGGER TR_actualizar_cliente after update on clientes for each row 
insert into bitacora(nombre_tabla,accion, usuario, fecha)
values ('clientes', concat('se edita un cliente'), user(),date(now()));



INSERT INTO catalogo(nombre) VALUES("ROPA");
INSERT INTO catalogo(nombre) VALUES("CALZADO");

INSERT INTO productos(Talla, Diseño, Catalogo_idCatalogo, Tipo) VALUES ('Mediana', 'Cuadros', 1, 'juvenil');
INSERT INTO productos(Talla, Diseño, Catalogo_idCatalogo, Tipo) VALUES ('28', 'Cocodrilo', 2, 'juvenil');


ALTER TABLE productos AUTO_INCREMENT = 1;
ALTER TABLE bitacora AUTO_INCREMENT = 1;
DELETE FROM bitacora where idbitacora = 6;
DELETE FROM catalogo where idCatalogo = 4;
DELETE FROM productos where idProductos = 2;
SELECT * FROM bitacora;
SELECT * FROM productos;
SELECT * FROM catalogo;