$(document).ready(function() {
  $("#articulos_buscar").keyup(function() {
    var buscarArticulo = $(this).val();
    if(buscarArticulo != "") {
      $.ajax({
        url:'logic.php',
        method:'post',
        data:{query:buscarArticulo},
        success:function(response){
          $("#listaArticulos").html(response);
        }
      });
    }else {
      $("#listaArticulos").html("");
    }
  });
  $(document).on("click", "a", function() {
    $("#articulos_buscar").val($(this).text());
    $("#listaArticulos").html("");
  });
});
