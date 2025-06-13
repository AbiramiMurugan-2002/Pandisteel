<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root overflow-x-hidden" style='font-family: Manrope, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f3e7e7] px-10 py-3">
          <div class="flex items-center gap-4 text-[#1b0e0e]">
            <div>
               <img src="{{ asset('storage/logo/Turium_Logo.jpg') }}" class="w-[200px] h-[75px]" alt="Turium">
            </div>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#1b0e0e] text-sm font-medium leading-normal" href="#">Products</a>
              <a class="text-[#1b0e0e] text-sm font-medium leading-normal" href="#">Services</a>
              <a class="text-[#1b0e0e] text-sm font-medium leading-normal" href="#">About Us</a>
              <a class="text-[#1b0e0e] text-sm font-medium leading-normal" href="#">Contact</a>
            </div>
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em]"
            >
              <span class="truncate">Get a Quote</span>
            </button>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:p-4">
                <div
                  class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-start justify-end px-4 pb-10 @[480px]:px-10"
                  style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBsKYzo1Gw6uPSGYyZijWEn6CPY17-Qc3NpN-YthK5Ak6uh6PZo2IWh-DVBy_L4AVauAxAYJWc6BzTqLR3W3kXH18Q_3bDgETblC5Tfbqz0wPENN2rvCM-Ftm5LEcZJqoHVrHsHd0dpWEnERggHG7-8YUeh-48PpTbrZI8U2Q2naqsez_kqH0TCcjMUo9Cz7GLtwucXZW9O8Txx7dTN_O-6smxD54jncpKAnJZrkek1_oNJKMRKNbActMFWppg1lt-ah0skfNtzhQ2Z");'
                >
                  <div class="flex flex-col gap-2 text-left">
                    <h1
                      class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                    >
                      Your Trusted Partner in Steel and Alloy Solutions
                    </h1>
                    <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                      Providing high-quality steel and alloy products and exceptional service to meet your project needs.
                    </h2>
                  </div>
                  <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                  >
                    <span class="truncate">Explore Products</span>
                  </button>
                </div>
              </div>
            </div>
            <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Products</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBfw_vTQYV_gJ5aTBtjZ3ydsBxFikWgARAJH-UtRpMwG5I2qUXunzmaRfMp5YmcS4-IG6Rpn8iIOGW16WmQhCgwdAsrGMW8xxCUikBdVwH9OaBR3ws5CtaAnY8Dvf28JIQ2OtpIGqwnLeD4KJ5-esNENjVt2x1mYNpgmmjQ_gkVLlxJxrU8EMgrQBvkIklCe3_CGjPOtLv2HbWSOEGIPSl6WMXi85nWsmVkN60Chi84sFzTN5dXRwb9rSiUyMYWBEVyXo_nipT25H9F");'
                ></div>
                <div>
                  <p class="text-[#1b0e0e] text-base font-medium leading-normal">Steel Beams</p>
                  <p class="text-[#994d4d] text-sm font-normal leading-normal">Structural steel beams for construction</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCx1vasWyy0WF7A-Z8yVnyK5Lc6U2lC6ks8Nj0-RvwvBhphmKzkYSh4DQ3O0CuEFZZKr29TVN2p3OeVUUFY-lPjEvetdXpIxaV2qm4JK2hRYr-LZYIeKlJeFBqNmFjiUYTHpNk_-yU1yqpcdb-kVCsGa_eM54Xl9f8AU79zOUpjFXVVFssZCZOABOt9x5VjKbR_K92mVs-5um5xslimf1xRxftddlsiMhMv2Hy-X4BJAez3LhPm3DzKNl_9cld2nfxgTpAuSS7j068Q");'
                ></div>
                <div>
                  <p class="text-[#1b0e0e] text-base font-medium leading-normal">Steel Plates</p>
                  <p class="text-[#994d4d] text-sm font-normal leading-normal">High-strength steel plates for various applications</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDjslWEbW0BFLF7J_kgKktck4T1hgA3mpFV4iVfXnjaN4ALbjDAXyGo8UJwcnA7jV0dKbq3prfSYRUG_tprQ6zItqbm7daWEqCa9LfQxGWvvActBxYdmTE2fNLTkidAAwi62dTxU_afirK5WZOovQiT7teOQlRt9wA9TMLI1SdZbGk_Xgibmznk1-ij7CF5miM4p_2CqVocXexDUYlABnHX_Jw5VIv9S5PNLw7C8yjCscpJGm-Zcr6LDGFokLhpj4ux7KxLc30fk-7l");'
                ></div>
                <div>
                  <p class="text-[#1b0e0e] text-base font-medium leading-normal">Steel Bars</p>
                  <p class="text-[#994d4d] text-sm font-normal leading-normal">Steel bars in different shapes and sizes</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBvWcpnOJ6cMmZFf3Q8ito90a95JqEnHk3xfitZesFJkRGP4hG7KXXuxBGGRnc7DLFkGBJZt-jGKADYzul5eZGr7-yhPc2WtRfyj4KjSH7A8m2Fv0xCfOAPkwqcUB4i9tx_8gMyhZBB6XK0OzcxUElNeo8d68Bf55ZmwTMJ40m1_biVeLZHFL_tKANvtVaLOb4rzCM_50gb9rzjSBmDt__3c-gdWGjEPOIU9PfyjEZ3NhTFNvJv44Rc93O1uO67qJB3Y8HiRqKWHsg5");'
                ></div>
                <div>
                  <p class="text-[#1b0e0e] text-base font-medium leading-normal">Steel Tubes</p>
                  <p class="text-[#994d4d] text-sm font-normal leading-normal">Steel tubes for pipelines and structures</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDsKD1736cz38MNjPkc3t76hIPxd449hUiBUxgfC5ile9lIJa5i5bDleElbKJQVA5TT9PmwlGeJgTRxffcCRx3UOhx-ThkauSHyAHwc8Zi0mhlf1692VU_Yu2oriTC1FnQ_0l7EY6kdIArORZZALF4HaC8zqyJfTRtXbcmZN1M71RlyGZsnLy_jad-nA8eYJKK-PQ6IYBWNNxTL7pg4OozMTryPAur37zIpsZrlsXOZWETZSwIcBhosQmuG0FGS0_OX6Wnikz2qSvPp");'
                ></div>
                <div>
                  <p class="text-[#1b0e0e] text-base font-medium leading-normal">Aluminum Sheets</p>
                  <p class="text-[#994d4d] text-sm font-normal leading-normal">Lightweight aluminum sheets for aerospace and automotive</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBHFrTG7cyloZvsuS6j_-5jAA6sMywD5_s2UnnNdOqJtSu8d3b-NODpuwoJRYYSTfjiOXzZhbRE4a9KPyQXM9T5wOMhrsOxumq31GprxiVA9J7shX3Ld93w6Zo6We4lkA7w0_P-Tz5gZs467G2c7RJuH2yzUbIgGbOrpqYQEFN3bxFUtPVlOkBBYH5YVgoPYNWFnDShzaFANkgXUh5kZO1jsZ3Zkn4naK4xzlwFYnrXpY_9qnXPt71sooiGB33IJ1BOPETnSQpMGJWa");'
                ></div>
                <div>
                  <p class="text-[#1b0e0e] text-base font-medium leading-normal">Brass Rods</p>
                  <p class="text-[#994d4d] text-sm font-normal leading-normal">Durable brass rods for machining and fabrication</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBRshn2cBRvq2xjcPuepgI6YE2pWbQYQ0rN044AciOegxlEXNb4Di5lsG2TZ3MwQkWcgEBDZJ8NwWhXau-OKwAGhoMR2ZrKdr10MRvTyZtUCcS8IiwNlx3aK-YDPh8gJbu9IncY97qXvv2TRgjlSVD2U6vwz5yzUeHg0G33SH4UO43U1q5svdBgDNQZTskMAMHiSHUFr40sZkBupMABAaj50UGmIJvDn4HAxwIVaICin8UVhz10lb-wx_xvKmC4Ko5315v87aUW0E20");'
                ></div>
                <div>
                  <p class="text-[#1b0e0e] text-base font-medium leading-normal">Copper Pipes</p>
                  <p class="text-[#994d4d] text-sm font-normal leading-normal">Corrosion-resistant copper pipes for plumbing and HVAC</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDxPsS2h77hiUYX5Xgn3d6F7CFU97IlnnYewJJpQ2yuy5QMD2vSdeOSw4FszSV-CPuxkr9rD07mI4Ssx9F65rT-JP2QoK-QW01zprcFXzkTsywMumffBFnxSpT7pvzYK9AIpKVtmOOGhwiY9vnAtZPmrGGGNG1uk2m8uDFBr0lOq2y0hFqvJ9H78tGL3AfAdwd-n8_h0IOwsy2B3Gy_-OawLD17zDr0CYvQShWkYlK2xbXRNCrGe9tqy6n3VWTmM_l7IuTms-lMro1Y");'
                ></div>
                <div>
                  <p class="text-[#1b0e0e] text-base font-medium leading-normal">Bronze Castings</p>
                  <p class="text-[#994d4d] text-sm font-normal leading-normal">High-strength bronze castings for industrial components</p>
                </div>
              </div>
            </div>
            <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Services</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-1 gap-3 rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] p-4 items-center">
                <div class="text-[#1b0e0e]" data-icon="Wrench" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M226.76,69a8,8,0,0,0-12.84-2.88l-40.3,37.19-17.23-3.7-3.7-17.23,37.19-40.3A8,8,0,0,0,187,29.24,72,72,0,0,0,88,96,72.34,72.34,0,0,0,94,124.94L33.79,177c-.15.12-.29.26-.43.39a32,32,0,0,0,45.26,45.26c.13-.13.27-.28.39-.42L131.06,162A72,72,0,0,0,232,96,71.56,71.56,0,0,0,226.76,69ZM160,152a56.14,56.14,0,0,1-27.07-7,8,8,0,0,0-9.92,1.77L67.11,211.51a16,16,0,0,1-22.62-22.62L109.18,133a8,8,0,0,0,1.77-9.93,56,56,0,0,1,58.36-82.31l-31.2,33.81a8,8,0,0,0-1.94,7.1L141.83,108a8,8,0,0,0,6.14,6.14l26.35,5.66a8,8,0,0,0,7.1-1.94l33.81-31.2A56.06,56.06,0,0,1,160,152Z"
                    ></path>
                  </svg>
                </div>
                <h2 class="text-[#1b0e0e] text-base font-bold leading-tight">Custom Fabrication</h2>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] p-4 items-center">
                <div class="text-[#1b0e0e]" data-icon="Truck" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"
                    ></path>
                  </svg>
                </div>
                <h2 class="text-[#1b0e0e] text-base font-bold leading-tight">Delivery Services</h2>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] p-4 items-center">
                <div class="text-[#1b0e0e]" data-icon="Ruler" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M235.32,73.37,182.63,20.69a16,16,0,0,0-22.63,0L20.68,160a16,16,0,0,0,0,22.63l52.69,52.68a16,16,0,0,0,22.63,0L235.32,96A16,16,0,0,0,235.32,73.37ZM84.68,224,32,171.31l32-32,26.34,26.35a8,8,0,0,0,11.32-11.32L75.31,128,96,107.31l26.34,26.35a8,8,0,0,0,11.32-11.32L107.31,96,128,75.31l26.34,26.35a8,8,0,0,0,11.32-11.32L139.31,64l32-32L224,84.69Z"
                    ></path>
                  </svg>
                </div>
                <h2 class="text-[#1b0e0e] text-base font-bold leading-tight">Technical Support</h2>
              </div>
            </div>
            <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Why Choose Us?</h2>
            <div class="flex flex-col gap-10 px-4 py-10 @container">
              <div class="flex flex-col gap-4">
                <h1
                  class="text-[#1b0e0e] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                >
                  Our Commitment to Excellence
                </h1>
                <p class="text-[#1b0e0e] text-base font-normal leading-normal max-w-[720px]">
                  At Turium, we are committed to providing our customers with the best steel and alloy solutions. Our focus on quality, competitive pricing, fast delivery, and
                  expert support sets us apart from the competition.
                </p>
              </div>
              <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] p-4 flex-col">
                  <div class="text-[#1b0e0e]" data-icon="ShieldCheck" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#1b0e0e] text-base font-bold leading-tight">Quality Products</h2>
                    <p class="text-[#994d4d] text-sm font-normal leading-normal">We offer a wide range of high-quality steel and alloy products that meet industry standards.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] p-4 flex-col">
                  <div class="text-[#1b0e0e]" data-icon="CurrencyDollar" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#1b0e0e] text-base font-bold leading-tight">Competitive Pricing</h2>
                    <p class="text-[#994d4d] text-sm font-normal leading-normal">Our pricing is competitive, ensuring you get the best value for your money.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] p-4 flex-col">
                  <div class="text-[#1b0e0e]" data-icon="Truck" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#1b0e0e] text-base font-bold leading-tight">Fast Delivery</h2>
                    <p class="text-[#994d4d] text-sm font-normal leading-normal">We provide fast and reliable delivery services to keep your projects on schedule.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] p-4 flex-col">
                  <div class="text-[#1b0e0e]" data-icon="Headset" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M201.89,54.66A103.43,103.43,0,0,0,128.79,24H128A104,104,0,0,0,24,128v56a24,24,0,0,0,24,24H64a24,24,0,0,0,24-24V144a24,24,0,0,0-24-24H40.36A88.12,88.12,0,0,1,190.54,65.93,87.39,87.39,0,0,1,215.65,120H192a24,24,0,0,0-24,24v40a24,24,0,0,0,24,24h24a24,24,0,0,1-24,24H136a8,8,0,0,0,0,16h56a40,40,0,0,0,40-40V128A103.41,103.41,0,0,0,201.89,54.66ZM64,136a8,8,0,0,1,8,8v40a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V136Zm128,56a8,8,0,0,1-8-8V144a8,8,0,0,1,8-8h24v56Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#1b0e0e] text-base font-bold leading-tight">Expert Support</h2>
                    <p class="text-[#994d4d] text-sm font-normal leading-normal">Our team of experts is always ready to provide technical support and guidance.</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Customer Testimonials</h2>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
              <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBNkD_DJcBZNd5SWc0PDbV4CsyCBJtfpJx_FZBaM0SwtPWV3GdzoxmUPq7tBKmcHFF0XtTMOpYMBj_K01HmLBFIbfoKHKds2BhNn_PZoR-V3PVRJUz0pwZCtX91h4zcCYR6nHAafkAR5H1ScPaF2hmJzIIdX3LGAiZRh7q9gSaZVp-ifvo4APGcbtrrLffj5wQ6_U2DLlgdcLYPv25bZE1C24Rb8ptDLpveP_AiBDvOry0lEQvEb4N2bg4rv1hZXM5cROOqqTQcAzTI");'
                  ></div>
                  <div>
                    <p class="text-[#1b0e0e] text-base font-medium leading-normal">Exceptional Quality</p>
                    <p class="text-[#994d4d] text-sm font-normal leading-normal">
                      "The steel beams from Turium were top-notch and perfect for our construction project. Highly recommend!" - Alex Turner, Construction Manager
                    </p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCRRkpuh0gSF2Pbhy4N3_oGuFa7zijNoPxpTZQdlz_ptaFG6_3hsYVIDUjku954y6KyhUnBM6s8ax_UmfroCIjJVsgHbjXAXc8WzxW69AM8CKlVjrLih-_lb2NfEwl3GpoHVz8QwMWGj3jnLR9fcSzrfANd8fW1e0Wem96AIB_2N4JvePifFTrR_Pc8bJsA7rAjUqu32LNtv4j_vjBrmU0B0hgN_kzCmUy1UfxWuMNqH6XWKe6re8XpqDnbzWxzodxXgVOKZ_7s4P90");'
                  ></div>
                  <div>
                    <p class="text-[#1b0e0e] text-base font-medium leading-normal">Reliable Service</p>
                    <p class="text-[#994d4d] text-sm font-normal leading-normal">
                      "Turium's delivery service is incredibly reliable. We always receive our materials on time and in perfect condition." - Emily Carter, Metal Fabricator
                    </p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCtcqLS_cs_n4XX1HOpoNAxN2Sb1JV7tMZ6fAn5GcVEQ_qI8E3ZN6CXk-9YFd3pSUa4AWYYgHNsITR2VWd0JFpcNQOzYBXVbYprL1USe33cQw2EJwWt8hyuDDSMduFMBj8LTWfi8dNRKPGFeRD0roJvlYGFQE2lzCNtioL2xe2ZN53klLgfPTlWYs6yriqc7fw_b-L4fNbPO-4uU1uV4cmABl1DaK1zdRtGy-lmToiPdOwLuup-pAXEMh4PTQ4ecxYMoudksOUnB0Ir");'
                  ></div>
                  <div>
                    <p class="text-[#1b0e0e] text-base font-medium leading-normal">Expert Advice</p>
                    <p class="text-[#994d4d] text-sm font-normal leading-normal">
                      "The technical support team at Turium provided invaluable advice for our engineering needs. Their expertise is unmatched." - Ryan Chen, Engineer
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="flex justify-center">
          <div class="flex max-w-[960px] flex-1 flex-col">
            <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
              <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                <a class="text-[#994d4d] text-base font-normal leading-normal min-w-40" href="#">Privacy Policy</a>
                <a class="text-[#994d4d] text-base font-normal leading-normal min-w-40" href="#">Terms of Service</a>
                <a class="text-[#994d4d] text-base font-normal leading-normal min-w-40" href="#">Contact Us</a>
              </div>
              <p class="text-[#994d4d] text-base font-normal leading-normal">© 2023 Turium. All rights reserved.</p>
            </footer>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
