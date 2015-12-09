/*
created: 12/09/2014
modified: 03/11/2015
model: postgresql 8.3
database: postgresql 8.3
*/

-- create tables section -------------------------------------------------

-- table comunidades

create table "comunidades"(
 "id_comunidad" serial not null,
 "comunidad" character varying(20) not null,
 "direccion" character varying(40),
 "telefono" character varying(20)
)
with (oids=false)
;

-- add keys for table comunidades

alter table "comunidades" add constraint "key1" primary key ("id_comunidad")
;

-- table personas

create table "personas"(
 "id_persona" serial not null,
 "id_comunidad" integer not null,
 "nombres" character varying(40) not null,
 "apellido" character varying(40) not null,
 "nrodocumento" character varying(20),
 "fechanacimiento" date,
 "direccion" character varying(60),
 "id_barrio" integer,
 "id_tipodocumento" integer,
 "nrotelcelular" character varying(20),
 "nrotelfijo" character varying(20),
 "estado" character varying(5),
 "fechaingreso" date,
 "email" character varying(80),
 "grupo_sanguineo" character varying(20),
 "factor_rh" character(20),
 "vacuna_antitetanica" date
)
with (oids=false)
;

-- add keys for table personas

alter table "personas" add constraint "key2" primary key ("id_persona")
;

-- table tiposdocumento

create table "tiposdocumento"(
 "id_tipodocumento" serial not null,
 "id_comunidad" integer not null,
 "tipodocumento" character varying(20)
)
with (oids=false)
;

-- add keys for table tiposdocumento

alter table "tiposdocumento" add constraint "key3" primary key ("id_tipodocumento")
;

-- table barrios

create table "barrios"(
 "id_barrio" serial not null,
 "id_comunidad" integer not null,
 "barrio" character varying(20) not null
)
with (oids=false)
;

-- add keys for table barrios

alter table "barrios" add constraint "key4" primary key ("id_barrio")
;

-- table sacramentos

create table "sacramentos"(
 "id_sacramento" serial not null,
 "sacramento" character varying(20) not null,
 "id_comunidad" integer not null
)
with (oids=false)
;

-- add keys for table sacramentos

alter table "sacramentos" add constraint "key5" primary key ("id_sacramento")
;

-- table templos

create table "templos"(
 "id_templo" serial not null,
 "id_comunidad" integer not null,
 "templo" character varying(20) not null,
 "direccion" character varying(60)
)
with (oids=false)
;

-- add keys for table templos

alter table "templos" add constraint "key6" primary key ("id_templo")
;

-- table sacramentospersona

create table "sacramentospersona"(
 "id_sacramentopersona" serial not null,
 "id_persona" integer not null,
 "id_sacramento" integer not null,
 "id_comunidad" integer not null,
 "id_templo" integer,
 "fechasacramento" date not null
)
with (oids=false)
;

-- add keys for table sacramentospersona

alter table "sacramentospersona" add constraint "key7" primary key ("id_sacramentopersona")
;

-- table provincias

create table "provincias"(
 "id_provincia" serial not null,
 "provincia" character varying(20) not null,
 "id_comunidad" integer
)
with (oids=false)
;

-- add keys for table provincias

alter table "provincias" add constraint "key8" primary key ("id_provincia")
;

-- table localidades

create table "localidades"(
 "id_localidad" serial not null,
 "localidad" character varying(20) not null,
 "id_comunidad" integer not null,
 "id_provincia" integer not null
)
with (oids=false)
;

-- add keys for table localidades

alter table "localidades" add constraint "key9" primary key ("id_localidad")
;

-- table grupos

create table "grupos"(
 "id_grupo" serial not null,
 "grupo" character varying(20) not null,
 "id_comunidad" integer not null,
 "id_tipogrupo" integer not null,
 "anio" integer not null
)
with (oids=false)
;

-- add keys for table grupos

alter table "grupos" add constraint "key10" primary key ("id_grupo")
;

-- table tiposgrupo

create table "tiposgrupo"(
 "id_tipogrupo" serial not null,
 "tipogrupo" character varying(20) not null,
 "id_comunidad" integer not null
)
with (oids=false)
;

-- add keys for table tiposgrupo

alter table "tiposgrupo" add constraint "key11" primary key ("id_tipogrupo")
;

-- table personagrupo

create table "personagrupo"(
 "id_persona" integer not null,
 "id_grupo" integer not null,
 "id_comunidad" integer,
 "id_responsabilidad" integer
)
with (oids=false)
;

-- add keys for table personagrupo

alter table "personagrupo" add constraint "key12" primary key ("id_persona","id_grupo")
;

-- table familiares

create table "familiares"(
 "id_persona" integer not null,
 "id_parentesco" integer not null,
 "id_comunidad" integer not null,
 "id_familiar" integer not null
)
with (oids=false)
;

-- add keys for table familiares

alter table "familiares" add constraint "key14" primary key ("id_persona","id_parentesco","id_familiar")
;

-- table tiposparentesco

create table "tiposparentesco"(
 "id_parentesco" serial not null,
 "id_comunidad" integer not null,
 "parentesco" character varying(20) not null
)
with (oids=false)
;

-- add keys for table tiposparentesco

alter table "tiposparentesco" add constraint "key15" primary key ("id_parentesco")
;

-- table responsabilidades

create table "responsabilidades"(
 "id_comunidad" integer not null,
 "id_responsabilidad" serial not null,
 "responsabilidad" character varying(20) not null
)
with (oids=false)
;

-- add keys for table responsabilidades

alter table "responsabilidades" add constraint "key16" primary key ("id_responsabilidad")
;

-- create relationships section ------------------------------------------------- 

alter table "personas" add constraint "relationship6" foreign key ("id_barrio") references "barrios" ("id_barrio") on delete no action on update no action
;

alter table "tiposdocumento" add constraint "relationship7" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "personas" add constraint "relationship8" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "barrios" add constraint "relationship9" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "personas" add constraint "relationship10" foreign key ("id_tipodocumento") references "tiposdocumento" ("id_tipodocumento") on delete no action on update no action
;

alter table "sacramentos" add constraint "relationship11" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "templos" add constraint "relationship12" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "sacramentospersona" add constraint "relationship13" foreign key ("id_persona") references "personas" ("id_persona") on delete no action on update no action
;

alter table "sacramentospersona" add constraint "relationship14" foreign key ("id_sacramento") references "sacramentos" ("id_sacramento") on delete no action on update no action
;

alter table "sacramentospersona" add constraint "relationship15" foreign key ("id_templo") references "templos" ("id_templo") on delete no action on update no action
;

alter table "sacramentospersona" add constraint "relationship16" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "provincias" add constraint "relationship17" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "localidades" add constraint "relationship18" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "localidades" add constraint "relationship19" foreign key ("id_provincia") references "provincias" ("id_provincia") on delete no action on update no action
;

alter table "tiposgrupo" add constraint "relationship20" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "grupos" add constraint "relationship21" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "grupos" add constraint "relationship22" foreign key ("id_tipogrupo") references "tiposgrupo" ("id_tipogrupo") on delete no action on update no action
;

alter table "personagrupo" add constraint "relationship23" foreign key ("id_persona") references "personas" ("id_persona") on delete no action on update no action
;

alter table "personagrupo" add constraint "relationship24" foreign key ("id_grupo") references "grupos" ("id_grupo") on delete no action on update no action
;

alter table "personagrupo" add constraint "relationship25" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "familiares" add constraint "relationship26" foreign key ("id_persona") references "personas" ("id_persona") on delete no action on update no action
;

alter table "tiposparentesco" add constraint "relationship29" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "familiares" add constraint "relationship30" foreign key ("id_parentesco") references "tiposparentesco" ("id_parentesco") on delete no action on update no action
;

alter table "familiares" add constraint "relationship31" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "familiares" add constraint "relationship32" foreign key ("id_familiar") references "personas" ("id_persona") on delete no action on update no action
;

alter table "responsabilidades" add constraint "relationship33" foreign key ("id_comunidad") references "comunidades" ("id_comunidad") on delete no action on update no action
;

alter table "personagrupo" add constraint "relationship35" foreign key ("id_responsabilidad") references "responsabilidades" ("id_responsabilidad") on delete no action on update no action
;





