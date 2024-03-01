
window.addEventListener('DOMContentLoaded', function(){
    $("#tableUser").DataTable({
      processing: true,
      autoWidth: false,
      serverSide: false,
      ajax: { url: `user/getuser`, dataSrc: "" },
      columns: [
        { data: "name" },
        { data: "username" },
        { data: "id_rol" },
        { data: "box" },
        { data: "state" },
        {
          data: "id",
          render: function (data) {
            return `<div>
              <button id="${data}">editar</button>
              <button id="${data}">eliminar</button>
              <button id="${data}"></button>
            </div>`;
          },
        },
      ],
      language: {
        decimal: "",
        emptyTable: "No hay información",
        info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
        infoFiltered: "(Filtrado de _MAX_ total entradas)",
        infoPostFix: "",
        thousands: ",",
        lengthMenu: "Mostrar _MENU_ Entradas",
        loadingRecords: "Cargando...",
        processing: "Procesando...",
        search: "Buscar:",
        zeroRecords: "Sin resultados encontrados",
        paginate: {
          first: "Primero",
          last: "Ultimo",
          next: "Siguiente",
          previous: "Anterior",
        },
      },
    });
})


// $(document).ready(function () {
//     let table = new DataTable('#tableUser');
//     // $('#tableUser').DataTable({
//     //     processing: true,
//     //     autoWidth: false,
//     //     serverSide: true,
//     //     ajax: `${BASE_URL}user/getuser`,
//     //     columns: [
//     //         { data: "id" },
//     //         { data: "name" },
//     //         { data: "username" },
//     //         { data: "password" },
//     //         { data: "id_rol" },
//     //         { data: "box_rol" },
//     //         { data: "estate" },
//     //     ],
//     //     language: {
//     //         decimal: "",
//     //         emptyTable: "No hay información",
//     //         info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
//     //         infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
//     //         infoFiltered: "(Filtrado de _MAX_ total entradas)",
//     //         infoPostFix: "",
//     //         thousands: ",",
//     //         lengthMenu: "Mostrar _MENU_ Entradas",
//     //         loadingRecords: "Cargando...",
//     //         processing: "Procesando...",
//     //         search: "Buscar:",
//     //         zeroRecords: "Sin resultados encontrados",
//     //         paginate: {
//     //             first: "Primero",
//     //             last: "Ultimo",
//     //             next: "Siguiente",
//     //             previous: "Anterior",
//     //         },
//     //     },
//     // });

// });