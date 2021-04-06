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

/* /user/inscription.html.twig */
class __TwigTemplate_db53546b6d72e611c8050bf0caf61de018066193af1fd77a83c5eda7c86412b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/user/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Troc'Eco | Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 10
        echo "
<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center py-3 my-5\">Je m'inscris</h1>
    </div>
    
     ";
        // line 17
        echo "        <div>
                <form method=\"post\">
                        <div class=\"container shadow bg-vert rounded\">
                                <button type=\"button\" class=\"btn\">
                                        <a class=\"text-dark btn\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">J'ai déjà un compte ></a>
                                </button>
                        
                        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["id" => "new_user"]]);
        echo "
                        <div class=\"row\">
                                
                                <div class=\"col-12\">
                                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'label');
        echo "
                                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label');
        echo "
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36), 'label');
        echo "
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 40, $this->source); })()), "cp", [], "any", false, false, false, 40), 'label');
        echo "
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 41, $this->source); })()), "cp", [], "any", false, false, false, 41), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 44, $this->source); })()), "ville", [], "any", false, false, false, 44), 'label');
        echo "
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 45, $this->source); })()), "ville", [], "any", false, false, false, 45), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 48, $this->source); })()), "telephone", [], "any", false, false, false, 48), 'label');
        echo "
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 49, $this->source); })()), "telephone", [], "any", false, false, false, 49), 'widget');
        echo "
                                </div>
                              
                                <div class=\"col-12 my-3\">
                                <!-- En cours de création -->
                                        <label for=\"verifpass\">Saisir une seconde fois le mot de passe</label>
                                        <input type=\"password\" id=\"verifpass\" required>
                                </div>
                               
                        </div>
                                
                                ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
                        <button type=\"button\" class=\"btn\">
                                <a class=\"text-dark btn\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"> Retour à l'accueil > </a>
                        </button>
                        
                </form>
        </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/user/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 62,  183 => 60,  169 => 49,  165 => 48,  159 => 45,  155 => 44,  149 => 41,  145 => 40,  139 => 37,  135 => 36,  129 => 33,  125 => 32,  119 => 29,  115 => 28,  108 => 24,  102 => 21,  96 => 17,  88 => 10,  78 => 9,  59 => 6,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# PAGE INSCRIPTION #}


{% block title %}Troc'Eco | Inscription{% endblock %}

{# MAIN #}
{% block contenuPrincipal %}

<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center py-3 my-5\">Je m'inscris</h1>
    </div>
    
     {# FORMULAIRE#}
        <div>
                <form method=\"post\">
                        <div class=\"container shadow bg-vert rounded\">
                                <button type=\"button\" class=\"btn\">
                                        <a class=\"text-dark btn\" href=\"{{ path('app_login') }}\">J'ai déjà un compte ></a>
                                </button>
                        
                        {{ form_start(Formulaire, {'attr': {'id': 'new_user'}}) }}
                        <div class=\"row\">
                                
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.nom) }}
                                        {{ form_widget(Formulaire.nom) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.email) }}
                                        {{ form_widget(Formulaire.email) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.password) }}
                                        {{ form_widget(Formulaire.password) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.cp) }}
                                        {{ form_widget(Formulaire.cp) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.ville) }}
                                        {{ form_widget(Formulaire.ville) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.telephone) }}
                                        {{ form_widget(Formulaire.telephone) }}
                                </div>
                              
                                <div class=\"col-12 my-3\">
                                <!-- En cours de création -->
                                        <label for=\"verifpass\">Saisir une seconde fois le mot de passe</label>
                                        <input type=\"password\" id=\"verifpass\" required>
                                </div>
                               
                        </div>
                                
                                {{ form_end(Formulaire) }}
                        <button type=\"button\" class=\"btn\">
                                <a class=\"text-dark btn\" href=\"{{ path('accueil') }}\"> Retour à l'accueil > </a>
                        </button>
                        
                </form>
        </div>
</section>

{% endblock %}", "/user/inscription.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/user/inscription.html.twig");
    }
}
