<?php

/* ZesharCRMCoreBundle:Widget:performance.html.twig */
class __TwigTemplate_8a9f959acbb636871a2418eb8566c590a4f2452ce47938aeb50b2f24b1858270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget' => array($this, 'block_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('widget', $context, $blocks);
    }

    public function block_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"box\" style=\"margin:10px auto\">
        <div class=\"box-body \">
            ";
        // line 4
        if ( !twig_test_empty((isset($context["persons"]) ? $context["persons"] : null))) {
            // line 5
            echo "                <select class=\"user_data\">
                    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 7
                echo "                        <option ";
                if (((isset($context["selectedUser"]) ? $context["selectedUser"] : null) == $this->getAttribute($context["person"], "username", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "username", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "                </select>
            ";
        }
        // line 11
        echo "            <h3>Performance</h3>
            <table class=\"table\" style=\"border: solid 1px darkgrey;border-collapse: collapse; width: 96%;margin:3px\">
                <tbody>
                ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : null)) != 0)) {
            // line 15
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 16
                echo "                        ";
                if ((twig_length_filter($this->env, $context["value"]) != 0)) {
                    // line 17
                    echo "                            <tr >
                                <td rowspan=\"";
                    // line 18
                    echo twig_escape_filter($this->env, (twig_length_filter($this->env, $context["value"]) + 1), "html", null, true);
                    echo "\" style=\"border: 1px solid darkgrey;padding: 5px\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["humanTitles"]) ? $context["humanTitles"] : null), $context["key"], array(), "array"), "html", null, true);
                    echo "</td>
                            </tr >
                            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                        // line 21
                        echo "                                <tr >
                                    <td  style=\"border: 1px solid darkgrey;padding: 5px\" >";
                        // line 22
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo " : ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["value2"], "current", array()) / $this->getAttribute($context["value2"], "estimated", array())) * 100), 2), "html", null, true);
                        echo " %</td>
                                </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                        ";
                } else {
                    // line 26
                    echo "                            <tr >
                                <td  style=\"border: 1px solid darkgrey;padding: 5px\" >";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["humanTitles"]) ? $context["humanTitles"] : null), $context["key"], array(), "array"), "html", null, true);
                    echo "</td>
                                <td  style=\"border: 1px solid darkgrey;padding: 5px\" >Empty</td>
                            </tr>
                        ";
                }
                // line 31
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                ";
        } else {
            // line 33
            echo "                    <tr >
                        <td  style=\"border: 1px solid darkgrey;padding: 5px\" >No operation!</td>
                    </tr>
                ";
        }
        // line 37
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:performance.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  121 => 33,  118 => 32,  112 => 31,  105 => 27,  102 => 26,  99 => 25,  88 => 22,  85 => 21,  81 => 20,  74 => 18,  71 => 17,  68 => 16,  63 => 15,  61 => 14,  56 => 11,  52 => 9,  39 => 7,  35 => 6,  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }
}
/* {% block widget %}*/
/*     <div class="box" style="margin:10px auto">*/
/*         <div class="box-body ">*/
/*             {% if persons is not empty %}*/
/*                 <select class="user_data">*/
/*                     {% for person in persons %}*/
/*                         <option {% if selectedUser == person.username %} selected {% endif %}>{{ person.username}}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             {% endif %}*/
/*             <h3>Performance</h3>*/
/*             <table class="table" style="border: solid 1px darkgrey;border-collapse: collapse; width: 96%;margin:3px">*/
/*                 <tbody>*/
/*                 {% if data|length != 0 %}*/
/*                     {% for key, value in data %}*/
/*                         {% if value|length != 0 %}*/
/*                             <tr >*/
/*                                 <td rowspan="{{ value|length +1 }}" style="border: 1px solid darkgrey;padding: 5px" >{{ humanTitles[key] }}</td>*/
/*                             </tr >*/
/*                             {% for key2, value2 in value %}*/
/*                                 <tr >*/
/*                                     <td  style="border: 1px solid darkgrey;padding: 5px" >{{ key2 }} : {{ (value2.current / value2.estimated *100)| number_format(2) }} %</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             <tr >*/
/*                                 <td  style="border: 1px solid darkgrey;padding: 5px" >{{ humanTitles[key] }}</td>*/
/*                                 <td  style="border: 1px solid darkgrey;padding: 5px" >Empty</td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     <tr >*/
/*                         <td  style="border: 1px solid darkgrey;padding: 5px" >No operation!</td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
