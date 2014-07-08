<?php

/* JdrCorpGuildesBundle:Guildes:index.html.twig */
class __TwigTemplate_ebec2d8b3c29476dc7c443d34335d313ca0b0ce49e87125e5437ab254d030ab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_guildes.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_guildes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    JdrCorp - Guildes - Accueil
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">L'histoire de Guildes</h3>
        </div>
        <div class=\"panel-body text-justify\">
            L'action du jeu se déroule dans un univers imaginaire nommé Cosme. Six peuples typés vivent dans un archipel nommé les Rivages alors que se produit un cataclysme : un raz-de-marée dévaste les côtes des îles. 
            Quelques mois plus tard, on découvre qu'un nouveau continent est \"apparu\" à deux mois de navigation, recelant de mystérieuses peuplades, créatures et puissances magiques. 
            Les joueurs interprètent des natifs des Rivages, faisant partie d'organisations nommées \"Guildes\" vouées à l'exploration et l'exploitation des ressources du Nouveau Monde. L'ambiance est très proche de l'exploration de l'Amérique par les Européens, le côté magique et fantastique en plus.
            Le système de jeu est simple : chaque personnage est défini par des caractéristiques chiffrées (Fort, Agile, Résistant, Observateur, Savant, Rusé, Talentueux, Charmeur) et de compétences (Navigation, Médecine, Négoce, Astronomie, Armes, etc.). 
            Afin de définir si une action est réussie, la somme de deux dés à six faces, de la caractéristique et la compétence appropriées est comparée sur une table avec la difficulté de l'action (de \"routine\" à \"impossible\"), et un niveau de réussite (ou d'échec) variant de \"réussite critique\" à \"échec critique\" est alors interprété par le meneur de jeu.
        </div>
    </div>

    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Un exemple de magie</h3>
        </div>
        <div class=\"panel-body\">
            <h4><b>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getNom"), "html", null, true);
        echo "</b></h4>
            <p><b>Description : </b>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getEffet"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"panel panel-danger\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Un exemple de machination</h3>
        </div>
        <div class=\"panel-body\">
            <h4><b>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getNom"), "html", null, true);
        echo "</b></h4>
            <p><b>Description : </b>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getNom"), "html", null, true);
        echo "</p>
            <p><b>Effet pervers : </b>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getEffetPervers"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Un exemple de coup de bol lié au personnage</h3>
        </div>
        <div class=\"panel-body\">
            <h4><b>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getNom"), "html", null, true);
        echo "</b></h4>
            <p><b>Description : </b>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getNom"), "html", null, true);
        echo "</p>
            <p><b>Effet : </b>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getEffet"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Un exemple de mésaventure liée au personnage</h3>
        </div>
        <div class=\"panel-body\">
            <h4><b>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "getNom"), "html", null, true);
        echo "</b></h4>
            <p><b>Description : </b>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "getNom"), "html", null, true);
        echo "</p>
            <p><b>Effet : </b>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "getEffet"), "html", null, true);
        echo "</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 59,  121 => 58,  117 => 57,  105 => 48,  101 => 47,  97 => 46,  85 => 37,  81 => 36,  77 => 35,  65 => 26,  61 => 25,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
