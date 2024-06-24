SELECT a.nombre, a.apellidos, b.nombre_asignatura, c.cod_matricula, c.anio
FROM alumno a, asignatura b, matricula c
WHERE a.pk_id_alumno = c.fk_id_alumno
AND b.pk_id_asignatura = c.fk_id_asignatura
ORDER BY c.cod_matricula ASC;