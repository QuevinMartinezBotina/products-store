<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bronuts - Repostería Artesanal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
    <style>
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .font-roboto {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="font-roboto bg-pink-50">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <img src="https://i.ibb.co/87G0HMx/Imagen-de-Whats-App-2025-01-01-a-las-23-31-00-4e368824.jpg"
                alt="Bronuts Logo" class="h-16">
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="text-pink-600 hover:text-pink-800">Inicio</a>
                <a href="#" class="text-pink-600 hover:text-pink-800">Productos</a>
                <a href="#" class="text-pink-600 hover:text-pink-800">Acerca de</a>
                <a href="#" class="text-pink-600 hover:text-pink-800">Contacto</a>
            </nav>
            <div class="flex space-x-4">
                <button
                    class="bg-pink-500 text-white px-4 py-2 rounded-full hover:bg-pink-600 transition duration-300">Ordena
                    Ahora</button>

                <a href="{{ route('login') }}"
                    class="bg-pink-500 text-white px-4 py-2 rounded-full hover:bg-pink-600 transition duration-300">
                    login</a>
            </div>

            <button class="md:hidden text-pink-600" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
        <div class="md:hidden hidden" id="mobile-menu">
            <a href="#" class="block py-2 px-4 text-pink-600 hover:bg-pink-100">Inicio</a>
            <a href="#" class="block py-2 px-4 text-pink-600 hover:bg-pink-100">Productos</a>
            <a href="#" class="block py-2 px-4 text-pink-600 hover:bg-pink-100">Acerca de</a>
            <a href="#" class="block py-2 px-4 text-pink-600 hover:bg-pink-100">Contacto</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-pink-100 py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="font-playfair text-4xl md:text-6xl text-pink-800 mb-4">Endulzamos tus momentos especiales
                </h1>
                <p class="text-lg text-pink-600 mb-6">Repostería hecha con amor y los mejores ingredientes</p>
                <button
                    class="bg-pink-500 text-white px-6 py-3 rounded-full text-lg hover:bg-pink-600 transition duration-300">Ver
                    Productos</button>
            </div>
            <div class="md:w-1/2">
                <img src="https://bronuts.netlify.app/assets/img/fresas-png/fresas-portada.png" alt="Pastel decorado"
                    class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="font-playfair text-3xl text-center text-pink-800 mb-12">Nuestros Productos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product Card -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://bronuts.netlify.app/assets/img/fresas-png/fresas-portada.png" alt="Cupcakes"
                        class="w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-playfair text-xl text-pink-800 mb-2">Fresas con crema</h3>
                        <p class="text-pink-600 mb-4">$25.00 / 6 unidades</p>
                        <button
                            class="bg-pink-500 text-white px-4 py-2 rounded-full hover:bg-pink-600 transition duration-300">Añadir
                            al Carrito</button>
                    </div>
                </div>
                <!-- Repeat for other products -->
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="bg-gradient-to-r from-pink-300 to-pink-200 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-playfair text-3xl text-pink-800 mb-6">Ofertas Especiales</h2>
            <p class="text-xl text-pink-700 mb-8">Llévate 3 cupcakes y paga 2</p>
            <button
                class="bg-white text-pink-600 px-6 py-3 rounded-full text-lg hover:bg-pink-100 transition duration-300">Ver
                Promociones</button>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="font-playfair text-3xl text-center text-pink-800 mb-12">Lo que dicen nuestros clientes</h2>
            <div class="flex overflow-x-auto space-x-6" id="testimonials-carousel">
                <!-- Testimonial Card -->
                <div class="bg-white rounded-lg shadow-md p-6 flex-shrink-0 w-full md:w-1/3">
                    <p class="italic text-pink-600 mb-4">"Los mejores pasteles que he probado. Siempre sorprenden con
                        sus sabores."</p>
                    <div class="flex items-center">
                        <img src="https://www.dzoom.org.es/wp-content/uploads/2020/02/portada-foto-perfil-redes-sociales-consejos.jpg" alt="Cliente" class="w-12 h-12 rounded-full mr-4">
                        <span class="font-semibold text-pink-800">María García</span>
                    </div>
                </div>
                <!-- Repeat for other testimonials -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-pink-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h3 class="font-playfair text-2xl mb-4">Bronuts</h3>
                    <p>Gracias por visitarnos, esperamos endulzar tu día.</p>
                </div>
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="font-semibold mb-4">Contacto</h4>
                    <p>Dirección: Calle Dulce 123, Ciudad</p>
                    <p>Email: info@dulceencanto.com</p>
                    <p>Teléfono: (123) 456-7890</p>
                </div>
                <div class="w-full md:w-1/3">
                    <h4 class="font-semibold mb-4">Síguenos</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-pink-300">Facebook</a>
                        <a href="#" class="hover:text-pink-300">Instagram</a>
                        <a href="#" class="hover:text-pink-300">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Simple carousel for testimonials
        const testimonials = document.getElementById('testimonials-carousel');
        let scrollAmount = 0;
        setInterval(() => {
            if (scrollAmount >= testimonials.scrollWidth - testimonials.clientWidth) {
                scrollAmount = 0;
            } else {
                scrollAmount += testimonials.clientWidth;
            }
            testimonials.scrollTo({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }, 5000);
    </script>
</body>

</html>
