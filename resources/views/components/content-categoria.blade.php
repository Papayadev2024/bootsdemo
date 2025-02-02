<div class="bg-[#EEEEEE] w-full flex flex-col justify-between items-center gap-5 relative bg-center bg-no-repeat">

  <div class="z-10 flex flex-col items-center text-center gap-5">
    <h2 class="mt-10 text-[15px] font-normal text-[#333333]"> {{ $item->name }} </h2>
    <h1 class="text-[29px] font-normal"> {{ $item->description }}</h1>

    <button
      class="bg-[#006BF6] text-[14px] font-semibold text-white text-center p-3 rounded-3xl  items-center justify-center w-32 mb-5 block"
      type="button">
      Comprar ahora
    </button>
  </div>
  <div class="h-80 relative z-10">
    <img class="block h-80  mx-auto w-[75%] object-contain bottom-0 left-0 mt-[-50px]"
      src="{{ asset('images/img/Container.png') }}" alt="">
  </div>
</div>
