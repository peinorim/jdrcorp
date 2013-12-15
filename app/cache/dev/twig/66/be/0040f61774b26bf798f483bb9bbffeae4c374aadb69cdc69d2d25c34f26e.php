<?php

/* JdrCorpElricBundle:Elric:mySorts.html.twig */
class __TwigTemplate_66be0040f61774b26bf798f483bb9bbffeae4c374aadb69cdc69d2d25c34f26e extends Twig_Template
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
        echo "<table id=\"mySorts\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["mySorts"]) ? $context["mySorts"] : $this->getContext($context, "mySorts")));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 11
            echo "        <tr>
            <td class=\"col-md-2\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getSortNom"), "html", null, true);
            echo "</td>
        </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:mySorts.html.twig";
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
