<?php

/* memberlist_email.html */
class __TwigTemplate_6dac0d6d1bbbf57eed368cdbdf9af6358386a1c0d018beff945cb52c957e5517 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "memberlist_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<div class=\"cat-head\">
";
        // line 6
        if (($context["S_CONTACT_ADMIN"] ?? null)) {
            // line 7
            echo "<span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_ADMIN");
            echo "</span>
";
        } elseif (        // line 8
($context["S_SEND_USER"] ?? null)) {
            // line 9
            echo "<span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_EMAIL_USER");
            echo "</span>
";
        } else {
            // line 11
            echo "<span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
            echo "</span>
";
        }
        // line 13
        echo "</div>

<form method=\"post\" action=\"";
        // line 15
        echo ($context["S_POST_ACTION"] ?? null);
        echo "\" id=\"post\">

\t";
        // line 17
        if (($context["CONTACT_INFO"] ?? null)) {
            // line 18
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"postbody\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
            // line 22
            echo ($context["CONTACT_INFO"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br class=\"clear\" />
\t
\t<div class=\"cat-head\"></div>
\t";
        }
        // line 31
        echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t<div class=\"content\">

\t\t";
        // line 36
        if (($context["ERROR_MESSAGE"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR_MESSAGE"] ?? null);
            echo "</p>";
        }
        // line 37
        echo "\t\t<fieldset class=\"fields2\">
\t\t";
        // line 38
        if (($context["S_SEND_USER"] ?? null)) {
            // line 39
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 40
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 41
            echo ($context["USERNAME_FULL"] ?? null);
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 44
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"1\" value=\"";
            // line 45
            echo ($context["SUBJECT"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } elseif (        // line 47
($context["S_CONTACT_ADMIN"] ?? null)) {
            // line 48
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 49
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 50
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMINISTRATOR");
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 52
            if ( !($context["S_IS_REGISTERED"] ?? null)) {
                // line 53
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
                // line 54
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENDER_EMAIL_ADDRESS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
                // line 55
                echo ($context["EMAIL"] ?? null);
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
                // line 58
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENDER_NAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"2\" value=\"";
                // line 59
                echo ($context["NAME"] ?? null);
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 62
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 63
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"3\" value=\"";
            // line 64
            echo ($context["SUBJECT"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } else {
            // line 67
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"email\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"2\" value=\"";
            // line 69
            echo ($context["EMAIL"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
            // line 72
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REAL_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"3\" value=\"";
            // line 73
            echo ($context["NAME"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang\">";
            // line 76
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEST_LANG");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 77
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEST_LANG_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"lang\">";
            // line 78
            echo ($context["S_LANG_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t\t</dl>
\t\t";
        }
        // line 81
        echo "\t\t<dl>
\t\t\t<dt><label for=\"message\">";
        // line 82
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_BODY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 83
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_BODY_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"4\">";
        // line 84
        echo ($context["MESSAGE"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t\t";
        // line 86
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 87
            echo "\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><label for=\"cc_sender\"><input type=\"checkbox\" name=\"cc_sender\" id=\"cc_sender\" value=\"1\" checked=\"checked\" tabindex=\"5\" /> ";
            // line 89
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CC_SENDER");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 92
        echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">
\t<div class=\"content\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"button1\" value=\"";
        // line 102
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_EMAIL");
        echo "\" />
\t\t</fieldset>
\t</div>
\t</div>
";
        // line 106
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</div>

</form>

";
        // line 111
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 111)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 111,  275 => 106,  268 => 102,  256 => 92,  250 => 89,  246 => 87,  244 => 86,  239 => 84,  235 => 83,  230 => 82,  227 => 81,  221 => 78,  217 => 77,  212 => 76,  206 => 73,  201 => 72,  195 => 69,  190 => 68,  187 => 67,  181 => 64,  176 => 63,  173 => 62,  167 => 59,  162 => 58,  156 => 55,  151 => 54,  148 => 53,  146 => 52,  141 => 50,  136 => 49,  133 => 48,  131 => 47,  126 => 45,  121 => 44,  115 => 41,  110 => 40,  107 => 39,  105 => 38,  102 => 37,  96 => 36,  89 => 31,  77 => 22,  71 => 18,  69 => 17,  64 => 15,  60 => 13,  54 => 11,  48 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_email.html", "");
    }
}
