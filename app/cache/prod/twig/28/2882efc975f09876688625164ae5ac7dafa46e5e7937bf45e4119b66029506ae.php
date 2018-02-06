<?php

/* ZesharCRMCoreBundle:Widget:need.html.twig */
class __TwigTemplate_a106067cf4882f4b9e1cbe410ff00c190bf2f3eb03600bcfb10e72cd6ed360b9 extends Twig_Template
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
        echo "            <table class=\"table\" style=\"border: solid 1px darkgrey;border-collapse: collapse; width: 96%;margin:3px\">
                 <thead>
                   <tr>
                       <th>Title</th>
                   </tr>
                 </thead>
                 <tbody>
                 ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 19
            echo "                     <tr >
                         <td style=\"border: 1px solid darkgrey;padding: 5px\" >";
            // line 20
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
                         <td style=\"border: 1px solid darkgrey;padding: 5px\" >";
            // line 21
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</td>
                     </tr>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                 </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:need.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  76 => 21,  72 => 20,  69 => 19,  65 => 18,  56 => 11,  52 => 9,  39 => 7,  35 => 6,  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
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
/*             <table class="table" style="border: solid 1px darkgrey;border-collapse: collapse; width: 96%;margin:3px">*/
/*                  <thead>*/
/*                    <tr>*/
/*                        <th>Title</th>*/
/*                    </tr>*/
/*                  </thead>*/
/*                  <tbody>*/
/*                  {% for key, value in data %}*/
/*                      <tr >*/
/*                          <td style="border: 1px solid darkgrey;padding: 5px" >{{ key }}</td>*/
/*                          <td style="border: 1px solid darkgrey;padding: 5px" >{{ value }}</td>*/
/*                      </tr>*/
/*                  {% endfor %}*/
/*                  </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
