<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Learn NewLife Webagence</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('assets/css/file-upload.css') }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset('assets/css/full-calendar.css') }}">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset('assets/css/editor-quill.css') }}">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-jvectormap-2.0.5.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <style>
        .sidebar-menu__link {
            padding: 8px 16px;
            border-radius: 8px;
            color: var(--gray-300);
            display: flex;
            align-items: center;
            gap: 8px;
            text-transform: none;
        }

        .btn {
            position: relative;
            border-radius: 6px;
            border: 1px solid transparent;
            font-weight: 500;
            font-family: var(--body-font);
            z-index: 1;
            line-height: 1;
            padding: 14px 20px;
            font-size: 15px;
            text-transform: none;
        }
    </style>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ============================ Sidebar Start ============================ -->

    <aside class="sidebar">
        <!-- sidebar close btn -->
        <button type="button"
            class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i
                class="ph ph-x"></i></button>
        <!-- sidebar close btn -->

        <a href="{{ route('dashboard') }}"
            class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo NewLife Webagence">
        </a>

        <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
            <div class="p-20 pt-10">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu__item">
                        <a href="{{ route('dashboard') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-squares-four"></i></span>
                            <span class="text">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item has-dropdown">
                        <a href="javascript:void(0)" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-graduation-cap"></i></span>
                            <span class="text">Nos formations</span>
                        </a>
                        <!-- Submenu start -->
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu__item">
                                <a href="{{ route('categorie.index') }}" class="sidebar-submenu__link"> Catégories </a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="{{ route('niveau.index') }}" class="sidebar-submenu__link"> Niveau de compétences </a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="#" class="sidebar-submenu__link"> Toutes les formations </a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="#" class="sidebar-submenu__link"> Créer une formation </a>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="students.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-users-three"></i></span>
                            <span class="text">Students</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="assignment.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-clipboard-text"></i></span>
                            <span class="text">Assignments</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="mentors.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-users"></i></span>
                            <span class="text">Mentors</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="resources.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-bookmarks"></i></span>
                            <span class="text">Resources</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="message.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-chats-teardrop"></i></span>
                            <span class="text">Messages</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="analytics.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-chart-bar"></i></span>
                            <span class="text">Analytics</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="event.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-calendar-dots"></i></span>
                            <span class="text">Events</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="library.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-books"></i></span>
                            <span class="text">Library</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="pricing-plan.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-coins"></i></span>
                            <span class="text">Pricing</span>
                        </a>
                    </li>

                    <li class="sidebar-menu__item">
                        <span
                            class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Settings</span>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="setting.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-gear"></i></span>
                            <span class="text">Account Settings</span>
                        </a>
                    </li>

                    <li class="sidebar-menu__item has-dropdown">
                        <a href="javascript:void(0)" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-shield-check"></i></span>
                            <span class="text">Authetication</span>
                        </a>
                        <!-- Submenu start -->
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu__item">
                                <a href="sign-in.html" class="sidebar-submenu__link">Sign In</a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="sign-up.html" class="sidebar-submenu__link">Sign Up</a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="forgot-password.html" class="sidebar-submenu__link">Forgot Password</a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="reset-password.html" class="sidebar-submenu__link">Reset Password</a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="verify-email.html" class="sidebar-submenu__link">Verify Email</a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="two-step-verification.html" class="sidebar-submenu__link">Two Step
                                    Verification</a>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>

                </ul>
            </div>

        </div>

    </aside>
    <!-- ============================ Sidebar End  ============================ -->

    <div class="dashboard-main-wrapper">
        <div class="top-navbar flex-between gap-16">

            <div class="flex-align gap-16">
                <!-- Toggle Button Start -->
                <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i
                        class="ph ph-list"></i></button>
                <!-- Toggle Button End -->

                <form action="#" class="w-350 d-sm-block d-none">
                    <div class="position-relative">
                        <button type="submit" class="input-icon text-xl d-flex text-gray-100 pointer-event-none"><i
                                class="ph ph-magnifying-glass"></i></button>
                        <input type="text"
                            class="form-control ps-40 h-40 border-transparent focus-border-main-600 bg-main-50 rounded-pill placeholder-15"
                            placeholder="Search...">
                    </div>
                </form>
            </div>

            <div class="flex-align gap-16">
                <div class="flex-align gap-8">

                </div>

                <!-- User Profile Start -->
                <div class="dropdown">
                    <button
                        class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="position-relative">
                            <img src="{{ asset(Auth::user()->avatar) }}" alt="Image"
                                class="h-32 w-32 rounded-circle">
                            <span
                                class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                        <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                            <div class="card-body">
                                <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                                    <img src="{{ asset(Auth::user()->avatar) }}" alt=""
                                        class="w-54 h-54 rounded-circle">
                                    <div class="">
                                        <h4 class="mb-0"> {{ Auth::user()->prenom }} </h4>
                                        <p class="fw-medium text-13 text-gray-200">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                                    <li class="mb-4">
                                        <a href="setting.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-gear"></i></span>
                                            <span class="text">Account Settings</span>
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="pricing-plan.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-chart-bar"></i></span>
                                            <span class="text">Upgrade Plan</span>
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="analytics.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-chart-line-up"></i></span>
                                            <span class="text">Daily Activity</span>
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="message.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-chats-teardrop"></i></span>
                                            <span class="text">Inbox</span>
                                        </a>
                                    </li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <li class="pt-8 border-top border-gray-100">
                                            <button
                                                class="py-12 text-15 px-20 hover-bg-danger-50 text-gray-300 hover-text-danger-600 rounded-8 flex-align gap-8 fw-medium text-15">
                                                <span class="text-2xl text-danger-600 d-flex"><i
                                                        class="ph ph-sign-out"></i></span>
                                                <span class="text">Se déconnecter</span>
                                            </button>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Profile Start -->

            </div>
        </div>


        <div class="dashboard-body">
            {{ $slot }}
        </div>

        <div class="dashboard-footer">
            <div class="flex-between flex-wrap gap-16">
                <p class="text-gray-300 text-13 fw-normal"> &copy; Copyright Edmate 2024, All Right Reserverd</p>
                <div class="flex-align flex-wrap gap-16">
                    <a href="#"
                        class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">License</a>
                    <a href="#"
                        class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">More
                        Themes</a>
                    <a href="#"
                        class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Documentation</a>
                    <a href="#"
                        class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Support</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets/js/boostrap.bundle.min.js') }}"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('assets/js/phosphor-icon.js') }}"></script>
    <!-- file upload -->
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
    <!-- file upload -->
    <script src="{{ asset('assets/js/plyr.js') }}"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset('assets/js/full-calendar.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/editor-quill.js') }}"></script>
    <!-- apex charts -->
    <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('assets/js/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('assets/js/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        function createChart(chartId, chartColor) {

            let currentYear = new Date().getFullYear();

            var options = {
                series: [{
                    name: 'series1',
                    data: [18, 25, 22, 40, 34, 55, 50, 60, 55, 65],
                }, ],
                chart: {
                    type: 'area',
                    width: 80,
                    height: 42,
                    sparkline: {
                        enabled: true // Remove whitespace
                    },

                    toolbar: {
                        show: false
                    },
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 1,
                    colors: [chartColor],
                    lineCap: 'round'
                },
                grid: {
                    show: true,
                    borderColor: 'transparent',
                    strokeDashArray: 0,
                    position: 'back',
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                    row: {
                        colors: undefined,
                        opacity: 0.5
                    },
                    column: {
                        colors: undefined,
                        opacity: 0.5
                    },
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    },
                },
                fill: {
                    type: 'gradient',
                    colors: [chartColor], // Set the starting color (top color) here
                    gradient: {
                        shade: 'light', // Gradient shading type
                        type: 'vertical', // Gradient direction (vertical)
                        shadeIntensity: 0.5, // Intensity of the gradient shading
                        gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                        inverseColors: false, // Do not invert colors
                        opacityFrom: .5, // Starting opacity
                        opacityTo: 0.3, // Ending opacity
                        stops: [0, 100],
                    },
                },
                // Customize the circle marker color on hover
                markers: {
                    colors: [chartColor],
                    strokeWidth: 2,
                    size: 0,
                    hover: {
                        size: 8
                    }
                },
                xaxis: {
                    labels: {
                        show: false
                    },
                    categories: [`Janvier ${currentYear}`, `Février ${currentYear}`, `Mars ${currentYear}`,
                        `Avril ${currentYear}`,
                        `Mai ${currentYear}`, `Juin ${currentYear}`, `Juillet ${currentYear}`,
                        `Août ${currentYear}`,
                        `Septembre ${currentYear}`, `Octobre ${currentYear}`, `Novembre ${currentYear}`,
                        `Décembre ${currentYear}`
                    ],
                    tooltip: {
                        enabled: false,
                    },
                },
                yaxis: {
                    labels: {
                        show: false
                    }
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
            chart.render();
        }

        // Call the function for each chart with the desired ID and color
        createChart('complete-course', '#2FB2AB');
        createChart('earned-certificate', '#27CFA7');
        createChart('course-progress', '#6142FF');
        createChart('community-support', '#FA902F');


        // =========================== Double Line Chart Start ===============================
        function createLineChart(chartId, chartColor) {
            var options = {
                series: [{
                        name: 'Study',
                        data: [8, 15, 9, 20, 10, 33, 13, 22, 8, 17, 10, 15],
                    },
                    {
                        name: 'Test',
                        data: [8, 24, 18, 40, 18, 48, 22, 38, 18, 30, 20, 28],
                    },
                ],
                chart: {
                    type: 'area',
                    width: '100%',
                    height: 300,
                    sparkline: {
                        enabled: false // Remove whitespace
                    },
                    toolbar: {
                        show: false
                    },
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                colors: ['#3D7FF9', chartColor], // Set the color of the series
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: 'smooth',
                    width: 1,
                    colors: ["#3D7FF9", chartColor],
                    lineCap: 'round',
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.9, // Decrease this value to reduce opacity
                        opacityTo: 0.2, // Decrease this value to reduce opacity
                        stops: [0, 100]
                    }
                },
                grid: {
                    show: true,
                    borderColor: '#E6E6E6',
                    strokeDashArray: 3,
                    position: 'back',
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: true
                        }
                    },
                    row: {
                        colors: undefined,
                        opacity: 0.5
                    },
                    column: {
                        colors: undefined,
                        opacity: 0.5
                    },
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    },
                },
                // Customize the circle marker color on hover
                markers: {
                    colors: ["#3D7FF9", chartColor],
                    strokeWidth: 3,
                    size: 0,
                    hover: {
                        size: 8
                    }
                },
                xaxis: {
                    labels: {
                        show: false
                    },
                    categories: [`Janvier`, `Février`, `Mars`, `Avril`, `Mai`, `Juin`, `Juillet`, `Août`, `Septembre`,
                        `Octobre`, `Novembre`, `Décembre`
                    ],
                    tooltip: {
                        enabled: false,
                    },
                    labels: {
                        formatter: function(value) {
                            return value;
                        },
                        style: {
                            fontSize: "14px"
                        }
                    },
                },
                yaxis: {
                    labels: {
                        formatter: function(value) {
                            return "$" + value + "Hr";
                        },
                        style: {
                            fontSize: "14px"
                        }
                    },
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
                legend: {
                    show: false,
                    position: 'top',
                    horizontalAlign: 'right',
                    offsetX: -10,
                    offsetY: -0
                }
            };

            var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
            chart.render();
        }
        createLineChart('doubleLineChart', '#27CFA7');
        // =========================== Double Line Chart End ===============================

        // ================================= Multiple Radial Bar Chart Start =============================
        var options = {
            series: [100, 60, 25],
            chart: {
                height: 172,
                type: 'radialBar',
            },
            colors: ['#3D7FF9', '#27CFA7', '#020203'],
            stroke: {
                lineCap: 'round',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '30%', // Adjust this value to control the bar width
                    },
                    dataLabels: {
                        name: {
                            fontSize: '16px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            formatter: function(w) {
                                return '82%'
                            }
                        }
                    }
                }
            },
            labels: ['Terminé', 'En cours', 'Pas commencé'],
        };

        var chart = new ApexCharts(document.querySelector("#radialMultipleBar"), options);
        chart.render();
        // ================================= Multiple Radial Bar Chart End =============================

        // ========================== Export Js Start ==============================
        document.getElementById('exportOptions').addEventListener('change', function() {
            const format = this.value;
            const table = document.getElementById('studentTable');
            let data = [];
            const headers = [];

            // Get the table headers
            table.querySelectorAll('thead th').forEach(th => {
                headers.push(th.innerText.trim());
            });

            // Get the table rows
            table.querySelectorAll('tbody tr').forEach(tr => {
                const row = {};
                tr.querySelectorAll('td').forEach((td, index) => {
                    row[headers[index]] = td.innerText.trim();
                });
                data.push(row);
            });

            if (format === 'csv') {
                downloadCSV(data);
            } else if (format === 'json') {
                downloadJSON(data);
            }
        });

        function downloadCSV(data) {
            const csv = data.map(row => Object.values(row).join(',')).join('\n');
            const blob = new Blob([csv], {
                type: 'text/csv'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'students.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }

        function downloadJSON(data) {
            const json = JSON.stringify(data, null, 2);
            const blob = new Blob([json], {
                type: 'application/json'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'students.json';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
        // ========================== Export Js End ==============================
    </script>

</body>

</html>
