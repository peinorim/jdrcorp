<?php

/* JdrCorpGuildesBundle:Guildes:cdb_academie.html.twig */
class __TwigTemplate_f3081b2ad971a088586de65f264db2b1f46afe150a3679c49f2f0da24a8b9322 extends Twig_Template
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
        echo "<div class=\"panel-group\" id=\"accordionAca\">
    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionAca\" href=\"#acaOne\">
                    Coups de bols
                </a>
            </h4>
        </div>
        <div id=\"acaOne\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listecdbacademie"]) ? $context["listecdbacademie"] : $this->getContext($context, "listecdbacademie")));
        foreach ($context['_seq'] as $context["_key"] => $context["cdb"]) {
            // line 13
            echo "                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"thumbnail\">
                        <div class=\"caption\">
                            <b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getNom"), "html", null, true);
            echo "</b>
                            <p><i>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getEffet"), "html", null, true);
            echo "</i></p>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cdb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionAca\" href=\"#acaTwo\">
                    Mésaventures
                </a>
            </h4>
        </div>
        <div id=\"acaTwo\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemesacademie"]) ? $context["listemesacademie"] : $this->getContext($context, "listemesacademie")));
        foreach ($context['_seq'] as $context["_key"] => $context["mes"]) {
            // line 36
            echo "                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"thumbnail\">
                        <div class=\"caption\">
                            <b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "getNom"), "html", null, true);
            echo "</b>
                            <p><i>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "getEffet"), "html", null, true);
            echo "</i></p>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:cdb_academie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  101 => 36,  89 => 31,  81 => 26,  77 => 25,  67 => 21,  62 => 19,  57 => 16,  54 => 15,  50 => 14,  38 => 8,  34 => 7,  26 => 3,  22 => 2,  95 => 45,  84 => 40,  80 => 39,  75 => 36,  71 => 35,  56 => 22,  45 => 17,  41 => 16,  36 => 13,  19 => 1,  76 => 29,  72 => 28,  66 => 24,  64 => 23,  60 => 21,  58 => 20,  53 => 17,  51 => 16,  40 => 7,  37 => 6,  32 => 12,  29 => 4,);
    }
}
