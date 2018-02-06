<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes_content.html.twig */
class __TwigTemplate_3684e8fb94663025c34a620f4b94db2d49706ef077a2cd3e5109166344d23701 extends Twig_Template
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
        echo "<div class=\"form-column\">
    <div class=\"form-group\">
        <textarea name=\"note\" id=\"note\" class=\"form-control\" placeholder=\"Your comment\"></textarea>
        <div class=\"block-attach-file\">
            <form enctype=\"multipart/form-data\">
                <input type=\"file\" id=\"attachmentFile\" name=\"attachmentFile\" class=\"attach-file\" >
            </form>
        </div>
    </div>
    <div class=\"clearfix\">
        <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes_content.html.twig", 12)->display(array_merge($context, array("show_cancel_link" => false, "save_button_title" => "Post")));
        // line 13
        echo "    </div>
</div>
<div class=\"comments-list\" style=\"max-height: 220px; overflow: hidden; overflow-y: scroll;\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getAttachments", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 17
            echo "        <article ";
            echo ">
            <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getCreator", array(), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "</h3>
            <div class=\"comment-text\">
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getText", array(), "method"), "html", null, true);
            echo "</p>
                ";
            // line 21
            if ( !(null === $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getFile", array(), "method"))) {
                // line 22
                echo "                    <a target=\"_blank\" class=\"file-link\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getDownloadUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getFilename", array(), "method"), "html", null, true);
                echo "</a>
                ";
            }
            // line 24
            echo "            </div>
            <div class=\"comment-footer\">
                <span class=\"post-created\">Posted at: ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getCreatedAt", array(), "method"), "y-m-d H:i:s"), "html", null, true);
            echo " </span>
                <span class=\"post-updated\">Updated at: ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getUpdatedAt", array(), "method"), "y-m-d H:i:s"), "html", null, true);
            echo " </span>
                        <span class=\"comment-controls\">
                            <a href=\"#\" class=\"comment-edit\"><i class=\"fa fa-pencil\"></i></a>
                            <a href=\"#\" class=\"comment-delete\"><i class=\"fa fa-times\"></i></a>
                        </span>
            </div>
            <input type=\"hidden\" class=\"noteId\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getId", array(), "method"), "html", null, true);
            echo "\" />
            <input type=\"hidden\" class=\"lead_id\" name=\"lead_id\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
            echo "\" />
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 39
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  99 => 37,  90 => 34,  86 => 33,  77 => 27,  73 => 26,  69 => 24,  61 => 22,  59 => 21,  55 => 20,  50 => 18,  46 => 17,  42 => 16,  37 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <div class="form-column">*/
/*     <div class="form-group">*/
/*         <textarea name="note" id="note" class="form-control" placeholder="Your comment"></textarea>*/
/*         <div class="block-attach-file">*/
/*             <form enctype="multipart/form-data">*/
/*                 <input type="file" id="attachmentFile" name="attachmentFile" class="attach-file" >*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*         {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Post'} %}*/
/*     </div>*/
/* </div>*/
/* <div class="comments-list" style="max-height: 220px; overflow: hidden; overflow-y: scroll;">*/
/*     {% for note in object.getAttachments() %}*/
/*         <article {#{{ loop.index > 2 ? "style='display:none'" : "" }}#}>*/
/*             <h3>{{ note.getAttachment().getCreator().getUsername() }}</h3>*/
/*             <div class="comment-text">*/
/*                 <p>{{ note.getAttachment().getText() }}</p>*/
/*                 {% if note.getAttachment().getFile() is not null %}*/
/*                     <a target="_blank" class="file-link" href="{{ note.getAttachment().getDownloadUrl() }}">{{ note.getAttachment().getFilename() }}</a>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="comment-footer">*/
/*                 <span class="post-created">Posted at: {{ note.getAttachment().getCreatedAt()|date('y-m-d H:i:s') }} </span>*/
/*                 <span class="post-updated">Updated at: {{ note.getAttachment().getUpdatedAt()|date('y-m-d H:i:s') }} </span>*/
/*                         <span class="comment-controls">*/
/*                             <a href="#" class="comment-edit"><i class="fa fa-pencil"></i></a>*/
/*                             <a href="#" class="comment-delete"><i class="fa fa-times"></i></a>*/
/*                         </span>*/
/*             </div>*/
/*             <input type="hidden" class="noteId" value="{{ note.getAttachment().getId() }}" />*/
/*             <input type="hidden" class="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*         </article>*/
/*     {% endfor %}*/
/* */
/*     {#<a href="#" class="show-more">Show All Notes</a>#}*/
/* </div>*/
