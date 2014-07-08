<?php

/* JdrCorpGuildesBundle:Guildes:cdb.html.twig */
class __TwigTemplate_bef9184c45089963065496ba72a25fc467b58d678dd88c7456977382f16c39e0 extends Twig_Template
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
        echo "JdrCorp - Guildes - Cdb & Més
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<ul class=\"nav nav-tabs\">
    <li class=\"active\"><a href=\"#generiques\" data-toggle=\"tab\">Génériques</a></li>
    <li><a href=\"#maisons\" data-toggle=\"tab\">Maisons</a></li>
    <li><a href=\"#academie\" data-toggle=\"tab\">Académie</a></li>
</ul>

<div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"generiques\">
        ";
        // line 16
        $this->env->loadTemplate("JdrCorpGuildesBundle:Guildes:cdb_all.html.twig")->display($context);
        // line 17
        echo "    </div>

    <div class=\"tab-pane\" id=\"maisons\">
        ";
        // line 20
        $this->env->loadTemplate("JdrCorpGuildesBundle:Guildes:cdb_maisons.html.twig")->display($context);
        // line 21
        echo "    </div>
    <div class=\"tab-pane\" id=\"academie\">
        ";
        // line 23
        $this->env->loadTemplate("JdrCorpGuildesBundle:Guildes:cdb_academie.html.twig")->display($context);
        // line 24
        echo "    </div>
</div>


";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5a2fce2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5a2fce2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5a2fce2_cdb_1.js");
            // line 29
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "5a2fce2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5a2fce2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5a2fce2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:cdb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  72 => 28,  66 => 24,  64 => 23,  60 => 21,  58 => 20,  53 => 17,  51 => 16,  40 => 7,  37 => 6,  32 => 3,  29 => 2,);
    }
}
