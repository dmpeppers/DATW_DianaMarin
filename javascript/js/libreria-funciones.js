//************FUNCIONES FECHA***************//

// funcion tradicional
function insertarFecha1(){
    let fecha = new Date();
// numero del dia
let diaNum = fecha.getDate();
// para tener el nombre del dia
let dia = fecha.getDay();
let nombDia = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
// para obtener el mes
let mes = fecha.getMonth();
let nombreMes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
// para obtener año
let anyo = fecha.getFullYear();
// salida
return document.write(`Fecha del ${diaNum} ${nombDia[dia]} de ${nombreMes[mes]} del ${anyo}`);
}
// funcion ripo anonima
const insertarFecha2 = function(){
    let fecha = new Date();
// numero del dia
let diaNum = fecha.getDate();
// para tener el nombre del dia
let dia = fecha.getDay();
let nombDia = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
// para obtener el mes
let mes = fecha.getMonth();
let nombreMes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
// para obtener año
let anyo = fecha.getFullYear();
// salida
return document.write(`Fecha del ${diaNum} ${nombDia[dia]} de ${nombreMes[mes]} del ${anyo}`);
}
// tipo fecha
const insertarFecha3 = () =>{
    let fecha = new Date();
// numero del dia
let diaNum = fecha.getDate();
// para tener el nombre del dia
let dia = fecha.getDay();
let nombDia = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
// para obtener el mes
let mes = fecha.getMonth();
let nombreMes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
// para obtener año
let anyo = fecha.getFullYear();
// salida
return document.write(`Fecha del ${diaNum} ${nombDia[dia]} de ${nombreMes[mes]} del ${anyo}`);   
}

// ********FIN FUNCIONES FECHA****************//