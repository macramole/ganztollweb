<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 |--------------------------------------------------------------------------
| Admin Language
|--------------------------------------------------------------------------
|
| Language for admin pages.
|
*/
$config['admin_language'] = 'spanish';

/*
 |--------------------------------------------------------------------------
| Mâgico default image
|--------------------------------------------------------------------------
|
| Thumbnail function will return a thumbnail of this image if no image were uploaded
|
|
*/
$config['default_image'] = 'default_image.gif';

/*
 |--------------------------------------------------------------------------
| Mâgico auto clone i18n
|--------------------------------------------------------------------------
|
| If a content type is i18n, when new content is added it will automatically clone it so there will
| always be the same content across languages. User can translate the fields in a latter moment.
|
*/
$config['magico_auto_clone_i18n'] = true;

/*
 |--------------------------------------------------------------------------
| Mâgico enable facebook
|--------------------------------------------------------------------------
|
| Enable "Create and share with facebook" button
|
| magico_enable_facebook: false or appId
| magico_facebook_page: false or pageId
|
*/
$config['magico_enable_facebook'] = false;
$config['magico_facebook_page'] = false;

/*
 |--------------------------------------------------------------------------
| Mâgico site name
|--------------------------------------------------------------------------
|
| This is used by the mail function now, but can be used in other parts of the code in the future
|
|
*/
$config['magico_sitename'] = "Ganztoll";

/*
 |--------------------------------------------------------------------------
| Mâgico nav items
|--------------------------------------------------------------------------
|
| Array of items for Mâgico's nav. Each contentType is an array that may have properties:
|
| title: The content type title (if this property is not present the key will be used instead)
| noAdd: This content type doesn't appear in the add menu.
|
| (added by Pârleboo)
|
*/

$config['magico_nav'] = array(
		'Still' => array()
);

/*
 |--------------------------------------------------------------------------
| Mâgico has config
|--------------------------------------------------------------------------
|
| Set true if the site needs global configuration variables. This will add an item in Mâgico's nav. This table in the DB should be called "configuracion"
|
|
*/
$config['magico_has_config'] = false;

$config['magico_customList'] = array();
/*
 $config['magico_customList'][] = array(
 		'title' => 'Asistencia de alumnos',
 		'sqlList' => "
 		SELECT
 		dis.`title` AS Disciplina,
 		d.title AS Dia,
 		TIME_FORMAT(da.`horaDesde`,'%H:%i') AS De,
 		TIME_FORMAT(da.`horaHasta`,'%H:%i') AS A,
 		(
 				SELECT
 				GROUP_CONCAT(doc.title)
 				FROM
 				docentes doc
 				INNER JOIN
 				`disciplinas_actividades_docentes` dadoc ON
 				dadoc.`idDocente` = doc.`id`
 				WHERE
 				dadoc.idActividad = da.id
 		) AS Docentes,
 		(
 				SELECT
 				COUNT(*)
 				FROM
 				`alumnos_actividades_dias`
 				WHERE
 				`idDisciplinaActividadDia` = dad.id AND
 				activo = 1 AND
 				NOW() >= fechaDesde AND
 				NOW() <= fechaHasta
 		) AS Anotados,
 		dad.id AS idDisciplinaActividadDia
 		FROM
 		`disciplinas_actividades` da
 		INNER JOIN
 		`disciplinas_actividades_dias` dad ON
 		dad.`idActividad` = da.`id`
 		INNER JOIN
 		dias d ON
 		d.`id` = dad.`idDia`
 		INNER JOIN
 		`disciplinas` dis ON
 		dis.`id` = da.`idDisciplina`
 		ORDER BY
 		dis.title, dad.`idDia`, da.`horaDesde`
 		",
 		'sqlAction' => "
 		SELECT
 		Nombre,
 		Apellido,
 		Email,
 		(SELECT MP_status FROM alumnos_pagos WHERE MP_external_reference = aad.MP_external_reference LIMIT 1 ) AS Pago
 		FROM
 		`alumnos` a
 		INNER JOIN
 		`alumnos_actividades_dias` aad ON
 		aad.`idAlumno` = a.`id`
 		WHERE
 		aad.`idDisciplinaActividadDia` = {1} AND
 		aad.activo = 1 AND
 		NOW() >= aad.fechaDesde AND
 		NOW() <= aad.fechaHasta
 		",
 		'actionName' => 'Ver lista de alumnos',
 		'actionParamField' => 'idDisciplinaActividadDia',
 		'hiddenFields' => array('idDisciplinaActividadDia')
 );
*/