function revisar(elemento) {
    if (elemento.value == "") {
        elemento.className = 'error';
    } else {
        elemento.className = 'form-input';
    }
}


function revisaremail(elemento) {
    if (elemento.value != "") {
        var dato = elemento.value;
        var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
        if (!expresion.test(dato)) {
            elemento.className = 'error';
        } else {
            elemento.className = 'form-input';
        }
    }
}


function validar(form) {  
    
    if (form.txtNombre.value == "") { //Si este campo está vacío
        alert('No has escrito el Nombre '); // Mensaje a mostrar
        return false; //devolvemos un valor negativo
    }

    if (form.txtApellidoPaterno.value == "") { //Si este campo está vacío
        alert('No has escrito el Apellido Paterno'); // Mensaje a mostrar
        return false; //devolvemos un valor negativo
    }

    if (form.txtApellidoMaterno.value == "") { //Si este campo está vacío
        alert('No has escrito el Apellido Materno'); // Mensaje a mostrar
        return false; //devolvemos un valor negativo
    }
    if (form.txtRut.value == "") { //Si este campo está vacío
        alert('No has escrito el Rut'); // Mensaje a mostrar
        return false; //devolvemos un valor negativo
    }
    if (form.txtArea.value == "") { //Si este campo está vacío
        alert('Ingrese Area de personal ingresado'); // Mensaje a mostrar
        return false; //devolvemos un valor negativo
    }
    if (form.txtCargo.value == "") { //Si este campo está vacío
        alert('Ingrese Cargo de personal ingresado'); // Mensaje a mostrar
        return false; //devolvemos un valor negativo
    }
    if (form.txtUbicacionFisica.value == "") { //Si este campo está vacío
        alert('Ingrese ubicación fisica de usuario'); // Mensaje a mostrar
        return false; //devolvemos un valor negativo
    }
    if (form.txtFecha.value == "") { //Si este campo está vacío
        alert('Ingrese fecha de ingreso'); // Mensaje a mostrar
        return false; //devolvemos un valor negativo
    }
     if(form.ddlPcDisponible.value=="0"){
       alert('Seleccione estado de PC'); 
       return false; 
    }  
     if(form.ddlImpresora.value=="0"){
       alert('Seleccione estado de Impresora'); 
       return false; 
    } 
     if(form.ddlTelefono.value=="0"){
       alert('Seleccione estado de Telefono'); 
       return false; 
    } 
     if(form.ddlPlanDatos.value=="0"){
       alert('Seleccione plan de datos'); 
       return false; 
    } 
     if(form.ddlCorreo.value=="0"){
       alert('Seleccione si usuario necesita Correo'); 
       return false; 
    } 
    if(form.ddlEuroges.value=="0"){
       alert('Seleccione si usuario va a acceder a plataforma Euroges'); 
       return false; 
    }
    if(form.ddlsoftland.value=="0"){
       alert('Seleccione si usuario va a acceder a plataforma Softland'); 
       return false; 
    }
    if(form.ddlPayroll.value=="0"){
       alert('Seleccione si usuario va a acceder a plataforma Payroll'); 
       return false; 
    }
    if(form.ddlIntranet.value=="0"){
       alert('Seleccione si usuario va a acceder a intranet'); 
       return false; 
    }
    if(form.ddlCorreo.value=="0"){
       alert('Seleccione Correo'); 
       return false; 
    }
    if(form.ddlCorreo.value=="0"){
       alert('Seleccione Correo'); 
       return false; 
    }
    if(form.ddlCorreo.value=="0"){
       alert('Seleccione Correo'); 
       return false; 
    }
    if(form.ddlCorreo.value=="0"){
       alert('Seleccione Correo'); 
       return false; 
    }
    
    

    return true; // Si esta todo bien, devolvemos Ok, positivo
}