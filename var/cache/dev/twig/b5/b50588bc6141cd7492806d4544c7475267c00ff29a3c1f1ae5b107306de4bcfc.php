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

/* accounts_managers/index.html.twig */
class __TwigTemplate_3d6693935ee80041bc49acc5eb9f45d4bfe5c026c164a3a113f9460771bfe014 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts_managers/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accounts_managers/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accounts_managers/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accounts managers";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/component.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/notification/notification.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/animate.css/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/j-pro/css/demo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/j-pro/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/j-pro/css/j-pro-modern.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "        <ul class=\"notifications\" id=\"alert\">
            <li>
                <button hidden id=\"alert_btn_success\" class=\"btn btn-primary waves-effect\" data-type=\"success\" data-animation-in=\"animated bounceInRight\" data-animation-out=\"animated bounceOutRight\" data-title=\"Success! \" data-message=\"";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\">Bounce In Right</button>
            </li>
        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    <div class=\"page-wrapper\">
        <div class=\"page-header\">
            <div class=\"page-header-title\">
                <h4>Accounts managers</h4>
            </div>
            <div class=\"page-header-breadcrumb\">
                <ul class=\"breadcrumb-title\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                            <i class=\"icofont icofont-home\"></i>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Pages</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Accounts managers</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Accounts managers</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-user f-right\"></i>
                                <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                        <div class=\"card-block\">
                            <!-- start add accounts_manager -->
                            <div class=\"modal fade md-effect-5\" id=\"large-Modal\" tabindex=\"-1\" role=\"dialog\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h5>Add new Manager</h5>
                                            </div>
                                            <div class=\"card-block\">
                                                <div class=\"j-wrapper j-wrapper-640\">
                                                    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_start', ["attr" => ["class" => "j-pro", "novalidate" => ""]]);
        echo "
                                                    <div class=\"j-content\">
                                                        <div class=\"j-unit\">
                                                            <label class=\"j-label\">Name</label>
                                                            <div class=\"j-input\">
                                                                <label class=\"j-icon-right\" for=\"name\">
                                                                    <i class=\"icofont icofont-ui-user\"></i>
                                                                </label>
                                                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), 'widget');
        echo "
                                                            </div>
                                                        </div>
                                                        <div class=\"j-unit\">
                                                            <label class=\"j-label\">Function</label>
                                                            <div class=\"j-input\">
                                                                <label class=\"j-icon-right\" for=\"function\">
                                                                    <i class=\"fa fa-gears\"></i>
                                                                </label>
                                                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "function", [], "any", false, false, false, 88), 'widget');
        echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"j-footer\">
                                                        <button type=\"reset\" class=\"btn btn-default waves-effect \" data-dismiss=\"modal\">Cancel</button>
                                                        <button type=\"submit\" class=\"btn btn-primary waves-effect waves-light \">Save</button>
                                                    </div>
                                                    ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end add accounts_manager -->
                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Function</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts_managers"]) || array_key_exists("accounts_managers", $context) ? $context["accounts_managers"] : (function () { throw new RuntimeError('Variable "accounts_managers" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["manager"]) {
            // line 115
            echo "                                            <tr>
                                                <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "name", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                                                <td>
                                                    ";
            // line 118
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["manager"], "function", [], "any", false, false, false, 118), "adminManager"))) {
                // line 119
                echo "                                                        Admin
                                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 120
$context["manager"], "function", [], "any", false, false, false, 120), "technicalManager"))) {
                // line 121
                echo "                                                        Technical manager
                                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 122
$context["manager"], "function", [], "any", false, false, false, 122), "billingManager"))) {
                // line 123
                echo "                                                        Billing manager
                                                    ";
            } else {
                // line 125
                echo "                                                        <p class=\"text-warning\">This manager dosen't have any function</p>
                                                    ";
            }
            // line 127
            echo "                                                </td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <!-- details section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#details-Modal";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "id", [], "any", false, false, false, 132), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- details section end -->
                                                        <!-- edit section start -->
                                                        <div class=\"col\">
                                                            <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accounts_managers_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["manager"], "id", [], "any", false, false, false, 139)]), "html", null, true);
            echo "\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "id", [], "any", false, false, false, 146), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "id", [], "any", false, false, false, 149), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
                                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"j-wrapper j-wrapper-640\">
                                                                            <div class=\"card table-card\">
                                                                                <div class=\"\">
                                                                                    <div class=\"row-table\">
                                                                                        <div class=\"row\">
                                                                                            <div class=\"col-sm-6 card-block-big \">
                                                                                                <div class=\"row\">
                                                                                                    <div class=\"col col-sm-4\">

                                                                                                        <h3>
                                                                                                            Really you want to delete ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "name", [], "any", false, false, false, 162), "html", null, true);
            echo "
                                                                                                            <i class=\"icofont icofont-warning-alt text-warning\"></i>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row f-right\">
                                                                                        <div class=\"col\">
                                                                                            <form novalidate method=\"post\" action=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accounts_managers_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["manager"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["manager"], "id", [], "any", false, false, false, 173))), "html", null, true);
            echo "\">
                                                                                                <div class=\"\">
                                                                                                    <button type=\"submit\" class=\"btn btn-danger waves-effect waves-light \">Delete</button>
                                                                                                    <button type=\"reset\" class=\"btn btn-default waves-effect \" data-dismiss=\"modal\">Cancel</button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- delete section end -->
                                                    </div>

                                                    <!-- start details modal -->
                                                    <div class=\"modal fade md-effect-5\" id=\"details-Modal";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "id", [], "any", false, false, false, 193), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
                                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"card\">
                                                                    <div class=\"card-header\">
                                                                        <h5>Details manager: ";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "name", [], "any", false, false, false, 198), "html", null, true);
            echo "</h5>
                                                                        ";
            // line 199
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["manager"], "function", [], "any", false, false, false, 199), "adminManager"))) {
                // line 200
                echo "                                                                            <p class=\"badge badge-info\">Admin</p>
                                                                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 201
$context["manager"], "function", [], "any", false, false, false, 201), "technicalManager"))) {
                // line 202
                echo "                                                                            <p class=\"badge badge-info\">Technical manager</p>
                                                                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 203
$context["manager"], "function", [], "any", false, false, false, 203), "billingManager"))) {
                // line 204
                echo "                                                                            <p class=\"badge badge-info\">Billing manager</p>
                                                                        ";
            } else {
                // line 206
                echo "                                                                            <p class=\"badge badge-warning\">This manager dosen't have any function</p>
                                                                        ";
            }
            // line 208
            echo "                                                                        <a class=\"badge btn-outline-danger btn f-right\"
                                                                           href=\"Javascript:void();\" 
                                                                           data-dismiss=\"modal\">
                                                                            <i class=\"fa fa-close\"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class=\"card-block\">
                                                                        <div class=\"row\">
                                                                            <div class=\"col-lg-12\">

                                                                                <div class=\"row\">

                                                                                    ";
            // line 220
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["manager"], "function", [], "any", false, false, false, 220), "adminManager"))) {
                // line 221
                echo "                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Servers
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "adminServers", [], "any", false, false, false, 230));
                foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                    // line 231
                    echo "
                                                                                                                    <li class=\"text-dark\">   ";
                    // line 232
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 232), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 234
                echo "                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Domains
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 250
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "adminDomains", [], "any", false, false, false, 250));
                foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                    // line 251
                    echo "
                                                                                                                    <li class=\"text-dark\">   ";
                    // line 252
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "name", [], "any", false, false, false, 252), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Web hosts
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 270
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "adminHosts", [], "any", false, false, false, 270));
                foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
                    echo " 

                                                                                                                    <li class=\"text-dark\">   ";
                    // line 272
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "name", [], "any", false, false, false, 272), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    ";
            }
            // line 282
            echo "
                                                                                    ";
            // line 283
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["manager"], "function", [], "any", false, false, false, 283), "technicalManager"))) {
                // line 284
                echo "                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Servers
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 293
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "technicalServers", [], "any", false, false, false, 293));
                foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                    // line 294
                    echo "
                                                                                                                    <li class=\"text-dark\">   ";
                    // line 295
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 295), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 297
                echo "                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Domains
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 313
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "technicalDomains", [], "any", false, false, false, 313));
                foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                    // line 314
                    echo "
                                                                                                                    <li class=\"text-dark\">   ";
                    // line 315
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "name", [], "any", false, false, false, 315), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 317
                echo "                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Web hosts
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 333
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "technicalHosts", [], "any", false, false, false, 333));
                foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
                    echo " 

                                                                                                                    <li class=\"text-dark\">   ";
                    // line 335
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "name", [], "any", false, false, false, 335), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 337
                echo "                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    ";
            }
            // line 345
            echo "                                                                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["manager"], "function", [], "any", false, false, false, 345), "billingManager"))) {
                // line 346
                echo "                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Servers
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 355
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "billingServers", [], "any", false, false, false, 355));
                foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                    // line 356
                    echo "
                                                                                                                    <li class=\"text-dark\">   ";
                    // line 357
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 357), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 359
                echo "                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Domains
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 375
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "billingDomains", [], "any", false, false, false, 375));
                foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                    // line 376
                    echo "
                                                                                                                    <li class=\"text-dark\">   ";
                    // line 377
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "name", [], "any", false, false, false, 377), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 379
                echo "                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Web hosts
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                ";
                // line 395
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manager"], "billingHosts", [], "any", false, false, false, 395));
                foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
                    echo " 
                                                                                                                    <li class=\"text-dark\">   ";
                    // line 396
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "name", [], "any", false, false, false, 396), "html", null, true);
                    echo "</li>
                                                                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 398
                echo "                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    ";
            }
            // line 406
            echo "                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end details modal -->
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 428
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 429
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/data-table/js/data-table-custom.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/sweetalert/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modalEffects.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(\"#alert\").ready(function(){
            \$(\"#alert_btn_success\").click();
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accounts_managers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 439,  832 => 438,  828 => 437,  824 => 436,  819 => 434,  815 => 433,  811 => 432,  807 => 431,  803 => 430,  798 => 429,  788 => 428,  769 => 418,  752 => 406,  742 => 398,  734 => 396,  728 => 395,  710 => 379,  702 => 377,  699 => 376,  695 => 375,  677 => 359,  669 => 357,  666 => 356,  662 => 355,  651 => 346,  648 => 345,  638 => 337,  630 => 335,  623 => 333,  605 => 317,  597 => 315,  594 => 314,  590 => 313,  572 => 297,  564 => 295,  561 => 294,  557 => 293,  546 => 284,  544 => 283,  541 => 282,  531 => 274,  523 => 272,  516 => 270,  498 => 254,  490 => 252,  487 => 251,  483 => 250,  465 => 234,  457 => 232,  454 => 231,  450 => 230,  439 => 221,  437 => 220,  423 => 208,  419 => 206,  415 => 204,  413 => 203,  410 => 202,  408 => 201,  405 => 200,  403 => 199,  399 => 198,  391 => 193,  368 => 173,  364 => 172,  351 => 162,  335 => 149,  329 => 146,  319 => 139,  309 => 132,  302 => 127,  298 => 125,  294 => 123,  292 => 122,  289 => 121,  287 => 120,  284 => 119,  282 => 118,  277 => 116,  274 => 115,  270 => 114,  249 => 96,  238 => 88,  226 => 79,  215 => 71,  175 => 34,  165 => 26,  155 => 22,  151 => 20,  146 => 19,  136 => 18,  123 => 14,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accounts managers{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/component.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/notification/notification.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/bower_components/animate.css/css/animate.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/j-pro/css/demo.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/j-pro/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/j-pro/css/j-pro-modern.css') }}\">

{% endblock %}

{% block body %}
    {% for message in app.flashes('success') %}
        <ul class=\"notifications\" id=\"alert\">
            <li>
                <button hidden id=\"alert_btn_success\" class=\"btn btn-primary waves-effect\" data-type=\"success\" data-animation-in=\"animated bounceInRight\" data-animation-out=\"animated bounceOutRight\" data-title=\"Success! \" data-message=\"{{ message }}\">Bounce In Right</button>
            </li>
        </ul>
    {% endfor %}
    <div class=\"page-wrapper\">
        <div class=\"page-header\">
            <div class=\"page-header-title\">
                <h4>Accounts managers</h4>
            </div>
            <div class=\"page-header-breadcrumb\">
                <ul class=\"breadcrumb-title\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('dashboard') }}\">
                            <i class=\"icofont icofont-home\"></i>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Pages</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Accounts managers</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Accounts managers</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-user f-right\"></i>
                                <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                        <div class=\"card-block\">
                            <!-- start add accounts_manager -->
                            <div class=\"modal fade md-effect-5\" id=\"large-Modal\" tabindex=\"-1\" role=\"dialog\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h5>Add new Manager</h5>
                                            </div>
                                            <div class=\"card-block\">
                                                <div class=\"j-wrapper j-wrapper-640\">
                                                    {{ form_start(form, {attr: {'class':'j-pro', 'novalidate':''}}) }}
                                                    <div class=\"j-content\">
                                                        <div class=\"j-unit\">
                                                            <label class=\"j-label\">Name</label>
                                                            <div class=\"j-input\">
                                                                <label class=\"j-icon-right\" for=\"name\">
                                                                    <i class=\"icofont icofont-ui-user\"></i>
                                                                </label>
                                                                {{ form_widget(form.name) }}
                                                            </div>
                                                        </div>
                                                        <div class=\"j-unit\">
                                                            <label class=\"j-label\">Function</label>
                                                            <div class=\"j-input\">
                                                                <label class=\"j-icon-right\" for=\"function\">
                                                                    <i class=\"fa fa-gears\"></i>
                                                                </label>
                                                                {{ form_widget(form.function) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"j-footer\">
                                                        <button type=\"reset\" class=\"btn btn-default waves-effect \" data-dismiss=\"modal\">Cancel</button>
                                                        <button type=\"submit\" class=\"btn btn-primary waves-effect waves-light \">Save</button>
                                                    </div>
                                                    {{ form_end(form) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end add accounts_manager -->
                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Function</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for manager in accounts_managers %}
                                            <tr>
                                                <td>{{ manager.name }}</td>
                                                <td>
                                                    {% if manager.function == 'adminManager' %}
                                                        Admin
                                                    {% elseif manager.function == 'technicalManager' %}
                                                        Technical manager
                                                    {% elseif manager.function == 'billingManager' %}
                                                        Billing manager
                                                    {% else %}
                                                        <p class=\"text-warning\">This manager dosen't have any function</p>
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <!-- details section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#details-Modal{{ manager.id }}\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- details section end -->
                                                        <!-- edit section start -->
                                                        <div class=\"col\">
                                                            <a href=\"{{ path('accounts_managers_edit', {'id': manager.id}) }}\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal{{ manager.id }}\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal{{manager.id}}\" tabindex=\"-1\" role=\"dialog\">
                                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"j-wrapper j-wrapper-640\">
                                                                            <div class=\"card table-card\">
                                                                                <div class=\"\">
                                                                                    <div class=\"row-table\">
                                                                                        <div class=\"row\">
                                                                                            <div class=\"col-sm-6 card-block-big \">
                                                                                                <div class=\"row\">
                                                                                                    <div class=\"col col-sm-4\">

                                                                                                        <h3>
                                                                                                            Really you want to delete {{ manager.name }}
                                                                                                            <i class=\"icofont icofont-warning-alt text-warning\"></i>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row f-right\">
                                                                                        <div class=\"col\">
                                                                                            <form novalidate method=\"post\" action=\"{{ path('accounts_managers_delete', {'id': manager.id}) }}\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ manager.id) }}\">
                                                                                                <div class=\"\">
                                                                                                    <button type=\"submit\" class=\"btn btn-danger waves-effect waves-light \">Delete</button>
                                                                                                    <button type=\"reset\" class=\"btn btn-default waves-effect \" data-dismiss=\"modal\">Cancel</button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- delete section end -->
                                                    </div>

                                                    <!-- start details modal -->
                                                    <div class=\"modal fade md-effect-5\" id=\"details-Modal{{manager.id}}\" tabindex=\"-1\" role=\"dialog\">
                                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"card\">
                                                                    <div class=\"card-header\">
                                                                        <h5>Details manager: {{ manager.name }}</h5>
                                                                        {% if manager.function == 'adminManager' %}
                                                                            <p class=\"badge badge-info\">Admin</p>
                                                                        {% elseif manager.function == 'technicalManager' %}
                                                                            <p class=\"badge badge-info\">Technical manager</p>
                                                                        {% elseif manager.function == 'billingManager' %}
                                                                            <p class=\"badge badge-info\">Billing manager</p>
                                                                        {% else %}
                                                                            <p class=\"badge badge-warning\">This manager dosen't have any function</p>
                                                                        {% endif %}
                                                                        <a class=\"badge btn-outline-danger btn f-right\"
                                                                           href=\"Javascript:void();\" 
                                                                           data-dismiss=\"modal\">
                                                                            <i class=\"fa fa-close\"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class=\"card-block\">
                                                                        <div class=\"row\">
                                                                            <div class=\"col-lg-12\">

                                                                                <div class=\"row\">

                                                                                    {% if manager.function == 'adminManager' %}
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Servers
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for server in manager.adminServers %}

                                                                                                                    <li class=\"text-dark\">   {{ server.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Domains
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for domain in manager.adminDomains %}

                                                                                                                    <li class=\"text-dark\">   {{ domain.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Web hosts
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for host in manager.adminHosts %} 

                                                                                                                    <li class=\"text-dark\">   {{ host.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    {% endif %}

                                                                                    {% if manager.function == 'technicalManager' %}
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Servers
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for server in manager.technicalServers %}

                                                                                                                    <li class=\"text-dark\">   {{ server.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Domains
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for domain in manager.technicalDomains %}

                                                                                                                    <li class=\"text-dark\">   {{ domain.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Web hosts
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for host in manager.technicalHosts %} 

                                                                                                                    <li class=\"text-dark\">   {{ host.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    {% endif %}
                                                                                    {% if manager.function == 'billingManager' %}
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Servers
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for server in manager.billingServers %}

                                                                                                                    <li class=\"text-dark\">   {{ server.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Domains
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for domain in manager.billingDomains %}

                                                                                                                    <li class=\"text-dark\">   {{ domain.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"col-lg-3\">
                                                                                            <div class=\"card card-border-default\">
                                                                                                <div class=\"card-header\">
                                                                                                    Web hosts
                                                                                                </div>
                                                                                                <div class=\"card-block\">
                                                                                                    <div class=\"row\">
                                                                                                        <div class=\"col-sm-12\">
                                                                                                            <ul class=\"f-left\">
                                                                                                                {% for host in manager.billingHosts %} 
                                                                                                                    <li class=\"text-dark\">   {{ host.name }}</li>
                                                                                                                {% endfor %}
                                                                                                            </ul>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    {% endif %}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end details modal -->
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('assets/pages/data-table/js/data-table-custom.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('assets/bower_components/sweetalert/js/sweetalert.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/modal.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/modalEffects.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/classie.js') }}\"></script>

    <script>
        \$(\"#alert\").ready(function(){
            \$(\"#alert_btn_success\").click();
        });
    </script>

{% endblock %}
", "accounts_managers/index.html.twig", "/home/khawla/Bureau/projetMB/updates/DashboardIT/templates/accounts_managers/index.html.twig");
    }
}
