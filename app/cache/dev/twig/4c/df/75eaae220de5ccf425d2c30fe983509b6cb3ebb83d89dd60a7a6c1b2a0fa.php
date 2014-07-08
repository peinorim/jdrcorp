<?php

/* JdrCorpGuildesBundle:Guildes:cdb_all.html.twig */
class __TwigTemplate_4cdf75eaae220de5ccf425d2c30fe983509b6cb3ebb83d89dd60a7a6c1b2a0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"panel-group\" id=\"accordionAll\">
    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionAll\" href=\"#collapseOne\">
                    Coups de bols
                </a>
            </h4>
        </div>
        <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
            <div class=\"panel-body\">
                ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listecdb_all"]) ? $context["listecdb_all"] : $this->getContext($context, "listecdb_all")));
        foreach ($context['_seq'] as $context["_key"] => $context["cdb_all"]) {
            // line 13
            echo "                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"thumbnail\">
                        <div class=\"caption\">
                            <b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb_all"]) ? $context["cdb_all"] : $this->getContext($context, "cdb_all")), "getNom"), "html", null, true);
            echo "</b>
                            <p><i>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb_all"]) ? $context["cdb_all"] : $this->getContext($context, "cdb_all")), "getEffet"), "html", null, true);
            echo "</i></p>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cdb_all'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionAll\" href=\"#collapseTwo\">
                    Mésaventures
                </a>
            </h4>
        </div>
        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemes_all"]) ? $context["listemes_all"] : $this->getContext($context, "listemes_all")));
        foreach ($context['_seq'] as $context["_key"] => $context["mes_all"]) {
            // line 36
            echo "                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"thumbnail\">
                        <div class=\"caption\">
                            <b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes_all"]) ? $context["mes_all"] : $this->getContext($context, "mes_all")), "getNom"), "html", null, true);
            echo "</b>
                            <p><i>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes_all"]) ? $context["mes_all"] : $this->getContext($context, "mes_all")), "getEffet"), "html", null, true);
            echo "</i></p>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes_all'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:cdb_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 45,  84 => 40,  80 => 39,  75 => 36,  71 => 35,  56 => 22,  45 => 17,  41 => 16,  36 => 13,  19 => 1,  76 => 29,  72 => 28,  66 => 24,  64 => 23,  60 => 21,  58 => 20,  53 => 17,  51 => 16,  40 => 7,  37 => 6,  32 => 12,  29 => 2,);
    }
}
