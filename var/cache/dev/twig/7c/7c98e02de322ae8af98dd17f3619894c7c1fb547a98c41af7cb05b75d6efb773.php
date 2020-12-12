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

/* first/detailUser.html.twig */
class __TwigTemplate_bd805ede2c0d2020e20164f647c67ba16a8171fddd750484c326229341d63f47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "first/detailUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "first/detailUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "first/detailUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " Informations Utilisateur ";
        
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
    <div class=\"row\">

        <div class=\"col-md-4\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"\"
                 width=\"300px\"
                 height=\"300px\"
            >
        </div>
        <div class=\"col-md-8 list-group-item\">
            ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "<br>
            ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 17, $this->source); })()), "userId", [], "any", false, false, false, 17), "html", null, true);
        echo "<br>
            ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 18, $this->source); })()), "filiere", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "<br>
            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "<br>
        </div>
    </div>
    <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
        <div class=\"bg-white py-2 collapse-inner rounded\">
            <h6 class=\"collapse-header\">Liste des cours :</h6>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "filiere", [], "any", false, false, false, 25), "cours", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 26
            echo "                <li><a class=\"collapse-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours.detail", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>
    <div class=\"row\">
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 33, $this->source); })()), "userId", [], "any", false, false, false, 33), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row');
        echo "
        </div>
        <div class=\"row\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 37, $this->source); })()), "filiere", [], "any", false, false, false, 37), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 38, $this->source); })()), "image", [], "any", false, false, false, 38), 'row');
        echo "
        </div>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'row');
        echo "
        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
    </div>



    <button class=\"btn-dark\" type=\"submit\">Modifier</button>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "first/detailUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 41,  168 => 40,  163 => 38,  159 => 37,  153 => 34,  149 => 33,  144 => 31,  139 => 28,  128 => 26,  124 => 25,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block titre %} Informations Utilisateur {% endblock %}

{% block body %}

    <div class=\"row\">

        <div class=\"col-md-4\">
            <img src=\"{{ utilisateur.image }}\" alt=\"\"
                 width=\"300px\"
                 height=\"300px\"
            >
        </div>
        <div class=\"col-md-8 list-group-item\">
            {{ utilisateur.id }}<br>
            {{ utilisateur.userId }}<br>
            {{ utilisateur.filiere.nom }}<br>
            {{ utilisateur.email }}<br>
        </div>
    </div>
    <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
        <div class=\"bg-white py-2 collapse-inner rounded\">
            <h6 class=\"collapse-header\">Liste des cours :</h6>
            {% for cour in app.user.filiere.cours %}
                <li><a class=\"collapse-item\" href=\"{{ path('cours.detail',{id : cour.id}) }}\">{{ cour.nom }}</a></li>
            {% endfor %}
        </div>
    </div>
    <div class=\"row\">
        {{ form_start(update) }}
        <div class=\"row\">
            {{ form_row(update.userId) }}
            {{ form_row(update.email) }}
        </div>
        <div class=\"row\">
            {{ form_row(update.filiere) }}
            {{ form_row(update.image) }}
        </div>
        {{ form_row(update.plainPassword) }}
        {{ form_end(update) }}
    </div>



    <button class=\"btn-dark\" type=\"submit\">Modifier</button>

{% endblock %}", "first/detailUser.html.twig", "C:\\Users\\patdo\\PhpstormProjects\\Final\\templates\\first\\detailUser.html.twig");
    }
}
