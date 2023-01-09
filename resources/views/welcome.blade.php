<x-guest-layout>
    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  const colors = require('tailwindcss/colors')

  module.exports = {
    // ...
    theme: {
      extend: {
        colors: {
          teal: colors.teal,
          cyan: colors.cyan,
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->

    <main>
        <div class="bg-gray-900 pt-10 sm:pt-16 lg:overflow-hidden lg:pt-8 lg:pb-14">
            <div class="mx-auto max-w-7xl lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:flex lg:items-center lg:px-0 lg:text-left">
                        <div class="lg:py-24">
                            <h1 class="mt-4 text-4xl font-bold tracking-tight text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                <span class="block">UlldEcommerce</span>
                                <span
                                    class="block bg-gradient-to-r from-teal-200 to-cyan-400 bg-clip-text pb-3 text-transparent sm:pb-5">Productes locals a l'abast de tothom</span>
                            </h1>
                            <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Descobreix tots
                                els productes que hi han a la teva localitat i accedeix a ells amb tan sols un
                                clic.</p>
                            <div class="mt-10 sm:mt-12">
                                <form action="#" class="sm:mx-auto sm:max-w-xl lg:mx-0">
                                    <div class="sm:flex">
                                        <div class="min-w-0 flex-1">
                                            <label for="email" class="sr-only">Email address</label>
                                            <input id="email" type="email" placeholder="Correu electrònic"
                                                   class="block w-full rounded-md border-0 px-4 py-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900">
                                        </div>
                                        <div class="mt-3 sm:mt-0 sm:ml-3">
                                            <button type="submit"
                                                    class="block w-full rounded-md bg-gradient-to-r from-teal-500 to-cyan-600 py-3 px-4 font-medium text-white shadow hover:from-teal-600 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900">
                                                Envia
                                            </button>
                                        </div>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-300 sm:mt-4">Estigues al dia de totes les
                                        novetats del comerç d'Ulldecona. Posant el teu correu electrònic,
                                        acceptes les nostres <a
                                            href="#" class="font-medium text-white">condicions de servei</a>.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:relative lg:m-0">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                            <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                            <img
                                class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                src="https://tailwindui.com/img/component-images/cloud-illustration-teal-cyan.svg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature section with screenshot -->
        <div class="relative bg-white pt-16 sm:pt-24 lg:pt-32">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <div>
                    <h2 class="text-lg font-semibold text-cyan-600">Clients</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Compra de forma
                        diferent, als llocs de sempre</p>
                    <p class="mx-auto mt-5 max-w-prose text-xl text-gray-500">Tots els comerços i
                        productes de la teva localitat a un sol clic i des de casa.</br> Seràs el primer en
                        conèixer
                        els nous productes de la teva botiga preferida.</p>
                </div>
                <div class="mt-12 -mb-10 sm:-mb-24 lg:-mb-80">
                    <img class="rounded-lg shadow-xl ring-1 ring-black ring-opacity-5"
                         src="https://tailwindui.com/img/component-images/green-project-app-screenshot.jpg"
                         alt="">
                </div>
            </div>
        </div>

        <!-- Blog section -->
        <div class="relative bg-gray-200 py-16 sm:py-24 lg:py-32">
            <div class="relative">
                <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Opinions</p>
                    <p class="mx-auto mt-5 max-w-prose text-xl text-gray-500">El més important és la satisfacció
                        dels nostres usuaris, tant dels compradors com dels venedors, i garantir la millor
                        experiència possible.</p>
                </div>
                <div
                    class="mx-auto mt-12 grid max-w-md gap-8 px-4 sm:max-w-lg sm:px-6 lg:max-w-7xl lg:grid-cols-3 lg:px-8">
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                            <div class="flex-1">
                                <p class="text-xl font-semibold text-gray-900">Comoditat màxima</p>
                                <p class="mt-3 text-base text-gray-500">Treballo tot el dia i no tinc temps per
                                    anar a comprar. Faig la comanda a través de l'aplicació, gaudeixo de
                                    descomptes i sol he d'anar a recollir-ho, aixi estalvio temps i diners.</br>
                                    Recomanat 100%.</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full"
                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="Roel Aufderehar">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        Joan Ferré
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <span>Comprador</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                            <div class="flex-1">
                                <p class="text-xl font-semibold text-gray-900">Beneficia molt el negoci</p>
                                <p class="mt-3 text-base text-gray-500">Ofereix molt més que visibilitat al
                                    negoci... Pots gestionar les comandes, saber els clients que compren més,
                                    els productes més demandats i els que menys, etc. Si estàs dubtant si fer-ho
                                    o no, fes-ho sense cap dubte.</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full"
                                         src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="Roel Aufderehar">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        Angela Vives
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <span>Venedora</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                            <div class="flex-1">
                                <p class="text-xl font-semibold text-gray-900">Estimula l'economia</p>
                                <p class="mt-3 text-base text-gray-500">En el moment en que els comerços van
                                    anar sumant-se, l'economia local es va veure beneficiada i molts comerços
                                    van rebre l'espenta que estaven buscant.</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">

                                    <img class="h-10 w-10 rounded-full"
                                         src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="Roel Aufderehar">

                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">
                                        Rosa Gisfit
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <span>Alcaldesa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature section with grid -->
        <div class="relative bg-white py-16 sm:py-24 lg:py-32">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-lg font-semibold text-cyan-600">Empreses</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tot el que necesites
                    per a estimular el teu negoci</p>
                <p class="mx-auto mt-5 max-w-prose text-xl text-gray-500">Estem molt vinculats a les empreses
                    per a que puguen donar a conèixer les seves idees i productes</p>
                <div class="mt-12">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-200 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center rounded-md bg-gradient-to-r from-teal-500 to-cyan-600 p-3 shadow-lg">
                        <!-- Heroicon name: outline/cloud-arrow-up -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Dona a
                                        conèixer</h3>
                                    <p class="mt-5 text-base text-gray-500">Puja els teus productes per a que tota la
                                        gent sàpigue el que ofereixes</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-200 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center rounded-md bg-gradient-to-r from-teal-500 to-cyan-600 p-3 shadow-lg">
                        <!-- Heroicon name: outline/lock-closed -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Seguretat</h3>
                                    <p class="mt-5 text-base text-gray-500">Garantim la seguretat de la teva informació,
                                        la de la teva empresa i la dels teus productes</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-200 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center rounded-md bg-gradient-to-r from-teal-500 to-cyan-600 p-3 shadow-lg">
                        <!-- Heroicon name: outline/arrow-path -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Crea cercles</h3>
                                    <p class="mt-5 text-base text-gray-500">Fes que els clients quedin contents amb
                                        l'empresa i amb la plataforma per a que compren altre cop</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-200 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center rounded-md bg-gradient-to-r from-teal-500 to-cyan-600 p-3 shadow-lg">
                        <!-- Heroicon name: outline/shield-check -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">
                                        Confiabilitat</h3>
                                    <p class="mt-5 text-base text-gray-500">Fes que el client es quedi satisfet per a
                                        generar fiabilitat, tant amb el negoci com en la plataforma</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-200 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center rounded-md bg-gradient-to-r from-teal-500 to-cyan-600 p-3 shadow-lg">
                        <!-- Heroicon name: outline/cog -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Simple</h3>
                                    <p class="mt-5 text-base text-gray-500">En cas de dificultat, t'assessorem i ho
                                        configurem tot per a poder publicar el comerç, tothom pot accedir-hi</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="flow-root rounded-lg bg-gray-200 px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                      <span
                          class="inline-flex items-center justify-center rounded-md bg-gradient-to-r from-teal-500 to-cyan-600 p-3 shadow-lg">
                        <!-- Heroicon name: outline/server -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 17.25v-.228a4.5 4.5 0 00-.12-1.03l-2.268-9.64a3.375 3.375 0 00-3.285-2.602H7.923a3.375 3.375 0 00-3.285 2.602l-2.268 9.64a4.5 4.5 0 00-.12 1.03v.228m19.5 0a3 3 0 01-3 3H5.25a3 3 0 01-3-3m19.5 0a3 3 0 00-3-3H5.25a3 3 0 00-3 3m16.5 0h.008v.008h-.008v-.008zm-3 0h.008v.008h-.008v-.008z"/>
                        </svg>
                      </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Comoditat</h3>
                                    <p class="mt-5 text-base text-gray-500">Gestiona els teus productes i negocis des de
                                        qualsevol lloc i a qualsevol hora</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Price section -->
        <div class="relative bg-gray-200 py-16 sm:py-24 lg:py-32">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <p class="mt-2 text-3xl font-bold text-center tracking-tight text-gray-900 sm:text-4xl">
                    Preus</p>
                <div class="mt-24 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                    <div
                        class="relative flex flex-col rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900">Gratis</h3>
                            <p class="mt-4 flex items-baseline text-gray-900">
                                <span class="text-5xl font-bold tracking-tight">0€</span>
                            </p>
                            <p class="mt-6 text-gray-500">Pla molt limitat però perfecte per a provar la
                                plataforma</p>

                            <!-- Feature list -->
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">Fins a 5 productes</span>
                                </li>

                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">1 foto/producte</span>
                                </li>

                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">1 establiment</span>
                                </li>
                            </ul>
                        </div>

                        <a href="#"
                           class="bg-indigo-50 text-indigo-700 hover:bg-indigo-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Tria</a>
                    </div>

                    <div
                        class="relative flex flex-col rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900">Basic</h3>


                            <p class="mt-4 flex items-baseline text-gray-900">
                                <span class="text-5xl font-bold tracking-tight">9,99€</span>
                                <span class="ml-1 text-xl font-semibold">/mes</span>
                            </p>
                            <p class="mt-6 text-gray-500">Un pla que s'ajusta al vostre negoci en ràpid
                                creixement.</p>

                            <!-- Feature list -->
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">Fins a 10 productes</span>
                                </li>

                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">Fotos il·limitades</span>
                                </li>

                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">1 establiment</span>
                                </li>

                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">Assistència en 24/48 hores</span>
                                </li>
                            </ul>
                        </div>

                        <a href="#"
                           class="bg-indigo-500 text-white hover:bg-indigo-600 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Tria</a>
                    </div>

                    <div
                        class="relative flex flex-col rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900">Premium</h3>
                            <p class="absolute top-0 -translate-y-1/2 transform rounded-full bg-indigo-500 py-1.5 px-4 text-sm font-semibold text-white">
                                Més popular</p>
                            <p class="mt-4 flex items-baseline text-gray-900">
                                <span class="text-5xl font-bold tracking-tight">19,99€</span>
                                <span class="ml-1 text-xl font-semibold">/mes</span>
                            </p>
                            <p class="mt-6 text-gray-500">Ideal per a poder dirigir més d'un comerç a la
                                plataforma</p>

                            <!-- Feature list -->
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">Productes il·limitats</span>
                                </li>

                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">Fotos il·limitades</span>
                                </li>

                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">Establiments il·limitats</span>
                                </li>

                                <li class="flex">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 flex-shrink-0 text-indigo-500"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                    <span class="ml-3 text-gray-500">Assistència en 24h o menys</span>
                                </li>
                            </ul>
                        </div>

                        <a href="#"
                           class="bg-indigo-50 text-indigo-700 hover:bg-indigo-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Tria</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Testimonial section -->
        <div class="relative pt-4 pb-4">
            <div class="bg-gradient-to-r from-teal-500 to-cyan-600 pb-16 lg:relative lg:z-10 lg:pb-0">
                <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-8 lg:px-8">
                    <div class="relative lg:-my-8">
                        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                        <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:h-full lg:p-0">
                            <div
                                class="aspect-w-10 aspect-h-6 overflow-hidden rounded-xl shadow-xl sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                                <img class="object-cover lg:h-full lg:w-full"
                                     src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80"
                                     alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 lg:col-span-2 lg:m-0 lg:pl-8">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0 lg:py-20">
                            <blockquote>
                                <div>
                                    <svg class="h-12 w-12 text-white opacity-25" fill="currentColor"
                                         viewBox="0 0 32 32" aria-hidden="true">
                                        <path
                                            d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                    </svg>
                                    <p class="mt-6 text-2xl font-medium text-white">Em feia un poc de rescpecte que
                                        el meu negoci en un Ecommerce i començar a vendre per internet, però crec
                                        que és el millor que li ha pogut passar al meu negoci.</br>Les vendes han
                                        incrementat notablement i la plataforma dóna a coneixer la meva empresa a
                                        tots els usuaris.</p>
                                </div>
                                <footer class="mt-6">
                                    <p class="text-base font-medium text-white">Maria Garcia</p>
                                    <p class="text-base font-medium text-cyan-100">Emprenedora</p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- CTA Section -->
        <div class="relative bg-gray-900">
            <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                <img class="h-full w-full object-cover"
                     src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&sat=-100"
                     alt="">
                <div aria-hidden="true"
                     class="absolute inset-0 bg-gradient-to-r from-teal-500 to-cyan-600 mix-blend-multiply"></div>
            </div>
            <div
                class="relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
                <div class="md:ml-auto md:w-1/2 md:pl-10">
                    <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Estem aqui per a
                        ajudar-te</p>
                    <p class="mt-3 text-lg text-gray-300">Per a nosaltres, el teu confort i l'esperiència ha de
                        ser màxim, per això oferim un sistema d'ajuda per a que, en algun moment de dubte sobre
                        qualsevol tema,
                        et puguis dirigir a nosaltres i nosaltres t'ho resoldrem amb la major rapidessa possible.</br>
                        Tens diferents formes de contactar amb nosaltres, tria la que més s'adapti a la teva
                        situació.</p>
                    <div class="mt-8">
                        <div class="inline-flex rounded-md shadow">
                            <a href="#"
                               class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-gray-900 hover:bg-gray-50">
                                Contacta
                                <!-- Heroicon name: mini/arrow-top-right-on-square -->
                                <svg class="-mr-1 ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z"
                                          clip-rule="evenodd"/>
                                    <path fill-rule="evenodd"
                                          d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    </div>
</x-guest-layout>
