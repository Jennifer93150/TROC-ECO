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

/* troc-eco/politique.html.twig */
class __TwigTemplate_ee21069033373a7136129064069dc42344e40ca0ad6e3a90273fcd51495d9135 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "troc-eco/politique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "troc-eco/politique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "troc-eco/politique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 5
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "
<section>
    <div>
        <h1 class=\"text-center\">Politique de confidentialité</h1>
    </div>
    <div>
        <h1 class=\"text-center\">Champs d'application</h1>

        <p>La présente Charte s’applique à tous les traitements de données mis en œuvre dans les établissements,
           filiales ou managés. La liste des établissements est régulièrement mise à jour sur nos sites internet.</p>
    </div>
    <div>
        <h1 class=\"text-center\">A propos de TROC'ECO</h1>

        <p>Le responsable de traitement, Groupe Soutenance, est une association dont le siège social est situé sis
            30 rue de la paix 93100 Montreuil , enregistrée au Registre du Commerce de Paris sous le numéro 360
            019 841. Parce que TROC'ECO est une association à l’écoute des besoins de ses clients dans le respect
            des textes réglementaires et légaux, TROC'ECO a mis en place une politique de confidentialité
            applicable aux données à caractère personnel. La présente Politique couvre les collectes de données en
            ligne et hors ligne, notamment les informations que nous collectons par l’intermédiaire de nos sites
            internet et de nos applications, ainsi que nos programmes et évènements dans nos établissements. Il se
            peut que vous accédiez aux sites internet à partir d’un ordinateur ou d’un appareil mobile (à partir d’un
            e application sur un smartphone ou tablette, par exemple). Cette politique détaille la manière dont les
            informations recueillies via nos sites internet ou dans nos établissements sont utilisées et protégées. 
            Nous vous recommandons de consulter régulièrement la présente Politique car nous l’actualisons et la
            modifions régulièrement. Nous essayons de vous tenir informé de tout changement effectué.</p>
    </div>
    <div>
        <h1 class=\"text-center\">Traitement des données à caractère personnel</h1>

        <p>Est une donnée personnelle toute information collectée et enregistrée dans un format qui permet de
            vous identifier personnellement, soit directement, soit indirectement, en qualité d’individu. La
            fourniture des informations signalées par un astérisque sur les formulaires de collecte de données est
            obligatoire et nécessaire à la prise en compte de votre demande afin de vous apporter la réponse ou le
            service demandé. En plus de ces informations, nous recueillons, par ailleurs, des informations que vous
            acceptez de nous communiquer ou que nous recueillons dans notre intérêt légitime ou dans le cadre de
            nos obligations légales. Des finalités pour lesquelles ces informations seront collectées ; Des bases
            légales applicables au traitement de données.</p>
    </div>
    <div>
        <h1 class=\"text-center bg-info\">Les catégories de données personnelles que nous collectons</h1>

        <p>Dans le cadre de nos Services, nous sommes amenés à collecter, directement auprès de vous ou via nos
            outils dans nos établissements ou sur les sites internet les catégories de données personnelles suivantes
            : Votre identité, état civil et données de contact, Des informations sur vos consommations, préférences,
            loisirs, centres d’intérêt, votre foyer, etc. Des informations sur votre navigation via nos cookies et
            technologies similaires utilisées sur nos sites internet, Vos réponses aux enquêtes ou études de marché 
            Votre image et voix (dans le cadre de la surveillance de nos établissements).</p>
    </div>
    <div>
        <h1 class=\"text-center bg-info\">Les finalités des traitements</h1>

        <p>Les données collectées sont utilisées par TROC'ECO uniquement dans la mesure nécessaire à la
            bonne fourniture des Services de TROC'ECO.
            Les données à caractère personnel sont collectées pour les fins suivantes :</p>
            <ul>
                <li>la gestion, la validation, la publication et le suivi de l'annonce de l’utilisateur</li>

                <li>l'envoi de formulaires de réponses aux utilisateurs</li>

                <li>l'envoi d'informations sur la modification ou l'évolution de nos services</li>

                <li>l'envoi de propositions commerciales et/ou promotionnelles</li>

                <li>la gestion de la relation utilisateur</li>

                <li>la gestion de l'exercice de vos droits sur vos données personnelles</li>

                <li>la mise à disposition d'outils de partage sur les réseaux sociaux</li>

                <li>la collecte d’informations statistiques sur l'utilisation du service par les utilisateurs</li>

                <li>l'envoi d’enquêtes de satisfaction et analyses statistiques.</li>
              
            </ul>

    </div>

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "troc-eco/politique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# MAIN #}
{% block contenuPrincipal %}
{{parent()}}
<section>
    <div>
        <h1 class=\"text-center\">Politique de confidentialité</h1>
    </div>
    <div>
        <h1 class=\"text-center\">Champs d'application</h1>

        <p>La présente Charte s’applique à tous les traitements de données mis en œuvre dans les établissements,
           filiales ou managés. La liste des établissements est régulièrement mise à jour sur nos sites internet.</p>
    </div>
    <div>
        <h1 class=\"text-center\">A propos de TROC'ECO</h1>

        <p>Le responsable de traitement, Groupe Soutenance, est une association dont le siège social est situé sis
            30 rue de la paix 93100 Montreuil , enregistrée au Registre du Commerce de Paris sous le numéro 360
            019 841. Parce que TROC'ECO est une association à l’écoute des besoins de ses clients dans le respect
            des textes réglementaires et légaux, TROC'ECO a mis en place une politique de confidentialité
            applicable aux données à caractère personnel. La présente Politique couvre les collectes de données en
            ligne et hors ligne, notamment les informations que nous collectons par l’intermédiaire de nos sites
            internet et de nos applications, ainsi que nos programmes et évènements dans nos établissements. Il se
            peut que vous accédiez aux sites internet à partir d’un ordinateur ou d’un appareil mobile (à partir d’un
            e application sur un smartphone ou tablette, par exemple). Cette politique détaille la manière dont les
            informations recueillies via nos sites internet ou dans nos établissements sont utilisées et protégées. 
            Nous vous recommandons de consulter régulièrement la présente Politique car nous l’actualisons et la
            modifions régulièrement. Nous essayons de vous tenir informé de tout changement effectué.</p>
    </div>
    <div>
        <h1 class=\"text-center\">Traitement des données à caractère personnel</h1>

        <p>Est une donnée personnelle toute information collectée et enregistrée dans un format qui permet de
            vous identifier personnellement, soit directement, soit indirectement, en qualité d’individu. La
            fourniture des informations signalées par un astérisque sur les formulaires de collecte de données est
            obligatoire et nécessaire à la prise en compte de votre demande afin de vous apporter la réponse ou le
            service demandé. En plus de ces informations, nous recueillons, par ailleurs, des informations que vous
            acceptez de nous communiquer ou que nous recueillons dans notre intérêt légitime ou dans le cadre de
            nos obligations légales. Des finalités pour lesquelles ces informations seront collectées ; Des bases
            légales applicables au traitement de données.</p>
    </div>
    <div>
        <h1 class=\"text-center bg-info\">Les catégories de données personnelles que nous collectons</h1>

        <p>Dans le cadre de nos Services, nous sommes amenés à collecter, directement auprès de vous ou via nos
            outils dans nos établissements ou sur les sites internet les catégories de données personnelles suivantes
            : Votre identité, état civil et données de contact, Des informations sur vos consommations, préférences,
            loisirs, centres d’intérêt, votre foyer, etc. Des informations sur votre navigation via nos cookies et
            technologies similaires utilisées sur nos sites internet, Vos réponses aux enquêtes ou études de marché 
            Votre image et voix (dans le cadre de la surveillance de nos établissements).</p>
    </div>
    <div>
        <h1 class=\"text-center bg-info\">Les finalités des traitements</h1>

        <p>Les données collectées sont utilisées par TROC'ECO uniquement dans la mesure nécessaire à la
            bonne fourniture des Services de TROC'ECO.
            Les données à caractère personnel sont collectées pour les fins suivantes :</p>
            <ul>
                <li>la gestion, la validation, la publication et le suivi de l'annonce de l’utilisateur</li>

                <li>l'envoi de formulaires de réponses aux utilisateurs</li>

                <li>l'envoi d'informations sur la modification ou l'évolution de nos services</li>

                <li>l'envoi de propositions commerciales et/ou promotionnelles</li>

                <li>la gestion de la relation utilisateur</li>

                <li>la gestion de l'exercice de vos droits sur vos données personnelles</li>

                <li>la mise à disposition d'outils de partage sur les réseaux sociaux</li>

                <li>la collecte d’informations statistiques sur l'utilisation du service par les utilisateurs</li>

                <li>l'envoi d’enquêtes de satisfaction et analyses statistiques.</li>
              
            </ul>

    </div>

</section>

{% endblock %}
", "troc-eco/politique.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/troc-eco/politique.html.twig");
    }
}
