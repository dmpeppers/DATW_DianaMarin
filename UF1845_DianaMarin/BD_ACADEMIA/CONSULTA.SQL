SELECT CONCAT(ALUMNO.nombre_alumno,' ',ALUMNO.apellido1_alumno) AS 'Nombre Alumno', ASIGNATURA.nombre_asignatura AS Asignatura, MATRICULA.cod_matricula AS 'Codigo de Matricula'
FROM ALUMNO, ASIGNATURA, MATRICULA
WHERE ASIGNATURA.pk_id_asignatura = MATRICULA.fk_id_asignatura;