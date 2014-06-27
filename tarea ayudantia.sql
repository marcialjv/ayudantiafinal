--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: ayudantia; Type: COMMENT; Schema: -; Owner: admin
--

COMMENT ON DATABASE ayudantia IS 'base de datos para tarea 4 de ayudantia ISW';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: Bodega; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE "Bodega" (
    "Id" integer NOT NULL,
    "Nombre_Bodega" character varying(255) NOT NULL,
    "Codigo_Bodega" character varying(255) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public."Bodega" OWNER TO admin;

--
-- Name: Bodega_Id_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE "Bodega_Id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Bodega_Id_seq" OWNER TO admin;

--
-- Name: Bodega_Id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE "Bodega_Id_seq" OWNED BY "Bodega"."Id";


--
-- Name: Producto; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE "Producto" (
    "Id" integer NOT NULL,
    "Nombre_Producto" character varying(255) NOT NULL,
    "Codigo_Producto" character varying(255) NOT NULL,
    "Precio_Neto" character varying(255) NOT NULL,
    "FK_Bodega_Id" integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public."Producto" OWNER TO admin;

--
-- Name: Producto_Id_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE "Producto_Id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Producto_Id_seq" OWNER TO admin;

--
-- Name: Producto_Id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE "Producto_Id_seq" OWNED BY "Producto"."Id";


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE migrations (
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO admin;

--
-- Name: Id; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY "Bodega" ALTER COLUMN "Id" SET DEFAULT nextval('"Bodega_Id_seq"'::regclass);


--
-- Name: Id; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY "Producto" ALTER COLUMN "Id" SET DEFAULT nextval('"Producto_Id_seq"'::regclass);


--
-- Data for Name: Bodega; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO "Bodega" VALUES (1, 'puente asalto', '25193', '2014-06-27 07:37:22', '2014-06-27 07:37:22');
INSERT INTO "Bodega" VALUES (2, 'renca la lleva', '23884', '2014-06-27 07:37:56', '2014-06-27 07:37:56');
INSERT INTO "Bodega" VALUES (4, 'legua york', '2331', '2014-06-27 20:04:02', '2014-06-27 20:04:02');
INSERT INTO "Bodega" VALUES (5, 'la piojera', '2773', '2014-06-27 21:22:29', '2014-06-27 21:22:29');


--
-- Name: Bodega_Id_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('"Bodega_Id_seq"', 5, true);


--
-- Data for Name: Producto; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO "Producto" VALUES (1, 'pañal bebes', '38923', '2300', 1, '2014-06-27 07:40:04', '2014-06-27 07:40:04');
INSERT INTO "Producto" VALUES (2, 'comida de ratones', '138831-A', '$5000', 1, '2014-06-27 07:41:20', '2014-06-27 07:41:46');
INSERT INTO "Producto" VALUES (3, 'báltica', '3884', '$50', 1, '2014-06-27 07:42:17', '2014-06-27 07:42:17');
INSERT INTO "Producto" VALUES (4, 'salsa de camion', '1231', '$4500', 2, '2014-06-27 09:55:14', '2014-06-27 09:55:14');
INSERT INTO "Producto" VALUES (5, 'cereal de tornillos', '32242', '$1000', 2, '2014-06-27 09:56:10', '2014-06-27 09:56:10');
INSERT INTO "Producto" VALUES (8, 'polvo de guarén', '12331', '$500', 1, '2014-06-27 16:29:18', '2014-06-27 16:29:18');
INSERT INTO "Producto" VALUES (11, 'mani salado', '32442', '$200', 2, '2014-06-27 19:51:58', '2014-06-27 19:51:58');
INSERT INTO "Producto" VALUES (12, 'bebe dragón', '12131', '$25000', 2, '2014-06-27 19:52:55', '2014-06-27 19:52:55');
INSERT INTO "Producto" VALUES (13, 'cocina americana', '23131', '$600000', 2, '2014-06-27 19:56:05', '2014-06-27 19:56:05');
INSERT INTO "Producto" VALUES (14, 'bigtime sabor piedra', '21333', '$250', 4, '2014-06-27 20:08:12', '2014-06-27 20:08:12');
INSERT INTO "Producto" VALUES (15, 'bigtime sabor ventana', '21332', '$250', 4, '2014-06-27 20:21:13', '2014-06-27 21:19:11');


--
-- Name: Producto_Id_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('"Producto_Id_seq"', 15, true);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO migrations VALUES ('2014_06_27_033734_create_bodega_table', 1);
INSERT INTO migrations VALUES ('2014_06_27_033800_create_producto_table', 1);


--
-- Name: Bodega_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY "Bodega"
    ADD CONSTRAINT "Bodega_pkey" PRIMARY KEY ("Id");


--
-- Name: Producto_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY "Producto"
    ADD CONSTRAINT "Producto_pkey" PRIMARY KEY ("Id");


--
-- Name: producto_fk_bodega_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY "Producto"
    ADD CONSTRAINT producto_fk_bodega_id_foreign FOREIGN KEY ("FK_Bodega_Id") REFERENCES "Bodega"("Id");


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

