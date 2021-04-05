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

/* /troc-eco/recherche.html.twig */
class __TwigTemplate_35cf021704e1c745abfc86d8308cf5aa447b1b43117c946a553504107f54f00f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/recherche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/troc-eco/recherche.html.twig", 1);
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
    <div class=\"container\">
        <div class=\"row g-2\">
                <!-- J'AFFICHE LES CATEGORIES -->
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noscategories"]) || array_key_exists("noscategories", $context) ? $context["noscategories"] : (function () { throw new RuntimeError('Variable "noscategories" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 14
            echo "
                        <div class=\"carte-categorie card col-lg-5 m-3 shadow rounded\">
                            <div class=\"card-body\">
                            <!-- !!!!! en date du 26/03/2021 On a  du enlever ce lien  path(categorie.nom)  du href car cela affichait une erreur de route introuvable et cela empeche donc l'affichage de la page recherche ,je suppose que cela est du au fait que la route de la nouvelle categorie venant d'etre ajoutée est encore inexistantes dans le code à la création de celles ci !!!!!!-->
                                <h2 class=\"card-title text-center\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</a></h2>
                                
                            </div>
                            <div class=\"text-center\">
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"align-self-center justify-self-center\">
                                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["categorie"], "photo", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" class=\"card-img-bottom border border-4\" alt=\"photo-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                                </a>  
                            </div>
                            
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                    <div><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
            echo "\">Ajouter une catégorie</a></div>
                ";
        }
        // line 33
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
        return "/troc-eco/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 33,  139 => 31,  137 => 30,  134 => 29,  120 => 23,  116 => 22,  107 => 18,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <div class=\"container\">
        <div class=\"row g-2\">
                <!-- J'AFFICHE LES CATEGORIES -->
                {% for categorie in noscategories %}

                        <div class=\"carte-categorie card col-lg-5 m-3 shadow rounded\">
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

        
{% endblock %}", "/troc-eco/recherche.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/troc-eco/recherche.html.twig");
    }
}
