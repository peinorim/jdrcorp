<?php

/* JdrCorpIndexBundle:Index:index.html.twig */
class __TwigTemplate_f96cccafaf1f0cd68a785a9c55475cc18b7da48cbf14710103ca99ad63dc8ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "JdrCorp - Accueil
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-xs-6 col-md-3\">
    </div>
    <div class=\"col-md-3\">
        <a class=\"thumbnail\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("Elric");
        echo "\">
            <img class=\"img-responsive\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jdrcorpindex/images/Elric_index.jpg"), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-primary btn-block\">Créer une fiche de personnage pour Elric</button>
        </a>
    </div>
    <div class=\"col-md-3\">
        <a class=\"thumbnail\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("Guildes");
        echo "\">
            <img class=\"img-responsive\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jdrcorpindex/images/Guildes_index.jpg"), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-success btn-block\">Entrer dans l'univers de Guildes</button>
        </a>
    </div>
    <div class=\"col-xs-6 col-md-3\">
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpIndexBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  58 => 16,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
