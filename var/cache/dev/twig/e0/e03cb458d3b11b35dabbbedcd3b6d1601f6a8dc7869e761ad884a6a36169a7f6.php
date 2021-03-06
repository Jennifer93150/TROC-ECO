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
        <h1 class=\"text-center\">Politique de confidentialit??</h1>
    </div>
    <div>
        <h1 class=\"text-center\">Champs d'application</h1>

        <p>La pr??sente Charte s???applique ?? tous les traitements de donn??es mis en ??uvre dans les ??tablissements,
           filiales ou manag??s. La liste des ??tablissements est r??guli??rement mise ?? jour sur nos sites internet.</p>
    </div>
    <div>
        <h1 class=\"text-center\">A propos de TROC'ECO</h1>

        <p>Le responsable de traitement, Groupe Soutenance, est une association dont le si??ge social est situ?? sis
            30 rue de la paix 93100 Montreuil , enregistr??e au Registre du Commerce de Paris sous le num??ro 360
            019 841. Parce que TROC'ECO est une association ?? l?????coute des besoins de ses clients dans le respect
            des textes r??glementaires et l??gaux, TROC'ECO a mis en place une politique de confidentialit??
            applicable aux donn??es ?? caract??re personnel. La pr??sente Politique couvre les collectes de donn??es en
            ligne et hors ligne, notamment les informations que nous collectons par l???interm??diaire de nos sites
            internet et de nos applications, ainsi que nos programmes et ??v??nements dans nos ??tablissements. Il se
            peut que vous acc??diez aux sites internet ?? partir d???un ordinateur ou d???un appareil mobile (?? partir d???un
            e application sur un smartphone ou tablette, par exemple). Cette politique d??taille la mani??re dont les
            informations recueillies via nos sites internet ou dans nos ??tablissements sont utilis??es et prot??g??es. 
            Nous vous recommandons de consulter r??guli??rement la pr??sente Politique car nous l???actualisons et la
            modifions r??guli??rement. Nous essayons de vous tenir inform?? de tout changement effectu??.</p>
    </div>
    <div>
        <h1 class=\"text-center\">Traitement des donn??es ?? caract??re personnel</h1>

        <p>Est une donn??e personnelle toute information collect??e et enregistr??e dans un format qui permet de
            vous identifier personnellement, soit directement, soit indirectement, en qualit?? d???individu. La
            fourniture des informations signal??es par un ast??risque sur les formulaires de collecte de donn??es est
            obligatoire et n??cessaire ?? la prise en compte de votre demande afin de vous apporter la r??ponse ou le
            service demand??. En plus de ces informations, nous recueillons, par ailleurs, des informations que vous
            acceptez de nous communiquer ou que nous recueillons dans notre int??r??t l??gitime ou dans le cadre de
            nos obligations l??gales. Des finalit??s pour lesquelles ces informations seront collect??es ; Des bases
            l??gales applicables au traitement de donn??es.</p>
    </div>
    <div>
        <h1 class=\"text-center bg-info\">Les cat??gories de donn??es personnelles que nous collectons</h1>

        <p>Dans le cadre de nos Services, nous sommes amen??s ?? collecter, directement aupr??s de vous ou via nos
            outils dans nos ??tablissements ou sur les sites internet les cat??gories de donn??es personnelles suivantes
            : Votre identit??, ??tat civil et donn??es de contact, Des informations sur vos consommations, pr??f??rences,
            loisirs, centres d???int??r??t, votre foyer, etc. Des informations sur votre navigation via nos cookies et
            technologies similaires utilis??es sur nos sites internet, Vos r??ponses aux enqu??tes ou ??tudes de march?? 
            Votre image et voix (dans le cadre de la surveillance de nos ??tablissements).</p>
    </div>
    <div>
        <h1 class=\"text-center bg-info\">Les finalit??s des traitements</h1>

        <p>Les donn??es collect??es sont utilis??es par TROC'ECO uniquement dans la mesure n??cessaire ?? la
            bonne fourniture des Services de TROC'ECO.
            Les donn??es ?? caract??re personnel sont collect??es pour les fins suivantes :</p>
            <ul>
                <li>la gestion, la validation, la publication et le suivi de l'annonce de l???utilisateur</li>

                <li>l'envoi de formulaires de r??ponses aux utilisateurs</li>

                <li>l'envoi d'informations sur la modification ou l'??volution de nos services</li>

                <li>l'envoi de propositions commerciales et/ou promotionnelles</li>

                <li>la gestion de la relation utilisateur</li>

                <li>la gestion de l'exercice de vos droits sur vos donn??es personnelles</li>

                <li>la mise ?? disposition d'outils de partage sur les r??seaux sociaux</li>

                <li>la collecte d???informations statistiques sur l'utilisation du service par les utilisateurs</li>

                <li>l'envoi d???enqu??tes de satisfaction et analyses statistiques.</li>
              
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
        <h1 class=\"text-center\">Politique de confidentialit??</h1>
    </div>
    <div>
        <h1 class=\"text-center\">Champs d'application</h1>

        <p>La pr??sente Charte s???applique ?? tous les traitements de donn??es mis en ??uvre dans les ??tablissements,
           filiales ou manag??s. La liste des ??tablissements est r??guli??rement mise ?? jour sur nos sites internet.</p>
    </div>
    <div>
        <h1 class=\"text-center\">A propos de TROC'ECO</h1>

        <p>Le responsable de traitement, Groupe Soutenance, est une association dont le si??ge social est situ?? sis
            30 rue de la paix 93100 Montreuil , enregistr??e au Registre du Commerce de Paris sous le num??ro 360
            019 841. Parce que TROC'ECO est une association ?? l?????coute des besoins de ses clients dans le respect
            des textes r??glementaires et l??gaux, TROC'ECO a mis en place une politique de confidentialit??
            applicable aux donn??es ?? caract??re personnel. La pr??sente Politique couvre les collectes de donn??es en
            ligne et hors ligne, notamment les informations que nous collectons par l???interm??diaire de nos sites
            internet et de nos applications, ainsi que nos programmes et ??v??nements dans nos ??tablissements. Il se
            peut que vous acc??diez aux sites internet ?? partir d???un ordinateur ou d???un appareil mobile (?? partir d???un
            e application sur un smartphone ou tablette, par exemple). Cette politique d??taille la mani??re dont les
            informations recueillies via nos sites internet ou dans nos ??tablissements sont utilis??es et prot??g??es. 
            Nous vous recommandons de consulter r??guli??rement la pr??sente Politique car nous l???actualisons et la
            modifions r??guli??rement. Nous essayons de vous tenir inform?? de tout changement effectu??.</p>
    </div>
    <div>
        <h1 class=\"text-center\">Traitement des donn??es ?? caract??re personnel</h1>

        <p>Est une donn??e personnelle toute information collect??e et enregistr??e dans un format qui permet de
            vous identifier personnellement, soit directement, soit indirectement, en qualit?? d???individu. La
            fourniture des informations signal??es par un ast??risque sur les formulaires de collecte de donn??es est
            obligatoire et n??cessaire ?? la prise en compte de votre demande afin de vous apporter la r??ponse ou le
            service demand??. En plus de ces informations, nous recueillons, par ailleurs, des informations que vous
            acceptez de nous communiquer ou que nous recueillons dans notre int??r??t l??gitime ou dans le cadre de
            nos obligations l??gales. Des finalit??s pour lesquelles ces informations seront collect??es ; Des bases
            l??gales applicables au traitement de donn??es.</p>
    </div>
    <div>
        <h1 class=\"text-center bg-info\">Les cat??gories de donn??es personnelles que nous collectons</h1>

        <p>Dans le cadre de nos Services, nous sommes amen??s ?? collecter, directement aupr??s de vous ou via nos
            outils dans nos ??tablissements ou sur les sites internet les cat??gories de donn??es personnelles suivantes
            : Votre identit??, ??tat civil et donn??es de contact, Des informations sur vos consommations, pr??f??rences,
            loisirs, centres d???int??r??t, votre foyer, etc. Des informations sur votre navigation via nos cookies et
            technologies similaires utilis??es sur nos sites internet, Vos r??ponses aux enqu??tes ou ??tudes de march?? 
            Votre image et voix (dans le cadre de la surveillance de nos ??tablissements).</p>
    </div>
    <div>
        <h1 class=\"text-center bg-info\">Les finalit??s des traitements</h1>

        <p>Les donn??es collect??es sont utilis??es par TROC'ECO uniquement dans la mesure n??cessaire ?? la
            bonne fourniture des Services de TROC'ECO.
            Les donn??es ?? caract??re personnel sont collect??es pour les fins suivantes :</p>
            <ul>
                <li>la gestion, la validation, la publication et le suivi de l'annonce de l???utilisateur</li>

                <li>l'envoi de formulaires de r??ponses aux utilisateurs</li>

                <li>l'envoi d'informations sur la modification ou l'??volution de nos services</li>

                <li>l'envoi de propositions commerciales et/ou promotionnelles</li>

                <li>la gestion de la relation utilisateur</li>

                <li>la gestion de l'exercice de vos droits sur vos donn??es personnelles</li>

                <li>la mise ?? disposition d'outils de partage sur les r??seaux sociaux</li>

                <li>la collecte d???informations statistiques sur l'utilisation du service par les utilisateurs</li>

                <li>l'envoi d???enqu??tes de satisfaction et analyses statistiques.</li>
              
            </ul>

    </div>

</section>

{% endblock %}
", "troc-eco/politique.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/troc-eco/politique.html.twig");
    }
}
