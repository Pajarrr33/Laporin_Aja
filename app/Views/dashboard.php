<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Laporin Aja </title>
    <link rel="icon" href="/assets/img/logo.png" type="image/png">

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
                <ul>
                    <li><a href="/admin/pengaduan/">List Pengaduan</a></li>
                    <li><a href="resister.html">Tambah Pengaduan</a></li>
                    <li><a href="forgot_pass.html">Update Pengaduan</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/assets/img/menu-icon/3.svg" alt>
                    <span>Tanggapan</span>
                </a>
                <ul>
                    <li><a href="mail_box.html">List Tanggapan</a></li>
                    <li><a href="chat.html">Tambah Tanggapan</a></li>
                    <li><a href="faq.html">Update Tanggapan</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="/assets/img/menu-icon/6.svg" alt>
                    <span>Manage Account</span>
                </a>
                <ul>
                    <li><a href="#">Manage Admin / Staff account</a>
                        <ul>
                            <li><a href="buttons.html">List Account</a></li>
                            <li><a href="/admin/tambahakun">Tambah akun</a></li>
                            <li><a href="Badges.html">Update Akun</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Manage Masyarakat Account</a>
                        <ul>
                            <li><a href="notification.html">List Account</a></li>
                            <li><a href="progress.html">Tambah Akun</a></li>
                            <li><a href="carousel.html">Update Akun</a></li>
                        </ul>
                    </li>
                </ul>
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
                                        <a href="#">Log Out <i class="ti-shift-left"></i></a>
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

</body>

</html>