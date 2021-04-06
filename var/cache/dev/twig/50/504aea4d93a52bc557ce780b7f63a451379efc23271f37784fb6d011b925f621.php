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

/* /troc-eco/categories/recherche_categorie.html.twig */
class __TwigTemplate_64eeb4e1d18b561d0dcb94e676b73dd691a786ba2e8ecd98319038b400ec3981 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/categories/recherche_categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/categories/recherche_categorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/troc-eco/categories/recherche_categorie.html.twig", 1);
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

        echo "Troc'Eco | Recherche | Nos catégories";
        
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
        <h1 class=\"text-center py-3 my-5\">Recherche</h1>
    </div>
    ";
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "        <div class=\"alert alert-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <div class=\"container\">
        <div class=\"row g-2\">
                <!-- J'AFFICHE LES CATEGORIES -->
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noscategories"]) || array_key_exists("noscategories", $context) ? $context["noscategories"] : (function () { throw new RuntimeError('Variable "noscategories" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 21
            echo "
                        <div class=\"carte-categorie card col-lg-5 m-3 p-3 shadow rounded\">
                            <div class=\"card-body\">
                            <!-- !!!!! en date du 26/03/2021 On a  du enlever ce lien  path(categorie.nom)  du href car cela affichait une erreur de route introuvable et cela empeche donc l'affichage de la page recherche ,je suppose que cela est du au fait que la route de la nouvelle categorie venant d'etre ajoutée est encore inexistantes dans le code à la création de celles ci !!!!!!-->
                                <h2 class=\"card-title text-center\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></h2>
                                
                            </div>
                            <div class=\"text-center\">
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"align-self-center justify-self-center\">
                                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["categorie"], "photo", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" class=\"card-img-bottom border border-4\" alt=\"photo-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                                </a>  
                            </div>
                            
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "                    <div><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
            echo "\">Ajouter une catégorie</a></div>
                ";
        }
        // line 40
        echo "                            
            
        </div>
    </div>
</section>

        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/troc-eco/categories/recherche_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 40,  159 => 38,  157 => 37,  154 => 36,  140 => 30,  136 => 29,  127 => 25,  121 => 21,  117 => 20,  111 => 16,  102 => 13,  99 => 12,  94 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Troc'Eco | Recherche | Nos catégories{% endblock %}

{% block contenuPrincipal %}
<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center py-3 my-5\">Recherche</h1>
    </div>
    {# Affichage du message de succes #}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"container\">
        <div class=\"row g-2\">
                <!-- J'AFFICHE LES CATEGORIES -->
                {% for categorie in noscategories %}

                        <div class=\"carte-categorie card col-lg-5 m-3 p-3 shadow rounded\">
                            <div class=\"card-body\">
                            <!-- !!!!! en date du 26/03/2021 On a  du enlever ce lien  path(categorie.nom)  du href car cela affichait une erreur de route introuvable et cela empeche donc l'affichage de la page recherche ,je suppose que cela est du au fait que la route de la nouvelle categorie venant d'etre ajoutée est encore inexistantes dans le code à la création de celles ci !!!!!!-->
                                <h2 class=\"card-title text-center\"><a href=\"{{ path('liste', {'id':categorie.id})}}\">{{ categorie.nom }}</a></h2>
                                
                            </div>
                            <div class=\"text-center\">
                                <a href=\"{{ path('liste', {'id':categorie.id})}}\" class=\"align-self-center justify-self-center\">
                                    <img src=\"{{ asset('/uploads/brochures/' ~ categorie.photo) }}\" class=\"card-img-bottom border border-4\" alt=\"photo-{{ categorie.nom }}\">
                                </a>  
                            </div>
                            
                        </div>
                {% endfor %}

                {% if is_granted('ROLE_ADMIN') %}
                    <div><a href=\"{{ path('gestion')}}\">Ajouter une catégorie</a></div>
                {% endif %}
                            
            
        </div>
    </div>
</section>

        
{% endblock %}", "/troc-eco/categories/recherche_categorie.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/troc-eco/categories/recherche_categorie.html.twig");
    }
}
