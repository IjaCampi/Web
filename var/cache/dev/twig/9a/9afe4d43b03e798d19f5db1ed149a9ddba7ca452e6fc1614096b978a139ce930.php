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

/* reclamation/reclamationUser.html.twig */
class __TwigTemplate_4d25012dcfa9804257fec24a5222531b5d651141e4051c9ff966f18362b4fbb0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/reclamationUser.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "reclamation/reclamationUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Mes Reclamation ";
        
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
    <div class=\"col-xl-4 col-md-4\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 9
            echo "        <div class=\"single_offers\">
            <div class=\"about_thumb\">
                <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Upload/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "photo", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"\">
            </div>
            <ul>
                <li>Description : ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "description", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
                <li>Date : ";
            // line 15
            ((twig_get_attribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</li>
                <li>Etat : ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 16), "html", null, true);
            echo "</li>
            </ul>
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "idR", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idR" => twig_get_attribute($this->env, $this->source, $context["r"], "idR", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">edit</a><br><br><br><br>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/reclamationUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 22,  109 => 19,  105 => 18,  100 => 16,  96 => 15,  92 => 14,  85 => 11,  81 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %} Mes Reclamation {% endblock %}

{% block body %}

    <div class=\"col-xl-4 col-md-4\">
        {% for r in reclamations %}
        <div class=\"single_offers\">
            <div class=\"about_thumb\">
                <img src=\"{{ asset('Upload/')}}{{ r.photo }}\" alt=\"\">
            </div>
            <ul>
                <li>Description : {{ r.description }}</li>
                <li>Date : {{ r.date ? r.date|date('Y-m-d') : '' }}</li>
                <li>Etat : {{ r.etat }}</li>
            </ul>
            <a href=\"{{ path('reclamation_delete', {'id': r.idR}) }}\" class=\"btn btn-danger\">Delete</a>
            <a href=\"{{ path('app_reclamation_edit', {'idR': r.idR}) }}\" class=\"btn btn-secondary\">edit</a><br><br><br><br>
        </div>
        {% endfor %}
    </div>

{% endblock %}", "reclamation/reclamationUser.html.twig", "C:\\Users\\Rzouga\\Desktop\\Nerr\\Campping\\templates\\reclamation\\reclamationUser.html.twig");
    }
}
