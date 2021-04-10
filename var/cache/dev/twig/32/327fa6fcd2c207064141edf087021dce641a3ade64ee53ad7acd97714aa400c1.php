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

/* /troc-eco/index.html.twig */
class __TwigTemplate_990da57f11cf6030c9ae8ba61b5557eb4c0cdb3f0add53abe9be738285f7e5b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/troc-eco/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Troc'Eco | Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 8
        echo "    <section id=\"page-principale\">
        
        <div  class=\"shadow-lg\">
            <h1 class=\"text-center my-5 py-3\">Comment je fais ?</h1>
        </div>
        
        ";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"alert alert-success\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  
        <section class=\"partie1\">
        
            <!-- Fonction is_granted() => permet de savoir si l’utilisateur possède un certain rôle 
            IS_AUTHENTICATED_FULLY => si réellement connecté-->
            ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "            <div class=\"text-end\">
                <a class=\"lien-profil\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">
                    <h2 class=\"text-capitalize\">Bonjour ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
            echo ".</h2>
                    <!-- \"app\" : pr acceder a user, la variable est une instance de Symfony\\Bridge\\Twig\\AppVariable qui donne auto accès à user (variable specifique a l'appli)-->
                </a>     
            </div>  
                        
            ";
        }
        // line 34
        echo "        
           
                <article class=\"partie1\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <h2 class=\"col-8 h2-partie1 mb-5 ml-5\">TROC'ECO, </br>UN GESTE SIMPLE.</h2>
                            <img class=\"robe col-4\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/super.png"), "html", null, true);
        echo "\" alt=\"image super\">
                        </div>
                    </div>
                    
                    <div class=\"container\">
                        <div class=\"row\">
                                <img class=\"robe col-4\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/robe.png"), "html", null, true);
        echo "\" alt=\"Robe bleu\">
                                <img class=\"fleche col-4\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fleche.png"), "html", null, true);
        echo "\" alt=\"fleche echange\">
                                <img class=\"livres col-4\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/livres.png"), "html", null, true);
        echo "\" alt=\"livres\">
                        </div>
                        <p class=\"figcaption text-center mt-3\">Echangez un de vos objet contre un autre objet</p>
                    </div>
                </article>

        </section>
        <section class=\"partie2\">
            <article>
                <h2 class=\" h2-partie2 pt-5 text-center\">Comment troquer</h2>
                <div class=\"text-center\">
                    <img class=\" m-5 img1-partie2  \" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/je-propose.png"), "html", null, true);
        echo "\" alt=\"paragraphe\">
                    <img class=\" m-5 img2-partie2\" 
                         src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/je-cherche.png"), "html", null, true);
        echo "\" alt=\"paragraphe\">
                </div>
            </article>
        </section>
        <section class=\"partie3\">
            <article class=\"p-5\">
                
                    <h2 class=\"h2-partie3 mb-5\">  
                        LE TROC  </br>  UNE SOLUTION
                    </h2>
                    <p class=\"text-center px-5 mt-5 fs-1\">  
                        Troc'eco s'adresse à tous les écolos, à ceux qui ont envie de faire des économies, ou tout simplement qui veulent consommer autrement.</br> A travers ce site, nous souhaitons réduire le gaspillage, la surconsommation que notre société engendre, et par la même occasion développer l'échange, l'entraide et la solidarité.
                    </p>
                    
                

            </article>
        
        </section>
       
        
    </section>
        
    
";
        // line 86
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/troc-eco/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 86,  182 => 61,  177 => 59,  163 => 48,  159 => 47,  155 => 46,  146 => 40,  138 => 34,  129 => 28,  125 => 27,  122 => 26,  120 => 25,  113 => 20,  104 => 17,  101 => 16,  96 => 15,  88 => 8,  78 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{# Page Accueil #}

{% block title %}Troc'Eco | Accueil{% endblock %}


{% block contenuPrincipal %}
    <section id=\"page-principale\">
        
        <div  class=\"shadow-lg\">
            <h1 class=\"text-center my-5 py-3\">Comment je fais ?</h1>
        </div>
        
        {# Affichage du message de succes #}
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
  
        <section class=\"partie1\">
        
            <!-- Fonction is_granted() => permet de savoir si l’utilisateur possède un certain rôle 
            IS_AUTHENTICATED_FULLY => si réellement connecté-->
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <div class=\"text-end\">
                <a class=\"lien-profil\" href=\"{{ path('profil') }}\">
                    <h2 class=\"text-capitalize\">Bonjour {{ app.user.nom }}.</h2>
                    <!-- \"app\" : pr acceder a user, la variable est une instance de Symfony\\Bridge\\Twig\\AppVariable qui donne auto accès à user (variable specifique a l'appli)-->
                </a>     
            </div>  
                        
            {% endif %}
        
           
                <article class=\"partie1\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <h2 class=\"col-8 h2-partie1 mb-5 ml-5\">TROC'ECO, </br>UN GESTE SIMPLE.</h2>
                            <img class=\"robe col-4\" src=\"{{ asset('img/super.png')}}\" alt=\"image super\">
                        </div>
                    </div>
                    
                    <div class=\"container\">
                        <div class=\"row\">
                                <img class=\"robe col-4\" src=\"{{ asset('img/robe.png')}}\" alt=\"Robe bleu\">
                                <img class=\"fleche col-4\" src=\"{{ asset('img/fleche.png')}}\" alt=\"fleche echange\">
                                <img class=\"livres col-4\" src=\"{{ asset('img/livres.png')}}\" alt=\"livres\">
                        </div>
                        <p class=\"figcaption text-center mt-3\">Echangez un de vos objet contre un autre objet</p>
                    </div>
                </article>

        </section>
        <section class=\"partie2\">
            <article>
                <h2 class=\" h2-partie2 pt-5 text-center\">Comment troquer</h2>
                <div class=\"text-center\">
                    <img class=\" m-5 img1-partie2  \" src=\"{{ asset('img/je-propose.png')}}\" alt=\"paragraphe\">
                    <img class=\" m-5 img2-partie2\" 
                         src=\"{{ asset('img/je-cherche.png')}}\" alt=\"paragraphe\">
                </div>
            </article>
        </section>
        <section class=\"partie3\">
            <article class=\"p-5\">
                
                    <h2 class=\"h2-partie3 mb-5\">  
                        LE TROC  </br>  UNE SOLUTION
                    </h2>
                    <p class=\"text-center px-5 mt-5 fs-1\">  
                        Troc'eco s'adresse à tous les écolos, à ceux qui ont envie de faire des économies, ou tout simplement qui veulent consommer autrement.</br> A travers ce site, nous souhaitons réduire le gaspillage, la surconsommation que notre société engendre, et par la même occasion développer l'échange, l'entraide et la solidarité.
                    </p>
                    
                

            </article>
        
        </section>
       
        
    </section>
        
    
{# rappel du bouton scroll #}
{{ parent() }}
{% endblock %}", "/troc-eco/index.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/troc-eco/index.html.twig");
    }
}
