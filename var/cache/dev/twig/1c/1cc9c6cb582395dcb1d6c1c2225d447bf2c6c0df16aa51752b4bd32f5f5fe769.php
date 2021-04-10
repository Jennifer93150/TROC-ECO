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

/* /user/message/liste-messages.html.twig */
class __TwigTemplate_609b1162b66d545ff3f80254cd7116731a1f4877a845dbd4a762275f69a48cd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/message/liste-messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/message/liste-messages.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/user/message/liste-messages.html.twig", 1);
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

        echo "Troc'Eco | Ma Messagerie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 7
        echo "
<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center py-3 my-5\">Ma Messagerie</h1>
    </div>
    
";
        // line 14
        echo "    <div class=\"container shadow bg-vert\">
        <div>
           
                <!-- Faire une boucle for  -->
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesmessages"]) || array_key_exists("mesmessages", $context) ? $context["mesmessages"] : (function () { throw new RuntimeError('Variable "mesmessages" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "                    <div class=\"row g-0 border\">

                        <table class=\"table\">
                            <thead>
                                <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Destinataire</th>
                                <th scope=\"col\">Expéditeur</th>
                                <th scope=\"col\">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope=\"row\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</th>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "destinataire", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                </tr>
                            </tbody>
                        </table>
                       
                       
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            
        </div>
        <div>
                <h2>Messages envoyés</h2>
                <!-- Faire une boucle for  -->
                
                <div class=\"row g-0 border\">
                    
                        <table class=\"table\">
                            <thead>
                                <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Destinataire</th>
                                <th scope=\"col\">Expéditeur</th>
                                <th scope=\"col\">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "messages", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            echo "                                <tr>
                                <th scope=\"row\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</th>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "destinataire", [], "any", false, false, false, 64), "nom", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 65), "nom", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo " 
                            </tbody>
                        </table>
                    
                       
                </div>
               
                
                
                
        </div>
    </div>
    
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/user/message/liste-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 68,  186 => 66,  182 => 65,  178 => 64,  174 => 63,  171 => 62,  167 => 61,  147 => 43,  133 => 35,  129 => 34,  125 => 33,  121 => 32,  106 => 19,  102 => 18,  96 => 14,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Troc'Eco | Ma Messagerie{% endblock %}

{# MAIN #}
{% block contenuPrincipal %}

<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center py-3 my-5\">Ma Messagerie</h1>
    </div>
    
{# FORMULAIRE#}
    <div class=\"container shadow bg-vert\">
        <div>
           
                <!-- Faire une boucle for  -->
                    {% for message in mesmessages %}
                    <div class=\"row g-0 border\">

                        <table class=\"table\">
                            <thead>
                                <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Destinataire</th>
                                <th scope=\"col\">Expéditeur</th>
                                <th scope=\"col\">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope=\"row\">{{ message.id }}</th>
                                <td>{{ message.destinataire.nom }}</td>
                                <td>{{ message.user.nom }}</td>
                                <td>{{ message.message }}</td>
                                </tr>
                            </tbody>
                        </table>
                       
                       
                    </div>
                    {% endfor %}
            
        </div>
        <div>
                <h2>Messages envoyés</h2>
                <!-- Faire une boucle for  -->
                
                <div class=\"row g-0 border\">
                    
                        <table class=\"table\">
                            <thead>
                                <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Destinataire</th>
                                <th scope=\"col\">Expéditeur</th>
                                <th scope=\"col\">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for message in app.user.messages %}
                                <tr>
                                <th scope=\"row\">{{ message.id }}</th>
                                <td>{{ message.destinataire.nom }}</td>
                                <td>{{ message.user.nom }}</td>
                                <td>{{ message.message }}</td>
                                </tr>
                            {% endfor %} 
                            </tbody>
                        </table>
                    
                       
                </div>
               
                
                
                
        </div>
    </div>
    
</section>

{% endblock %}", "/user/message/liste-messages.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/user/message/liste-messages.html.twig");
    }
}
