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

/* user/profil.html.twig */
class __TwigTemplate_f59c807e27e0d17efb2dcc2a44f47c7791182d1464dd2fc92042f483547e7bda extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 4
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
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/abeille-profil.png"), "html", null, true);
        echo "\" alt=\"img-profil\">
                    </div>
                    <div class=\"contenu-profil col-lg-6 px-5 pb-5\">
                        
                            <h2 class=\"text-capitalize mb-5\">Coucou ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</h2>
                            <p class=\"mb-5\">Email : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                            <p class=\"text-capitalize mb-5\">Ville : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "ville", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                            <p class=\"mb-5\">Code postal : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "cp", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                            <p class=\"mb-5\">Tel : 0";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "telephone", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"mb-5\">
                <h2 class=\"mb-4\">A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
                <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">Modifier mon profil</a>
            </div>
            <div>
                <h2>Mes trocs</h2>
                <!-- Faire une boucle for  -->
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "produits", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 34
            echo "                <div class=\"mb-3\">
                    <div class=\"row g-0 border\">
                        <div class=\"col-md-6\">
                            <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 37))), "html", null, true);
            echo "\" alt=\"Photo-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"col-md-6 p-5\">
                            <div>
                                <h2 class=\"text-capitalize\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 41), "html", null, true);
            echo "</h2>
                                <p class=\"\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 42), "html", null, true);
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
        // line 51
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
        return "user/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  142 => 42,  138 => 41,  129 => 37,  124 => 34,  120 => 33,  112 => 28,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
", "user/profil.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/user/profil.html.twig");
    }
}
