<footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">    
    <div class="container relative">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="/" class="text-[22px] focus:outline-none">
                                <img src="{{ asset('src/assets/images/khulij-logo-light.png') }}" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">Баясах Хульж ХХК байр, Намянжүгийн гудамж, 14-р хороо, Баянзүрх дүүрэг, Улаанбаатар хот, Монгол Улс</p>
                            <ul class="list-none mt-6">
                                <li class="inline"><a href="https://www.facebook.com/bayasakh.khulij" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                <li class="inline"><a href="https://www.instagram.com/bayasakh.khulij/" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                <li class="inline"><a href="https://www.youtube.com/channel/UCmAIiojWph9rDZ29HnBikvg" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i class="uil uil-youtube align-middle" title="youtube"></i></a></li>
                                <li class="inline"><a href="mailto:info@bayasakh.com" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                <li class="inline"><a href="tel:+97670001010" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i class="uil uil-phone align-middle" title="phone"></i></a></li>
                                <li class="inline"><a href="https://www.zangia.mn/company/BAYASAKH-KHULIJ-LLC" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i class="uil uil-file align-middle" title="zangia"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->
                
                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Компани</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="/about" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Танилцуулга</a></li>
                                <li class="mt-[10px]"><a href="/about/history" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Түүх</a></li>
                            </ul>
                        </div><!--end col-->
                
                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Хэрэгтэй холбоос</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="/hr" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Хүний нөөц</a></li>
                                <li class="mt-[10px]"><a href="/hr/jobs" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Нээлттэй ажлын байр</a></li>
                                <li class="mt-[10px]"><a href="/contact" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Холбоо барих</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold"></h5>
                            <p class="mt-6">Шинэ мэдээллүүдийг цаг алдалгүй хүлээн авах.</p>
                            <form>
                                <div class="grid grid-cols-1">
                                    <div class="my-3">
                                        <label class="form-label">Э-мэйл хаягаа оруулна уу <span class="text-red-600">*</span></label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                            <input type="email" class="form-input ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0 placeholder:text-gray-200" placeholder="Э-мэйл" name="email" required="" autocomplete="off">
                                        </div>
                                    </div>
                                
                                    <button type="submit" id="submitsubscribe" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md">Бүртгүүлэх</button>
                                </div>
                            </form>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container relative text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="md:text-start text-center">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> БАЯСАХ ХУЛЬЖ ХХК.</p>
                </div>

                <!-- <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                    <li class="inline"><a href="#"><img src="assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
                    <li class="inline"><a href="#"><img src="assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
                    <li class="inline"><a href="#"><img src="assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                    <li class="inline"><a href="#"><img src="assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                    <li class="inline"><a href="#"><img src="assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
                </ul> -->
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer>