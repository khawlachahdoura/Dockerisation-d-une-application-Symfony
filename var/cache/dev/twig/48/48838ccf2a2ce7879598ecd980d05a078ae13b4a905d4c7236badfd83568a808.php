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

/* servers/index.html.twig */
class __TwigTemplate_3d8e1eba3b23cf600be93233fa5f462eb1e300955262134a47c945447bd6c638 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servers/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servers/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "servers/index.html.twig", 1);
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

        echo "Servers";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "        <ul class=\"notifications\" id=\"alert\">
            <li>
                <button hidden id=\"alert_btn_success\" class=\"btn btn-primary waves-effect\" data-type=\"danger\" data-animation-in=\"animated bounceInRight\" data-animation-out=\"animated bounceOutRight\" data-title=\"Error! \" data-message=\"";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\">Bounce In Right</button>
            </li>
        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    <div class=\"page-wrapper\">
        <div class=\"page-header\">
            <div class=\"page-header-title\">
                <h4>Servers</h4>
            </div>
            <div class=\"page-header-breadcrumb\">
                <ul class=\"breadcrumb-title\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                            <i class=\"icofont icofont-home\"></i>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Pages</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Configuration</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Servers</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-server f-right\"></i>
                                <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"modal fade md-effect-5\" id=\"large-Modal\" tabindex=\"-1\" role=\"dialog\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"card\">
                                                <div class=\"card-header\">
                                                    <h5>Add new server</h5>
                                                    <a class=\"badge btn-outline-danger btn f-right\"
                                                       href=\"Javascript:void();\" 
                                                       data-dismiss=\"modal\">
                                                        <i class=\"fa fa-close\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"card-block\">
                                                    <div class=\"j-wrapper j-wrapper-640\">
                                                        ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_start', ["attr" => ["class" => "j-pro", "novalidate" => ""]]);
        echo "
                                                            <div class=\"j-content\">
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span12 j-unit\">
                                                                        <label class=\"j-label\">ID</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "identifier", [], "any", false, false, false, 89), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Server identifier(Must bee unique)</span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Name</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Server name</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Type</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "type", [], "any", false, false, false, 106), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Server type</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Ip adress</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "ipAdress", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control ip", "data-mask" => "999.999.999.999"]]);
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Ip adress</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Model</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "model", [], "any", false, false, false, 122), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Model</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Project public cloud</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "projectPublicCloud", [], "any", false, false, false, 132), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Project public cloud</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Region</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "region", [], "any", false, false, false, 139), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">region</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">data center</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "dataCenter", [], "any", false, false, false, 148), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Data center</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Subscription</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "subscription", [], "any", false, false, false, 155), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Subscription</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">OS</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "operatingSystem", [], "any", false, false, false, 165), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Operating system</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">CPU</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "cpu", [], "any", false, false, false, 172), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Processor</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">RAM</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "ram", [], "any", false, false, false, 179), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">RAM Memory capacity</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Disk space</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "discSpace", [], "any", false, false, false, 188), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Disc space(TB/GB)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Extra disk</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "extraDisc", [], "any", false, false, false, 195), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Extra disk space(TB/GB)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Web Server</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "apache_nginx", [], "any", false, false, false, 202), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Apache/Nginx</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Admin</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "adminManager", [], "any", false, false, false, 212), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Administraton manager</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Technic</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "technicalManager", [], "any", false, false, false, 219), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Technical manager</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Billing</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "billingManager", [], "any", false, false, false, 228), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Billing manager</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Client</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "client", [], "any", false, false, false, 235), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Client</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"j-footer\">
                                                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                                                            </div>
                                                        ";
        // line 244
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), 'form_end');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end add accounts_server -->
                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Region</th>
                                            <th>OS</th>
                                            <th>Client</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 266, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 267
            echo "                                            <tr>
                                                <td>";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 268), "html", null, true);
            echo "</td>
                                                <td>";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "type", [], "any", false, false, false, 269), "html", null, true);
            echo "</td>
                                                <td>";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "region", [], "any", false, false, false, 270), "html", null, true);
            echo "</td>
                                                <td>";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "operatingSystem", [], "any", false, false, false, 271), "html", null, true);
            echo "</td>
                                                <td>";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "client", [], "any", false, false, false, 272), "html", null, true);
            echo "</td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servers_show", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 276)]), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"col\">
                                                            <a href=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servers_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 281)]), "html", null, true);
            echo "\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 288), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 291), "html", null, true);
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
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 304), "html", null, true);
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
            // line 314
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servers_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 314)]), "html", null, true);
            echo "\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 315))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
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

    // line 346
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 347
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/data-table/js/data-table-custom.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/sweetalert/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modalEffects.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/autoNumeric.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/form-mask.js"), "html", null, true);
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
        return "servers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  683 => 362,  679 => 361,  675 => 360,  671 => 359,  666 => 357,  662 => 356,  658 => 355,  654 => 354,  649 => 352,  645 => 351,  641 => 350,  637 => 349,  633 => 348,  628 => 347,  618 => 346,  599 => 336,  572 => 315,  568 => 314,  555 => 304,  539 => 291,  533 => 288,  523 => 281,  515 => 276,  508 => 272,  504 => 271,  500 => 270,  496 => 269,  492 => 268,  489 => 267,  485 => 266,  460 => 244,  448 => 235,  438 => 228,  426 => 219,  416 => 212,  403 => 202,  393 => 195,  383 => 188,  371 => 179,  361 => 172,  351 => 165,  338 => 155,  328 => 148,  316 => 139,  306 => 132,  293 => 122,  283 => 115,  271 => 106,  261 => 99,  248 => 89,  239 => 83,  194 => 41,  184 => 33,  174 => 29,  170 => 27,  165 => 26,  155 => 22,  151 => 20,  146 => 19,  136 => 18,  123 => 14,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Servers{% endblock %}

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
    {% for message in app.flashes('error') %}
        <ul class=\"notifications\" id=\"alert\">
            <li>
                <button hidden id=\"alert_btn_success\" class=\"btn btn-primary waves-effect\" data-type=\"danger\" data-animation-in=\"animated bounceInRight\" data-animation-out=\"animated bounceOutRight\" data-title=\"Error! \" data-message=\"{{ message }}\">Bounce In Right</button>
            </li>
        </ul>
    {% endfor %}
    <div class=\"page-wrapper\">
        <div class=\"page-header\">
            <div class=\"page-header-title\">
                <h4>Servers</h4>
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
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Configuration</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Servers</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-server f-right\"></i>
                                <i class=\"fa fa-plus\"></i>
                            </a>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"modal fade md-effect-5\" id=\"large-Modal\" tabindex=\"-1\" role=\"dialog\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"card\">
                                                <div class=\"card-header\">
                                                    <h5>Add new server</h5>
                                                    <a class=\"badge btn-outline-danger btn f-right\"
                                                       href=\"Javascript:void();\" 
                                                       data-dismiss=\"modal\">
                                                        <i class=\"fa fa-close\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"card-block\">
                                                    <div class=\"j-wrapper j-wrapper-640\">
                                                        {{ form_start(form, {attr: {'class':'j-pro', 'novalidate':''}}) }}
                                                            <div class=\"j-content\">
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span12 j-unit\">
                                                                        <label class=\"j-label\">ID</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.identifier) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Server identifier(Must bee unique)</span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Name</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.name) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Server name</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Type</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.type) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Server type</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Ip adress</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.ipAdress, {attr: {'class':'form-control ip', 'data-mask':'999.999.999.999'}}) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Ip adress</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Model</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.model) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Model</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Project public cloud</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.projectPublicCloud) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Project public cloud</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Region</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.region) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">region</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">data center</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.dataCenter) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Data center</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Subscription</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.subscription) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Subscription</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">OS</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.operatingSystem) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Operating system</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">CPU</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.cpu) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Processor</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">RAM</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.ram) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">RAM Memory capacity</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Disk space</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.discSpace) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Disc space(TB/GB)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Extra disk</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.extraDisc) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Extra disk space(TB/GB)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Web Server</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.apache_nginx) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Apache/Nginx</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Admin</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.adminManager) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Administraton manager</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Technic</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.technicalManager) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Technical manager</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Billing</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.billingManager) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Billing manager</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Client</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.client) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Client</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"j-footer\">
                                                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                                                            </div>
                                                        {{ form_end(form) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end add accounts_server -->
                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Region</th>
                                            <th>OS</th>
                                            <th>Client</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for server in servers %}
                                            <tr>
                                                <td>{{ server.name }}</td>
                                                <td>{{ server.type }}</td>
                                                <td>{{ server.region }}</td>
                                                <td>{{ server.operatingSystem }}</td>
                                                <td>{{ server.client }}</td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"{{ path('servers_show', {'id': server.id}) }}\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"col\">
                                                            <a href=\"{{ path('servers_delete', {'id': server.id}) }}\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal{{ server.id }}\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal{{server.id}}\" tabindex=\"-1\" role=\"dialog\">
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
                                                                                                            Really you want to delete {{ server.name }}
                                                                                                            <i class=\"icofont icofont-warning-alt text-warning\"></i>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row f-right\">
                                                                                        <div class=\"col\">
                                                                                            <form novalidate method=\"post\" action=\"{{ path('servers_delete', {'id': server.id}) }}\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ server.id) }}\">
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

    <script src=\"{{ asset('assets/pages/form-masking/inputmask.js') }}\"></script>
    <script src=\"{{ asset('assets/pages/form-masking/jquery.inputmask.js') }}\"></script>
    <script src=\"{{ asset('assets/pages/form-masking/autoNumeric.js') }}\"></script>
    <script src=\"{{ asset('assets/pages/form-masking/form-mask.js') }}\"></script>

    <script>
        \$(\"#alert\").ready(function(){
            \$(\"#alert_btn_success\").click();
        });
    </script>

{% endblock %}
", "servers/index.html.twig", "/home/khawla/Bureau/projetMB/updates/DashboardIT/templates/servers/index.html.twig");
    }
}
