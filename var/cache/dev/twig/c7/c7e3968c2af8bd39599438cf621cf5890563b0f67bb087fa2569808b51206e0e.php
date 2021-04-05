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

/* /troc-eco/categories/liste_produits.html.twig */
class __TwigTemplate_6bc895aa15c896ed4bd757863a3913e96f99401b2385cd53d94ec92561725a59 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/categories/liste_produits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/categories/liste_produits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/troc-eco/categories/liste_produits.html.twig", 1);
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

        echo "Troc'Eco | Catégorie ";
        
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
        <h1 class=\"py-3 my-5  text-center\">Catégorie</h1>
    </div>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesproduits"]) || array_key_exists("lesproduits", $context) ? $context["lesproduits"] : (function () { throw new RuntimeError('Variable "lesproduits" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 11
            echo "    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"card mb-3 p-3 card-size\" style=\"max-width: 1120px;\">
                <div class=\"row g-0\">
                    <div class=\"col-md-4 image\">
                        <!-- j'ai du retirer l'affichage dynamique recuperant les photos de la bdd car un probleme s'est produit et l'envoi de file ne s'effectuait plus asset('/uploads/brochures/' ~ produit.photo)
                        L'AFFCIHAGE DYNAMIQUE DES PHOTOS REFONCTIONNE -->
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 19))), "html", null, true);
            echo "\" class=\"img-thumbnail\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 19), "html", null, true);
            echo "\"/></a>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body background-maison\">
                            <h2 class=\"card-title\">Catégorie ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</h2>
                            <h3 class=\"card-title\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 24), "html", null, true);
            echo "</h3>

                            <p class=\"card-text\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"><h3 class=\"btn text-center text-dark \">Voir ce troc</h3></a>
                ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 32
                echo "                   

                        <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteproduit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\"><h3 class=\"btn text-center text-dark \">Supprimer ce troc</h3></a>


                   
                ";
            }
            // line 39
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>
    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/troc-eco/categories/liste_produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 41,  153 => 39,  145 => 34,  141 => 32,  139 => 31,  135 => 30,  128 => 26,  123 => 24,  119 => 23,  108 => 19,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Troc'Eco | Catégorie {% endblock %}

{% block contenuPrincipal %}
<section>
    <div class=\"shadow-lg\">
        <h1 class=\"py-3 my-5  text-center\">Catégorie</h1>
    </div>
    {% for produit in lesproduits %}
    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"card mb-3 p-3 card-size\" style=\"max-width: 1120px;\">
                <div class=\"row g-0\">
                    <div class=\"col-md-4 image\">
                        <!-- j'ai du retirer l'affichage dynamique recuperant les photos de la bdd car un probleme s'est produit et l'envoi de file ne s'effectuait plus asset('/uploads/brochures/' ~ produit.photo)
                        L'AFFCIHAGE DYNAMIQUE DES PHOTOS REFONCTIONNE -->
                        <a href=\"{{ path('annonce', {'id':produit.id})}}\"><img src=\"{{ asset('/uploads/brochures/'~ produit.photo) }}\" class=\"img-thumbnail\" alt=\"{{ produit.titre }}\"/></a>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body background-maison\">
                            <h2 class=\"card-title\">Catégorie {{ produit.categorie.nom }}</h2>
                            <h3 class=\"card-title\">{{ produit.titre }}</h3>

                            <p class=\"card-text\">{{ produit.description }}</p>
                        </div>
                    </div>
                </div>
                <a href=\"{{ path('annonce', {'id':produit.id})}}\"><h3 class=\"btn text-center text-dark \">Voir ce troc</h3></a>
                {% if is_granted('ROLE_ADMIN')%}
                   

                        <a href=\"{{ path('deleteproduit', {'id':produit.id})}}\"><h3 class=\"btn text-center text-dark \">Supprimer ce troc</h3></a>


                   
                {% endif %}
            </div>
        {% endfor %}
        </div>
    </div>
</section>

{% endblock %}", "/troc-eco/categories/liste_produits.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/troc-eco/categories/liste_produits.html.twig");
    }
}
