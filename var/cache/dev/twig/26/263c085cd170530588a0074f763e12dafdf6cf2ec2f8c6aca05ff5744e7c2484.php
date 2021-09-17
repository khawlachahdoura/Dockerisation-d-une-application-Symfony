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

/* domains/index.html.twig */
class __TwigTemplate_836ab3a3ea4c6cf258c8d4d1ae107924950469dd94c64d6e67ac818c15002d26 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domains/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domains/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "domains/index.html.twig", 1);
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

        echo "Domains";
        
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
                <h4>Domains</h4>
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
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Domains</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Domains</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-domain f-right\"></i>
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
                                                    <h5>Add new domain</h5>
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
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Name</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Domain name (URL)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Creation date</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "creationDate", [], "any", false, false, false, 96), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Domain creation date</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">RegistrAr</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "registrAr", [], "any", false, false, false, 105), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">RegistrAr</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">RegistrAnt</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "registrAnt", [], "any", false, false, false, 112), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">RegistrAnt</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">NS 01</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "ns1", [], "any", false, false, false, 122), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">NS 01</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">NS 02</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "ns2", [], "any", false, false, false, 129), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">NNS 02</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Project</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "project", [], "any", false, false, false, 138), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Project associated</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Client</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "client", [], "any", false, false, false, 145), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Client associated</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Admin</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "adminManager", [], "any", false, false, false, 155), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Administration manager</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Technical manager</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "technicalManager", [], "any", false, false, false, 162), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Technical administration manager</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Billing manager</label>
                                                                        <div class=\"j-input\">
                                                                            ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "billingManager", [], "any", false, false, false, 169), 'widget');
        echo "
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Billing dministration manager</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"j-footer\">
                                                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                                                            </div>
                                                        ";
        // line 178
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), 'form_end');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end add accounts_domain -->
                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Creation date</th>
                                            <th>Client</th>
                                            <th>Project</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new RuntimeError('Variable "domains" does not exist.', 199, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 200
            echo "                                            <tr>
                                                <td>";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "name", [], "any", false, false, false, 201), "html", null, true);
            echo "</td>
                                                <td>";
            // line 202
            ((twig_get_attribute($this->env, $this->source, $context["domain"], "creationDate", [], "any", false, false, false, 202)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "creationDate", [], "any", false, false, false, 202), "d/m/Y"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "client", [], "any", false, false, false, 203), "html", null, true);
            echo "</td>
                                                <td>";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "project", [], "any", false, false, false, 204), "html", null, true);
            echo "</td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("domains_show", ["id" => twig_get_attribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 208)]), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"col\">
                                                            <a href=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("domains_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 213)]), "html", null, true);
            echo "\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 220), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 223), "html", null, true);
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
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domain"], "name", [], "any", false, false, false, 236), "html", null, true);
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
            // line 246
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("domains_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 246)]), "html", null, true);
            echo "\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["domain"], "id", [], "any", false, false, false, 247))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
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

    // line 278
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 279
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/data-table/js/data-table-custom.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/sweetalert/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modalEffects.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/autoNumeric.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 294
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
        return "domains/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 294,  584 => 293,  580 => 292,  576 => 291,  571 => 289,  567 => 288,  563 => 287,  559 => 286,  554 => 284,  550 => 283,  546 => 282,  542 => 281,  538 => 280,  533 => 279,  523 => 278,  504 => 268,  477 => 247,  473 => 246,  460 => 236,  444 => 223,  438 => 220,  428 => 213,  420 => 208,  413 => 204,  409 => 203,  405 => 202,  401 => 201,  398 => 200,  394 => 199,  370 => 178,  358 => 169,  348 => 162,  338 => 155,  325 => 145,  315 => 138,  303 => 129,  293 => 122,  280 => 112,  270 => 105,  258 => 96,  248 => 89,  239 => 83,  194 => 41,  184 => 33,  174 => 29,  170 => 27,  165 => 26,  155 => 22,  151 => 20,  146 => 19,  136 => 18,  123 => 14,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Domains{% endblock %}

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
                <h4>Domains</h4>
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
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Domains</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Domains</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-domain f-right\"></i>
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
                                                    <h5>Add new domain</h5>
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
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Name</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.name) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Domain name (URL)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Creation date</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.creationDate) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Domain creation date</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">RegistrAr</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.registrAr) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">RegistrAr</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">RegistrAnt</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.registrAnt) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">RegistrAnt</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">NS 01</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.ns1) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">NS 01</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">NS 02</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.ns2) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">NNS 02</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Project</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.project) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Project associated</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span6 j-unit\">
                                                                        <label class=\"j-label\">Client</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.client) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Client associated</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-divider j-gap-bottom-25\"></div>
                                                                <div class=\"j-row\">
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Admin</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.adminManager) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Administration manager</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Technical manager</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.technicalManager) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Technical administration manager</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"j-span4 j-unit\">
                                                                        <label class=\"j-label\">Billing manager</label>
                                                                        <div class=\"j-input\">
                                                                            {{ form_widget(form.billingManager) }}
                                                                            <span class=\"j-tooltip j-tooltip-right-top\">Billing dministration manager</span>
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
                            <!-- end add accounts_domain -->
                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Creation date</th>
                                            <th>Client</th>
                                            <th>Project</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for domain in domains %}
                                            <tr>
                                                <td>{{ domain.name }}</td>
                                                <td>{{ domain.creationDate ? domain.creationDate|date('d/m/Y') : '' }}</td>
                                                <td>{{ domain.client }}</td>
                                                <td>{{ domain.project }}</td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"{{ path('domains_show', {'id': domain.id}) }}\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"col\">
                                                            <a href=\"{{ path('domains_edit', {'id': domain.id}) }}\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal{{ domain.id }}\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal{{domain.id}}\" tabindex=\"-1\" role=\"dialog\">
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
                                                                                                            Really you want to delete {{ domain.name }}
                                                                                                            <i class=\"icofont icofont-warning-alt text-warning\"></i>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row f-right\">
                                                                                        <div class=\"col\">
                                                                                            <form novalidate method=\"post\" action=\"{{ path('domains_delete', {'id': domain.id}) }}\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ domain.id) }}\">
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
", "domains/index.html.twig", "/home/khawla/Bureau/projetMB/updates/DashboardIT/templates/domains/index.html.twig");
    }
}
