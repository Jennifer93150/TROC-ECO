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

/* /troc-eco/categories/jardin.html.twig */
class __TwigTemplate_eaaa53524ff0a5fcaaa3dfbc73c45b679bb3d7f3874470fbbddaa48375ff784b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contenuPrincipal' => [$this, 'block_contenuPrincipal'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/categories/jardin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/categories/jardin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/troc-eco/categories/jardin.html.twig", 1);
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

        echo "Troc'Eco | Catégorie jardin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 6
        echo "<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center  py-3 my-5\">Catégorie Jardin et Plantes</h1>
    </div>
    <div class=\"container\">
        <div class=\"row\">
        <!-- On boucle pour afficher tous les produits DE CHAQUE CATEGORIE -->
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 14
            echo "            <div class=\"card mb-3 card-size shadow\" style=\"max-width: 1120px;\">
                <div class=\"row g-0\">
                    <div class=\"col-md-4 image\">
                    <!-- mettre path ('')-->
                        <a href=\"#\"><img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/brochures/outils-jardin-1589051039495-eb77709c8268.jpeg"), "html", null, true);
            echo "\" class=\"img-thumbnail\" alt=\"photo-produit\"/></a>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body background-maison\">
                            <h2 class=\"card-title\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 22), "html", null, true);
            echo "</h2>
                            <p class=\"card-text\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
                <a href=\"#\"><h3 class=\"btn text-center text-dark \">Voir ce troc</h3></a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>
    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/troc-eco/categories/jardin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 30,  118 => 23,  114 => 22,  107 => 18,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Troc'Eco | Catégorie jardin{% endblock %}

{% block contenuPrincipal %}
<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center  py-3 my-5\">Catégorie Jardin et Plantes</h1>
    </div>
    <div class=\"container\">
        <div class=\"row\">
        <!-- On boucle pour afficher tous les produits DE CHAQUE CATEGORIE -->
        {% for produit in produits %}
            <div class=\"card mb-3 card-size shadow\" style=\"max-width: 1120px;\">
                <div class=\"row g-0\">
                    <div class=\"col-md-4 image\">
                    <!-- mettre path ('')-->
                        <a href=\"#\"><img src=\"{{ asset('/uploads/brochures/outils-jardin-1589051039495-eb77709c8268.jpeg') }}\" class=\"img-thumbnail\" alt=\"photo-produit\"/></a>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body background-maison\">
                            <h2 class=\"card-title\">{{ produit.titre }}</h2>
                            <p class=\"card-text\">{{ produit.description }}</p>
                        </div>
                    </div>
                </div>
                <a href=\"#\"><h3 class=\"btn text-center text-dark \">Voir ce troc</h3></a>
            </div>
        {% endfor %}
        </div>
    </div>
</section>

{% endblock %}", "/troc-eco/categories/jardin.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/troc-eco/categories/jardin.html.twig");
    }
}
