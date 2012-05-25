CREATE TABLE areas_formacion (id BIGSERIAL, nombre_area VARCHAR(50) NOT NULL, PRIMARY KEY(id));
CREATE TABLE areas_formacion_facilitador (id BIGSERIAL, id_identificacion INT NOT NULL, id_area_formacion INT NOT NULL, estatus VARCHAR(20) NOT NULL, PRIMARY KEY(id));
CREATE TABLE bitacora_formacion_facilitador (id BIGSERIAL, id_area_formacion_facilitador INT NOT NULL, fecha DATE NOT NULL, PRIMARY KEY(id));
CREATE TABLE bitacora_secciones (id BIGSERIAL, id_secciones INT NOT NULL, fecha DATE NOT NULL, PRIMARY KEY(id));
CREATE TABLE correos (id BIGSERIAL, id_identificacion INT NOT NULL, correo VARCHAR(50) NOT NULL, PRIMARY KEY(id));
CREATE TABLE disponibilidad_dias (id BIGSERIAL, id_identificacion INT NOT NULL, dia VARCHAR(20) NOT NULL, PRIMARY KEY(id));
CREATE TABLE disponibilidad_traslado_estado (id BIGSERIAL, id_identificacion INT NOT NULL, id_estado INT NOT NULL, id_municipio INT NOT NULL, requiere_traslado BOOLEAN NOT NULL, PRIMARY KEY(id));
CREATE TABLE disponibilidad_turnos (id BIGSERIAL, id_disponibilidad_dia INT NOT NULL, turno VARCHAR(20) NOT NULL, PRIMARY KEY(id));
CREATE TABLE ente (id BIGSERIAL, nombre_ente VARCHAR(50) NOT NULL, id_estado INT NOT NULL, id_municipio INT NOT NULL, id_parroquia INT NOT NULL, PRIMARY KEY(id));
CREATE TABLE estado (id BIGSERIAL, nombre_estado VARCHAR(20) NOT NULL, PRIMARY KEY(id));
CREATE TABLE estudios (id BIGSERIAL, nombre_estudio VARCHAR(50) NOT NULL, PRIMARY KEY(id));
CREATE TABLE identificacion (id BIGSERIAL, nombre VARCHAR(50) NOT NULL, apellido VARCHAR(50) NOT NULL, cedula_pasaporte VARCHAR(8) NOT NULL UNIQUE, nacionalidad VARCHAR(20) NOT NULL, direccion VARCHAR(100) NOT NULL, sector VARCHAR(100), situacion_laboral VARCHAR(50) NOT NULL, formacion_politica BOOLEAN NOT NULL, id_estado INT NOT NULL, id_municipio INT NOT NULL, id_parroquia INT NOT NULL, PRIMARY KEY(id));
CREATE TABLE municipio (id BIGSERIAL, nombre_municipio VARCHAR(50) NOT NULL, id_estado INT NOT NULL, PRIMARY KEY(id));
CREATE TABLE nivel_formacion (id BIGSERIAL, id_identificacion INT NOT NULL, id_estudios INT NOT NULL, PRIMARY KEY(id));
CREATE TABLE ocupacion (id BIGSERIAL, id_identificacion INT NOT NULL, nombre_ocupacion VARCHAR(50) NOT NULL, PRIMARY KEY(id));
CREATE TABLE parroquia (id BIGSERIAL, nombre_parroquia VARCHAR(50) NOT NULL, id_municipio INT NOT NULL, PRIMARY KEY(id));
CREATE TABLE profesion (id BIGSERIAL, id_identificacion INT NOT NULL, nombre_profesion VARCHAR(50) NOT NULL, PRIMARY KEY(id));
CREATE TABLE secciones (id BIGSERIAL, id_identificacion INT NOT NULL, id_area_formacion_facilitador INT NOT NULL, nombre_seccion VARCHAR(50) NOT NULL, id_ente INT NOT NULL, PRIMARY KEY(id));
CREATE TABLE telefonos (id BIGSERIAL, id_identificacion INT NOT NULL, numero BIGINT NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_forgot_password (id BIGSERIAL, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at TIMESTAMP NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_group (id BIGSERIAL, name VARCHAR(255) UNIQUE, description VARCHAR(1000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(group_id, permission_id));
CREATE TABLE sf_guard_permission (id BIGSERIAL, name VARCHAR(255) UNIQUE, description VARCHAR(1000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_remember_key (id BIGSERIAL, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_user (id BIGSERIAL, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active BOOLEAN DEFAULT 'true', is_super_admin BOOLEAN DEFAULT 'false', last_login TIMESTAMP, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(user_id, group_id));
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(user_id, permission_id));
CREATE INDEX is_active_idx ON sf_guard_user (is_active);
ALTER TABLE areas_formacion_facilitador ADD CONSTRAINT areas_formacion_facilitador_id_identificacion_identificacion_id FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE areas_formacion_facilitador ADD CONSTRAINT areas_formacion_facilitador_id_area_formacion_areas_formacion_id FOREIGN KEY (id_area_formacion) REFERENCES areas_formacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE bitacora_formacion_facilitador ADD CONSTRAINT biai FOREIGN KEY (id_area_formacion_facilitador) REFERENCES areas_formacion_facilitador(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE bitacora_secciones ADD CONSTRAINT bitacora_secciones_id_secciones_secciones_id FOREIGN KEY (id_secciones) REFERENCES secciones(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE correos ADD CONSTRAINT correos_id_identificacion_identificacion_id FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE disponibilidad_dias ADD CONSTRAINT disponibilidad_dias_id_identificacion_identificacion_id FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE disponibilidad_traslado_estado ADD CONSTRAINT disponibilidad_traslado_estado_id_municipio_municipio_id FOREIGN KEY (id_municipio) REFERENCES municipio(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE disponibilidad_traslado_estado ADD CONSTRAINT disponibilidad_traslado_estado_id_estado_estado_id FOREIGN KEY (id_estado) REFERENCES estado(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE disponibilidad_traslado_estado ADD CONSTRAINT diii FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE disponibilidad_turnos ADD CONSTRAINT didi_1 FOREIGN KEY (id_disponibilidad_dia) REFERENCES disponibilidad_dias(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE ente ADD CONSTRAINT ente_id_parroquia_parroquia_id FOREIGN KEY (id_parroquia) REFERENCES parroquia(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE ente ADD CONSTRAINT ente_id_municipio_municipio_id FOREIGN KEY (id_municipio) REFERENCES municipio(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE ente ADD CONSTRAINT ente_id_estado_estado_id FOREIGN KEY (id_estado) REFERENCES estado(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE identificacion ADD CONSTRAINT identificacion_id_parroquia_parroquia_id FOREIGN KEY (id_parroquia) REFERENCES parroquia(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE identificacion ADD CONSTRAINT identificacion_id_municipio_municipio_id FOREIGN KEY (id_municipio) REFERENCES municipio(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE identificacion ADD CONSTRAINT identificacion_id_estado_estado_id FOREIGN KEY (id_estado) REFERENCES estado(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE municipio ADD CONSTRAINT municipio_id_estado_estado_id FOREIGN KEY (id_estado) REFERENCES estado(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE nivel_formacion ADD CONSTRAINT nivel_formacion_id_identificacion_identificacion_id FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE nivel_formacion ADD CONSTRAINT nivel_formacion_id_estudios_estudios_id FOREIGN KEY (id_estudios) REFERENCES estudios(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE ocupacion ADD CONSTRAINT ocupacion_id_identificacion_identificacion_id FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE parroquia ADD CONSTRAINT parroquia_id_municipio_municipio_id FOREIGN KEY (id_municipio) REFERENCES municipio(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE profesion ADD CONSTRAINT profesion_id_identificacion_identificacion_id FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE secciones ADD CONSTRAINT siai FOREIGN KEY (id_area_formacion_facilitador) REFERENCES areas_formacion_facilitador(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE secciones ADD CONSTRAINT secciones_id_identificacion_identificacion_id FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE secciones ADD CONSTRAINT secciones_id_ente_ente_id FOREIGN KEY (id_ente) REFERENCES ente(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE telefonos ADD CONSTRAINT telefonos_id_identificacion_identificacion_id FOREIGN KEY (id_identificacion) REFERENCES identificacion(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
