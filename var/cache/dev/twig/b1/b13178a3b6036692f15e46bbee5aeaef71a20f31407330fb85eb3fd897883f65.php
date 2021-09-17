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

/* base.html.twig */
class __TwigTemplate_ccc1a362447d6bd975ef11daf7ef0a6cea075ec7489739c86d7d70c17218f38b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "

    </head>
    <body>

        <div class=\"theme-loader\">
            <div class=\"ball-scale\">
                <div></div>
            </div>
        </div>
        <div id=\"pcoded\" class=\"pcoded\">
            <div class=\"pcoded-overlay-box\"></div>
            <div class=\"pcoded-container navbar-wrapper\">

                <nav class=\"navbar header-navbar pcoded-header\" header-theme=\"theme4\">
                    <div class=\"navbar-wrapper\">
                        <div class=\"navbar-logo\">
                            <a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\">
                                <i class=\"ti-menu\"></i>
                            </a>
                            <a class=\"mobile-search morphsearch-search\" href=\"#\">
                                <i class=\"ti-search\"></i>
                            </a>
                            <a href=\"index.html\">
                                <img class=\"img-fluid\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_mobelite.svg"), "html", null, true);
        echo "\" alt=\"Theme-Logo\" />
                            </a>
                            <a class=\"mobile-options\">
                                <i class=\"ti-more\"></i>
                            </a>
                        </div>
                        <div class=\"navbar-container container-fluid\">
                            <div>
                                <ul class=\"nav-left\">
                                    <li>
                                        <div class=\"sidebar_toggle\"><a href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a></div>
                                    </li>
                                    <li>
                                        <a class=\"main-search morphsearch-search\" href=\"#\">
                                            <!-- themify icon -->
                                            <i class=\"ti-search\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#!\" onclick=\"javascript:toggleFullScreen()\">
                                            <i class=\"ti-fullscreen\"></i>
                                        </a>
                                    </li>

                                </ul>
                                <ul class=\"nav-right\">

                                    <li class=\"header-notification\">
                                        <a href=\"#!\">
                                            <i class=\"ti-bell\"></i>
                                            <span class=\"badge\">5</span>
                                        </a>
                                        <ul class=\"show-notification\">
                                            <li>
                                                <h6>Notifications</h6>
                                                <label class=\"label label-danger\">New</label>
                                            </li>
                                            <li>
                                                <div class=\"media\">
                                                    <img class=\"d-flex align-self-center\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                                                    <div class=\"media-body\">
                                                        <h5 class=\"notification-user\">John Doe</h5>
                                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class=\"notification-time\">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"media\">
                                                    <img class=\"d-flex align-self-center\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                                                    <div class=\"media-body\">
                                                        <h5 class=\"notification-user\">Joseph William</h5>
                                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class=\"notification-time\">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"media\">
                                                    <img class=\"d-flex align-self-center\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                                                    <div class=\"media-body\">
                                                        <h5 class=\"notification-user\">Sara Soudein</h5>
                                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class=\"notification-time\">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class=\"user-profile header-notification\">
                                        <a href=\"#!\">
                                            <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"User-Profile-Image\">
                                            <span>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "firstName", [], "any", false, false, false, 133), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "lastName", [], "any", false, false, false, 133), "html", null, true);
        echo "</span>
                                            <i class=\"ti-angle-down\"></i>
                                        </a>
                                        <ul class=\"show-notification profile-notification\">
                                            <li>
                                                <a href=\"#!\">
                                                    <i class=\"ti-settings\"></i> Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"user-profile.html\">
                                                    <i class=\"ti-user\"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"email-inbox.html\">
                                                    <i class=\"ti-email\"></i> My Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"auth-lock-screen.html\">
                                                    <i class=\"ti-lock\"></i> Lock Screen
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                                    <i class=\"ti-layout-sidebar-left\"></i> Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- search -->
                                <div id=\"morphsearch\" class=\"morphsearch\">
                                    <form class=\"morphsearch-form\">
                                        <input class=\"morphsearch-input\" type=\"search\" placeholder=\"Search...\" />
                                        <button class=\"morphsearch-submit\" type=\"submit\">Search</button>
                                    </form>

                                    <!-- /morphsearch-content -->
                                    <span class=\"morphsearch-close\"><i class=\"icofont icofont-search-alt-1\"></i></span>
                                </div>
                                <!-- search end -->
                            </div>
                        </div>
                    </div>
                </nav>

                <div class=\"pcoded-main-container\">
                    <div class=\"pcoded-wrapper\">
                        <nav class=\"pcoded-navbar\" pcoded-header-position=\"relative\">
                            <div class=\"sidebar_toggle\"><a href=\"#\"><i class=\"icon-close icons\"></i></a></div>
                            <div class=\"pcoded-inner-navbar main-menu\">
                                <div class=\"\">
                                    <div class=\"main-menu-header\">
                                        <img class=\"img-40\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" alt=\"User-Profile-Image\">
                                        <div class=\"user-details\">
                                            <span>";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "firstName", [], "any", false, false, false, 190), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "lastName", [], "any", false, false, false, 190), "html", null, true);
        echo "</span>
                                            <span id=\"more-details\">
                                                Admin
                                                <i class=\"ti-angle-down\"></i></span>
                                        </div>
                                    </div>

                                    <div class=\"main-menu-content\">
                                        <ul>
                                            <li class=\"more-details\">
                                                <a href=\"#!\"><i class=\"ti-user\"></i>View Profile</a>
                                                <a href=\"#!\"><i class=\"ti-settings\"></i>Settings</a>
                                                <a href=\"#!\"><i class=\"ti-layout-sidebar-left\"></i>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"pcoded-navigatio-lavel\" data-i18n=\"nav.category.navigation\" menu-title-theme=\"theme5\">Navigation</div>
                                <ul class=\"pcoded-item pcoded-left-item\">
                                        <li ";
        // line 209
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "request", [], "any", false, false, false, 209), "attributes", [], "any", false, false, false, 209), "get", [0 => "_route"], "method", false, false, false, 209), "dashboard"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                            <a href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                                                <span class=\"pcoded-micon\"><i class=\"ti-dashboard\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.main\">Dashboard</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li ";
        // line 216
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "request", [], "any", false, false, false, 216), "attributes", [], "any", false, false, false, 216), "get", [0 => "_route"], "method", false, false, false, 216), "servers_index"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                            <a href=\"";
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servers_index");
        echo "\">
                                                <span class=\"pcoded-micon\"><i class=\"fa fa-server\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Servers</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li ";
        // line 223
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "request", [], "any", false, false, false, 223), "attributes", [], "any", false, false, false, 223), "get", [0 => "_route"], "method", false, false, false, 223), "domains_index"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                            <a href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("domains_index");
        echo "\">
                                                <span class=\"pcoded-micon\"><i class=\"ti-world\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Domains</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li ";
        // line 230
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "request", [], "any", false, false, false, 230), "attributes", [], "any", false, false, false, 230), "get", [0 => "_route"], "method", false, false, false, 230), "hosts_index"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                            <a href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hosts_index");
        echo "\">
                                                <span class=\"pcoded-micon\"><i class=\"ti-cloud\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Hosts</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li ";
        // line 237
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "request", [], "any", false, false, false, 237), "attributes", [], "any", false, false, false, 237), "get", [0 => "_route"], "method", false, false, false, 237), "certificates_index"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                            <a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificates_index");
        echo "\">
                                                <span class=\"pcoded-micon\"><i class=\"fa fa-certificate\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Certificates</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li class=\"
                                                pcoded-hasmenu
                                                
                                                ";
        // line 247
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 248
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "request", [], "any", false, false, false, 248), "attributes", [], "any", false, false, false, 248), "get", [0 => "_route"], "method", false, false, false, 248), "clients_index"))) {
            echo " 
                                                    pcoded-trigger active 
                                                ";
        }
        // line 251
        echo "                                                ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 252
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 252, $this->source); })()), "request", [], "any", false, false, false, 252), "attributes", [], "any", false, false, false, 252), "get", [0 => "_route"], "method", false, false, false, 252), "accounts_managers_index"))) {
            echo " 
                                                    pcoded-trigger active 
                                                ";
        }
        // line 255
        echo "                                                ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 256
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 256, $this->source); })()), "request", [], "any", false, false, false, 256), "attributes", [], "any", false, false, false, 256), "get", [0 => "_route"], "method", false, false, false, 256), "projects_index"))) {
            echo " 
                                                    pcoded-trigger active 
                                                ";
        }
        // line 259
        echo "                                                ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 260
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "request", [], "any", false, false, false, 260), "attributes", [], "any", false, false, false, 260), "get", [0 => "_route"], "method", false, false, false, 260), "user_index"))) {
            echo " 
                                                    pcoded-trigger active 
                                                ";
        }
        // line 263
        echo "                                            \">
                                            <a href=\"javascript:void(0)\">
                                                <span class=\"pcoded-micon\"><i class=\"ti-settings\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Config</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                            <ul class=\"pcoded-submenu\">
                                                <li ";
        // line 270
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "request", [], "any", false, false, false, 270), "attributes", [], "any", false, false, false, 270), "get", [0 => "_route"], "method", false, false, false, 270), "clients_index"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                                    <a href=\"";
        // line 271
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clients_index");
        echo "\">
                                                        <span class=\"pcoded-micon\"><i class=\"icon-user\"></i></span>
                                                        <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.default\">Clients</span>
                                                        <span class=\"pcoded-mcaret\"></span>
                                                    </a>
                                                </li>
                                                <li ";
        // line 277
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "request", [], "any", false, false, false, 277), "attributes", [], "any", false, false, false, 277), "get", [0 => "_route"], "method", false, false, false, 277), "accounts_managers_index"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                                    <a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accounts_managers_index");
        echo "\">
                                                        <span class=\"pcoded-micon\"><i class=\"icon-user\"></i></span>
                                                        <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.default\">Accounts managers</span>
                                                        <span class=\"pcoded-mcaret\"></span>
                                                    </a>
                                                </li>
                                                <li ";
        // line 284
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "request", [], "any", false, false, false, 284), "attributes", [], "any", false, false, false, 284), "get", [0 => "_route"], "method", false, false, false, 284), "projects_index"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                                    <a href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_index");
        echo "\">
                                                        <span class=\"pcoded-micon\"><i class=\"icon-user\"></i></span>
                                                        <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.default\">Projects</span>
                                                        <span class=\"pcoded-mcaret\"></span>
                                                    </a>
                                                </li>
                                                <li ";
        // line 291
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "request", [], "any", false, false, false, 291), "attributes", [], "any", false, false, false, 291), "get", [0 => "_route"], "method", false, false, false, 291), "user_index"))) {
            echo " class=\"active\" ";
        }
        echo ">
                                                    <a href=\"";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">
                                                        <span class=\"pcoded-micon\"><i class=\"icon-user\"></i></span>
                                                        <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.default\">Users</span>
                                                        <span class=\"pcoded-mcaret\"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div>
                            </nav>
                            <div class=\"pcoded-content\">
                                <div class=\"pcoded-inner-content\">

                                    <div class=\"main-body\">

                                        ";
        // line 309
        $this->displayBlock('body', $context, $blocks);
        // line 310
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 318
        $this->displayBlock('javascripts', $context, $blocks);
        // line 360
        echo "        </body>
    </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mobelite labs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/menu-search/css/component.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/flag-icon/flag-icon.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/icofont/css/icofont.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashboard/horizontal-timeline/css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashboard/amchart/css/amchart.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/flag-icon/flag-icon.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/linearicons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/simple-line-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ionicons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">

            <!-- notifications styles-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/css/pnotify.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/css/pnotify.brighttheme.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/css/pnotify.buttons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/css/pnotify.history.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/css/pnotify.mobile.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/pnotify/notify.css"), "html", null, true);
        echo "\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 309
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 318
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 319
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/jquery/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/jquery-ui/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/popper.js/js/popper.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/modernizr/js/modernizr.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/modernizr/js/css-scrollbars.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/classie/js/classie.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/d3/js/d3.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/rickshaw/js/rickshaw.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/raphael/js/raphael.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/morris.js/js/morris.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashboard/horizontal-timeline/js/main.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashboard/amchart/js/amcharts.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashboard/amchart/js/serial.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashboard/amchart/js/light.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashboard/amchart/js/custom-amchart.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/i18next/js/i18next.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"), "html", null, true);
        echo "\"></script>

                <script type=\"text/javascript\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pcoded.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo-12.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>

                <!-- notifications scripts -->
                <script type=\"text/javascript\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.desktop.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.buttons.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.confirm.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.callbacks.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.animate.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.history.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.mobile.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/pnotify/js/pnotify.nonblock.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-growl.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/notification/notification.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  785 => 358,  781 => 357,  777 => 356,  773 => 355,  769 => 354,  765 => 353,  761 => 352,  757 => 351,  753 => 350,  749 => 349,  745 => 348,  739 => 345,  735 => 344,  731 => 343,  727 => 342,  723 => 341,  718 => 339,  714 => 338,  710 => 337,  706 => 336,  702 => 335,  698 => 334,  694 => 333,  690 => 332,  686 => 331,  682 => 330,  678 => 329,  674 => 328,  670 => 327,  666 => 326,  662 => 325,  658 => 324,  654 => 323,  650 => 322,  646 => 321,  642 => 320,  637 => 319,  627 => 318,  609 => 309,  596 => 33,  592 => 32,  588 => 31,  584 => 30,  580 => 29,  576 => 28,  570 => 25,  566 => 24,  562 => 23,  558 => 22,  554 => 21,  550 => 20,  546 => 19,  542 => 18,  538 => 17,  534 => 16,  530 => 15,  526 => 14,  522 => 13,  518 => 12,  511 => 9,  501 => 8,  482 => 7,  470 => 360,  468 => 318,  458 => 310,  456 => 309,  436 => 292,  430 => 291,  421 => 285,  415 => 284,  406 => 278,  400 => 277,  391 => 271,  385 => 270,  376 => 263,  370 => 260,  368 => 259,  362 => 256,  360 => 255,  354 => 252,  352 => 251,  346 => 248,  345 => 247,  333 => 238,  327 => 237,  318 => 231,  312 => 230,  303 => 224,  297 => 223,  288 => 217,  282 => 216,  273 => 210,  267 => 209,  243 => 190,  238 => 188,  205 => 158,  175 => 133,  171 => 132,  155 => 119,  142 => 109,  129 => 99,  87 => 60,  61 => 36,  59 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\">
        <title>{% block title %}Mobelite labs{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" type=\"image/x-icon\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/bootstrap/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/menu-search/css/component.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/flag-icon/flag-icon.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/icon/themify-icons/themify-icons.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/icon/icofont/css/icofont.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/dashboard/horizontal-timeline/css/style.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/dashboard/amchart/css/amchart.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/flag-icon/flag-icon.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/linearicons.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/simple-line-icons.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/ionicons.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/jquery.mCustomScrollbar.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}\">

            <!-- notifications styles-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/pnotify/css/pnotify.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/pnotify/css/pnotify.brighttheme.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/pnotify/css/pnotify.buttons.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/pnotify/css/pnotify.history.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/pnotify/css/pnotify.mobile.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/pnotify/notify.css') }}\">

        {% endblock %}


    </head>
    <body>

        <div class=\"theme-loader\">
            <div class=\"ball-scale\">
                <div></div>
            </div>
        </div>
        <div id=\"pcoded\" class=\"pcoded\">
            <div class=\"pcoded-overlay-box\"></div>
            <div class=\"pcoded-container navbar-wrapper\">

                <nav class=\"navbar header-navbar pcoded-header\" header-theme=\"theme4\">
                    <div class=\"navbar-wrapper\">
                        <div class=\"navbar-logo\">
                            <a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\">
                                <i class=\"ti-menu\"></i>
                            </a>
                            <a class=\"mobile-search morphsearch-search\" href=\"#\">
                                <i class=\"ti-search\"></i>
                            </a>
                            <a href=\"index.html\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/images/logo_mobelite.svg') }}\" alt=\"Theme-Logo\" />
                            </a>
                            <a class=\"mobile-options\">
                                <i class=\"ti-more\"></i>
                            </a>
                        </div>
                        <div class=\"navbar-container container-fluid\">
                            <div>
                                <ul class=\"nav-left\">
                                    <li>
                                        <div class=\"sidebar_toggle\"><a href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a></div>
                                    </li>
                                    <li>
                                        <a class=\"main-search morphsearch-search\" href=\"#\">
                                            <!-- themify icon -->
                                            <i class=\"ti-search\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#!\" onclick=\"javascript:toggleFullScreen()\">
                                            <i class=\"ti-fullscreen\"></i>
                                        </a>
                                    </li>

                                </ul>
                                <ul class=\"nav-right\">

                                    <li class=\"header-notification\">
                                        <a href=\"#!\">
                                            <i class=\"ti-bell\"></i>
                                            <span class=\"badge\">5</span>
                                        </a>
                                        <ul class=\"show-notification\">
                                            <li>
                                                <h6>Notifications</h6>
                                                <label class=\"label label-danger\">New</label>
                                            </li>
                                            <li>
                                                <div class=\"media\">
                                                    <img class=\"d-flex align-self-center\" src=\"{{ asset('assets/images/user.png') }}\" alt=\"Generic placeholder image\">
                                                    <div class=\"media-body\">
                                                        <h5 class=\"notification-user\">John Doe</h5>
                                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class=\"notification-time\">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"media\">
                                                    <img class=\"d-flex align-self-center\" src=\"{{ asset('assets/images/user.png') }}\" alt=\"Generic placeholder image\">
                                                    <div class=\"media-body\">
                                                        <h5 class=\"notification-user\">Joseph William</h5>
                                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class=\"notification-time\">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"media\">
                                                    <img class=\"d-flex align-self-center\" src=\"{{ asset('assets/images/user.png') }}\" alt=\"Generic placeholder image\">
                                                    <div class=\"media-body\">
                                                        <h5 class=\"notification-user\">Sara Soudein</h5>
                                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class=\"notification-time\">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class=\"user-profile header-notification\">
                                        <a href=\"#!\">
                                            <img src=\"{{ asset('assets/images/user.png') }}\" alt=\"User-Profile-Image\">
                                            <span>{{ app.user.firstName }} {{ app.user.lastName }}</span>
                                            <i class=\"ti-angle-down\"></i>
                                        </a>
                                        <ul class=\"show-notification profile-notification\">
                                            <li>
                                                <a href=\"#!\">
                                                    <i class=\"ti-settings\"></i> Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"user-profile.html\">
                                                    <i class=\"ti-user\"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"email-inbox.html\">
                                                    <i class=\"ti-email\"></i> My Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"auth-lock-screen.html\">
                                                    <i class=\"ti-lock\"></i> Lock Screen
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('app_logout') }}\">
                                                    <i class=\"ti-layout-sidebar-left\"></i> Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- search -->
                                <div id=\"morphsearch\" class=\"morphsearch\">
                                    <form class=\"morphsearch-form\">
                                        <input class=\"morphsearch-input\" type=\"search\" placeholder=\"Search...\" />
                                        <button class=\"morphsearch-submit\" type=\"submit\">Search</button>
                                    </form>

                                    <!-- /morphsearch-content -->
                                    <span class=\"morphsearch-close\"><i class=\"icofont icofont-search-alt-1\"></i></span>
                                </div>
                                <!-- search end -->
                            </div>
                        </div>
                    </div>
                </nav>

                <div class=\"pcoded-main-container\">
                    <div class=\"pcoded-wrapper\">
                        <nav class=\"pcoded-navbar\" pcoded-header-position=\"relative\">
                            <div class=\"sidebar_toggle\"><a href=\"#\"><i class=\"icon-close icons\"></i></a></div>
                            <div class=\"pcoded-inner-navbar main-menu\">
                                <div class=\"\">
                                    <div class=\"main-menu-header\">
                                        <img class=\"img-40\" src=\"{{ asset('assets/images/user.png') }}\" alt=\"User-Profile-Image\">
                                        <div class=\"user-details\">
                                            <span>{{ app.user.firstName }} {{ app.user.lastName }}</span>
                                            <span id=\"more-details\">
                                                Admin
                                                <i class=\"ti-angle-down\"></i></span>
                                        </div>
                                    </div>

                                    <div class=\"main-menu-content\">
                                        <ul>
                                            <li class=\"more-details\">
                                                <a href=\"#!\"><i class=\"ti-user\"></i>View Profile</a>
                                                <a href=\"#!\"><i class=\"ti-settings\"></i>Settings</a>
                                                <a href=\"#!\"><i class=\"ti-layout-sidebar-left\"></i>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"pcoded-navigatio-lavel\" data-i18n=\"nav.category.navigation\" menu-title-theme=\"theme5\">Navigation</div>
                                <ul class=\"pcoded-item pcoded-left-item\">
                                        <li {% if app.request.attributes.get('_route') == 'dashboard' %} class=\"active\" {% endif %}>
                                            <a href=\"{{ path('dashboard') }}\">
                                                <span class=\"pcoded-micon\"><i class=\"ti-dashboard\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.main\">Dashboard</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li {% if app.request.attributes.get('_route') == 'servers_index' %} class=\"active\" {% endif %}>
                                            <a href=\"{{ path('servers_index') }}\">
                                                <span class=\"pcoded-micon\"><i class=\"fa fa-server\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Servers</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li {% if app.request.attributes.get('_route') == 'domains_index' %} class=\"active\" {% endif %}>
                                            <a href=\"{{ path('domains_index') }}\">
                                                <span class=\"pcoded-micon\"><i class=\"ti-world\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Domains</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li {% if app.request.attributes.get('_route') == 'hosts_index' %} class=\"active\" {% endif %}>
                                            <a href=\"{{ path('hosts_index') }}\">
                                                <span class=\"pcoded-micon\"><i class=\"ti-cloud\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Hosts</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li {% if app.request.attributes.get('_route') == 'certificates_index' %} class=\"active\" {% endif %}>
                                            <a href=\"{{ path('certificates_index') }}\">
                                                <span class=\"pcoded-micon\"><i class=\"fa fa-certificate\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Certificates</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                        </li>
                                        <li class=\"
                                                pcoded-hasmenu
                                                
                                                {% if 
                                                    app.request.attributes.get('_route') == 'clients_index'  %} 
                                                    pcoded-trigger active 
                                                {% endif %}
                                                {% if 
                                                    app.request.attributes.get('_route') == 'accounts_managers_index'  %} 
                                                    pcoded-trigger active 
                                                {% endif %}
                                                {% if 
                                                    app.request.attributes.get('_route') == 'projects_index'  %} 
                                                    pcoded-trigger active 
                                                {% endif %}
                                                {% if 
                                                    app.request.attributes.get('_route') == 'user_index'  %} 
                                                    pcoded-trigger active 
                                                {% endif %}
                                            \">
                                            <a href=\"javascript:void(0)\">
                                                <span class=\"pcoded-micon\"><i class=\"ti-settings\"></i></span>
                                                <span class=\"pcoded-mtext\" data-i18n=\"nav.widget.main\">Config</span>
                                                <span class=\"pcoded-mcaret\"></span>
                                            </a>
                                            <ul class=\"pcoded-submenu\">
                                                <li {% if app.request.attributes.get('_route') == 'clients_index' %} class=\"active\" {% endif %}>
                                                    <a href=\"{{ path('clients_index') }}\">
                                                        <span class=\"pcoded-micon\"><i class=\"icon-user\"></i></span>
                                                        <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.default\">Clients</span>
                                                        <span class=\"pcoded-mcaret\"></span>
                                                    </a>
                                                </li>
                                                <li {% if app.request.attributes.get('_route') == 'accounts_managers_index' %} class=\"active\" {% endif %}>
                                                    <a href=\"{{ path('accounts_managers_index') }}\">
                                                        <span class=\"pcoded-micon\"><i class=\"icon-user\"></i></span>
                                                        <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.default\">Accounts managers</span>
                                                        <span class=\"pcoded-mcaret\"></span>
                                                    </a>
                                                </li>
                                                <li {% if app.request.attributes.get('_route') == 'projects_index' %} class=\"active\" {% endif %}>
                                                    <a href=\"{{ path('projects_index') }}\">
                                                        <span class=\"pcoded-micon\"><i class=\"icon-user\"></i></span>
                                                        <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.default\">Projects</span>
                                                        <span class=\"pcoded-mcaret\"></span>
                                                    </a>
                                                </li>
                                                <li {% if app.request.attributes.get('_route') == 'user_index' %} class=\"active\" {% endif %}>
                                                    <a href=\"{{ path('user_index') }}\">
                                                        <span class=\"pcoded-micon\"><i class=\"icon-user\"></i></span>
                                                        <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.default\">Users</span>
                                                        <span class=\"pcoded-mcaret\"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div>
                            </nav>
                            <div class=\"pcoded-content\">
                                <div class=\"pcoded-inner-content\">

                                    <div class=\"main-body\">

                                        {% block body %}{% endblock %}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% block javascripts %}
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/jquery/js/jquery.min.js') }}\"></script>
                <script src=\"{{ asset('assets/bower_components/jquery-ui/js/jquery-ui.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/popper.js/js/popper.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/bootstrap/js/bootstrap.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/modernizr/js/modernizr.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/modernizr/js/css-scrollbars.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/classie/js/classie.js') }}\"></script>
                <script src=\"{{ asset('assets/bower_components/d3/js/d3.js') }}\"></script>
                <script src=\"{{ asset('assets/bower_components/rickshaw/js/rickshaw.js') }}\"></script>
                <script src=\"{{ asset('assets/bower_components/raphael/js/raphael.min.js') }}\"></script>
                <script src=\"{{ asset('assets/bower_components/morris.js/js/morris.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/pages/dashboard/horizontal-timeline/js/main.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/pages/dashboard/amchart/js/amcharts.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/pages/dashboard/amchart/js/serial.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/pages/dashboard/amchart/js/light.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/pages/dashboard/amchart/js/custom-amchart.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/i18next/js/i18next.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}\"></script>

                <script type=\"text/javascript\" src=\"{{ asset('assets/js/script.js') }}\"></script>
                <script src=\"{{ asset('assets/js/pcoded.min.js') }}\"></script>
                <script src=\"{{ asset('assets/js/demo-12.js') }}\"></script>
                <script src=\"{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}\"></script>
                <script src=\"{{ asset('assets/js/jquery.mousewheel.min.js') }}\"></script>

                <!-- notifications scripts -->
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.desktop.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.buttons.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.confirm.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.callbacks.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.animate.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.history.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.mobile.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/pnotify/js/pnotify.nonblock.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/js/bootstrap-growl.min.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/pages/notification/notification.js') }}\"></script>
            {% endblock %}
        </body>
    </html>
", "base.html.twig", "/home/khawla/Bureau/projetMB/updates/DashboardIT/templates/base.html.twig");
    }
}
