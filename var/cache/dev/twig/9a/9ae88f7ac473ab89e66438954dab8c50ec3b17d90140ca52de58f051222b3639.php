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
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "

<nav class=\"shadow-lg mt-3 navbar navbar-expand-lg navbar-light bg-nav \">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
      <img  class=\"logo m-3\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"50\" height=\"50\">

    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Comment je fais ?</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\">Je recherche</a>
        </li>

        ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
            echo "\">J'ajoute un troc</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Mon Profil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            echo "\">Mes Messages</a>
        </li>

        ";
            // line 35
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 36
                echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
                echo "\">Gestion</a>
        </li>
        ";
            }
            // line 40
            echo "
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Je me déconnecte</a>
        </li>

        ";
        } else {
            // line 46
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Je m'inscris</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Je me connecte</a>
        </li>
        ";
        }
        // line 53
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
        return array (  164 => 53,  158 => 50,  152 => 47,  149 => 46,  142 => 42,  138 => 40,  132 => 37,  129 => 36,  127 => 35,  121 => 32,  115 => 29,  109 => 26,  106 => 25,  104 => 24,  98 => 21,  92 => 18,  80 => 9,  76 => 8,  70 => 4,  60 => 3,  50 => 60,  48 => 3,  44 => 1,);
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
          <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('accueil') }}\">Comment je fais ?</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('recherche') }}\">Je recherche</a>
        </li>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('ajout') }}\">J'ajoute un troc</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('profil') }}\">Mon Profil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('message') }}\">Mes Messages</a>
        </li>

        {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('gestion') }}\">Gestion</a>
        </li>
        {% endif %}

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Je me déconnecte</a>
        </li>

        {% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('inscription') }}\">Je m'inscris</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Je me connecte</a>
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
