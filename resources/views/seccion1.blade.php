<section class="d-flex flex-wrap w-100 marino flex-lg-row oh">

    <div class="col-lg-6 p-0 move-right">
        <div class="d-flex flex-column flex-lg-row w-100 tlb w1 text-center text-md-left">
            <p class="p-5  w1" style="color: aliceblue;font-size:large;">
                @lang('menssages.p1')
            </p>
        </div>
        <div>
            <img class="" src="images/img--06.jpg" alt="fin bajada">
        </div>
    </div>
    <div class="col-lg-6 w1 d-flex justify-content-center justify-content-lg-start move-left" style="padding: unset;">
        {{-- <img class="lampara float-lg-left " src="images/325x550.jpg" alt="ilus bajada"
                srcset="images/375x550.jpg 375w, 
                        images/425x550.jpg 425w, 
                        images/768x650.jpg 768w, 
                        images/512x719.jpg 900w, 
                        images/640x650.jpg 1400w," /> --}}
        <img class="col-12 col-sm-10 col-md-10 col-lg-12" srcset="images/325x550.jpg 320w,
                     images/375x550.jpg 375w,
                     images/425x550.jpg 425w,
                     images/768x650.jpg 768w,
                     images/512x719.jpg 900w,
                     images/640x650.jpg 1400w,"
                {{-- sizes="(max-width: 320px) 280px,
                       (max-width: 480px) 440px,
                       800px" --}}
                src="images/640x650.jpg" alt="Lampara" style="padding: unset;">                
    </div>

</section>
