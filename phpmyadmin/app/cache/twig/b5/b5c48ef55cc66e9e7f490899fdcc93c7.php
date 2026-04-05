<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* server/replication/primary_add_replica_user.twig */
class __TwigTemplate_69e3364a32abe5803c3c20fe03872857 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"primary_addreplicauser_gui\">
  <form action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\" autocomplete=\"off\" id=\"addUsersForm\" class=\"card\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs("", "");
        yield "
    <input type=\"hidden\" name=\"grant_count\" value=\"25\">
    <input type=\"hidden\" name=\"createdb\" id=\"createdb_0\" value=\"0\">
    ";
        // line 7
        yield "    <input type=\"hidden\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\">
    <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">

    <div class=\"card-header\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add replica replication user"), "html", null, true);
        yield "</div>

    <div class=\"card-body\" id=\"fieldset_add_user_login\">
      <div class=\"item\">
        <label for=\"select_pred_username\">
          ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\">
          <select name=\"pred_username\" id=\"select_pred_username\" title=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "\">
            <option value=\"any\"";
        // line 20
        yield ((((isset($context["predefined_username"]) || array_key_exists("predefined_username", $context) ? $context["predefined_username"] : (function () { throw new RuntimeError('Variable "predefined_username" does not exist.', 20, $this->source); })()) == "any")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any user"), "html", null, true);
        yield "</option>
            <option value=\"userdefined\"";
        // line 21
        yield ((((isset($context["predefined_username"]) || array_key_exists("predefined_username", $context) ? $context["predefined_username"] : (function () { throw new RuntimeError('Variable "predefined_username" does not exist.', 21, $this->source); })()) == "userdefined")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field:"), "html", null, true);
        yield "</option>
          </select>
        </span>
        <input type=\"text\" name=\"username\" id=\"pma_username\" maxlength=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username_length"]) || array_key_exists("username_length", $context) ? $context["username_length"] : (function () { throw new RuntimeError('Variable "username_length" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"select_pred_hostname\">
          ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\">
          <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host"), "html", null, true);
        yield "\"";
        // line 33
        if ((($tmp =  !(null === (isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 33, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " data-thishost=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
            <option value=\"any\"";
        // line 34
        yield ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 34, $this->source); })()) == "any")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any host"), "html", null, true);
        yield "</option>
            <option value=\"localhost\"";
        // line 35
        yield ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 35, $this->source); })()) == "localhost")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Local"), "html", null, true);
        yield "</option>
            ";
        // line 36
        if ((($tmp =  !(null === (isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 36, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "              <option value=\"thishost\"";
            yield ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 37, $this->source); })()) == "thishost")) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This host"), "html", null, true);
            yield "</option>
            ";
        }
        // line 39
        yield "            <option value=\"hosttable\"";
        yield ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 39, $this->source); })()) == "hosttable")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use host table"), "html", null, true);
        yield "</option>
            <option value=\"userdefined\"";
        // line 40
        yield ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 40, $this->source); })()) == "userdefined")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field:"), "html", null, true);
        yield "</option>
          </select>
        </span>
        <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname_length"]) || array_key_exists("hostname_length", $context) ? $context["hostname_length"] : (function () { throw new RuntimeError('Variable "hostname_length" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 44
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("When Host table is used, this field is ignored and values stored in Host table are used instead."));
        yield "
      </div>

      <div class=\"item\">
        <label for=\"select_pred_password\">
          ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\">
          <select name=\"pred_password\" id=\"select_pred_password\" title=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "\">
            <option value=\"none\"";
        // line 53
        yield (((($tmp = (isset($context["has_username"]) || array_key_exists("has_username", $context) ? $context["has_username"] : (function () { throw new RuntimeError('Variable "has_username" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No password"), "html", null, true);
        yield "</option>
            <option value=\"userdefined\"";
        // line 54
        yield (((($tmp =  !(isset($context["has_username"]) || array_key_exists("has_username", $context) ? $context["has_username"] : (function () { throw new RuntimeError('Variable "has_username" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field:"), "html", null, true);
        yield "</option>
          </select>
        </span>
        <input type=\"password\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"text_pma_pw2\">
          ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Re-type:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\"></span>
        <input type=\"password\" id=\"text_pma_pw2\" name=\"pma_pw2\" title=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Re-type"), "html", null, true);
        yield "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"button_generate_password\">
          ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Generate password:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\">
          <input type=\"button\" class=\"btn btn-secondary button\" id=\"button_generate_password\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Generate"), "html", null, true);
        yield "\">
        </span>
        <input type=\"text\" name=\"generated_pw\" id=\"generated_pw\">
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/replication/primary_add_replica_user.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  237 => 80,  227 => 73,  221 => 70,  213 => 65,  207 => 62,  199 => 57,  191 => 54,  185 => 53,  181 => 52,  175 => 49,  167 => 44,  159 => 43,  151 => 40,  144 => 39,  136 => 37,  134 => 36,  128 => 35,  122 => 34,  114 => 33,  111 => 32,  105 => 29,  93 => 24,  85 => 21,  79 => 20,  75 => 19,  69 => 16,  61 => 11,  55 => 7,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"primary_addreplicauser_gui\">
  <form action=\"{{ url('/server/privileges') }}\" method=\"post\" autocomplete=\"off\" id=\"addUsersForm\" class=\"card\">
    {{ get_hidden_inputs('', '') }}
    <input type=\"hidden\" name=\"grant_count\" value=\"25\">
    <input type=\"hidden\" name=\"createdb\" id=\"createdb_0\" value=\"0\">
    {# Needed for the replication replicas. #}
    <input type=\"hidden\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\">
    <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">

    <div class=\"card-header\">{{ t('Add replica replication user') }}</div>

    <div class=\"card-body\" id=\"fieldset_add_user_login\">
      <div class=\"item\">
        <label for=\"select_pred_username\">
          {{ t('User name:') }}
        </label>
        <span class=\"options\">
          <select name=\"pred_username\" id=\"select_pred_username\" title=\"{{ t('User name') }}\">
            <option value=\"any\"{{ predefined_username == 'any' ? ' selected' }}>{{ t('Any user') }}</option>
            <option value=\"userdefined\"{{ predefined_username == 'userdefined' ? ' selected' }}>{{ t('Use text field:') }}</option>
          </select>
        </span>
        <input type=\"text\" name=\"username\" id=\"pma_username\" maxlength=\"{{ username_length }}\" title=\"{{ t('User name') }}\" value=\"{{ username }}\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"select_pred_hostname\">
          {{ t('Host:') }}
        </label>
        <span class=\"options\">
          <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"{{ t('Host') }}\"
            {%- if this_host is not null %} data-thishost=\"{{ this_host }}\"{% endif %}>
            <option value=\"any\"{{ predefined_hostname == 'any' ? ' selected' }}>{{ t('Any host') }}</option>
            <option value=\"localhost\"{{ predefined_hostname == 'localhost' ? ' selected' }}>{{ t('Local') }}</option>
            {% if this_host is not null %}
              <option value=\"thishost\"{{ predefined_hostname == 'thishost' ? ' selected' }}>{{ t('This host') }}</option>
            {% endif %}
            <option value=\"hosttable\"{{ predefined_hostname == 'hosttable' ? ' selected' }}>{{ t('Use host table') }}</option>
            <option value=\"userdefined\"{{ predefined_hostname == 'userdefined' ? ' selected' }}>{{ t('Use text field:') }}</option>
          </select>
        </span>
        <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"{{ hostname_length }}\" title=\"{{ t('Host') }}\" value=\"{{ hostname }}\">
        {{ show_hint(t('When Host table is used, this field is ignored and values stored in Host table are used instead.')) }}
      </div>

      <div class=\"item\">
        <label for=\"select_pred_password\">
          {{ t('Password:') }}
        </label>
        <span class=\"options\">
          <select name=\"pred_password\" id=\"select_pred_password\" title=\"{{ t('Password') }}\">
            <option value=\"none\"{{ has_username ? ' selected' }}>{{ t('No password') }}</option>
            <option value=\"userdefined\"{{ not has_username ? ' selected' }}>{{ t('Use text field:') }}</option>
          </select>
        </span>
        <input type=\"password\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"{{ t('Password') }}\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"text_pma_pw2\">
          {{ t('Re-type:') }}
        </label>
        <span class=\"options\"></span>
        <input type=\"password\" id=\"text_pma_pw2\" name=\"pma_pw2\" title=\"{{ t('Re-type') }}\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"button_generate_password\">
          {{ t('Generate password:') }}
        </label>
        <span class=\"options\">
          <input type=\"button\" class=\"btn btn-secondary button\" id=\"button_generate_password\" value=\"{{ t('Generate') }}\">
        </span>
        <input type=\"text\" name=\"generated_pw\" id=\"generated_pw\">
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"{{ t('Go') }}\">
    </div>
  </form>
</div>
", "server/replication/primary_add_replica_user.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/primary_add_replica_user.twig");
    }
}
