@php
  $isIndex = Route::currentRouteName() == 'index';
@endphp

<style>
  nav a .underline-this {
    position: relative;
    overflow: hidden;
    display: inline-block;
    text-decoration: none;
    /* padding-bottom: 4px; */
  }

  nav a .underline-this::before,
  nav a .underline-this::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #FF5E14;
    transform: scaleX(0);
    transition: transform 0.3s ease;
  }

  nav a .underline-this::after {
    transform-origin: right;
  }

  nav a:hover .underline-this::before,
  nav a:hover .underline-this::after {
    transform: scaleX(1);
  }

  nav a:hover .underline-this::before {
    transform-origin: left;
  }

  nav li {
    padding: 0 !important;
    margin: 0 !important;
  }

  .jquery-modal.blocker.current {
    z-index: 30;
  }
</style>

<div class="navigation shadow-xl" style="z-index: 9999; background-color: #fff !important">
  <button aria-label="hamburguer" type="button" class="hamburger" id="position" onclick="show()">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M18 2L2 18M18 18L2 2" stroke="#272727" stroke-width="2.66667" stroke-linecap="round" />
    </svg>
  </button>
  <nav class="w-full h-full overflow-y-auto p-8" x-data="{ openCatalogo: true, openSubMenu: null }">
    <ul class="space-y-1">
      <li>
        <a href="/"
          class="text-[#272727] font-medium font-poppins text-sm py-2 px-3 block hover:opacity-75 transition-opacity duration-300 {{ $pagina == 'index' ? 'text-[#FF5E14]' : '' }}">
          <span class="underline-this">
            <svg
              class="inline-block w-3 h-3 mb-0.5 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            INICIO
          </span>
        </a>
      </li>
      <li>
        <a @click="openCatalogo = !openCatalogo" href="javascript:void(0)"
          class="text-[#272727] flex justify-between items-center font-medium font-poppins text-sm py-2 px-3 hover:opacity-75 transition-opacity duration-300 {{ $pagina == 'catalogo' ? 'text-[#FF5E14]' : '' }}">
          <span class="underline-this">
            <svg
              class="inline-block w-3 h-3 mb-0.5 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
              <path
                d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
              <path
                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
            </svg>
            PRODUCTOS
          </span>
          <span :class="{ 'rotate-180': openCatalogo }"
            class="ms-1 inline-block transform transition-transform duration-300">↓</span>
        </a>
        <ul x-show="openCatalogo" x-transition class="ml-3 mt-1 space-y-1 border-l border-gray-300">
          <li>
            <a href="#"
              class="text-[#272727] flex items-center py-2 px-3 hover:opacity-75 transition-opacity duration-300">
              <span class="underline-this">
                Todas las categorías
              </span>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <a href="#"
          class="text-[#272727] font-medium font-poppins text-sm py-2 px-3 block hover:opacity-75 transition-opacity duration-300 {{ $pagina == 'contacto' ? 'text-[#FF5E14]' : '' }}">
          <span class="underline-this">
            <svg
              class="inline-block w-3 h-3 mb-0.5 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
              <path
                d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z" />
            </svg>
            BLOG
          </span>
        </a>
      </li>
      <li>
        <a href="#"
          class="text-[#272727] font-medium font-poppins text-sm py-2 px-3 block hover:opacity-75 transition-opacity duration-300 {{ $pagina == 'comentario' ? 'text-[#FF5E14]' : '' }}">
          <span class="underline-this">
            <svg
              class="inline-block w-3 h-3 mb-0.5 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
              <path d="M6 5H5v1h1V5Z" />
            </svg>
            CONTACTO
          </span></a>
      </li>
    </ul>
  </nav>

</div>


<header>
  @foreach ($datosgenerales as $item)
    <div class="bg-[#006BF6] p-[1px] ">
      <div class="flex justify-center md:justify-end gap-5 w-11/12 mx-auto py-5  text-[17px]  ">
        <div class="text-white font-normal font-poppins text-[17px] text-start w-1/3">
          (51)
          987 456 243 | <a href="#">Direccion</a>
        </div>
        <div class="text-white font-normal font-poppins  text-center w-2/3">
          Cuéntale a un amigo sobre Boost y consigue un 20% de descuento *
        </div>
        <div class="text-white font-normal font-poppins  text-end w-1/3">
          Log In / Sign Up
        </div>
      </div>
    </div>
  @endforeach

  <div class="">
    <div id="header-menu " class="flex justify-center md:justify-end gap-5 w-11/12 mx-auto py-2  text-[17px]">
      <div id="menu-burguer" class="md:hidden z-10 w-max">
        <img class="h-10 w-10 cursor-pointer" src="{{ asset('images/img/menu_hamburguer.png') }}" alt="menu hamburguesa"
          onclick="show()" />
      </div>
      <div class="w-1/3">
        <a href="#">
          <img id="logo-decotab" class="py-2"
            src="{{ asset($isIndex ? 'images\img\LogoBoost.png' : 'images\img\LogoBoost.png') }}" alt="decotab" />
        </a>
      </div>

      <div class="hidden md:flex items-center w-2/3">
        <div>
          <nav id="menu-items" class=" text-[#272727]  flex gap-5 items-center justify-center" x-data="{ openCatalogo: false, openSubMenu: null }">
            <a href="/" class="py-5  font-medium font-poppins text-[17px] px-3 hover:opacity-75 ">
              <span class="underline-this">INICIO</span>
            </a>
            <div @mouseenter="openCatalogo = true" @mouseleave="openCatalogo = false" class="px-3 py-5">
              <a href="/catalogo/0" class="font-medium font-poppins  hover:opacity-75 " aria-haspopup="true">
                <span class="underline-this">PRODUCTOS</span>
              </a>

            </div>

            <a href="#" class="py-5  font-medium font-poppins px-3  hover:opacity-75 ">
              <span class="underline-this">BLOG</span>
            </a>
            <a href="#" class="py-5  font-medium font-poppins px-3 hover:opacity-75 ">
              <span class="underline-this">CONTACTO</span>
            </a>
          </nav>
        </div>
      </div>
      <div class="flex justify-end md:w-auto md:justify-center items-center  w-1/3">
        @if (Auth::user() == null)
          <a href="{{ route('login') }}"><img class="bg-white rounded-lg p-1"
              src="{{ asset('images/svg/header_user.svg') }}" alt="user" /></a>
        @else
          <div class="relative inline-flex" x-data="{ open: false }">
            <button class="px-3 py-5 inline-flex justify-center items-center group" aria-haspopup="true"
              @click.prevent="open = !open" :aria-expanded="open">
              <div class="flex items-center truncate">
                <span id="username"
                  class="truncate ml-2 text-sm font-medium dark:text-slate-300 group-hover:opacity-75 dark:group-hover:text-slate-200 {{ $isIndex ? 'text-white' : 'text-[#272727]' }}">{{ Auth::user()->name }}</span>
                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                  <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                </svg>
              </div>
            </button>
            <div
              class="origin-top-right z-10 absolute top-full min-w-44 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1"
              @click.outside="open = false" @keydown.escape.window="open = false" x-show="open">
              <ul>
                <li class="hover:bg-gray-100">
                  <a class="font-medium text-sm text-black flex items-center py-1 px-3" href="{{ route('pedidos') }}"
                    @click="open = false" @focus="open = true" @focusout="open = false">Mis pedidos</a>
                </li>
                <li class="hover:bg-gray-100">
                  <a class="font-medium text-sm text-black flex items-center py-1 px-3"
                    href="{{ route('direccion') }}" @click="open = false" @focus="open = true"
                    @focusout="open = false">Dirección</a>
                </li>
                <li class="hover:bg-gray-100">
                  <a class="font-medium text-sm text-black flex items-center py-1 px-3"
                    href="{{ route('micuenta') }}" @click="open = false" @focus="open = true"
                    @focusout="open = false">Ajustes</a>
                </li>
                <li class="hover:bg-gray-100">
                  <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="font-medium text-sm text-black flex items-center py-1 px-3"
                      @click.prevent="$root.submit(); open = false">
                      {{ __('Cerrar sesión') }}
                    </button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        @endif
        {{-- <div class="bg-[#EB5D2C] flex justify-center items-center rounded-full w-7 h-7">
            <span id="itemsCount" class="text-white"></span>
          </div> --}}
        <div class="flex justify-center items-center pl-1">
          <div id="open-cart" class="relative inline-block cursor-pointer">
            <span id="itemsCount"
              class="bg-[#EB5D2C] text-xs font-medium text-white text-center p-1 leading-none rounded-full px-2 absolute -translate-y-1/2 translate-x-1/2 left-auto top-0 right-0">0</span>
            <img src="{{ asset('images/svg/header_bag.svg') }}"
              class="bg-white rounded-lg p-1 max-w-full h-auto cursor-pointer" />
          </div>
          {{-- <input type="checkbox" class="bag__modal" id="check" /> --}}
          <div id="cart-modal"
            class="bag !fixed top-0 right-0 md:w-[450px] cartContainer border shadow-2xl !rounded-l-2xl !rounded-r-none !p-0 !z-30"
            style="display: none">
            <div class="p-4 flex flex-col h-screen justify-between gap-2">
              <div class="flex flex-col">
                <div class="flex justify-between ">
                  <h2 class="font-medium text-[28px] text-[#151515] pb-5">Carrito</h2>
                  <div id="close-cart" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke="#272727" stroke-linecap="round" stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12" />
                    </svg>
                  </div>
                </div>
                <div class="overflow-y-scroll h-[calc(100vh-200px)] scroll__carrito">
                  <table class="w-full">
                    <tbody id="itemsCarrito">
                      {{-- <div class="flex flex-col gap-10 align-top" id="itemsCarrito"></div> --}}
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="font-poppins flex flex-col gap-2 pt-2">
                <div class="text-[#141718] font-medium text-[20px] flex justify-between items-center">
                  <p>Total</p>
                  <p id="itemsTotal">S/ 0.00</p>
                </div>
                <div>
                  <a href="/carrito"
                    class="font-semibold text-base bg-[#74A68D] py-3 px-5 rounded-2xl text-white cursor-pointer w-full inline-block text-center">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
<script>
  $('#open-cart').on('click', () => {
    $('#cart-modal').modal({
      showClose: false,
      fadeDuration: 100
    })
  })
  $('#close-cart').on('click', () => {
    $('.jquery-modal.blocker.current').trigger('click')
  })
</script>
<script>
  function mostrarTotalItems() {
    let articulos = Local.get('carrito')
    let contarArticulos = articulos.reduce((total, articulo) => {
      return total + articulo.cantidad;
    }, 0);

    $('#itemsCount').text(contarArticulos)
  }
  $(document).ready(function() {
    if ({{ $isIndex ? 1 : 0 }}) {
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var categoriasOffset = $('#categorias').offset().top;

        const headerMenu = $('#header-menu')
        const logo = $('#logo-decotab')
        const items = $('#menu-items')
        const username = $('#username')
        const burguer = $('#menu-burguer')
        if (scroll >= categoriasOffset) {
          headerMenu
            .removeClass('absolute bg-transparent text-white')
            .addClass('fixed top-0 bg-white shadow-lg');
          items
            .removeClass('text-white')
            .addClass('text-[#272727]')
          username
            .removeClass('text-white')
            .addClass('text-[#272727]')
          // burguer
          //   .removeClass('absolute')
          //   .addClass('fixed')
          logo.attr('src', 'images/svg/logo_decotab_header.svg')
          $('#header-menu svg').attr('stroke', '#272727');
        } else {
          headerMenu
            .removeClass('fixed bg-white shadow-lg')
            .addClass('absolute bg-transparent text-white');
          items
            .removeClass('text-[#272727]')
            .addClass('text-white')
          username
            .removeClass('text-[#272727]')
            .addClass('text-white')
          // burguer
          //   .removeClass('fixed')
          //   .addClass('absolute')
          logo.attr('src', 'images/svg/logo_decotab_header_light.svg')
          $('#header-menu svg').attr('stroke', 'white');
        }
      });
    }
    mostrarTotalItems()
  })
</script>
<script src="{{ asset('js/storage.extend.js') }}"></script>


<script>
  
  $(document).ready(function() {
    $('#buscarproducto').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados').html(resultsHtml);
          }
        });
      } else {
        $('#resultados').empty();
      }
    });
  });


  $(document).ready(function() {
    $('#buscarproducto2').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados2').html(resultsHtml);
          }
        });
      } else {
        $('#resultados2').empty();
      }
    });
  });
</script>

<script>
  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto');
      var resultados = document.getElementById('resultados');
      var isClickInsideInput = input.contains(event.target);
      var isClickInsideResultados = resultados.contains(event.target);

      if (!isClickInsideInput && !isClickInsideResultados) {
          input.value = '';
          $('#resultados').empty();
      }
  });

  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');
      var isClickInsideInput = input.contains(event.target);
      var isClickInsideResultados = resultados.contains(event.target);

      if (!isClickInsideInput && !isClickInsideResultados) {
          input.value = '';
          $('#resultados2').empty();
      }
  });
</script>