<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
        data-kt-scroll-offset="0">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
            id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Menu</span>
                </div>
            </div>
            <div class="menu-item menu-item-submenu menu-item-rel @if ($title == 'Index Main Dashboard' || $title=='Index SA' || $title== 'Index Main Dashboard CS') menu-item-open menu-item-here @endif">
                <a class="menu-link @if($title == 'Index Main Dashboard' || $title=='Index SA' || $title== 'Index Main Dashboard CS') active @endif" @if($title != 'Index Main Dashboard' && $title!='Index SA' && $title!= 'Index Main Dashboard CS') href="@if (Auth::user()->role_id == 2) /manager @elseif(Auth::user()->role_id ==1) /sa @else /cs @endif @endif">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title" style="font-size:15px">Dashboard</span>
                </a>
            </div>
            @if(Auth::user()->role_id == 1)
                <div data-kt-menu-trigger="click" class="menu-item @if ($title == 'Script SA' || $title == 'KATEGORI' || $title == 'TIPE') here show menu-accordion @else menu-accordion @endif">
                    <span class="menu-link" >
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                                        fill="black" />
                                    <path
                                        d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="font-size:15px">Script</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item ">
                            <a class="menu-link @if($title == 'Script SA') active @endif" href="/script/result">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title" style="font-size:15px">Import Script</span>
                            </a>
                        </div>
                        <div class="menu-item ">
                            <a class="menu-link @if($title == 'Script Campaign SA') active @endif" href="/script/campaign">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title" style="font-size:15px">Import Script Campaign</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if($title == 'KATEGORI') active @endif" href="/index/category">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title" style="font-size:15px">Kategori</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if($title == 'TIPE') active @endif" href="/index/type">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title" style="font-size:15px">Tipe</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item @if ($title == 'Data CS Manager') menu-item-open menu-item-here @endif">
                    <a class="menu-link @if($title == 'Data CS Manager' || $title == 'Details CS Manager') active @endif" @if($title != 'Data CS Manager') href="/user" @endif >
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M13.4819 11.6557C10.2909 11.6557 7.7041 9.06885 7.7041 5.87787C7.7041 2.6869 10.2909 0.100098 13.4819 0.100098C16.6729 0.100098 19.2597 2.6869 19.2597 5.87787C19.2597 9.06885 16.6729 11.6557 13.4819 11.6557Z" fill="#9F9FB9"/>
                                    <path d="M0.000941322 24.9435C0.560818 18.0496 6.1561 14.5447 12.9759 14.5447C19.8918 14.5447 25.5737 17.8571 25.997 24.9447C26.0138 25.227 25.997 26.1002 24.9119 26.1002C19.5594 26.1002 11.6057 26.1002 1.05084 26.1002C0.688584 26.1002 -0.0295559 25.319 0.000941322 24.9435Z" fill="#9F9FB9"/>
                                    </svg>

                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="font-size:15px">User</span>
                    </a>
                </div>
            @else
                {{-- <div class="menu-item menu-item-submenu menu-item-rel @if ($title == 'Script Manager' || $title=='Script SA' || $title=='Script CS') menu-item-open menu-item-here @endif">
                    <a class="menu-link @if($title == 'Index Script CS' ||$title == 'Index Script Manager' ||$title == 'Script Manager' || $title=='Script SA' || $title=='Script CS') active @endif"
                    @if($title != 'Index Script Manager' && $title!='Script SA' && $title!='Index Script CS') href="@if (Auth::user()->role_id == 2) {{ route('script.index')}}  @elseif(Auth::user()->role_id ==1) {{ route('script.index.sa')}}  @else {{ route('script.index.cs')}}  @endif @endif">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                                        fill="black" />
                                    <path
                                        d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="font-size:15px">Script</span>
                    </a>
                </div> --}}

                <div data-kt-menu-trigger="click" class="menu-item @if ($title == 'List Campaign' || $title == "Create Campaign" || $title == 'Index Script CS' ||$title == 'Index Script Manager' ||$title == 'Script Manager' || $title=='Script SA' || $title=='Script CS') here show menu-accordion @else menu-accordion @endif">
                    <span class="menu-link" >
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M7.56482 2.58398H17.9024C18.2571 2.58398 18.6003 2.70967 18.8711 2.93872L25.3014 8.37765C25.6383 8.66266 25.8327 9.08159 25.8327 9.52291V25.9416C25.8327 28.2544 25.8063 28.4173 23.4339 28.4173H7.56482C5.19243 28.4173 5.16602 28.2544 5.16602 25.9416V5.05968C5.16602 2.7469 5.19243 2.58398 7.56482 2.58398Z" fill="#B5B5C3"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2089 18.0827L11.6255 18.0827C10.9122 18.0827 10.3339 17.5044 10.3339 16.791C10.3339 16.0776 10.9122 15.4993 11.6255 15.4993L14.2089 15.4993L14.2089 12.916C14.2089 12.2026 14.7872 11.6243 15.5005 11.6244C16.2139 11.6243 16.7922 12.2026 16.7922 12.916L16.7922 15.4993L19.3755 15.4993C20.0889 15.4993 20.6672 16.0776 20.6672 16.791C20.6672 17.5044 20.0889 18.0827 19.3755 18.0827L16.7922 18.0827L16.7922 20.666C16.7922 21.3794 16.2139 21.9577 15.5005 21.9577C14.7872 21.9577 14.2089 21.3794 14.2089 20.666L14.2089 18.0827Z" fill="#B5B5C3"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="font-size:15px">Script</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item ">
                            <a  @if($title == 'Index Script CS' ||$title == 'Index Script Manager' ||$title == 'Script Manager' || $title=='Script SA' || $title=='Script CS') class="menu-link active" @else class="menu-link" @endif
                            @if($title != 'Index Script Manager' && $title!='Script SA' && $title!='Index Script CS') href="@if (Auth::user()->role_id == 2) {{ route('script.index')}} @else {{ route('script.index.cs')}}  @endif @endif"
                            >
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title" style="font-size:15px">Script Chat</span>
                            </a>
                        </div>
                        @if(Auth::user()->id == 150 || Auth::user()->id == 402 )
                            <div class="menu-item ">
                                <a class="menu-link @if($title == 'List Campaign' || $title == "Create Campaign") active @endif" @if($title != "List Campaign") href="/campaign/list" @endif>
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title" style="font-size:15px">Script Campaign</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
            <div class="menu-item @if ($title == 'Kamus') menu-item-open menu-item-here @endif">
                <a class="menu-link @if($title == 'Kamus') active @endif" @if(Auth::user()->role_id == 1) href="/sa/kamus"@else href="/kamus" @endif >
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                    fill="black" />
                                <path
                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title" style="font-size:15px">Kamus CS</span>
                </a>
            </div>
            {{-- @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                <div data-kt-menu-trigger="click" class="menu-item @if ($title == 'Campaign' || $title == 'Contact') here show menu-accordion @else menu-accordion @endif">
                    <span class="menu-link" >
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.25 14.2087V16.792H28.4167V14.2087H23.25ZM20.6667 22.7466C21.9067 23.6637 23.5213 24.8778 24.8 25.8337C25.3167 25.1491 25.8334 24.4516 26.35 23.767C25.0713 22.8112 23.4567 21.597 22.2167 20.667C21.7 21.3645 21.1834 22.062 20.6667 22.7466ZM26.35 7.23366C25.8334 6.54908 25.3167 5.85158 24.8 5.16699C23.5213 6.12283 21.9067 7.33699 20.6667 8.26699C21.1834 8.95158 21.7 9.64908 22.2167 10.3337C23.4567 9.40366 25.0713 8.20241 26.35 7.23366ZM5.16671 11.6253C3.74587 11.6253 2.58337 12.7878 2.58337 14.2087V16.792C2.58337 18.2128 3.74587 19.3753 5.16671 19.3753H6.45837V24.542H9.04171V19.3753H10.3334L16.7917 23.2503V7.75033L10.3334 11.6253H5.16671ZM11.6638 13.8341L14.2084 12.3099V18.6907L11.6638 17.1666L11.0438 16.792H5.16671V14.2087H11.0438L11.6638 13.8341ZM20.0209 15.5003C20.0209 13.7824 19.2717 12.2324 18.0834 11.1732V19.8145C19.2717 18.7682 20.0209 17.2182 20.0209 15.5003Z" fill="#00AEFF"/>
                                    <path opacity="0.3" d="M11.6637 13.8337L14.2083 12.3096V18.6904L11.6637 17.1662L11.0437 16.7917H5.16663V14.2083H11.0437L11.6637 13.8337Z" fill="#00AEFF"/>
                                    </svg>

                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="font-size:15px">Campaign</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item ">
                            @if(Auth::user()->role_id == 2)
                                <a class="menu-link @if($title == 'Contact') active @endif" href="/campaign/contact">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title" style="font-size:15px">Contact Management</span>
                                </a>
                            @elseif(Auth::user()->role_id == 3)
                                <a class="menu-link @if($title == 'Contact') active @endif" href="/cs/campaign/contact">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title" style="font-size:15px">Contact Management</span>
                                </a>
                            @endif
                        </div>
                        <div class="menu-item">
                            @if(Auth::user()->role_id == 2)
                                <a class="menu-link @if($title == 'Campaign') active @endif" href="/campaign">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title" style="font-size:15px">Campaign</span>
                                </a>
                            @elseif(Auth::user()->role_id == 3)
                                <a class="menu-link @if($title == 'Campaign') active @endif" href="/cs/campaign">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title" style="font-size:15px">Campaign</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif --}}
            @if(Auth::user()->id == 150 || Auth::user()->id == 402)
                @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                    <div class="menu-item @if ($title == 'Contact') menu-item-open menu-item-here @endif">
                        <a class="menu-link @if($title == 'Contact') active @endif" @if($title != 'Contact') href="/campaign/contact" @endif >
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 17.9998H22V13.9998H24C24.6 13.9998 25 14.3998 25 14.9998V16.9998C25 17.5998 24.6 17.9998 24 17.9998ZM25 22.9998V20.9998C25 20.3998 24.6 19.9998 24 19.9998H22V23.9998H24C24.6 23.9998 25 23.5998 25 22.9998ZM25 10.9998V8.99976C25 8.39976 24.6 7.99976 24 7.99976H22V11.9998H24C24.6 11.9998 25 11.5998 25 10.9998Z" fill="#B5B5C3"/>
                                        <path opacity="0.3" d="M21 26H7C6.4 26 6 25.6 6 25V7C6 6.4 6.4 6 7 6H21C21.6 6 22 6.4 22 7V25C22 25.6 21.6 26 21 26ZM14 11C12.9 11 12 11.9 12 13C12 14.1 12.9 15 14 15C15.1 15 16 14.1 16 13C16 11.9 15.1 11 14 11ZM17.3 20C18 20 18.5 19.3 18.3 18.7C17.7 17.2 16 16 14.1 16C12.1 16 10.5 17.1 9.89999 18.7C9.59999 19.3 10.2 20 11.4 20H17.3Z" fill="#B5B5C3"/>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title" style="font-size:15px">Contact Management</span>
                        </a>
                    </div>
                @endif
                @if(Auth::user()->role_id == 2)
                    <div class="menu-item @if ($title == 'Campaign') menu-item-open menu-item-here @endif">
                        <a class="menu-link @if($title == 'Campaign') active @endif" @if($title != 'Campaign') href="/campaign" @endif >
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.2497 14.2084V16.7917H28.4163V14.2084H23.2497ZM20.6663 22.7463C21.9063 23.6634 23.5209 24.8776 24.7997 25.8334C25.3163 25.1488 25.833 24.4513 26.3497 23.7667C25.0709 22.8109 23.4563 21.5967 22.2163 20.6667C21.6997 21.3642 21.183 22.0617 20.6663 22.7463ZM26.3497 7.23341C25.833 6.54883 25.3163 5.85133 24.7997 5.16675C23.5209 6.12258 21.9063 7.33675 20.6663 8.26675C21.183 8.95133 21.6997 9.64883 22.2163 10.3334C23.4563 9.40341 25.0709 8.20216 26.3497 7.23341ZM5.16634 11.6251C3.74551 11.6251 2.58301 12.7876 2.58301 14.2084V16.7917C2.58301 18.2126 3.74551 19.3751 5.16634 19.3751H6.45801V24.5417H9.04134V19.3751H10.333L16.7913 23.2501V7.75008L10.333 11.6251H5.16634ZM11.6634 13.8338L14.208 12.3097V18.6905L11.6634 17.1663L11.0434 16.7917H5.16634V14.2084H11.0434L11.6634 13.8338ZM20.0205 15.5001C20.0205 13.7822 19.2713 12.2322 18.083 11.173V19.8142C19.2713 18.768 20.0205 17.218 20.0205 15.5001Z" fill="#B5B5C3"/>
                                        <path opacity="0.3" d="M11.6641 13.8337L14.2087 12.3096V18.6904L11.6641 17.1662L11.0441 16.7917H5.16699V14.2083H11.0441L11.6641 13.8337V13.8337Z" fill="#B5B5C3"/>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title" style="font-size:15px">Campaign</span>
                        </a>
                    </div>
                    <div class="menu-item @if ($title == 'Rotator CS') menu-item-open menu-item-here @endif">
                        <a class="menu-link @if($title == 'Rotator CS' || $title == 'Buat Rotator' || $title == 'Edit Rotator' || $title == 'Detail CS') active @endif" @if($title != 'Rotator CS') href="/rotate/cs" @endif >
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.3967 16.2084V16.7188C24.3967 19.2709 22.355 21.3126 19.8029 21.3126H8.67568V19.2709H19.8029C21.232 19.2709 22.355 18.148 22.355 16.7188V16.2084C22.355 15.5959 22.7633 15.1876 23.3758 15.1876C23.9883 15.1876 24.3967 15.5959 24.3967 16.2084ZM21.7425 9.0625H10.6153C8.06317 9.0625 6.02148 11.1042 6.02148 13.6563V14.1667C6.02148 14.7792 6.42982 15.1876 7.04233 15.1876C7.65483 15.1876 8.06317 14.7792 8.06317 14.1667V13.6563C8.06317 12.2271 9.1861 11.1042 10.6153 11.1042H21.7425V9.0625Z" fill="#00AEFF"/>
                                        <path opacity="0.3" d="M25.1106 9.36877C25.5189 9.77711 25.5189 10.3896 25.1106 10.798L21.7418 14.1667V6L25.1106 9.36877ZM5.30625 19.5772C4.89792 19.9855 4.89792 20.5981 5.30625 21.0064L8.67504 24.3752V16.2084L5.30625 19.5772Z" fill="#00AEFF"/>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title" style="font-size:15px">Rotaror CS</span>
                        </a>
                    </div>
                @endif
            @endif
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Akun</span>
                    </div>
                </div>
            <div class="menu-item">
                <a class="menu-link @if($title == 'Index Profile Dashboard' || $title == 'Edit Profile Dashboard') active @endif" @if($title != 'Index Profile Dashboard') href="/profile" @endif>
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M28.5455 14.8541V16.2749C28.5455 17.0499 28.0288 17.5666 27.383 17.6958L25.7038 17.9541C25.4455 18.9874 25.058 20.0208 24.4122 20.9249L25.4455 22.3456C25.833 22.8623 25.833 23.7665 25.3163 24.2831L24.283 25.3166C23.7663 25.8333 22.9913 25.8333 22.3455 25.4458L20.9247 24.4124C20.0205 24.9291 18.9872 25.4458 17.9538 25.7041L17.6955 27.3833C17.5663 28.0291 16.9205 28.5458 16.2747 28.5458H14.8538C14.0788 28.5458 13.5622 28.0291 13.433 27.3833L13.1747 25.7041C12.1413 25.4458 11.108 25.0583 10.2038 24.4124L8.78301 25.4458C8.26634 25.8333 7.36217 25.8333 6.84551 25.3166L5.81217 24.2831C5.29551 23.7665 5.29551 22.9915 5.68301 22.3456L6.71634 20.9249C6.19967 20.0208 5.68301 18.9874 5.42467 17.9541L3.74551 17.6958C3.09967 17.5666 2.58301 16.9208 2.58301 16.2749V14.8541C2.58301 14.0791 3.09967 13.5624 3.74551 13.4333L5.42467 13.1749C5.68301 12.1415 6.07051 11.1083 6.71634 10.2041L5.68301 8.78316C5.29551 8.26649 5.29551 7.36233 5.81217 6.84566L6.84551 5.81242C7.36217 5.29575 8.13717 5.29578 8.78301 5.68328L10.2038 6.71652C11.108 6.19985 12.1413 5.68319 13.1747 5.42485L13.433 3.74578C13.5622 3.09994 14.208 2.58325 14.8538 2.58325H16.2747C17.0497 2.58325 17.5663 3.09994 17.6955 3.74578L17.9538 5.42485C18.9872 5.68319 20.0205 6.07069 20.9247 6.71652L22.3455 5.68328C22.8622 5.29578 23.7663 5.29575 24.283 5.81242L25.3163 6.84566C25.833 7.36233 25.833 8.13733 25.4455 8.78316L24.4122 10.2041C24.9288 11.1083 25.4455 12.1415 25.7038 13.1749L27.383 13.4333C28.0288 13.5624 28.5455 14.2083 28.5455 14.8541ZM15.6288 11.1082C13.1747 11.1082 11.108 13.1749 11.108 15.6291C11.108 18.0833 13.1747 20.1499 15.6288 20.1499C18.083 20.1499 20.1497 18.0833 20.1497 15.6291C20.1497 13.1749 18.083 11.1082 15.6288 11.1082Z" fill="#00AEFF"/>
                                <path d="M22.0876 15.6293C22.0876 19.2459 19.2459 22.0876 15.6292 22.0876C12.0126 22.0876 9.1709 19.2459 9.1709 15.6293C9.1709 12.0126 12.0126 9.1709 15.6292 9.1709C19.2459 9.1709 22.0876 12.0126 22.0876 15.6293ZM15.6292 13.0459C14.2084 13.0459 13.0459 14.2084 13.0459 15.6293C13.0459 17.0501 14.2084 18.2126 15.6292 18.2126C17.0501 18.2126 18.2126 17.0501 18.2126 15.6293C18.2126 14.2084 17.0501 13.0459 15.6292 13.0459Z" fill="#00AEFF"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title" style="font-size:15px">Setting</span>
                </a>
            </div>
            @if(Auth::user()->role_id == 2)
                <div class="menu-item">
                    <a class="menu-link @if($title == 'Billing Dashboard') active @endif" href="/billing">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.15" d="M27.125 15.5C27.125 21.9203 21.9203 27.125 15.5 27.125C9.07969 27.125 3.875 21.9203 3.875 15.5C3.875 9.07969 9.07969 3.875 15.5 3.875C21.9203 3.875 27.125 9.07969 27.125 15.5Z" fill="#B5B5C3"/>
                                    <path d="M16.25 7.75C16.25 7.33579 15.9142 7 15.5 7C15.0858 7 14.75 7.33579 14.75 7.75H16.25ZM14.75 10.3333C14.75 10.7475 15.0858 11.0833 15.5 11.0833C15.9142 11.0833 16.25 10.7475 16.25 10.3333H14.75ZM16.25 20.6667C16.25 20.2525 15.9142 19.9167 15.5 19.9167C15.0858 19.9167 14.75 20.2525 14.75 20.6667H16.25ZM14.75 23.25C14.75 23.6642 15.0858 24 15.5 24C15.9142 24 16.25 23.6642 16.25 23.25H14.75ZM19.375 11.0833C19.7892 11.0833 20.125 10.7475 20.125 10.3333C20.125 9.91912 19.7892 9.58333 19.375 9.58333V11.0833ZM14.2083 10.3333V9.58333V10.3333ZM16.7917 20.6667V19.9167V20.6667ZM11.625 19.9167C11.2108 19.9167 10.875 20.2525 10.875 20.6667C10.875 21.0809 11.2108 21.4167 11.625 21.4167V19.9167ZM16.7917 15.5V14.75V15.5ZM14.2083 15.5V14.75V15.5ZM13.2197 10.53L12.9327 9.83707L13.2197 10.53ZM11.8216 11.9281L11.1287 11.6411L11.8216 11.9281ZM11.8216 13.9053L11.1287 14.1923L11.8216 13.9053ZM12.3816 14.7434L12.912 14.213L12.3816 14.7434ZM13.2197 15.3034L12.9327 15.9963L13.2197 15.3034ZM17.7803 20.47L18.0673 21.1629L17.7803 20.47ZM18.6184 19.91L18.088 19.3797L18.6184 19.91ZM19.1784 19.0719L19.8713 19.3589L19.1784 19.0719ZM19.1784 17.0947L19.8713 16.8077L19.1784 17.0947ZM18.6184 16.2566L18.088 16.787L18.6184 16.2566ZM17.7803 15.6966L18.0673 15.0037L17.7803 15.6966ZM26.375 15.5C26.375 21.5061 21.5061 26.375 15.5 26.375V27.875C22.3345 27.875 27.875 22.3345 27.875 15.5H26.375ZM15.5 26.375C9.4939 26.375 4.625 21.5061 4.625 15.5H3.125C3.125 22.3345 8.66548 27.875 15.5 27.875V26.375ZM4.625 15.5C4.625 9.4939 9.4939 4.625 15.5 4.625V3.125C8.66548 3.125 3.125 8.66548 3.125 15.5H4.625ZM15.5 4.625C21.5061 4.625 26.375 9.4939 26.375 15.5H27.875C27.875 8.66548 22.3345 3.125 15.5 3.125V4.625ZM14.75 7.75V10.3333H16.25V7.75H14.75ZM14.75 20.6667V23.25H16.25V20.6667H14.75ZM19.375 9.58333H14.2083V11.0833H19.375V9.58333ZM16.7917 19.9167H11.625V21.4167H16.7917V19.9167ZM16.7917 14.75H14.2083V16.25H16.7917V14.75ZM14.2083 9.58333C13.7706 9.58333 13.3371 9.66955 12.9327 9.83707L13.5067 11.2229C13.7292 11.1308 13.9676 11.0833 14.2083 11.0833V9.58333ZM12.9327 9.83707C12.5283 10.0046 12.1608 10.2501 11.8513 10.5596L12.912 11.6203C13.0822 11.4501 13.2843 11.315 13.5067 11.2229L12.9327 9.83707ZM11.8513 10.5596C11.5418 10.8692 11.2963 11.2366 11.1287 11.6411L12.5146 12.2151C12.6067 11.9927 12.7417 11.7905 12.912 11.6203L11.8513 10.5596ZM11.1287 11.6411C10.9612 12.0455 10.875 12.4789 10.875 12.9167H12.375C12.375 12.6759 12.4224 12.4375 12.5146 12.2151L11.1287 11.6411ZM10.875 12.9167C10.875 13.3544 10.9612 13.7879 11.1287 14.1923L12.5146 13.6183C12.4224 13.3958 12.375 13.1574 12.375 12.9167H10.875ZM11.1287 14.1923C11.2963 14.5967 11.5418 14.9642 11.8513 15.2737L12.912 14.213C12.7417 14.0428 12.6067 13.8407 12.5146 13.6183L11.1287 14.1923ZM11.8513 15.2737C12.1608 15.5832 12.5283 15.8287 12.9327 15.9963L13.5067 14.6104C13.2843 14.5183 13.0822 14.3833 12.912 14.213L11.8513 15.2737ZM12.9327 15.9963C13.3371 16.1638 13.7706 16.25 14.2083 16.25V14.75C13.9676 14.75 13.7292 14.7026 13.5067 14.6104L12.9327 15.9963ZM16.7917 21.4167C17.2294 21.4167 17.6629 21.3304 18.0673 21.1629L17.4933 19.7771C17.2708 19.8692 17.0324 19.9167 16.7917 19.9167V21.4167ZM18.0673 21.1629C18.4717 20.9954 18.8392 20.7499 19.1487 20.4404L18.088 19.3797C17.9178 19.5499 17.7157 19.685 17.4933 19.7771L18.0673 21.1629ZM19.1487 20.4404C19.4582 20.1308 19.7037 19.7634 19.8713 19.3589L18.4854 18.7849C18.3933 19.0073 18.2583 19.2095 18.088 19.3797L19.1487 20.4404ZM19.8713 19.3589C20.0388 18.9545 20.125 18.5211 20.125 18.0833H18.625C18.625 18.3241 18.5776 18.5625 18.4854 18.7849L19.8713 19.3589ZM20.125 18.0833C20.125 17.6456 20.0388 17.2121 19.8713 16.8077L18.4854 17.3817C18.5776 17.6042 18.625 17.8426 18.625 18.0833H20.125ZM19.8713 16.8077C19.7037 16.4033 19.4582 16.0358 19.1487 15.7263L18.088 16.787C18.2583 16.9572 18.3933 17.1593 18.4854 17.3817L19.8713 16.8077ZM19.1487 15.7263C18.8392 15.4168 18.4717 15.1712 18.0673 15.0037L17.4933 16.3896C17.7157 16.4817 17.9178 16.6167 18.088 16.787L19.1487 15.7263ZM18.0673 15.0037C17.6629 14.8362 17.2294 14.75 16.7917 14.75V16.25C17.0324 16.25 17.2708 16.2974 17.4933 16.3896L18.0673 15.0037Z" fill="#B5B5C3"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="font-size:15px">Billing</span>
                    </a>
                </div>
            @endif
            <div class="menu-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <a href="{{ route('logout') }}"  class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit(); ">
                    <span class="menu-icon" >
                        <i class="fas fa-sign-out-alt" style="color: red; padding-left:0.35rem"></i>
                    </span>
                    <span style="color: red; font-size:15px" class="menu-title" >Keluar</span>
                </a>
                  </form>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside menu-->


<!--begin::Footer-->
<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
    <a href="#" class="btn btn-custom btn-primary w-100 disabled">
        <span class="btn-label">
            @if (Auth::user()->role_id == 1)
                Super Admin
            @elseif (Auth::user()->role_id == 2)
                CS Manager
            @else
                Customer Service
            @endif
        </span>
        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
        <span class="svg-icon btn-icon svg-icon-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3"
                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                    fill="black" />
                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </a>
</div>
<!--end::Footer-->
