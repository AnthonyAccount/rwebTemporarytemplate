 <section class=" px-4 mt-6">
     <div class="relative min-h-[400px] rounded-2xl overflow-hidden flex items-center justify-center">

         {{-- Background Image --}}
         <img src="{{ asset('frontend/hero-bg.jpg') }}" alt="Holiday Group"
             class="absolute inset-0 w-full h-full object-cover">

         {{-- Dark / Green Overlay --}}
         <div class="absolute inset-0 bg-gradient-to-r from-blue-950/80 via-gray-900/50 to-green-900/70"></div>

         {{-- Main Content --}}
         <div class="relative z-10 text-center px-4">
             <h1 class="text-white font-serif font-bold text-4xl md:text-6xl leading-tight uppercase">
                 Holiday Group of <br>
                 Companies
             </h1>
         </div>

         {{-- Pillars Card --}}
         <div
             class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 w-[88%] md:w-[70%] bg-white rounded-xl shadow-lg p-3">
             <h3 class="text-center text-xs font-bold text-gray-800 mb-2">
                 The Pillars of HGC
             </h3>

             <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                 <div class="bg-gray-100 rounded-lg p-2 flex items-center justify-center">
                     <img src="{{ asset('frontend/pillar-1.png') }}" class="h-12 object-contain" alt="">
                 </div>

                 <div class="bg-gray-100 rounded-lg p-2 flex items-center justify-center">
                     <img src="{{ asset('frontend/pillar-2.png') }}" class="h-12 object-contain" alt="">
                 </div>

                 <div class="bg-gray-100 rounded-lg p-2 flex items-center justify-center">
                     <img src="{{ asset('frontend/pillar-3.png') }}" class="h-12 object-contain" alt="">
                 </div>

                 <div class="bg-gray-100 rounded-lg p-2 flex items-center justify-center">
                     <img src="{{ asset('frontend/pillar-4.png') }}" class="h-12 object-contain" alt="">
                 </div>

                 <div class="bg-gray-100 rounded-lg p-2 flex items-center justify-center">
                     <img src="{{ asset('frontend/pillar-5.png') }}" class="h-12 object-contain" alt="">
                 </div>
             </div>
         </div>

     </div>
 </section>
