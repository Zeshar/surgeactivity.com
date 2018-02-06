<?php

/* ZesharCRMCoreBundle:FormItems:leadScoringBlock.html.twig */
class __TwigTemplate_4ab05bc7b384788a9695298a8d4501d36e4033fcc9a276c42633152ede531284 extends Twig_Template
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
        echo "<ul class=\"criteria-list\">
    <li>
        <b>Criteria *</b>
        <ul>

            ";
        // line 23
        echo "
            ";
        // line 24
        if ((isset($context["rootCriteria"]) ? $context["rootCriteria"] : null)) {
            // line 25
            echo "                <ul style=\"margin-left:20px\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rootCriteria"]) ? $context["rootCriteria"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                        ";
                echo $this->getAttribute($this, "recursiveCriteria", array(0 => $context["item"], 1 => (isset($context["chosen"]) ? $context["chosen"] : null)), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </ul>
            ";
        }
        // line 31
        echo "
        </ul>
    </li>
    <li>
        <b>Total *</b><br/>
        <input readonly name=\"scoring-total\" class=\"criteria-score\" type=\"text\" value=\"\"/>
    </li>
</ul>";
    }

    // line 6
    public function getrecursiveCriteria($__criteria__ = null, $__chosen__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "criteria" => $__criteria__,
            "chosen" => $__chosen__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "                <li>
                    ";
            // line 8
            if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "children", array()))) {
                // line 9
                echo "                        <label>
                            <input class=\"criteria-input\" data-criteria-value=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "portionScore", array()), "html", null, true);
                echo "\" name=\"criteria[]\" ";
                if (twig_in_filter($this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "id", array()), (isset($context["chosen"]) ? $context["chosen"] : null))) {
                    echo " checked=\"checked\" ";
                }
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "id", array()), "html", null, true);
                echo "\" type=\"checkbox\"/>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "name", array()), "html", null, true);
                echo "
                        </label>

                    ";
            } else {
                // line 14
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "name", array()), "html", null, true);
                echo "
                        <ul style=\"margin-left:20px\">
                            ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["criteria"]) ? $context["criteria"] : null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 17
                    echo "                                ";
                    echo $this->getAttribute($this, "recursiveCriteria", array(0 => $context["child"], 1 => (isset($context["chosen"]) ? $context["chosen"] : null)), "method");
                    echo "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                        </ul>
                    ";
            }
            // line 21
            echo "                </li>
            ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:leadScoringBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 21,  117 => 19,  108 => 17,  104 => 16,  98 => 14,  83 => 10,  80 => 9,  78 => 8,  75 => 7,  62 => 6,  51 => 31,  47 => 29,  38 => 27,  34 => 26,  31 => 25,  29 => 24,  26 => 23,  19 => 1,);
    }
}
/* <ul class="criteria-list">*/
/*     <li>*/
/*         <b>Criteria *</b>*/
/*         <ul>*/
/* */
/*             {% macro recursiveCriteria(criteria, chosen) %}*/
/*                 <li>*/
/*                     {% if not criteria.children|length %}*/
/*                         <label>*/
/*                             <input class="criteria-input" data-criteria-value="{{ criteria.portionScore }}" name="criteria[]" {% if(criteria.id in chosen) %} checked="checked" {% endif %}value="{{ criteria.id }}" type="checkbox"/>{{ criteria.name }}*/
/*                         </label>*/
/* */
/*                     {% else %}*/
/*                         {{ criteria.name }}*/
/*                         <ul style="margin-left:20px">*/
/*                             {% for child in criteria.children %}*/
/*                                 {{ _self.recursiveCriteria(child, chosen) }}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 </li>*/
/*             {% endmacro %}*/
/* */
/*             {% if rootCriteria %}*/
/*                 <ul style="margin-left:20px">*/
/*                     {% for item in rootCriteria %}*/
/*                         {{ _self.recursiveCriteria(item, chosen) }}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/* */
/*         </ul>*/
/*     </li>*/
/*     <li>*/
/*         <b>Total *</b><br/>*/
/*         <input readonly name="scoring-total" class="criteria-score" type="text" value=""/>*/
/*     </li>*/
/* </ul>*/
