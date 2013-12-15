<?php

/* JdrCorpElricBundle:Elric:myCompContact.html.twig */
class __TwigTemplate_2a2bad4c68b33b03c78c182eaaed09dcdaad5b79adbcaad50e26f439431b7fb1 extends Twig_Template
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
        echo "<table id=\"myCompContact\">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComp"]) ? $context["listeComp"] : $this->getContext($context, "listeComp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 11
            echo "        <tr>
        ";
            // line 12
            if (((twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["myComp"]) ? $context["myComp"] : $this->getContext($context, "myComp"))) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal") != "")) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getType") == "C"))) {
                // line 13
                echo "            <td class=\"col-md-1\"><input type=\"checkbox\" checked=\"checked\"/></td><td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal"), "html", null, true);
                echo "%</td>
        ";
            } elseif (((twig_in_filter((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), (isset($context["myComp"]) ? $context["myComp"] : $this->getContext($context, "myComp"))) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getTotal") == "")) && ($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getType") == "C"))) {
                // line 15
                echo "            <td class=\"col-md-1\"><input type=\"checkbox\" checked=\"checked\"/></td><td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">___%</td>
        ";
            } elseif (($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getType") == "C")) {
                // line 17
                echo "            <td class=\"col-md-1\"><input type=\"checkbox\" disabled/></td><td class=\"col-md-4\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getBase"), "html", null, true);
                echo "%)</td><td class=\"col-md-2\">___</td>
        ";
            }
            // line 19
            echo "        </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:myCompContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  72 => 21,  65 => 19,  57 => 17,  49 => 15,  39 => 13,  37 => 12,  34 => 11,  130 => 34,  127 => 33,  124 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  44 => 9,  30 => 10,  26 => 6,  19 => 1,);
    }
}
