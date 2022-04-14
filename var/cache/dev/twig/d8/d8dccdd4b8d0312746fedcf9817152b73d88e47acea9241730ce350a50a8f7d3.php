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

/* avis/index.html.twig */
class __TwigTemplate_13bbc7305c21f25e58ba6fc7c5cd51353ec9f2715b3ee77903b355b6b406c504 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "avis/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Feed Back";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
            <div class=\"forQuery\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-10 offset-xl-1 col-md-12\">
                            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 12
            echo "
                            <div class=\"Query_border\">
                              <div class=\"row align-items-center justify-content-center\">
                                    <div class=\"col-xl-12 col-md-12\">
                                        <div class=\"Query_text\">
                                            <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avi"], "idu", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo " :";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 17), "html", null, true);
            echo "</p><br>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-12 col-md-6\">
                                        <div>
                                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["avi"], "idA", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["idA" => twig_get_attribute($this->env, $this->source, $context["avi"], "idA", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </div>
                    </div>
                </div>
            </div>
    <div class=\"col-lg-8\">
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "form-contact contact_form"]]);
        echo "
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"form-group\">
                    Commentez_vous :
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "commentaire", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "commentaire", [], "any", false, false, false, 40), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group mt-3\">
                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" formnovalidate />
            </div>
            ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  136 => 40,  132 => 39,  124 => 34,  117 => 29,  105 => 23,  101 => 22,  91 => 17,  84 => 12,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Feed Back{% endblock %}

{% block body %}

            <div class=\"forQuery\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-10 offset-xl-1 col-md-12\">
                            {% for avi in avis %}

                            <div class=\"Query_border\">
                              <div class=\"row align-items-center justify-content-center\">
                                    <div class=\"col-xl-12 col-md-12\">
                                        <div class=\"Query_text\">
                                            <p>{{ avi.idu.nom }} :{{ avi.commentaire }}</p><br>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-12 col-md-6\">
                                        <div>
                                            <a href=\"{{ path('avis_delete', {'id': avi.idA}) }}\" class=\"btn btn-danger\">Delete</a>
                                            <a href=\"{{ path('app_avis_edit', {'idA': avi.idA}) }}\" class=\"btn btn-primary\">Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
    <div class=\"col-lg-8\">
        {{ form_start(form, { 'attr': {'class': 'form-contact contact_form'} })  }}
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"form-group\">
                    Commentez_vous :
                    {{ form_widget(form.commentaire, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_errors(form.commentaire) }}
                </div>
            </div>
            <div class=\"form-group mt-3\">
                <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" formnovalidate />
            </div>
            {{ form_end(form) }}
        </div>
    </div>


{% endblock %}
", "avis/index.html.twig", "C:\\Users\\Rzouga\\Desktop\\Nerr\\Campping\\templates\\avis\\index.html.twig");
    }
}
