<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Laporin Aja - <?= $title ?></title>
    <link rel="shortcut icon" href="/assets/img/logo_64x64.png" type="image/x-icon">

    <link rel="stylesheet" href="/assets/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="/vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="/vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="/vendors/morris/morris.css">

    <link rel="stylesheet" href="/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="/assets/css/metisMenu.css">

    <link rel="stylesheet" href="/assets/css/style1.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/colors/default.css" id="colorSkinCSS">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
</head>

<body class="crm_body_bg">



    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="/assets/img/logo_1.png" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">

                    <img src="/assets/img/menu-icon/1.svg" alt>
                    <span>Dashboard</span>
                </a>
                <ul>
                    <li><a class="active" href="index.html">Classic</a></li>
                    <li><a href="index_2.html">Minimal</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="/admin/pengaduan/" aria-expanded="false">
                    <img src="/assets/img/menu-icon/2.svg" alt>
                    <span>Pengaduan</span>
                </a>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/assets/img/menu-icon/6.svg" alt>
                    <span>Manage Account</span>
                </a>
                <ul>
                    <li><a href="#">Manage Admin / Staff account</a>
                    </li>
                    <li><a href="#">Manage Masyarakat Account</a>
                    </li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="/admin/access_menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-universal-access" viewBox="0 0 16 16">
                        <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9V5.5Z"/>
                    </svg>
                    <span>Manage Access</span>
                </a>
            </li>
        </ul>
    </nav>


    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="/assets/img/icon/icon_search.svg" alt> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="/assets/img/icon/bell.svg" alt> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/assets/img/icon/msg.svg" alt> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="/assets/img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <p>Welcome Admin!</p>
                                    <h5>Travor James</h5>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile <i class="ti-user"></i></a>
                                        <a href="#">Settings <i class="ti-settings"></i></a>
                                        <a href="/auth/logout">Log Out <i class="ti-shift-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->renderSection('content') ?>

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by<a href="#"> Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="/assets/js/jquery1-3.4.1.min.js"></script>

    <script src="/assets/js/popper1.min.js"></script>

    <script src="/assets/js/bootstrap1.min.js"></script>

    <script src="/assets/js/metisMenu.js"></script>

    <script src="/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="/vendors/chartlist/Chart.min.js"></script>

    <script src="/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="/vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="/vendors/gijgo/gijgo.min.js"></script>

    <script src="/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="/vendors/datatable/js/jszip.min.js"></script>
    <script src="/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="/vendors/datatable/js/buttons.print.min.js"></script>
    <script src="/assets/js/chart.min.js"></script>

    <script src="/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="/vendors/tagsinput/tagsinput.js"></script>

    <script src="/vendors/text_editor/summernote-bs4.js"></script>
    <script src="/vendors/apex_chart/apexcharts.js"></script>

    <script src="/assets/js/custom.js"></script>

    <script src="/assets/js/active_chart.js"></script>
    <script src="/vendors/apex_chart/radial_active.js"></script>
    <script src="/vendors/apex_chart/stackbar.js"></script>
    <script src="/vendors/apex_chart/area_chart.js"></script>

    <script src="/vendors/apex_chart/bar_active_1.js"></script>
    <script src="/vendors/chartjs/chartjs_active.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>