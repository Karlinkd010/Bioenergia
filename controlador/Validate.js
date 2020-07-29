$(document).ready(function () {
   bootstrapValidate(
      '#d2',
      'email:Escriba un correo valido!'
      );
   bootstrapValidate(
      '#d1',
      'max:35:Caracteres superado!'
      );
   
   bootstrapValidate(
      '#d3',
      'max:10:Escribe un numero telefonico valido!'
      );
   bootstrapValidate(
      '#name',
      'max:30:Caracteres superado!'
   );
   bootstrapValidate(
      '#clave',
      'max:18:Caracteres superado!'
   );
   bootstrapValidate(
      '#correo',
      'email:18:Escribe un correo valido!'
   );
   bootstrapValidate(
      '#telefono',
      'max:10:Escribe un telefono valido!'
   );
   bootstrapValidate(
      '#rfc',
      'max:20:Caracteres superado!'
   );
   bootstrapValidate(
      '#area',
      'max:35:Caracteres superado!'
   );
   bootstrapValidate(
      '#area',
      'alpha:Se admite solo letras!'
   );
   bootstrapValidate(
      '#departamento',
      'max:35:Caracteres superado!'
   );
   bootstrapValidate(
      '#departamento',
      'alpha:Se admite solo letras!'
   );
   bootstrapValidate(
      '#id_area',
      'required:Selecciona una area!'
   );
   

});