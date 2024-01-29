$(document).ready(function () {
  // Muestra la página inicial por defecto
  $("#index").show();

  // Maneja los clics en los enlaces de navegación
  $("nav .misma").click(function (e) {
    e.preventDefault();
    var targetPageID = $(this).attr("href");

    // Oculta todas las páginas excepto la seleccionada
    $(".pagina").not(targetPageID).hide();

    // Muestra el div de la página correspondiente
    $(targetPageID).show();
  });


  // Ocultar todas las secciones de vehículos al cargar la página
  $('.vehiculos-section').hide();

  // Manejar el clic en el enlace "Ver coches"
  $('#verCoches').click(function () {
    $('.vehiculos-section').hide(); // Ocultar todas las secciones de vehículos
    $('#coches-section').show(); // Mostrar la sección de coches
  });

  // Manejar el clic en el enlace "Ver motos"
  $('#verMotos').click(function () {
    $('.vehiculos-section').hide(); // Ocultar todas las secciones de vehículos
    $('#motos-section').show(); // Mostrar la sección de motos
  });

  // Manejar el clic en el enlace "Ver vehículos de movilidad personal"
  $('#verPersonal').click(function () {
    $('.vehiculos-section').hide(); // Ocultar todas las secciones de vehículos
    $('#personal-section').show(); // Mostrar la sección de vehículos de movilidad personal
  });


  $('#registro').hide();
  $('#registroBtn').click(function (event) {
    event.preventDefault();
    // Ocultar la sección de inicio
    $('#inicio').hide();
    // Mostrar la sección de registro
    $('#registro').show();
  });
  $('#registro2Btn').click(function (event) {
    event.preventDefault();
    // Ocultar la sección de registro
    $('#registro').hide();
    // Mostrar la sección de inicio
    $('#inicio').show();
  });

});