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
        // line 61
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
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            echo "\">Mes Messages</a>
        </li>

        ";
            // line 36
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 37
                echo "        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
                echo "\">Gestion</a>
        </li>
        ";
            }
            // line 41
            echo "
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Je me déconnecte</a>
        </li>

        ";
        } else {
            // line 47
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Je m'inscris</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Je me connecte</a>
        </li>
        ";
        }
        // line 54
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
        return array (  165 => 54,  159 => 51,  153 => 48,  150 => 47,  143 => 43,  139 => 41,  133 => 38,  130 => 37,  128 => 36,  122 => 33,  116 => 30,  110 => 27,  107 => 26,  105 => 25,  99 => 22,  93 => 19,  81 => 10,  77 => 9,  71 => 5,  61 => 4,  51 => 61,  49 => 4,  44 => 1,);
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
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('message') }}\">Mes Messages</a>
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
