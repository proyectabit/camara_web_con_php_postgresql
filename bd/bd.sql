--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2
-- Dumped by pg_dump version 12.2

-- Started on 2020-04-26 16:43:18

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE camaraweb;
--
-- TOC entry 2819 (class 1262 OID 16394)
-- Name: camaraweb; Type: DATABASE; Schema: -; Owner: -
--

CREATE DATABASE camaraweb WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Spain.1252' LC_CTYPE = 'Spanish_Spain.1252';


\connect camaraweb

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_table_access_method = heap;

--
-- TOC entry 202 (class 1259 OID 16421)
-- Name: original; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.original (
    dni character(8) NOT NULL,
    nombre text,
    apellido text,
    fnac date,
    email text,
    sexo character(1),
    facultad text,
    carrera text,
    detalle text,
    foto text,
    registro timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


--
-- TOC entry 2813 (class 0 OID 16421)
-- Dependencies: 202
-- Data for Name: original; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto, registro) VALUES ('99999999', 'Luis', 'Centeno', '2020-04-15', 'luis@gmail.com', '2', 'Ingenieria', 'Software', 'Observaciones', 'vincular_camara_web_php_javascript.jpg', '2020-04-15 12:24:04.698865');
INSERT INTO public.original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto, registro) VALUES ('99999999', 'Luis', 'Centeno', '2020-04-15', 'luis@gmail.com', '2', 'Ingenieria', 'Software', 'Observaciones', 'f_99999999.jpg', '2020-04-15 12:53:24.518293');
INSERT INTO public.original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto, registro) VALUES ('99999998', 'Luis', 'Centeno', '2020-04-15', 'luis@gmail.com', '2', 'Ingenieria', 'Software', 'Caja de observaciones', 'uno.jpg', '2020-04-15 12:54:38.171941');
INSERT INTO public.original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto, registro) VALUES ('22222223', 'Luis', 'Centeno', '2020-04-18', 'luis@gmail.com', '2', 'Ingenieria', 'Software', 'Informacion', 'cuatro.jpg', '2020-04-18 15:15:02.767279');
INSERT INTO public.original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto, registro) VALUES ('33333333', 'nombre', 'apellido', '2020-04-15', 'email@gmail.com', '2', 'Ingenieria', 'Software', 'Informacion', 'uno.jpg', '2020-04-18 16:53:47.616617');
INSERT INTO public.original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto, registro) VALUES ('34444444', 'nombres', 'apellidos', '2020-04-17', 'email@gmail.com', '2', 'facultad', 'carrera', 'detalle', 'cuatro.jpg', '2020-04-18 16:54:27.352124');
INSERT INTO public.original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto, registro) VALUES ('88888888', 'Luis', 'Centeno', '2020-03-28', 'luis@gmail.com', '2', 'Ingenieria', 'Software', 'Detalle e Informacion', 'vincular_camara_web_php_javascript.jpg', '2020-03-28 01:12:44.957836');
INSERT INTO public.original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto, registro) VALUES ('88887777', 'Luis', 'Centeno', '2020-03-21', 'luis@gmail.com', '2', 'Ingenieria', 'Software', 'Detalle e Informacion', 'f_76857525.jpg', '2020-03-28 01:13:44.169169');


-- Completed on 2020-04-26 16:43:20

--
-- PostgreSQL database dump complete
--

