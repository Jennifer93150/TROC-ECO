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

/* troc-eco/ajout-troc.html.twig */
class __TwigTemplate_cc746f6c53b649514e35842e9e62e501b8f134356801f49c6488627afcec38ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "troc-eco/ajout-troc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "troc-eco/ajout-troc.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "troc-eco/ajout-troc.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "    <section>
        <div class=\"shadow-lg\">
            <h1 class=\"text-center py-3 my-5\"> Ajouter un troc</h1>
        </div>
        ";
        // line 13
        echo "        <div class=\"container shadow bg-vert rounded\">
            <form method=\"post\">
                <div>
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                        <div class=\"my-custom-class-for-errors\">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 18, $this->source); })()), 'errors');
        echo "
                        </div>

                        <div class=\"row\">
                            <h2 class=\"annonce\">Annonce</h2>
                        
                            <h2 class=\"type\">Categorie</h2>
                            
                            <div class=\"col\" id=\"some-custom-id\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 27, $this->source); })()), "categorie", [], "any", false, false, false, 27), 'row');
        echo "
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 28, $this->source); })()), "photo", [], "any", false, false, false, 28), 'row');
        echo "
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), 'row');
        echo "
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'row');
        echo "
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 31, $this->source); })()), "save", [], "any", false, false, false, 31), 'row');
        echo "
                            </div>
                                
                        </div>
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
                </div>
            </form>
        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "troc-eco/ajout-troc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  87 => 18,  82 => 16,  77 => 13,  71 => 8,  61 => 7,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme Formulaire 'bootstrap_4_layout.html.twig' %}



{% block contenuPrincipal %}
    <section>
        <div class=\"shadow-lg\">
            <h1 class=\"text-center py-3 my-5\"> Ajouter un troc</h1>
        </div>
        {# FORMULAIRE#}
        <div class=\"container shadow bg-vert rounded\">
            <form method=\"post\">
                <div>
                    {{ form_start(Formulaire) }}
                        <div class=\"my-custom-class-for-errors\">
                            {{ form_errors(Formulaire) }}
                        </div>

                        <div class=\"row\">
                            <h2 class=\"annonce\">Annonce</h2>
                        
                            <h2 class=\"type\">Categorie</h2>
                            
                            <div class=\"col\" id=\"some-custom-id\">
                                {{ form_row(Formulaire.categorie) }}
                                {{ form_row(Formulaire.photo) }}
                                {{ form_row(Formulaire.titre) }}
                                {{ form_row(Formulaire.description) }}
                                {{ form_row(Formulaire.save) }}
                            </div>
                                
                        </div>
                    {{ form_end(Formulaire) }}
                </div>
            </form>
        </div>
    </section>


{% endblock %}
", "troc-eco/ajout-troc.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/troc-eco/ajout-troc.html.twig");
    }
}
