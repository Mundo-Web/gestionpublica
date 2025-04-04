@extends('components.public.matrix', ['pagina' => ''])

@section('css_importados')

@stop


@section('content')

  <main>
    {{-- <section class="font-poppins my-12">
            <div class="flex flex-col w-11/12 mx-auto">
                <div class="flex flex-col gap-10 my-5">
                    <div class="flex gap-1">
                        <a href="index.html" class="font-normal text-[14px] text-[#6C7275]">Home</a>
                        <span>/</span>
                        <a href="#" class="font-semibold text-[14px] text-[#141718]">Mi cuenta</a>
                    </div>
                </div>
            </div>
        </section> --}}

    <section class="font-poppins my-8 md:my-16">
      <div class="flex flex-col gap-12 md:flex-row md:gap-16 lg:gap-28 w-full md:w-11/12 mx-auto">
        <x-side-section-dashboard :user="$user" />
        <div class="basis-7/12 font-poppins w-11/12 md:w-full mx-auto">
          <h2 class="text-[#151515] font-semibold text-[20px] py-5">
            Lista de deseos
          </h2>
          <!-- para destop tabla -->
          {{-- <div class="hidden md:block">
            <table class="table-auto w-full">
              <thead>
                <tr class="text-left text-[#6C7275] font-normal text-[14px] border-b-[1px] border-[#E8ECEF]">
                  <th></th>
                  <th class="py-4">Producto</th>
                  <th class="py-4">Fecha Agregado </th>

                  <th class="py-4">Precio</th>
                </tr>
              </thead>
              <tbody class="text-[#141718] font-normal text-[14px]">
                @foreach ($wishlistItems as $item)
                  <tr>
                    <td>
                      <img src="{{ asset($item->products->imagen) }}" alt="" class="w-40">
                    </td> <!-- Assuming your Product model has a 'code' attribute -->
                    <td>{{ $item->products->producto }}</td> <!-- Assuming your Product model has a 'code' attribute -->
                    <td>{{ $item->created_at->format('Y-m-d') }}</td>

                    <td>
                      @if ($item->products->descuento > 0)
                        <span class="text-[#006BF6] text-base font-bold">S/. {{ $item->products->descuento }}</span>
                        <span class="line-through">{{ $item->products->precio }}</span>
                      @else
                        <span class="text-[#006BF6] text-base font-bold">S/. {{ $item->products->precio }}</span>
                      @endif
                    </td> <!-- Assuming your Product model has a 'price' attribute -->
                  </tr>
                @endforeach


              </tbody>
            </table>
          </div> --}}
          <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-3 md:flex-row gap-4 mt-14 w-full items-start">
            @foreach ($productos as $item)
              <div class="flex relative flex-col flex-1 shrink basis-0 min-w-[240px]">
                <div class="min-w-[240px]">
                  <img loading="lazy" src="{{ asset($item->imagen) }}"
                    class="object-cover z-0 w-full rounded-t-2xl h-[280px]" alt="Course background image"
                    onerror="this.onerror=null; this.src='/images/img/noimagen.jpg';" />
                  @if (Auth::check())
                    <button class="object-contain absolute top-4 right-4 z-0 w-10 h-10 aspect-square" type="button"
                      id="addWishlist" onclick="handleAddWishlist(event)">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="white" />
                        <path
                          d="M20 28.25C20 28.25 10.625 23 10.625 16.625C10.6252 15.4983 11.0156 14.4064 11.7299 13.5349C12.4442 12.6635 13.4382 12.0664 14.543 11.845C15.6478 11.6237 16.7951 11.7918 17.79 12.3208C18.7848 12.8498 19.5658 13.707 20 14.7467L20 14.7467C20.4342 13.707 21.2152 12.8498 22.21 12.3208C23.2049 11.7918 24.3522 11.6237 25.457 11.845C26.5618 12.0664 27.5558 12.6635 28.2701 13.5349C28.9844 14.4064 29.3748 15.4983 29.375 16.625C29.375 23 20 28.25 20 28.25Z"
                          stroke="#CF072C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                  @endif

                </div>

                <div
                  class="flex z-0 flex-col p-6 w-full bg-white border-r border-l border-rose-100 border-opacity-40 max-md:px-5">
                  <div
                    class="flex gap-3 items-center w-full text-xs font-medium leading-tight text-white uppercase whitespace-nowrap">
                    <span
                      class="gap-2.5 self-stretch px-1.5 py-1 my-auto bg-red-800 rounded font-poppins_regular">{{ $item->category->name }}</span>
                  </div>
                  <Tippy content={{ $item->producto }}>
                    <h2 class="mt-4 text-2xl font-semibold font-poppins_medium leading-7 text-neutral-800 md:h-[74px]">

                      {{ strlen($item->producto) > 55 ? substr($item->producto, 0, 55) . '...' : $item->producto }}
                    </h2>
                  </Tippy>


                  <div
                    class="flex flex-col self-start mt-4 text-sm tracking-normal font-poppins_regular leading-loose text-gray-600">
                    <div class="flex flex-row gap-2 items-center justify-start">
                      <i class="fa fa-clock text-lg" style="color: #e02424;"></i>
                      <p>{{ $item->duracion }} horas lectivas.</p>
                    </div>
                    <div class="flex flex-row gap-2 items-center justify-start mt-2">
                      <i class="fa fa-calendar text-lg" style="color: #e02424;"></i>
                      <p>Inicio: {{ $item->fecha_inicio ? $item->fecha_inicio : 'Próximamente' }}</p>
                    </div>
                  </div>
                </div>

                <div
                  class="flex z-0 gap-10 justify-between font-poppins_semibold items-center px-6 py-4 w-full text-sm bg-white rounded-none border border-solid border-rose-100 border-opacity-40 max-md:px-5">
                  <div
                    class="flex gap-1.5 items-center self-stretch my-auto font-medium tracking-normal leading-none text-gray-600 whitespace-nowrap">
                    <div loading="lazy" class="object-contain shrink-0 self-stretch my-auto w-5 aspect-square">

                    </div>

                  </div>
                  <a href="/detalleCurso/{{ $item->id }}"
                    class="flex gap-1 justify-center items-center self-stretch px-5 py-3 my-auto text-center text-white bg-red-600 rounded-[100px]"
                    role="button">
                    <span class="self-stretch my-0">Ver más</span>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                      <path
                        d="M9.75131 16.5833C9.59853 16.4306 9.51853 16.2361 9.5113 16C9.50408 15.7639 9.57714 15.5694 9.73047 15.4167L13.8138 11.3333H4.5013C4.26519 11.3333 4.06714 11.2533 3.90714 11.0933C3.74714 10.9333 3.66742 10.7356 3.66797 10.5C3.66797 10.2639 3.74797 10.0658 3.90797 9.90583C4.06797 9.74583 4.26575 9.66611 4.5013 9.66667H13.8138L9.73047 5.58333C9.57769 5.43056 9.50464 5.23611 9.5113 5C9.51797 4.76389 9.59797 4.56944 9.75131 4.41667C9.90408 4.26389 10.0985 4.1875 10.3346 4.1875C10.5707 4.1875 10.7652 4.26389 10.918 4.41667L16.418 9.91667C16.5013 9.98611 16.5605 10.0731 16.5955 10.1775C16.6305 10.2819 16.6477 10.3894 16.6471 10.5C16.6471 10.6111 16.6299 10.7153 16.5955 10.8125C16.561 10.9097 16.5019 11 16.418 11.0833L10.918 16.5833C10.7652 16.7361 10.5707 16.8125 10.3346 16.8125C10.0985 16.8125 9.90408 16.7361 9.75131 16.5833Z"
                        fill="white" />
                    </svg>
                  </a>
                </div>
              </div>

              {{--  <x-product.container width="col-span-1" bgcolor="" :item="$item" /> --}}
              {{-- <x-productos-card width="w-1/5" bgcolor="" :item="$item" /> --}}
            @endforeach
          </div>


          <!-- para mobiles acordion -->
          <div class="relative ring-gray-900/5 sm:mx-auto sm:rounded-lg block md:hidden">
            <div class="mx-auto">
              <div class="mx-auto grid max-w-[900px] gap-5">
                <div class="bg-[#F5F5F5] rounded-lg px-2">
                  <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                      <div class="font-normal text-[14px] flex flex-col justify-center items-start my-3">
                        <p class="text-[#6C7275]">Código de pedido</p>
                        <p class="text-[#141718]">#3456_768</p>
                      </div>

                      <span class="transition group-open:rotate-180">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_1301_11376" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="24" height="24">
                            <rect width="24" height="24" transform="matrix(-1 0 0 1 24 0)" fill="#D9D9D9" />
                          </mask>
                          <g mask="url(#mask0_1301_11376)">
                            <path d="M12 15.3746L18 9.37461L16.6 7.97461L12 12.5746L7.4 7.97461L6 9.37461L12 15.3746Z"
                              fill="#1C1B1F" />
                          </g>
                        </svg>
                      </span>
                    </summary>
                    <div class="flex flex-col gap-5">
                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Fecha</p>
                        <p class="text-[#141718]">12 de Enero de 2024</p>
                      </div>

                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Estatus</p>
                        <p class="text-[#141718]">Entregado</p>
                      </div>

                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Precio</p>
                        <p class="text-[#141718]">$1234.00</p>
                      </div>
                    </div>
                  </details>
                </div>

                <div class="bg-[#F5F5F5] rounded-lg px-2">
                  <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                      <div class="font-normal text-[14px] flex flex-col justify-center items-start my-3">
                        <p class="text-[#6C7275]">Código de pedido</p>
                        <p class="text-[#141718]">#3456_768</p>
                      </div>

                      <span class="transition group-open:rotate-180">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_1301_11376" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="24" height="24">
                            <rect width="24" height="24" transform="matrix(-1 0 0 1 24 0)" fill="#D9D9D9" />
                          </mask>
                          <g mask="url(#mask0_1301_11376)">
                            <path d="M12 15.3746L18 9.37461L16.6 7.97461L12 12.5746L7.4 7.97461L6 9.37461L12 15.3746Z"
                              fill="#1C1B1F" />
                          </g>
                        </svg>
                      </span>
                    </summary>
                    <div class="flex flex-col gap-5">
                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Fecha</p>
                        <p class="text-[#141718]">12 de Enero de 2024</p>
                      </div>

                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Estatus</p>
                        <p class="text-[#141718]">Entregado</p>
                      </div>

                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Precio</p>
                        <p class="text-[#141718]">$1234.00</p>
                      </div>
                    </div>
                  </details>
                </div>

                <div class="bg-[#F5F5F5] rounded-lg px-2">
                  <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                      <div class="font-normal text-[14px] flex flex-col justify-center items-start my-3">
                        <p class="text-[#6C7275]">Código de pedido</p>
                        <p class="text-[#141718]">#3456_768</p>
                      </div>

                      <span class="transition group-open:rotate-180">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <mask id="mask0_1301_11376" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="24" height="24">
                            <rect width="24" height="24" transform="matrix(-1 0 0 1 24 0)" fill="#D9D9D9" />
                          </mask>
                          <g mask="url(#mask0_1301_11376)">
                            <path d="M12 15.3746L18 9.37461L16.6 7.97461L12 12.5746L7.4 7.97461L6 9.37461L12 15.3746Z"
                              fill="#1C1B1F" />
                          </g>
                        </svg>
                      </span>
                    </summary>
                    <div class="flex flex-col gap-5">
                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Fecha</p>
                        <p class="text-[#141718]">12 de Enero de 2024</p>
                      </div>

                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Estatus</p>
                        <p class="text-[#141718]">Entregado</p>
                      </div>

                      <div class="font-normal text-[14px]">
                        <p class="text-[#6C7275]">Precio</p>
                        <p class="text-[#141718]">$1234.00</p>
                      </div>
                    </div>
                  </details>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@section('scripts_importados')
  <script>
    $("#upload_image").change(function() {

      const file = this.files[0];

      if (file) {
        const formData = new FormData();
        formData.append('image', file);
        formData.append('_token', $('#avatarform input[name="_token"]').val());
        formData.append('id', $('#avatarform input[name="name"]').val());
        $.ajax({

          url: "{{ route('cambiofoto') }}",
          method: 'POST',
          data: formData,
          processData: false,
          contentType: false,

          success: function(success) {
            window.location.href = window.location.href;

          },
          error: function(error) {
            console.log(error)
          }

        })
      }

    });
  </script>
@stop

@stop
