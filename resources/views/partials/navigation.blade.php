<ul class="navigation-menu {{ $var }}">
    <li><a href="/" class="sub-menu-item">Нүүр</a></li>

    <li class="has-submenu parent-menu-item">
        <a href="javascript:void(0)">Бидний тухай</a><span class="menu-arrow"></span>
        <ul class="submenu">
            <li><a href="/about" class="sub-menu-item">Танилцуулга</a></li>
            <li><a href="/about/history" class="sub-menu-item">Бидний түүх</a></li>
        </ul>
    </li>

    <!-- <li class="has-submenu parent-parent-menu-item">
        <a href="page-job-companies.html">Бизнес</a><span class="menu-arrow"></span>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li class="megamenu-head">Хүнс, шингэн хүнс</li>
                    <li><a href="page-job-company-khulij.html" class="sub-menu-item">Баясах Хульж ХХК</a></li>
                </ul>
            </li>

            <li>
                <ul>
                    <li class="megamenu-head">Хөргүүрийн бүтээгдэхүүн</li>
                    <li><a href="page-job-company-ashiddari.html" class="sub-menu-item">Ашид Дарь ХХК</a></li>
                </ul>
            </li>

            <li>
                <ul>
                    <li class="megamenu-head">Ахуйн бараа</li>
                    <li><a href="page-job-company-khulijgoo.html" class="sub-menu-item">Хульж Гоо ХХК</a></li>
                </ul>
            </li>
    
            <li>
                <ul>
                    <li class="megamenu-head">Банк бус санхүүгийн байгууллага</li>
                    <li><a href="page-job-company-trustfinance.html" class="sub-menu-item">Траст Финанс ББСБ</a></li>
                </ul>
            </li>
    
            <li>
                <ul>
                    <li class="megamenu-head">Сүлжээ дэлгүүр</li>
                    <li><a href="page-job-company-urgoo.html" class="sub-menu-item">Баясах Өргөө ХХК</a></li>
                </ul>
            </li>
        </ul>
    </li> -->

    <li class="has-submenu parent-parent-menu-item">
        <a href="javascript:void(0)">Брэнд</a><span class="menu-arrow"></span>
        <ul class="submenu megamenu">
            <li>
                <ul>
                    <li class="megamenu-head">Хүнс, шингэн хүнс</li>
                    @php $brand_khulij = App\Models\Brand::select('id','name','intro_en','intro_ru','intro_mn')->where('company_id','1')->get() @endphp
                    @foreach($brand_khulij as $brand)
                    <li><a href="/brands/{{ $brand->id }}" class="sub-menu-item">{{ $brand->name }}</a></li>
                    @endforeach
                </ul>
            </li>

            <li>
                <ul>
                    <li class="megamenu-head">Хөргүүрийн бүтээгдэхүүн</li>
                    <li><a href="#" class="sub-menu-item">Arla</a></li>
                    <li><a href="#" class="sub-menu-item">Lurpak</a></li>
                </ul>
            </li>

            <li>
                <ul>
                    <li class="megamenu-head">Ахуйн бараа</li>
                    <li><a href="#" class="sub-menu-item">Nevskaya Kosmetika</a></li>
                    <li><a href="#" class="sub-menu-item">Sarma</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li><a href="/sr" class="sub-menu-item">Нийгмийн хариуцлага</a></li>

    <li><a href="/hr" class="sub-menu-item">Хүний нөөц</a></li>

    <li><a href="/contact" class="sub-menu-item">Холбоо барих</a></li>
</ul>