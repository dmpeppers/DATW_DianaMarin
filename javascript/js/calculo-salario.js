let nombre = prompt("Escribe su nombre");
let apellido = prompt("Escribir su apellido");
let salario = parseFloat(prompt("Escribe Salario"));
let edad = parseFloat(prompt("Escribe edad"));
let total;
if(salario > 2000){
    document.getElementById("salar").innerHTML = salario;
}
else if(salario <= 2000 && salario>=1000){
    if(edad > 45){
        total = (salario * 0.03) + salario;
        document.getElementById("salar").innerHTML = total;
    }
    else if(edad<=45 && edad>=18){
        total = (salario * 0.10) + salario;
        document.getElementById("salar").innerHTML = total;
    }
    else{
        document.write("no valido");
    }
}
else if(salario <1000){
    if(edad <30){
        total = 1100;
        document.getElementById("salar").innerHTML =total ;
    }
    else if(edad <= 45 && edad>=30){
        total = (salario * 0.03) + salario;
        document.getElementById("salar").innerHTML = total; 
    }
    else if(edad > 45 && edad<=110){
        total = (salario * 0.15) + salario;
        document.getElementById("salar").innerHTML = total;
    }
    else{
        document.write("no valido");
    }
}
else{
    document.write("no valido");
}
document.getElementById("nombres").innerHTML = nombre + " " + apellido;
document.getElementById("edad").innerHTML = edad;