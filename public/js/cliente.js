// selectorTipos();

// function selectorTipos() {
//     var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//     fetch('/cliente', {
//             method: 'GET',
//             headers: {
//                 'X-CSRF-TOKEN': csrfToken
//             }
//         })
//         .then(response => {
//             return response.json();
//         })
//         .then(data => {
//             // Verifica si data.tipoincidencia es un array
//             if (Array.isArray(data.tipoincidencia)) {
//                 // Recorre los elementos del array
//                 data.tipoincidencia.forEach(nombre_tipo_tipoinci => {
//                     // Aquí puedes hacer lo que necesites con cada tipo de incidencia
//                     console.log(nombre_tipo_tipoinci);
//                 });
//             } else {
//                 console.error('Los datos de tipo de incidencia no son un array.');
//             }
//         })
//         .catch(error => {
//             console.error('Error datos:', error);
//         });
// }