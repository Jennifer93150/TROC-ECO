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

/* /user/profil.html.twig */
class __TwigTemplate_f59c807e27e0d17efb2dcc2a44f47c7791182d1464dd2fc92042f483547e7bda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/user/profil.html.twig", 1);
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

        echo "Troc'Eco | Mon profil";
        
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
        echo "
    <section>
        <div  class=\"shadow-lg\">
            <h1 class=\"text-center my-5 py-3\">Mon profil</h1>
        </div>
        <div class=\"container shadow bg-vert rounded\">
            <div class=\"mb-3\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-6\">
                        <img class=\"rounded abeille\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/abeille-profil.png"), "html", null, true);
        echo "\" alt=\"img-profil\">
                    </div>
                    <div class=\"contenu-profil col-lg-6 px-5 pb-5\">
                        
                            <h2 class=\"text-capitalize mb-5\">Coucou ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
                            <p class=\"mb-5\">Email : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                            <p class=\"text-capitalize mb-5\">Ville : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "ville", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                            <p class=\"mb-5\">Code postal : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "cp", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                            <p class=\"mb-5\">Tel : 0";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "telephone", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"mb-5\">
                <h2 class=\"mb-4\">A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\">Modifier mon profil</a>
            </div>
            <div>
                <h2>Mes trocs</h2>
                <!-- Faire une boucle for  -->
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "produits", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 36
            echo "                <div class=\"mb-3\">
                    <div class=\"row g-0 border\">
                        <div class=\"col-md-6\">
                            <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" alt=\"Photo-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"col-md-6 p-5\">
                            <div>
                                <h2 class=\"text-capitalize\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 43), "html", null, true);
            echo "</h2>
                                <p class=\"\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                    <!-- Fonction de suppression du produit par user A faire avec ceci entre accolades: path('deleteproduit', {'id':produit.id})-->
                   <a href=\"#\"><h3 class=\"btn text-center text-dark\">Supprimer cette annonce</h3></a>

                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "/user/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 53,  162 => 44,  158 => 43,  149 => 39,  144 => 36,  140 => 35,  132 => 30,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Troc'Eco | Mon profil{% endblock %}

{% block contenuPrincipal %}

    <section>
        <div  class=\"shadow-lg\">
            <h1 class=\"text-center my-5 py-3\">Mon profil</h1>
        </div>
        <div class=\"container shadow bg-vert rounded\">
            <div class=\"mb-3\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-6\">
                        <img class=\"rounded abeille\" src=\"{{ asset('img/abeille-profil.png')}}\" alt=\"img-profil\">
                    </div>
                    <div class=\"contenu-profil col-lg-6 px-5 pb-5\">
                        
                            <h2 class=\"text-capitalize mb-5\">Coucou {{ app.user.nom }}</h2>
                            <p class=\"mb-5\">Email : {{ app.user.email }}</p>
                            <p class=\"text-capitalize mb-5\">Ville : {{ app.user.ville }}</p>
                            <p class=\"mb-5\">Code postal : {{ app.user.cp }}</p>
                            <p class=\"mb-5\">Tel : 0{{ app.user.telephone }}</p>
                    </div>
                </div>
            </div>
            <div class=\"mb-5\">
                <h2 class=\"mb-4\">A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
                <a href=\"{{ path('edit_profil', {'id':app.user.id})}}\">Modifier mon profil</a>
            </div>
            <div>
                <h2>Mes trocs</h2>
                <!-- Faire une boucle for  -->
                {% for produit in app.user.produits %}
                <div class=\"mb-3\">
                    <div class=\"row g-0 border\">
                        <div class=\"col-md-6\">
                            <img src=\"{{ asset('uploads/brochures/' ~ produit.photo)}}\" alt=\"Photo-{{ produit.titre }}\">
                        </div>
                        <div class=\"col-md-6 p-5\">
                            <div>
                                <h2 class=\"text-capitalize\">{{ produit.titre }}</h2>
                                <p class=\"\">{{ produit.description }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Fonction de suppression du produit par user A faire avec ceci entre accolades: path('deleteproduit', {'id':produit.id})-->
                   <a href=\"#\"><h3 class=\"btn text-center text-dark\">Supprimer cette annonce</h3></a>

                </div>
                {% endfor %}
                
            </div>

        </div>
    </section>


{% endblock %}
", "/user/profil.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/user/profil.html.twig");
    }
}
