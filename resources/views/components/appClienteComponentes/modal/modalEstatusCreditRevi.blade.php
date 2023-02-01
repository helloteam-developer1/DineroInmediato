<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Modal Adelante pago</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
    <style>
      @font-face {
        font-family: "Carot Sans";
        src: url("../../fonts/CarotSans-Regular.otf") format("truetype");
        font-style: normal;
        font-weight: normal;
      }
    </style>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              tpres: "#4A9D22",
              datgencred: "#F5A733",
              ptextos: "#000000",
            },
          },
        },
      };
    </script>
  </head>
  <body>
   <!-- Modal toggle -->
<button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
    Abrir modal Estatuc de crédito
  </button>
  <!-- Main modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex justify-between items-start p-4 rounded-t">
                  <h1 class="text-xl font-semibold text-gray-900 dark:text-white text-tpres"  style="font-size: 35px; padding-top: 10px;">
                    Estatus de crédito
                  </h1>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">cerrar modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-datgencred">
                    Crédito en revisión
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 m-5">
                    Mantente al pendiente de la aplicación, te notificaremos por correo electrónico
                    si tu crédito fue aprobado y qué línea de crédito te hemos otorgado.
                </p>
              </div>
              <!-- Modal footer -->
              <center>
                <div class="flexitems-center p-6 space-x-2 rounded-b">
                    <button data-modal-toggle="defaultModal" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Aceptar</button>
                </div>
              </center>
          </div>
      </div>
  </div>
  </body>
  <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
</html>
