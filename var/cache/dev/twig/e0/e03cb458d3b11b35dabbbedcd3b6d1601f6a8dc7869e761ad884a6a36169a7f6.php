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

/* /troc-eco/politique.html.twig */
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/politique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/politique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/troc-eco/politique.html.twig", 1);
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
    <div class=\"shadow-lg\">
        <h1 class=\"text-center my-5 py-3\">Politique de confidentialité</h1>
    </div>
    <div>
        <h2>Champs d'application</h2>

        <p>La présente Charte s’applique à tous les traitements de données mis en œuvre dans les établissements,
           filiales ou managés. La liste des établissements est régulièrement mise à jour sur nos sites internet.</p>
    </div>
    <div>
        <h2>A propos de TROC'ECO</h2>

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
        <h2>Traitement des données à caractère personnel</h2>

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
        <h2>Les catégories de données personnelles que nous collectons</h2>

        <p>Dans le cadre de nos Services, nous sommes amenés à collecter, directement auprès de vous ou via nos
            outils dans nos établissements ou sur les sites internet les catégories de données personnelles suivantes
            : Votre identité, état civil et données de contact, Des informations sur vos consommations, préférences,
            loisirs, centres d’intérêt, votre foyer, etc. Des informations sur votre navigation via nos cookies et
            technologies similaires utilisées sur nos sites internet, Vos réponses aux enquêtes ou études de marché 
            Votre image et voix (dans le cadre de la surveillance de nos établissements).</p>
    </div>
    <div>
        <h2>Les finalités des traitements</h2>

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
            <div>
        <h2>Les finalités de traitements et bases légales</h2>

        <p>En plus des cas où vous consentez expressément au traitement de vos données (envoi de messages
           marketing par exemple) ou des cas où le traitement de vos données est nécessaire pour que nous
           puissions respecter nos obligations légales (telles que obligation de vigilance, lutte contre la fraude), les traitements de données peuvent être nécessaires pour assurer l’exécution du contrat entre nous ou encore pour la satisfaction de notre intérêt légitime. En effet, il est de notre intérêt légitime de pouvoir gérer les réclamations et plaintes afin d’assurer notre défense, de pouvoir personnaliser et optimiser nos offres et sites internet afin d’améliorer ceux-ci.
           
           
            <div>
        <h2>Partage d'information</h2>

         <p>Certaines des données personnelles collectées par TROC'ECO pourront être transmises à des
           sous-traitants afin d'assister TROC'ECO dans la réalisation de ses activités.
           Ces prestataires ont un accès limité aux données strictement nécessaires pour accomplir les
           tâches pour le compte de TROC'ECO.
           Ils sont par ailleurs contraints contractuellement de les protéger et de les utiliser uniquement 
           aux fins pour lesquelles elles ont été communiquées et conformément à la présente Charte.
           Le Membre reste titulaire de l'intégralité de ses droits de propriété intellectuelle. Mais en publiant une publication sur la plateforme, il cède à la société éditrice le droit non exclusif et gratuit de représenter,reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé,
           dans le monde entier, sur tout support (numérique ou physique), pour la durée de la propriété
           intellectuelle. Le Membre cède notamment le droit d'utiliser sa publication sur internet et sur les réseaux de téléphonie mobile. L'association TROC'ECO s'engage à faire figurer le nom du Membre à proximité de chaque utilisation de sa publication.
           L'association TROC'ECO agit en tant qu'hebergeur du contenu posté par les membres, (annonces,
           commentaires, etc...), conformémement à l'article 6 de la loi sur la confiance dans l'économie
           numérique, l'association TROC'ECO ne peut être tenue responsable du contenu publié par les membres.
           Le formulaire de contact du site permet aux membres de signaler tout contenu qui leur paraît
           inapproprié ou illégal, Il est important de signaler la nature du contenu, ainsi que l'adresse Url par laquelle il est accessible afin que l'association TROC'ECO puisse l'examiner et le supprimer si nécéssaire.</p>
    </div>
           
     <div>
        <h2>Cookies</h2>

         <p>Nous utilisons des cookies techniques ou de session,ce sont des cookies qui sont strictement
            nécessaires au bon fonctionnement du Site.Ils ne peuvent etre désactivés car leur suppression pourrait entrainer des difficultés de navgation sur le site.Ainsi que des Cookies analytiques ou de performance.
            Les cookies de mesure d'audience permettent de connaitre l'utilisation et les performances du Site.Ils permettent d'etablir des statistiques,des volumes de fréquentation et d'utilisation de differents éléments du Site.
            TROC'ECO utilise matomo comme système de mesure d'audience.Ce logiciel est hebergé par TROC'ECO
             et configuré selon les recommandations de la CNIL c'est pourquoi les cookies de notre solution de mesure d'audience sont installés par défaut.
            Conformément à la loi nº 78-17 du 6 janvier 1978 modifiée en 2004, dite informatique et libertés, la base de données et les traitements s'y rapportant a fait l'objet d'une déclaration auprès de la CNIL sous le numéro nº 1885493.
             Conformément à la loi nº 78-17 du 6 janvier 1978 modifiée en 2004, dite informatique et libertés, vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent, que vous pouvez exercer en utilisant le formulaire de contact du site.</p>
    </div>
    <div>
        <h2>Personnes mineures</h2>

            <p>Dans le cadre de nos Services , nous ne collectons que des données personnelles de personnes
             majeures. Nous vous remercions de nous contacter à l'adresse ci-dessous si vous pensez que nous
             traitons des données de mineurs afin que nous puissions les effacer, le cas échéant. En nous
             communiquant des données personnelles sur un mineur, vous garantissez à TROC'ECO être une
             personne majeure, parent ou représentant légal de ce mineur.
             Par ailleurs, toute information personnelle qui se révélerait inexacte entraînera la nullité de la participation, la Société Organisatrice étant en droit de contrôler les informations mentionnées, en particulier l'âge et l'identité en sollicitant la copie de documents d'état civil, en cas de doute légitime sur l'identité et/ou l'âge du participant.</p>
    </div>
    <div>
        <h2>Responsabilité</h2>

          <p>Les informations fournies sur ce site, sont fournies à titre purement informatif et sont        susceptibles de contenir des inexactitudes techniques et des erreurs typographiques. troc'eco se réserve le droit de les corriger, dès que ces erreurs sont portées à sa connaissance.Les informations et/ou documents et/ou services disponibles sur ce site sont susceptibles d'être modifiés à tout moment, et peuvent avoir fait l'objet de mises à jour. En particulier, ils peuvent avoir fait l'objet d'une mise à jour entre le moment de leur téléchargement et celui où l'utilisateur en prend connaissance.
          L'utilisation des informations et/ou documents et/ou services, disponibles sur ce site se fait sous
          l'entière et seule responsabilité de l'utilisateur, qui assume la totalité des conséquences pouvant en découler, sans que l'association TROC'ECO puisse être mise en cause à ce titre, et      sans recours contre cette dernière.
          Troc'eco ne pourra en aucun cas être tenu responsable de tout dommage de quelque nature qu'il soit, résultant de l'interprétation ou de l'utilisation des informations et/ou documents et/ou des services disponibles sur ce site.
          La présence d'une Annonce par le Membre sur la plateforme ne veut pas dire que les offres ou produits sont recommandés par troc'eco. Les informations, annonces, trocs publiés sur la plateforme relèvent de la responsabilité exclusive des Utilisateurs, Membres tiers et Partenaires.
         Les Utilisateurs/ Membres sont responsables des prestations et biens fournis.
         Troc'eco ne peut être tenu pour responsable des fausses déclarations faites par un Utilisateur/
          Membres, tiers ou Partenaire.</p>
    </div>
    <div>
        <h2>Transferts de données</h2>

            <p>\"Le traitement des données collectées et la conservations des données personnelles ont lieu dans l'Union européenne.
            Toutefois, il est possible de manière marginale que les données que nous recueillons lorsque vous utilisez nos plates-formes ou dans le cadre de nos services soient transférées à des sous-traitants ou partenaires commerciaux situés dans d'autres pays, certains d'entre eux pouvant avoir une législation sur la protection des données personnelles moins protectrice que celle en vigueur dans le pays où vous résidez. En cas de transfert de ce type, nous nous assurons de ce que le traitement soit effectué conformément à la présente politique de confidentialité et qu'il soit encadré par les clauses contractuelles types de la Commission européenne qui permettent de garantir un niveau de protection suffisant de la vie privée et des droits fondamentaux des personnes.\"
            <div>
        <h2>Sécurité des données</h2>

            <p>TROC'ECO met en œuvre les moyens appropriés pour préserver la sécurité et la confidentialité des données, via des procédures physiques et logiques de protection, dont le chiffrement des données.
            Nous traitons vos données personnelles également sur des serveurs hébergés par des tiers (opérateurs de réseau ou fournisseurs de service d’infrastructure) et nous mettons en œuvre les moyens nécessaires pour sécuriser notre service. De même, nous imposons à nos prestataires ou sous-traitants ayant accès à vos données personnelles dans le seul cadre des Services les mêmes conditions de sécurité et de confidentialité.</p>
    
             
             
    </div>
    <div>
        <h2>Sites et fonctionnalités tiers</h2>

              <p>Notre site internet peut proposer des liens ou des fonctionnalités vers d’autres sites tiers (notamment des réseaux sociaux tiers), que nous ne possédons pas ou ne contrôlons pas. Si vous cliquez sur l’un de ces liens ou utilisez ces fonctionnalités, vous le faites sous votre responsabilité. Nous ne sommes pas responsables du contenu ou des pratiques de tout site, application ou fonctionnalité tiers.
              Nous stockons vos informations pour une durée proportionnée à l’objectif pour lequel nous les traitons,pour satisfaire aux exigences légales et réglementaires et dans le respect des limites imposées par celles-ci.
              <div>
        <h2>Vos droits</h2>

            <p>En application de la loi \"Informatique et Libertés\" du 6 janvier 1978 modifiée et du Règlement Général Sur la Protection des Données (2016/679) (le \"RGPD), en tant que personne concernée, vous disposez des droits suivants : 
            a) le droit d'accès aux informations personnelles que nous détenons à votre sujet;
            b) le droit de nous demander de mettre à jour ou de corriger toute information personnelle périmée ou incorrecte à votre sujet; c) lorsque le traitement est fondé sur votre consentement, le droit de retirer votre consentement à tout moment, d) le droit de vous opposer à la réception de communications commerciales.
           e) le droit à l'effacement lorsque les conditions de l'article 17 du RGPD sont remplies; 
           f)le droit à la limitation du traitement lorsque les conditions de l'article 18 du RGPD sont remplies; 
           g) le droit à la portabilité des données dans la mesure où les conditions de l'article 20 du RGPD sont remplies;
           h) Vous disposez d'un droit de définir des directives relatives au sort de vos données personnelles après votre décès.
           i) le droit de vous opposer au traitement des données personnelles vous concernant,
           dans la mesure où les conditions de l'article 21 GDPR sont remplies; et j) le droit de déposer une plainte auprès d'une autorité de régulation, à savoir en France la CNIL (https://www.cnil.fr/fr/plaintes); Vous pouvez exercer ces droits en tout temps en nous envoyant un e-mail à troc@groupesoutenance.com.
           Contacts - Coordonnées de notre Délégué à la Protection des Données (DPO)
           Si vous avez des questions ou réclamation à propos de la présente politique de confidentialité ou sur le traitement de vos données par TROC'ECO, vous pouvez contacter le délégué à la protection des données de TROC'ECO par email à troc@groupesoutenance.com ou à l'adresse postale suivante :
           GROUPE soutenance troc'eco, 33 Rue d'Artois à Paris (75008). Dans un souci de confidentialité et de protection de vos données personnelles, nous vous demandons de joindre à l’appui de votre demande copie d’un document officiel permettant de vous identifier (carte d’identité, passeport, permis de conduire). Votre demande sera alors traitée dans les meilleurs délais et en conformité avec les textes applicables.</p>
    </div>
            
    <div>
        <h2>Nous contactez</h2>

        <ul>
                <li>Adresse : 30 rue de la paix 93100 Montreuil</li>

                <li>Nous contacter :+ 33 1 41 05 19 36</li>

                <li>Nous écrire : troc@groupesoutenance.com</li>

                <li>©️ 2021 association TROC'ECO All Rights Reserved.</li>

                
              
            </ul>
    </div>



    </div>

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/troc-eco/politique.html.twig";
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
    <div class=\"shadow-lg\">
        <h1 class=\"text-center my-5 py-3\">Politique de confidentialité</h1>
    </div>
    <div>
        <h2>Champs d'application</h2>

        <p>La présente Charte s’applique à tous les traitements de données mis en œuvre dans les établissements,
           filiales ou managés. La liste des établissements est régulièrement mise à jour sur nos sites internet.</p>
    </div>
    <div>
        <h2>A propos de TROC'ECO</h2>

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
        <h2>Traitement des données à caractère personnel</h2>

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
        <h2>Les catégories de données personnelles que nous collectons</h2>

        <p>Dans le cadre de nos Services, nous sommes amenés à collecter, directement auprès de vous ou via nos
            outils dans nos établissements ou sur les sites internet les catégories de données personnelles suivantes
            : Votre identité, état civil et données de contact, Des informations sur vos consommations, préférences,
            loisirs, centres d’intérêt, votre foyer, etc. Des informations sur votre navigation via nos cookies et
            technologies similaires utilisées sur nos sites internet, Vos réponses aux enquêtes ou études de marché 
            Votre image et voix (dans le cadre de la surveillance de nos établissements).</p>
    </div>
    <div>
        <h2>Les finalités des traitements</h2>

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
            <div>
        <h2>Les finalités de traitements et bases légales</h2>

        <p>En plus des cas où vous consentez expressément au traitement de vos données (envoi de messages
           marketing par exemple) ou des cas où le traitement de vos données est nécessaire pour que nous
           puissions respecter nos obligations légales (telles que obligation de vigilance, lutte contre la fraude), les traitements de données peuvent être nécessaires pour assurer l’exécution du contrat entre nous ou encore pour la satisfaction de notre intérêt légitime. En effet, il est de notre intérêt légitime de pouvoir gérer les réclamations et plaintes afin d’assurer notre défense, de pouvoir personnaliser et optimiser nos offres et sites internet afin d’améliorer ceux-ci.
           
           
            <div>
        <h2>Partage d'information</h2>

         <p>Certaines des données personnelles collectées par TROC'ECO pourront être transmises à des
           sous-traitants afin d'assister TROC'ECO dans la réalisation de ses activités.
           Ces prestataires ont un accès limité aux données strictement nécessaires pour accomplir les
           tâches pour le compte de TROC'ECO.
           Ils sont par ailleurs contraints contractuellement de les protéger et de les utiliser uniquement 
           aux fins pour lesquelles elles ont été communiquées et conformément à la présente Charte.
           Le Membre reste titulaire de l'intégralité de ses droits de propriété intellectuelle. Mais en publiant une publication sur la plateforme, il cède à la société éditrice le droit non exclusif et gratuit de représenter,reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé,
           dans le monde entier, sur tout support (numérique ou physique), pour la durée de la propriété
           intellectuelle. Le Membre cède notamment le droit d'utiliser sa publication sur internet et sur les réseaux de téléphonie mobile. L'association TROC'ECO s'engage à faire figurer le nom du Membre à proximité de chaque utilisation de sa publication.
           L'association TROC'ECO agit en tant qu'hebergeur du contenu posté par les membres, (annonces,
           commentaires, etc...), conformémement à l'article 6 de la loi sur la confiance dans l'économie
           numérique, l'association TROC'ECO ne peut être tenue responsable du contenu publié par les membres.
           Le formulaire de contact du site permet aux membres de signaler tout contenu qui leur paraît
           inapproprié ou illégal, Il est important de signaler la nature du contenu, ainsi que l'adresse Url par laquelle il est accessible afin que l'association TROC'ECO puisse l'examiner et le supprimer si nécéssaire.</p>
    </div>
           
     <div>
        <h2>Cookies</h2>

         <p>Nous utilisons des cookies techniques ou de session,ce sont des cookies qui sont strictement
            nécessaires au bon fonctionnement du Site.Ils ne peuvent etre désactivés car leur suppression pourrait entrainer des difficultés de navgation sur le site.Ainsi que des Cookies analytiques ou de performance.
            Les cookies de mesure d'audience permettent de connaitre l'utilisation et les performances du Site.Ils permettent d'etablir des statistiques,des volumes de fréquentation et d'utilisation de differents éléments du Site.
            TROC'ECO utilise matomo comme système de mesure d'audience.Ce logiciel est hebergé par TROC'ECO
             et configuré selon les recommandations de la CNIL c'est pourquoi les cookies de notre solution de mesure d'audience sont installés par défaut.
            Conformément à la loi nº 78-17 du 6 janvier 1978 modifiée en 2004, dite informatique et libertés, la base de données et les traitements s'y rapportant a fait l'objet d'une déclaration auprès de la CNIL sous le numéro nº 1885493.
             Conformément à la loi nº 78-17 du 6 janvier 1978 modifiée en 2004, dite informatique et libertés, vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent, que vous pouvez exercer en utilisant le formulaire de contact du site.</p>
    </div>
    <div>
        <h2>Personnes mineures</h2>

            <p>Dans le cadre de nos Services , nous ne collectons que des données personnelles de personnes
             majeures. Nous vous remercions de nous contacter à l'adresse ci-dessous si vous pensez que nous
             traitons des données de mineurs afin que nous puissions les effacer, le cas échéant. En nous
             communiquant des données personnelles sur un mineur, vous garantissez à TROC'ECO être une
             personne majeure, parent ou représentant légal de ce mineur.
             Par ailleurs, toute information personnelle qui se révélerait inexacte entraînera la nullité de la participation, la Société Organisatrice étant en droit de contrôler les informations mentionnées, en particulier l'âge et l'identité en sollicitant la copie de documents d'état civil, en cas de doute légitime sur l'identité et/ou l'âge du participant.</p>
    </div>
    <div>
        <h2>Responsabilité</h2>

          <p>Les informations fournies sur ce site, sont fournies à titre purement informatif et sont        susceptibles de contenir des inexactitudes techniques et des erreurs typographiques. troc'eco se réserve le droit de les corriger, dès que ces erreurs sont portées à sa connaissance.Les informations et/ou documents et/ou services disponibles sur ce site sont susceptibles d'être modifiés à tout moment, et peuvent avoir fait l'objet de mises à jour. En particulier, ils peuvent avoir fait l'objet d'une mise à jour entre le moment de leur téléchargement et celui où l'utilisateur en prend connaissance.
          L'utilisation des informations et/ou documents et/ou services, disponibles sur ce site se fait sous
          l'entière et seule responsabilité de l'utilisateur, qui assume la totalité des conséquences pouvant en découler, sans que l'association TROC'ECO puisse être mise en cause à ce titre, et      sans recours contre cette dernière.
          Troc'eco ne pourra en aucun cas être tenu responsable de tout dommage de quelque nature qu'il soit, résultant de l'interprétation ou de l'utilisation des informations et/ou documents et/ou des services disponibles sur ce site.
          La présence d'une Annonce par le Membre sur la plateforme ne veut pas dire que les offres ou produits sont recommandés par troc'eco. Les informations, annonces, trocs publiés sur la plateforme relèvent de la responsabilité exclusive des Utilisateurs, Membres tiers et Partenaires.
         Les Utilisateurs/ Membres sont responsables des prestations et biens fournis.
         Troc'eco ne peut être tenu pour responsable des fausses déclarations faites par un Utilisateur/
          Membres, tiers ou Partenaire.</p>
    </div>
    <div>
        <h2>Transferts de données</h2>

            <p>\"Le traitement des données collectées et la conservations des données personnelles ont lieu dans l'Union européenne.
            Toutefois, il est possible de manière marginale que les données que nous recueillons lorsque vous utilisez nos plates-formes ou dans le cadre de nos services soient transférées à des sous-traitants ou partenaires commerciaux situés dans d'autres pays, certains d'entre eux pouvant avoir une législation sur la protection des données personnelles moins protectrice que celle en vigueur dans le pays où vous résidez. En cas de transfert de ce type, nous nous assurons de ce que le traitement soit effectué conformément à la présente politique de confidentialité et qu'il soit encadré par les clauses contractuelles types de la Commission européenne qui permettent de garantir un niveau de protection suffisant de la vie privée et des droits fondamentaux des personnes.\"
            <div>
        <h2>Sécurité des données</h2>

            <p>TROC'ECO met en œuvre les moyens appropriés pour préserver la sécurité et la confidentialité des données, via des procédures physiques et logiques de protection, dont le chiffrement des données.
            Nous traitons vos données personnelles également sur des serveurs hébergés par des tiers (opérateurs de réseau ou fournisseurs de service d’infrastructure) et nous mettons en œuvre les moyens nécessaires pour sécuriser notre service. De même, nous imposons à nos prestataires ou sous-traitants ayant accès à vos données personnelles dans le seul cadre des Services les mêmes conditions de sécurité et de confidentialité.</p>
    
             
             
    </div>
    <div>
        <h2>Sites et fonctionnalités tiers</h2>

              <p>Notre site internet peut proposer des liens ou des fonctionnalités vers d’autres sites tiers (notamment des réseaux sociaux tiers), que nous ne possédons pas ou ne contrôlons pas. Si vous cliquez sur l’un de ces liens ou utilisez ces fonctionnalités, vous le faites sous votre responsabilité. Nous ne sommes pas responsables du contenu ou des pratiques de tout site, application ou fonctionnalité tiers.
              Nous stockons vos informations pour une durée proportionnée à l’objectif pour lequel nous les traitons,pour satisfaire aux exigences légales et réglementaires et dans le respect des limites imposées par celles-ci.
              <div>
        <h2>Vos droits</h2>

            <p>En application de la loi \"Informatique et Libertés\" du 6 janvier 1978 modifiée et du Règlement Général Sur la Protection des Données (2016/679) (le \"RGPD), en tant que personne concernée, vous disposez des droits suivants : 
            a) le droit d'accès aux informations personnelles que nous détenons à votre sujet;
            b) le droit de nous demander de mettre à jour ou de corriger toute information personnelle périmée ou incorrecte à votre sujet; c) lorsque le traitement est fondé sur votre consentement, le droit de retirer votre consentement à tout moment, d) le droit de vous opposer à la réception de communications commerciales.
           e) le droit à l'effacement lorsque les conditions de l'article 17 du RGPD sont remplies; 
           f)le droit à la limitation du traitement lorsque les conditions de l'article 18 du RGPD sont remplies; 
           g) le droit à la portabilité des données dans la mesure où les conditions de l'article 20 du RGPD sont remplies;
           h) Vous disposez d'un droit de définir des directives relatives au sort de vos données personnelles après votre décès.
           i) le droit de vous opposer au traitement des données personnelles vous concernant,
           dans la mesure où les conditions de l'article 21 GDPR sont remplies; et j) le droit de déposer une plainte auprès d'une autorité de régulation, à savoir en France la CNIL (https://www.cnil.fr/fr/plaintes); Vous pouvez exercer ces droits en tout temps en nous envoyant un e-mail à troc@groupesoutenance.com.
           Contacts - Coordonnées de notre Délégué à la Protection des Données (DPO)
           Si vous avez des questions ou réclamation à propos de la présente politique de confidentialité ou sur le traitement de vos données par TROC'ECO, vous pouvez contacter le délégué à la protection des données de TROC'ECO par email à troc@groupesoutenance.com ou à l'adresse postale suivante :
           GROUPE soutenance troc'eco, 33 Rue d'Artois à Paris (75008). Dans un souci de confidentialité et de protection de vos données personnelles, nous vous demandons de joindre à l’appui de votre demande copie d’un document officiel permettant de vous identifier (carte d’identité, passeport, permis de conduire). Votre demande sera alors traitée dans les meilleurs délais et en conformité avec les textes applicables.</p>
    </div>
            
    <div>
        <h2>Nous contactez</h2>

        <ul>
                <li>Adresse : 30 rue de la paix 93100 Montreuil</li>

                <li>Nous contacter :+ 33 1 41 05 19 36</li>

                <li>Nous écrire : troc@groupesoutenance.com</li>

                <li>©️ 2021 association TROC'ECO All Rights Reserved.</li>

                
              
            </ul>
    </div>



    </div>

</section>

{% endblock %}
", "/troc-eco/politique.html.twig", "/Users/bouhidjennifer/Desktop/troc-eco/TROC-ECO/templates/troc-eco/politique.html.twig");
    }
}
