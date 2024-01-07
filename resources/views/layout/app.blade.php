<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout.includes.head')
    <body>
        <div class="flex flex-col h-screen bg-gray-100">
            <!-- Barra de navegación superior -->
            <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex items-center"> <!-- Mostrado en todos los dispositivos -->
                        <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="Logo" class="w-28 h-18 mr-2">
                        <h2 class="font-bold text-xl">{{env('APP_NAME')}}</h2>
                    </div>
                    <div class="md:hidden flex items-center"> <!-- Se muestra solo en dispositivos pequeños -->
                        <button id="menuBtn">
                            <i class="fas fa-bars text-gray-500 text-lg"></i> <!-- Ícono de menú -->
                        </button>
                    </div>
                </div>

                <!-- Ícono de Notificación y Perfil -->
                <div class="space-x-5">
                    <button>
                        <i class="fas fa-bell text-gray-500 text-lg"></i>
                    </button>
                    <!-- Botón de Perfil -->
                    <button>
                        <i class="fas fa-user text-gray-500 text-lg"></i>
                    </button>
                </div>
            </div>

            <div class="flex-1 flex flex-wrap">
                <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
                <div class="p-2 bg-white w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
                    <nav>
                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                            <i class="fas fa-home mr-2"></i>Inicio
                        </a>
                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                            <i class="fas fa-file-alt mr-2"></i>Autorizaciones
                        </a>
                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                            <i class="fas fa-users mr-2"></i>Usuarios
                        </a>
                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                            <i class="fas fa-store mr-2"></i>Comercios
                        </a>
                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                            <i class="fas fa-exchange-alt mr-2"></i>Transacciones
                        </a>
                    </nav>

                    <!-- Ítem de Cerrar Sesión -->
                    <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white mt-auto" href="#">
                        <i class="fas fa-sign-out-alt mr-2"></i>Cerrar sesión
                    </a>

                    <!-- Señalador de ubicación -->
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>

                    <!-- Copyright al final de la navegación lateral -->
                    <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright WCSLAT@2023</p>

                </div>

                <!-- Área de contenido principal -->
                <div class="flex-1 p-4 w-full md:w-1/2">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
