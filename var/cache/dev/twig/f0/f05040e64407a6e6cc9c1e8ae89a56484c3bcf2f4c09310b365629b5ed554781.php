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

/* clients/index.html.twig */
class __TwigTemplate_1a6cd79f7fa0a79d7963d42305009b22fa6aea0b9f72f126b7a2275f99326e3a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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

        echo "Clients";
        
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
                <h4>Clients</h4>
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
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Clients</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Clients</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-user f-right\"></i>
                                <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                        <div class=\"card-block\">
                            <!-- start add client -->
                            <div class=\"modal fade md-effect-5\" id=\"large-Modal\" tabindex=\"-1\" role=\"dialog\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h5>Add new client</h5>
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
                                                    </div>
                                                    <div class=\"j-footer\">
                                                        <button type=\"reset\" class=\"btn btn-default waves-effect \" data-dismiss=\"modal\">Cancel</button>
                                                        <button type=\"submit\" class=\"btn btn-primary waves-effect waves-light \">Save</button>
                                                    </div>
                                                    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end add client -->
                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 105
            echo "                                            <tr>
                                                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clients_show", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section start -->
                                                        <div class=\"col\">
                                                            <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clients_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 126), "html", null, true);
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
                                                                                                            Sure you want to delete ";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 139), "html", null, true);
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
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clients_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 150))), "html", null, true);
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
                                                    
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "
                                    </tbody>

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

    // line 187
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 188
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/data-table/js/data-table-custom.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/sweetalert/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modalEffects.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 198
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
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 198,  424 => 197,  420 => 196,  416 => 195,  411 => 193,  407 => 192,  403 => 191,  399 => 190,  395 => 189,  390 => 188,  380 => 187,  357 => 172,  329 => 150,  325 => 149,  312 => 139,  296 => 126,  290 => 123,  280 => 116,  271 => 110,  264 => 106,  261 => 105,  257 => 104,  237 => 87,  226 => 79,  215 => 71,  175 => 34,  165 => 26,  155 => 22,  151 => 20,  146 => 19,  136 => 18,  123 => 14,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clients{% endblock %}

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
                <h4>Clients</h4>
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
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Clients</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Clients</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-user f-right\"></i>
                                <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                        <div class=\"card-block\">
                            <!-- start add client -->
                            <div class=\"modal fade md-effect-5\" id=\"large-Modal\" tabindex=\"-1\" role=\"dialog\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h5>Add new client</h5>
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
                            <!-- end add client -->
                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for client in clients %}
                                            <tr>
                                                <td>{{ client.name }}</td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"{{ path('clients_show', {'id': client.id}) }}\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section start -->
                                                        <div class=\"col\">
                                                            <a href=\"{{ path('clients_edit', {'id': client.id}) }}\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal{{ client.id }}\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal{{client.id}}\" tabindex=\"-1\" role=\"dialog\">
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
                                                                                                            Sure you want to delete {{ client.name }}
                                                                                                            <i class=\"icofont icofont-warning-alt text-warning\"></i>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row f-right\">
                                                                                        <div class=\"col\">
                                                                                            <form novalidate method=\"post\" action=\"{{ path('clients_delete', {'id': client.id}) }}\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ client.id) }}\">
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
", "clients/index.html.twig", "/home/khawla/Bureau/projetMB/updates/DashboardIT/templates/clients/index.html.twig");
    }
}
