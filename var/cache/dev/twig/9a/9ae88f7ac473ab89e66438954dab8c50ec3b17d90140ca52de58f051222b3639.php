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

/* composants/nav.html.twig */
class __TwigTemplate_696db48eb11ddf85b8e67f253cb8f0c1e948611fe1c3f845e646822dd16972c0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/nav.html.twig"));

        // line 1
        echo "<header>
    <!-- BLOC HEADER -->
    
        ";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "

<nav class=\"shadow-lg mt-3 navbar navbar-expand-lg navbar-light bg-nav \">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
      <img  class=\"logo m-3\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"50\" height=\"50\">

    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active text-light\" aria-current=\"page\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Comment je fais ?</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\"  href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\">Je recherche</a>
        </li>

        ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
            echo "\">J'ajoute un troc</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Mon Profil</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle text-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Mes Messages</a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li><a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            echo "\">Envoyer un message</a></li>
            <li><hr class=\"dropdown-divider\"></li> 
            <!-- pour le chemin de la messagerie j'indique l'id de user connecté pour correspondre à la route demandé dans messagecontroller \"/messagerie/{id<\\d+>}\" -->
            <li><a class=\"dropdown-item\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Ma messagerie</a></li>
          </ul>
        </li>

        ";
            // line 42
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 43
                echo "        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
                echo "\">Gestion</a>
        </li>
        ";
            }
            // line 47
            echo "
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Je me déconnecte</a>
        </li>

        ";
        } else {
            // line 53
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Je m'inscris</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Je me connecte</a>
        </li>
        ";
        }
        // line 60
        echo "
      </ul>
    </div>
  </div>
</nav>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "composants/nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 60,  168 => 57,  162 => 54,  159 => 53,  152 => 49,  148 => 47,  142 => 44,  139 => 43,  137 => 42,  130 => 38,  124 => 35,  116 => 30,  110 => 27,  107 => 26,  105 => 25,  99 => 22,  93 => 19,  81 => 10,  77 => 9,  71 => 5,  61 => 4,  51 => 67,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <!-- BLOC HEADER -->
    
        {% block header %}


<nav class=\"shadow-lg mt-3 navbar navbar-expand-lg navbar-light bg-nav \">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">
      <img  class=\"logo m-3\" src=\"{{ asset('img/logo.png') }}\" alt=\"logo\" width=\"50\" height=\"50\">

    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active text-light\" aria-current=\"page\" href=\"{{ path('accueil') }}\">Comment je fais ?</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\"  href=\"{{ path('recherche') }}\">Je recherche</a>
        </li>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('ajout') }}\">J'ajoute un troc</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('profil') }}\">Mon Profil</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle text-light\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Mes Messages</a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li><a class=\"dropdown-item\" href=\"{{ path('message') }}\">Envoyer un message</a></li>
            <li><hr class=\"dropdown-divider\"></li> 
            <!-- pour le chemin de la messagerie j'indique l'id de user connecté pour correspondre à la route demandé dans messagecontroller \"/messagerie/{id<\\d+>}\" -->
            <li><a class=\"dropdown-item\" href=\"{{ path('messagerie', {'id': app.user.id}) }}\">Ma messagerie</a></li>
          </ul>
        </li>

        {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('gestion') }}\">Gestion</a>
        </li>
        {% endif %}

        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('app_logout') }}\">Je me déconnecte</a>
        </li>

        {% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('inscription') }}\">Je m'inscris</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('app_login') }}\">Je me connecte</a>
        </li>
        {% endif %}

      </ul>
    </div>
  </div>
</nav>

{% endblock %}
</header>", "composants/nav.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/composants/nav.html.twig");
    }
}
