// DOM Animation
function mOver(obj) {
    obj.innerHTML = "BIENVENIDO"
  }
  
  function mOut(obj) {
    obj.innerHTML = "Ingresa tu usuario y clave"
  }
// Alert confirmation
function myFunction() {
    if(confirm("Desea guardar los datos?")){
      alert("Datos guardados exitosamente");
    }else{
      alert("Usted cancelo la acción para guardar");
    }
  }