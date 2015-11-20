function agregar_carrito(id){
//  var identificador= id;
//  var nombreArreglo;

  localStorage.setItem("lastname", id +",");
  var a = localStorage.getItem("lastname");
  alert(' Agregaste al carrito el producto ' + a);
/*
  if (productos[0]==0) {
    productos[0] = id; alert(' Agregaste al carrito el producto ' + productos[0]);
  } else if (productos[1]==0) {
           productos[1] = id; alert(' Agregaste al carrito el producto ' + productos[1]);
  } else if (productos[2]==0) {
           productos[2] = id; alert(' Agregaste al carrito el producto ' + productos[2]);
  } else if (productos[3]==0) {
           productos[3] = id; alert(' Agregaste al carrito el producto ' + productos[3]);
  } else if (productos[4]==0) {
           productos[4] = id; alert(' Agregaste al carrito el producto ' + productos[4]);
  } else{                       alert(' Carrito lleno');                                 };
*/
    }
function mostrar_carrito(){

  document.write(+localStorage.getItem("lastname"));

}