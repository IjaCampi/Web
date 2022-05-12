<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* reservation/index.html.twig */
class __TwigTemplate_d795d469b8686a15041dd98f1a812263a5368bf920e1696aeb04ebf008454b62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\" class=\"js\">
<!-- Mirrored from dashlite.net/demo1/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Apr 2022 15:47:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->

<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"Softnio\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\"
          content=\"A powerful and conceptual apps base dashboard template that especially build for developers and programmers.\">
    <link rel=\"shortcut icon\" href=\"../images/favicon.png\">
    <title>Dashboard | CRM | DashLite Admin Template</title>
    <link rel=\"stylesheet\" href=\"../assets/css/dashlite6e0e.css?ver=3.0.0\">
    <link id=\"skin-default\" rel=\"stylesheet\" href=\"../assets/css/theme6e0e.css?ver=3.0.0\">
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-91615293-4\">

    </script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-91615293-4');</script>
</head>

<body class=\"nk-body bg-lighter npc-general has-sidebar \">
<div class=\"nk-app-root\">
    <div class=\"nk-main \">
        <div class=\"nk-sidebar nk-sidebar-fixed is-dark \" data-content=\"sidebarMenu\">
            <div class=\"nk-sidebar-element nk-sidebar-head\">
                <div class=\"nk-menu-trigger\">
                    <a href=\"#\" class=\"nk-nav-toggle nk-quick-nav-icon d-xl-none\" data-target=\"sidebarMenu\">
                        <em class=\"icon ni ni-arrow-left\"></em>
                    </a>
                    <a href=\"#\" class=\"nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex\"
                       data-target=\"sidebarMenu\">
                        <em class=\"icon ni ni-menu\"></em>
                    </a>
                </div>
                <div class=\"nk-sidebar-brand\">
                    <a href=\"https://dashlite.net/demo1/index.html\" class=\"logo-link nk-sidebar-logo\">
                        <img class=\"logo-light logo-img\" src=\"../images/logo.png\"
                             srcset=\"/demo1/images/logo2x.png 2x\" alt=\"logo\">
                        <img class=\"logo-dark logo-img\" src=\"../images/logo-dark.png\"
                             srcset=\"/demo1/images/logo-dark2x.png 2x\" alt=\"logo-dark\">
                    </a>
                </div>
            </div>
            <div class=\"nk-sidebar-element nk-sidebar-body\">
                <div class=\"nk-sidebar-content\">
                    <div class=\"nk-sidebar-menu\" data-simplebar>
                        <ul class=\"nk-menu\">
                            <li class=\"nk-menu-item\">
                                <a href=\"index.html\" class=\"nk-menu-link\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-dashboard-fill\">

                                            </em>
                                        </span>
                                    <span class=\"nk-menu-text\">Dashboard</span>
                                </a>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-users-fill\">

                                            </em>
                                            <span class=\"nk-menu-text\">Lead</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"people.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">People</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"organizations.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Organization</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item\">
                                <a href=\"customer-list.html\" class=\"nk-menu-link\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-user-list-fill\">

                                            </em>
                                        </span>
                                    <span class=\"nk-menu-text\">Customers</span>
                                </a>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-cart-fill\">

                                            </em>
                                        </span>
                                    <span class=\"nk-menu-text\">Sales</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"invoices.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Invoices</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"payment.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Payment</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"recent-sale.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Recent Sale</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"estimates.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Estimates</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"expenses.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Expenses</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-tranx\"></em>
                                        </span>
                                    <span class=\"nk-menu-text\">Transaction</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"deposit.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Recent Deposits</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"transaction.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\"> All Transaction</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"transfer-report.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Transfer Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-task-fill-c\"></em>
                                        </span>
                                    <span class=\"nk-menu-text\">Task</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"running-task.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Running Task</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"archive-task.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Archived Task</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-coin\"></em>
                                        </span>
                                    <span class=\"nk-menu-text\">Account</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"client-payment.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Client Payment</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"expense-management.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Expense Management</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-truck\">

                                            </em>
                                        </span>
                                    <span class=\"nk-menu-text\">Product Management</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"products.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Products</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"warehouse.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Warehouse</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"product-transfer.html\" class=\"nk-menu-link\"><span
                                                    class=\"nk-menu-text\">Product Transfer</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\"><a href=\"#\" class=\"nk-menu-link nk-menu-toggle\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-growth-fill\"></em></span><span
                                            class=\"nk-menu-text\">Report</span></a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\"><a href=\"dealing-info.html\" class=\"nk-menu-link\"><span
                                                    class=\"nk-menu-text\">Dealing Info</span></a></li>
                                    <li class=\"nk-menu-item\"><a href=\"client-report.html\" class=\"nk-menu-link\"><span
                                                    class=\"nk-menu-text\">Client Report</span></a></li>
                                    <li class=\"nk-menu-item\"><a href=\"expense-report.html\"
                                                                class=\"nk-menu-link\"><span class=\"nk-menu-text\">Expense
                                                    Report</span></a></li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item\"><a href=\"employee.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-layers-fill\"></em></span><span
                                            class=\"nk-menu-text\">Employees</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"projects.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-list-index-fill\"></em></span><span
                                            class=\"nk-menu-text\">Projects</span></a></li>
                            <li class=\"nk-menu-item has-sub\"><a href=\"#\" class=\"nk-menu-link nk-menu-toggle\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-coins\"></em></span><span
                                            class=\"nk-menu-text\">Payroll</span></a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\"><a href=\"salary-grade.html\" class=\"nk-menu-link\"><span
                                                    class=\"nk-menu-text\">Salary grade</span></a></li>
                                    <li class=\"nk-menu-item\"><a href=\"employee-salary-list.html\"
                                                                class=\"nk-menu-link\"><span class=\"nk-menu-text\">Employee Salary
                                                    List</span></a></li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item\"><a href=\"time-history.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-calendar-check-fill\"></em></span><span
                                            class=\"nk-menu-text\">Attendance</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"subscription.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-invest\"></em></span><span
                                            class=\"nk-menu-text\">Subscription</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"notice-board.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-notice\"></em></span><span
                                            class=\"nk-menu-text\">Notice Board</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"support.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-chat-circle-fill\"></em></span><span
                                            class=\"nk-menu-text\">Support</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"settings.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-setting-alt-fill\"></em></span><span
                                            class=\"nk-menu-text\">Settings</span></a></li>
                            <li class=\"nk-menu-heading\">
                                <h6 class=\"overline-title text-primary-alt\">Return to</h6>
                            </li>
                            <li class=\"nk-menu-item\"><a href=\"https://dashlite.net/demo1/index.html\"
                                                        class=\"nk-menu-link\"><span class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-dashlite-alt\"></em></span><span
                                            class=\"nk-menu-text\">Main Dashboard</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"https://dashlite.net/demo1/components.html\"
                                                        class=\"nk-menu-link\"><span class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-layers-fill\"></em></span><span
                                            class=\"nk-menu-text\">All Components</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"nk-wrap \">
            <div class=\"nk-header nk-header-fixed is-light\">
                <div class=\"container-fluid\">
                    <div class=\"nk-header-wrap\">
                        <div class=\"nk-menu-trigger d-xl-none ms-n1\"><a href=\"#\"
                                                                        class=\"nk-nav-toggle nk-quick-nav-icon\" data-target=\"sidebarMenu\"><em
                                        class=\"icon ni ni-menu\"></em></a></div>
                        <div class=\"nk-header-brand d-xl-none\"><a href=\"https://dashlite.net/demo1/index.html\"
                                                                  class=\"logo-link\"><img class=\"logo-light logo-img\" src=\"../images/logo.png\"
                                                                                         srcset=\"/demo1/images/logo2x.png 2x\" alt=\"logo\"><img class=\"logo-dark logo-img\"
                                                                                                                                              src=\"../images/logo-dark.png\" srcset=\"/demo1/images/logo-dark2x.png 2x\"
                                                                                                                                              alt=\"logo-dark\"></a></div>
                        <div class=\"nk-header-news d-none d-xl-block\">
                            <div class=\"nk-news-list\"><a class=\"nk-news-item\" href=\"#\">
                                    <div class=\"nk-news-icon\"><em class=\"icon ni ni-card-view\"></em></div>
                                    <div class=\"nk-news-text\">
                                        <p>Do you know the latest update of 2022? <span> A overview of our is now
                                                    available on YouTube</span></p><em class=\"icon ni ni-external\"></em>
                                    </div>
                                </a></div>
                        </div>
                        <div class=\"nk-header-tools\">
                            <ul class=\"nk-quick-nav\">
                                <li class=\"dropdown language-dropdown d-none d-sm-block me-n1\"><a href=\"#\"
                                                                                                  class=\"dropdown-toggle nk-quick-nav-icon\" data-bs-toggle=\"dropdown\">
                                        <div class=\"quick-icon border border-light\"><img class=\"icon\"
                                                                                         src=\"../images/flags/english-sq.png\" alt=\"\"></div>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-s1\">
                                        <ul class=\"language-list\">
                                            <li><a href=\"#\" class=\"language-item\"><img
                                                            src=\"../images/flags/english.png\" alt=\"\"
                                                            class=\"language-flag\"><span
                                                            class=\"language-name\">English</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><img
                                                            src=\"../images/flags/spanish.png\" alt=\"\"
                                                            class=\"language-flag\"><span
                                                            class=\"language-name\">Español</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><img
                                                            src=\"../images/flags/french.png\" alt=\"\"
                                                            class=\"language-flag\"><span
                                                            class=\"language-name\">Français</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><img
                                                            src=\"../images/flags/turkey.png\" alt=\"\"
                                                            class=\"language-flag\"><span
                                                            class=\"language-name\">Türkçe</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"dropdown user-dropdown\"><a href=\"#\" class=\"dropdown-toggle\"
                                                                      data-bs-toggle=\"dropdown\">
                                        <div class=\"user-toggle\">
                                            <div class=\"user-avatar sm\"><em class=\"icon ni ni-user-alt\"></em></div>
                                            <div class=\"user-info d-none d-md-block\">
                                                <div class=\"user-status\">Administrator</div>
                                                <div class=\"user-name dropdown-indicator\">Abu Bin Ishityak</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1\">
                                        <div class=\"dropdown-inner user-card-wrap bg-lighter d-none d-md-block\">
                                            <div class=\"user-card\">
                                                <div class=\"user-avatar\"><span>AB</span></div>
                                                <div class=\"user-info\"><span class=\"lead-text\">Abu Bin
                                                            Ishtiyak</span><span
                                                            class=\"sub-text\">info@softnio.com</span></div>
                                            </div>
                                        </div>
                                        <div class=\"dropdown-inner\">
                                            <ul class=\"link-list\">
                                                <li><a href=\"https://dashlite.net/demo1/user-profile-regular.html\"><em
                                                                class=\"icon ni ni-user-alt\"></em><span>View
                                                                Profile</span></a></li>
                                                <li><a href=\"https://dashlite.net/demo1/user-profile-setting.html\"><em
                                                                class=\"icon ni ni-setting-alt\"></em><span>Account
                                                                Setting</span></a></li>
                                                <li><a href=\"https://dashlite.net/demo1/user-profile-activity.html\"><em
                                                                class=\"icon ni ni-activity-alt\"></em><span>Login
                                                                Activity</span></a></li>
                                            </ul>
                                        </div>
                                        <div class=\"dropdown-inner\">
                                            <ul class=\"link-list\">
                                                <li><a href=\"#\"><em class=\"icon ni ni-signout\"></em><span>Sign
                                                                out</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown notification-dropdown me-n1\"><a href=\"#\"
                                                                                    class=\"dropdown-toggle nk-quick-nav-icon\" data-bs-toggle=\"dropdown\">
                                        <div class=\"icon-status icon-status-info\"><em class=\"icon ni ni-bell\"></em>
                                        </div>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1\">
                                        <div class=\"dropdown-head\"><span
                                                    class=\"sub-title nk-dropdown-title\">Notifications</span><a
                                                    href=\"#\">Mark All as Read</a></div>
                                        <div class=\"dropdown-body\">
                                            <div class=\"nk-notification\">
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-warning-dim ni ni-curve-down-right\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">You have requested to
                                                            <span>Widthdrawl</span></div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-success-dim ni ni-curve-down-left\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-warning-dim ni ni-curve-down-right\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">You have requested to
                                                            <span>Widthdrawl</span></div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-success-dim ni ni-curve-down-left\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-warning-dim ni ni-curve-down-right\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">You have requested to
                                                            <span>Widthdrawl</span></div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-success-dim ni ni-curve-down-left\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"dropdown-foot center\"><a href=\"#\">View All</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"nk-content \">
                <div class=\"container-fluid\">
                    <div class=\"nk-content-inner\">
                        <div class=\"nk-content-body\">
                            <div class=\"nk-block-head nk-block-head-sm\">
                                <div class=\"nk-block-between\">
                                    <div class=\"nk-block-head-content\">
                                        <h3 class=\"nk-block-title page-title\">CRM Dashboard</h3>
                                        <div class=\"nk-block-des text-soft\">
                                            <p>Welcome to CRM Dashboard.</p>
                                        </div>
                                    </div>
                                    <div class=\"nk-block-head-content\">
                                        <div class=\"toggle-wrap nk-block-tools-toggle\"><a href=\"#\"
                                                                                          class=\"btn btn-icon btn-trigger toggle-expand me-n1\"
                                                                                          data-target=\"pageMenu\"><em class=\"icon ni ni-more-v\"></em></a>
                                            <div class=\"toggle-expand-content\" data-content=\"pageMenu\">
                                                <ul class=\"nk-block-tools g-3\">
                                                    <li>
                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                 class=\"dropdown-toggle btn btn-white btn-dim btn-outline-light\"
                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                        class=\"d-none d-sm-inline icon ni ni-calender-date\"></em><span><span
                                                                            class=\"d-none d-md-inline\">Last</span> 30
                                                                        Days</span><em
                                                                        class=\"dd-indc icon ni ni-chevron-right\"></em></a>
                                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>Last 30 Days</span></a>
                                                                    </li>
                                                                    <li><a href=\"#\"><span>Last 6 Months</span></a>
                                                                    </li>
                                                                    <li><a href=\"#\"><span>Last 1 Years</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"nk-block-tools-opt\"><a href=\"#\"
                                                                                      class=\"btn btn-primary\"><em
                                                                    class=\"icon ni ni-reports\"></em><span>Reports</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"nk-block\">
                                <div class=\"row g-gs\">
                                    <div class=\"col-md-6 col-lg-5\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner\">
                                                <div class=\"card-title-group align-start pb-3 g-2\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Sales Revenue</h6>
                                                        <p>In last 30 days revenue from subscription.</p>
                                                    </div>
                                                    <div class=\"card-tools\"><em class=\"card-hint icon ni ni-help\"
                                                                                data-bs-toggle=\"tooltip\" data-bs-placement=\"left\"
                                                                                title=\"Customer of this month\"></em></div>
                                                </div>
                                                <div class=\"analytic-au\">
                                                    <div class=\"analytic-data-group analytic-au-group g-3\">
                                                        <div class=\"analytic-data analytic-au-data\">
                                                            <div class=\"title\">Monthly</div>
                                                            <div class=\"amount\">9.28K</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>4.63%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-au-data\">
                                                            <div class=\"title\">Weekly</div>
                                                            <div class=\"amount\">2.69K</div>
                                                            <div class=\"change down\"><em
                                                                        class=\"icon ni ni-arrow-long-down\"></em>1.92%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-au-data\">
                                                            <div class=\"title\">Daily (Avg)</div>
                                                            <div class=\"amount\">0.94K</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>3.45%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"analytic-au-ck\"><canvas class=\"analytics-au-chart\"
                                                                                        id=\"analyticAuData\"></canvas></div>
                                                    <div class=\"chart-label-group\">
                                                        <div class=\"chart-label\">01 Feb, 2021</div>
                                                        <div class=\"chart-label\">30 Feb, 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-7\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner\">
                                                <div class=\"card-title-group pb-3 g-2\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Import & Expense Report Statistics</h6>
                                                        <p>Report Comparison</p>
                                                    </div>
                                                    <div class=\"card-tools shrink-0 d-none d-sm-block\">
                                                        <ul class=\"nav nav-switch-s2 nav-tabs bg-white\">
                                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">7
                                                                    D</a></li>
                                                            <li class=\"nav-item\"><a href=\"#\"
                                                                                    class=\"nav-link active\">1 M</a></li>
                                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">3
                                                                    M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"analytic-ov\">
                                                    <div class=\"analytic-data-group analytic-ov-group g-3\">
                                                        <div class=\"analytic-data analytic-ov-data\">
                                                            <div class=\"title\">Yearly</div>
                                                            <div class=\"amount\">2.7K</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>12.37%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-ov-data\">
                                                            <div class=\"title\">Monothly</div>
                                                            <div class=\"amount\">3.8K</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>47.74%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-ov-data\">
                                                            <div class=\"title\">Weekly</div>
                                                            <div class=\"amount\">9.9%</div>
                                                            <div class=\"change down\"><em
                                                                        class=\"icon ni ni-arrow-long-down\"></em>12.37%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-ov-data\">
                                                            <div class=\"title\">Daily</div>
                                                            <div class=\"amount\">2.5%</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>9.35%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"analytic-ov-ck\"><canvas class=\"analytics-line-large\"
                                                                                        id=\"analyticOvData\"></canvas></div>
                                                    <div class=\"chart-label-group ms-5\">
                                                        <div class=\"chart-label\">01 Jan, 2021</div>
                                                        <div class=\"chart-label d-none d-sm-block\">15 Jan, 2021
                                                        </div>
                                                        <div class=\"chart-label\">30 Jan, 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-7 col-xxl-4\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner mb-n2\">
                                                <div class=\"card-title-group\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Lead</h6>
                                                        <p>Lead Statictics</p>
                                                    </div>
                                                    <div class=\"card-tools\">
                                                        <div class=\"drodown\"><a href=\"#\"
                                                                                class=\"dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white\"
                                                                                data-bs-toggle=\"dropdown\">30 Days</a>
                                                            <div
                                                                    class=\"dropdown-menu dropdown-menu-end dropdown-menu-xs\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>7 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>15 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>30 Days</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"nk-tb-list is-loose traffic-channel-table\">
                                                <div class=\"nk-tb-item nk-tb-head\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span>Duration</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span>Count</span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span>Prev
                                                                Count</span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span>Change</span></div>
                                                    <div class=\"nk-tb-col nk-tb-trend tb-col-sm text-end\">
                                                        <span>Statistics</span></div>
                                                </div>
                                                <div class=\"nk-tb-item\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span
                                                                class=\"tb-lead\">Yearly</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>4305</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>4128</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span
                                                                class=\"tb-sub\"><span>4.29%</span> <span
                                                                    class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em></span></span>
                                                    </div>
                                                    <div class=\"nk-tb-col nk-tb-trend text-end\">
                                                        <div class=\"traffic-channel-ck ms-auto\"><canvas
                                                                    class=\"analytics-line-small\"
                                                                    id=\"OrganicSearchData\"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-tb-item\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span
                                                                class=\"tb-lead\">Monthly</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>859</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>936</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span
                                                                class=\"tb-sub\"><span>15.8%</span> <span
                                                                    class=\"change down\"><em
                                                                        class=\"icon ni ni-arrow-long-down\"></em></span></span>
                                                    </div>
                                                    <div class=\"nk-tb-col nk-tb-trend text-end\">
                                                        <div class=\"traffic-channel-ck ms-auto\"><canvas
                                                                    class=\"analytics-line-small\"
                                                                    id=\"SocialMediaData\"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-tb-item\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span
                                                                class=\"tb-lead\">Weekly</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>482</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>793</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span
                                                                class=\"tb-sub\"><span>41.3%</span> <span
                                                                    class=\"change down\"><em
                                                                        class=\"icon ni ni-arrow-long-down\"></em></span></span>
                                                    </div>
                                                    <div class=\"nk-tb-col nk-tb-trend text-end\">
                                                        <div class=\"traffic-channel-ck ms-auto\"><canvas
                                                                    class=\"analytics-line-small\"
                                                                    id=\"ReferralsData\"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-tb-item\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span
                                                                class=\"tb-lead\">Daily</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>138</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>97</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span
                                                                class=\"tb-sub\"><span>12.6%</span> <span
                                                                    class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em></span></span>
                                                    </div>
                                                    <div class=\"nk-tb-col nk-tb-trend text-end\">
                                                        <div class=\"traffic-channel-ck ms-auto\"><canvas
                                                                    class=\"analytics-line-small\"
                                                                    id=\"OthersData\"></canvas></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-5\">
                                        <div class=\"card card-bordered card-full\">
                                            <div class=\"card-inner-group\">
                                                <div class=\"card-inner\">
                                                    <div class=\"card-title-group\">
                                                        <div class=\"card-title\">
                                                            <h6 class=\"title\">Recent Sale</h6>
                                                        </div>
                                                        <div class=\"card-tools\"><a href=\"recent-sale.html\"
                                                                                   class=\"link\">View All</a></div>
                                                    </div>
                                                </div>
                                                <div class=\"card-inner p-0\">
                                                    <table class=\"nk-tb-list nk-tb-ulist\">
                                                        <thead>
                                                        <tr class=\"nk-tb-item nk-tb-head\">
                                                            <th class=\"nk-tb-col\"><span
                                                                        class=\"sub-text\">ID</span></th>
                                                            <th class=\"nk-tb-col\"><span
                                                                        class=\"sub-text\">Name</span></th>
                                                            <th class=\"nk-tb-col\"><span
                                                                        class=\"sub-text\">Price</span></th>
                                                            <th class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"sub-text\">Status</span></th>
                                                            <th class=\"nk-tb-col nk-tb-col-tools text-end\">
                                                                <div class=\"dropdown\"><a href=\"#\"
                                                                                         class=\"btn btn-xs btn-trigger btn-icon dropdown-toggle me-n1\"
                                                                                         data-bs-toggle=\"dropdown\"
                                                                                         data-offset=\"0,5\"><em
                                                                                class=\"icon ni ni-more-h\"></em></a>
                                                                    <div
                                                                            class=\"dropdown-menu dropdown-menu-end\">
                                                                        <ul class=\"link-list-opt no-bdr\">
                                                                            <li><a href=\"#\"><em
                                                                                            class=\"icon ni ni-check-round-cut\"></em><span>Mark
                                                                                                As Done</span></a></li>
                                                                            <li><a href=\"#\"><em
                                                                                            class=\"icon ni ni-archive\"></em><span>Mark
                                                                                                As Archive</span></a>
                                                                            </li>
                                                                            <li><a href=\"#\"><em
                                                                                            class=\"icon ni ni-trash\"></em><span>Remove
                                                                                                Tasks</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class=\"nk-tb-item\">
                                                            <td class=\"nk-tb-col\"><span>P-78</span></td>
                                                            <td class=\"nk-tb-col\"><span>Mackbook<span
                                                                            class=\"dot dot-success d-lg-none ms-1\"></span></span>
                                                            </td>
                                                            <td class=\"nk-tb-col\"><span>\$999.00</span></td>
                                                            <td class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"badge badge-dot badge-dot-xs bg-success\">Available</span>
                                                            </td>
                                                            <td class=\"nk-tb-col nk-tb-col-tools\">
                                                                <ul class=\"nk-tb-actions\">
                                                                    <li>
                                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                                            <div
                                                                                    class=\"dropdown-menu dropdown-menu-end\">
                                                                                <ul
                                                                                        class=\"link-list-opt no-bdr\">
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#editDataDash\"><em
                                                                                                    class=\"icon ni ni-edit\"></em><span>Edit
                                                                                                        Info</span></a>
                                                                                    </li>
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#deleteData\"><em
                                                                                                    class=\"icon ni ni-trash\"></em><span>Trash</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class=\"nk-tb-item\">
                                                            <td class=\"nk-tb-col\"><span>P-56</span></td>
                                                            <td class=\"nk-tb-col\"><span>iPhone<span
                                                                            class=\"dot dot-danger d-lg-none ms-1\"></span></span>
                                                            </td>
                                                            <td class=\"nk-tb-col\"><span>\$700.00</span></td>
                                                            <td class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"badge badge-dot badge-dot-xs bg-danger\">Out
                                                                            of Stock</span></td>
                                                            <td class=\"nk-tb-col nk-tb-col-tools\">
                                                                <ul class=\"nk-tb-actions\">
                                                                    <li>
                                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                                            <div
                                                                                    class=\"dropdown-menu dropdown-menu-end\">
                                                                                <ul
                                                                                        class=\"link-list-opt no-bdr\">
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#editDataDash\"><em
                                                                                                    class=\"icon ni ni-edit\"></em><span>Edit
                                                                                                        Info</span></a>
                                                                                    </li>
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#deleteData\"><em
                                                                                                    class=\"icon ni ni-trash\"></em><span>Trash</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class=\"nk-tb-item\">
                                                            <td class=\"nk-tb-col\"><span>P-68</span></td>
                                                            <td class=\"nk-tb-col\"><span>Watch<span
                                                                            class=\"dot dot-success d-lg-none ms-1\"></span></span>
                                                            </td>
                                                            <td class=\"nk-tb-col\"><span>\$260.00</span></td>
                                                            <td class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"badge badge-dot badge-dot-xs bg-success\">Available</span>
                                                            </td>
                                                            <td class=\"nk-tb-col nk-tb-col-tools\">
                                                                <ul class=\"nk-tb-actions\">
                                                                    <li>
                                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                                            <div
                                                                                    class=\"dropdown-menu dropdown-menu-end\">
                                                                                <ul
                                                                                        class=\"link-list-opt no-bdr\">
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#editDataDash\"><em
                                                                                                    class=\"icon ni ni-edit\"></em><span>Edit
                                                                                                        Info</span></a>
                                                                                    </li>
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#deleteData\"><em
                                                                                                    class=\"icon ni ni-trash\"></em><span>Trash</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class=\"nk-tb-item\">
                                                            <td class=\"nk-tb-col\"><span>P-56</span></td>
                                                            <td class=\"nk-tb-col\"><span>Earbuds<span
                                                                            class=\"dot dot-warning d-lg-none ms-1\"></span></span>
                                                            </td>
                                                            <td class=\"nk-tb-col\"><span>\$180.00</span></td>
                                                            <td class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"badge badge-dot badge-dot-xs bg-warning\">Low
                                                                            Stock</span></td>
                                                            <td class=\"nk-tb-col nk-tb-col-tools\">
                                                                <ul class=\"nk-tb-actions\">
                                                                    <li>
                                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                                            <div
                                                                                    class=\"dropdown-menu dropdown-menu-end\">
                                                                                <ul
                                                                                        class=\"link-list-opt no-bdr\">
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#editDataDash\"><em
                                                                                                    class=\"icon ni ni-edit\"></em><span>Edit
                                                                                                        Info</span></a>
                                                                                    </li>
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#deleteData\"><em
                                                                                                    class=\"icon ni ni-trash\"></em><span>Trash</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-5 col-sm-6 col-xxl-3\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner\">
                                                <div class=\"card-title-group mb-5\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Client Payment Status</h6>
                                                    </div>
                                                    <div class=\"card-tools\">
                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                 class=\"dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white\"
                                                                                 data-bs-toggle=\"dropdown\">30 Days</a>
                                                            <div
                                                                    class=\"dropdown-menu dropdown-menu-end dropdown-menu-xs\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>7 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>15 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>30 Days</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"payment-status\">
                                                    <div class=\"nk-ck-md\"><canvas class=\"polar-chart\"
                                                                                  id=\"polarChartData\"></canvas></div>
                                                    <ul class=\"traffic-channel-group mt-3 ps-4\">
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#9cabff\"></span><span>Started</span>
                                                            </div>
                                                        </li>
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#f4aaa4\"></span><span>Inprogress</span>
                                                            </div>
                                                        </li>
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#9785FF\"></span><span>Completed</span>
                                                            </div>
                                                        </li>
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#E85347\"></span><span>Cencel</span>
                                                            </div>
                                                        </li>
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#8feac5\"></span><span>Success</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-7 col-sm-6 col-xxl-4\">
                                        <div class=\"card card-bordered card-full\">
                                            <div class=\"card-inner d-flex flex-column h-100\">
                                                <div class=\"card-title-group mb-3\">
                                                    <div class=\"card-title\">
                                                        <h6 class=\"title\">Running Projects</h6>
                                                        <p>In last 30 days top projects.</p>
                                                    </div>
                                                    <div class=\"card-tools mt-n4 me-n1\">
                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                            <div
                                                                    class=\"dropdown-menu dropdown-menu-sm dropdown-menu-end\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>15 Days</span></a></li>
                                                                    <li><a href=\"#\" class=\"active\"><span>30
                                                                                    Days</span></a></li>
                                                                    <li><a href=\"#\"><span>3 Months</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"progress-list gy-3\">
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">IT Solution</div>
                                                            <div class=\"progress-amount\">78%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar\" data-progress=\"78\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">Internet configuration</div>
                                                            <div class=\"progress-amount\">48.49%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-orange\"
                                                                 data-progress=\"48.49\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">Database Management</div>
                                                            <div class=\"progress-amount\">29%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-teal\" data-progress=\"29\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">Design tool</div>
                                                            <div class=\"progress-amount\">56%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-pink\" data-progress=\"56\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">Banner completation</div>
                                                            <div class=\"progress-amount\">33%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-azure\" data-progress=\"33\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">SEO Marketing</div>
                                                            <div class=\"progress-amount\">65%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-info\" data-progress=\"65\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-xxl-5\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner border-bottom\">
                                                <div class=\"card-title-group\">
                                                    <div class=\"card-title\">
                                                        <h6 class=\"title\">Support Requests</h6>
                                                    </div>
                                                    <div class=\"card-tools\"><a href=\"#\" class=\"link\">All
                                                            Requests</a></div>
                                                </div>
                                            </div>
                                            <ul class=\"nk-support\">
                                                <li class=\"nk-support-item\">
                                                    <div class=\"user-avatar\"><img src=\"../images/avatar/a-sm.jpg\"
                                                                                  alt=\"\"></div>
                                                    <div class=\"nk-support-content\">
                                                        <div class=\"title\"><span>Vincent Lopez</span>
                                                            <div class=\"status delivered\"><em
                                                                        class=\"icon ni ni-check-circle-fill\"></em></div>
                                                        </div>
                                                        <p>Thanks for contact us with your issues...</p><span
                                                                class=\"time\">6 min ago</span>
                                                    </div>
                                                </li>
                                                <li class=\"nk-support-item\">
                                                    <div class=\"user-avatar bg-purple-dim\"><span>DM</span></div>
                                                    <div class=\"nk-support-content \">
                                                        <div class=\"title\"><span>Daniel Moore</span>
                                                            <div class=\"status unread\"><em
                                                                        class=\"icon ni ni-bullet-fill\"></em></div>
                                                        </div>
                                                        <p>Thanks for contact us with your issues...</p><span
                                                                class=\"time\">2 Hours ago</span>
                                                    </div>
                                                </li>
                                                <li class=\"nk-support-item\">
                                                    <div class=\"user-avatar\"><img src=\"../images/avatar/b-sm.jpg\"
                                                                                  alt=\"\"></div>
                                                    <div class=\"nk-support-content\">
                                                        <div class=\"title\"><span>Larry Henry</span>
                                                            <div class=\"status sent\"><em
                                                                        class=\"icon ni ni-check-circle\"></em></div>
                                                        </div>
                                                        <p>Thanks for contact us with your issues...</p><span
                                                                class=\"time\">3 Hours ago</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-xxl-3\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner\">
                                                <div class=\"card-title-group\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Traffic Channel</h6>
                                                    </div>
                                                    <div class=\"card-tools\">
                                                        <div class=\"drodown\"><a href=\"#\"
                                                                                class=\"dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white\"
                                                                                data-bs-toggle=\"dropdown\">30 Days</a>
                                                            <div
                                                                    class=\"dropdown-menu dropdown-menu-end dropdown-menu-xs\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>7 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>15 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>30 Days</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"traffic-channel\">
                                                    <div class=\"traffic-channel-doughnut-ck\"><canvas
                                                                class=\"analytics-doughnut\"
                                                                id=\"TrafficChannelDoughnutData\"></canvas></div>
                                                    <div class=\"traffic-channel-group g-2\">
                                                        <div class=\"traffic-channel-data\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#9cabff\"></span><span>Organic
                                                                        Search</span></div>
                                                            <div class=\"amount\">4,305 <small>58.63%</small></div>
                                                        </div>
                                                        <div class=\"traffic-channel-data\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#b8acff\"></span><span>Social
                                                                        Media</span></div>
                                                            <div class=\"amount\">859 <small>23.94%</small></div>
                                                        </div>
                                                        <div class=\"traffic-channel-data\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#ffa9ce\"></span><span>Referrals</span>
                                                            </div>
                                                            <div class=\"amount\">482 <small>12.94%</small></div>
                                                        </div>
                                                        <div class=\"traffic-channel-data\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#f9db7b\"></span><span>Others</span>
                                                            </div>
                                                            <div class=\"amount\">138 <small>4.49%</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"nk-footer\">
                <div class=\"container-fluid\">
                    <div class=\"nk-footer-wrap\">
                        <div class=\"nk-footer-copyright\"> &copy; 2022 DashLite. Template by <a
                                    href=\"https://softnio.com/\" target=\"_blank\">Softnio</a></div>
                        <div class=\"nk-footer-links\">
                            <ul class=\"nav nav-sm\">
                                <li class=\"nav-item dropup\"><a href=\"#\"
                                                               class=\"dropdown-toggle dropdown-indicator has-indicator nav-link\"
                                                               data-bs-toggle=\"dropdown\" data-offset=\"0,10\"><span>English</span></a>
                                    <div class=\"dropdown-menu dropdown-menu-sm dropdown-menu-end\">
                                        <ul class=\"language-list\">
                                            <li><a href=\"#\" class=\"language-item\"><span
                                                            class=\"language-name\">English</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><span
                                                            class=\"language-name\">Español</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><span
                                                            class=\"language-name\">Français</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><span
                                                            class=\"language-name\">Türkçe</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"nav-item\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#region\"
                                                        class=\"nav-link\"><em class=\"icon ni ni-globe\"></em><span class=\"ms-1\">Select
                                                Region</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"region\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\"><em
                        class=\"icon ni ni-cross-sm\"></em></a>
            <div class=\"modal-body modal-body-md\">
                <h5 class=\"title mb-4\">Select Your Country</h5>
                <div class=\"nk-country-region\">
                    <ul class=\"country-list text-center gy-2\">
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/arg.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Argentina</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/aus.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Australia</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/bangladesh.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Bangladesh</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/canada.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Canada
                                        <small>(English)</small></span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/china.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Centrafricaine</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/china.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">China</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/french.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">France</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/germany.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Germany</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/iran.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Iran</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/italy.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Italy</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/mexico.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">México</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/philipine.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Philippines</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/portugal.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Portugal</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/s-africa.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">South Africa</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/spanish.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Spain</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/switzerland.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Switzerland</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/uk.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">United Kingdom</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/english.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">United State</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"addData\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><em
                        class=\"icon ni ni-cross-sm\"></em></a>
            <div class=\"modal-body modal-body-md\">
                <h5 class=\"modal-title\">Add Employee</h5>
                <form action=\"#\" class=\"mt-2\">
                    <div class=\"row g-gs\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"name\"> Name</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"name\"
                                                                      placeholder=\"Abu Bin Istiak\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"email\"> Email</label>
                                <div class=\"form-control-wrap\"><input type=\"email\" class=\"form-control\" id=\"email\"
                                                                      placeholder=\"info@softnio.com\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\">Department</label>
                                <div class=\"form-control-wrap\"><select class=\"form-select js-select2\">
                                        <option value=\"default_option\">Select Department</option>
                                        <option value=\"bangladesh\">Information Technology</option>
                                        <option value=\"canada\">Finance</option>
                                        <option value=\"england\">Marketing</option>
                                        <option value=\"pakistan\">Human Resource</option>
                                        <option value=\"usa\">Graphics</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"code\">Designation</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"code\"
                                                                      placeholder=\"Software developer\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"phone\">Phone</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"phone\"
                                                                      placeholder=\"+124 394-1787\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\">Address(Lane)</label>
                                <div class=\"form-control-wrap\"><select class=\"form-select js-select2\">
                                        <option value=\"default_option\">Select Address</option>
                                        <option value=\"dhaka\">House 165, Lane No 3, Mohakhali DOHS,Dhaka</option>
                                        <option value=\"london\">199 Bishopsgate, London</option>
                                        <option value=\"mumbai\">Narottam Morarji Marg, Mumbai</option>
                                        <option value=\"kualalampur\">Ipoh, Johor Bahru, Kualalampur</option>
                                        <option value=\"spain\">Gran Vía, Madrid.</option>
                                        <option value=\"usa\">182/A Y-ra, Boston</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\"><label class=\"form-label\">Varified</label>
                                <div class=\"form-control-wrap\">
                                    <ul class=\"custom-control-group g-3 align-center flex-wrap\">
                                        <li>
                                            <div class=\"custom-control custom-checkbox\"><input type=\"checkbox\"
                                                                                               class=\"custom-control-input\" checked=\"\" id=\"Check1\"><label
                                                        class=\"custom-control-label\" for=\"Check1\">Email</label></div>
                                        </li>
                                        <li>
                                            <div class=\"custom-control custom-checkbox\"><input type=\"checkbox\"
                                                                                               class=\"custom-control-input\" checked=\"\" id=\"Check2\"><label
                                                        class=\"custom-control-label\" for=\"Check2\">KYC</label></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\"><button data-bs-dismiss=\"modal\" type=\"submit\"
                                                            class=\"btn btn-primary\">Add Employee</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"editData\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><em
                        class=\"icon ni ni-cross-sm\"></em></a>
            <div class=\"modal-body modal-body-md\">
                <h5 class=\"modal-title\">Edit Employee</h5>
                <form action=\"#\" class=\"mt-2\">
                    <div class=\"row g-gs\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"edit-name\"> Name</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\"
                                                                      id=\"edit-name\" value=\"Abu Bin Istiak\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"edit-email\"> Email</label>
                                <div class=\"form-control-wrap\"><input type=\"email\" class=\"form-control\"
                                                                      id=\"edit-email\" value=\"info@softnio.com\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"dept\">Department</label>
                                <div class=\"form-control-wrap\"><select class=\"form-select js-select2\" id=\"dept\">
                                        <option value=\"default_option\">Select Department</option>
                                        <option value=\"bangladesh\">Information Technology</option>
                                        <option value=\"canada\">Finance</option>
                                        <option value=\"england\">Marketing</option>
                                        <option value=\"pakistan\">Human Resource</option>
                                        <option value=\"usa\">Graphics</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"edit-code\">Designation</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\"
                                                                      id=\"edit-code\" value=\"Software developer\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"edit-phone\">Phone</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\"
                                                                      id=\"edit-phone\" value=\"+124 394-1787\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\">Address(Lane)</label>
                                <div class=\"form-control-wrap\"><select class=\"form-select js-select2\">
                                        <option value=\"default_option\">Select Address</option>
                                        <option value=\"dhaka\">House 165, Lane No 3, Mohakhali DOHS,Dhaka</option>
                                        <option value=\"london\">199 Bishopsgate, London</option>
                                        <option value=\"mumbai\">Narottam Morarji Marg, Mumbai</option>
                                        <option value=\"kualalampur\">Ipoh, Johor Bahru, Kualalampur</option>
                                        <option value=\"spain\">Gran Vía, Madrid.</option>
                                        <option value=\"usa\">182/A Y-ra, Boston</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\">Varified</label>
                                <div class=\"form-control-wrap\">
                                    <ul class=\"custom-control-group g-3 align-center flex-wrap\">
                                        <li>
                                            <div class=\"custom-control custom-checkbox\"><input type=\"checkbox\"
                                                                                               class=\"custom-control-input\" checked=\"\" id=\"customCheck1\"><label
                                                        class=\"custom-control-label\" for=\"customCheck1\">Email</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"custom-control custom-checkbox\"><input type=\"checkbox\"
                                                                                               class=\"custom-control-input\" checked=\"\" id=\"customCheck2\"><label
                                                        class=\"custom-control-label\" for=\"customCheck2\">KYC</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\"><button data-bs-dismiss=\"modal\" type=\"submit\"
                                                            class=\"btn btn-primary\">Update Employee</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"deleteData\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\"><em
                        class=\"icon ni ni-cross\"></em></a>
            <div class=\"modal-body modal-body-sm text-center\">
                <div class=\"nk-modal py-4\"><em
                            class=\"nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger\"></em>
                    <h4 class=\"nk-modal-title\">Are You Sure ?</h4>
                    <div class=\"nk-modal-text mt-n2\">
                        <p class=\"text-soft\">This item will be removed permanently.</p>
                    </div>
                    <ul class=\"d-flex justify-content-center gx-4 mt-4\">
                        <li><button data-bs-dismiss=\"modal\" id=\"deleteEvent\" class=\"btn btn-success\">Yes, Delete
                                it</button></li>
                        <li><button data-bs-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#editEventPopup\"
                                    class=\"btn btn-danger btn-dim\">Cancel</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"editDataDash\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><em
                        class=\"icon ni ni-cross\"></em></a>
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Edit Information</h5>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\">
                    <div class=\"form-group\"><label class=\"form-label\" for=\"dept-name\">Dept. Name</label>
                        <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"dept-name\"
                                                              value=\"Finance\"></div>
                    </div>
                    <div class=\"form-group\"><label class=\"form-label\" for=\"author-name\">Author Name</label>
                        <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"author-name\"
                                                              value=\"Abu Bin Istiak\"></div>
                    </div>
                    <div class=\"form-group\"><label class=\"form-label\" for=\"designtn\">Designation</label>
                        <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"designtn\"
                                                              value=\"Admin\"></div>
                    </div>
                    <div class=\"form-group\"><button data-bs-dismiss=\"modal\" type=\"submit\"
                                                    class=\"btn btn-primary\">Save Informations</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<ul class=\"nk-sticky-toolbar\">
    <li class=\"demo-layout\"><a class=\"toggle tipinfo\" data-target=\"demoML\" href=\"#\" title=\"Main Demo Preview\"><em
                    class=\"icon ni ni-dashlite\"></em></a></li>
    <li class=\"demo-thumb\"><a class=\"toggle tipinfo\" data-target=\"demoUC\" href=\"#\" title=\"Use Case Concept\"><em
                    class=\"icon ni ni-menu-squared\"></em></a></li>
    <li class=\"demo-settings\"><a class=\"toggle tipinfo\" data-target=\"settingPanel\" href=\"#\"
                                 title=\"Demo Settings\"><em class=\"icon ni ni-setting-alt\"></em></a></li>
    <li class=\"demo-purchase\"><a class=\"tipinfo\" target=\"_blank\" href=\"https://1.envato.market/e0y3g\"
                                 title=\"Purchase\"><em class=\"icon ni ni-cart\"></em></a></li>
</ul>
<div class=\"nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right\" data-content=\"demoML\"
     data-toggle-overlay=\"true\" data-toggle-body=\"true\" data-toggle-screen=\"any\">
    <div class=\"nk-demo-head\">
        <h6 class=\"mb-0\">Switch Demo Layout</h6><a
                class=\"nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2\" data-target=\"demoML\" href=\"#\"><em
                    class=\"icon ni ni-cross\"></em></a>
    </div>
    <div class=\"nk-demo-list\" data-simplebar>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo1/index.html\">
                <div class=\"nk-demo-image bg-blue\"><img class=\"bg-purple\" src=\"../../images/landing/layout-1d.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/layout-1d2x.jpg 2x\" alt=\"Demo Layout 1\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 1</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo2/index.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/layout-2d.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/layout-2d2x.jpg 2x\" alt=\"Demo Layout 2\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 2</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/index.html\">
                <div class=\"nk-demo-image bg-success\"><img src=\"../../images/landing/layout-3d.jpg\"
                                                           srcset=\"https://dashlite.net/images/landing/layout-3d2x.jpg 2x\" alt=\"Demo Layout 3\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 3</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo4/index.html\">
                <div class=\"nk-demo-image bg-indigo\"><img src=\"../../images/landing/layout-4d.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/layout-4d2x.jpg 2x\" alt=\"Demo Layout 4\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 4</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo5/index.html\">
                <div class=\"nk-demo-image bg-orange\"><img src=\"../../images/landing/layout-5d.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/layout-5d2x.jpg 2x\" alt=\"Demo Layout 5\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 5</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo6/index.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/layout-6d.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/layout-6d2x.jpg 2x\" alt=\"Demo Layout 6\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 6</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo7/index.html\">
                <div class=\"nk-demo-image bg-teal\"><img src=\"../../images/landing/layout-7d.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/layout-7d2x.jpg 2x\" alt=\"Demo Layout 7\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 7</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo8/index.html\">
                <div class=\"nk-demo-image bg-azure\"><img src=\"../../images/landing/layout-8d.jpg\"
                                                         srcset=\"https://dashlite.net/images/landing/layout-8d2x.jpg 2x\" alt=\"Demo Layout 8\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 8</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/landing/index.html\">
                <div class=\"nk-demo-image bg-red\"><img src=\"../../images/landing/main-landing.jpg\"
                                                       srcset=\"https://dashlite.net/images/landing/main-landing2x.jpg 2x\" alt=\"Landing Page\"></div>
                <span class=\"nk-demo-title\"><strong>Landing Page</strong> <span
                            class=\"badge badge-danger ml-1\">Free</span></span>
            </a></div>
    </div>
</div>
<div class=\"nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right\" data-content=\"demoUC\"
     data-toggle-overlay=\"true\" data-toggle-body=\"true\" data-toggle-screen=\"any\">
    <div class=\"nk-demo-head\">
        <h6 class=\"mb-0\">Use Case Concept</h6><a class=\"nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2\"
                                                 data-target=\"demoUC\" href=\"#\"><em class=\"icon ni ni-cross\"></em></a>
    </div>
    <div class=\"nk-demo-list\" data-simplebar>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo2/ecommerce/index.html\">
                <div class=\"nk-demo-image bg-dark\"><img src=\"../../images/landing/demo-ecommerce.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/demo-ecommerce2x.jpg 2x\" alt=\"Ecommerce\"></div>
                <span class=\"nk-demo-title\"><em class=\"text-primary\">Demo2</em><br><strong>E-Commerce
                            Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo2/lms/index.html\">
                <div class=\"nk-demo-image bg-danger\"><img src=\"../../images/landing/demo-lms.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-lms2x.jpg 2x\" alt=\"LMS\"></div><span
                        class=\"nk-demo-title\"><em class=\"text-primary\">Demo2</em><br><strong>LMS / Learning Management
                            System</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"index.html\">
                <div class=\"nk-demo-image bg-info\"><img src=\"../../images/landing/demo-crm.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/demo-crm2x.jpg 2x\"
                                                        alt=\"CRM / Customer Relationship\"></div><span class=\"nk-demo-title\"><em
                            class=\"text-primary\">Demo1</em><br><strong>CRM / Customer Relationship
                            Management</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo7/hospital/index.html\">
                <div class=\"nk-demo-image bg-indigo\"><img src=\"../../images/landing/demo-hospital.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-hospital2x.jpg 2x\"
                                                          alt=\"Hospital Managemen\"></div><span class=\"nk-demo-title\"><em
                            class=\"text-primary\">Demo7</em><br><strong>Hospital Management</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo1/hotel/index.html\">
                <div class=\"nk-demo-image bg-pink\"><img src=\"../../images/landing/demo-hotel.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/demo-hotel2x.jpg 2x\" alt=\"Hotel Managemen\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Demo1</em><br><strong>Hotel
                            Management</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/cms/index.html\">
                <div class=\"nk-demo-image bg-dark\"><img src=\"../../images/landing/demo-cms.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/demo-cms2x.jpg 2x\" alt=\"cms\"></div><span
                        class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>CMS Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo5/crypto/index.html\">
                <div class=\"nk-demo-image bg-warning\"><img src=\"../../images/landing/demo-buysell.jpg\"
                                                           srcset=\"https://dashlite.net/images/landing/demo-buysell2x.jpg 2x\"
                                                           alt=\"Crypto BuySell / Wallet\"></div><span class=\"nk-demo-title\"><em
                            class=\"text-primary\">Demo5</em><br><strong>Crypto BuySell Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo6/invest/index.html\">
                <div class=\"nk-demo-image bg-indigo\"><img src=\"../../images/landing/demo-invest.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-invest2x.jpg 2x\" alt=\"HYIP / Investment\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Demo6</em><br><strong>HYIP / Investment
                            Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/apps/file-manager.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/demo-file-manager.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-file-manager2x.jpg 2x\" alt=\"File Manager\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>Apps - File
                            Manager</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo4/subscription/index.html\">
                <div class=\"nk-demo-image bg-primary\"><img src=\"../../images/landing/demo-subscription.jpg\"
                                                           srcset=\"https://dashlite.net/images/landing/demo-subscription2x.jpg 2x\"
                                                           alt=\"SAAS / Subscription\"></div><span class=\"nk-demo-title\"><em
                            class=\"text-primary\">Demo4</em><br><strong>SAAS / Subscription Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/covid/index.html\">
                <div class=\"nk-demo-image bg-danger\"><img src=\"../../images/landing/demo-covid19.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-covid192x.jpg 2x\" alt=\"Covid Situation\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Covid</em><br><strong>Coronavirus
                            Situation</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/apps/messages.html\">
                <div class=\"nk-demo-image bg-success\"><img src=\"../../images/landing/demo-messages.jpg\"
                                                           srcset=\"https://dashlite.net/images/landing/demo-messages2x.jpg 2x\" alt=\"Messages\"></div>
                <span class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>Apps -
                            Messages</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/apps/mailbox.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/demo-inbox.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-inbox2x.jpg 2x\" alt=\"Inbox\"></div><span
                        class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>Apps -
                            Mailbox</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/apps/chats.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/demo-chats.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-chats2x.jpg 2x\" alt=\"Chats / Messenger\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>Apps -
                            Chats</strong></span>
            </a></div>
    </div>
</div>
<div class=\"nk-demo-panel toggle-slide toggle-slide-right\" data-content=\"settingPanel\" data-toggle-overlay=\"true\"
     data-toggle-body=\"true\" data-toggle-screen=\"any\">
    <div class=\"nk-demo-head\">
        <h6 class=\"mb-0\">Preview Settings</h6><a class=\"nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2\"
                                                 data-target=\"settingPanel\" href=\"#\"><em class=\"icon ni ni-cross\"></em></a>
    </div>
    <div class=\"nk-opt-panel\" data-simplebar>
        <div class=\"nk-opt-set\">
            <div class=\"nk-opt-set-title\">Direction Change</div>
            <div class=\"nk-opt-list col-2x\">
                <div class=\"nk-opt-item only-text active\" data-key=\"dir\" data-update=\"ltr\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">LTR Mode</span></span></div>
                <div class=\"nk-opt-item only-text\" data-key=\"dir\" data-update=\"rtl\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">RTL Mode</span></span></div>
            </div>
        </div>
        <div class=\"nk-opt-set\">
            <div class=\"nk-opt-set-title\">Main UI Style</div>
            <div class=\"nk-opt-list col-2x\">
                <div class=\"nk-opt-item only-text active\" data-key=\"style\" data-update=\"ui-default\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">Default</span></span></div>
                <div class=\"nk-opt-item only-text\" data-key=\"style\" data-update=\"ui-clean\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">Clean</span></span></div>
                <div class=\"nk-opt-item only-text\" data-key=\"style\" data-update=\"ui-shady\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">Shady</span></span></div>
                <div class=\"nk-opt-item only-text\" data-key=\"style\" data-update=\"ui-softy\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">Softy</span></span></div>
            </div>
        </div>
        <div class=\"nk-opt-set nk-opt-set-aside\">
            <div class=\"nk-opt-set-title\">Sidebar Style</div>
            <div class=\"nk-opt-list col-4x\">
                <div class=\"nk-opt-item\" data-key=\"aside\" data-update=\"is-light\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"bg-lighter\"></span></span><span
                            class=\"nk-opt-item-name\">White</span></div>
                <div class=\"nk-opt-item\" data-key=\"aside\" data-update=\"is-default\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"bg-light\"></span></span><span
                            class=\"nk-opt-item-name\">Light</span></div>
                <div class=\"nk-opt-item active\" data-key=\"aside\" data-update=\"is-dark\"><span
                            class=\"nk-opt-item-bg\"><span class=\"bg-dark\"></span></span><span
                            class=\"nk-opt-item-name\">Dark</span></div>
                <div class=\"nk-opt-item\" data-key=\"aside\" data-update=\"is-theme\"><span class=\"nk-opt-item-bg\"><span
                                class=\"bg-theme\"></span></span><span class=\"nk-opt-item-name\">Theme</span></div>
            </div>
        </div>
        <div class=\"nk-opt-set nk-opt-set-header\">
            <div class=\"nk-opt-set-title\">Header Style</div>
            <div class=\"nk-opt-list col-4x\">
                <div class=\"nk-opt-item active\" data-key=\"header\" data-update=\"is-light\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"bg-lighter\"></span></span><span
                            class=\"nk-opt-item-name\">White</span></div>
                <div class=\"nk-opt-item\" data-key=\"header\" data-update=\"is-default\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"bg-light\"></span></span><span
                            class=\"nk-opt-item-name\">Light</span></div>
                <div class=\"nk-opt-item\" data-key=\"header\" data-update=\"is-dark\"><span class=\"nk-opt-item-bg\"><span
                                class=\"bg-dark\"></span></span><span class=\"nk-opt-item-name\">Dark</span></div>
                <div class=\"nk-opt-item\" data-key=\"header\" data-update=\"is-theme\"><span class=\"nk-opt-item-bg\"><span
                                class=\"bg-theme\"></span></span><span class=\"nk-opt-item-name\">Theme</span></div>
            </div>
        </div>
        <div class=\"nk-opt-set nk-opt-set-skin\">
            <div class=\"nk-opt-set-title\">Primary Skin</div>
            <div class=\"nk-opt-list\">
                <div class=\"nk-opt-item active\" data-key=\"skin\" data-update=\"default\"><span
                            class=\"nk-opt-item-bg\"><span class=\"skin-default\"></span></span><span
                            class=\"nk-opt-item-name\">Default</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"blue\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-blue\"></span></span><span class=\"nk-opt-item-name\">Blue</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"egyptian\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-egyptian\"></span></span><span class=\"nk-opt-item-name\">Egyptian</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"purple\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-purple\"></span></span><span class=\"nk-opt-item-name\">Purple</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"green\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-green\"></span></span><span class=\"nk-opt-item-name\">Green</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"red\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-red\"></span></span><span class=\"nk-opt-item-name\">Red</span></div>
            </div>
        </div>
        <div class=\"nk-opt-set\">
            <div class=\"nk-opt-set-title\">Skin Mode</div>
            <div class=\"nk-opt-list col-2x\">
                <div class=\"nk-opt-item active\" data-key=\"mode\" data-update=\"light-mode\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"theme-light\"></span></span><span
                            class=\"nk-opt-item-name\">Light Skin</span></div>
                <div class=\"nk-opt-item\" data-key=\"mode\" data-update=\"dark-mode\"><span class=\"nk-opt-item-bg\"><span
                                class=\"theme-dark\"></span></span><span class=\"nk-opt-item-name\">Dark Skin</span></div>
            </div>
        </div>
        <div class=\"nk-opt-reset\"><a href=\"#\" class=\"reset-opt-setting\">Reset Setting</a></div>
    </div>
</div>
<div class=\"pmo-lv pmo-dark\"><a class=\"pmo-close\" href=\"#\"><em class=\"ni ni-cross\"></em></a><a class=\"pmo-wrap\"
                                                                                               target=\"_blank\" href=\"https://softnio.com/get-early-access/\">
        <div class=\"pmo-text text-white\">Looking for functional script for HYIP Investment Platform? Check out <em
                    class=\"ni ni-arrow-long-right\"></em></div>
    </a></div><a class=\"pmo-st pmo-dark\" target=\"_blank\" href=\"https://softnio.com/get-early-access/\">
    <div class=\"pmo-st-img\"><img src=\"../../images/landing/promo-investorm.png\" alt=\"Investorm\"></div>
    <div class=\"pmo-st-text\">Looking for Advanced <br> HYIP Investment Platform?</div>
</a>
<script src=\"../assets/js/bundle6e0e.js?ver=3.0.0\"></script>
<script src=\"../assets/js/scripts6e0e.js?ver=3.0.0\"></script>
<script src=\"../assets/js/demo-settings6e0e.js?ver=3.0.0\"></script>
<script src=\"../assets/js/charts/chart-crm6e0e.js?ver=3.0.0\"></script>
</body>
<!-- Mirrored from dashlite.net/demo1/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Apr 2022 15:48:05 GMT -->

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\" class=\"js\">
<!-- Mirrored from dashlite.net/demo1/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Apr 2022 15:47:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->

<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"Softnio\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\"
          content=\"A powerful and conceptual apps base dashboard template that especially build for developers and programmers.\">
    <link rel=\"shortcut icon\" href=\"../images/favicon.png\">
    <title>Dashboard | CRM | DashLite Admin Template</title>
    <link rel=\"stylesheet\" href=\"../assets/css/dashlite6e0e.css?ver=3.0.0\">
    <link id=\"skin-default\" rel=\"stylesheet\" href=\"../assets/css/theme6e0e.css?ver=3.0.0\">
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-91615293-4\">

    </script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-91615293-4');</script>
</head>

<body class=\"nk-body bg-lighter npc-general has-sidebar \">
<div class=\"nk-app-root\">
    <div class=\"nk-main \">
        <div class=\"nk-sidebar nk-sidebar-fixed is-dark \" data-content=\"sidebarMenu\">
            <div class=\"nk-sidebar-element nk-sidebar-head\">
                <div class=\"nk-menu-trigger\">
                    <a href=\"#\" class=\"nk-nav-toggle nk-quick-nav-icon d-xl-none\" data-target=\"sidebarMenu\">
                        <em class=\"icon ni ni-arrow-left\"></em>
                    </a>
                    <a href=\"#\" class=\"nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex\"
                       data-target=\"sidebarMenu\">
                        <em class=\"icon ni ni-menu\"></em>
                    </a>
                </div>
                <div class=\"nk-sidebar-brand\">
                    <a href=\"https://dashlite.net/demo1/index.html\" class=\"logo-link nk-sidebar-logo\">
                        <img class=\"logo-light logo-img\" src=\"../images/logo.png\"
                             srcset=\"/demo1/images/logo2x.png 2x\" alt=\"logo\">
                        <img class=\"logo-dark logo-img\" src=\"../images/logo-dark.png\"
                             srcset=\"/demo1/images/logo-dark2x.png 2x\" alt=\"logo-dark\">
                    </a>
                </div>
            </div>
            <div class=\"nk-sidebar-element nk-sidebar-body\">
                <div class=\"nk-sidebar-content\">
                    <div class=\"nk-sidebar-menu\" data-simplebar>
                        <ul class=\"nk-menu\">
                            <li class=\"nk-menu-item\">
                                <a href=\"index.html\" class=\"nk-menu-link\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-dashboard-fill\">

                                            </em>
                                        </span>
                                    <span class=\"nk-menu-text\">Dashboard</span>
                                </a>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-users-fill\">

                                            </em>
                                            <span class=\"nk-menu-text\">Lead</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"people.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">People</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"organizations.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Organization</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item\">
                                <a href=\"customer-list.html\" class=\"nk-menu-link\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-user-list-fill\">

                                            </em>
                                        </span>
                                    <span class=\"nk-menu-text\">Customers</span>
                                </a>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-cart-fill\">

                                            </em>
                                        </span>
                                    <span class=\"nk-menu-text\">Sales</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"invoices.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Invoices</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"payment.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Payment</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"recent-sale.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Recent Sale</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"estimates.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Estimates</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"expenses.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Expenses</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-tranx\"></em>
                                        </span>
                                    <span class=\"nk-menu-text\">Transaction</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"deposit.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Recent Deposits</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"transaction.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\"> All Transaction</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"transfer-report.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Transfer Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-task-fill-c\"></em>
                                        </span>
                                    <span class=\"nk-menu-text\">Task</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"running-task.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Running Task</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"archive-task.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Archived Task</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-coin\"></em>
                                        </span>
                                    <span class=\"nk-menu-text\">Account</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"client-payment.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Client Payment</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"expense-management.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Expense Management</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\">
                                <a href=\"#\" class=\"nk-menu-link nk-menu-toggle\">
                                        <span class=\"nk-menu-icon\">
                                            <em class=\"icon ni ni-truck\">

                                            </em>
                                        </span>
                                    <span class=\"nk-menu-text\">Product Management</span>
                                </a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\">
                                        <a href=\"products.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Products</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"warehouse.html\" class=\"nk-menu-link\">
                                            <span class=\"nk-menu-text\">Warehouse</span>
                                        </a>
                                    </li>
                                    <li class=\"nk-menu-item\">
                                        <a href=\"product-transfer.html\" class=\"nk-menu-link\"><span
                                                    class=\"nk-menu-text\">Product Transfer</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item has-sub\"><a href=\"#\" class=\"nk-menu-link nk-menu-toggle\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-growth-fill\"></em></span><span
                                            class=\"nk-menu-text\">Report</span></a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\"><a href=\"dealing-info.html\" class=\"nk-menu-link\"><span
                                                    class=\"nk-menu-text\">Dealing Info</span></a></li>
                                    <li class=\"nk-menu-item\"><a href=\"client-report.html\" class=\"nk-menu-link\"><span
                                                    class=\"nk-menu-text\">Client Report</span></a></li>
                                    <li class=\"nk-menu-item\"><a href=\"expense-report.html\"
                                                                class=\"nk-menu-link\"><span class=\"nk-menu-text\">Expense
                                                    Report</span></a></li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item\"><a href=\"employee.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-layers-fill\"></em></span><span
                                            class=\"nk-menu-text\">Employees</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"projects.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-list-index-fill\"></em></span><span
                                            class=\"nk-menu-text\">Projects</span></a></li>
                            <li class=\"nk-menu-item has-sub\"><a href=\"#\" class=\"nk-menu-link nk-menu-toggle\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-coins\"></em></span><span
                                            class=\"nk-menu-text\">Payroll</span></a>
                                <ul class=\"nk-menu-sub\">
                                    <li class=\"nk-menu-item\"><a href=\"salary-grade.html\" class=\"nk-menu-link\"><span
                                                    class=\"nk-menu-text\">Salary grade</span></a></li>
                                    <li class=\"nk-menu-item\"><a href=\"employee-salary-list.html\"
                                                                class=\"nk-menu-link\"><span class=\"nk-menu-text\">Employee Salary
                                                    List</span></a></li>
                                </ul>
                            </li>
                            <li class=\"nk-menu-item\"><a href=\"time-history.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-calendar-check-fill\"></em></span><span
                                            class=\"nk-menu-text\">Attendance</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"subscription.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-invest\"></em></span><span
                                            class=\"nk-menu-text\">Subscription</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"notice-board.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em class=\"icon ni ni-notice\"></em></span><span
                                            class=\"nk-menu-text\">Notice Board</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"support.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-chat-circle-fill\"></em></span><span
                                            class=\"nk-menu-text\">Support</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"settings.html\" class=\"nk-menu-link\"><span
                                            class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-setting-alt-fill\"></em></span><span
                                            class=\"nk-menu-text\">Settings</span></a></li>
                            <li class=\"nk-menu-heading\">
                                <h6 class=\"overline-title text-primary-alt\">Return to</h6>
                            </li>
                            <li class=\"nk-menu-item\"><a href=\"https://dashlite.net/demo1/index.html\"
                                                        class=\"nk-menu-link\"><span class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-dashlite-alt\"></em></span><span
                                            class=\"nk-menu-text\">Main Dashboard</span></a></li>
                            <li class=\"nk-menu-item\"><a href=\"https://dashlite.net/demo1/components.html\"
                                                        class=\"nk-menu-link\"><span class=\"nk-menu-icon\"><em
                                                class=\"icon ni ni-layers-fill\"></em></span><span
                                            class=\"nk-menu-text\">All Components</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"nk-wrap \">
            <div class=\"nk-header nk-header-fixed is-light\">
                <div class=\"container-fluid\">
                    <div class=\"nk-header-wrap\">
                        <div class=\"nk-menu-trigger d-xl-none ms-n1\"><a href=\"#\"
                                                                        class=\"nk-nav-toggle nk-quick-nav-icon\" data-target=\"sidebarMenu\"><em
                                        class=\"icon ni ni-menu\"></em></a></div>
                        <div class=\"nk-header-brand d-xl-none\"><a href=\"https://dashlite.net/demo1/index.html\"
                                                                  class=\"logo-link\"><img class=\"logo-light logo-img\" src=\"../images/logo.png\"
                                                                                         srcset=\"/demo1/images/logo2x.png 2x\" alt=\"logo\"><img class=\"logo-dark logo-img\"
                                                                                                                                              src=\"../images/logo-dark.png\" srcset=\"/demo1/images/logo-dark2x.png 2x\"
                                                                                                                                              alt=\"logo-dark\"></a></div>
                        <div class=\"nk-header-news d-none d-xl-block\">
                            <div class=\"nk-news-list\"><a class=\"nk-news-item\" href=\"#\">
                                    <div class=\"nk-news-icon\"><em class=\"icon ni ni-card-view\"></em></div>
                                    <div class=\"nk-news-text\">
                                        <p>Do you know the latest update of 2022? <span> A overview of our is now
                                                    available on YouTube</span></p><em class=\"icon ni ni-external\"></em>
                                    </div>
                                </a></div>
                        </div>
                        <div class=\"nk-header-tools\">
                            <ul class=\"nk-quick-nav\">
                                <li class=\"dropdown language-dropdown d-none d-sm-block me-n1\"><a href=\"#\"
                                                                                                  class=\"dropdown-toggle nk-quick-nav-icon\" data-bs-toggle=\"dropdown\">
                                        <div class=\"quick-icon border border-light\"><img class=\"icon\"
                                                                                         src=\"../images/flags/english-sq.png\" alt=\"\"></div>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-s1\">
                                        <ul class=\"language-list\">
                                            <li><a href=\"#\" class=\"language-item\"><img
                                                            src=\"../images/flags/english.png\" alt=\"\"
                                                            class=\"language-flag\"><span
                                                            class=\"language-name\">English</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><img
                                                            src=\"../images/flags/spanish.png\" alt=\"\"
                                                            class=\"language-flag\"><span
                                                            class=\"language-name\">Español</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><img
                                                            src=\"../images/flags/french.png\" alt=\"\"
                                                            class=\"language-flag\"><span
                                                            class=\"language-name\">Français</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><img
                                                            src=\"../images/flags/turkey.png\" alt=\"\"
                                                            class=\"language-flag\"><span
                                                            class=\"language-name\">Türkçe</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"dropdown user-dropdown\"><a href=\"#\" class=\"dropdown-toggle\"
                                                                      data-bs-toggle=\"dropdown\">
                                        <div class=\"user-toggle\">
                                            <div class=\"user-avatar sm\"><em class=\"icon ni ni-user-alt\"></em></div>
                                            <div class=\"user-info d-none d-md-block\">
                                                <div class=\"user-status\">Administrator</div>
                                                <div class=\"user-name dropdown-indicator\">Abu Bin Ishityak</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1\">
                                        <div class=\"dropdown-inner user-card-wrap bg-lighter d-none d-md-block\">
                                            <div class=\"user-card\">
                                                <div class=\"user-avatar\"><span>AB</span></div>
                                                <div class=\"user-info\"><span class=\"lead-text\">Abu Bin
                                                            Ishtiyak</span><span
                                                            class=\"sub-text\">info@softnio.com</span></div>
                                            </div>
                                        </div>
                                        <div class=\"dropdown-inner\">
                                            <ul class=\"link-list\">
                                                <li><a href=\"https://dashlite.net/demo1/user-profile-regular.html\"><em
                                                                class=\"icon ni ni-user-alt\"></em><span>View
                                                                Profile</span></a></li>
                                                <li><a href=\"https://dashlite.net/demo1/user-profile-setting.html\"><em
                                                                class=\"icon ni ni-setting-alt\"></em><span>Account
                                                                Setting</span></a></li>
                                                <li><a href=\"https://dashlite.net/demo1/user-profile-activity.html\"><em
                                                                class=\"icon ni ni-activity-alt\"></em><span>Login
                                                                Activity</span></a></li>
                                            </ul>
                                        </div>
                                        <div class=\"dropdown-inner\">
                                            <ul class=\"link-list\">
                                                <li><a href=\"#\"><em class=\"icon ni ni-signout\"></em><span>Sign
                                                                out</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown notification-dropdown me-n1\"><a href=\"#\"
                                                                                    class=\"dropdown-toggle nk-quick-nav-icon\" data-bs-toggle=\"dropdown\">
                                        <div class=\"icon-status icon-status-info\"><em class=\"icon ni ni-bell\"></em>
                                        </div>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1\">
                                        <div class=\"dropdown-head\"><span
                                                    class=\"sub-title nk-dropdown-title\">Notifications</span><a
                                                    href=\"#\">Mark All as Read</a></div>
                                        <div class=\"dropdown-body\">
                                            <div class=\"nk-notification\">
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-warning-dim ni ni-curve-down-right\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">You have requested to
                                                            <span>Widthdrawl</span></div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-success-dim ni ni-curve-down-left\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-warning-dim ni ni-curve-down-right\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">You have requested to
                                                            <span>Widthdrawl</span></div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-success-dim ni ni-curve-down-left\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-warning-dim ni ni-curve-down-right\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">You have requested to
                                                            <span>Widthdrawl</span></div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-notification-item dropdown-inner\">
                                                    <div class=\"nk-notification-icon\"><em
                                                                class=\"icon icon-circle bg-success-dim ni ni-curve-down-left\"></em>
                                                    </div>
                                                    <div class=\"nk-notification-content\">
                                                        <div class=\"nk-notification-text\">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                        <div class=\"nk-notification-time\">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"dropdown-foot center\"><a href=\"#\">View All</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"nk-content \">
                <div class=\"container-fluid\">
                    <div class=\"nk-content-inner\">
                        <div class=\"nk-content-body\">
                            <div class=\"nk-block-head nk-block-head-sm\">
                                <div class=\"nk-block-between\">
                                    <div class=\"nk-block-head-content\">
                                        <h3 class=\"nk-block-title page-title\">CRM Dashboard</h3>
                                        <div class=\"nk-block-des text-soft\">
                                            <p>Welcome to CRM Dashboard.</p>
                                        </div>
                                    </div>
                                    <div class=\"nk-block-head-content\">
                                        <div class=\"toggle-wrap nk-block-tools-toggle\"><a href=\"#\"
                                                                                          class=\"btn btn-icon btn-trigger toggle-expand me-n1\"
                                                                                          data-target=\"pageMenu\"><em class=\"icon ni ni-more-v\"></em></a>
                                            <div class=\"toggle-expand-content\" data-content=\"pageMenu\">
                                                <ul class=\"nk-block-tools g-3\">
                                                    <li>
                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                 class=\"dropdown-toggle btn btn-white btn-dim btn-outline-light\"
                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                        class=\"d-none d-sm-inline icon ni ni-calender-date\"></em><span><span
                                                                            class=\"d-none d-md-inline\">Last</span> 30
                                                                        Days</span><em
                                                                        class=\"dd-indc icon ni ni-chevron-right\"></em></a>
                                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>Last 30 Days</span></a>
                                                                    </li>
                                                                    <li><a href=\"#\"><span>Last 6 Months</span></a>
                                                                    </li>
                                                                    <li><a href=\"#\"><span>Last 1 Years</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"nk-block-tools-opt\"><a href=\"#\"
                                                                                      class=\"btn btn-primary\"><em
                                                                    class=\"icon ni ni-reports\"></em><span>Reports</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"nk-block\">
                                <div class=\"row g-gs\">
                                    <div class=\"col-md-6 col-lg-5\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner\">
                                                <div class=\"card-title-group align-start pb-3 g-2\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Sales Revenue</h6>
                                                        <p>In last 30 days revenue from subscription.</p>
                                                    </div>
                                                    <div class=\"card-tools\"><em class=\"card-hint icon ni ni-help\"
                                                                                data-bs-toggle=\"tooltip\" data-bs-placement=\"left\"
                                                                                title=\"Customer of this month\"></em></div>
                                                </div>
                                                <div class=\"analytic-au\">
                                                    <div class=\"analytic-data-group analytic-au-group g-3\">
                                                        <div class=\"analytic-data analytic-au-data\">
                                                            <div class=\"title\">Monthly</div>
                                                            <div class=\"amount\">9.28K</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>4.63%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-au-data\">
                                                            <div class=\"title\">Weekly</div>
                                                            <div class=\"amount\">2.69K</div>
                                                            <div class=\"change down\"><em
                                                                        class=\"icon ni ni-arrow-long-down\"></em>1.92%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-au-data\">
                                                            <div class=\"title\">Daily (Avg)</div>
                                                            <div class=\"amount\">0.94K</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>3.45%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"analytic-au-ck\"><canvas class=\"analytics-au-chart\"
                                                                                        id=\"analyticAuData\"></canvas></div>
                                                    <div class=\"chart-label-group\">
                                                        <div class=\"chart-label\">01 Feb, 2021</div>
                                                        <div class=\"chart-label\">30 Feb, 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-7\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner\">
                                                <div class=\"card-title-group pb-3 g-2\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Import & Expense Report Statistics</h6>
                                                        <p>Report Comparison</p>
                                                    </div>
                                                    <div class=\"card-tools shrink-0 d-none d-sm-block\">
                                                        <ul class=\"nav nav-switch-s2 nav-tabs bg-white\">
                                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">7
                                                                    D</a></li>
                                                            <li class=\"nav-item\"><a href=\"#\"
                                                                                    class=\"nav-link active\">1 M</a></li>
                                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">3
                                                                    M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"analytic-ov\">
                                                    <div class=\"analytic-data-group analytic-ov-group g-3\">
                                                        <div class=\"analytic-data analytic-ov-data\">
                                                            <div class=\"title\">Yearly</div>
                                                            <div class=\"amount\">2.7K</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>12.37%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-ov-data\">
                                                            <div class=\"title\">Monothly</div>
                                                            <div class=\"amount\">3.8K</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>47.74%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-ov-data\">
                                                            <div class=\"title\">Weekly</div>
                                                            <div class=\"amount\">9.9%</div>
                                                            <div class=\"change down\"><em
                                                                        class=\"icon ni ni-arrow-long-down\"></em>12.37%
                                                            </div>
                                                        </div>
                                                        <div class=\"analytic-data analytic-ov-data\">
                                                            <div class=\"title\">Daily</div>
                                                            <div class=\"amount\">2.5%</div>
                                                            <div class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em>9.35%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"analytic-ov-ck\"><canvas class=\"analytics-line-large\"
                                                                                        id=\"analyticOvData\"></canvas></div>
                                                    <div class=\"chart-label-group ms-5\">
                                                        <div class=\"chart-label\">01 Jan, 2021</div>
                                                        <div class=\"chart-label d-none d-sm-block\">15 Jan, 2021
                                                        </div>
                                                        <div class=\"chart-label\">30 Jan, 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-7 col-xxl-4\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner mb-n2\">
                                                <div class=\"card-title-group\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Lead</h6>
                                                        <p>Lead Statictics</p>
                                                    </div>
                                                    <div class=\"card-tools\">
                                                        <div class=\"drodown\"><a href=\"#\"
                                                                                class=\"dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white\"
                                                                                data-bs-toggle=\"dropdown\">30 Days</a>
                                                            <div
                                                                    class=\"dropdown-menu dropdown-menu-end dropdown-menu-xs\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>7 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>15 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>30 Days</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"nk-tb-list is-loose traffic-channel-table\">
                                                <div class=\"nk-tb-item nk-tb-head\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span>Duration</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span>Count</span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span>Prev
                                                                Count</span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span>Change</span></div>
                                                    <div class=\"nk-tb-col nk-tb-trend tb-col-sm text-end\">
                                                        <span>Statistics</span></div>
                                                </div>
                                                <div class=\"nk-tb-item\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span
                                                                class=\"tb-lead\">Yearly</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>4305</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>4128</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span
                                                                class=\"tb-sub\"><span>4.29%</span> <span
                                                                    class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em></span></span>
                                                    </div>
                                                    <div class=\"nk-tb-col nk-tb-trend text-end\">
                                                        <div class=\"traffic-channel-ck ms-auto\"><canvas
                                                                    class=\"analytics-line-small\"
                                                                    id=\"OrganicSearchData\"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-tb-item\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span
                                                                class=\"tb-lead\">Monthly</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>859</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>936</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span
                                                                class=\"tb-sub\"><span>15.8%</span> <span
                                                                    class=\"change down\"><em
                                                                        class=\"icon ni ni-arrow-long-down\"></em></span></span>
                                                    </div>
                                                    <div class=\"nk-tb-col nk-tb-trend text-end\">
                                                        <div class=\"traffic-channel-ck ms-auto\"><canvas
                                                                    class=\"analytics-line-small\"
                                                                    id=\"SocialMediaData\"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-tb-item\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span
                                                                class=\"tb-lead\">Weekly</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>482</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>793</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span
                                                                class=\"tb-sub\"><span>41.3%</span> <span
                                                                    class=\"change down\"><em
                                                                        class=\"icon ni ni-arrow-long-down\"></em></span></span>
                                                    </div>
                                                    <div class=\"nk-tb-col nk-tb-trend text-end\">
                                                        <div class=\"traffic-channel-ck ms-auto\"><canvas
                                                                    class=\"analytics-line-small\"
                                                                    id=\"ReferralsData\"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class=\"nk-tb-item\">
                                                    <div class=\"nk-tb-col nk-tb-channel\"><span
                                                                class=\"tb-lead\">Daily</span></div>
                                                    <div class=\"nk-tb-col nk-tb-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>138</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-prev-sessions\"><span
                                                                class=\"tb-sub tb-amount\"><span>97</span></span></div>
                                                    <div class=\"nk-tb-col nk-tb-change\"><span
                                                                class=\"tb-sub\"><span>12.6%</span> <span
                                                                    class=\"change up\"><em
                                                                        class=\"icon ni ni-arrow-long-up\"></em></span></span>
                                                    </div>
                                                    <div class=\"nk-tb-col nk-tb-trend text-end\">
                                                        <div class=\"traffic-channel-ck ms-auto\"><canvas
                                                                    class=\"analytics-line-small\"
                                                                    id=\"OthersData\"></canvas></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-5\">
                                        <div class=\"card card-bordered card-full\">
                                            <div class=\"card-inner-group\">
                                                <div class=\"card-inner\">
                                                    <div class=\"card-title-group\">
                                                        <div class=\"card-title\">
                                                            <h6 class=\"title\">Recent Sale</h6>
                                                        </div>
                                                        <div class=\"card-tools\"><a href=\"recent-sale.html\"
                                                                                   class=\"link\">View All</a></div>
                                                    </div>
                                                </div>
                                                <div class=\"card-inner p-0\">
                                                    <table class=\"nk-tb-list nk-tb-ulist\">
                                                        <thead>
                                                        <tr class=\"nk-tb-item nk-tb-head\">
                                                            <th class=\"nk-tb-col\"><span
                                                                        class=\"sub-text\">ID</span></th>
                                                            <th class=\"nk-tb-col\"><span
                                                                        class=\"sub-text\">Name</span></th>
                                                            <th class=\"nk-tb-col\"><span
                                                                        class=\"sub-text\">Price</span></th>
                                                            <th class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"sub-text\">Status</span></th>
                                                            <th class=\"nk-tb-col nk-tb-col-tools text-end\">
                                                                <div class=\"dropdown\"><a href=\"#\"
                                                                                         class=\"btn btn-xs btn-trigger btn-icon dropdown-toggle me-n1\"
                                                                                         data-bs-toggle=\"dropdown\"
                                                                                         data-offset=\"0,5\"><em
                                                                                class=\"icon ni ni-more-h\"></em></a>
                                                                    <div
                                                                            class=\"dropdown-menu dropdown-menu-end\">
                                                                        <ul class=\"link-list-opt no-bdr\">
                                                                            <li><a href=\"#\"><em
                                                                                            class=\"icon ni ni-check-round-cut\"></em><span>Mark
                                                                                                As Done</span></a></li>
                                                                            <li><a href=\"#\"><em
                                                                                            class=\"icon ni ni-archive\"></em><span>Mark
                                                                                                As Archive</span></a>
                                                                            </li>
                                                                            <li><a href=\"#\"><em
                                                                                            class=\"icon ni ni-trash\"></em><span>Remove
                                                                                                Tasks</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class=\"nk-tb-item\">
                                                            <td class=\"nk-tb-col\"><span>P-78</span></td>
                                                            <td class=\"nk-tb-col\"><span>Mackbook<span
                                                                            class=\"dot dot-success d-lg-none ms-1\"></span></span>
                                                            </td>
                                                            <td class=\"nk-tb-col\"><span>\$999.00</span></td>
                                                            <td class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"badge badge-dot badge-dot-xs bg-success\">Available</span>
                                                            </td>
                                                            <td class=\"nk-tb-col nk-tb-col-tools\">
                                                                <ul class=\"nk-tb-actions\">
                                                                    <li>
                                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                                            <div
                                                                                    class=\"dropdown-menu dropdown-menu-end\">
                                                                                <ul
                                                                                        class=\"link-list-opt no-bdr\">
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#editDataDash\"><em
                                                                                                    class=\"icon ni ni-edit\"></em><span>Edit
                                                                                                        Info</span></a>
                                                                                    </li>
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#deleteData\"><em
                                                                                                    class=\"icon ni ni-trash\"></em><span>Trash</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class=\"nk-tb-item\">
                                                            <td class=\"nk-tb-col\"><span>P-56</span></td>
                                                            <td class=\"nk-tb-col\"><span>iPhone<span
                                                                            class=\"dot dot-danger d-lg-none ms-1\"></span></span>
                                                            </td>
                                                            <td class=\"nk-tb-col\"><span>\$700.00</span></td>
                                                            <td class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"badge badge-dot badge-dot-xs bg-danger\">Out
                                                                            of Stock</span></td>
                                                            <td class=\"nk-tb-col nk-tb-col-tools\">
                                                                <ul class=\"nk-tb-actions\">
                                                                    <li>
                                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                                            <div
                                                                                    class=\"dropdown-menu dropdown-menu-end\">
                                                                                <ul
                                                                                        class=\"link-list-opt no-bdr\">
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#editDataDash\"><em
                                                                                                    class=\"icon ni ni-edit\"></em><span>Edit
                                                                                                        Info</span></a>
                                                                                    </li>
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#deleteData\"><em
                                                                                                    class=\"icon ni ni-trash\"></em><span>Trash</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class=\"nk-tb-item\">
                                                            <td class=\"nk-tb-col\"><span>P-68</span></td>
                                                            <td class=\"nk-tb-col\"><span>Watch<span
                                                                            class=\"dot dot-success d-lg-none ms-1\"></span></span>
                                                            </td>
                                                            <td class=\"nk-tb-col\"><span>\$260.00</span></td>
                                                            <td class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"badge badge-dot badge-dot-xs bg-success\">Available</span>
                                                            </td>
                                                            <td class=\"nk-tb-col nk-tb-col-tools\">
                                                                <ul class=\"nk-tb-actions\">
                                                                    <li>
                                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                                            <div
                                                                                    class=\"dropdown-menu dropdown-menu-end\">
                                                                                <ul
                                                                                        class=\"link-list-opt no-bdr\">
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#editDataDash\"><em
                                                                                                    class=\"icon ni ni-edit\"></em><span>Edit
                                                                                                        Info</span></a>
                                                                                    </li>
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#deleteData\"><em
                                                                                                    class=\"icon ni ni-trash\"></em><span>Trash</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr class=\"nk-tb-item\">
                                                            <td class=\"nk-tb-col\"><span>P-56</span></td>
                                                            <td class=\"nk-tb-col\"><span>Earbuds<span
                                                                            class=\"dot dot-warning d-lg-none ms-1\"></span></span>
                                                            </td>
                                                            <td class=\"nk-tb-col\"><span>\$180.00</span></td>
                                                            <td class=\"nk-tb-col tb-col-lg\"><span
                                                                        class=\"badge badge-dot badge-dot-xs bg-warning\">Low
                                                                            Stock</span></td>
                                                            <td class=\"nk-tb-col nk-tb-col-tools\">
                                                                <ul class=\"nk-tb-actions\">
                                                                    <li>
                                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                                            <div
                                                                                    class=\"dropdown-menu dropdown-menu-end\">
                                                                                <ul
                                                                                        class=\"link-list-opt no-bdr\">
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#editDataDash\"><em
                                                                                                    class=\"icon ni ni-edit\"></em><span>Edit
                                                                                                        Info</span></a>
                                                                                    </li>
                                                                                    <li><a href=\"#\"
                                                                                           data-bs-toggle=\"modal\"
                                                                                           data-bs-target=\"#deleteData\"><em
                                                                                                    class=\"icon ni ni-trash\"></em><span>Trash</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-5 col-sm-6 col-xxl-3\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner\">
                                                <div class=\"card-title-group mb-5\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Client Payment Status</h6>
                                                    </div>
                                                    <div class=\"card-tools\">
                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                 class=\"dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white\"
                                                                                 data-bs-toggle=\"dropdown\">30 Days</a>
                                                            <div
                                                                    class=\"dropdown-menu dropdown-menu-end dropdown-menu-xs\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>7 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>15 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>30 Days</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"payment-status\">
                                                    <div class=\"nk-ck-md\"><canvas class=\"polar-chart\"
                                                                                  id=\"polarChartData\"></canvas></div>
                                                    <ul class=\"traffic-channel-group mt-3 ps-4\">
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#9cabff\"></span><span>Started</span>
                                                            </div>
                                                        </li>
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#f4aaa4\"></span><span>Inprogress</span>
                                                            </div>
                                                        </li>
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#9785FF\"></span><span>Completed</span>
                                                            </div>
                                                        </li>
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#E85347\"></span><span>Cencel</span>
                                                            </div>
                                                        </li>
                                                        <li class=\"m-1\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#8feac5\"></span><span>Success</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-7 col-sm-6 col-xxl-4\">
                                        <div class=\"card card-bordered card-full\">
                                            <div class=\"card-inner d-flex flex-column h-100\">
                                                <div class=\"card-title-group mb-3\">
                                                    <div class=\"card-title\">
                                                        <h6 class=\"title\">Running Projects</h6>
                                                        <p>In last 30 days top projects.</p>
                                                    </div>
                                                    <div class=\"card-tools mt-n4 me-n1\">
                                                        <div class=\"dropdown\"><a href=\"#\"
                                                                                 class=\"dropdown-toggle btn btn-icon btn-trigger\"
                                                                                 data-bs-toggle=\"dropdown\"><em
                                                                        class=\"icon ni ni-more-h\"></em></a>
                                                            <div
                                                                    class=\"dropdown-menu dropdown-menu-sm dropdown-menu-end\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>15 Days</span></a></li>
                                                                    <li><a href=\"#\" class=\"active\"><span>30
                                                                                    Days</span></a></li>
                                                                    <li><a href=\"#\"><span>3 Months</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"progress-list gy-3\">
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">IT Solution</div>
                                                            <div class=\"progress-amount\">78%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar\" data-progress=\"78\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">Internet configuration</div>
                                                            <div class=\"progress-amount\">48.49%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-orange\"
                                                                 data-progress=\"48.49\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">Database Management</div>
                                                            <div class=\"progress-amount\">29%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-teal\" data-progress=\"29\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">Design tool</div>
                                                            <div class=\"progress-amount\">56%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-pink\" data-progress=\"56\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">Banner completation</div>
                                                            <div class=\"progress-amount\">33%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-azure\" data-progress=\"33\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress-wrap\">
                                                        <div class=\"progress-text\">
                                                            <div class=\"progress-label\">SEO Marketing</div>
                                                            <div class=\"progress-amount\">65%</div>
                                                        </div>
                                                        <div class=\"progress progress-md\">
                                                            <div class=\"progress-bar bg-info\" data-progress=\"65\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-xxl-5\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner border-bottom\">
                                                <div class=\"card-title-group\">
                                                    <div class=\"card-title\">
                                                        <h6 class=\"title\">Support Requests</h6>
                                                    </div>
                                                    <div class=\"card-tools\"><a href=\"#\" class=\"link\">All
                                                            Requests</a></div>
                                                </div>
                                            </div>
                                            <ul class=\"nk-support\">
                                                <li class=\"nk-support-item\">
                                                    <div class=\"user-avatar\"><img src=\"../images/avatar/a-sm.jpg\"
                                                                                  alt=\"\"></div>
                                                    <div class=\"nk-support-content\">
                                                        <div class=\"title\"><span>Vincent Lopez</span>
                                                            <div class=\"status delivered\"><em
                                                                        class=\"icon ni ni-check-circle-fill\"></em></div>
                                                        </div>
                                                        <p>Thanks for contact us with your issues...</p><span
                                                                class=\"time\">6 min ago</span>
                                                    </div>
                                                </li>
                                                <li class=\"nk-support-item\">
                                                    <div class=\"user-avatar bg-purple-dim\"><span>DM</span></div>
                                                    <div class=\"nk-support-content \">
                                                        <div class=\"title\"><span>Daniel Moore</span>
                                                            <div class=\"status unread\"><em
                                                                        class=\"icon ni ni-bullet-fill\"></em></div>
                                                        </div>
                                                        <p>Thanks for contact us with your issues...</p><span
                                                                class=\"time\">2 Hours ago</span>
                                                    </div>
                                                </li>
                                                <li class=\"nk-support-item\">
                                                    <div class=\"user-avatar\"><img src=\"../images/avatar/b-sm.jpg\"
                                                                                  alt=\"\"></div>
                                                    <div class=\"nk-support-content\">
                                                        <div class=\"title\"><span>Larry Henry</span>
                                                            <div class=\"status sent\"><em
                                                                        class=\"icon ni ni-check-circle\"></em></div>
                                                        </div>
                                                        <p>Thanks for contact us with your issues...</p><span
                                                                class=\"time\">3 Hours ago</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-xxl-3\">
                                        <div class=\"card card-bordered h-100\">
                                            <div class=\"card-inner\">
                                                <div class=\"card-title-group\">
                                                    <div class=\"card-title card-title-sm\">
                                                        <h6 class=\"title\">Traffic Channel</h6>
                                                    </div>
                                                    <div class=\"card-tools\">
                                                        <div class=\"drodown\"><a href=\"#\"
                                                                                class=\"dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white\"
                                                                                data-bs-toggle=\"dropdown\">30 Days</a>
                                                            <div
                                                                    class=\"dropdown-menu dropdown-menu-end dropdown-menu-xs\">
                                                                <ul class=\"link-list-opt no-bdr\">
                                                                    <li><a href=\"#\"><span>7 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>15 Days</span></a></li>
                                                                    <li><a href=\"#\"><span>30 Days</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"traffic-channel\">
                                                    <div class=\"traffic-channel-doughnut-ck\"><canvas
                                                                class=\"analytics-doughnut\"
                                                                id=\"TrafficChannelDoughnutData\"></canvas></div>
                                                    <div class=\"traffic-channel-group g-2\">
                                                        <div class=\"traffic-channel-data\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#9cabff\"></span><span>Organic
                                                                        Search</span></div>
                                                            <div class=\"amount\">4,305 <small>58.63%</small></div>
                                                        </div>
                                                        <div class=\"traffic-channel-data\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#b8acff\"></span><span>Social
                                                                        Media</span></div>
                                                            <div class=\"amount\">859 <small>23.94%</small></div>
                                                        </div>
                                                        <div class=\"traffic-channel-data\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#ffa9ce\"></span><span>Referrals</span>
                                                            </div>
                                                            <div class=\"amount\">482 <small>12.94%</small></div>
                                                        </div>
                                                        <div class=\"traffic-channel-data\">
                                                            <div class=\"title\"><span class=\"dot dot-lg sq\"
                                                                                     data-bg=\"#f9db7b\"></span><span>Others</span>
                                                            </div>
                                                            <div class=\"amount\">138 <small>4.49%</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"nk-footer\">
                <div class=\"container-fluid\">
                    <div class=\"nk-footer-wrap\">
                        <div class=\"nk-footer-copyright\"> &copy; 2022 DashLite. Template by <a
                                    href=\"https://softnio.com/\" target=\"_blank\">Softnio</a></div>
                        <div class=\"nk-footer-links\">
                            <ul class=\"nav nav-sm\">
                                <li class=\"nav-item dropup\"><a href=\"#\"
                                                               class=\"dropdown-toggle dropdown-indicator has-indicator nav-link\"
                                                               data-bs-toggle=\"dropdown\" data-offset=\"0,10\"><span>English</span></a>
                                    <div class=\"dropdown-menu dropdown-menu-sm dropdown-menu-end\">
                                        <ul class=\"language-list\">
                                            <li><a href=\"#\" class=\"language-item\"><span
                                                            class=\"language-name\">English</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><span
                                                            class=\"language-name\">Español</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><span
                                                            class=\"language-name\">Français</span></a></li>
                                            <li><a href=\"#\" class=\"language-item\"><span
                                                            class=\"language-name\">Türkçe</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"nav-item\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#region\"
                                                        class=\"nav-link\"><em class=\"icon ni ni-globe\"></em><span class=\"ms-1\">Select
                                                Region</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"region\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\"><em
                        class=\"icon ni ni-cross-sm\"></em></a>
            <div class=\"modal-body modal-body-md\">
                <h5 class=\"title mb-4\">Select Your Country</h5>
                <div class=\"nk-country-region\">
                    <ul class=\"country-list text-center gy-2\">
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/arg.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Argentina</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/aus.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Australia</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/bangladesh.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Bangladesh</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/canada.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Canada
                                        <small>(English)</small></span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/china.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Centrafricaine</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/china.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">China</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/french.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">France</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/germany.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Germany</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/iran.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Iran</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/italy.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Italy</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/mexico.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">México</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/philipine.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Philippines</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/portugal.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Portugal</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/s-africa.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">South Africa</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/spanish.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Spain</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/switzerland.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">Switzerland</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/uk.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">United Kingdom</span></a></li>
                        <li><a href=\"#\" class=\"country-item\"><img src=\"../images/flags/english.png\" alt=\"\"
                                                                  class=\"country-flag\"><span class=\"country-name\">United State</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"addData\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><em
                        class=\"icon ni ni-cross-sm\"></em></a>
            <div class=\"modal-body modal-body-md\">
                <h5 class=\"modal-title\">Add Employee</h5>
                <form action=\"#\" class=\"mt-2\">
                    <div class=\"row g-gs\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"name\"> Name</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"name\"
                                                                      placeholder=\"Abu Bin Istiak\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"email\"> Email</label>
                                <div class=\"form-control-wrap\"><input type=\"email\" class=\"form-control\" id=\"email\"
                                                                      placeholder=\"info@softnio.com\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\">Department</label>
                                <div class=\"form-control-wrap\"><select class=\"form-select js-select2\">
                                        <option value=\"default_option\">Select Department</option>
                                        <option value=\"bangladesh\">Information Technology</option>
                                        <option value=\"canada\">Finance</option>
                                        <option value=\"england\">Marketing</option>
                                        <option value=\"pakistan\">Human Resource</option>
                                        <option value=\"usa\">Graphics</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"code\">Designation</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"code\"
                                                                      placeholder=\"Software developer\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"phone\">Phone</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"phone\"
                                                                      placeholder=\"+124 394-1787\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\">Address(Lane)</label>
                                <div class=\"form-control-wrap\"><select class=\"form-select js-select2\">
                                        <option value=\"default_option\">Select Address</option>
                                        <option value=\"dhaka\">House 165, Lane No 3, Mohakhali DOHS,Dhaka</option>
                                        <option value=\"london\">199 Bishopsgate, London</option>
                                        <option value=\"mumbai\">Narottam Morarji Marg, Mumbai</option>
                                        <option value=\"kualalampur\">Ipoh, Johor Bahru, Kualalampur</option>
                                        <option value=\"spain\">Gran Vía, Madrid.</option>
                                        <option value=\"usa\">182/A Y-ra, Boston</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\"><label class=\"form-label\">Varified</label>
                                <div class=\"form-control-wrap\">
                                    <ul class=\"custom-control-group g-3 align-center flex-wrap\">
                                        <li>
                                            <div class=\"custom-control custom-checkbox\"><input type=\"checkbox\"
                                                                                               class=\"custom-control-input\" checked=\"\" id=\"Check1\"><label
                                                        class=\"custom-control-label\" for=\"Check1\">Email</label></div>
                                        </li>
                                        <li>
                                            <div class=\"custom-control custom-checkbox\"><input type=\"checkbox\"
                                                                                               class=\"custom-control-input\" checked=\"\" id=\"Check2\"><label
                                                        class=\"custom-control-label\" for=\"Check2\">KYC</label></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\"><button data-bs-dismiss=\"modal\" type=\"submit\"
                                                            class=\"btn btn-primary\">Add Employee</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"editData\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><em
                        class=\"icon ni ni-cross-sm\"></em></a>
            <div class=\"modal-body modal-body-md\">
                <h5 class=\"modal-title\">Edit Employee</h5>
                <form action=\"#\" class=\"mt-2\">
                    <div class=\"row g-gs\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"edit-name\"> Name</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\"
                                                                      id=\"edit-name\" value=\"Abu Bin Istiak\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"edit-email\"> Email</label>
                                <div class=\"form-control-wrap\"><input type=\"email\" class=\"form-control\"
                                                                      id=\"edit-email\" value=\"info@softnio.com\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"dept\">Department</label>
                                <div class=\"form-control-wrap\"><select class=\"form-select js-select2\" id=\"dept\">
                                        <option value=\"default_option\">Select Department</option>
                                        <option value=\"bangladesh\">Information Technology</option>
                                        <option value=\"canada\">Finance</option>
                                        <option value=\"england\">Marketing</option>
                                        <option value=\"pakistan\">Human Resource</option>
                                        <option value=\"usa\">Graphics</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"edit-code\">Designation</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\"
                                                                      id=\"edit-code\" value=\"Software developer\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\" for=\"edit-phone\">Phone</label>
                                <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\"
                                                                      id=\"edit-phone\" value=\"+124 394-1787\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\">Address(Lane)</label>
                                <div class=\"form-control-wrap\"><select class=\"form-select js-select2\">
                                        <option value=\"default_option\">Select Address</option>
                                        <option value=\"dhaka\">House 165, Lane No 3, Mohakhali DOHS,Dhaka</option>
                                        <option value=\"london\">199 Bishopsgate, London</option>
                                        <option value=\"mumbai\">Narottam Morarji Marg, Mumbai</option>
                                        <option value=\"kualalampur\">Ipoh, Johor Bahru, Kualalampur</option>
                                        <option value=\"spain\">Gran Vía, Madrid.</option>
                                        <option value=\"usa\">182/A Y-ra, Boston</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\"><label class=\"form-label\">Varified</label>
                                <div class=\"form-control-wrap\">
                                    <ul class=\"custom-control-group g-3 align-center flex-wrap\">
                                        <li>
                                            <div class=\"custom-control custom-checkbox\"><input type=\"checkbox\"
                                                                                               class=\"custom-control-input\" checked=\"\" id=\"customCheck1\"><label
                                                        class=\"custom-control-label\" for=\"customCheck1\">Email</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"custom-control custom-checkbox\"><input type=\"checkbox\"
                                                                                               class=\"custom-control-input\" checked=\"\" id=\"customCheck2\"><label
                                                        class=\"custom-control-label\" for=\"customCheck2\">KYC</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\"><button data-bs-dismiss=\"modal\" type=\"submit\"
                                                            class=\"btn btn-primary\">Update Employee</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"deleteData\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\"><em
                        class=\"icon ni ni-cross\"></em></a>
            <div class=\"modal-body modal-body-sm text-center\">
                <div class=\"nk-modal py-4\"><em
                            class=\"nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger\"></em>
                    <h4 class=\"nk-modal-title\">Are You Sure ?</h4>
                    <div class=\"nk-modal-text mt-n2\">
                        <p class=\"text-soft\">This item will be removed permanently.</p>
                    </div>
                    <ul class=\"d-flex justify-content-center gx-4 mt-4\">
                        <li><button data-bs-dismiss=\"modal\" id=\"deleteEvent\" class=\"btn btn-success\">Yes, Delete
                                it</button></li>
                        <li><button data-bs-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#editEventPopup\"
                                    class=\"btn btn-danger btn-dim\">Cancel</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"editDataDash\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\"><a href=\"#\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><em
                        class=\"icon ni ni-cross\"></em></a>
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Edit Information</h5>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\">
                    <div class=\"form-group\"><label class=\"form-label\" for=\"dept-name\">Dept. Name</label>
                        <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"dept-name\"
                                                              value=\"Finance\"></div>
                    </div>
                    <div class=\"form-group\"><label class=\"form-label\" for=\"author-name\">Author Name</label>
                        <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"author-name\"
                                                              value=\"Abu Bin Istiak\"></div>
                    </div>
                    <div class=\"form-group\"><label class=\"form-label\" for=\"designtn\">Designation</label>
                        <div class=\"form-control-wrap\"><input type=\"text\" class=\"form-control\" id=\"designtn\"
                                                              value=\"Admin\"></div>
                    </div>
                    <div class=\"form-group\"><button data-bs-dismiss=\"modal\" type=\"submit\"
                                                    class=\"btn btn-primary\">Save Informations</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<ul class=\"nk-sticky-toolbar\">
    <li class=\"demo-layout\"><a class=\"toggle tipinfo\" data-target=\"demoML\" href=\"#\" title=\"Main Demo Preview\"><em
                    class=\"icon ni ni-dashlite\"></em></a></li>
    <li class=\"demo-thumb\"><a class=\"toggle tipinfo\" data-target=\"demoUC\" href=\"#\" title=\"Use Case Concept\"><em
                    class=\"icon ni ni-menu-squared\"></em></a></li>
    <li class=\"demo-settings\"><a class=\"toggle tipinfo\" data-target=\"settingPanel\" href=\"#\"
                                 title=\"Demo Settings\"><em class=\"icon ni ni-setting-alt\"></em></a></li>
    <li class=\"demo-purchase\"><a class=\"tipinfo\" target=\"_blank\" href=\"https://1.envato.market/e0y3g\"
                                 title=\"Purchase\"><em class=\"icon ni ni-cart\"></em></a></li>
</ul>
<div class=\"nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right\" data-content=\"demoML\"
     data-toggle-overlay=\"true\" data-toggle-body=\"true\" data-toggle-screen=\"any\">
    <div class=\"nk-demo-head\">
        <h6 class=\"mb-0\">Switch Demo Layout</h6><a
                class=\"nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2\" data-target=\"demoML\" href=\"#\"><em
                    class=\"icon ni ni-cross\"></em></a>
    </div>
    <div class=\"nk-demo-list\" data-simplebar>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo1/index.html\">
                <div class=\"nk-demo-image bg-blue\"><img class=\"bg-purple\" src=\"../../images/landing/layout-1d.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/layout-1d2x.jpg 2x\" alt=\"Demo Layout 1\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 1</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo2/index.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/layout-2d.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/layout-2d2x.jpg 2x\" alt=\"Demo Layout 2\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 2</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/index.html\">
                <div class=\"nk-demo-image bg-success\"><img src=\"../../images/landing/layout-3d.jpg\"
                                                           srcset=\"https://dashlite.net/images/landing/layout-3d2x.jpg 2x\" alt=\"Demo Layout 3\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 3</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo4/index.html\">
                <div class=\"nk-demo-image bg-indigo\"><img src=\"../../images/landing/layout-4d.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/layout-4d2x.jpg 2x\" alt=\"Demo Layout 4\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 4</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo5/index.html\">
                <div class=\"nk-demo-image bg-orange\"><img src=\"../../images/landing/layout-5d.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/layout-5d2x.jpg 2x\" alt=\"Demo Layout 5\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 5</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo6/index.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/layout-6d.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/layout-6d2x.jpg 2x\" alt=\"Demo Layout 6\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 6</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo7/index.html\">
                <div class=\"nk-demo-image bg-teal\"><img src=\"../../images/landing/layout-7d.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/layout-7d2x.jpg 2x\" alt=\"Demo Layout 7\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 7</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo8/index.html\">
                <div class=\"nk-demo-image bg-azure\"><img src=\"../../images/landing/layout-8d.jpg\"
                                                         srcset=\"https://dashlite.net/images/landing/layout-8d2x.jpg 2x\" alt=\"Demo Layout 8\"></div>
                <span class=\"nk-demo-title\"><strong>Demo Layout 8</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/landing/index.html\">
                <div class=\"nk-demo-image bg-red\"><img src=\"../../images/landing/main-landing.jpg\"
                                                       srcset=\"https://dashlite.net/images/landing/main-landing2x.jpg 2x\" alt=\"Landing Page\"></div>
                <span class=\"nk-demo-title\"><strong>Landing Page</strong> <span
                            class=\"badge badge-danger ml-1\">Free</span></span>
            </a></div>
    </div>
</div>
<div class=\"nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right\" data-content=\"demoUC\"
     data-toggle-overlay=\"true\" data-toggle-body=\"true\" data-toggle-screen=\"any\">
    <div class=\"nk-demo-head\">
        <h6 class=\"mb-0\">Use Case Concept</h6><a class=\"nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2\"
                                                 data-target=\"demoUC\" href=\"#\"><em class=\"icon ni ni-cross\"></em></a>
    </div>
    <div class=\"nk-demo-list\" data-simplebar>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo2/ecommerce/index.html\">
                <div class=\"nk-demo-image bg-dark\"><img src=\"../../images/landing/demo-ecommerce.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/demo-ecommerce2x.jpg 2x\" alt=\"Ecommerce\"></div>
                <span class=\"nk-demo-title\"><em class=\"text-primary\">Demo2</em><br><strong>E-Commerce
                            Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo2/lms/index.html\">
                <div class=\"nk-demo-image bg-danger\"><img src=\"../../images/landing/demo-lms.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-lms2x.jpg 2x\" alt=\"LMS\"></div><span
                        class=\"nk-demo-title\"><em class=\"text-primary\">Demo2</em><br><strong>LMS / Learning Management
                            System</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"index.html\">
                <div class=\"nk-demo-image bg-info\"><img src=\"../../images/landing/demo-crm.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/demo-crm2x.jpg 2x\"
                                                        alt=\"CRM / Customer Relationship\"></div><span class=\"nk-demo-title\"><em
                            class=\"text-primary\">Demo1</em><br><strong>CRM / Customer Relationship
                            Management</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo7/hospital/index.html\">
                <div class=\"nk-demo-image bg-indigo\"><img src=\"../../images/landing/demo-hospital.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-hospital2x.jpg 2x\"
                                                          alt=\"Hospital Managemen\"></div><span class=\"nk-demo-title\"><em
                            class=\"text-primary\">Demo7</em><br><strong>Hospital Management</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo1/hotel/index.html\">
                <div class=\"nk-demo-image bg-pink\"><img src=\"../../images/landing/demo-hotel.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/demo-hotel2x.jpg 2x\" alt=\"Hotel Managemen\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Demo1</em><br><strong>Hotel
                            Management</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/cms/index.html\">
                <div class=\"nk-demo-image bg-dark\"><img src=\"../../images/landing/demo-cms.jpg\"
                                                        srcset=\"https://dashlite.net/images/landing/demo-cms2x.jpg 2x\" alt=\"cms\"></div><span
                        class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>CMS Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo5/crypto/index.html\">
                <div class=\"nk-demo-image bg-warning\"><img src=\"../../images/landing/demo-buysell.jpg\"
                                                           srcset=\"https://dashlite.net/images/landing/demo-buysell2x.jpg 2x\"
                                                           alt=\"Crypto BuySell / Wallet\"></div><span class=\"nk-demo-title\"><em
                            class=\"text-primary\">Demo5</em><br><strong>Crypto BuySell Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo6/invest/index.html\">
                <div class=\"nk-demo-image bg-indigo\"><img src=\"../../images/landing/demo-invest.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-invest2x.jpg 2x\" alt=\"HYIP / Investment\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Demo6</em><br><strong>HYIP / Investment
                            Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/apps/file-manager.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/demo-file-manager.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-file-manager2x.jpg 2x\" alt=\"File Manager\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>Apps - File
                            Manager</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo4/subscription/index.html\">
                <div class=\"nk-demo-image bg-primary\"><img src=\"../../images/landing/demo-subscription.jpg\"
                                                           srcset=\"https://dashlite.net/images/landing/demo-subscription2x.jpg 2x\"
                                                           alt=\"SAAS / Subscription\"></div><span class=\"nk-demo-title\"><em
                            class=\"text-primary\">Demo4</em><br><strong>SAAS / Subscription Panel</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/covid/index.html\">
                <div class=\"nk-demo-image bg-danger\"><img src=\"../../images/landing/demo-covid19.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-covid192x.jpg 2x\" alt=\"Covid Situation\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Covid</em><br><strong>Coronavirus
                            Situation</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/apps/messages.html\">
                <div class=\"nk-demo-image bg-success\"><img src=\"../../images/landing/demo-messages.jpg\"
                                                           srcset=\"https://dashlite.net/images/landing/demo-messages2x.jpg 2x\" alt=\"Messages\"></div>
                <span class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>Apps -
                            Messages</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/apps/mailbox.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/demo-inbox.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-inbox2x.jpg 2x\" alt=\"Inbox\"></div><span
                        class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>Apps -
                            Mailbox</strong></span>
            </a></div>
        <div class=\"nk-demo-item\"><a href=\"https://dashlite.net/demo3/apps/chats.html\">
                <div class=\"nk-demo-image bg-purple\"><img src=\"../../images/landing/demo-chats.jpg\"
                                                          srcset=\"https://dashlite.net/images/landing/demo-chats2x.jpg 2x\" alt=\"Chats / Messenger\">
                </div><span class=\"nk-demo-title\"><em class=\"text-primary\">Demo3</em><br><strong>Apps -
                            Chats</strong></span>
            </a></div>
    </div>
</div>
<div class=\"nk-demo-panel toggle-slide toggle-slide-right\" data-content=\"settingPanel\" data-toggle-overlay=\"true\"
     data-toggle-body=\"true\" data-toggle-screen=\"any\">
    <div class=\"nk-demo-head\">
        <h6 class=\"mb-0\">Preview Settings</h6><a class=\"nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2\"
                                                 data-target=\"settingPanel\" href=\"#\"><em class=\"icon ni ni-cross\"></em></a>
    </div>
    <div class=\"nk-opt-panel\" data-simplebar>
        <div class=\"nk-opt-set\">
            <div class=\"nk-opt-set-title\">Direction Change</div>
            <div class=\"nk-opt-list col-2x\">
                <div class=\"nk-opt-item only-text active\" data-key=\"dir\" data-update=\"ltr\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">LTR Mode</span></span></div>
                <div class=\"nk-opt-item only-text\" data-key=\"dir\" data-update=\"rtl\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">RTL Mode</span></span></div>
            </div>
        </div>
        <div class=\"nk-opt-set\">
            <div class=\"nk-opt-set-title\">Main UI Style</div>
            <div class=\"nk-opt-list col-2x\">
                <div class=\"nk-opt-item only-text active\" data-key=\"style\" data-update=\"ui-default\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">Default</span></span></div>
                <div class=\"nk-opt-item only-text\" data-key=\"style\" data-update=\"ui-clean\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">Clean</span></span></div>
                <div class=\"nk-opt-item only-text\" data-key=\"style\" data-update=\"ui-shady\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">Shady</span></span></div>
                <div class=\"nk-opt-item only-text\" data-key=\"style\" data-update=\"ui-softy\"><span
                            class=\"nk-opt-item-bg\"><span class=\"nk-opt-item-name\">Softy</span></span></div>
            </div>
        </div>
        <div class=\"nk-opt-set nk-opt-set-aside\">
            <div class=\"nk-opt-set-title\">Sidebar Style</div>
            <div class=\"nk-opt-list col-4x\">
                <div class=\"nk-opt-item\" data-key=\"aside\" data-update=\"is-light\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"bg-lighter\"></span></span><span
                            class=\"nk-opt-item-name\">White</span></div>
                <div class=\"nk-opt-item\" data-key=\"aside\" data-update=\"is-default\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"bg-light\"></span></span><span
                            class=\"nk-opt-item-name\">Light</span></div>
                <div class=\"nk-opt-item active\" data-key=\"aside\" data-update=\"is-dark\"><span
                            class=\"nk-opt-item-bg\"><span class=\"bg-dark\"></span></span><span
                            class=\"nk-opt-item-name\">Dark</span></div>
                <div class=\"nk-opt-item\" data-key=\"aside\" data-update=\"is-theme\"><span class=\"nk-opt-item-bg\"><span
                                class=\"bg-theme\"></span></span><span class=\"nk-opt-item-name\">Theme</span></div>
            </div>
        </div>
        <div class=\"nk-opt-set nk-opt-set-header\">
            <div class=\"nk-opt-set-title\">Header Style</div>
            <div class=\"nk-opt-list col-4x\">
                <div class=\"nk-opt-item active\" data-key=\"header\" data-update=\"is-light\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"bg-lighter\"></span></span><span
                            class=\"nk-opt-item-name\">White</span></div>
                <div class=\"nk-opt-item\" data-key=\"header\" data-update=\"is-default\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"bg-light\"></span></span><span
                            class=\"nk-opt-item-name\">Light</span></div>
                <div class=\"nk-opt-item\" data-key=\"header\" data-update=\"is-dark\"><span class=\"nk-opt-item-bg\"><span
                                class=\"bg-dark\"></span></span><span class=\"nk-opt-item-name\">Dark</span></div>
                <div class=\"nk-opt-item\" data-key=\"header\" data-update=\"is-theme\"><span class=\"nk-opt-item-bg\"><span
                                class=\"bg-theme\"></span></span><span class=\"nk-opt-item-name\">Theme</span></div>
            </div>
        </div>
        <div class=\"nk-opt-set nk-opt-set-skin\">
            <div class=\"nk-opt-set-title\">Primary Skin</div>
            <div class=\"nk-opt-list\">
                <div class=\"nk-opt-item active\" data-key=\"skin\" data-update=\"default\"><span
                            class=\"nk-opt-item-bg\"><span class=\"skin-default\"></span></span><span
                            class=\"nk-opt-item-name\">Default</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"blue\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-blue\"></span></span><span class=\"nk-opt-item-name\">Blue</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"egyptian\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-egyptian\"></span></span><span class=\"nk-opt-item-name\">Egyptian</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"purple\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-purple\"></span></span><span class=\"nk-opt-item-name\">Purple</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"green\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-green\"></span></span><span class=\"nk-opt-item-name\">Green</span></div>
                <div class=\"nk-opt-item\" data-key=\"skin\" data-update=\"red\"><span class=\"nk-opt-item-bg\"><span
                                class=\"skin-red\"></span></span><span class=\"nk-opt-item-name\">Red</span></div>
            </div>
        </div>
        <div class=\"nk-opt-set\">
            <div class=\"nk-opt-set-title\">Skin Mode</div>
            <div class=\"nk-opt-list col-2x\">
                <div class=\"nk-opt-item active\" data-key=\"mode\" data-update=\"light-mode\"><span
                            class=\"nk-opt-item-bg is-light\"><span class=\"theme-light\"></span></span><span
                            class=\"nk-opt-item-name\">Light Skin</span></div>
                <div class=\"nk-opt-item\" data-key=\"mode\" data-update=\"dark-mode\"><span class=\"nk-opt-item-bg\"><span
                                class=\"theme-dark\"></span></span><span class=\"nk-opt-item-name\">Dark Skin</span></div>
            </div>
        </div>
        <div class=\"nk-opt-reset\"><a href=\"#\" class=\"reset-opt-setting\">Reset Setting</a></div>
    </div>
</div>
<div class=\"pmo-lv pmo-dark\"><a class=\"pmo-close\" href=\"#\"><em class=\"ni ni-cross\"></em></a><a class=\"pmo-wrap\"
                                                                                               target=\"_blank\" href=\"https://softnio.com/get-early-access/\">
        <div class=\"pmo-text text-white\">Looking for functional script for HYIP Investment Platform? Check out <em
                    class=\"ni ni-arrow-long-right\"></em></div>
    </a></div><a class=\"pmo-st pmo-dark\" target=\"_blank\" href=\"https://softnio.com/get-early-access/\">
    <div class=\"pmo-st-img\"><img src=\"../../images/landing/promo-investorm.png\" alt=\"Investorm\"></div>
    <div class=\"pmo-st-text\">Looking for Advanced <br> HYIP Investment Platform?</div>
</a>
<script src=\"../assets/js/bundle6e0e.js?ver=3.0.0\"></script>
<script src=\"../assets/js/scripts6e0e.js?ver=3.0.0\"></script>
<script src=\"../assets/js/demo-settings6e0e.js?ver=3.0.0\"></script>
<script src=\"../assets/js/charts/chart-crm6e0e.js?ver=3.0.0\"></script>
</body>
<!-- Mirrored from dashlite.net/demo1/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Apr 2022 15:48:05 GMT -->

</html>", "reservation/index.html.twig", "C:\\Users\\Rzouga\\Desktop\\Nouveau dossier (2)\\PackandGo\\templates\\reservation\\index.html.twig");
    }
}