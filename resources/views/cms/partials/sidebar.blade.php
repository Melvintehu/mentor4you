
<!-- Aside Start-->
<aside class="left-panel">

    <!-- brand -->
    <div class="logo">
         <a href="/cms" class="logo-expanded">
                    
                    <span class="nav-label">CMS MENTOR4YOU </span>
                </a>
    </div>
    <!-- / brand -->

    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">

            <li class="has-submenu "><a href="#"><i class="ion-document"></i> <span
                            class="nav-label">Pagina beheer</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/pages") }}"><i class="ion-grid"></i> Overzicht</a></li>
                    <li><a href="{{ URL::to("cms/pages/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>
                    <li><strong><a href="#">Secties</a></strong></li>
                    <li><a href="{{ URL::to("cms/pageSections") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/pageSections/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>

                </ul>
            </li>
           

        

        </ul>
    </nav>

</aside>
<!-- Aside Ends-->