<div class="header-bottom">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel @if ($title == 'Index Main Dashboard CS') menu-item-open menu-item-here @endif" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="/cs" class="menu-link ">
                            <span class="menu-text">Dashboard</span>
                            <span class="menu-desc">Ringkasan informasi</span>
                           
                        </a>
                      
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel @if ($title == 'Script CS') menu-item-open menu-item-here @endif" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="{{ route('script.index.cs')}}" class="menu-link ">
                            <span class="menu-text">Script</span>
                            <span class="menu-desc">Kelola script anda</span>
                         
                        </a>
                        
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel @if ($title == 'Profil Toko CS') menu-item-open menu-item-here @endif" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="{{ route('shop.perusahaan.cs')}}" class="menu-link ">
                            <span class="menu-text">Profil Toko</span>
                            <span class="menu-desc">Perbarui nama dan gambar toko</span>
                          
                        </a>
                       
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel @if ($title == 'Kamus') menu-item-open menu-item-here @endif" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="{{ route('show.kamus')}}" class="menu-link ">
                            <span class="menu-text">Kamus CS</span>
                            <span class="menu-desc">Template jawaban terbaik</span>
                           
                        </a>
                       
                    </li>
                   
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
    </div>
    <!--end::Container-->
</div>
