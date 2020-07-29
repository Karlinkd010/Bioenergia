
function validar(){
    v1=$('#d1').val();
    v2=$('#d2').val();
    v3=$('#d3').val();

    expresion = /\w+@\w+\.[a-z]/;

  if(v1===""  || v2==="" || v3===""){
    swal('Campos vacios', "Por favor ingrese datos!" , 'warning');
    return false;
  }else if(v1.length>35 || v2.length>35 || v3.length>10){
    swal('Verifique', "El campo es muy largo!" , 'warning');
    return false;
  }else if(v1.length<5 || v2.length<5  ||v3.length<5  ){
    swal('Verifique', "El campo es muy corto!" , 'warning');
    return false;
  }else if(!expresion.test(v2)){
    swal('Verifique', "El Correo no es valido!" , 'warning');
    return false;
  }
  return true;

}
function validar_p(){
    v1=$('#_name').val();
    v2=$('#_clave').val();
    v3=$('#_correo').val();
    v4=$('#_telefono').val();
    v5=$('#_rfc').val();
    v6=$('#_id').val();

    expresion = /\w+@\w+\.[a-z]/;

  if(v1===""  || v2==="" || v3===""|| v4===""  || v5==="" || v6===""){
    swal('Campos vacios', "Por favor ingrese datos!" , 'warning');
    return false;
  }else if(v1.length>35 || v2.length>18 || v3.length>35 || v4.length>10 || v5.length>20){
    swal('Verifique', "El campo es muy largo!" , 'warning');
    return false;
  }else if(v1.length<5 || v2.length<5  ||v3.length<5 || v4.length<5 || v5.length<5  ){
    swal('Verifique', "El campo es muy corto!" , 'warning');
    return false;
  }else if(!expresion.test(v3)){
    swal('Verifique', "El Correo no es valido!" , 'warning');
    return false;
  }
  return true;

}
function validar_p2(){
  v1=$('#name').val();
  v2=$('#clave').val();
  v3=$('#correo').val();
  v4=$('#telefono').val();
  v5=$('#rfc').val();
  v6=$('#id').val();

  expresion = /\w+@\w+\.[a-z]/;

if(v1===""  || v2==="" || v3===""|| v4===""  || v5==="" || v6===""){
  swal('Campos vacios', "Por favor ingrese datos!" , 'warning');
  return false;
}else if(v1.length>35 || v2.length>18 || v3.length>35 || v4.length>10 || v5.length>20){
  swal('Verifique', "El campo es muy largo!" , 'warning');
  return false;
}else if(v1.length<5 || v2.length<5  ||v3.length<5 || v4.length<5 || v5.length<5  ){
  swal('Verifique', "El campo es muy corto!" , 'warning');
  return false;
}else if(!expresion.test(v3)){
  swal('Verifique', "El Correo no es valido!" , 'warning');
  return false;
}
return true;

}


function validar_area(){
  
  area=$('#area').val();
  
  

if(area===""  ){
  swal('Campos vacios', "Por favor ingrese datos!" , 'warning');
  return false;
}
return true;

}

function validar_depa(){
  
  d=$('#departamento').val();
  
  

if(d===""  ){
  swal('Campos vacios', "Por favor ingrese datos!" , 'warning');
  return false;
}
return true;

}