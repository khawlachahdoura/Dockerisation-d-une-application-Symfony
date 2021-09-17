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

/* certificates/index.html.twig */
class __TwigTemplate_4ffe539dbc933f112483a46dd7924dadaac2660a6dbdfaf2daee491f3b64e8c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificates/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificates/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "certificates/index.html.twig", 1);
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

        echo "Certificates";
        
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
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "        <ul class=\"notifications\" id=\"alert\">
            <li>
                <button hidden id=\"alert_btn_success\" class=\"btn btn-primary waves-effect\" data-type=\"danger\" data-animation-in=\"animated bounceInRight\" data-animation-out=\"animated bounceOutRight\" data-title=\"Error! \" data-message=\"";
            // line 30
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\">Bounce In Right</button>
            </li>
        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    <div class=\"page-wrapper\">
        <div class=\"page-header\">
            <div class=\"page-header-title\">
                <h4>Certificates</h4>
            </div>
            <div class=\"page-header-breadcrumb\">
                <ul class=\"breadcrumb-title\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                            <i class=\"icofont icofont-home\"></i>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Pages</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Certificates</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Certificates</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-certificate f-right\"></i>

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
                                                    <h5>Add new certificate</h5>
                                                    <a class=\"badge btn-outline-danger btn f-right\"
                                                       href=\"Javascript:void();\" 
                                                       data-dismiss=\"modal\">
                                                        <i class=\"fa fa-close\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"card-block\">
                                                    <div class=\"j-wrapper j-wrapper-640\">
                                                        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_start', ["attr" => ["class" => "j-pro", "novalidate" => ""]]);
        echo "
                                                        <div class=\"j-content\">
                                                            <div class=\"j-row\">
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Domain</label>
                                                                    <div class=\"j-input\">
                                                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "domain", [], "any", false, false, false, 92), 'widget');
        echo "
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Domain</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Renewal mode</label>
                                                                    <div class=\"j-input\">
                                                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "renewalMode", [], "any", false, false, false, 99), 'widget');
        echo "
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Renewal mode</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"j-row\">
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Creation date</label>
                                                                    <div class=\"j-input\">
                                                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "creationDate", [], "any", false, false, false, 109), 'widget');
        echo "
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Creation date</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Renewal date</label>
                                                                    <div class=\"j-input\">
                                                                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "renewalDate", [], "any", false, false, false, 116), 'widget');
        echo "
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Renewal date</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"j-row\">
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Owner</label>
                                                                    <div class=\"j-input\">
                                                                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "owner", [], "any", false, false, false, 125), 'widget');
        echo "
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Owner name</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Issuer</label>
                                                                    <div class=\"j-input\">
                                                                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "issuer", [], "any", false, false, false, 132), 'widget');
        echo "
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Issuer name</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class=\"j-footer\">
                                                            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                                                        </div>
                                                        ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'form_end');
        echo "
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end add accounts_certificate -->

                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Domain</th>
                                            <th>CreationDate</th>
                                            <th>RenewalDate</th>
                                            <th>RenewalMode</th>
                                            <th>Owner</th>
                                            <th>Issuer</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["certificates"]) || array_key_exists("certificates", $context) ? $context["certificates"] : (function () { throw new RuntimeError('Variable "certificates" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["certificate"]) {
            // line 170
            echo "                                            <tr>
                                                
                                                <td>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["certificate"], "domain", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
            echo "</td>
                                                
                                                <td>";
            // line 174
            ((twig_get_attribute($this->env, $this->source, $context["certificate"], "creationDate", [], "any", false, false, false, 174)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "creationDate", [], "any", false, false, false, 174), "d/m/Y"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>";
            // line 175
            ((twig_get_attribute($this->env, $this->source, $context["certificate"], "renewalDate", [], "any", false, false, false, 175)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "renewalDate", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "renewalMode", [], "any", false, false, false, 176), "html", null, true);
            echo "</td>
                                                <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "owner", [], "any", false, false, false, 177), "html", null, true);
            echo "</td>
                                                <td>";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "issuer", [], "any", false, false, false, 178), "html", null, true);
            echo "</td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificates_show", ["id" => twig_get_attribute($this->env, $this->source, $context["certificate"], "id", [], "any", false, false, false, 182)]), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>

                                                                
                                                        </div>

                                                        <div class=\"col\">
                                                            <a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificates_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["certificate"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            echo "\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "id", [], "any", false, false, false, 197), "html", null, true);
            echo "\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "id", [], "any", false, false, false, 200), "html", null, true);
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

                                                                                                            Really you want to delete this certificate!

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
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificates_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["certificate"], "id", [], "any", false, false, false, 225)]), "html", null, true);
            echo "\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["certificate"], "id", [], "any", false, false, false, 226))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
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

    // line 261
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 262
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/data-table/js/data-table-custom.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bower_components/sweetalert/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modal.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modalEffects.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/form-masking/autoNumeric.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 278
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
        return "certificates/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 278,  556 => 277,  552 => 276,  548 => 275,  542 => 272,  538 => 271,  534 => 270,  530 => 269,  525 => 267,  521 => 266,  517 => 265,  513 => 264,  509 => 263,  504 => 262,  494 => 261,  473 => 248,  445 => 226,  441 => 225,  413 => 200,  407 => 197,  397 => 190,  386 => 182,  379 => 178,  375 => 177,  371 => 176,  367 => 175,  363 => 174,  358 => 172,  354 => 170,  350 => 169,  320 => 142,  307 => 132,  297 => 125,  285 => 116,  275 => 109,  262 => 99,  252 => 92,  243 => 86,  196 => 42,  186 => 34,  176 => 30,  172 => 28,  168 => 27,  165 => 26,  155 => 22,  151 => 20,  146 => 19,  136 => 18,  123 => 14,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Certificates{% endblock %}

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
                <h4>Certificates</h4>
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
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Certificates</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"page-body\">
            <div class=\"row\">
                <div class=\"col col-lg-12\">
                    <div class=\"card info-colorr\">
                        <div class=\"card-header\">
                            <h5>Certificates</h5>

                            <a class=\"badge badge-info btn f-right\"
                               href=\"Javascript:void();\" 
                               data-toggle=\"modal\" 
                               data-target=\"#large-Modal\">
                                <i class=\"fa fa-certificate f-right\"></i>

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
                                                    <h5>Add new certificate</h5>
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
                                                                    <label class=\"j-label\">Domain</label>
                                                                    <div class=\"j-input\">
                                                                        {{ form_widget(form.domain) }}
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Domain</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Renewal mode</label>
                                                                    <div class=\"j-input\">
                                                                        {{ form_widget(form.renewalMode) }}
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Renewal mode</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=\"j-row\">
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Creation date</label>
                                                                    <div class=\"j-input\">
                                                                        {{ form_widget(form.creationDate) }}
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Creation date</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Renewal date</label>
                                                                    <div class=\"j-input\">
                                                                        {{ form_widget(form.renewalDate) }}
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Renewal date</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"j-row\">
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Owner</label>
                                                                    <div class=\"j-input\">
                                                                        {{ form_widget(form.owner) }}
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Owner name</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"j-span6 j-unit\">
                                                                    <label class=\"j-label\">Issuer</label>
                                                                    <div class=\"j-input\">
                                                                        {{ form_widget(form.issuer) }}
                                                                        <span class=\"j-tooltip j-tooltip-right-top\">Issuer name</span>
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

                            <!-- end add accounts_certificate -->

                            <div class=\"dt-responsive table-responsive\">
                                <table id=\"simpletable\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>Domain</th>
                                            <th>CreationDate</th>
                                            <th>RenewalDate</th>
                                            <th>RenewalMode</th>
                                            <th>Owner</th>
                                            <th>Issuer</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for certificate in certificates %}
                                            <tr>
                                                
                                                <td>{{ certificate.domain.name }}</td>
                                                
                                                <td>{{ certificate.creationDate ? certificate.creationDate|date('d/m/Y') : '' }}</td>
                                                <td>{{ certificate.renewalDate ? certificate.renewalDate|date('d/m/Y') : '' }}</td>
                                                <td>{{ certificate.renewalMode }}</td>
                                                <td>{{ certificate.owner }}</td>
                                                <td>{{ certificate.issuer }}</td>
                                                <td>
                                                    <div class=\"row f-right\">
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-default btn\" href=\"{{ path('certificates_show', {'id': certificate.id}) }}\">
                                                                <i class=\"icofont icofont-eye\"></i>
                                                            </a>

                                                                
                                                        </div>

                                                        <div class=\"col\">
                                                            <a href=\"{{ path('certificates_edit', {'id': certificate.id}) }}\" class=\"badge badge-info btn\">
                                                                <i class=\"icofont icofont-pen-alt-1\"></i>
                                                            </a>
                                                        </div>
                                                        <!-- edit section end -->
                                                        <!-- delete section start -->
                                                        <div class=\"col\">
                                                            <a class=\"badge badge-danger btn\" href=\"Javascript:void();\" data-toggle=\"modal\" data-target=\"#delete-Modal{{ certificate.id }}\">
                                                                <i class=\"icofont icofont-trash\"></i>
                                                            </a>
                                                            <div class=\"modal fade md-effect-5\" id=\"delete-Modal{{certificate.id}}\" tabindex=\"-1\" role=\"dialog\">
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

                                                                                                            Really you want to delete this certificate!

                                                                                                            <i class=\"icofont icofont-warning-alt text-warning\"></i>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=\"row f-right\">
                                                                                        <div class=\"col\">
                                                                                            <form novalidate method=\"post\" action=\"{{ path('certificates_delete', {'id': certificate.id}) }}\">
                                                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ certificate.id) }}\">
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

", "certificates/index.html.twig", "/home/khawla/Bureau/projetMB/updates/symfony/templates/certificates/index.html.twig");
    }
}
