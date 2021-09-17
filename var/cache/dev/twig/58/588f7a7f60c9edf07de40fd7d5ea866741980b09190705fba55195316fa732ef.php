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

/* dashboard/index.html.twig */
class __TwigTemplate_834f8511370c76651cc57f9ec3eecd993d81fa65a0d70da502a4a8e4b4aff9f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        echo "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"page-wrapper\">
        <div class=\"page-header\">
            <div class=\"page-header-title\">
                <h4>Dashboard</h4>
            </div>
            <div class=\"page-header-breadcrumb\">
                <ul class=\"breadcrumb-title\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"index.html\">
                            <i class=\"icofont icofont-home\"></i>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Pages</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col-md-12 col-xl-4\">
                    <!-- table card start -->
                    
                    <!-- table card end -->
                </div>
                <div class=\"col-md-12 col-xl-4\">
                    <!-- table card start -->
                   
                    <!-- table card end -->
                </div>
                <div class=\"col-md-12 col-xl-4\">
                    <!-- widget primary card start -->
                    <div class=\"card table-card widget-primary-card\">
                        <div class=\"\">
                            <div class=\"row-table\">
                                <div class=\"col-sm-3 card-block-big\">
                                    <i class=\"icofont icofont-star\"></i>
                                </div>
                                <div class=\"col-sm-9\">
                                    <h4>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["certificatesrenwb"]) || array_key_exists("certificatesrenwb", $context) ? $context["certificatesrenwb"] : (function () { throw new RuntimeError('Variable "certificatesrenwb" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " +</h4>
                                    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificates_showcertif");
        echo "\"> <h6>Certificates to be renewable</h6></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card end -->
                    <!-- widget-success-card start -->
                    <div class=\"card table-card widget-success-card\">
                        <div class=\"\">
                            <div class=\"row-table\">
                                <div class=\"col-sm-3 card-block-big\">
                                    <i class=\"icofont icofont-trophy-alt\"></i>
                                </div>
                                <div class=\"col-sm-9\">
                                    <h4>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["certificates"]) || array_key_exists("certificates", $context) ? $context["certificates"] : (function () { throw new RuntimeError('Variable "certificates" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "</h4>
                                     <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificates_showcertif");
        echo "\"> <h6>Certificates </h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 64,  153 => 63,  135 => 48,  131 => 47,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}

    <div class=\"page-wrapper\">
        <div class=\"page-header\">
            <div class=\"page-header-title\">
                <h4>Dashboard</h4>
            </div>
            <div class=\"page-header-breadcrumb\">
                <ul class=\"breadcrumb-title\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"index.html\">
                            <i class=\"icofont icofont-home\"></i>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Pages</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col-md-12 col-xl-4\">
                    <!-- table card start -->
                    
                    <!-- table card end -->
                </div>
                <div class=\"col-md-12 col-xl-4\">
                    <!-- table card start -->
                   
                    <!-- table card end -->
                </div>
                <div class=\"col-md-12 col-xl-4\">
                    <!-- widget primary card start -->
                    <div class=\"card table-card widget-primary-card\">
                        <div class=\"\">
                            <div class=\"row-table\">
                                <div class=\"col-sm-3 card-block-big\">
                                    <i class=\"icofont icofont-star\"></i>
                                </div>
                                <div class=\"col-sm-9\">
                                    <h4>{{certificatesrenwb}} +</h4>
                                    <a href=\"{{ path('certificates_showcertif') }}\"> <h6>Certificates to be renewable</h6></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card end -->
                    <!-- widget-success-card start -->
                    <div class=\"card table-card widget-success-card\">
                        <div class=\"\">
                            <div class=\"row-table\">
                                <div class=\"col-sm-3 card-block-big\">
                                    <i class=\"icofont icofont-trophy-alt\"></i>
                                </div>
                                <div class=\"col-sm-9\">
                                    <h4>{{certificates}}</h4>
                                     <a href=\"{{ path('certificates_showcertif') }}\"> <h6>Certificates </h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                
            </div>
        </div>
    </div>

{% endblock %}
", "dashboard/index.html.twig", "/home/khawla/Bureau/projetMB/updates/symfony/templates/dashboard/index.html.twig");
    }
}
